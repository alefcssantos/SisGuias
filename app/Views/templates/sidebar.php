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
                    <a href="/frentecaixa" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Frente de Caixa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Comandas<span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/calendario" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>Agenda<span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/clientes" class="nav-link">
                        <i class="nav-icon fas fa-user-tie">
                        </i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/produtos" class="nav-link">
                        <i class="nav-icon fas fa-boxes">
                        </i>
                        <p>Produtos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/fornecedores" class="nav-link">
                        <i class="nav-icon fas fa-handshake">
                        </i>
                        <p>Fornecedores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/usuarios" class="nav-link">
                        <i class="nav-icon fas fa-users">
                        </i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-clipboard"></i>
                        <p>Orçamentos<span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-clipboard-list"></i>
                        <p>Ordens de Serviço<span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="/empresas" class="nav-link">
                        <i class="nav-icon fas fa-building">
                        </i>
                        <p>Empresas</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="/sistemas" class="nav-link">
                        <i class="nav-icon fas fa-laptop">
                        </i>
                        <p>Sistemas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-code">
                        </i>
                        <p>Api's</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope">
                        </i>
                        <p>E-mail</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns">
                        </i>
                        <p>Kanban</p>
                    </a>
                </li> -->


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>