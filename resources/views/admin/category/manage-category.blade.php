@extends('admin.master')

@section('title')
    Manage Category
@endsection
@section('content')

            <div class="row">
                <br/>

                <div class="col-lg-12">
                    @if($message= Session::get('message') )
                    <h1 class="page-header">{{ $message }}</h1>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $i=1 ;?>
                                @foreach($allCategories as $allCategory)
                                <tr class="odd gradeX">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $allCategory->id }}</td>
                                    <td>{{ $allCategory->category_name }}</td>
                                    <td class="center">{{ $allCategory->category_description }}</td>
                                    <td class="center">{{ $allCategory->publication_status ==1 ?"Published" :"Unpublished" }}</td>
                                    <td class="center">

                                        @if($allCategory->publication_status ==1)
                                            <a href="{{ url('/unpublished-category/'.$allCategory-> id) }}" class="btn btn-success btn-xs" title="Published Category">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ url('/published-category/'.$allCategory-> id) }}" class="btn btn-warning btn-xs" title="Unpublished Category">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>

                                        @endif


                                        <a href="{{ url('/edit-category/'.$allCategory-> id) }}" class="btn btn-primary btn-xs" title="Edit Category">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ url('/delete-category/'.$allCategory-> id) }}" class="btn btn-danger btn-xs" title="Delete Category" onclick="return confirm('Are You Sure?')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>

                                    </td>
                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

@endsection
