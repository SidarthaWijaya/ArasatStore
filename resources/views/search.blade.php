<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arasatu Store</title>
    <link rel="icon" href="{{asset('image/LogoArasatu.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="pos-f-t">
        <nav class="navbar navbar-dark bg-dark" id="navbar">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <img src="{{asset('image/LogoArasatu.png')}}" alt="" id="center">

          <ul>
            <li>
                <a href="/cart" class="nav-link" ><i class="fas fa-shopping-cart"></i></a>
            </li>
        </ul>
        <form action="http://127.0.0.1:8000/api/search" method="GET">
            <input type="text" name="search" placeholder="search" class="search">
            <button type="submit" ><i class="fas fa-search"></i></button>
        </form>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="http://192.168.138.1:8000/">Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
              </li>
            </ul>
          </div> 
        </div>
      </div>
      <div class="container menu-list pt-3">
        <div class="col-12 row mx-auto px-0">
            @if($getproduct->isNotEmpty())
  
            @foreach ($getproduct as $product)
             <a href="http://127.0.0.1:8000/product/{{$product->product_url}}" class="col-12 col-md-6 col-lg-3 p-0">
                <div class="menu row p-2 m-0 mb-3">
                    <div class="col-4 pl-0 pr-2">
                        <img class="pic w-100" src="https://arasatu.com/images/team/HC.jpg" alt="Card image cap">
                    </div>
                    <div class="col-8 pl-2 pr-0">
                        <div class="body">
                            <h5 class="title m-0">{{$product->nama_barang}}</h5>
                            <p class="brief">{{$product->description}}</p>
                            <p class="price m-0">IDR {{number_format($product->price)}}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        @else 
            <div>
                <h2>No posts found</h2>
            </div>
        @endif
                      
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php
    mysql_connect("localhost","root","");
    mysql_select_db("u1092900_arasatustoredb");
  ?>
</head>
<body>
  
</body>
</html> --}}