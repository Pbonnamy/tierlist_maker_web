<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tier List Maker</title>
    <link rel="icon" href="asset/icon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cliquez sur l'image de vrotre choix</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div id="tmpImg" class="modal-body d-flex flex-wrap justify-content-center">

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-5">
      <h1 class="text-center mt-3 fw-bold">Tier List Maker <p class="h5">by Aeck</p></h1>

      <div class="d-flex mt-5">
        <div class="me-4 col-2">
          <input id="itemLink" type="text" class="w-100 form-control" placeholder="Ajouter un item" >
          <button id="searchBtn" type="button" class="btn btn-success w-100 mt-3">Chercher</button>
          <button type="button" class="btn btn-danger w-100 mt-3" onclick="delItem()">Vider</button>
          <div class="d-flex justify-content-center">
            <div id="itemList" class="mt-3 itemList border border-secondary w-100 d-flex flex-wrap justify-content-center">
            </div>
          </div>
        </div>

        <table id="table"  class="table table-secondary table-bordered border-secondary">
          <tr class="cat">
            <td class="w-25 p-4 text-center bg-danger h1">God Tier</td>
            <td id="cat0" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-warning h1">Incroyable</td>
            <td id="cat1" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-success h1">Pas mal</td>
            <td id="cat2" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-primary h1">Ca passe</td>
            <td id="cat3" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-secondary h1">Pas ouf</td>
            <td id="cat4" class="d-flex flex-wrap cat"></td>
          </tr>
        </table>
      </div>

    </div>
  </body>
  <script src="Sortable.js"></script>
  <script src="jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
