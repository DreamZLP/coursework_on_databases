<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['order_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись о заказе № <?=$value['order_id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?order_id=<?=$value['order_id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_order_type" value="<?=$value['order_type'] ?>" placeholder="Тип заказа">
        	</div>
        	<div class="form-group">
        		<input type="date" class="form-control" name="edit_order_data" value="<?=$value['order_data'] ?>" placeholder="Дата">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_order_count" value="<?=$value['order_count'] ?>" placeholder="Количество">
        	</div>
          <div class="form-group">
						<input type="text" class="form-control" name="edit_order_price" value="<?=$value['order_price'] ?>" placeholder="Цена">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="edit_manager_id" value="<?=$value['manager_id'] ?>" placeholder="Код заведующего">
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
<div class="modal fade" id="deleteModal<?=$value['order_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись о заказе № <?=$value['order_id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?order_id=<?=$value['order_id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
