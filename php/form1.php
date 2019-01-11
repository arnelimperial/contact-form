    
        
        <div class="container form-wrappers">
          <h1 class="title is-4 w3-text-light-blue intro-form">Hi!<h1>
              <p class="subtitle is-5 has-text-grey intro-form" style="font-family: 'Play';">Please fill in all the field before submission.<br>
            
            </p>
              
            
            <form name="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#validate" method="POST" class="contact-form-body" id="form-A" novalidate>
            <div class="field">
            <label>Name</label>
                <div class="control has-icons-left">
                    <input ng-model="user" name="user" class="input is-rounded is-dark name-form" id="name-input" type="text" autocomplete="off" minlength="3" maxlength="60" value="<?php $user;?>" required>
                    <span class="icon is-small is-left"  ng-show="contactForm.user.$dirty && contactForm.user.$invalid">
                   
                        <i class="fa fa-times" style="color: red;"></i>

                    </span>
                    
                    <span class="icon is-small is-left"  ng-show="contactForm.user.$pristine">
                        <i class="fas fa-pencil-alt"></i>

                    </span>


                    
            
                </div>

                <p class="help is-danger" ng-show="contactForm.user.$dirty && contactForm.user.$invalid">Minimum of 3 characters are allowed.</p>
                <span class="help is-danger" id="clear1"><?php echo $userError;?></span>
                
            </div>

            <div class="field">
                <label>Email</label>
                    <div class="control has-icons-left">
                        <input ng-model="email" name="email" class="input is-rounded is-dark name-form" type="email" value="<?php $email; ?>" autocomplete="off" minlength="3" id="user-email" oninput="validateEmail()" required>

                       <span class="icon is-small is-left"  ng-show="contactForm.email.$dirty && contactForm.email.$invalid">
                        <i class="fa fa-times" style="color: red;"></i>
                        

                    </span>

                    
                    <span class="icon is-small is-left"  ng-show="contactForm.email.$pristine">
                        <i class="fas fa-pencil-alt"></i>

                    </span>
                        
                    </div>


                    <p class="help is-danger" ng-show="contactForm.email.$error.required && contactForm.email.$dirty">Email is required.</p>
                    <p class="help is-danger" id="helpers" ng-show="contactForm.email.$error && contactForm.email.$dirty"></p>
                    <span class="help is-danger" id="clear2"><?php echo $emailError;?></span>



                </div>


                <div class="field">
                    <label class="label">Message</label>

                    <div class="control has-icons-right has-icons-left">
                
                       <textarea class="textarea is-rounded is-dark" rows="10" ng-model="message" name="message" value="<?php $message; ?>" minlength="5" placeholder="Your message...." required></textarea>
                       <span class="icon is-small is-right"  ng-show="contactForm.message.$dirty && contactForm.message.$invalid">
                        <i class="fa fa-times" style="color: red;"></i>

                    </span>
                    
                    
                </div>
                <p class="help is-danger" ng-show="contactForm.message.$dirty && contactForm.message.$error.required">Minimum of 5 characters are allowed.</p>
                <span class="help is-danger" id="clear3"><?php echo $messageError;?></span>

            </div>
            <div class="field is-grouped">
                <div class="control">
                    <input type="submit" name="submit" class="button is-rounded is-outlined is-link" ng-disabled="contactForm.$pristine || contactForm.$invalid">
                </div>
                
            
                
                <div class="control">
                    <button type="reset" name="clear" class="button is-text" id="reset-btn" ><a href="contact.php">Clear Form</a></button>
                   

                </div>
                
    
            </div>

             
        </form>

          
    </div>

    <div class="w3-pale-blue w3-animate-top w3-panel w3-mobile w3-round-large w3-card-4 w3-display-container" style="width: 30%;margin-right: 20px;" id="validate">
        <span class="w3-text-indigo"><?php echo $salamat;?></span>
        <span class="w3-text-red"><?php echo $failed;?></span>
    <div>
    <!--

    <div class="w3-indigo w3-animate-bottom w3-panel w3-mobile w3-round-large w3-card-4 w3-display-container" style="width: 30%;margin-right: 20px;" id="validate">
        <span class="w3-text-white"></span>
    <div> -->

    

        
               
       
            
        

    
        






    
    

       







    





        

        





    







    



