<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- JS-ku -->
    <script type="text/javascript" src="js/ajax.js"></script>

    <title>Resto Simple</title>

  </head>

  <body style="background-color: orange; ">

    <div class="container mt-5">
      
      <h1 style="text-align: center;">Welcome to our restaurant</h1> <br>

      <div class="row justify-content-md-center">
        <div class="col-md-7">
          <div class="card" style="background-color:  rgba(245, 245, 245, 0.4)">
            <div class="card-body">
              <h4 class="card-title">Add Menu</h4>

              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label>Nama Menu:</label>
                <input class="form-control" type="text" placeholder="Onigiri" id="nama" name="nama"> <br>
                <label>Harga (Rp.) :</label>
                <input class="form-control" type="number" placeholder="70000" id="harga" name="harga"> <br>
                <button type="button" class="btn btn-dark" id="tambah">Add Data</button>
              </form>

            </div>
          </div>
        </div>
      </div>
      
      <div class="row mt-4">
        <div class="col">

          <h2>Menu Restoran Wibu</h2>
          <div id ="data">Loading data..</div> <br>

        </div>
      </div>

    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Menu</h4>
        </div>
        <div class="modal-body">
          <label>Nama Menu:</label>
          <input class="form-control" type="text" placeholder="Onigiri" id="editnama" name="editnama"> <br>
          <label>Harga (Rp.) :</label>
          <input class="form-control" type="number" placeholder="70000" id="editharga" name="editharga"> <br>
          <button type="button" class="btn btn-warning" id="edit">Edit Data</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  </body>
</html>