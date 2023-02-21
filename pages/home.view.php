<?php require 'inc/header.php'; ?>


    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <a href="create.php" class="btn btn-primary float-end">Add</a>
              <h5><?= APP_NAME ?></h5>

            </div>
            <div class="card-body">
              <table class="table table-hover" id="myTable">
                <thead class="table-dark">
                  <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Actions</th>
                  </tr>
                  
                </thead>
                <tbody>
                  <?php foreach($result as $row): ?>
                  <tr>
                    <td><?= $row->firstname.' '.$row->lastname; ?></td>
                    <td><?= $row->username; ?></td>
                    <td><?= $row->password; ?></td>
                    <td>
                      <a href="update-func.php?id=<?= $row->id; ?>" class="btn btn-success btn-sm">Edit</a>
                      <a href="#delete<?= $row->id; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal">Delete</a>
                    </td>
                  </tr>
                  <?php require 'inc/deleteModal.php'; ?>
                <?php endforeach; ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>



<?php require 'inc/footer.php'; ?>
