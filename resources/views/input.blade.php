<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arasatu store</title>
    <link rel="icon" href="{{asset('image/LogoArasatu.png')}}">

   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
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
    
    <div class="container px-3 py-4">
        <div class="col-12 row mx-auto px-0">
            <div class="body">
                <h3 class="title">{{$product->nama_barang}}</h3>
                <p class="brief">{{$product->description}}</p>
                <p class="price h4">IDR {{number_format($product->price)}}</p>
                <form action="/api/create/{{$product->id}}" class="py-4" method="POST">
                    @csrf
                   
                        <label for="notes">Note</label>
                        <textarea class="w-100" name="note" id="note" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="number text-center">
                            <span class="minus">-</span>
                            <input type="hidden" value="{{$product->id}}" id="product_id" name="product_id">   <input type="text" value="1" class="quantity" name="quantity" id=quantity>
                            <span class="plus">+</span>
                        </div>
                    </div>
                    {{-- <a id="submit" class="btn btn-primary w-100">Add to cart</a> --}}
                    <button id="order" class="btn btn-primary w-100">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
    {{-- <h5>{{$product->nama_barang}}</h5>
    <p>{{$product->description}}</p>
    <p> {{number_format($product->price)}}</p>

    <form action="/api/create/{{$product->id}}" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" id="product_id" name="product_id"><br>
        <input type="number" name="quantity" value="1" id='quantity' min="1"> <br>
        <input type="text" name="note" value="" id='note' placeholder="note"> <br>
        <button id="order">order</button>
    </form> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</body>
<script>
    $(document).ready(function() {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
</script>
</html>


