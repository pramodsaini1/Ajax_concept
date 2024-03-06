$(".btn.btn-primary").click(function(){
     var username = $("#username").val().trim();
     var isValid = /^[a-zA-Z0-9](?!.*?_{4})[a-zA-Z0-9_]{2,28}[a-zA-Z0-9]$/.test(username);
     if(isValid){
          $.ajax({
            url:"available.php",
            type:"POST",
            data:{username:username},
            success:function(data){
                 if(data=="available"){
                  $('#usernameError').text("username already available");
                }
                else if(data=="created"){
                  $('#usernameError').text("username created");
                }
            }
          });
     }
     else {
            $('#usernameError').text('Username must be 4 to 16 characters long and can only contain letters, numbers, and underscores.');
     }
   });





   $(".btn.btn-primary").click(function(){
                $.ajax({
                    url:"available.php",
                    type:"POST",
                    data:{username:username},
                    success:function(data){
                        if(data=="available"){
                        $('#usernameError').text("username already available");
                        }
                        else if(data=="created"){
                        $('#usernameError').text("username created");
                        }
                    }
                });
              })