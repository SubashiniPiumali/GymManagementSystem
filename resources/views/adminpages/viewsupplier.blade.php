@extends('pageLayouts.adminlayout')

@section('content')
@isset($supplierData)
       <div class="row">
           <div class="col-sm-8">
                  <div class="well">
                         
                         
                         <table class="table">
                            @foreach ($supplierData as $supplierData)
                            <h4>{{$supplierData->name}} <small>- ( Supplier )</small></h4>
                            <small>{{$supplierData->address}}</small><br>
                              
                              <tr>
                                <td>Name</td>
                                <td>{{$supplierData->farmName}}</td>
                              </tr>
                              <tr>
                                <td>Supplier Name</td>
                                <td>{{$supplierData->name}}</td>
                              </tr>
                              <tr>
                                <td>NIC</td>
                                <td>{{$supplierData->nic}}</td>
                              </tr>   
                              <tr>
                                <td>Phone No</td>
                                <td>{{$supplierData->phoneNo}}</td>
                              </tr>
                              <tr>
                                <td>E-mail</td>
                                <td>{{$supplierData->email}}</td>
                              </tr>
                              <tr>
                                <td>Registered Number</td>
                                <td>{{$supplierData->farmRegNo}}</td>
                              </tr>
                              <tr>
                                <td>Address</td>
                                <td>{{$supplierData->address}}</td>
                              </tr>
                              <tr>
                                <td>Home Town</td>
                                <td>{{$supplierData->homeTown}}</td>
                              </tr> 
                                
                              
                            </table>
                         </div>
                         <a href="/admin/mailbox/{{$supplierData->email}}" class="btn btn-primary">Send Email</a>
                         <a href="/admin/removeuser/supplier/{{$supplierData->supplierId}}" class="btn btn-danger" onclick="return confirm('Remove Customer! Are You Sure?');">Remove User</a>
                        
                  </div>
           </div>
           <div class="col-sm-4">
             <div class="">
                
                <img class="img-responsive" style="max-height: 30vh;" src="data:image;base64,{{$supplierData->image}}" alt="image"> 
                @endforeach
              </div>

           </div>
       </div>
       @endisset     
@endsection