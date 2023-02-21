<!-- Modal -->
<div class="modal fade" id="delete<?= $row->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="text-center">Delete user <?= ucfirst($row->username); ?></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="index.php" method="post">
          <input type="hidden" name="id" value="<?= $row->id; ?>">
          <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        </form>
        
      </div>
    </div>
  </div>
</div>