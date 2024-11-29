<?php

$capital = $_POST['capital'];
$interest = $_POST['interest'] / 100 / 12; // Convertir a mensual
$term = $_POST['term'] * 12; // Convertir a meses

// Calcular la cuota mensual
$monthlyPayment = ($capital * $interest) / (1 - pow((1 + $interest), -$term));

// Mostrar el cuadro de amortización
echo "<h2>Cuadro de Amortización</h2>";
echo "<table><tr><th>Mes</th><th>Pago</th><th>Interés</th><th>Capital</th><th>Saldo</th></tr>";

$balance = $capital;
for ($month = 1; $month <= $term; $month++) {
 $interestPayment = $balance * $interest;
    $principalPayment = $monthlyPayment - $interestPayment;
    $balance -= $principalPayment;

    echo "<tr>
            <td>$month</td>
            <td>" . number_format($monthlyPayment, 2) . "</td>
            <td>" . number_format($interestPayment, 2) . "</td>
            <td>" . number_format($principalPayment, 2) . "</td>
            <td>" . number_format($balance, 2) . "</td>
          </tr>";
}

echo "</table>";