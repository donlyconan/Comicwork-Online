@extends('admin.layouts.admin-master')

@section('title')
    <title>List Countries</title>
@endsection


@section('css')
    {{--    <link href="{{ asset('admins/comicworks/index.css') }}" rel="stylesheet"/>--}}
@endsection

@section('content')
    <div class="content-wrapper">

    @include('admin.admin-patials.content-header', ['name' => 'Countries', 'action' => 'List', 'route' => 'http://127.0.0.1:8000/admin/countries/index'])

    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="mytable" class="table table-striped table-bordered display"

                                               role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Rendering engine: activate to sort column ascending"
                                                >Id
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Browser: activate to sort column descending"
                                                    aria-sort="ascending">Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending"
                                                >Created_at
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending"
                                                >Updated_at
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 210px"
                                                >...
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($data as $row)
                                                <tr role="row" class="odd">
                                                    <td class="">{{$row->id}}</td>
                                                    <td class="sorting_1">{{$row->name}}</td>
                                                    <td>{{$row->created_at}}</td>
                                                    <td>{{$row->updated_at}}</td>
                                                    <td class="project-actions text-right">
{{--                                                        <a class="btn btn-primary btn-sm"--}}
{{--                                                           href="{{route('admin.countries.show', ['id' => $row->id])}}">--}}
{{--                                                            <i class="fas fa-folder"></i>--}}
{{--                                                            View--}}
{{--                                                        </a>--}}
                                                        <a class="btn btn-info btn-sm"
                                                           href="{{route('admin.countries.edit', ['id' => $row->id])}}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </a>
                                                        <a class="btn btn-danger btn-sm delete-record" href=""

                                                           data-toggle="modal" data-target="#modal-danger"
                                                           data-url="{{route('admin.countries.destroy', ['id' => $row->id])}}">
                                                            <i class="fas fa-trash"></i>
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Id</th>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Created_at</th>
                                                <th rowspan="1" colspan="1">Updated_at</th>
                                                <th rowspan="1" colspan="1"></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>


                                {{--                                <div class="row">--}}
                                {{--                                    <div class="col-sm-12 col-md-9">--}}
                                {{--                                        <div class="dataTables_info" id="example1_info" role="status"--}}
                                {{--                                             aria-live="polite">Showing 1 to 10 of 57 entries--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}

                                {{--                                    <div class="col-sm-12 col-md-3">--}}
                                {{--                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">--}}
                                {{--                                            <ul class="pagination">--}}
                                {{--                                                <li class="paginate_button page-item previous disabled"--}}
                                {{--                                                    id="example1_previous">--}}
                                {{--                                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"--}}
                                {{--                                                       class="page-link">Previous</a>--}}
                                {{--                                                </li>--}}
                                {{--                                                {!! $data->links() !!}--}}
                                {{--                                                <li class="paginate_button page-item next disabled" id="example1_next">--}}
                                {{--                                                    <a href="#" aria-controls="example1" tabindex="0"--}}
                                {{--                                                       class="page-link">Next</a>--}}
                                {{--                                                </li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

        <!-- .danger modal -->
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">Warning!!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete this Country record!!</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <a id="id-confirm-delete-record" href="" data-url=""
                           class="btn btn-outline-light confirm-delete-record"
                           data-dismiss="modal"
                        >Confirm</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /.content -->
    </div>
@endsection

@section('js')
    {{--    <script src="{{ asset('admins/comicworks/index.js') }}"></script>--}}
@endsection


