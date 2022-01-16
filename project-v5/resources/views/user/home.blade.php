<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.head')
</head>
<body>

  <header>
  @include('user.header')
  </header>

  <!-- message create appointment -->
    @if(session()->has('message'))

      <div class="alert alert-success" align="center" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
      </div>
    @elseif(session()->has('message2'))

      <div class="alert alert-danger" align="center" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message2')}}
      </div>
    @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#appointment" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>




    <div class="page-section pb-0" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

@include('user.doctor')

@include('user.appointment')

@include('user.footer')

@include('user.scripts')
  
</body>
</html>