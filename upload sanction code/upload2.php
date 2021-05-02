<?php
    $message = '';     $row = 0;$i =0;
    $fp =  count(file('newFile.csv'));
    $output = 'mw-stock.csv';
    echo $fp;
    $san = array("BirthDate_Regulation_PublicationDate", "NameAlias_FirstName", "NameAlias_LastName",
     "Nationality","Entity_DesignationDetails"
);
    if(isset($_POST['submit']))
    {
        if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
        {
            $fname = $_FILES["fileToUpload"]["name"];
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "newFile.csv");
            $message = "$fname  has been uploded successfully<br>";


            if (($handle = fopen("newFile.csv", "r")) !== FALSE) {
                
                $oh = fopen($output, 'w');
                while (false !== ($data = fgetcsv($handle,1000, ",", " "))) {
                if ($i!= 0){
                    $outputData = array($data[1], $data[2], $data[4], $data[5], $data[8]);
                    fputcsv($oh, $outputData);
                }
            $i++;
                }
                
                fclose($handle);
                fclose($oh);
                
            }
        }else $message = 'chose file to upload';
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
                <form method="POST" action="upload2.php" enctype="multipart/form-data" >
                        <input type="file" name="fileToUpload" class = "upload form-control" />
                        <input  type="submit" name = 'submit'  value = "Upload File"  class = 'btn btn-light'/>
                </form>
                
            </div>
            <p class = "magin-left-2"><?=$message?></p>
                <hr>
           
        </div>
    </div>
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>


