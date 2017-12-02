<html>
    
    <head>
        <title>Detalhes</title>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    #carros{
        width: 1000px;
        height: auto;
        margin-left: 200px;
    }
    #cabecalho{
        background: gray;
    }
    #acao{
        width: 300px;
    }
    #voltar{
        margin-left: 20px;
    }
</style>
    
    
    </head>
    <body></body>
</html>
<?php
session_start();
if(isset($_SESSION)){
    $carro = $_GET['id'];
    require 'conexao.php';
    $sql = "SELECT * FROM tbcarro WHERE idcarro = $carro";
    $query = mysqli_query($con, $sql);
    echo "<div class='row'>
        <table class='table table-striped' id='carros'>
        <thead >
        <tr id='cabecalho'>
        <td width='20%'>Modelo</td>
        <td width='20%'>Lançamento</td>
        <td width='20%'>placa</td>
        <td width='20%'>classe</td>
        <td width='20%'>Marca</td>
        <td width='10%'></td>
        </tr>
        </thead>
        <tbody>
        ";
   
        while($dados = mysqli_fetch_assoc($query)){

                        echo "<tr>
                                  <td>";
                        echo "<h5>".$dados['modelodocarro']."</h5>";
                        echo "</td>";
                        echo "<td>";
                        echo "<h5>".$dados['datadelancamento']."</h5>";
                        echo "</td>";
                        echo "<td>";
                        echo "<h5>".$dados['placa']."</h5>";
                        echo "</td>";
                        echo "<td>";
                        echo "<h5>".$dados['classcarro']."</h5>";
                        echo "</td>";
                        echo "<td>";
                        echo "<h5>".$dados['marcacarro']."</h5>";
                        echo "</td>";
                        //?sidcarro=".$dados['idcarro']."
                        echo "<td id='acao'>
                        <a class='btn btn-primary glyphicon glyphicon-ok' href='tableloc.php'> Locar</a>
                        </td>
                        ";
                        echo "</tr>";
                        

        }
        echo "</tbody>";
        echo "
                        <a class='btn btn-info glyphicon glyphicon-chevron-left' id='voltar' href='frota.php'> Voltar</a>
                       
                        
                        </tr>";
        echo "</div>";
        echo "<div class='row' id='space'>";
                echo "<div class='col-md-12'>";

                echo "</div>";
        echo "</div>";
        echo "</table>";
        
    
    
}

?>