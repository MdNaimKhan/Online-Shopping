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
                    Please give payment info to complete order

                </h3>
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel-body ">
                            <form action="{{ url('/new-order') }}" method="post">
                                @csrf
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Cash On Delivery</th>
                                        <td><input type="radio" name="payment_type" value="Cash On Delivery"/></td>

                                    </tr>
                                    <tr>
                                        <th>Bkash</th>
                                        <td><input type="radio" name="payment_type" value="Bkash"/></td>

                                    </tr>
                                    <tr>
                                        <th></th>

                                        <td><input type="submit" name="btn" class="btn btn-success" value="Confirm Order"/></td>

                                    </tr>

                                </table>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection