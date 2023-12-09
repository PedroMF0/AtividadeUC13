<?php
session_start();
include('config.php');
$sql = "SELECT * FROM agenda";

$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $html = "<style>
                .table-class {
                    border: 5px solid black;
                    border-collapse: collapse;
                    width: 100%;
                }
                .table-class td {
                    border: 1px solid black;
                    padding: 8px;
                    background-color: white;
                    color: black;
                }
            </style>";
    $html .= "<table class='table-class'>";
    $html .= "<tr>";
    $html .= "<td>ID Cliente</td>";
    $html .= "<td>Nome Cliente</td>";
    $html .= "<td>Data/Hora</td>";
    $html .= "<td>Tipo Corte</td>";
    $html .= "</tr>";

    while ($row = $res->fetch_object()) {
        $html .= "<tr>";
        $html .= "<td>" . $row->idCliente . "</td>";
        $html .= "<td>" . $row->nomeCliente . "</td>";
        $html .= "<td>" . $row->data_hora . "</td>";
        $html .= "<td>" . $row->tipoCorte . "</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
} else {
    $html = 'Nenhum dado registrado!';
}

use Dompdf\Dompdf;

require_once 'dompdf/autoload.inc.php';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->set_option('defaultfont', 'sans');

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream();
?>