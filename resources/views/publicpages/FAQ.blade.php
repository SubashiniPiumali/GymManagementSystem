@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
          <h3>Frequently asked questions...</h3>
          <p>take a look Frequently Asked Questions and Get your answer here...</p>
        </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        @foreach ($helpData as $helpData)
            <h4>{{$helpData->question}}</h4>
            <p>{{$helpData->answer}}</p>
        @endforeach
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h4>Enter your Question</h4>
        @include('inc.messages')
        @if(session()->has('message'))
       <div class="alert alert-success">
       {{ session()->get('message')}}
       </div>
       @endif
        <form action="/help/faq/question" method="POST">
          {{ csrf_field() }}
          
          <textarea name="question" id="" cols="100%" rows="3" class="form-control" required></textarea>
           <br>           
          <input type="submit" value="Submit" class="btn btn-success">
        </form>
      </div>
    </div>
</div>
@endsection
