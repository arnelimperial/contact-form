       
        
        <div class="container form-wrappers">
          <h1 class="title is-4 w3-text-light-blue intro-form">Hi!<h1>
              <p class="subtitle is-5 has-text-grey intro-form" style="font-family: 'Play';">Send me a message here by fill in the form.<br>
            
            </p>
              
            
            <form name="contactForm" action="#validate" method="POST" class="contact-form-body" id="form-A" novalidate>
            <div class="field">
            <label>Name</label>
                <div class="control has-icons-left">
                    <input ng-model="user" name="user" class="input is-dark name-form" id="name-input" type="text" autocomplete="off" minlength="3" maxlength="60" required>
                    <span class="icon is-small is-left"  ng-show="contactForm.user.$dirty && contactForm.user.$invalid">
                        <i class="fa fa-times" style="color: red;"></i>

                    </span>
                    
                    <span class="icon is-small is-left"  ng-show="contactForm.user.$pristine">
                        <i class="fas fa-pencil-alt"></i>

                    </span>


                    
            
                </div>

                <p class="help is-danger" ng-show="contactForm.user.$dirty && contactForm.user.$invalid">Minimum of 3 characters are allowed.</p>
            </div>

            <div class="field">
                <label>Email</label>
                    <div class="control has-icons-left">
                        <input ng-model="email" name="email" class="input is-dark name-form" type="email" autocomplete="off" minlength="3" id="user-email" oninput="validateEmail()" required>

                       <span class="icon is-small is-left"  ng-show="contactForm.email.$dirty && contactForm.email.$invalid">
                        <i class="fa fa-times" style="color: red;"></i>
                        

                    </span>

                    
                    <span class="icon is-small is-left"  ng-show="contactForm.email.$pristine">
                        <i class="fas fa-pencil-alt"></i>

                    </span>
                        
                    </div>


                    <p class="help is-danger" ng-show="contactForm.email.$error.required && contactForm.email.$dirty">Email is required.</p>
                    <p class="help is-danger" id="helpers" ng-show="contactForm.email.$error && contactForm.email.$dirty"></p>



                </div>


                <div class="field">
                    <label class="label">Message</label>

                    <div class="control has-icons-right has-icons-left">
                
                       <textarea class="textarea is-dark" row="5" ng-model="message" name="message" minlength="5" required></textarea>
                       <span class="icon is-small is-right"  ng-show="contactForm.message.$dirty && contactForm.message.$invalid">
                        <i class="fa fa-times" style="color: red;"></i>

                    </span>
                    
                    <span class="icon is-small is-left"  ng-show="contactForm.message.$pristine">
                        <i class="fas fa-pencil-alt"></i>

                    </span>
                </div>
                <p class="help is-danger" ng-show="contactForm.message.$dirty && contactForm.message.$error.required">Minimum of 5 characters are allowed.</p>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <input type="submit" name="submit" class="button is-rounded is-outlined is-link" ng-disabled="contactForm.user.$dirty && contactForm.user.$invalid || contactForm.email.$dirty && contactForm.email.$invalid || contactForm.message.$dirty && contactForm.message.$invalid">
                </div>
                
                

                 
                

                <div class="control">
                    <button class="button is-text" id="reset-btn" onclick="reset()">Cancel</button>
                   

                </div>
                
    
            </div>

            
                
    
            <!-- <div class="w3-container">
                <p class="subtitle is-6 w3-text-light-blue">{{thanks}}</p>
            
            </div> -->

            
            
            
            

        
                
            
        </form>

          
    </div>





    <?php
    // define variables and set to empty values
         $user = $email = $message = "";
         $salamat = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user"])) {
            $nameErr = "Name is required";
            } else {
            $user = test_input($_POST["user"]);
            }
        
            if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            } else {
            $email = test_input($_POST["email"]);
            }
        
            if (empty($_POST["message"])) {
            $message = "";
            } else {
            $message = test_input($_POST["message"]);
            }

            if(isset($_POST['submit'])){
                $salamat = "Thank you ".$user. " for your message.<br> Will get back on you ASAP.";
            }
            
        
            
        } 



        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            

            }
  


    ?>
    <div class="w3-pale-blue w3-animate-top w3-panel w3-mobile w3-round-large w3-card-4 w3-display-container w3-margin" style="width: 40%;">
        <p class="w3-text-indigo"><?php echo $salamat;?></p>
    <div>

    

        
               
       
            
        

    
        






    
    

       







    





        

        





    







    



