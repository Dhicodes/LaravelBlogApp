<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
      <!-- header section end -->
        @include('home.banner')
    </div>
      <!-- services section start -->
      @include('home.services')
      <!-- services section end -->
      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->
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