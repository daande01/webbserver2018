
<?php
function nyartikel(){

 ?>


  <div class="container">

    <div class=row>


    </div>

    <div class="row">

      <div class="col-sm-6">
        <form action="sparaartikel.php" method="get">


          <div class="form-group">
            <label for="rubrik">rubrik</label>
            <input type="text" name="rubrik" class="form-control" id="rubrik" aria-describedby="emailHelp" >
          </div>
          <div class="form-group">
            <label for="pris">pris</label>
            <input type="text" name="pris" class="form-control" id="pris" >
          </div>
          <div class="form-group">
            <label for="antal">antal</label>
            <input type="text" name="antal" class="form-control" id="antal" >
          </div>
          <div class="form-group">
            <label for="beskrivandetext">beskrivande text</label>
            <input type="text" name="beskrivandetext" class="form-control" id="beskrivandetext" >
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

<?php

}

 ?>
