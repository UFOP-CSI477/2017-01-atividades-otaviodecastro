<h1>Pacientes</h1>
<section>
<hr />

<table>
    <tr>
    <th>NOME</th>
    <th>PRECO</th>
    <th>DATA</th>

    </tr>
<?php
$total = 0;

foreach($tests as $p):
    echo "<tr>";
    echo "<td>".$p['Procedure']['name']."</td>";
    echo "<td>".$p['Procedure']['price']." </td>";
    echo "<td>".$p['Test']['date']. "</td>";

    echo "</tr>";
    $total = $total + $p['Procedure']['price'];

endforeach;

?>


<tr>
    <th></th>
    <th>Total: <?=$total?></th>
    <th></th>

    </tr>
</table>
</section>
