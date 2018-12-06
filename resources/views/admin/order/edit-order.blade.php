@extends('admin.master')

@section('title')
    Edit Order
@endsection
@section('content')
    <br/>
    <div class="col-sm-12">
        <div class="well">
            <h1>{{ Session::get('message') }}</h1>
            <form name="edit_order_form" action="{{ url('/update-order') }}"  method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3">Order Status</label>
                    <div class="col-sm-9">
                        <select name="order_status" class="form-control">
                            <option value="Pending">Pending</option>
                            <option value="Complete">Complete</option>
                        </select>
                         <input type="hidden" name="order_id" class="form-control" value="{{ $ordersInfo->id }}">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3">Payment Status</label>
                    <div class="col-sm-9">
                        <select name="payment_status" class="form-control">
                            <option value="Pending">Pending</option>
                            <option value="Complete">Complete</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" value="Update Order Info" name="btn" class="btn btn-success btn-block">
                    </div>
                </div>

            </form>

        </div>


    </div>
    <script>
        document.forms['edit_order_form'].elements['payment_status'].value='{{$ordersInfo->payment_status}}';
        document.forms['edit_order_form'].elements['order_status'].value='{{$ordersInfo->order_status}}';
    </script>
@endsection
