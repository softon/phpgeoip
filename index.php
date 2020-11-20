<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My GEOIP App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/globe.png" alt="" width="72" height="72">
    <h2>My GEOIP App</h2>
    <p class="lead">Enter the IP Address for which you want to find the Geo Location.</p>
  </div>

  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-4">
      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter IP Address">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary">LOCATE</button>
          </div>
        </div>
      </form>
      <ul class="list-group mt-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Country</h6>
            <small class="text-muted">Name of country of IP Address</small>
          </div>
          <span class="text-muted">INDIA (IN)</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">City</h6>
            <small class="text-muted">Name of City</small>
          </div>
          <span class="text-muted">Mumbai</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Zipcode</h6>
            <small class="text-muted"></small>
          </div>
          <span class="text-muted">400060</span>
        </li>
        <li class="list-group-item d-flex justify-content-between ">
          <div class="">
            <h6 class="my-0">Latitude</h6>
            <small></small>
          </div>
          <span class="">45.5808</span>
        </li>
		<li class="list-group-item d-flex justify-content-between ">
          <div class="">
            <h6 class="my-0">Longitude</h6>
            <small></small>
          </div>
          <span class="">-73.5825</span>
        </li>
		<li class="list-group-item d-flex justify-content-between ">
          <div class="">
            <h6 class="my-0">ISP</h6>
            <small>Name of Internet Service Provider</small>
          </div>
          <span class="">Tata Tele Services</span>
        </li>
      </ul>

      
    </div>
    
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Developed by Prof. Shiburaj</p>
    
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/form-validation.js"></script></body>
</html>
