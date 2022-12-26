@include('includes.header')
 
<section class="reg-sec" style="background-color:#d4a276; height:100vh">


    <div class="row" style="margin-top:13%; margin-left:35% ">

      {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img" >

          <img src="{{asset('../../../img/Makkah.png')}}" class="img-fluid animated" alt="">

        </div> --}}

      <div class="col-md-5 px-1">
        <form class="container-reg px-5" action="check" method="post">
                     
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>

        @endif

        @if(Session::get('message'))
        <div class="alert alert-danger">
          {{(Session::get('message'))}}
        </div>
        @endif

        @if(Session::get('Null'))
        <div class="alert alert-danger">
          {{(Session::get('Null'))}}
        </div>
        @endif

        @if(Session::get('logout'))
        <div class="alert alert-danger">
          {{(Session::get('logout'))}}
        </div>
        @endif

        @if(Session::get('null'))
        <div class="alert alert-danger">
          {{(Session::get('null'))}}
        </div>
        @endif

        @if(Session::get('message2'))
        <div class="alert alert-danger">
          {{(Session::get('message2'))}}
        </div>
        @endif

        @csrf

            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-check mb-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <br>
            <button type="submit" class="btn-get-started">login</button>
            <a href="/signup">create new account?</a>
           
          </form>
         
        </div>

    </div>
 


</section>