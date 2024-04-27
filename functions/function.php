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
        echo "<li><a href='" . $item["link"] . "' target='_blank'></a></li>";
     }
    }