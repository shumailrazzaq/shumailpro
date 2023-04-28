<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    <style type="text/css">

        .center{
            text-align:center;
            padding-top:40px;
        }
        lable{
            display:inline-block;
            width:200px;
        }
        .design{
            padding-bottom:15px;
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


          @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" 
            aria-hidden="true">x</button>

          {{session()->get('message')}}

          </div>
          
          @endif


            <div class="center">
            <h1>Update Product</h1>
            <form action="{{url('/update_product_confirm',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf

              <div class="design">
                <lable>Product Title :</lable>
                <input type="text" class="text_color" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
              </div> 
              
              <div class="design">
                <lable>Product Description :</lable>
                <input type="text" class="text_color" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
              </div> 

              <div class="design">
                <lable>Product Price :</lable>
                <input type="number" class="text_color" name="price" placeholder="Write a price" required="" value="{{$product->price}}">
              </div> 

              <div class="design">
                <lable>Discount Price :</lable>
                <input type="number" class="text_color" name="dis_price" placeholder="Write a Discount is apply" value="{{$product->discount_price}}">
              </div> 

              <div class="design">
                <lable>Product Quantity :</lable>
                <input type="number" class="text_color" name="quantity" placeholder="Write a quantity" required="" value="{{$product->quantity}}">
              </div> 

              <div class="design">
                <lable>Product Category :</lable>
                <select name="category" class="text_color" required="">
                    <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                    @foreach($category as $category)
                    <option>{{$category->category_name}}</option>
                    @endforeach
                </select>
              </div>
              
              <div class="design">
                <lable>Current Product Image  :</lable>
                <img height="100" width="100" src="/product/{{$product->image}}">
                             </div> 

              <div class="design">
                <lable>Change Product Image  :</lable>
                <input type="file" name="image" value="{{$product->title}}">
              </div> 

              <div class="design">
                <input type="submit" value="Update Product" class="btn btn-primary">
            </div>
            </form>
            
            </div>
       </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>