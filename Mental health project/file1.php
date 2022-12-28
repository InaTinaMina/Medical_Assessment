<?php 

  if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    
   $ques1= $_POST['q1'];
   $ques2=$_POST['q2'];
   $ques3=$_POST['q3'];
   $ques4=$_POST['q4'];
   $ques5=$_POST['q5'];
   $ques6=$_POST['q6'];
   $ques7=$_POST['q7'];
   $ques8=$_POST['q8'];
   $ques9=$_POST['q9'];
   $ques10=$_POST['q10'];

    

  
    //use array as maps , take all inputs , add name and phone number ,display thank you page html 
    if ($ques1=="Yes")  

        echo ""; 
    else{
        echo $name;
    }

    $filename = "./thankyoupage.html";

if(file_exists($filename)){

    //Get file type and set it as Content Type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    header('Content-Type: ' . finfo_file($finfo, $filename));
    finfo_close($finfo);

    //Use Content-Disposition: attachment to specify the filename
    header('Content-Disposition: attachment; filename='.basename($filename));

    //No cache
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    //Define file size
    header('Content-Length: ' . filesize($filename));

    ob_clean();
    flush();
    readfile($filename);
    exit;
}

    

    

  } 
?>