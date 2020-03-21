
<!DOCTYPE html>
<html>
<head>
    



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ceylon Cart</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
  
  
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<style>




</style>
</head>

<body>
  @include('inc.navbar')
  <div class="container">

    <div class="row">

      <div class="col-sm-4">

        @foreach($customerdetailes as $custo)

          <div class="img" >
            <img class="img-responsive" style="width:100%;" src="data:image;base64,{{$custo->image}}" alt="image"> 
          </div>

        @endforeach

      </div>

      <div class="col-sm-8">
          @foreach($customerdetailes as $custo2)
            <h2>{{$custo2->companyname}}</h2>
            <h4>Customer Name : {{$custo->name}}</h4>
            <h4>{{$custo->address}}</h4>
            <h4>{{$custo->phoneNo }}</h4>
            <h4> {{$custo->email}}</h4>
            <a href ="/customer/orders/{{$custo->customerId}}" class="btn btn-info" style="width: 100%;  
              text-align: center;font-size: 16px;border-radius: 2px;color:black;font-weight: bold;">View Orders</a><br><br>
             <a href="/customer/subscribe/{{$custo->customerId}}">
              <div class="btn btn-danger" style="width:80%;">Subscribe </div>
            </a>
          @endforeach

          @include('inc.messages')
      </div>

    </div>


  </div>

@include('inc.footer')

</body>





</html>






 
        



