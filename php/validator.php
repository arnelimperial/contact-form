<?php
        //Method
        function validation($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
       
    // define variables and set to empty values
         $user = $email = $message = "";
         $userError = $emailError = $messageError= "";
         $salamat = "";
         $failed = "";
         

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user"])){
                $userError = "Error! Provide data for name field.";
            } else {
                $user = validation($_POST["user"]);
                if(!preg_match('/^[a-zA-Z0-9\s]+$/', $user)){
                    $userError = "Only letters, numbers and white spaces are allowed.";
                }
                    
                
            }
        
            if (empty($_POST["email"])) {
                $emailError = "Error! Provide data for email field";
                } else {
                    $email = validation($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailError = "Invalid email format.";

                    }

                }
        
            if (empty($_POST["message"])){
                $messageError = "Error! Empty message field.";
            } else {
                 $message = validation($_POST["message"]);
            }

            if($userError == "" && $emailError =="" && $messageError == ""){
                $salamat = "Thank you <span class='w3-text-indigo w3-border-bottom' style='font-weight: bold;'> ".$user. "</span> !<br>I will get back to you ASAP. <i class='fas fa-thumbs-up'></i>";
            
                $message_body ="";
                unset($_POST['submit']);
                foreach ($_POST as $key => $value){
                    $message_body .= "$key: $value\n";
                }

                $to = 'arnelgonzalesimperial@gmail.com';
                $subject = 'EMAIL FROM THE WEBSITE!';
                if(mail($email, $subject, $message)){
                    
                    $user = $email = $message = "";
                }else{
                    $failed = "<strong class='w3-text-red'><i class='fas fa-exclamation-triangle'></i> Message failed to send!</strong>"; 
                }
                
            }
            
        
            
        } 
    ?>