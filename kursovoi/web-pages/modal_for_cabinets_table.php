<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['cabinet_number'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись о кабинете № <?=$value['cabinet_number'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?cabinet_number=<?=$value['cabinet_number'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_cabinet_status" value="<?=$value['cabinet_status'] ?>" placeholder="Статус">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_cabinet_square" value="<?=$value['cabinet_square'] ?>" placeholder="Площадь">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_manager_id" value="<?=$value['manager_id'] ?>" placeholder="Заведующий">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['cabinet_number'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись о кабинете № <?=$value['cabinet_number'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?cabinet_number=<?=$value['cabinet_number'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
