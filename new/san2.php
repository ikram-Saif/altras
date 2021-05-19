<?php 
$obj = new Sanction();
 $fname = 'san-output.xml';


 $up = 0;
 if(isset($_POST['submit']))
 {
     
     if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
     {
         $fname = $_FILES["fileToUpload"]["name"];
         $fname = strtolower($fname);
         $ext = (explode(".", $fname));
         $file_extension = end($ext);
         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "san-output.$file_extension");
         $obj->message = "$fname  has been uploded successfully<br>";

          

         if((strpos($fname ,'eu')!== false) || (strpos($fname ,'un') !== false) || (strpos($fname ,'hm')!== false) || (strpos($fname ,'ofac')!== false)){
            if((strpos($fname ,'eu')!== false)  & $file_extension =='csv')
            {
                $obj->eu();

            }
            
            if((strpos($fname ,'un')!== false) & $file_extension =='csv')
            {
                $obj->un();
            }
            if((strpos($fname ,'hm')!== false) & $file_extension =='csv')
            {
                $obj->hm_and_hm2();
            }

            if((strpos($fname,'ofac') !== false) & $file_extension =='csv')
            {
                $obj->ofac();
            }

            if((strpos($fname , 'un') !== false) & $file_extension =='xml')
            {
                $obj->unxml();
            }

        } else $obj->message = "Your file name must have un , hm , ofac , eu  , only  file type csv <br> Note:- xml file work only for un sanction";
         $up = 1;
    }
     else $obj->message = "choose file to upload";

 }
 if($up==1){$dsbl = "";}else{$dsbl = "disabled";}
 if(isset($_POST['download'])){
     $obj->downloadCSV();
 }
class Sanction {
    public $table ='' ; public  $message = ''; public $table_header = '';
    public $output_san = 'sanction.csv';

  // this function call when uploaded file is EU.csv or EU sanction.csv
    function eu()
    {
        $i=0; 
        $str = '';
        $this->table_header = "<th>No</th>
                                <th>NameAlias_LastName</th>
                                <th>NameAlias_FirstName</th>
                                <th>NameAlias_MiddleName</th>
                                <th>NameAlias_WholeName</th>
                                <th>BirthDate_BirthDate</th>
                                <th>BirthDate_Day</th>
                                <th>BirthDate_Month</th>
                                <th>BirthDate_Year</th>";
        $col = array('Entity_LogicalId','NameAlias_LastName','NameAlias_FirstName','NameAlias_MiddleName','NameAlias_WholeName','BirthDate_BirthDate','BirthDate_Day','BirthDate_Month','BirthDate_Year');

        $nameArr= array('NameAlias_LastName','NameAlias_FirstName','NameAlias_MiddleName','NameAlias_WholeName');
        if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 10000, ";");
            // echo'<pre>';
            //  print_r($data);
            //  echo'<pre>';
            $col_index =  $this->getIndex($data , $col);
            $name_col =  $this->getIndex($data , $nameArr);
            // print_r($name_col);
             print_r($col_index);

            while($data = fgetcsv($handle, 10000, ";")){
                $i++; $row ='';
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';
                // echo $table;
                  if($this->IsEmptyName($data ,$name_col)!= true){

                    $this->table .= "<tr><td> $i </td>";
                    // echo $table;  
                   
                    foreach($col_index as $key =>$index)
                    {
                        // array_push($str, $data[$index]);
                        $row .= $this->checkDoubleQoute($data[$index]);
                        
                        $this->table .= "<td>$data[$index]</td>";
                        $row .= ';';
                    
                    }
                    //check if not empty row
                    if($this->validStringLength($row))
                        {
                        continue;
                        }
                    else{
                        $str .= $row;
                        $str .= "\n";
                        $this->table .= "</tr>";
                    }
                }//end if
                else {
                    continue;
                }
            }// end while
            // $str = $this->filterById($str);

            $this->putCsvFile($col,$str);
        }
        $str = ''; 
    } 
    // this function call when uploaded file is EU.csv or EU sanction.csv or un.csv
    function un()
    {
        $i=0; 
        $str = '';
        $this->table_header = "<th>No</th><th>NameAlias_FirstName</th><th>NameAlias_LastName</th><th>BirthDate_BirthDate</th>";
        $col = array('Entity_LogicalId','NameAlias_FirstName','NameAlias_LastName','BirthDate_BirthDate');

        $nameArr = array('NameAlias_FirstName','NameAlias_LastName');
        if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 10000, ";");
            // print_r($data);
            $col_index =  $this->getIndex($data , $col);
            $name_col =  $this->getIndex($data , $nameArr);

            //print_r($col_index);
            while($data = fgetcsv($handle, 10000, ";")){
                $i++; $row = '';
                if($this->IsEmptyName($data ,$name_col != true)){
                // echo $table;
                $this->table .= "<tr><td> $i </td>";
                // echo $table;  
                foreach($col_index as $key =>$index)
                {
                    // array_push($str, $data[$index]);
                    $row .= $this->checkDoubleQoute($data[$index]);
                    $this->table .= "<td>$data[$index]</td>";
                    $row .= ';';

                }

                if($this->validStringLength($row)){
                    //  echo $this->validStringLength($row);
                continue;
                }
                else{
                    //echo $row ."\n";            
                    $str .= $row;
                    $str .= "\n";
                    $this->table .= "</tr>";
                }
            } //end  if name not empty
            }// end while
            $this->putCsvFile($col,$str);
        }
        $str = ''; 
    }
    // this function call when uploaded file is HM.csv or HM2.csv
    function hm_and_hm2(){
        $i=0; $str = '';
        $this->table_header = "
                                <th>Name 1</th>
                                <th>Name 2</th>
                                <th>Name 3</th>
                                <th>Name 4</th>
                                <th>Name 4</th>
                                <th>Name 6</th>
                                <th>DOB</th>
                                <th>Nationality</th>";
        $col = array('Name 1','Name 2','Name 3','Name 4','Name 5','Name 6','DOB','Nationality');   
        $nameArr = array('Name 1','Name 2','Name 3','Name 4','Name 5','Name 6'); 

            if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
        //     // return header in row 2;
            $header_arr = $this->return_header();
        //     //get indexes of column
            $col_index = $this->getIndex($header_arr, $col);
            $name_col =  $this->getIndex($col , $nameArr);


            while($data = fgetcsv($handle, 10000, ","))
            {
               

                $i++;$row = '';
                if($i>2 && $this->IsEmptyName($data , $name_col) != true)
                {   
                    $this->table .= "<tr><td> $i </td>";
                  

                    foreach($col_index as $key =>$index)
                    {
                            $row .= $this->checkDoubleQoute($data[$index]);
                            $this->table .= "<td>$data[$index]</td>";
                            $row .= ';';
                       
                    }
                    if($this->validStringLength($row)){
                        //echo 'arabic';
                        continue;
                    }
                    else{
                    
                        $str .= $row;
                        $str .= "\n";
                        $this->table .= "</tr>";
                    }
                }
            }
           $this->putCsvFile($col,$str);

         }
        $str = '';

    }
//     // this function call when uploaded file is ofac.csv or HM2.csv
    function ofac()
    {
        $i=0; $str = '';
        $this->table_header = "
                            <th>SDN_Name</th>
                            <th>Date of birth</th>
                            <th>nationality</th>";
        $col = array(1,11);   
        $csv_header = array("SDN_Name","DOB","nationality");
            //get indexes of column
            $col_index = $col;   
            if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
                //get indexes of column
                $col_index = $col; 
                while($data = fgetcsv($handle, 10000, ","))
                {
            
                    $i++; $row ='';
                    // if(!isset($data[$i]))
                    $this->table .= "<tr><td> $i </td>";
                    foreach($col_index as $index){
                            if($index == 11 && isset($data[$index])){
                                $r = explode(";", $data[$index]);
                                $dob =  $this->get_dob($r);
                                $nat = $this->get_nat($r);
                                
                                $row .= $this->checkDoubleQoute($dob);
                                $row .= ';';

                                $row .= $this->checkDoubleQoute($nat);
                                $row .= ';';               
                            }// end if index = 11
                           // if index not DOB
                            if($index == 1 && isset($data[$index]))
                            {
                                $r = strlen($data[$index]) >0? $data[$index] : "\"\"";

                                $row .= $this->checkDoubleQoute($r);
                                $row .= ';';
                                
                                $this->table .= "<td>$r</td>";
                            }


                }//end foreach loop thrwgh index
                    
                    
                        if($this->validStringLength($row))
                        {
                            //echo 'arabic';
                            // $row .= "\"\";";
                            continue;
                        }
                        else{
                            $str .= $row;
                            $str .= "\n";
                            $this->table .= "</tr>";
                        }
             }
            //  $str = $this->filterById($str);
                $this->putCsvFile($csv_header,$str);
           }   
         $str = ''; 
    }    
            

    function unxml(){
        $str = ''; $nationality = ''; $dob = '';
        $csv_header = array('First Name','Second Name','DOB','Nationality');
            $xml = simplexml_load_file('san-output.xml') or die("Error: Cannot create object");
        
                foreach ($xml as $parent=> $x){

                    foreach($x as $key=>$j)
                    { 
                       
                        foreach($j->NATIONALITY as $nat)
                        {
                            $nationality = "\"$nat->VALUE\"";
                        }
                        foreach($j->INDIVIDUAL_DATE_OF_BIRTH as $dob)
                        {
                            $dob = "\"$dob->DATE\"";
                        }
                        
                        $str .= "\"$j->FIRST_NAME\";\"$j->SECOND_NAME\";$dob;$nationality|";
                      
                    }
               }   
        
           // }
            // print_r($str);
            $this->putXmlCsvFile($csv_header,$str);
    }

     // return  array index of colums
    function getIndex($data , $col){
        $indexes = array();
        foreach($data  as $index=> $value){
            if(in_array($value , $col)){
                array_push($indexes , $index );
            }
            else continue;
        }
        return $indexes;
    }
    function return_header(){
        $i = 0; $header =  array();
        if (($handle = fopen("san-output.csv", "r")) !== FALSE) {  
            while($data = fgetcsv($handle, 10000, ",")){
                if($i == 0){
                    $i++;
                    continue;
                }
                else
                    if($i == 1){
                        $header = $data;
                        $i++;
                        break;
                    }
                else break;
            }
            return $header;
        }

    }
    function putCsvFile($header , $lines)
    {
        //print_r($lines);
        $result = array();
        $f = fopen($this->output_san, 'w');
        // fputs($f, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        fputcsv($f , $header , ';');
        $rows = explode("\n",$lines);
        foreach($rows as  $row){
            
        //  echo $row.'<br>';
        // $row = str_replace('"','',$row);
        // echo $row.'<br>';
        $a = array();
        $d1 = explode(";",$row);
        // print_r($d1);
//          foreach ($d1 as $key=>$d)
//             {
//                 if($key < count($d1))
//                 {
//                     if(!isset($d)|| strlen($d) == 0)
//                        { array_push($a , "\"".$d."\"");
//                         echo $a[$key];}
//                     else
//                         array_push($a , $d);
// }

//             }

        fputcsv($f,$d1,';',' ');
        }
        fclose($f);
        $processComplete = 'complete';

    }
    // function removeQouatte($d1){
    //     $result = array();
    //     foreach($d1 as $d){
    //         // $w = substr($d, 0, -2);
    //         // $w = substr($d, 2);
    //         array_push($result, $d);
    //      }
    //      return $result;
    // }
    function putXmlCsvFile($header , $lines)
    {
        //print_r($lines);
        $f = fopen($this->output_san, 'w');
        // fputs($f, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        fputcsv($f , $header , ';');
        $rows = explode("|",$lines);
        foreach($rows as  $row){
        $d1 = explode(";",$row);
        fputcsv($f, $d1 , ';',' ');
        }
        fclose($f);
        $processComplete = 'complete';

    }

    function downloadCSV(){
        if (file_exists($this->output_san)) {
            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header("Content-Disposition: attachment; filename=$this->output_san");
            echo "\xEF\xBB\xBF"; // UTF-8 BOM
            header("Pragma: no-cache");
            // header('Content-Description: File Transfer');
            // header('Content-Type: application/octet-stream');
            // header('Expires: 0');
            // header('Cache-Control: must-revalidate');
            // header('Pragma: public');
            header('Content-Length: ' . filesize($this->output_san));
            readfile($this->output_san);
        }
    }

    function validStringLength($str){
        $k = str_replace(array("\"", ";"), '', $str);
        //  echo strlen($k)."\n";
        $length = strlen($k);
        // echo gettype($length);
        if($length < 2 || $length == 0 ){
        return true;
        }
        else return false;

    }
    // function to check if row has empty name
    function IsEmptyName($data , $index){
        $name = '';
        foreach($index as $i){
            $name .= $data[$i];
        }
        // echo $name.'<br>';
        // echo strlen($name).'<br>';
        return strlen($name) == 0? true : false;

    }
    // check if field has Double qoute
    function checkDoubleQoute($string){    
        $string = str_replace('"','',$string);
        $string = "\"".$string."\"";
        return $string;
    }
    function filterById($str){
        $idArr = array();
        $lines = explode("\n",$str);
        foreach($lines as $line){
            $line = explode(';', $line);
            array_push($idArr,$line[0]);
        }
        $goupedID = array_count_values($idArr);
        $arr = array();
        foreach($lines as $key=>$line){
             $f = explode(';', $line);
            $val = $goupedID[$f[0]];
            $dob =array();
            for($i=0 ; $i< $val;$i++){
                  $f1 = explode(';', $lines[$key +$i]);
                  array_merge($dob,$f1);
                
                }
                echo'<pre>';
                print_r($dob);
                echo'</pre>';
                
                $arr = call_user_func_array('array_merge', $dob);
            //    array_push($arr , $dob);
                // echo'<pre>';
                // print_r($arr);
                // echo'</pre>';

            }
            // echo'<pre>';
            // print_r($arr);
            // echo'</pre>';


        return $dob;
    }
//function to return DOB filter array contain dob and return all dob in string
function get_dob($arr){
   $dob = '';
   $dob_arr = array_filter($arr, function ($var) { return (stripos($var, 'DOB') !== false); });
   $dob_arr = array_filter($dob_arr);
   if(!empty($dob_arr)){
       
    foreach($dob_arr as $d)
    $dob .= $d ;
   }
   else $dob = "\"\"";
   return $dob;

}
//function to return nationality filter array contain nationality and return all nationality in string

function get_nat($arr){
    $nat = '';
    $nat_arr = array_filter($arr, function ($var) { return (stripos($var, 'nationality') !== false); });
    $nat_arr = array_filter($nat_arr);
    if(!empty($nat_arr)){
        
     foreach($nat_arr as $n)
     $nat .= $n ;
    }
    else $nat = "\"\"";
    return $nat;
 
 }

}//end class 

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href = "style/style.css">
        <title></title>
    </head>
    <body>
    <div class = 'main'>
        <h1 class = 'header'></h1>
        <div class = 'container'>
            <div class = 'form'>
                <form method="POST" action="san2.php" enctype="multipart/form-data" >
                        <input type="file" name="fileToUpload" class = "upload form-control" />
                        <input  type="submit" name = 'submit'  value = "Upload File"  class = 'btn btn-light'/>
                        <input  type="submit" name = 'download'  value = "download File"  class = 'btn btn-success' <?php echo $dsbl; ?> style = "margin-left:2%;"/>

                </form>
                
            </div>
            <p class = "magin-left-2"><?= $obj->message;?></p>
                <hr>
                <div class = 'col-md-8'>
                <table class="table table-striped table-condensed">
                    <tbody>
                        <tr>
                            <?= $obj->table_header;?>
                        </tr>
                    <?= $obj->table ;?> 
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
        <script>
        </script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>