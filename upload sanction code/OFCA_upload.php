<?php
// header('Content_Type: text/plain');
    $table = ''; $message = '';  $i = 0; $ouput_st = '';$col = array(1,3,11); 
    $table_header = "<th>No</th><th> Name</th><th>Nationality</th><th>Date of birth</th>";

    if(isset($_POST['submit']))
    {
        if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
        {
            $fname = $_FILES["fileToUpload"]["name"];
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "OFCA_output.csv");
            $message = "$fname  has been uploded successfully<br>";
        }
        else $message = "choose file to upload";
    
       
    //Read CSV file
    if (($handle = fopen("OFCA_output.csv", "r")) !== FALSE) {
        //get indexes of column
        $col_index = $col; 
               
        while($data = fgetcsv($handle, 10000, ",")){
            
                $i++;
                if(!isset($data[$i]))
                $table .= "<tr><td> $i </td>";
                foreach($col_index as $key =>$index)
                    {
                    
                     $table .= "<td>$data[$index]</td>";
                    }
            
                    $ouput_st = '';
                $table .= "</tr>";
        }
      
    }
    
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
                <form method="POST" action="OFCA_upload.php" enctype="multipart/form-data" >
                        <input type="file" name="fileToUpload" class = "upload form-control" />
                        <input  type="submit" name = 'submit'  value = "Upload File"  class = 'btn btn-light'/>
                </form>
                
            </div>
            <p class = "magin-left-2"><?=$message?></p>
                <hr>
                <div class = 'col-md-8'>
                <table class="table table-striped table-condensed">
                    <tbody>
                        <tr>
                            <?= $table_header?>
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


