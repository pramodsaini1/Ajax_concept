 
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
    $(".btn.btn-primary").click(function(){
        var email=$("#email").val();
        var password=$("#pass").val();
        $.ajax({
            url:"check.php",
            type:"POST",
            data:{email:email,password:password},
            success:function(data){
                if(data=="cookie created"){
                     $.ajax({
                        url:"Profile.php",
                        type:"POST",
                        success:function(data){
                             $("#record").html(data);
                        }
                    });
                }
                else if(data=="invalid password"){
                     $("#msg").html("<div class='alert alert-waring'>Invalid Password</div>");
                }
                else if(data=="invalid"){
                    $("#msg").html("<div class='alert alert-danger'>Invalid Record</div>");
                }
            }
        });
    });
});
$(document).on("click",".btn.btn-danger",function(){
    $.ajax({
        url:"logout.php",
        type:"POST",
        success:function(data){
             
        }
    })
})
  </script>
  </head>
  <body>
 <div class="container-fluid">
    <div class="row" id='record'>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div id="msg"></div>
            <div class="card-header">Login</div>
                <div class="card-body">
                     <label>Email:</label>
                     <input type="email" id="email" class="form-control">
                     <label>Password:</label>
                     <input type="password" id="pass" class="form-control"><br><br>
                     <button class="btn btn-primary">Login</button>

                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
 </div>

</body>
</html>