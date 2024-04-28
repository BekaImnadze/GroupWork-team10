    <div class="container">
      <div class="row">
        <div class="col">
          <form action="functions/appoitment.php" method="post">
           <?php myH4("BOOK <span>APPOINTMENT</span>"); ?>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" class="form-control" name ="name" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="doctor" class="form-control wide" id="inputDoctorName">
                    <option value="Could you please tag a Doctor !!!">DOCTOR</option>
                    <option value="Dr. Fati ">Dr. Fati Todua </option>
                    <option value="Dr. Temo ">Dr. Temo Gigauri  </option>
                    <option value="Dr. Beqa ">Dr. Beka Imnadze  </option>
                    <option value="Dr. Beqa ">Dr. Madlena Bokuchava  </option>
                    <option value="Dr. Beqa ">Dr. Guga kobakhidze  </option>

                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="department" class="form-control wide" id="inputDepartmentName">
                    <option value="Normal distribution ">Pediatrics </option>
                    <option value="Hospital Department">Surgery</option>
                    <option value="Normal distribution ">Otorhinolaryngology </option>
                    <option value="Normal distribution ">Plastic surgery</option>
                    <option value="Normal distribution ">Ginecology</option>

                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="pohne" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text"  name="inputSymptoms" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" name = "date" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>