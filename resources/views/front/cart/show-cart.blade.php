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
                @if($message= Session::get('message'))
                    <div class="alert alert-info">
                        <h3>{{ $message }}</h3>
                    </div>
                @endif

                <table class=" table table-bordered table-responsive">
                    <tr>
                        <th>SL No</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>





                @php($i=1)
                @php($sum=0)
                    @foreach($cartProducts as $cartProduct)

                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $cartProduct->id }}</td>
                        <td>{{ $cartProduct->name }}</td>
                        <td><img src="{{ asset($cartProduct->options->image) }}" alt="" height="50" width="50"/></td>
                        <td>TK. {{ $cartProduct->price }}</td>
                        <td>
                            <form action="{{ url('/update-cart-product') }}" method="post">
                                @csrf
                                <input type="number" name="qty" value="{{ $cartProduct->qty }}">
                                <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}">
                                <input type="submit" name="btn" value="Update">
                            </form>
                        </td>

                        <td>TK. {{ $total= $cartProduct->price*$cartProduct->qty }}</td>
                        <td>
                            <a href="{{ url('/delete-cart-product/'.$cartProduct->rowId) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>


                    </tr>
                        @php($sum=$sum+$total)
                     @endforeach

                </table>
                <table class="table table-bordered">
                    <tr>
                        <th>Sub Total</th>
                        <td>TK. {{ $sum }}</td>
                    </tr>
                    <tr>
                        <th>Discount</th>
                        <td>TK. {{ $discount =0 }}</td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>TK. {{$tax=0}}</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                        <td>TK. {{ $grandTotal=($sum-$discount)+$tax }}</td>

                        {{ Session::put('grandTotal',$grandTotal) }}
                    </tr>
                </table>
                <a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a>
                @if(Session::get('customerId') && Session::get('shippingId'))
                        <a href=" {{ url('/payment-info') }}" class="btn btn-success">Checkout</a>
                @elseif(Session::get('customerId'))
                        <a href=" {{ url('/shipping-info') }}" class="btn btn-success">Checkout</a>
                 @else
                        <a href=" {{ url('/checkout') }}" class="btn btn-success">Checkout</a>
                    @endif




            </div>
        </div>

    </div>
    @endsection