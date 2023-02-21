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
              <form action="update-func.php?id=<?= $view->id ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Firstname</label>
                      <input type="text" class="form-control" name="firstname" value="<?= $view->firstname ?>" required>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>Lastname</label>
                      <input type="text" class="form-control" name="lastname" value="<?= $view->lastname ?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" value="<?= $view->username ?>" required>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" value="<?= $view->password ?>" required>
                    </div>
                  </div>
                </div>
                <button class="col-md-12 mt-3 btn btn-primary" type="submit" name="update">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php require 'inc/footer.php'; ?>
