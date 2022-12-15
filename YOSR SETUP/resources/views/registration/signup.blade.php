@include('includes.header')
 
<section class="reg-sec" style="background-color:#294341; height:100vh; overflow-y:scroll">



    <div class="row" style="margin-top:7%;">
    <div class="col-lg-5 profilecontainer">
      <div><img src="{{asset('../../img/Yosr-02.png')}}"></div>
    </div>
    <div class="col-lg-7" style="  margin-left:auto; margin-right:auto;  align-content:center;">
    <form class="container-reg"  action="store" method="post" >

        
       @if (Session::get('fail'))
        <div class="alert alert-danger">
          {{Session::get('fail')}}
        </div>

        @endif


        @csrf
     
       
 
            <div class="row mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" >
              <span style="color: #e34646;">@error ('email') {{$message}} @enderror</span>
            </div>
            
            <div class="row mb-3 mt-3" style="padding:30px margin-left:auto; margin-right:auto;  align-content:center;">
            <div class="col-lg-6">
                <label for="fstname" class="form-label">first name:</label>
                <input type="text" class="form-control" id="fstname" placeholder="Enter your firstname" name="fstname" value="{{old('fstname')}}" style="width:200px;" >
                <span style="color: #e34646;">@error ('fstname') {{$message}} @enderror</span>
            </div>
            
            <div class="col-lg-6" >
                <label for="lstname" class="form-label">last name:</label>
                <input type="text" class="form-control" id="lstname" placeholder="Enter your lastname" name="lstname" value="{{old('lstname')}}" style="width:200px;" >
                <span style="color: #e34646;">@error ('lstname') {{$message}} @enderror</span>
            </div>
            </div>

            <div class="row mb-3">
              <label for="password" class="form-label">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="(?=.*\d).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
              <span style="color: #e34646;">@error ('password') {{$message}} @enderror</span>

            </div>

            <div class="row mb-3">
            <label for="confirm_password" class="form-label">Confirm password:</label>
            <input type="password" class="form-control" id="confirm_pwd" placeholder="Confirm password" name="confirm_password">
            <span style="color: #e34646;">@error ('password'){{'password conformation is required'}} @enderror</span>
            </div>    

            <div class="row mb-3">
                <label for="phone" class="form-label">phone number:</label>
                <input type="number" class="form-control" id="phone" placeholder="enter phone number" name="phone" value="{{old('phone')}}">
                <span style="color: #e34646;">@error ('phone') {{$message}} @enderror</span>
              </div>

            <br>
            <button type="submit" class="btn-get-started">signup</button>
            <a href="/login">already have an account?</a>
        
    </form>  
    </div>  
   </div>
   
    <script>


        var password = document.getElementById("password");
   var confirm_password = document.getElementById("confirm_pwd");
  phonenum = document.getElementById("phone");


function validatePassword(){
//pass conformation -------------------------------
  if(password.value == confirm_password.value) {
    confirm_password.setCustomValidity('');
  } else {
    confirm_password.setCustomValidity("Passwords Don't Match");
   
}



if(phonenum.length == 10){
  
} else if (phonenum.value.length != 10) {
  
phonenum.setCustomValidity("Not 10 digit");
}

// //pass length -------------------------------
//     if(password.value.length < 8){
//     password.setCustomValidity("password at least should be 8 character or more");
// }else if(password.value.length > 8){  
//     confirm_password.setCustomValidity('');
//  }

 
//10 phone number digit -------------------------------
}


phonenum.onchange= validateNumber;
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

    </script>


</section>