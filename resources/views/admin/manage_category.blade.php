@extends('admin/layout')
@section('page_title','Manage Category')
@section('category_select','active')
@section('container')
    <!-- page content -->
    <div class="right_col" role="main" style="min-height: 1197px;">
        <div>
            <div class="page-title">
                <div class="title_left">
                    <h3>Manage Category</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px">
                    <div class="x_panel">
                        <div class="x_content">
                            <br>
                            <form id="demo-form2" method="post" action="{{route('category.manage_category_process')}}"
                                  data-parsley-validate="" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="Application Submitted">Category Name<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="is_application_submitted" name="name"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$name ? $name : old('name')}}">
                                        @error('name')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="Application Submitted">Category Image<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="is_application_submitted" name="image"
                                               class="form-control col-md-7 col-xs-12">
                                        <img src="/image/{{$image }}" width="300px">
                                        @error('image')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="{{$id}}"/>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="{{url('admin/categories')}}">Cancel</a>
                                        <button type="submit" class="btn btn-success">Save Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
