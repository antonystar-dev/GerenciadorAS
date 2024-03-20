<h1> Editar link</h1>
<?php
$sql = "SELECT * FROM links WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <div class="mb-3">
    <label>Online</label>
    <input type="text" name="online" value="<?php echo $row->online;?>" class="form-control">  
  </div>
  <div class="mb-3">
    <label>local</label>
    <input type="text" name="local" value="<?php echo $row->local;?>" class="form-control">  
  </div>
  
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Alterar</button>
</div>
</form>