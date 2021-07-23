<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Print Voucher Makan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="col mt-5 justify-content-center">
      <div class="col-md-8 mx-auto bg-dark rounded p-5">
        <h2 class="text-center font-weight-bold text-light">Print Voucher Makan</h2>
        <hr class="my-1"> 
        <h5 class="text-center text-secondary text-light">Masukkan nama anda...</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-primary" placeholder="Type your name here..." autocomplete="off" required onclick="incrementer()">
            <div class="input-group-append">
              <input type="submit" id="submit" name="submit" value="Search" class="btn btn-primary btn-lg rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script>
var buttonTarget = document.getElementById('submit');
var number = 1;

function incrementer(){
	if (number <= 50) {
    document.getElementById("demo").innerHTML = "11.30-12.00";
  } 
  else if (number <= 100) {
    document.getElementById("demo").innerHTML = "12.00-12.30";
  }
  else if (number <= 150) {
    document.getElementById("demo").innerHTML = "12.30 - 13.00";
  }
  else if (number >= 150) {
    document.getElementById("demo").innerHTML = "13.00 - 13.30";
  }

  buttonTarget.innerHTML = number.toString();
  
  number++;
  return number;
}
sessionStorage.setItem("Number",number);
  </script>
</body>

</html>