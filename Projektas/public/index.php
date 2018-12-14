<?php
  require __DIR__ . '/../app/src/app.php';
?>

<?php
  include('../app/views/header.php');
?>

<style type="text/css">
  #italic{
  font-style: italic;
  }
  tr, td{
  border: 1px, #616161;
  text-align: center;
  border-collapse: collapse
  }
  #parts{
  background-color: #e0e0e0;
  border: 1px solid grey;
  text-align: center;
  }
  .stulpelis{
  width: 50%;
  float: left;
  text-align: center;
  border: 1px solid grey;
  border-collapse: collapse;
  }
  .stulpelis li{
  border-bottom: 1px solid grey;
  }
  .stulpelioPavadinimas{
  padding: 10px;
  background-color: lightgrey;
  border-bottom: 1px solid grey;
  font-weight: bold;
  border-collapse: collapse;
  }
  .metalBox{
  border: 1px solid grey;
  text-align: center;
  }
  .rightBorder{
  border-right: 1px solid grey;
  }
</style>

<main>
  <div class="parallax-container">
    <div class="parallax"><img src="../app/images/image1.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Metalai</h2>
      <p class="grey-text text-darken-3 lighten-3">
        <span id="italic">Metalais</span> vadinami cheminiai elementai ir sudėtingi jų lydiniai, kuriems būdingos metališkosios savybės: elektros ir šilumos laidumas, plastiškumas, kristalinė sandara, lūžio blizgesys, kylant temperatūrai didėjanti elektrinė varža.<br>
        Visi metalai ir jų lydiniai sąlygiškai skirstomi į juoduosius ir spalvotuosius. <span id="italic">Juodieji metalai</span> - tai geležis ir lydiniai jos pagrindu: plienas, ketus, ferolydiniai. Jie sudaro 95% visų gaminamų metalų. <span id="italic">Spalvotieji</span> - tai visi kiti metalai ir jų lydiniai. Jie skirstomi į lengvuosius, kurių tankis iki 4 g/cm³ (magnis, aliuminis, berilis ir kt.), sunkiuosius (varis, nikelis, švinas ir kt.), tauriuosius (auksas, sidabras, platina ir kt.).
      </p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="../app/images/image1.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Metalų klasifikacija</h2>
      <table>
        <tr>
          <th id="parts">JUODIEJI</th>
          <th colspan="3" id="parts">SPALVOTIEJI</th>
        </tr>
        <tr class="metalBox">
          <td class="rightBorder"><a href="steel.php">PLIENAS</a></td> 
          <td class="rightBorder">ALAVAS</td>
          <td class="rightBorder"><a href="copper.php">VARIS</a></td>
        </tr>
        <tr class="metalBox">
          <td class="rightBorder">KETUS</td>
          <td class="rightBorder">ŠVINAS</td>
          <td class="rightBorder"><a href="aluminum.php">ALIUMINIS</a></td>
        </tr>
        <tr class="metalBox">
          <td rowspan="2" class="rightBorder">MILTELINĖS MEDŽIAGOS</td>
          <td class="rightBorder">CINKAS</td>
          <td class="rightBorder">MAGNIS</td>
        </tr>
        <tr class="metalBox">
          <td class="rightBorder">CHROMAS</td>
          <td class="rightBorder">TITANAS</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="../app/images/image1.jpg"></div>
  </div>
</main>

<?php
 include('../app/views/content.php');
 include('../app/views/footer.php');
?>
