<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="/" class="brand-link">
        <img src="<?= base_url('theme') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AlefDev</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('theme') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Joel Santana</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <!-- Não esqucer que tem que tirar o espaco quando colocar um span de quantidades, para nao dar o bug do pulinho! -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/minhasguias" class="nav-link">
                        <!-- <i class="nav-icon fas fa-cash-register"></i> -->
                        <p>Guias Agendadas</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/cadastrar" class="nav-link">
                        <!-- <i class="nav-icon fas fa-cash-register"></i> -->
                        <p>Cadastrar Guias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/triagem/lista" class="nav-link">
                        <!-- <i class="nav-icon fas fa-table"></i> -->
                        <p>Triagem de Guias<span class="badge badge-info right"><?= session('triagemCount') ?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/filap1" class="nav-link">
                        <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
                        <p>Fila P1<span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/filap2" class="nav-link">
                        <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
                        <p>Fila P2<span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/filap3" class="nav-link">
                        <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
                        <p>Fila P3<span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>