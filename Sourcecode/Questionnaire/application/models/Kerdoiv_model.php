<?php 
//$seged = 1;


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
        
            $lines = 1;
            while(($data = fgetcsv($handler, 1000, ","))!==FALSE){
                    if($lines > 1){
                        $all_record_arr[] = $data;
                    }
                    $lines++;
                
            }
                //echo "<pre>";print_r($all_record_arr);
            
          
        $counted = count($all_record_arr);
        for($i=0;$i<$counted;$i++){
            $fields = array(
                'answers'.$i+1 => array(
                                         'type' => 'VARCHAR(255)',
                                         
                                  ),
                );
                $this->dbforge->add_field($fields);
               
        }
       
       
        fclose($handler);
        
        return $all_record_arr;
        
    }
    public function get_records($records){
        $csv_file_name = 'survey.csv'; 
        $handler2 = fopen($csv_file_name,'r');
        $all_record_arr2 = [];
        $linecounter2 = 1;
        while(($data2 = fgetcsv($handler2, 1000, ","))!==FALSE){
                if($linecounter2 == 2){
                    $all_record_arr2[] = $data2;
                }
                $linecounter2++;
            
        }
       
        $tablename = '';
       
        foreach($all_record_arr2 as $t){
            $tablename = $t[1];
        }
        
       
        fclose($handler2);
        if (!($this->db->table_exists(strtolower($tablename))))
        {
            $this->dbforge->create_table($tablename);
        }
        $call = $this->inserting($tablename,$records);
    }

    public function inserting($tablename,$records){

       
        $arry = array();
        
       
      
        $tmpkey = 1;
        foreach($records as $field => $value) {
            $field = 'answers'.$tmpkey;
            $field_data[$field]=$value;
            $tmpkey++;
          }
         
        $this->db->insert($tablename,$field_data);
        


    
        
       
    }
   
    
    
    
}




?>