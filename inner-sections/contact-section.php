<div class="container">
      <div class="heading_container">
        <?php myH2("Get In Touch"); ?>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="../action/get-in-touch-action.php" method="post">
              <div>
                <input type="text" name="Name" placeholder="Full Name" required/>
              </div>
              <div>
                <input type="email" name="Email" placeholder="Email" required/>
              </div>
              <div>
                <input type="text" name="Phone" placeholder="Phone Number" required/>
              </div>
              <div>
                <input type="text" name="Message" class="message-box" placeholder="Message" required/>
              </div>
              <div class="btn_box">
                <?php myBtn("SEND"); ?>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>