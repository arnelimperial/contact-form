        <!-- JS Validator -->
        <script>
            function validateEmail(){
                var regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                var sample = document.getElementById("user-email").value;
                var test = sample.match(regex);
                if(test === null){
                    document.getElementById('helpers').innerHTML = 'Invalid Email!';
                }else{
                    document.getElementById('helpers').innerHTML = '';
                }
            }
        </script>
    