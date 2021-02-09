<?php 
include("conexao.php"); 
$consulta = "SELECT * FROM biobd";


?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Tutorial</title> 
    </head> 
    <body> 
      <table border="1">    
        <tr>
            <td>id</td>
            <td>transcrito</td>
            <td>Proteína</td>
            <td>P.I. (pH)</td>
            <td>MW (Kda)</td>
            <td>Localização subcelular</td>
            <td>Vitis vinifera Cromossomo</td>
        </tr> 
        <?php while($dado = $conexao->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['id']; ?></td>
          <td><?php echo $dado['transcrito']; ?></td> 
          <td><?php echo $dado['proteina']; ?></td> 
          <td><?php echo $dado['p.i.ph']; ?></td> 
          <td><?php echo $dado['mw']; ?></td> 
          <td><?php echo $dado['Localização_subcelular']; ?></td> 
          <td><?php echo $dado['vfc']; ?></td> 
          <td><?php echo date('d/m/Y', strtotime($dado['usu_datadecadastro'])); ?></td> 
          <td> 
            <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a> 
            <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>