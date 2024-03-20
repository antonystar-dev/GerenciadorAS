<div class="div-viewport">
  <div class="dadoGerado">

<?php
$sql = "SELECT * FROM links WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">


<table>
  <tr>
    <td colspan="2"><h1> Editar link</h1></td>
</tr>
        <tr>
          <td>
            <label>Link Online</label>
          </td>
          <td>
            <input type="text" name="online" value="<?php echo $row->online;?>" class="inputTXT">
          </td>
        </tr>
        <tr>
          <td>
            <label>Link local</label>
          </td>
          <td width="500px">
           
            <input type="text" name="local" value="<?php echo $row->local;?>" class="inputTXT">
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <button type="submit" class="btAlterar">Alterar</button>
          </td>
        </tr>
      </table>




</form>
</div>
</div>