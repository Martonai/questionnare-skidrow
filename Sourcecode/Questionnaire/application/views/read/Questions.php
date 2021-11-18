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
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      
        
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<h1>Survey</h1>

<?php foreach($all_record_arr as $rec):?>   

<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
     <!-- <button type="button" class="btn btn-primary">Home</button>-->
         <div class="modal-header">

           
                <h2>Kérdés <?=$counter++?><h2>
               
               
            <h3><span class="label label-warning" id="qid"> <td><?=$rec[0]?></td></span></h3>
        </div>
        <div class="modal-body">
            <div class="col-xs-3 col-xs-offset-5">
               <div id="loadbar" style="display: none;">
                  <div class="blockG" id="rotateG_01"></div>
                  <div class="blockG" id="rotateG_02"></div>
                  <div class="blockG" id="rotateG_03"></div>
                  <div class="blockG" id="rotateG_04"></div>
                  <div class="blockG" id="rotateG_05"></div>
                  <div class="blockG" id="rotateG_06"></div>
                  <div class="blockG" id="rotateG_07"></div>
                  <div class="blockG" id="rotateG_08"></div>
          
              </div>
          </div>
        
          <div class="quiz" id="quiz" data-toggle="buttons">
           <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1"><td><?=$rec[1]?></td></label>
           <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2"><td><?=$rec[2]?></td></label>
           <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3"><td><?=$rec[3]?></td></label>
           <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4"><td><?=$rec[4]?></td></label>
           <br>
      
       
       </div>
   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
</div>
</div>
</div>

<?php endforeach;?>


</script>

</body>
</html>

