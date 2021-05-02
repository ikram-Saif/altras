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
                        <th>Entity_LogicalId</th>
                        <th>Entity_EU_ReferenceNumber</th>
                        <th>Entity_Regulation_Programme</th>
                        <th>NameAlias_LastName</th>
                        <th>NameAlias_FirstName</th>
                        <th>NameAlias_MiddleName</th>
                        <th>NameAlias_WholeName</th>
                        <th>NameAlias_Gender</th>";

    $col = array('Entity_LogicalId','Entity_EU_ReferenceNumber','Entity_Regulation_Programme','NameAlias_LastName','NameAlias_FirstName','NameAlias_MiddleName','NameAlias_WholeName','NameAlias_Gender');

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
            foreach($col_index as $key =>$index)
            {
                // array_push($str, $data[$index]);
               $str .= "$data[$index];";
                $this->table .= "<td>$data[$index]</td>";
            }
            $str .= "\n";
            $this->table .= "</tr>";
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
            $i++;
            // echo $table;
            $this->table .= "<tr><td> $i </td>";
            // echo $table;  
            foreach($col_index as $key =>$index)
            {
                // array_push($str, $data[$index]);
               $str .= "$data[$index];";
                $this->table .= "<td>$data[$index]</td>";
            }
            $str .= "\n";
            $this->table .= "</tr>";
        }
        $this->putCsvFile($col,$str);
    }
    $str = ''; 
}
// this function call when uploaded file is HM.csv or HM2.csv
function hm_and_hm2(){
    $i=0; $str = '';
    $this->table_header = "<th>No</th>
                            <th>Name 1</th>
                            <th>Name 2</th>
                            <th>Name 3</th>
                            <th>Name 4</th>
                            <th>Name 4</th>
                            <th>Name 6</th>
                            <th>DOB</th>
                            <th>Nationality</th>
                            <th>Country of Birth</th>
                            <th>NI Number</th>
                            <th>Listed On</th>
                            <th>Last Updated</th>";
     $col = array('Name 1','Name 2','Name 3','Name 4','Name 5','Name 6','DOB','Nationality','Country of Birth','NI Number','Listed On','Last Updated');    

     if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
        // return header in row 2;
        $header_arr = $this->return_header();
        //get indexes of column
        $col_index = $this->getIndex($header_arr, $col);

        while($data = fgetcsv($handle, 10000, ","))
        {
            $i++;
            if($i>2)
            {
                $this->table .= "<tr><td> $i </td>";
                foreach($col_index as $key =>$index)
                {
                    $str .= "$data[$index];";
                    $this->table .= "<td>$data[$index]</td>";
                }
                $str .= "\n";
                $this->table .= "</tr>";
          }
        }
        $this->putCsvFile($col,$str);

        }
        $str = '';

    }
// this function call when uploaded file is HM.csv or HM2.csv
function ofac(){
    $i=0; $str = '';
    $this->table_header = "<th>No</th>
                        <th>ent_num</th>
                        <th>SDN_Name</th>
                        <th>SDN_TYPE</th>
                        <th>Program</th>
                        <th>Date of birth</th>";
    $col = array(0,1,2,3,11);   
    $csv_header = array("ent_num","SDN_Name","SDN_TYPE","Program","DOB");
    if (($handle = fopen("san-output.csv", "r")) !== FALSE) {
        //get indexes of column
        $col_index = $col;          
        while($data = fgetcsv($handle, 10000, ",")){
            
                $i++; $x ='';
                // if(!isset($data[$i]))
                $this->table .= "<tr><td> $i </td>";
                foreach($col_index as $index)
                    {
                    $r = isset($data[$index]) ? $data[$index] : null;
                     $x .= "$r;";
                     $this->table .= "<td>$r</td>";
                    }
                  if($x === ';;;;;' ){
                  echo $x."jjjjjjjjjjjjjjjjjjjj";
                  continue;
                  }
                  else{
                  $str .= $x;
                    $str .= "\n";
                $this->table .= "</tr>";
                  }
        
        }
        $this->putCsvFile($csv_header,$str);
    }
    $str = '';
}
function unxml(){
    $str = '';$designat = ''; $nationality = ''; $dob = ''; $docType = ''; $docNum = '';$lUpd = '';
    $csv_header = array('Data Id','First Name','Second Name','List Type','DOB','Nationality','Designation','Type Of DOc','Don Number','Last Updated');
        $xml = simplexml_load_file('san-output.xml');
        for( $xml->rewind(); $xml->valid(); $xml->next() ) 
        {
            if($xml->hasChildren()) {
                foreach($xml->current() as $key=>$j)
                { 
                    // print_r($key);
                    foreach($j->DESIGNATION as $designaion)
                    {
                        $designat = $designaion->VALUE;
                        // print_r($designat);
                    }
                    foreach($j->NATIONALITY as $nat)
                    {
                        $nationality = "$nat->VALUE";
                    }
                    foreach($j->INDIVIDUAL_DATE_OF_BIRTH as $dob)
                    {
                        $dob = "$dob->DATE";
                    }
                    foreach($j->INDIVIDUAL_DOCUMENT as $doc)
                    {
                        $docType = $doc->TYPE_OF_DOCUMENT;
                        $docNum = "$doc->NUMBER";
                    }
                    foreach($j->LAST_DAY_UPDATED as $lastUpd)
                    {
                        $lUpd = "$lastUpd->VALUE";
                        
                    }
                    $str .= "$j->DATAID;$j->FIRST_NAME;$j->SECOND_NAME;$dob;$j->UN_LIST_TYPE;$nationality;$designat;$docType;$docNum;$lUpd|";
                    // $str .= "\n";
                //    echo $str;
                    
                }
            }   
     
        }
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
    fputcsv($f , $header);
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
    fputcsv($f , $header , ',');
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
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($this->output_san).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($this->output_san));
        readfile($this->output_san);
}
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