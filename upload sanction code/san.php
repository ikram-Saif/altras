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
        $col = array('NameAlias_LastName','NameAlias_FirstName','NameAlias_MiddleName','NameAlias_WholeName','BirthDate_BirthDate','BirthDate_Day','BirthDate_Month','BirthDate_Year');

        if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 10000, ";");
            // print_r($data);
            $col_index =  $this->getIndex($data , $col);
            //print_r($col_index);
            while($data = fgetcsv($handle, 10000, ";")){
                $i++;
                // echo $table;
                $this->table .= "<tr><td> $i </td>";
                // echo $table;  
                $row ='';
                foreach($col_index as $key =>$index)
                {
                    // array_push($str, $data[$index]);
                $row .= "$data[$index];";
                    $this->table .= "<td>$data[$index]</td>";
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
            }
            $this->putCsvFile($col,$str);
        }
        $str = ''; 
    } 
    // this function call when uploaded file is EU.csv or EU sanction.csv or un.csv
    function un()
    {
        $i=0; 
        $str = '';
        $this->table_header = "<th>No</th><th>NameAlias_FirstName</th><th>NameAlias_LastName</th><th>BirthDate_BirthDate</th><th>NameAlias_Function</th><th>Identification_TypeDescription</th><th>Identification_Number</th>";
        $col = array('NameAlias_FirstName','NameAlias_LastName','BirthDate_BirthDate','NameAlias_Function','Identification_TypeDescription','Identification_Number');

        if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 10000, ";");
            // print_r($data);
            $col_index =  $this->getIndex($data , $col);
            //print_r($col_index);
            while($data = fgetcsv($handle, 10000, ";")){
                $i++; $row = '';
                // echo $table;
                $this->table .= "<tr><td> $i </td>";
                // echo $table;  
                foreach($col_index as $key =>$index)
                {
                    // array_push($str, $data[$index]);
                $row .= "$data[$index];";
                    $this->table .= "<td>$data[$index]</td>";
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
            }
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

            if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
        //     // return header in row 2;
            $header_arr = $this->return_header();
        //     //get indexes of column
            $col_index = $this->getIndex($header_arr, $col);

            while($data = fgetcsv($handle, 10000, ","))
            {
                $i++;
                if($i>2)
                {   $row = '';
                    $this->table .= "<tr><td> $i </td>";
                    foreach($col_index as $key =>$index)
                    {
                        $row .= "$data[$index];";
                        $this->table .= "<td>$data[$index]</td>";
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
                    foreach($col_index as $index)
                        {
                            if($index == 11 && isset($data[$index]))
                            {
        //                         //echo $data[$index]."<br>";
                                $r = explode(";", $data[$index]);    
                                if(count($r) >= 1)
                                {
                                    foreach($r as $nationalityAndDOB){
        //                             // echo $nationalityAndDOB."<br>";
                                        if(strpos($nationalityAndDOB, 'DOB') !== false){
                                            $dob = strstr($nationalityAndDOB ,'DOB'); 
                                            $row .= $dob;
                                            continue;
                                        }

                                        if(strpos($nationalityAndDOB, 'nationality') !== false)
                                        {
                                            $nat = strstr($nationalityAndDOB, 'nationality');
                                            $nat = str_replace('nationality', '', $nat); 
                                            $row .= "$nat";
                                                        
                                        }
                                        $row .= ';';
                                        // echo $row."<br>";

                                    }
                               }
                                }
        //                     // if index not DOB
                            if($index == 1 && isset($data[$index]))
                            {
                                $r = $data[$index];
                                $row .= "$r;";
                                $this->table .= "<td>$r</td>";
                            }
                        }
                    
                    
                        if($this->validStringLength($row))
                        {
                            //echo 'arabic';
                            continue;
                        }
                        else{
                            $str .= $row;
                            $str .= "\n";
                            $this->table .= "</tr>";
                        }
             }
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
                            $nationality = "$nat->VALUE";
                        }
                        foreach($j->INDIVIDUAL_DATE_OF_BIRTH as $dob)
                        {
                            $dob = "$dob->DATE";
                        }
                        
                        $str .= "$j->FIRST_NAME;$j->SECOND_NAME;$dob;$nationality|";
                      
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
        $f = fopen($this->output_san, 'w');
        fputs($f, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        fputcsv($f , $header , ';');
        $rows = explode("\n",$lines);
        foreach($rows as  $row){
    
        $d1 = explode(";",$row);

        fputcsv($f, $d1 , ';','"');
        }
        fclose($f);
        $processComplete = 'complete';

    }
    function putXmlCsvFile($header , $lines)
    {
        //print_r($lines);
        $f = fopen($this->output_san, 'w');
        fputs($f, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        fputcsv($f , $header , ';');
        $rows = explode("|",$lines);
        foreach($rows as  $row){
        $d1 = explode(";",$row);
        fputcsv($f, $d1 , ';');
        }
        fclose($f);
        $processComplete = 'complete';

    }

    function downloadCSV(){
        if (file_exists($this->output_san)) {
            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header('Content-Disposition: attachment; filename="'.basename($this->output_san).'"');
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
//     // chekc if string has arabic text
//     function hasArabic($str){
//         // if(strlen('EU.39.56') != mb_strlen('EU.39.56', 'utf-8'))
//         // echo 'not english';
//         // else echo'english';
//     // if (preg_match('/[اأإء-ي]/ui', $str) || !preg_match('/[^a-zA-Z\d]/', $str) ) {
//         if(strlen($str) != mb_strlen($str, 'utf-8'))
//         {
//             $rows = explode(";",$str);
//             echo $str."</br>";
//             return true;
//         } else {
//             return false;
//         }
//     }
    function validStringLength($str){
        $k = str_replace(array("#", ";"), '', $str);
        //  echo strlen($k)."\n";
        $length = strlen($k);
        // echo gettype($length);
        if($length < 2 || $length == 0 ){
        return true;
        }
        else return false;

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
                <form method="POST" action="san.php" enctype="multipart/form-data" >
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