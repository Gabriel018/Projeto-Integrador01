<?php
	require("controller/cliente.php");
?>

<form method="post" action="#">
    <label for="">Pesquisar</label>
    <input type="text" name="dados">
    <input type="hidden" name="acao" value="listar">
    <button>OK</button>
</form>
<table>
    <tr>
        <th>ID</th> <th> Nome </th> <th> E-mail </th> <th> CEP </th>
    </tr>
<?php
foreach($cliente as $c){
    echo "<tr> 
        <td> $c[id] </td>
        <td> $c[nome]</td>
        <td>$c[email]</td>
        <td>$c[cep]</td>
    </tr>";
}
?>
</table>