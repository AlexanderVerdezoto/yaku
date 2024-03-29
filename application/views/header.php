

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YAKU</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url("/assets/assets/images/logos/favicon.png")?>" />
    <link rel="stylesheet" href="<?php echo base_url("/assets/assets/css/styles.min.css")?>" />
    
</head>
</head>




<aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="<?php echo site_url("")?>" class="text-nowrap logo-img">
          <a href="<?php echo site_url("")?>" class="text-nowrap logo-img">
            <img src="https://repositorio.utc.edu.ec/image/logotipo-UTC.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
          <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">ASISTENCIA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Asistencias/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Asistencias/Agregar")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">CONFIGURACION</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Configuraciones/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Configuraciones/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Consumo</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Consumos/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Consumos/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Detalle</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Detalles/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Detalles/Add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Evento</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Eventos/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Eventos/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXCEDENTE</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Excedentes/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Excedentes/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">HISTORIAL PROPIETARIO</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Historiales/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Historiales/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Impuesto</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Impuestos/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Impuestos/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Lectura</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Lecturas/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Lecturas/add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li> 
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Medidor</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/Agregar")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">PERFIL</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Perfiles/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Perfiles/Add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">RECAUDACION</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/Agregar")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">RUTA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Rutas/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Rutas/Add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SOCIOS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Socios/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Socios/Add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">TARIFA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/Agregar")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">TIPO EVENTO</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Medidores/Agregar")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">USUARIOS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Usuarios/index")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url("Usuarios/Add")?>" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ingresar Datos</span>
              </a>
            </li>

          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Yaku</h6>
              </div>
             
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>