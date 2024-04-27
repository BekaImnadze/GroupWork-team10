<div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
    <div class="heading_container heading_center">
       <?php myH2("Hospital <span>Treatment</span>"); ?>
    </div>
    <div class="row">
        <?php
        for ($i = 1; $i <= 4; $i++) {
            switch ($i) {
                case 1:
                    $title = "Nephrologist Care";
                    $img_src = "images/t1.png";
                    $description = "alteration in some form, by injected humour, or randomized words which don't look even slightly e sure there isn't anything";
                    break;
                case 2:
                    $title = "Eye Care";
                    $img_src = "images/t2.png";
                    $description = "alteration in some form, by injected humour, or randomized words which don't look even slightly e sure there isn't anything";
                    break;
                case 3:
                    $title = "Pediatrician Clinic";
                    $img_src = "images/t3.png";
                    $description = "alteration in some form, by injected humour, or randomized words which don't look even slightly e sure there isn't anything";
                    break;
                case 4:
                    $title = "Parental Care";
                    $img_src = "images/t4.png";
                    $description = "alteration in some form, by injected humour, or randomized words which don't look even slightly e sure there isn't anything";
                    break;
                default:
                    $title = "";
                    $img_src = "";
                    $description = "";
            }
            echo '<div class="col-md-6 col-lg-3">
                    <div class="box">
                      <div class="img-box">
                        <img src="' . $img_src . '" alt="' . $title . '">
                      </div>
                      <div class="detail-box">
                      <h4>' . $title . '</h4>
                        <p>' . $description . '</p>
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>';
      }
        ?>
    </div>
</div>