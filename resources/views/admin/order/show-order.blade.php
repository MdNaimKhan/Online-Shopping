@extends('admin.master')

@section('title')
    Show Order
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
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Phone Number</th>
                            <th>Order Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $i=1 ;?>
                        @foreach($orders as $order)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->id }}</td>

                                <td class="center">{{ $order->first_name.' '.$order->last_name }}</td>
                                <td class="center">TK. {{ $order->order_total }}</td>
                                <td class="center">{{ $order->order_status }}</td>
                                <td class="center">{{ $order->payment_type }}</td>
                                <td class="center">{{ $order->payment_status }}</td>
                                <td class="center">{{ $order->phone_number }}</td>

                                <td class="center">{{ $order->created_at}}</td>
                                <td class="center">


                                        <a href="{{ url('/edit-order/'.$order-> id) }}" class="btn btn-success btn-xs" title="edit order">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                    <a href="{{ url('//'.$order-> id) }}" class="btn btn-danger btn-xs" title="Delete order" onclick="return confirm('Are You Sure?')">
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
