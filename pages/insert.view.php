<?php require 'inc/header.php'; ?>


    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <a href="index.php" class="btn btn-secondary float-end">Back</a>
              <h5><?= APP_NAME ?></h5>
            </div>
            <div class="card-body">
              <form action="create.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Firstname</label>
                      <input type="text" class="form-control" name="firstname" required>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>Lastname</label>
                      <input type="text" class="form-control" name="lastname" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" required>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" required>
                    </div>
                  </div>
                </div>
                <button class="col-md-12 mt-3 btn btn-primary" type="submit" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php require 'inc/footer.php'; ?>
