<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homecss')
   </head>
   <body>
    <style>
        .div_deg{
            text-align: center;
        }
        .title_deg{
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: white;
        }
        label{
            display: inline-block;
            width: 200px;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        .field_deg{
            padding: 25px;
        }
    </style>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
      <!-- header section end -->

      
      <div class="div_deg">
          <h3 class="title_deg">Add Post</h3>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label for="">Title</label>
                <input type="text" name="title" id="">
            </div>
            <div  class="field_deg">
                <label for="">Description</label>
                <textarea name="description" id=""></textarea>
            </div>
            <div  class="field_deg">
                <label for="">Add Image</label>
                <input type="file" name="image" id="">
            </div>
            <div>
                <input type="submit" class="btn btn-outline-secondary" value="Add Post">
            </div>
        </form>
      </div>
      <!-- services section start -->
      <!-- blog section start -->
      @include('home.blog')
      <!-- blog section end -->
      <!-- client section start -->
      @include('home.clientchoose')
      <!-- choose section end -->
      <!-- footer section start -->

      @include('home.footer')
       </body>
</html>