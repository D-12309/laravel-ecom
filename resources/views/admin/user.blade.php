@extends('admin/layout')
@section('page_title','User Page')
@section('user_select','active')
@section('container')
    <!-- page content -->
    <div class="right_col" role="main" style="min-height: 1197px;">
        <div>
            <div class="page-title">
                <div class="title_left">
                    <h3>Users</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title">#</th>
                                        <th class="column-title">User Name</th>
                                        <th class="column-title">Email Address</th>
                                        <th class="column-title">Contact No.</th>
                                        <th class="column-title">Pin Code</th>
                                        <th class="column-title">Created At</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($data as $list)
                                        <tr class="even pointer">
                                            <td class=" ">{{$list->id}}</td>
                                            <td class=" ">{{$list->name}}</td>
                                            <td class=" ">{{$list->email}}</td>
                                            <td class=" ">{{$list->contact_no}}</td>
                                            <td class=" ">{{$list->pin_code}}</td>
                                            <td class=" ">{{\Carbon\Carbon::parse($list->created_at)->format('l jS \of F Y h:i:s A')}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $data->links() !!}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

