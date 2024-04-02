{{-- <?php
	$url="https://api.arasatu.com/api/get-product";
	// $url="http://127.0.0.1:8000/shop";
	$cURLConnection = curl_init();

	curl_setopt($cURLConnection, CURLOPT_URL, $url);
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

	$phoneList = curl_exec($cURLConnection);
	curl_close($cURLConnection);

	json_decode($phoneList);
	echo ($phoneList);
?> --}}

<?php
/* API URL */

$url = 'http://127.0.0.1:8000/shop';

  

/* Init cURL resource */

$ch = curl_init($url);

  

/* Array Parameter Data */

$data = ['pageSize'=>5, 'pageNumber'=>4];

  

/* pass encoded JSON string to the POST fields */

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

  

/* set the content type json */

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

  

/* set return type json */

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  

/* execute request */

$result = curl_exec($ch);

   

/* close cURL resource */

curl_close($ch);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	@if($products->isNotEmpty())
    {{-- <p>{{ $products->nama_barang}}</p> --}}
    @foreach ($products as $product)
        <div class="post-list">
            <p>{{ $product->nama_barang}}</p>
            
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
</body>
</html>