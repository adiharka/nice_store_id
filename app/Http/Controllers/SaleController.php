<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::orderBy('id', 'desc')->get();

        return view('sale.index', compact('carts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::findOrFail($id);

        return view('sale.show', compact('cart'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully');
    }

    public function confirmation($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->status_pembayaran = '1';
        $cart->status_cart = '3';
        $cart->save();

        return redirect()->route('sales.index')->with('success', 'Sale payment confirmed successfully');
    }
}
