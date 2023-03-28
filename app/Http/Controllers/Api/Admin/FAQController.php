<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Support\Facades\Request;


class FAQController extends Controller
{
    public $successStatus = 200;
    public function faqs(Request $request) {
        $result['faqs'] = Faq::all();
        return response()->json(['data' => $result], $this->successStatus);
    }
}
