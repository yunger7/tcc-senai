<nav>
  <div class="nav-wrapper">
    <ul class="quick-access">
      <li>
        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large btn-floating btn-flat waves-effect waves-light"><i class="material-icons">menu</i></a>
      </li>
      <li>
        <a href="/tcc/veiculos.php" class="waves-effect waves-light btn-flat white-text reservar"><i class="material-icons right">local_shipping</i>Reservar</a>
      </li>
    </ul>
    <div class="usuario">
      <span class="nome"><?php echo $_SESSION['nome']; ?></span>
      <i class="material-icons account-circle">account_circle</i>
      <a data-target="nav-dropdown" class="dropdown-trigger">
        <i class="material-icons">keyboard_arrow_down</i>
      </a>
    </div>
  </div>
</nav>

<ul id="slide-out" class="sidenav">
  <div>
    <li class="center top-header">
      <i class="medium material-icons">directions_car</i>
      <i class="small material-icons sidenav-close">close</i>
    </li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Acesso Rápido</a></li>
    <li><a href="/tcc/veiculos.php" class="waves-effect"><i class="material-icons"">add</i>Reservas</a></li>
    <li><a href="/tcc/historico.php" class="waves-effect"><i class="material-icons"">history</i>Histórico</a></li>
    <?php if ($_SESSION['tipo'] === "A") { ?>
      <li><div class="divider"></div></li>
      <li><a class="subheader">Admin</a></li>
      <li><a href="/tcc/admin/usuarios.php" class="waves-effect"><i class="material-icons"">account_circle</i>Usuários</a></li>
      <li><a href="/tcc/admin/veiculos.php" class="waves-effect"><i class="material-icons"">local_shipping</i>Veículos</a></li>
    <?php } ?>
  </div>
  <div>
    <li><a href="/tcc/config/sair.php"><i class="material-icons">logout</i>Sair</a></li>
  </div>
</ul>

<!-- Dropdown -->
<ul id="nav-dropdown" class="dropdown-content">
  <li>
    <a href="/tcc/config/sair.php"><i class="material-icons left">logout</i>Sair</a>
  </li>
</ul>

<script>
$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.dropdown-trigger').dropdown();
});
</script>