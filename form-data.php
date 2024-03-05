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
  <style>
    body{
        background-color:lightblue;
    }
  </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-3"></div>
       <div class="col-sm-6">
           <div class="card" style="margin-top:100px;">
            <div class="card-body">
                  <form>
                  Name:<input type="text" id="name" class="form-control"><br><br>
                 Age:<input type="number" id="age" class="form-control"><br><br>
                 Gender:<input type="radio"   id="male">Male<input type="radio"   id="female"><br><br>
                 Country:<select id="country" class="form-control">
                    <option value="India">India</option>
                    <option value="Pakisthan">Pakisthan</option>
                    <option value="Australia">Australia</option>
                    <option value="SriLanka">SriLanka</option>
                    <option value="England">England</option>
                 </select><br><br>
                 <button class="btn btn-primary">Submit</button>
                  </form>
            </div>
           </div>
       </div>
       <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>