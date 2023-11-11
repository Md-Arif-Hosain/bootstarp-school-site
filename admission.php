<!-- Header Link -->
<?php include('header.php');?>  
<!-- Header Link End -->
 <!-- About Part Start -->
 <div class="admission bg-secondary" id="about">
    <div class="container">
             <div class="row">
              <h1 class="bg-dark text-light text-center mt-4">Online Admission</h1>
              <form action="/action_page.php">
                <div class="mb-3 mt-3">
                  <label for="text" class="form-label">Your Name:</label>
                  <input type="text" class="form-control" id="mname" placeholder="Enter Your Name" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="file" class="form-label">Your Picture:</label>
                  <input type="file" class="form-control" id="phone" placeholder="Upload Your photo" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="number" class="form-label">Phone Number:</label>
                  <input type="number" class="form-control" id="phone" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="date" class="form-label">Birth Date:</label>
                  <input type="date" class="form-control" id="date" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="text" class="form-label">Father Name:</label>
                  <input type="text" class="form-control" id="fname" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="text" class="form-label">Mother Name:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="number" class="form-label">Guardian's Phone Number:</label>
                  <input type="number" class="form-control" id="phone" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="text" class="form-label">Your Address:</label>
                  <input type="text" class="form-control" id="date" placeholder="Enter email" name="email">
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 ps-3">
                    <label for="pwd" class="form-label">Transcript/Marksheet:</label>
                    <select class="form-select" id="autoSizingSelect">
                      <option selected>Choose...</option>
                      <option value="1">AB+</option>
                      <option value="2">B+</option>
                      <option value="3">A+</option>
                      <option value="3">O-</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-12 ps-3">
                    <label for="pwd" class="form-label">Admission class Name:</label>
                    <select class="form-select" id="autoSizingSelect">
                      <option selected>.</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 col-sm-12 ps-3">
                    <label for="pwd" class="form-label">Blod Group:</label>
                    <select class="form-select" id="autoSizingSelect">
                      <option selected>Choose...</option>
                      <option value="1">AB+</option>
                      <option value="2">B+</option>
                      <option value="3">A+</option>
                      <option value="3">O-</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-12 ps-3">
                    <label for="pwd" class="form-label">Gender:</label>
                    <select class="form-select" id="autoSizingSelect">
                      <option selected>.</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3 mt-3">
                  <label for="subject" class="form-label">Your Message:</label><br>
                  <textarea class="form-control" id="subject" name="subject" placeholder="Write something."></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary mt-2 mb-4 btn-lg text-center">Submit Information</button>
              </form>
          </div>  
    </div>  
 </div>  
<!-- Footer Link -->
<?php include('footer.php');?>  
<!-- Footer Link End -->