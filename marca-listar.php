<h1>Listar Marca</h1>

<?php
    $sql ="SELECT * FROM marca";
    $res = $conn->query($sql);
    $qtd =$re->num_rows; //mostra quantidade de linhas

    if($qtd > 0){
        print "<p>Enccontrou <b>$qtd</b> resultado(s).</p>";
        print "<table>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_marca."</td>";
            print "<td>".$row->nome_marca."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "Não encontrou resultado(s).";
    }
