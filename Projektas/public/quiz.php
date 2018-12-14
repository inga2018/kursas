<?php
  include('../app/views/header.php');
?>
<link rel="stylesheet" type="text/css" href="../app/css/style.css" />
  
<style type="text/css">
  [type="radio"]:not(:checked), [type="radio"]:checked {
  position: absolute;
  opacity: 1;
  z-index: -1;
  margin-top: 5px;
  }
  input[type="submit"]{
    background-color: #555;
    color: #fff;
    border-radius: 5px;
    width: 100px;
  }
  .options{
    padding-left: 20px;
    z-index: 1;
  }
  form{
    padding-bottom: 30px;
  }
</style>

<body>
  <div id="page-wrap">
    <h1>Medžiagų testas</h1>
    <form action="grade.php" method="post" id="quiz">
      <ol>
        <li>
          <h3>Kuris metalas nepriklauso lengvųjų metalų grupei?</h3>
          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/><label class="options" for="question-1-answers-A">A) Magnis </label>
          </div>
          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" required/><label class="options" for="question-1-answers-B">B) Aliuminis </label>
          </div>
          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" required/><label class="options" for="question-1-answers-C">C) Manganas </label>
          </div>
          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" required/><label class="options" for="question-1-answers-D">D) Berilis </label>
          </div>
        </li>
        <li>
          <h3>Kurio iš šių metalų gardelė yra iš kubinio centruoto tūrio(KCT)?</h3>
          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/><label class="options" for="question-2-answers-A">A) Chromas </label>
          </div>
          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" required/><label class="options" for="question-2-answers-B">B) Varis </label>
          </div>
          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" required/><label class="options" for="question-2-answers-C">C) Cinkas </label>
          </div>
          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" required/><label class="options" for="question-2-answers-D">D) Nikelis </label>
          </div>
        </li>
        <li>
          <h3>Linijiniai defektai vadinami:</h3>
          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/><label class="options" for="question-3-answers-A">A) Modifikacijomis </label>
          </div>
          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" required/><label class="options" for="question-3-answers-B">B) Dislokacijomis </label>
          </div>
          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" required/><label class="options" for="question-3-answers-C">C) Alotropijomis </label>
          </div>
          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" required/><label class="options" for="question-3-answers-D">D) Fragmentais </label>
          </div>  
        </li>
        <li>
          <h3>Kokio tipo taškinis defektas susidaro, kai lieka neužimta atomo vieta gardelėje?</h3>
          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/><label class="options" for="question-4-answers-A">A) Priemaišiniai atomai  </label>
          </div>
          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" required/><label class="options" for="question-4-answers-B">B) Įsiterpę atomai </label>
          </div>
          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" required/><label class="options" for="question-4-answers-C">C) Frenkelio efektas </label>
          </div>
          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" required/><label class="options" for="question-4-answers-D">D) Takumas </label>
          </div>
        </li>
        <li>
          <h3>Kaip paaiškinama metalų mechaninė savybė tąsumas?</h3>
          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/><label class="options" for="question-5-answers-A">A) Medžiagos, veikiamos išorinių jėgų geba priešintis deformavimuisi  </label>
          </div>
          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required/><label class="options" for="question-5-answers-B">B) Medžiagos geba atstatyti pradinius matmenis ir formą, kai pašalinama apkrova </label>
          </div>
          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C"required/><label class="options" for="question-5-answers-C">C) Medžiagos geba priešintis dinaminei t.y. staigiai didėjančiai apkrovai </label>
          </div>
          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" required/><label class="options" for="question-5-answers-D">D) Metalas geba keisti formą nesuyrant tuomet, kai veikia apkrova, ir šią formą išsaugoti, kai ji pašalinama </label>
          </div>
        </li>
      </ol>
      <input type="submit" name="" value="PATEIKTI">
    </form>
  </div>
</body>

<?php
 include('../app/views/footer.php');
?>