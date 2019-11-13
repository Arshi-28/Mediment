<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="reg-fname" class="text-black">First Name</label>
                    <input type="text" class="form-control" id="reg-fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="reg-lname" class="text-black">Last Name</label>
                    <input type="text" class="form-control" id="reg-lname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="reg-email" class="text-black">Email</label>
                <input type="email" class="form-control" id="reg-email">
              </div>
              <div class="form-group">
                <label for="reg-contact" class="text-black">Contact Number</label>
                <input type="tel" class="form-control" id="reg-contact">
              </div>
              <div class="form-group">
                <label for="reg-age" class="text-black">Age</label>
                <input type="number" class="form-control" id="reg-age">
              </div>
              <div class="form-group">
                <label for="reg-occupation" class="text-black">Occupation</label>
                <input type="text" class="form-control" id="reg-occupation">
              </div> 
              <div class="form-group">
                <label for="reg-weight" class="text-black">Weight</label>
                <input type="number" class="form-control" id="reg-weight">
              </div>
              <div class="form-group">
                  <label for="reg-gender" class="text-black">Gender</label>
                  <select id="reg-gender" class="form-control">
                      <option value="m">Male</option>
                      <option value="f">Female</option>
                      <option value="o">Other</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="reg-pwd" class="text-black">Password</label>
                <input type="password" class="form-control" id="reg-pwd">
              </div>
              <div class="form-group">
                <label for="register-conpwd" class="text-black">Confirm Password</label>
                <input type="password" class="form-control" id="register-conpwd">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="email" class="form-control" id="appointment_email">
              </div>
              <div class="form-group">
                <label for="register-pwd" class="text-black">Password</label>
                <input type="password" class="form-control" id="register-pwd">
              </div>
              <div class="form-group">
                <input type="button" value="Login" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>