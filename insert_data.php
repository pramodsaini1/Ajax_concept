<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        i{
            color:blue;

        }
    </style>
    <script>
         $(document).ready(function(){
            //get the record
             function loadData(){
                 $.ajax({
                      url:"ajax-load.php",
                      type:"POST",
                      success:function(data){
                          $("#table-data").html(data);
                      }
                 })
             }
             loadData();
             //insert the record
             $("#save-button").click(function(){
                var roll=$("#roll").val();
                var name=$("#name").val();
                var avg=$("#avg").val();
                if(roll.length==0||name.length==0||avg.length==0){
                    $("#error-message").html("All Fields Are Required").slideDown();
                }
                $.ajax({
                    url:"ajax-insert-data.php",
                    type:"POST",
                    data:{roll:roll,name:name,avg:avg},
                    success:function(data){
                          if(data.trim()=="success"){
                              loadData();
                              $("#addform").trigger("reset");
                          }
                          else{
                              alert("can't save the record");
                          }
                    }
                })
             })
         });
         //delete the record
         $(document).on("click",".fa.fa-trash",function(){
             var roll= $(this).attr("rel");
             $.ajax({
                 url:"ajax-delete.php",
                 type:"POST",
                 data:{roll:roll},
                 success:function(data){
                    
                     if(data.trim()=="success"){
                         $("#r"+roll).fadeOut();
                     }
                     else{
                         $("#error-messgae").html("can't delete record");
                     }
                 }
             })
         });
         //edit the record
         $(document).on("click",".fa.fa-edit",function(){
            var roll=$(this).attr("rel");
            var name=$("#de"+roll).text();
            var avg=$("#df"+roll).text();
             $("#de"+roll).html("<input type='text' id='f"+roll+"' value='"+name+"'>");
             $("#df"+roll).html("<input type='text' id='g"+roll+"' value='"+avg+"'>");
             $(this).attr("class","fa fa-save");
             $(this).css("color","blue");
         });
         //update the record
         $(document).on("click",".fa.fa-save",function(){
               var roll=$(this).attr("rel");
               var name=$("#f"+roll).val();
               var avg=$("#g"+roll).val();
               $.ajax({
                    url:"ajax-update_record.php",
                    type:"POST",
                    data:{roll:roll,name:name,avg:avg},
                    success:function(data){
                          if(data="success"){
                            $(this).attr("class","fa fa-edit");
                            $(this).css("color","blue");
                            $("#de"+roll).html("<strong>"+name+"</strong>");
                            $("#df"+roll).html("<strong>"+avg+"</strong>")
                             
                         }
                         else{
                             alert("can't update the record");
                         }
                    }
               })

         });
 
    </script>
</head>
<body>
    <table id="main" border="0" cellspacing="0">
       <tr>
          <td id="header">
            <h1>PHP With Ajax</h1>
          </td>
       </tr>
       <tr>
          <td id="table-form">
              <form id="addform">
                    Roll.No:<input type="text" id="roll">
                    Name:<input type="text" id="name">
                    Avg:<input type="text" id="avg">
                    <input type="button" value="insert-data" id="save-button">
              </form>
          </td>
       </tr>
       <tr>
         <td id="table-data">
             <table border="1" width="100%" cellspacing="0" cellpading="10px">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>Show Content</td>
                </tr>
             </table>
         </td>
       </tr>
    </table>
    <div id="error-message"></div>
</body>
</html>
 
<!-- <script type="text/javascript" src="js/jqueryjs"></script> -->