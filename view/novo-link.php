<?php
if($linkUnico!=1){
    header('Location:../');
}
?>
<div class="div-viewport">
  <div class="dadoGerado">

    <form action="?page=salvar" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <table>
      <tr>
    <td colspan="2"><h1> Novo link</h1></td>
</tr>
        <tr>
          <td>
            <label>Link Online</label>
          </td>
          <td>
            <input  class="inputTXT" type="text" name="online">
          </td>
        </tr>
        <tr>
          <td>
            <label>Link local</label>
          </td>
          <td width="500px">
            <input class="inputTXT" type="text" name="local">
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <button type="submit" class="btCadastrar">Cadastrar</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>