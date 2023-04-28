<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

        .deg{
            margin:auto;
            padding-top:30px;

        }
        .table_deg{
            margin:auto;
            border:2px solid white;
            width:70%;
            text-align:center;
        }
        .th_deg{
            background:red;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
            <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        @include('admin.header')
               <!-- partial -->
               <div class="main-panel">
          <div class="content-wrapper">
            <h1 class="deg">All Order</h1>

            <div>

            <form action="{{url('search')}}" method="get">

            @csrf
            
                <input type="text" name="search" placeholder="Search into something">

              <input type="submit" class="btn btn-primary" value="Search">
            </form>
      </div>
            <table class="table_deg">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                    <th>Print PDF</th>
                </tr>

                @forelse($order as $order)

                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img src="/product/{{$order->image}}" alt="">
                    </td>

                    <td>
                        @if($order->delivery_status=='processing')
                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered !!! ')" class="btn btn-success">Delivered</a>
                        @else

                        <p>Delivered</p>


                        @endif
                    </td>

                    <td>
                      <a href="{{url('print_pdf',$order->id)}}">Print PDF</a>
                    </td>
                 @empty
                 <tr>
                  <td>
                    No Data Found
                  </td>
                 </tr>

                 

                </tr>
                @endforelse
            </table>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>