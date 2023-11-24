<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <script type="text/javascript" src = "jquery.min.js"></script>
  <script type="text/javascript" src = "ajax_main.js"></script>
  <title>Szoftverek</title>
  <style>
    #informaciosdiv {
      width: 400px;
    }
    #szoftverinfo {
      float: right;
      border: 1px solid black;
      width: 190px;
      height: 100px;
    }
    .cimke{
      display: inline-block;
      width: 60px;
      text-align: right;
    }
    span {
      margin: 3px 5px;
    }
    label {
      display: inline-block;
      width: 70px;
      text-align: right;
    }
    select {
      width: 115px;
    }
  </style>
  </head>
  <body>
    <h1>Szoftverek:</h1>
    <div id = 'informaciosdiv'>
      <div id = 'szoftverinfo'>
        <span class="cimke">Név:</span><span id="nev" class="adat"></span><br>
        <span class="cimke">Cím:</span><span id="kategoria" class="adat"></span><br>
        
      </div>
      <label for='gepcimke'>Gép:</label>
      <select id = 'gepselect'></select>
      <br><br>
      <label for = 'telepitescimke'>Telepítés:</label>
      <select id = 'telepitesselect'></select>
      <br><br>
      <label for = 'szoftvercimke'>Szoftver:</label>
      <select id = 'szoftverselect'></select>
    </div>
  </body>
</html>
