<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order</title>

    <?php
   
	$url="https://api.arasatu.com/api/order";
	//$url="http://127.0.0.1:8000/api/get-product";
	$cURLConnection = curl_init();

	curl_setopt($cURLConnection, CURLOPT_URL, $url);
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

	$productList = curl_exec($cURLConnection);
	curl_close($cURLConnection);

	$decode= json_decode($productList);
    print_r($decode);
    ?>
</head>
<body>
    <div class="container mt-5" style="max-width: 550px">
      
        @if ($decode!=null)
            <div id="data-wrapper">
              
             @for ($i = 0; $i <count($decode->order_details); $i++)
                @php
                $productDecode= $decode->order_details[$i];
                @endphp
            
                <h6>{{$productDecode->quantity}}</h6>
                {{-- <h6>{{$productDecode->description}}</h6>
                <h6>{{$productDecode->price}}</h6> --}}
           
                
             @endfor 
             <h4>==================================</h4>       
            </div>
        @endif
</body>
</html>