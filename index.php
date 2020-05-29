<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563dr2">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/floating-labels/floating-labels.css" rel="stylesheet">

    <title>Are you Registered?</title>
  </head>

  <body>

    <div class="container">
    <form name="userInfo" action="data_test.php" method="post" class="form=-signin">
      <div  class="text-center mb-4">
      
        <img class="mb-4" src="images/logo-wht-back.png" alt="" width="176" height="174">

        <h1 class="h3 mb-3 font-weight-normal">
          Am I registered to vote?
        </h1>

        <div class="form-label-group">
            <input type="text" name="firstName" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus></input>
            <label for="inputFirstName">Frst name</label>
        </div>
        <div class="form-label-group">
            <input type="text" name="lastName" id="inputLastName" class="form-control" placeholder="Last Name" required autofocus></input>
            <label for="inputLastName">Last name</label>
        </div>
        <div class="form-label-group">
          <input  id="datepicker" type="date" name="dob" id="inputDob" class="form-control" placeholder="mm/dd/yyyy" required autofocus></input>
            <label for="inputDob">Birthdate</label>
        </div>
        <div class="form-label-group">
          <input type="text" name="postalZip" id="inputPostalZip" class="form-control" placeholder="Postal/Zip Code" required autofocus></input>
            <label for="inputPostalZip">Postal/Zip Code</label>
        </div>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Am I registered?</button> 

      </div>
    </form>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>