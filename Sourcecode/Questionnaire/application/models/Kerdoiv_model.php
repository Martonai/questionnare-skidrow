<?php 

class Kerdoiv_model extends CI_Model {
    public function __construct(){
         parent::__construct();
         $this->load->database();
         $this->load->dbforge();
          
            
    }

   
    

    public function add_table_cols(){
       
        
            $csv_file_name = 'survey.csv'; 
        
            $handler = fopen($csv_file_name,'r');
            $data = fgetcsv($handler,1000,",");
        
            $all_record_arr = [];
        
        
            while(($data = fgetcsv($handler, 1000, ","))!==FALSE){
                    $all_record_arr[] = $data;
                
            }
                //echo "<pre>";print_r($all_record_arr);
              
              
        
                
            
        $seged = 1;
        $counted = count($all_record_arr);
        for($i=0;$i<$counted;$i++){
            $fields = array(
                'answers'.$i+1 => array(
                                         'type' => 'VARCHAR(255)',
                                         
                                  ),
                );
                $this->dbforge->add_field($fields);
               
        }

        $this->dbforge->create_table('anserws'.$seged);
        
        fclose($handler);
        $counter=1;
        return $all_record_arr;
        
    }
    
    
    
}


?>