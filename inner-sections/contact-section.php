    <div class="container">
      <div class="heading_container">
        <?php myH2("Get In Touch"); ?>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="functions/getintouch.php" method="post">
              <div>
                <input type="text"  name="username"  placeholder="Full Name" required>
              </div>
              <div>
                <input type="email"  name="email"  placeholder="Email" required/>
              </div>
              <div>
                <input type="number"  name="pone"  placeholder="Phone Number" required/>
              </div>
              <div>
                <input type="text"  name="message"  class="message-box" placeholder="Message" required/>
              </div>
              <div class="btn_box">
                <button type="submit">
                  SEND
                </button>
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