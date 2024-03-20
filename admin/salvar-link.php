<?php
if($linkUnico!=1){
    header('Location:../');
}
switch ($_REQUEST["acao"]) {
    case "cadastrar":
       $online = $_POST["online"];
       $local = $_POST["local"];
             $sql = "INSERT INTO links (online,local) VALUES('{$online}','{$local}')";
       $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Cadastro realizado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";

        }else{
            print "<script>alert('Não foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }


        break;
    case "editar":
        $online = $_POST["online"];
        $local = $_POST["local"];
      
        $sql = "UPDATE links SET online='{$online}', local='{$local}' WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
         if($res==true){
             print "<script>alert('Editado com sucesso');</script>";
             print "<script>location.href='?page=listar';</script>";
 
         }else{
             print "<script>alert('Não foi possivel editar');</script>";
             print "<script>location.href='?page=listar';</script>";
         }
        break;
    case "excluir":
       $sql="DELETE FROM links WHERE id=".$_REQUEST["id"];
       $res = $conn->query($sql);
         if($res==true){
             print "<script>alert('Deletado com sucesso');</script>";
             print "<script>location.href='?page=listar';</script>";
 
         }else{
             print "<script>alert('Não foi possivel excluir');</script>";
             print "<script>location.href='?page=listar';</script>";
         }
        break;
}