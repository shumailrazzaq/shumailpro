<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">

        .center{
            margin:auto;
            padding:30px;
            text-align:center;
        }

        table,th,td{
            border:1px solid gray;
        }
        .deg{
            font-size:20px;
            padding:5px;
            background:red;
        }

      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->


         @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" 
            aria-hidden="true">x</button>

          {{session()->get('message')}}

          </div>
          @endif
         <div class="center">
            <table>
                <tr>
                    <th class="deg">Product Title</th>
                    <th class="deg">Product Quantity</th>
                    <th class="deg">Price</th>
                    <th class="deg">Image</th>
                    <th class="deg">Action</th>
                </tr>

                <?php $totalprice=0;?>

                @foreach($cart as $cart)

                <tr>
                <td>${{$cart->product_title}}</td>
                <td>${{$cart->quantity}}</td>
                <td>${{$cart->price}}</td>
                <td><img style="hight:100px;width:100px" src="/product/{{$cart->image}}" alt=""></td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product')" href="{{url('remove_cart',$cart->id)}}">
                        Remove Product</a>
                </td>


                </tr>
                <?php $totalprice=$totalprice + $cart->price ?>
                @endforeach
                
            </table>
            <div>
                <h2>Total Price : ${{$totalprice}}</h2>
            </div>

            <div>
                <h2>Proceed To Order</h2>
                <a class="btn btn-danger" href="{{url('cash_order')}}">Cash On Dilivery</a>
                <a class="btn btn-danger" href="{{url('stripe',$totalprice)}}">Pay Using Card</a>
            </div>
         </div>
         <!-- footer start -->
         
           <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>