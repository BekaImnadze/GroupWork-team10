<div class="container">
      <div class="heading_container heading_center">
        <?php myH2("Our <span>Doctors</span>"); ?>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
      <?php
      for ($i = 0; $i < sizeof($doctorCard); $i++) {
        echo '
      <div class="item">
        <div class="box">
          <div class="img-box">
            <img src="' . $doctorCard[$i]['img'] . '" alt="" />
          </div>
          <div class="detail-box">
            <h5>' . $doctorCard[$i]['name'] . '</h5>
            <h6>' . $doctorCard[$i]['specialization'] . '</h6>
            <div class="social_box">
              <a href="' . $doctorCard[$i]['social']['link']. '">
                <i class="' . $doctorCard[$i]['social']['icon'] . '" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
        ';
      }
      ?>
          
          
        </div>
      </div>
    </div>