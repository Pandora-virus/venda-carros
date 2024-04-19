<?php 
   switch($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO marca (nome_marca) VALUES ('".$_POST['nome_marca']."')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=marca-listar';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=marca-listar';</script>";
        }
        break;   
    case 'listar':
            //code...
            break; 
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;        
   }