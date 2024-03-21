<?php
if($linkUnico!=1){
    header('Location:../');
}
?>
<div class="div-viewport">

<div class="dadoGerado">

<?php
$sql = "SELECT * FROM links";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if ($qtd > 0) {
    echo "<table border='1'>";
    echo "<tr class='colunaFixa3'>";
    echo "<th>ID</th>";
    echo "<th width='500px'>Link Online</th>";
    echo "<th width='500px'>Link Local</th>";
   
    echo "<th>AÇÕES</th>";
    echo "</tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td class='colunaFixa' height='40px'>" . $id = $row->id . "</td>";
        $online= $row->online;
        $local = $row->local;
        echo "<td class='linkTexto'><a href='".$online."'target='_blank' style='color:black'>".$online."</a></td>";
        echo "<td class='linkTexto'><a href='".$local."'target='_blank' style='color:black'>".$local."</a></td>";
       
        echo "<td>
         <button class='btAlterar' onclick=\"location.href='?page=editar&id=" . $row->id . "';\" >Editar</button>
         <button class='btExcluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\">Excluir</button>
         </td>";

        echo "</tr>";
    }
    echo "<table>";
} else {
    echo "<p>Não encontrou resultados!</p>";
}
?>
</div>
</div>