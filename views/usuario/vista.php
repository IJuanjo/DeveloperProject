<?php if(isset($_SESSION['identity']) && $_SESSION['identity']): ?>
<h1>Datos de la persona  <br> name: <?= $_SESSION['identity']->name ?> </h1>
<?php endif; ?>
<?php if (isset($_SESSION['admin']) && $_SESSION['admin']) : ?>
        <h1>Es administrador</h1>
<?php endif; ?>

<?php if (isset($_SESSION['identity'])) : ?>
            <a href="<?= base_url ?>usuario/logout" class="btn btn-warning">Cerrar Sesion</a>
<?php endif; ?>