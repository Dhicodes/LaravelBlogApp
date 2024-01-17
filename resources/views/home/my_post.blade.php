<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>
    <style>
        .post_deg{
            padding: 30px;
            text-align:center;
            background-color: black;
        }
        .title_deg{
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color:white;
        }
        .des_deg{
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: whitesmoke;
        }
        .img_deg{
            width: 300px;
            height: 200px;
            padding: 30px;
            margin: 0 auto;
        }
    </style>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
      <!-- header section end -->
      @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >X</button>

            {{session()->get('message')}}
             
        </div>

      @endif


      @foreach($data as $data)
           <div class="post_deg">
             <img src="/postimage/{{$data->image}}"  class="img_deg">
             <h4 class="title_deg">{{$data->title}}</h4>
             <p class="des_deg">{{$data->description}}</p>
             <a onclick="return confirm('Are You sure ?')" href="{{url('my_post_del',$data->id)}}" class="btn btn-danger">Delete</a>
          </div>
        @endforeach

    </div>
   
      <!-- choose section end -->
      <!-- footer section start -->

      @include('home.footer')
       </body>
</html>