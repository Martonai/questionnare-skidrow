<?php
$this->load->model('Kerdoiv_model','k_model');
$all_record_arr = $this->k_model->add_table_cols();
$counter = 1;
$answers = [];
foreach ($_POST as $j)
{
  //  echo ' '.$j;
}



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
<form method="post">
<input type="submit" value="submit">

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
         
          <br>
           <label class="element-animation1   btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name=<?=$counter?> value="1" required><td><?=$rec[1]?></td></label>
           <label class="element-animation2   btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name=<?=$counter?> value="2" required><td><?=$rec[2]?></td></label>
           <label class="element-animation3   btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name=<?=$counter?> value="3" required><td><?=$rec[3]?></td></label>
           <label class="element-animation4   btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name=<?=$counter?> value="4" required><td><?=$rec[4]?></td></label>
           <br>
           <?php
                
               $chosenanswer = '';
               foreach($_POST as $post){
                   if($post == 1){
                       $chosenanswer = $rec[1];
                   }
                 else  if($post == 2){
                    $chosenanswer = $rec[2];
                 }
               else  if($post == 3){
                    $chosenanswer = $rec[3];
                }
               else if($post == 4){
                    $chosenanswer = $rec[4];
                }
        
               }
               $answers = [
                   $counter => $chosenanswer
               ];
              var_dump($answers);
                

            ?>
          

      
       
       </div>
   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
</div>
</div>
</div>
<?php



?>
<?php endforeach;?>
</form>



</script>

</body>
</html>

