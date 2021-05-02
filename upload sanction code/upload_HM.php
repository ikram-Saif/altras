<?php
// header('Content_Type: text/plain');
    $table = ''; $message = '';  $i = 0; $ouput_st = '';
    
    $col = array('Name 6','Name 2','DOB','Nationality');    
    if(isset($_POST['submit']))
    {
        if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
        {
            $fname = $_FILES["fileToUpload"]["name"];
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "HM_output.csv");
            $message = "$fname  has been uploded successfully<br>";
        }
        else $message = "choose file to upload";
    
       
    //Read CSV file
    if (($handle = fopen("HM_output.csv", "r")) !== FALSE) {
        // return header in row 2;
        $header_arr = return_header();
        //get indexes of column
        $col_index = getIndex($header_arr, $col);

        while($data = fgetcsv($handle, 10000, ","))
        {
            $i++;
            if($i>2)
            {
                $table .= "<tr><td> $i </td>";
                foreach($col_index as $key =>$index)
                {
                    $table .= "<td>$data[$index]</td>";
                }
            
          }
        }
    }
    
}
function return_header(){
    $i = 0; $header =  array();
    if (($handle = fopen("HM_output.csv", "r")) !== FALSE) {  
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
                    // print_r($header);
                }
            else break;
        }
        return $header;
    }

}

// // put data in file
// function putData($ouput_st){
    
//     $output_file = fopen('output.csv', 'a+');
//         fputcsv($output_file, $ouput_st);
//     fclose($output_file);
// }

// get index of coulmn header
function getIndex($data , $col){
    $indexes = array();
    foreach($data as $index=> $value)
        {
            if(in_array($value , $col)){
                
            array_push($indexes , $index );
            }
        }
    return $indexes;
    
}
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
                <form method="POST" action="upload_HM.php" enctype="multipart/form-data" >
                        <input type="file" name="fileToUpload" class = "upload form-control" />
                        <input  type="submit" name = 'submit'  value = "Upload File"  class = 'btn btn-light'/>
                </form>
                
            </div>
            <p class = "magin-left-2"><?=$message?></p>
                <hr>
                <div class = 'col-md-6'>
                <table class="table table-striped table-condensed">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of birth</th>
                            <th>Nationality</th>
                        </tr>
                        <?= $table ;?>
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>


