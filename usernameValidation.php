<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#username').keyup(function() {
        var username = $(this).val().trim();
        var isValid = /^[a-zA-Z0-9](?!.*?_{4})[a-zA-Z0-9_]{2,28}[a-zA-Z0-9]$/.test(username);
        var available="pramodsaini123";
         var present=String(username);
         if(isValid) {
             if (available===present) {
                $('#usernameError').html(' username  available');
             }
             else{
                $('#usernameError').html(' username not available');
             }
        }
         else {
            $('#usernameError').text('Username must be 4 to 16 characters long and can only contain letters, numbers, and underscores.');
        }
    });
});
</script>
</head>
<body>
        <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <span id="usernameError" style="color: red;"></span>
   
</body>
</html>