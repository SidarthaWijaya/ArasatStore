<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\order_detail;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // menampilkan product apa saja yang dipesan oleh customer
    public function getAllOrder()
    {

        $getorder = order_detail::select('order_details.*', 'products.price', 'products.nama_barang', 'orders.subtotal', 'orders.total', 'orders.session_id')->join('products', 'order_details.product_id', '=', 'products.id')->join('orders', 'order_details.order_id', '=', 'orders.id')->get();

        return response()->json([
            'getorder' => $getorder,
        ]);
    }
}
