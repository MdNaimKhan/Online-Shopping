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
                <h3 class="tittle1">You have to login to complete your order.</h3>
                <div class="row">
                    <div class="col-sm-6">

                        <div class="panel-body ">
                            <h3 class="text-center text-success">Log In Form</h3>
                            <br/>
                            <form name="login_form" class="form-horizontal" action="{{ url('/customer-login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control"/>
                                        {{ $errors->has('email')?$errors->first('email') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control"/>
                                        {{ $errors->has('password')?$errors->first('password') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn_login" class="btn btn-success btn-block" value="Log In"/>

                                    </div>

                                </div>

                            </form>
                            @if($message= Session::get('message'))
                                <div class="alert alert-info">
                                    <h3>{{ $message }}</h3>
                                </div>
                            @endif

                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="panel-body ">
                            <h3 class="text-center text-success">Registration Form</h3>
                            <br/>
                            <form name="registration_form" class="form-horizontal" action="{{ url('/new-customer') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-3">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="first_name" class="form-control"/>
                                        {{ $errors->has('first_name')?$errors->first('first_name') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" class="form-control"/>
                                        {{ $errors->has('last_name')?$errors->first('last_name') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control"/>
                                        {{ $errors->has('email')?$errors->first('email') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control"/>
                                        {{ $errors->has('password')?$errors->first('password') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phone_number" class="form-control"/>
                                        {{ $errors->has('phone_number')?$errors->first('phone_number') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Address</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="address" class="form-control"></textarea>
                                        {{ $errors->has('address')?$errors->first('address') : ' ' }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Register"/>

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