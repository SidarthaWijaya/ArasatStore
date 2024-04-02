<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shop</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <?php
   
	$url="https://api.arasatu.com/api/get-product";
	//$url="http://127.0.0.1:8000/api/get-product";
	$cURLConnection = curl_init();

	curl_setopt($cURLConnection, CURLOPT_URL, $url);
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

	$productList = curl_exec($cURLConnection);
	curl_close($cURLConnection);

	$decode= json_decode($productList);
    ///print_r($decode->products->data[0]->nama_barang)
    ?>
</head>

<body>
    <form action="/api/search" method="GET">
        <input type="text" name="search" placeholder="search">
        <button type="submit">Search</button>
    </form>



    <div class="container mt-5" style="max-width: 550px">
      
        @if ($decode!=null)
            <div id="data-wrapper">
              
             @for ($i = 0; $i < 10; $i++)
                @php
                $productDecode= $decode->products->data[$i];
                @endphp
                {{-- <ul>
                    <li>{{$productDecode->nama_barang}}</li>
                    <li>{{$productDecode->description}}</li>
                    <li>{{$productDecode->price}}</li>
                </ul> --}}
                <h6>{{$productDecode->nama_barang}}</h6>
                <h6>{{$productDecode->description}}</h6>
                <h6>{{$productDecode->price}}</h6>
                <a href="https://api.arasatu.com/api/get-product/{{$productDecode->id}}">add to chart</a>
                
             @endfor 
             <h4>==================================</h4>       
            </div>
        @endif

       

        <!-- Data Loader -->
        <div class="auto-load text-center">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000"
                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                        from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>
    </div>
 
   
    <form action="/api/get-product" method="POST">
        @csrf
        <input type="text" name="page" id="page" placeholder="page">
        <input type="text" name="pageSize" id="pageSize" placeholder="pageSize">
        <button value="submit" id="submit"> submit</button>
    </form>
    {{-- <input type="text" name="page" id="page">
    <button value="submit" id="submit"> submit</button> --}}
    
   
    <a href="/pengiriman">chart</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var ENDPOINT = "{{ url('/') }}";
        var page = 1;
        var last_page=0;


        infinteLoadMore(page);
        $(window).scroll(function () {
            
            if ($(window).scrollTop() + $(window).height() >= $(document).height()-4) {
               
            // console.log($(window).scrollTop() + $(window).height());
            // console.log($(window).scrollTop());
            // console.log($(window).height());
            // console.log($(document).height());

           
            page++;
               
               if(page<=last_page){
               console.log(page);
               console.log(last_page);
                infinteLoadMore(page);
                console.log("load"); 
               }
                
            }
        });
        
        function infinteLoadMore(page) {
            $.ajax({
                    url: "http://127.0.0.1:8000/api/get-product?pageSize=10&&page="+page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function () {
                      
                        $('.auto-load').show();
                     
                    }
                })
                .done(function (response) {
                   last_page=response.products.last_page;
                    console.log(response);
                    //console.log(response.products.data.last_page);
                    
                    if (response.products.data==0) {
                       
                        $('.auto-load').html("We don't have more data to display :(");
                        return;
                    }
                    $('.auto-load').hide();
                   
                    // $("#data-wrapper").append('<h6>'+response.products.data[1].id+'</h6>');
                    // ''+$products->id+'</h6>'+
                    //'<a href=''api/get-product/'+id+'>'+response.products.data[1].id+'</a>'
                    
                    console.log(response.products.data.length);
                    for (let index = 0; index < response.products.data.length; index++) {
                        var id=response.products.data[index].id;
                        var nama_barang=response.products.data[index].nama_barang;
                        var description=response.products.data[index].description;
                        var price=response.products.data[index].price;
                        var url= response.products.data[index].product_url;
                       
                        //console.log(id);
                        $("#data-wrapper").append('<h6>'+nama_barang+'</h6>'+
                        '<h6>'+description+'</h6>'+
                        '<h6>'+price+'</h6>'+
                        '<a href='+'product/'+url+'>'+"add to chart"+'</a>');
                    //     
                    
                    }
                    //$("#data-wrapper").append('<a href='+'api/get-product/'+test+'>'+"add to chart"+'</a>');
                   
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                    
                });
        }
    </script>


</body>

</html>