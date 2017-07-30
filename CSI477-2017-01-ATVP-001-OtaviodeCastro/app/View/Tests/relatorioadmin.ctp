<h1>Pacientes</h1>
<section>
<hr />

<table>
    <tr>
    <th>Paciente</th>
    <th>Procedure</th>
    <th>Date</th>

    </tr>
<?php
$total = 0;
$cont = 0;

foreach($tests as $p):
    echo "<tr>";
    echo "<td>".$p['Test']['id']."</td>";
    echo "<td>".$p['Procedure']['name']." </td>";
    echo "<td>".$p['Test']['date']. "</td>";

    echo "</tr>";
    $total = $total + $p['Procedure']['price'];
    $cont = $cont+1;
endforeach;

?>


<tr>
    <th>Quantidade: <?=$cont?></th>
    <th>Total: <?=$total?></th>
    <th></th>

    </tr>
</table>
</section>
