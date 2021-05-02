<?php
$message = ''; $file = 'testun3.csv';
 if(isset($_POST['submit']))
 {
     if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
     {
         $fname = $_FILES["fileToUpload"]["name"];
         $ext = (explode(".", $fname));
         $file_extension = end($ext);
         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "un3.xml");
         $message = "$fname  has been uploded successfully<br>";
     }
     else $message = "choose file to upload";
    //$filexml='UN3.xml';
    $line = '';
    if (file_exists($fname)) 
    {
        $xml = simplexml_load_file($fname);
        foreach ($xml->INDIVIDUALS as $i) 
        {
            foreach($i->INDIVIDUAL as $key=>$j)
            { 
                foreach($j->DESIGNATION as $designaion){
                $line .= "$j->DATAID,$j->VERSIONNUM,$j->VERSIONNUM,$j->FIRST_NAME,$designaion->VALUE";
                $line .= "\n";
                }
                
            }
        }
        putCsvFile($line);
    } 
}
function putCsvFile($line)
{
    print_r($line);

    $f = fopen('tunxml.csv', 'w');
    $rows = explode("\n",$line);
    foreach($rows as  $row){
     $d1 = explode(",",$row);
    fputcsv($f, $d1 , ',','"');
    }
    fclose($f);
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
                <form method="POST" action="unxml.php" enctype="multipart/form-data" >
                        <input type="file" name="fileToUpload" class = "upload form-control" />
                        <input  type="submit" name = 'submit'  value = "Upload File"  class = 'btn btn-light'/>
                        <input  type="submit" name = 'download'  value = "download File"  class = 'btn btn-success' style = "margin-left:2%;"/>
                        
                </form>
                
            </div>
            <p class = "magin-left-2"><?=$message?></p>
                <hr>
                <div class = 'col-md-8'>
                <!-- <table class="table table-striped table-condensed">
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table> -->
            </div>
           
        </div>
    </div>
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>