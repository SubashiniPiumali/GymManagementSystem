@extends('supplierpages.supplierlayout')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="products">
      @foreach ( $paymentData as $item)
          <h3>{{$item->companyname}}</h3>
          <img class="img-responsive" style="width:100%;" src="data:image;base64,{{$item->slip_image}}" alt="image"> 
                    
      @endforeach
    </div>
  </div>
</div>






@endsection
