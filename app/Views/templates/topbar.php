<ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= user()->username; ?> <img class="img-profile rounded-circle" width="40px" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">My Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
        </div>
    </li>
</ul>