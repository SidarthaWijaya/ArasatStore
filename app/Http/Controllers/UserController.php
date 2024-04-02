<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\order_detail;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class UserController extends Controller
{
    // create user yang melakukan pemesanan product 
    public function createProfile(Request $request)
    {
        $total=0;
        $nama= $request->nama;
        $phone_number=$request->phone_number;
        $email=$request->email;
        $alamat=$request->alamat;
        $provinsi=$request->provinsi;
        $kota=$request->kota;
        $kode_pos=$request->kode_pos;
        $harga_ongkir=$request->harga_ongkir;
        $session="REfY0YmFyV2NjJPKiVPtHUH7liO1BM14795TvTQP";
        $orders=Order::where('session_id',$session)->first();
        $orderId=$orders->id;
        $subtotal=$orders->subtotal;
        $rules=array(
            'nama'=> 'required','regex:/^[a-zA-Z0-9\s]*@./',
            'phone_number'=> 'required','regex:/^[a-zA-Z0-9\s]*/',
            'email'=>'required','regex:/^[a-zA-Z0-9\s]*@./',
            'alamat'=>'required','regex:/^[a-zA-Z0-9\s]*/',
            'kode_pos'=>'required','regex:/^[a-zA-Z0-9\s]*/',
        );
        // User::create([
        //     'nama'=> $nama,
        //     'phone_number'=>$phone_number,
        //     'email'=> $email,
        //     'alamat'=> $alamat,
        //     'kota_kecamatan'=>$kota_kecamatan,
        //     'kode_pos'=> $kode_pos,
        //     'harga_ongkir'=>$harga_ongkir,
        //     'session_id'=>$session
        // ]);
        
        $validators= Validator::make($request->all(),$rules);
     
        if($validators->fails()){
            
            return response()->json([
                
            // 'errors'=>$validators->errors(),
            'massage'=>'create data error'
            ]);
            // dd('gagal kirim');
        }else{
            User::create([
                'nama'=> $nama,
                'phone_number'=>$phone_number,
                'email'=> $email,
                'alamat'=> $alamat,
                'provinsi'=>$provinsi,
                'kota'=>$kota,
                'kode_pos'=> $kode_pos,
                'harga_ongkir'=>$harga_ongkir,
                'session_id'=>$session
            ]);
            $total=$harga_ongkir+$subtotal;
            Order::where('id',$orderId)->update([
                'total'=>$total
            ]);
        }
        // return response()->json([
        //         'massage'=>'success create data'
        //     ]); 
        return back();
        //return redirect('http://store.arasatu.com/cekongkir');
        //return redirect('http://192.168.138.1:8000/cekongkir');
    }

    // menampilkan data pada halaman invoice
    public function invoice()
    {
        $session="REfY0YmFyV2NjJPKiVPtHUH7liO1BM14795TvTQP";
        $orders=Order::where('session_id',$session)->first();
        //dd($orders);
        $orderId=$orders->id;
        $users=User::where('session_id',$session)->first();
        
        $order_details=order_detail::select('order_details.*','products.price','products.nama_barang')->join('products','order_details.product_id','=','products.id')
        ->where('order_id',$orderId)->get();
        // return view('/invoice',compact('orders','users','order_details'));
        return response()->json([
            'orders'=>$orders,
            'users'=>$users,
            'order_details'=>$order_details
            
        ]);


    }
}
