<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user  = Auth::user()->id;
        $carts = Cart::where('user_id', $user)
        ->where('status_cart', '1')
        ->first();
        if($carts)
        {
            $details = $carts->detail;
            return view('cart.index', compact('carts', 'user', 'details'));
        }
        else
        {
            return view('cart.empty', compact('user'));
        }
    }

    public function add_to_cart(Request $request)
    {
        $user  = Auth::user()->id;
        $product = Product::findOrFail($request->product_id);
        $cart = Cart::where('user_id', $user)
                    ->where('status_cart', '1')
                    ->first();    
        if($cart){
            $itemcart = $cart;
        } else{
            $no_invoice = Cart::where('user_id', $user)->count();
            $inputancart['user_id'] = $user;
            $inputancart['no_invoice'] = 'INV '.str_pad(($no_invoice + 1),'3', '0', STR_PAD_LEFT);
            $inputancart['status_cart'] = '1';
            $inputancart['status_pembayaran'] = '0';
            $itemcart = Cart::create($inputancart);
        }

        $data = CartDetail::where('cart_id', $itemcart->cart_id)
                            ->where('product_id', $request->product_id)
                            ->first();
        $qty = $request->quantity;
        $harga = $product->price;
        $subtotal = $qty * $harga;

        if($data){
            $data->updatedetail($data, $qty, $harga);
            $data->cart->updatetotal($data->cart, $subtotal);
            $product->quantity = $product->quantity - $qty;
        } else{
            $inputan = $request->all();
            $inputan['cart_id'] = $itemcart->id;
            $inputan['product_id'] = $request->product_id;
            $inputan['qty'] = $qty;
            $inputan['harga'] = $harga;
            $inputan['subtotal'] = $harga * $qty;
            $itemdetail = CartDetail::create($inputan);    
            $itemdetail->cart->updatetotal($itemdetail->cart, $subtotal);
            $product->quantity = $product->quantity - $qty;
        }
        return redirect('/cart')->with('success', 'Product added to cart successfully!');
    }

    public function update_quantity(Request $request, $id)
    {
        $itemdetail = CartDetail::findOrFail($id);
        $param = $request->param;
        
        if ($param == 'tambah') {
            // update detail cart
            $qty = 1;
            $itemdetail->updatedetail($itemdetail, $qty, $itemdetail->price);
            // update total cart
            $itemdetail->cart->updatetotal($itemdetail->cart, $itemdetail->price);
            return redirect('/cart')->with('success', 'Item quantity succesfully updated');
        }
        if ($param == 'kurang') {
            // update detail cart
            $qty = 1;
            $qtynow = $itemdetail->quantity - $qty;
            if ($qtynow <= 0){
                return redirect('/cart')->with('error', 'Item quantity shouldnt be zero/under! Remove it if you want to!');
            }
            else{
            $itemdetail->updatedetail($itemdetail, '-'.$qty, $itemdetail->price);
            // update total cart
            $itemdetail->cart->updatetotal($itemdetail->cart, '-'.$itemdetail->price);
            return redirect('/cart')->with('success', 'Item quantity succesfully updated');
            }
        }
    }

    public function delete_item($id){
        $itemdetail = CartDetail::findOrFail($id);
        // update total cart dulu
        $itemdetail->cart->updatetotal($itemdetail->cart, '-'.$itemdetail->subtotal);
        $itemdetail->product->quantity = $itemdetail->product->quantity + $itemdetail->quantity;
        if ($itemdetail->delete()) {
            return redirect('/cart')->with('success', 'Item sucessfully deleted');
        } else {
            return redirect('/cart')->with('error', 'Failed');
        }
    }

    public function checkout($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->status_cart == '2';
        $cart->save();
    }
}
