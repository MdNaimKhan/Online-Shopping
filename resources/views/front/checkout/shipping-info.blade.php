@extends('front.master')

@section('title')
    Product Details
@endsection

@section('content')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Cart</span></h3>
        </div>
    </div>


    <div class="content">


        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 >
                    Welcome <b style="color: #1ab7ea">{{ Session::get('customerName') }}</b> . Please give shipping info to complete order
                    <br/>
                    if registration info and shipping info is same then just press save shipping info button
                </h3>
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel-body ">
                            <h3 class="text-center text-success">Shipping Info</h3>
                            <br/>
                            <form class="form-horizontal" action="{{ url('/new-shipping') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text"  value="{{ $customer->first_name.' '.$customer->last_name }}" name="full_name" class="form-control"/>
                                        {{ $errors->has('full_name')?$errors->first('full_name') : ' ' }}
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="{{ $customer->email }}" name="email" class="form-control"/>
                                        {{ $errors->has('email')?$errors->first('email') : ' ' }}
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" value="{{ $customer->phone_number }}" name="phone_number" class="form-control"/>
                                        {{ $errors->has('phone_number')?$errors->first('phone_number') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Address</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="address" class="form-control">{{ $customer->address }}</textarea>
                                        {{ $errors->has('address')?$errors->first('address') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Shipping Info"/>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection