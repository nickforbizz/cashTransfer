<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Next</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <div class="form-group col-md-6">
              <label for="fullnames">Name:</label>
              <input type="text" class="form-control" id="fullnames" name="fullnames" value="Martha Irungu">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" name="email" value="nyamburamarthairungu@gmail.com">
            </div>
            <div class="form-group col-md-12">
              <button class="btn btn-sm btn-primary" id="next">Next</button>
            </div>
          </div>
        </div>
      </div>
      <script src="./js/jquery-1.11.1.min.js" charset="utf-8"></script>
      <script src="./js/bootstrap.js" charset="utf-8"></script>

      <script type="text/javascript">
        $(document).ready(function () {
            $('#next').click(function(){
              window.location = "./form.php?token="+'<?php echo ($_GET['token'])?>'
            })
        })
      </script>
  </body>
</html>
