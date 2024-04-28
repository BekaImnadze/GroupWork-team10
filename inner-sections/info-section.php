    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <?php myBtn("Subscribe"); ?>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <?php myH5("Address")?>
            <div class="info_contact">
            <?php 
            $i = 0;
            do {
              echo 
              '
              <a href="">
                <i class="' . $contactNav[$i]['link'] . '" aria-hidden="true"></i>
                <span>' . $contactNav[$i]['text'] . '</span>
              </a>
              '; 
              $i++;
            } while ($i < sizeof($contactNav))
          ?>
            </div>
            <div class="social_box">
            <?php mySocial($socialMedia); ?>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <?php myH5('USEFUL LINK');?>
              <div class="info_links_menu">
              <?php myUsfullLinks($usefullLink); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <?php myH5("LATEST POSTS")?>
              <?php 
              for ($i = 1; $i <= 2; $i++) { 
                switch($i) {
                  case 1:
                    $image = "images/post1.jpg";
                    $text = "Normal distribution";
                    break;
                  case 2:
                    $image = "images/post2.jpg";
                    $text = "Normal distribution";
                    break;
                  default: 
                    $image = "";
                    $text = "";
                }
              }
              echo ' 
              <div class="post_box">
              <div class="img-box">
                <img src="' . $image . '" alt="image">
              </div>
              <p>' . $text . '</p>
            </div>'
              ?>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <?php myH5("NEWS"); ?>
              <?php 
              for($i=0; $i < sizeof($postBox); $i++){
                echo '
                <div class="post_box">
                  <div class="img-box">
                    <img src="'. $postBox[$i]['image']. '" alt="image">
                  </div>
                  <p>'. $postBox[$i]['text']. '</p>
                </div>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>