<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
     public function showOrderInfo(){
         //$orders= Order::all();
           $orders= DB::table('orders')
                       ->join('customers','orders.customer_id','=','customers.id')
                       ->join('payments', 'orders.id','=','payments.id')
                       ->join('shippings','orders.shipping_id','=','shippings.id')
                       ->select('orders.*', 'customers.first_name','customers.last_name','payments.payment_type','payments.payment_status','shippings.phone_number')
                       ->orderBy('id','desc')
                       ->get();
           //return $orders;
         return view('admin.order.show-order',['orders'=>$orders]);
     }
     public function editOrderInfo($id){

            $ordersInfo= DB::table('orders')
                            ->join('payments', 'orders.id', '=', 'payments.id' )
                            ->select('orders.*','payments.payment_status')
                            ->where('orders.id',$id)
                            ->first();


            return view('admin.order.edit-order',['ordersInfo'=>$ordersInfo]);
     }

     public function updateOrderInfo(Request $request){

                           $orderById = Order::find($request->order_id);
                           $paymentsByOrderId=Payment::find($request->order_id);
                           $productQuantityByOrder= OrderDetail::find($request->order_id);
                           $productQuantity=Product::find($productQuantityByOrder->product_id);

                           if($request->payment_status=='Complete'){
                               $productQuantity->product_quantity=$productQuantity->product_quantity-$productQuantityByOrder->product_quantity;
                               if($productQuantity->product_quantity<0){
                                   return redirect('order-info')->with('message', 'not sufficient product in store');
                               }


                               $orderById->order_status= $request->order_status;
                               $paymentsByOrderId->payment_status= $request->payment_status;

                               $orderById->save();
                               $paymentsByOrderId->save();
                               $productQuantity->save();

                           }





         return redirect('order-info')->with('message', 'order info updated successfully');




     }
}
