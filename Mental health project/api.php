<?php

    function send_template02(){
      $recipientId=$_GET['recipientId'];
     
      $q1 = $_GET['q1'];
      $q2 = $_GET['q2'];
      $q3 = $_GET['q3'];
      $q4 = $_GET['q4'];
      $q5 = $_GET['q5'];
      $q6 = $_GET['q6'];
      $q7 = $_GET['q7'];
      $q8 = $_GET['q8'];
      $q9 = $_GET['q9'];
      $q10 = $_GET['q10'];
      
      $parents_number=$_GET['phoneNumber'];
      
    $url='https://bot.api.woztell.com/sendResponses?accessToken=C2HPa72V0SGOnlyQ7dgeZ';
        $usermsg = '{
                  "channelId": "636e1f29af66e5e2987e1510",
                  "recipientId": "'.$recipientId.'",
                  "response": [
                        {
                          "type": "TEMPLATE",
                          "elementName": "mhatemp9",
                          "languageCode": "en",
                          "components": [
                                
                                  {"type": "BODY",
                                  "parameters": [
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q1.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q2.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q3.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q4.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q5.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q6.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q7.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q8.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q9.'"
                                    },
                                    {
                                      "type": "TEXT",
                                      "text": "'.$q10.'"
                                    }
                                  ]
                                }
                          ]
                        }
                  ]
                }';

     if($ch = curl_init($url))
    {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $usermsg);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Lenght: " . strlen($usermsg)));

                 $responce = curl_exec($ch);
                 $d = json_decode($responce,true);
                 
                 print_r($d);

    }
    else
    {
        return false;
    }
}
send_template02();
?>



