

@extends('layouts.app')

@section('content')
@section('script')
         
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
            $(document).ready(function(){
                $('#password,#password-confirm').on('keyup',function(){
                    if($('#password').val()==$('#password-confirm').val() ){
                        $('#message').html('Password Verified').css('color','green');
                    }else{
                        $('#message').html('Enter the same password').css('color','red');
                    
                    }
                });
      });
    
    </script>
@stop
<div class="container">
@include('inc.messages')


       
          <form action="/register/customer" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
            <div class="col-sm-6">
            <h4>Personal Details</h4>
            <label for="cusname" class="required control-label">Name</label> <br>
            <input type="text" value="{{ old('name') }}" class ="form-control" name="name" id="name" required placeholder="Enter Your Name" ><br>
          
           <label for="companyname" class="required control-label">Company Name</label><br>
            <input type="text" value="{{ old('companyname') }}" class ="form-control" name="companyname" id="companyname" required placeholder="Enter the Company Name" ><br>
            
            <label for="nic" class="required control-label">NIC</label><br>
            <input type="text" value="{{ old('nic') }}" class ="form-control" name="nic" id="nic" required placeholder=
            "Enter Your NIC Number" title="NIC number pattern:XXXXXXXV or 12 digits"><br>

            <label for="phoneNo" class="required control-label">Phone No</label><br>
            <input type="tel" value="{{ old('phoneNo') }}" class ="form-control" name="phoneNo" id="phoneNo" 
            required placeholder="Enter the Phone Number" pattern="[0-9]{9}" title="Phone number with 9 digit with 0-9"><br>
            
            <label for="RegNo" class="required control-label">Registration No</label><br>
            <input type="text" value="{{ old('regNo') }}" class ="form-control" name="regNo" id="regNo" required placeholder="Enter the Company Registration Number" ><br>
          
                    
            <label for="address" class="required control-label">Address</label><br>
            <input type="text" value="{{ old('address') }}" class ="form-control" name="address" id="address" required placeholder="Enter Your Postel Address" ><br>
            
            <label for="hometown" class="required control-label">Home Town</label><br>
            <input type="text" value="{{ old('homeTown') }}" class ="form-control" name="homeTown" id="homeTown" required placeholder="Enter Your HomeTown" ><br>
            
            <label for="Customer Image" class="required control-label">Customer Image </label><br>
            <input type="file" value="{{ old('image') }}"class ="form-control" name="image" id="image"><br>
    </div>


            <div class="col-sm-6">   
             <h4>Login Details</h4>
            <label for="email" class="required control-label">E mail</label><br>
            <input type="email" value="{{ old('email') }}" class ="form-control" name="email" id="email" 
			required placeholder="Enter the valied Email Address" title="email address parrern:lowercase letters with only @ and . symbols " ><br>
            
            <label for="password" class="required control-label">Password</label><br>
            <input type="password" value="{{ old('password') }}" class ="form-control" name="password" id="password" required placeholder="Enter the valied Password" ><br>
            
            <label for="conpassword" class="required control-label">Confirm Password</label><br>
            <input type="password" value="{{ old('password_confirmation') }}" class ="form-control" name="password_confirmation" id="password-confirm" required placeholder="Enter the Same Password"><br>
            
                <span id ="message"></span>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        @endif
            <br>
            <input type="submit" class ="btn btn-primary" name="register" value="Register">
          </form>
          
      </div>
    </div>
</div>
@endsection
















