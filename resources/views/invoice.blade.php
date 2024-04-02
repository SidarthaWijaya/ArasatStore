<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arasatu Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        h6{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            align-self: auto;
            align-content: flex-start;
        }
    </style>
</head>
<body>
    <div class="container">
       <h6>invoice          : {{$orders->invoice_number}}</h6>
       <h6>Customer         : {{$users->nama}}</h6>
       <h6>Phone number     : {{$users->phone_number}}</h6>
       <h6>Alamat           : {{$users->alamat}}</h6>
       <h6>kota/kecamatan   : {{$users->kota_kecamatan}}</h6>
       <h6>kode pos         : {{$users->kode_pos}}</h6>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>nama barang</th>
                    <th>qty</th>
                    <th>price</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($order_details as $orderdetail)
                        <td>{{$orderdetail->product->nama_barang}}</td>
                        <td>{{$orderdetail->quantity}}</td>
                        <td>{{$orderdetail->product->price}}</td>
                        <td>{{$orderdetail->quantity*$orderdetail->product->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <h6>subtotal: {{$orders->subtotal}}</h6>
        <h6>pengiriman:</h6>
        <h6>total:{{$orders->total}}</h6>
     </div>
</body>
</html>