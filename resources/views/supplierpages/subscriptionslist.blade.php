@extends('supplierpages.supplierlayout')

@section('content')
<div class="row">
  <div class="col-sm-12">
    
    <div class="subscribe">
        <h3>Your Subsriptions</h3>
        <div class="well">
                @foreach ($subscribeData as $subscribeData)
                <h4><strong>{{$subscribeData->companyname}}</strong></h4>
                <a href="/supplier/subscriptions/remove/{{$subscribeData->id}}" class="btn btn-danger">Unsubscribe</a>
                @endforeach
        </div>
      
    </div>
    
  </div>
</div>
@endsection
