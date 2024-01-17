<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <style>
        .post_title{
          font-size: 30px;
          font-weight: bold;
          text-align: center;
          padding: 30px;
          color: white;
        }
        .div_center{
          text-align: center;
          padding: 30px
  
        }
        label{
          display: inline-block;
          width: 200px;
        }
      </style>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">

        @if (session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{session()->get('message')}}
        </div>
            
        @endif

        <h1 class="post_title">Update Post</h1>
        <form action="{{url('update_post',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="div_center">
                <label for="">Post title :</label>
                <input type="text" name="title" value="{{$post->title}}">
              </div>
              <div class="div_center">
                <label for="">Post Description :</label>
                <textarea name="description" id="" >{{$post->description}}</textarea>
              </div>
              <div class="div_center">
                <label for="">Old image</label>
                <img style="margin: 0 auto;" src="/postimage/{{$post->image}}" alt="" height="100px" width="100px">
              </div>
              <div class="div_center">
                <label for="">update Image</label>
                <input type="file" name="image">
              </div>
              <div class="div_center">
                <input type="submit" value="Update" class="btn btn-primary" >
              </div>
  
        </form>
      </div>
        @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
  </body>
</html>