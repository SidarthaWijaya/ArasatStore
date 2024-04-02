<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\order_detail;
use Carbon\Carbon;
use Dotenv\Validator as DotenvValidator;
use Facade\FlareClient\Http\Response;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Validation\Validator as ContractsValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;
use PHPUnit\Util\Xml\Validator as XmlValidator;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

//use Validator;

class ProductController extends Controller
{
    // menampilkan data pada halaman product
    public function getData(Request $request, $pageSize = null, $columns = ['*'], $pageName = 'page', $page = null)
    {
        $pageNumber =  $request->page;
        $pageSize = $request->pageSize;

        // $category=Category::all();
        // $categoryId=$category->id;
        //$products=Product::paginate(10);
        // $products = Product::paginate($pageSize, ['*'], 'page', $pageNumber);
        $products = Product::select('products.*', 'categories.nama')->join('categories', 'categories.id', '=', 'products.category_id')
            ->orderby('products.id')->paginate($pageSize, ['*'], 'page', $pageNumber);

        //$pageNumber=   $products->links();
        //return view('/shop',compact('products'));
        return response()->json([
            'products' => $products,

        ]);
    }

    public function newProduct()
    {
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8); //$lproduct=menampilkan product yang baru ditambahkan ke database

        return response()->json([
            'lproducts' => $lproducts
        ]);
    }

    //Menampilkan product berdasarkan product url
    public function getDatabyId($product_url)
    {
        $product = Product::where('product_url', $product_url)->first();

        $relateProduct = Product::select('products.*', 'categories.nama')->join('categories', 'categories.id', '=', 'products.category_id')->where('category_id', $product->category_id)->where('product_url', '!=', $product_url)->get()->random(4);
        // $relateProduct=Product::where('category_id',$product->category_id)->where('product_url','!=',$product_url)->get()->random(4);
        // $product= Product::findOrFail($id);
        //dd($product);
        // $product_url=$product->product_url;
        // dd("http://127.0.0.1:8000/shop{$product_url}");
        //     return view('input',compact('product'));
        //    dd($product->product_url);

        $url = "api.arasatu.com/api/get-product/product_url";

        // $url="http://127.0.0.1:8000/shop";
        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, $url);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $productList = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        $decode = json_decode($productList);
        //echo print_r($decode->products);

        // echo  url("http://127.0.0.1:8000/shop{$product_url}");

        //return view ("/input",compact('product'));
        return response()->json([
            'product' => $product,
            'relateProduct' => $relateProduct
        ]);
    }

    // membuat product baru
    public function create(Request $request, $id)
    {
        $subtotal = 0;
        $total = 0;
        $berat_total = 0; // berat barang dalam satuan gram
        $session = "REfY0YmFyV2NjJPKiVPtHUH7liO1BM14795TvTQP";
        // $session = Session()->getid();
        // $request->session()->keep(['message']); 
        $product_id = $request->product_id;
        $order = Order::where('session_id', $session)->first();
        //dd($order);
        $invoice = date('YmdHis');
        $rules = array(
            'quantity' => 'min:1|numeric',
            'note' => 'nullable', 'regex:/^[a-zA-Z0-9\s]*$/',
        );
        // $validators= Validator::make($request->all(),[
        //     'quantity'=> 'min:1|numeric',
        //     'note'=> 'nullable|alpha_num|',

        // ]);
        $validators = Validator::make($request->all(), $rules);

        // $validators=$request->validate([
        //     'quantity'=> 'min:1|numeric',
        //     'note'=> 'nullable|alpha_num|alpha_spaces'
        // ]);

        if ($validators->fails()) {

            return response()->json([

                // 'errors'=>$validators->errors(),
                'massage' => 'create data error'
            ]);
            // dd('gagal kirim');
        } else {
            if (empty($order)) {
                $orderId = Order::insertGetId([
                    'subtotal' => $subtotal,
                    'total' => $total,
                    'session_id' => $session,
                    'invoice_number' => $invoice,
                    'berat_total' => $berat_total,
                ]);
                order_detail::create([
                    'order_id' => $orderId,
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity,
                    'note' => $request->note,
                ]);
                $order_details = order_detail::where('order_id', $orderId)->get();
                foreach ($order_details as $orderdetail) {
                    if ($orderdetail->product_id == $orderdetail->product->id) {
                        $subtotal += $orderdetail->quantity * $orderdetail->product->price;
                        $berat_total += $orderdetail->quantity * $orderdetail->product->berat_barang;
                    }
                }
                $berat_total = $berat_total;
                $total = $subtotal;
                Order::where('id', $orderId)->update([
                    'subtotal' => $subtotal,
                    'total' => $total,
                    'berat_total' => $berat_total,
                ]);
            } else {
                $orderId = $order->id;
                $ordersession = $order->session_id;
                // dd( $ordersession);
                $cek_order_detail = order_detail::where('order_id', $orderId)->get();
                if (empty($cek_order_detail)) {
                    order_detail::create([
                        'order_id' => $orderId,
                        'product_id' => $request->product_id,
                        'quantity' => $request->quantity,
                        'note' => $request->note,
                        'berat_total' => $berat_total,
                    ]);
                    $order_details = order_detail::where('order_id', $orderId)->get();
                    foreach ($order_details as $orderdetail) {
                        if ($orderdetail->product_id == $orderdetail->product->id) {
                            $subtotal += $orderdetail->quantity * $orderdetail->product->price;
                            $berat_total += $orderdetail->quantity * $orderdetail->product->berat_barang;
                        }
                    }
                    $total = $subtotal;
                    Order::where('id', $orderId)->update([
                        'subtotal' => $subtotal,
                        'total' => $total,
                        'berat_total' => $berat_total,
                    ]);
                } else if ($ordersession == $session) {
                    // dd($ordersession==$session);
                    $orderId = $order->id;
                    // dd($orderId);
                    $order_details = order_detail::where('order_id', $orderId)->get();
                    foreach ($order_details as $orderdetail) {
                        //dd($order);
                        if ($orderdetail->product_id == $product_id && $orderdetail->note == null) {
                            //dd($order_detail->menu_id);
                            //dd($order_detail->menu_id==$request->menu_id[$order] && $order_detail->note==null);
                            $update = order_detail::where('order_id', $orderId)->where('product_id', $product_id)->update([
                                'quantity' => $orderdetail->quantity + $request['quantity'],

                            ]);
                        }
                    }
                    if (order_detail::where('product_id', $product_id)->where('order_id', $orderId)->first()) {
                        $order_details = Order_detail::where('order_id', $orderId)->get();
                        foreach ($order_details as $orderdetail) {

                            if ($orderdetail->product_id == $orderdetail->product->id) {
                                $subtotal += $orderdetail->quantity * $orderdetail->product->price;
                                $berat_total += $orderdetail->quantity * $orderdetail->product->berat_barang;
                            }
                        }
                    } else {
                        order_detail::create([
                            'order_id' => $orderId,
                            'product_id' => $request->product_id,
                            'quantity' => $request->quantity,
                            'note' => $request->note,
                        ]);
                        $order_details = order_detail::where('order_id', $orderId)->get();
                        foreach ($order_details as $orderdetail) {
                            if ($orderdetail->product_id == $orderdetail->product->id) {
                                $subtotal += $orderdetail->quantity * $orderdetail->product->price;
                                $berat_total += $orderdetail->quantity * $orderdetail->product->berat_barang;
                            }
                        }
                    }
                    $total = $subtotal;
                    if ($ordersession == $session) {
                        //dd($order_session==$session);
                        Order::where('session_id', $session)->update([
                            'subtotal' => $subtotal,
                            'total' => $total,
                            'berat_total' => $berat_total,
                        ]);
                    }
                }
            }
        }
        // return response()->json([
        //     'massage'=>'success create data'
        // ]); 
        //return redirect('http://192.168.138.1:8000');
        // return redirect('http://store.arasatu.com');

        return back();
    }

    //Menampilkan product yang akan dibeli pada halaman chart
    public function showOrder()
    {
        $session = "REfY0YmFyV2NjJPKiVPtHUH7liO1BM14795TvTQP";
        $orders = Order::where('session_id', $session)->first();
        $order_id = $orders->id;
        $order_details = order_detail::select('order_details.*', 'products.price', 'products.nama_barang')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->where('order_id', $order_id)->get();
        //dd($order_details);3
        // $test=DB::table('order_details')
        // ->on('products','order_details.product_id','=','products.id')->get();
        // dd($test);
        // $count=count($order_details->id);
        // dd($count);
        return response()->json([
            'order_details' => $order_details,
            'orders' => $orders
        ]);
    }

    //mengupdate qty dari product yang akan dibeli
    public function updateData(Request $request, $id)
    {
        $session = "REfY0YmFyV2NjJPKiVPtHUH7liO1BM14795TvTQP";
        $order = Order::where('session_id', $session)->first();
        $subtotal = 0;
        $berat_total = 0;
        $rules = array(
            'quantity' => 'min:1|numeric',
            'note' => 'nullable', 'regex:/^[a-zA-Z0-9\s]*$/',
        );
        // $validators= Validator::make($request->all(),[
        //     'quantity'=> 'min:1',
        //     'note'=> 'nullable|alpha_num'
        // ]);
        $validators = Validator::make($request->all(), $rules);

        if ($validators->fails()) {

            return response()->json([

                // 'errors'=>$validators->errors(),
                'massage' => 'create data error'
            ]);
            // dd('gagal kirim');
        } else {
            $orderId = $order->id;
            order_detail::where('id', $id)->where('order_id', $orderId)->update([
                'quantity' => $request->quantity,
                'note' => $request->note,
            ]);
            $order_details = order_detail::where('order_id', $orderId)->get();
            foreach ($order_details as $orderdetail) {
                if ($orderdetail->product_id == $orderdetail->product->id) {
                    $subtotal += $orderdetail->quantity * $orderdetail->product->price;
                    $berat_total += $orderdetail->quantity * $orderdetail->product->berat_barang;
                }
            }
            $total = $subtotal;
            Order::where('id', $orderId)->update([
                'subtotal' => $subtotal,
                'total' => $total,
                'berat_total' => $berat_total,

            ]);
            return response()->json([
                'massage' => 'success update data',

            ]);
        }
    }

    //mendelete product yang tidak akan dibeli pada chart
    public function deleteData($id)
    {
        $subtotal = 0;
        $total = 0;
        $berat_total = 0;
        $delete = order_detail::destroy($id);
        $session = "REfY0YmFyV2NjJPKiVPtHUH7liO1BM14795TvTQP";
        $order = Order::where('session_id', $session)->first();
        $orderid = $order->id;
        $order_details = order_detail::select('order_details.*', 'products.price', 'products.nama_barang')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->where('order_id', $orderid)->get();
        foreach ($order_details as $orderdetail) {
            if ($orderdetail->product_id == $orderdetail->product->id) {
                $subtotal += $orderdetail->quantity * $orderdetail->product->price;
                $berat_total += $orderdetail->quantity * $orderdetail->product->berat_barang;
            }
        }
        $total = $subtotal;
        Order::where('id', $orderid)->update([
            'subtotal' => $subtotal,
            'total' => $total,
            'berat_total' => $berat_total,
        ]);


        return response()->json([
            'massage' => 'success delate data'
        ]);
    }

    //melakukan search product
    public function search(Request $request)
    {
        $getproduct_query = Product::where('nama_barang', 'LIKE', '%' . $request->keyword . '%')->with(['category'])->get();
        // if ($request->keyword) {
        //     $getproduct_query->;
        // }

        // $getproduct = $getproduct_query->get();
        // ->orWhere('price', 'LIKE', "%{$search}%")
        // ->get();

        // return view('search', compact('getproduct'));
        //dd($getproduct);
        return response()->json([
            'search' => $getproduct_query
        ]);
    }


    // mmenampilkan categori dari table category
    public function category()
    {
        $categories = Category::all();
        //return view('createproduct', compact('categories'));
        return response()->json([
            'categories' => $categories
        ]);
    }


    // melakukan create product oleh admin
    public function createProduct(Request $request)
    {


        $regex = ['. ', ' '];
        $category = $request->category_id;
        $nama_barang = $request->nama_barang;
        $qty_stock = $request->qty_stock;
        $price = $request->price;
        $berat_barang = $request->berat_barang; // berat barang dalam satuan gram
        $description = $request->description;
        $rules = array(
            'nama_barang' => 'required|max:255',
            'qty_stock' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        );
        $validators = Validator::make($request->all(), $rules);
        if ($validators->fails()) {

            return response()->json([

                // 'errors'=>$validators->errors(),
                'massage' => 'create data error'
            ]);
            // dd('gagal kirim');
        } else {
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('data_image'), $imgName);
            Product::create([
                'category_id' => $category,
                'nama_barang' => $nama_barang,
                'qty_stock' => $qty_stock,
                'price' => $price,
                'berat_barang' => $berat_barang, // berat barang dalam satuan gram
                'description' => $description,
                'image' => $imgName,
                'product_url' => str_replace($regex, '-', $nama_barang)
            ]);
        }

        return response()->json([

            // 'errors'=>$validators->errors(),
            'massage' => 'create data success'
        ]);
    }

    //menampilkan product berdasarkan category
    public function product_category($category_url)
    {
        $kategori = Category::all();

        $product_kategori = Category::select('products.*', 'categories.nama')->join('products', 'products.category_id', '=', 'categories.id')
            ->where('category_url', $category_url)->get();

        return response()->json([

            'product_kategori' => $product_kategori
        ]);
    }





    // public function productDiscount (Request $request){
    //     $product_id=$request->product_id;
    //     $diskon_persen=$request->diskon_persen;
    //     $harga_awal=0;
    //     $diskon_nominal=0;
    //     $harga_akhir =0;

    //     $request->validate([
    //         'product_id' => 'required',
    //         'diskon_persen'=>'required',
    //     ]);
    //              // cek dulu apakah sudah ada, produk hanya bisa masuk 1 promo
    //         $cekpromo = ProdukPromo::where('product_id', $product_id)->first();
    //     if ($cekpromo) {
    //         return back()->with('error', 'Data sudah ada');
    //     } else {
    //         $product=Product::where('id',$product_id)->first();
    //         $harga_awal=$product->price;
    //         $diskon_nominal=$diskon_persen/100 * $harga_awal;
    //         $harga_akhir = $harga_awal - $diskon_nominal;


    //         $productPromoId = ProdukPromo::create     ([
    //                     'product_id'=>$product_id,
    //                     'diskon_persen'=>$diskon_persen,
    //                     'harga_awal'=>$harga_awal,
    //                     'harga_akhir'=>$harga_akhir,
    //                     'diskon_nominal'=>$diskon_nominal
    //                 ]);

    //     }
    // }



}
