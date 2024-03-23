<?php require_once __DIR__ . '/snippets/header.php'; ?>
<?php require_once __DIR__ . "/snippets/topbar.php"?>


<div class="container-fluid" id="main-container">

<div class="row justify-content-center" id="form-box">
     <div class="col-sm-6 align-self-center">
          <form class="">
               <h3 id="date-title">Escolha sua data:</h3>
               <input type="date" class="form-control mb-3" name="data" id="dateform" id="date-input">
               <button type="button" class="btn btn-info p2" id="btn-date">Verificar Disponibilidade</button>
          </form>
       </div>
     </div>
</div>


<?php require_once __DIR__ . '/snippets/footer.php'; ?>
