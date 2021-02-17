
<!-- this navbar is collected from bootstrap website -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><?php echo lang("HOME_ADMIN")?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang("Categories")?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang("Options")?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang("Items")?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang("Members")?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang("Statistics")?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang("Logs")?></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo lang('Options')?>
          </a>


          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#"><?php echo lang("Edit profile")?></a></li>
            <li><a class="dropdown-item" href="#"><?php echo lang("Sittings")?></a></li>
            <li><a class="dropdown-item" href="#"><?php echo lang("Logout")?></a></li>
          </ul>

          
        </li>
      </ul>
    </div>
  </div>
</nav>