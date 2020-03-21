
@extends('customerlayouts.customerdashboard')
@section('content')


<div class="col-md-12">
@if(Session::has('success'))
 <div class="center" style="text-align: center;">
 <div class="alert alert-success">
     {{Session::get('success')}}
 </div>
</div>
 @endif

 
     
 <section class="row justify-content-center" >
    <div class="form-group">
            @foreach($displayname as $display)
           
            
           <h2> <center>{{$display->name}}</center></h2>

           <center>
             <a href="/supplier/view/{{$display->id}}">
               <img class="img-responsive" style="max-height: 20vh;" src="data:image;base64,{{$display->image}}" alt="image">
             </a>
            </center>
       
       
            @endforeach
            </div>

            @foreach($onlysupplierreserved as $customer)
<div class="col-sm-3">
        <div class="well">
       
          <th><center><img class="img-responsive" style="max-height: 20vh;" src="data:image;base64,{{$customer->image}}" alt="image"></center></th>
      <br>
   
          <span style="color:#00802b">Reserved Quantity :{{$customer->reserved_quantity}}</span>
          <br>
          <p style="color:#006600"><strong>Reserved Price: {{$customer->reserved_price}}</strong></p>
         
          
    
            
        
        </div>
    
      </div>
         
      @endforeach
  
    </section>

        
         
       
            @foreach ($totalprice as $totalprice)
            Rs : {{$totalprice->totalprice}}

            
            <?php 
            $rupees = $totalprice->totalprice;
            $dollar= $rupees/180;
              echo " | USD ".(round($dollar,2));
            ?>
            
             @endforeach
            
             


          <script
            src="https://www.paypal.com/sdk/js?client-id=AU04jMTSN6v7IKNjmdcTNI-pIpXqisd3wgX8YGv-JUILmHJqI5bfA050yymUAYITqLr86q-xG_BXR-ix">
          </script>
  
         
  
        
           
            <div class="well">
            <div class="row"> 
              
              
                    <div class="col-sm-6">
                        <div id="paypal-button-container">
                          <h3>Online Payment</h3>
                        <script>
                            paypal.Buttons({
                              createOrder: function(data, actions) {
                                return actions.order.create({
                                  purchase_units: [{
                                    amount: {
                            
                                      value: "<?php echo (round($dollar,2)); ?>"
                                
                                    }
                                  }]
                                });
                              },
                              onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                  alert('Transaction completed by ' + details.payer.name.given_name);
                                  // Call your server to save the transaction
                                  return fetch('/paypal-transaction-complete', {
                                    method: 'post',
                                    headers: {
                                      'content-type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                      orderID: data.orderID
                                    })
                                  });
                                });
                              }
                            }).render('#paypal-button-container');
                          </script>
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                  {{ session()->get('message')}}
                            </div>
                          @endif
                        </div> 


                    </div>


                    <div class="col-sm-6">
                                                                     
                    <h3>Offline Payment</h3>
                                    
                    <form action="/customer/bankslip" method="POST" enctype="multipart/form-data">
                     {{csrf_field()}}
               <!--
                        <label for="" class="required control-label">Account Number </label><br>             
                        <input type="text" name="productName" id="productName"  class="form-control"><br>
                -->        
                        <label for="image" class="required control-label">Bank Payment Slip</label><br>
                        <input type="hidden" name="supplierId" id="" value="{{$supplierId}}">
                        
                        <input type="file" class ="form-control" name="slip_image" id="slip_image"><br>
               
                                          
                        <input type="submit" value="Make Payment" name="submit" class="btn btn-primary">
                        
                        </form> 
                  
                @include('inc.messages')
    
                
                  </div>
                </div>    
            </div>   
       
        
 
        
</div>

@stop
