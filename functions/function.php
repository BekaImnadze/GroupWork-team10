<?php 


function myClient($array) {
    foreach ($array as $client) {
        echo 
        '
        <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>' . $client['name'] . '</h5>
                <h6>' . $client['text'] .  '</h6>
              </div>
              <i class="' . $client['icon'] . '" aria-hidden="true"></i>
            </div>
            <p>' . $client['info'] . '</p>
          </div>
        </div>
        ';
    };
}

function mySocial($array){
  foreach ($array as $item) {
      if(isset($item['link']) && isset($item['icon'])) {
          echo '
            <a href="' . $item['link'] . '" target="_blank">
              <i class="' . $item['icon'] . '" aria-hidden="true"></i>
            </a>
          ';
      }
  }
}

// slider section


function mainSlider($slides, $sliderSection, $carouselControls) {
  echo $sliderSection;

  $active = true;

  foreach ($slides as $index => $slide) {
      echo '<div class="carousel-item' . ($active ? ' active' : '') . '">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="detail-box">
                          <div class="play_btn">
                              <button>
                                  <i class="fa fa-play" aria-hidden="true"></i>
                              </button>
                          </div>
                          <h1>
                              ' . $slide['heading'] . ' <br>
                              <span>
                                  ' . $slide['subheading'] . '
                              </span>
                          </h1>
                          <p>
                              ' . $slide['paragraph'] . '
                          </p>
                          <a href="' . $slide['link'] . '">
                              Contact Us
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="img-box">
                          <img src="' . $slide['image'] . '" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>';

      $active = false;
  }

  echo $carouselControls;
}

// testimonial

function Testimonial($testimonialcarousel)
{
    for ($i = 0; $i < sizeof($testimonialcarousel); $i++) {
        if ($i == 0) {
            $carouselClass = 'carousel-item active';
        } else {
            $carouselClass = 'carousel-item';
        }
        echo '<div class="' . $carouselClass . '">
                <div class="box">
                    <div class="client_info">
                        <div class="client_name">
                    <h5> ' . $testimonialcarousel[$i]['main-title'] . ' </h5>
                    <h6> ' . $testimonialcarousel[$i]['title'] . ' </h6>
                </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                    <p> ' . $testimonialcarousel[$i]['text'] . ' </p>
                </div>
            </div>';
    };
    return $testimonialcarousel;
}


