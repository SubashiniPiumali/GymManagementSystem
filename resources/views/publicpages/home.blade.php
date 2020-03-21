@extends('layouts.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


   
    

            
@section('content')

   
    <div class="container-fluid">
        <div class="row">
           <div class="col-sm-12">
             <div class="head" style="height:60vh;"></div>

             <div class="jumbotron">
                <h1 class="display-4">Join Now</h1>
                <p class="lead">More often than not, a new ecommerce entrepreneur is thinking about a cool invention for solving problems somewhere around the house. Or maybe they're considering ways to source products for their online stores from China and amaze customers with service, speed, and quality.</p>
                <hr class="my-4">
                <p>Regardless of the type of food that you plan on sending out to customers, there are conventional rules to be followed. The easy part is thinking about what to sell, and it isn't that difficult configure your own online store.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
             </div>
           </div>
        </div>
    </div>

 
  
            <div class="slideshow-container">
                    @if (count($adData)>0)
                    @foreach ($adData as $adData)
                    <div class="mySlides fade">
                      <div class="numbertext">1 / 3</div>
                      <img src="data:image;base64,{{$adData->image}}" style="width:100%">
                      
                      <div class="text">Caption Text</div>
                    </div>
                    @endforeach
                    
                    
                    <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                          </div>
                          @else
                          <p>No Advertisements found</p>
                      @endif
                    </div>

                   
                    <script>
                            var slideIndex = 0;
                            showSlides();
                            
                            function showSlides() {
                              var i;
                              var slides = document.getElementsByClassName("mySlides");
                              var dots = document.getElementsByClassName("dot");
                              for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";  
                              }
                              slideIndex++;
                              if (slideIndex > slides.length) {slideIndex = 1}    
                              for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                              }
                              slides[slideIndex-1].style.display = "block";  
                              dots[slideIndex-1].className += " active";
                              setTimeout(showSlides, 2000); // Change image every 2 seconds
                            }
                            </script>
                   
                    
                  

   
     
            
@endsection
