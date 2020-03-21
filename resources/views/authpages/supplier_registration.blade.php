@extends('layouts.app')

@section('content')
@section('script')
         <?php 
         if(isset($_POST['nic'])){
             echo $_POST['nic'];
         }
         ?>
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
      <form action="/register/supplier" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="row">
        
        <div class="col-sm-6">
            <h4>Farm Details</h4>
            <label for="farmname" class="required control-label">Farm Name</label><br>
            <input type="text" value="{{ old('farmName') }}" class ="form-control" name="farmName" id="farmName" required placeholder="Enter Farm Name" ><br>
            
            <label for="farmRegNo" class="required control-label">Farm Reg. No</label><br>
            <input type="text" value="{{ old('farmRegNo') }}"class ="form-control" name="farmRegNo" id="farmRegNo" required placeholder="Enter Farm Registration Number" ><br>
                                  
            <label for="address" class="required control-label">Address</label><br>
            <input type="text" value="{{ old('address') }}" class ="form-control" name="address" id="address" required placeholder="Enter Your Postel Address" ><br>
            
            <label for="homeTown" class="required control-label">Home Town</label><br>
            <input type="text" value="{{ old('homeTown') }}" class ="form-control" name="homeTown" id="homeTown" required placeholder="Enter Your HomeTown" ><br>
            
            <label for="Farm Image" class="required control-label">Cover Image </label><br>
            <input type="file" class ="form-control" name="image" id="image"><br>
           
            <label for="description" class="control-label">Breif Description About Farm </label><br>
            <textarea name="description" rows="4" cols="50"  placeholder="Short discription about the Supplier..." 
            class="msg form-control">{{ old('description') }}</textarea><br>
        </div>

        <div class="col-sm-6">
            <h4>User Details</h4>

            <label for="supname" class="required control-label">Your Name</label><br>
            <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name" required placeholder="Enter Your Name"><br>
        
            <label for="nic" class="required control-label">NIC</label><br>
            <input type="text" value="{{ old('nic') }}" class="form-control" name="nic" id="nic" required placeholder=
            "Enter Your NIC Number" title="NIC number pattern:XXXXXXXV or 12 digits"><br>

            <label for="phoneNo" class="required control-label">Phone No</label><br>
            <input type="tel" value="{{ old('phoneNo') }}" class ="form-control"  name="phoneNo" 
            id="phoneNo" required placeholder="Enter the Phone Number" 
            pattern="[0-9]{9}" title="Phone number with 9 digit with 0-9"><br>
           
            <label for="accNo" class="required control-label"> Bank Account No</label><br>
            <input type="text" value="{{ old('accountNo') }}" class ="form-control" name="accountNo" id="accountNo" required placeholder="Enter Bank Account Number" ><br>
           <br>
            <h4>Login Details</h4>

            <label for="email" class="required control-label">E mail</label><br>
            <input type="email" value="{{ old('email') }}" class ="form-control" name="email" id="email"
			title="email address parrern:lowercase letters with only @ and . symbols " required placeholder="Enter the valied Email Address" ><br>
            
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
                        <br>
                <input type="submit" class ="btn btn-primary" name="register" value="Register">
        </div>
 
      </form>
    </div>
</div>
@endsection