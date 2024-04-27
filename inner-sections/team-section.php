    <div class="container">
      <div class="heading_container heading_center">
        <?php myH2("Our <span>Doctors</span>"); ?>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
      <?php
      foreach ($doctorCard as $doctor) {
        echo '
        <div class="item">
            <div class="box">
                <div class="img-box">
                    <img src="' . $doctor['img'] . '" alt="" />
                </div>
                <div class="detail-box">
                    <h5>' . $doctor['name'] . '</h5>
                    <h6>' . $doctor['specialization'] . '</h6>
                    <div class="social_box">'; 
        foreach ($doctor['social'] as $social) {
            echo '
                        <a href="' . $social['link'] . '" target="_blank">
                            <i class="' . $social['icon'] . '" aria-hidden="true"></i>
                        </a>';
        }
        echo '
                    </div>
                </div>
            </div>
        </div>';
    }
      ?>
        </div>
      </div>
    </div>