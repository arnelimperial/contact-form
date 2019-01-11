<!--<div class="container">
    <h2>W3.CSS Modal</h2>
    <button onclick="document.getElementById('mod').style.display='flex'" class="button">Open Modal</button>
</div>

  <div class="modal" id="mod" >
    <div class="modal-background"></div>
    <div class="modal-card">
    <header class="modal-card-head">
    <h6 class="modal-card-title w3-text-light-blue intro-form">Hi!<br>Please fill in all the field before submission.</h6>
    <button class="delete" aria-label="close"></button>
    </header>-->
    <div class="container" style="width: 85%;"> 
        <form name="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#mod" method="POST" class="contact-form-body" id="form-A" novalidate>
            <div class="field" style="margin-bottom: 15px;">
                <label></label>
                    <div class="control has-icons-left">
                        <input ng-model="user" name="user" class="w3-input w3-border-blue w3-animate-input" style="width: 30%;" id="name-input" type="text" autocomplete="off" minlength="3" maxlength="60" placeholder="Name" value="<?php $user;?>" required>
                        
                    </div>
                    <p class="help is-danger" ng-show="contactForm.user.$dirty && contactForm.user.$invalid">Minimum of 3 characters are allowed.</p>
                    <span class="help is-danger" id="clear1"><?php echo $userError;?></span>
            </div>
            <div style="margin-top: 30px;margin-bottom: 15px;">
                <label></label>
                    <div class="control has-icons-left">
                        <input ng-model="email" name="email" class="w3-input w3-border-blue w3-animate-input" style="width: 30%;" type="email" value="<?php $email; ?>" autocomplete="off" minlength="3" id="user-email" placeholder="Email" oninput="validateEmail()" required>
                        
                        
                    </div>
                    <p class="help is-danger" ng-show="contactForm.email.$error.required && contactForm.email.$dirty">Email is required.</p>
                    <p class="help is-danger" id="helpers" ng-show="contactForm.email.$error && contactForm.email.$dirty"></p>
                    <span class="help is-danger" id="clear2"><?php echo $emailError;?></span>



            </div>
            <div class="field" style="margin-top: 30px;">
            <label class="label"></label>
                <div class="control has-icons-right has-icons-left">
                    <textarea class="w3-input w3-border-blue" rows="10" ng-model="message" name="message" value="<?php $message; ?>" minlength="5" placeholder="Your message...." required></textarea>
                        <span class="icon is-small is-right"  ng-show="contactForm.message.$dirty && contactForm.message.$invalid">
                            <i class="fa fa-times" style="color: red;"></i>
                        </span>
                </div>
                    <p class="help is-danger" ng-show="contactForm.message.$dirty && contactForm.message.$error.required">Minimum of 5 characters are allowed.</p>
                    <span class="help is-danger" id="clear3"><?php echo $messageError;?></span>

        

        
                  <div style="margin-top: 30px;">
                    <input type="submit" name="submit" class="button is-rounded is-outlined is-link" ng-disabled="contactForm.$pristine || contactForm.$invalid">
                     <button type="reset" name="clear" class="button is-text" id="reset-btn" ><a href="contact.php">Clear Form</a></button>
                </div>
            </form>
    </div>


    
    <div class="w3-pale-blue w3-animate-top w3-panel w3-mobile w3-round-large w3-card-4 w3-display-container" style="width: 30%; margin-right: 20px;">
        <span class="w3-text-indigo"><?php echo $salamat;?></span>
        <span class="w3-text-red"><?php echo $failed;?></span>
    <div>
 




                 