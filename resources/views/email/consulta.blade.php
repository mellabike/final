<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  body { background-color: #ebebeb; }
</style>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <br>
        <div class="card">
          <div class="card-header text-center">
            <h3 style="color:#888888">AbastCam</h3>
          </div>
          <div class="card-body">
            <h3>Tenemos un mensaje:</h3>
            <p>{{ $consulta }}</p>

            <p>Email: <strong>{{ $email }}</strong></p>
          </div>
        </div>
        <br><br>
        <p class="text-center" style="color:#888888">© {{ date("Y") }} AbastCam. All rights reserved.</p>
      </div>
    </div>
  </div>
</body>
</html>
