<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
         $(document).ready(function(){
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
             $("#save-button").click(function(){
                var roll=$("#roll").val();
                var name=$("#name").val();
                var avg=$("#avg").val();
                $.ajax({
                    url:"ajax-insert-data.php",
                    type:"POST",
                    data:{roll:roll,name:name,avg:avg},
                    success:function(data){
                          if(data.trim()=="success"){
                              loadData();
                          }
                          else{
                              alert("can't save the record");
                          }
                    }
                })
             })
         })
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
             Roll.No:<input type="text" id="roll">
             Name:<input type="text" id="name">
             Avg:<input type="text" id="avg">
             <input type="button" value="insert-data" id="save-button">
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
</body>
</html>
 
<!-- <script type="text/javascript" src="js/jqueryjs"></script> -->