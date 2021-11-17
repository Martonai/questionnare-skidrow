<?php

$csv_file_name = 'survey.csv'; 

$handler = fopen($csv_file_name,'r');
$data = fgetcsv($handler,1000,",");

$all_record_arr = [];


while(($data = fgetcsv($handler, 1000, ","))!==FALSE){
        $all_record_arr[] = $data;
        
}
//echo "<pre>";print_r($all_record_arr);
fclose($handler);
$counter = 1;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
          
        </style>
    </head>
    <body>
        
        <table>
            <h1>Survey</h1>
            
            <table>
                <thead>
               
                <tbody>
                   
                    <?php foreach($all_record_arr as $rec):?>
                    <th>Kérdés <?=$counter++?></th>
                    
                    
                    <tr>
                        
                      <td><?=$rec[0]?></td>
                      <td><?=$rec[1]?></td>
                      <td><?=$rec[2]?></td>
                      <td><?=$rec[3]?></td>
                      
                    </tr>
                     
                      
                    <?php endforeach;?>
                </tbody>
                </thead>
            </table>
        </table>
        
    </body>
</html>
