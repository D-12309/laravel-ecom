<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->perPage = env('PER_PAGE_RECORD') ?? 1;
    }

    public function index()
    {
        $category['data'] = Category::orderby('id', 'desc')->paginate($this->perPage);
        return view('admin/category', $category);
    }

    public function manage_category(Request $request, $id = '')
    {
        if ($id > 0) {
            $category = Category::where(['id' => $id])->first();
            $result['name'] = $category->name;
            $result['image'] = $category->image;
            $result['id'] = $category->id;
        } else {
            $result['name'] = "";
            $result['image'] = "";
            $result['id'] = 0;
        }

        return view('admin/manage_category', $result);
    }

    public function manage_category_process(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$request->post('id')
        ]);
        $categoryImage = null;


        if ($request->post('id') > 0) {
            $category = Category::find($request->post('id'));
            $msg = "Project updated";

            if ($image = $request->file('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                if (file_exists(public_path('image/'.$category->image))) {
                    unlink('image/'.$category->image);
                }
                $destinationPath = 'image/';
                $categoryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $categoryImage);
                $category->image = $categoryImage;
            }

        } else {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $category = new Category();
            $msg = "Project saved";
            if ($image = $request->file('image')) {

                $destinationPath = 'image/';
                $categoryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $categoryImage);
                $category->image = $categoryImage;
            }
        }

        $category->name = $request->post('name');
        $category->save();
        return redirect('admin/categories');
    }

    public function delete(Request $request, $id)
    {
        $project = Project::where('id', $id)->delete();
        Alert::error('Delete', 'project Deleted');
        return redirect('admin/project');
    }
}
