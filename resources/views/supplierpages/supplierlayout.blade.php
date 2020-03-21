<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ceylon Cart</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    .update_btn{
        background-color:#00cc44;
        border: none;
        color: white;
        padding: 8px 20px;
        border-radius: 4px;
  }
  .txt{
      width:100px;
      text-align: right;
  }
    </style>
</head>
<body>
    <div id="app">
<!---------------------------------header----------------------------------->
@include('inc.navbar')
<!---------------------------------------------------------------------------->
    <div class="container">
        <a href="/search/index" class="btn btn-success" style="float:right;border-radius:30px;">Search Anything You Need... </a>&nbsp;
    </div>
    <br>

        <div class="container-fluid">

            <div class="row">
                @foreach ($supplierData as $supplierData)
                <div class="col-sm-4">
                     <!--profile details-->
                    <div class="img" style="margin:;">
                        
                        <img class="img-responsive" style="width:100%;" src="data:image;base64,{{$supplierData->image}}" alt="image"> 
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="farmdetails" style="margin-left:5vh;">
                        <h2> {{$supplierData->farmName}}</h2>
                        <strong><br>
                        <span class="glyphicon glyphicon-envelope"></span><span class="p"><span class="p">{{$supplierData->address}}</span><br><br>
                        <span class="glyphicon glyphicon-envelope"></span><span class="p"><span class="p">{{$supplierData->phoneNo}}</span><br><br>
                        <span class="glyphicon glyphicon-envelope"></span><span class="p"><span class="p">{{$supplierData->email}}</span><br><br>
                        </strong>
                        <a href="/supplier/profile/addproducts" class="btn btn-success">Add Products</a>
                    </div>
                    
                   
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-4">
                        <a href="/supplier/index" class="btn btn-success" style="margin-top:1vh;width:100%;text-align:center;">Dashboard</a>
                   <a href="/supplier/myorders" class="btn btn-success" style="margin-top:1vh;width:100%;text-align:center;">Reserved Orders</a>
                   <a href="/supplier/editprofile" class="btn btn-success" style="margin-top:1vh;width:100%;text-align:center;">Edit Profile</a>
                    <a href="{{ url('/find/customer/'.$supplierData->homeTown.'/') }}" class="btn btn-success" style="margin-top:1vh;width:100%;text-align:center;">
                    Find Customers
                    </a>
                    <a href="/supplier/subscriptions" class="btn btn-success" style="margin-top:1vh;width:100%;text-align:center;">Subscriptions</a>
                   @endforeach
                </div>
                <div class="col-sm-8">
                    <!--other details-->
                    @yield('content')
                </div>
            </div>

        </div>

        
  
    <!---------------------------------footer----------------------------------->
    @include('inc.footer')
    <!---------------------------------------------------------------------------->

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
