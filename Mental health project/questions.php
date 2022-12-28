<?php

@include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){


$name= $_POST['name'];


$fname = $name['first'];
$lname =$name['last'];

$mobile1 =$_POST['mobile'];

$mobile=$mobile1['full'];
   
   $qu1= $_POST['q1'];
   $qu2=$_POST['q2'];
   $qu3=$_POST['q3'];
   $qu4=$_POST['q4'];
   $qu5=$_POST['q5'];
   $qu6=$_POST['q6'];
   $qu7=$_POST['q7'];
   $qu8=$_POST['q8'];
   $qu9=$_POST['q9'];
   $qu10=$_POST['q10'];
    

    $ques1="";
    $ques2="";
    $ques3="";
    $ques4="";
    $ques5="";
    $ques6="";
    $ques7="";
    $ques8="";
    $ques9="";
    $ques10="";
    
    $error=0;
   
   $select = " SELECT * FROM students_ans WHERE mobile_no = '$mobile' "; //use mobile number

   $result = mysqli_query($con, $select);
    
   if(mysqli_num_rows($result) > 0){

      $error=0; //user already exists
      

   }else{

        if($qu1=="Yes")
        $ques1="The student has frequent temper tantrums. ";
        if($qu2=="Yes")
        $ques2="The student feels shy in facing new expiriences. ";
        if($qu3=="Yes")
        $ques3="The child is easily distracted. ";
        if($qu4=="Yes")
        $ques4="The child battles with over food and eating. ";
        if($qu5=="Yes")
        $ques5="The child does not want to be seperated from the parents. ";
        if($qu6=="Yes")
        $ques6="The child does not follow rules and is disobidient. ";
        if($qu7=="Yes")
        $ques7="The child is unable to sit still(Fidgety). ";
        if($qu8=="Yes")
        $ques8="The child acts younger than his/her age. ";
        if($qu9=="Yes")
        $ques9="The Child uses screens (Screens refers to TV, mobile, laptop etc.) excessively and is resistant to be away from it. ";
        if($qu10=="Yes")
        $ques10="The Childs school grades is dropping. ";

         
         $insert = "INSERT INTO `mentalhealth`.`students_ans` (`F_name`, `L_name`, `mobile_no`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `Registered_date`) VALUES ('$fname', '$lname', '$mobile', '$ques1', '$ques2', '$ques3', '$ques4', '$ques5', '$ques6', '$ques7', '$ques8', '$ques9', '$ques10', current_timestamp());";
         
        
         mysqli_query($con, $insert);
        

         
        
      }
      
         $result=mysqli_query($con,$select);
        
            //  if(mysqli_num_rows($result)>0)
            //  {
            //     while($row = mysqli_fetch_assoc($result))
            //     {
            //         echo "<br>Your responses indicate that your child requires intervention by your pediatrician. <br>

            //  Please show this message to your pediatrician.<br>".$row["q1"].$row["q2"].$row["q3"].$row["q4"].$row["q5"].$row["q6"].$row["q7"].$row["q8"].$row["q9"].$row["q10"];
            
            
            //     }
               
            //  }
            
             if($error==1)
             header('location:error.php');
             else 
             {
               
               // header('location:thankyoupage.html');
             
             



               $usermsg = "hello";
               // kvstore API url
               $url = 'http://52.41.204.23/messagingapi/pcenglish.php';
               // Collection object recipientId=7339238599&dr_name=dev&list=wvcugwvcyu
               $data = [
                 'recipientId' => '918999619378', 'dr_name' => 'dev', 'list'=>'working'
               ];
               // Initializes a new cURL session
               $curl = curl_init($url);
               // Set the CURLOPT_RETURNTRANSFER option to true
               curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
               // Set the CURLOPT_POST option to true for POST request
               curl_setopt($curl, CURLOPT_POST, true);
               // Set the request data as JSON using json_encode function
               curl_setopt($curl, CURLOPT_POSTFIELDS,  $usermsg);

             }
   

            };
?>

