
<div class="container">
      <div class="heading_container heading_center">
        <?php myH2("Our <span>Doctors</span>"); ?>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team1.jpg" alt="" />
              </div>
              <div class="detail-box">
                <?php myH5("Henry"); ?>
                <?php myH6("MBBS"); ?>
                <div class="social_box">
                <?php
                  $i = 0;
                  do {
                    echo 
                    '
                    <a href="' . $socialMedia[$i]['link'] . '" target="_blank">
                      <i class="' . $socialMedia[$i]['icon'] . '" aria-hidden="true"></i>
                    </a>
                    ';
                    $i++;
                  } while ($i < sizeof($socialMedia) )
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team2.jpg" alt="" />
              </div>
              <div class="detail-box">
                <?php myH5("Jenny"); ?>
                <?php myH6("MBBS"); ?>
                <div class="social_box">
                <?php
                  $i = 0;
                  do {
                    echo 
                    '
                    <a href="' . $socialMedia[$i]['link'] . '" target="_blank">
                      <i class="' . $socialMedia[$i]['icon'] . '" aria-hidden="true"></i>
                    </a>
                    ';
                    $i++;
                  } while ($i < sizeof($socialMedia) )
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team3.jpg" alt="" />
              </div>
              <div class="detail-box">
              <?php myH5("Marco"); ?>
                <?php myH6("MBBS"); ?>
                <div class="social_box">
                <?php
                  $i = 0;
                  do {
                    echo 
                    '
                    <a href="' . $socialMedia[$i]['link'] . '" target="_blank">
                      <i class="' . $socialMedia[$i]['icon'] . '" aria-hidden="true"></i>
                    </a>
                    ';
                    $i++;
                  } while ($i < sizeof($socialMedia) )
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>