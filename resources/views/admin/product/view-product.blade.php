@extends('admin.master')

@section('title')
    View Product
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

                        <tr>
                            <th>Product ID</th>
                            <th>{{ $product->id }}</th>

                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <th>{{ $product->category_name }}</th>

                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <th>{{ $product->brand_name }}</th>

                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <th>{{ $product->product_name }}</th>

                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <th>{{ $product->product_code }}</th>

                        </tr> <tr>
                            <th>Product Price</th>
                            <th>{{ $product->product_price }}</th>

                        </tr> <tr>
                            <th>Product Quantity</th>
                            <th>{{ $product->product_quantity }}</th>

                        </tr> <tr>
                            <th>Product Short Description</th>
                            <th>{{ $product->short_description }}</th>

                        </tr> <tr>
                            <th>Product Long Description</th>
                            <th>{{ $product->long_description }}</th>

                        </tr> <tr>
                            <th>Product Image</th>
                            <th>
                            <img src="{{ asset($product->product_image) }}" height="80" width="80"/>
                            </th>

                        </tr> <tr>
                            <th>Publication Status</th>
                            <th>{{ $product->publication_status ==1 ?"Published" :"Unpublished" }}</th>

                        </tr>


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
