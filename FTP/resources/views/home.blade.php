@include('includes/header')

@include('includes.cta')

  
  <main id="main" class="mt-4">





    <div class="pt-4" style="background-color: #f3f5fa">
    <!-- ======= Hajj Section ======= -->
    
    <div class="section-title mt-3">
      <h2> <a href="hajjpackages">Hajj Packages</a></h2>
       </div>
    
    @include('includes.hajj')

  
    <!-- End Hajj Section -->


    <!-- ======= Umrah Section ======= -->
    <section class="section-title mt-4"><h2>Umrah packages</h2></section>
    @yield('umrah')

  
    <!-- End Umrah Section -->


{{--     
    @yield('Travel') --}}



    @include('includes.portofolio')
   


    @include('includes.gallery')
    
    <!--      Gallery end    . -->
    
    
    @yield('hotels')





    </main><!-- End #main -->
  </div>
    @include ('includes/footer')



