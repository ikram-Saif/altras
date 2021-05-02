<?php
// header('Content_Type: text/plain');
    $table = ''; $message = '';  $i = 0; $ouput_st = '';
    $col = array('NameAlias_WholeName','BirthDate_Year','Entity_DesignationDate','Identification_TypeDescription');    
    if(isset($_POST['submit']))
    {
        if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
        {
            $fname = $_FILES["fileToUpload"]["name"];
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "newFile.csv");
            $message = "$fname  has been uploded successfully<br>";
        }
        else $message = "chose file to upload";
    
       
    //Read CSV file
    if (($handle = fopen("newFile.csv", "r")) !== FALSE) {
        $data = fgetcsv($handle, 10000, ";");
       $col_index =  getIndex($data , $col);
        // print_r($data);
        while($data = fgetcsv($handle, 10000, ";")){
            $i++;
            $table .= "<tr><td> $i </td>";
            foreach($col_index as $key =>$index)
            {
                // $ouput_st .= "$data[$index],";
                $table .= "<td>$data[$index]</td>";

            }
            // putData(str_getcsv($ouput_st));
            $ouput_st = '';
           $table .= "</tr>";
        }
            }
    
}
// put data in file
function putData($ouput_st){
    
    $output_file = fopen('output.csv', 'a+');
        fputcsv($output_file, $ouput_st);
    fclose($output_file);
}
// get index of coulmn header
function getIndex($data , $col){
    $indexes = array();
    foreach($data  as $index=> $value){
        if(in_array($value , $col))
        array_push($indexes , $index );
    }
    return $indexes;
    // print_r($indexes);
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
                <form method="POST" action="upload1.php" enctype="multipart/form-data" >
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
                            <th>Designation Date</th>
                            <th>Name</th>
                            <th>Date of birth</th>
                            <th>Type of Doc</th>
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


