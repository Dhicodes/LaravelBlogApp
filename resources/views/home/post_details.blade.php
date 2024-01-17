<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
      <!-- header section end -->
    </div>

    <div class="col-md-12" style="text-align: center;">
        <div><img style="padding: 20px;height:200px; width=150px;" src="/postimage/{{$post->image}}" class="services_img"></div>
        <h4>{{$post->title}}</h4>
        <h4>{{$post->description}}</h4>
         <p>Post by <b>{{$post->name}}</b></p>
        {{-- <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div> --}}
      </div>
     
      @include('home.blog')
      @include('home.clientchoose')
      <!-- choose section end -->
      <!-- footer section start -->

      @include('home.footer')
       </body>
</html>