<div class="container">
         <div class="heading_container">
             <?php myH2("<span> Testimonial </span>"); ?>
         </div>
     </div>
     <div class="container px-0">
         <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
             <div class="carousel-inner testimonial-carousel">
                 <?php Testimonial($testimonialcarousel); ?>
             </div>
             <div class="carousel_btn-box">
                 <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only"> Previous </span></a>
                 <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only"> Next </span></a>
             </div>
         </div>
     </div>