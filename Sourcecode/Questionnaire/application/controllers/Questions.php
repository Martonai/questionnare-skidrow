<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once 'Classes/PHPExcel.php';
$path ="Questions.xlsx";
$reader= PHPExcel_IOFactory::createReaderForFile($path);
$excel_Obj = $excelReader -> load($path);

//$worksheet =$excel_Obj->getActiveSheet();
$worksheet =$excel_Obj->getSheet(0);


$lastRow = $worksheet->getHighestRow();
$colomncount = $worksheet->getHighestDataColumn();
$colomncount_number= PHPExcel_Cell::columnIndexFromString($colomncount);

echo "<table>";

    for($row=1;$row<=$lastRow;$row++){
        echo "<tr>";
        for($row=1;$row<=$lastRow;$row++){
            echo "<td>";
            
            echo $wroksheet->getCell(PHPExcel_cell::stringFromColumnIndex($col).$row)->getValue();
            
            echo "</td>";
        }
        echo "</tr>";
    }

echo "</table>";
?>
