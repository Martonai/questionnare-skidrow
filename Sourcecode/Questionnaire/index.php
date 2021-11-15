<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            tr{
                font-size:50px;
            }
        </style>
    </head>
    <body>
     <?php
    $questions = [];
    $row = 1;
    if (($handler = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handler, 1000, ",")) !== FALSE) {
    $num = count($data);
    $row++;
    for ($c=0; $c < $num; $c++) {
       $questions[$c] = $data[$c];
    }
  }
  fclose($handler);
}
?>
        
        <table>
            <tr><?php foreach($questions as $d):?></tr>
            <td><?=$d?></td>
            <?php endforeach;?>
        </table>
        
        
        
        
        
        
    </body>
</html>
