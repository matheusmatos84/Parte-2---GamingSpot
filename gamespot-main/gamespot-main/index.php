
<?php include "masterhead.php" ?>

<?php include "header.php" ?>

<?php
session_start();

$loginSucesso = $_SESSION['logado'] ?? false;
unset($_SESSION['logado']);
?>

<div class="modal fade" id="loginSucessoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Login realizado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <h4>✔ Bem-vindo!</h4>
        <p>Login realizado com sucesso.</p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-success" data-bs-dismiss="modal">OK</button>
      </div>

    </div>
  </div>
</div>

<?php if ($loginSucesso) { ?>
<script>
window.onload = function () {
    var modal = new bootstrap.Modal(document.getElementById('loginSucessoModal'));
    modal.show();
};
</script>
<?php } ?>

    
<?php include "footer.php" ?>