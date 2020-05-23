<?php

class Dashboard{
    // pone el header
    public static function header(string $pagina = ''){?>
           <header>
              <h1><a href="/">Framework CIFO 19-20</a></h1>
              <h2><?=$pagina?></h2>
           </header>
    <?php }

    // pone el nav
    public static function nav(){?>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
          <div class="container">
              <a href="/" class="navbar-brand">Oscar Martos Blog</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav">
                      <li class="navbar-item px-2">
                          <a href="/login/dashboard" class="nav-link">Dashboard</a>
                      </li>
                      <li class="navbar-item px-2">
                          <a href="/blog/list" class="nav-link">Posts</a>
                      </li>
                      <li class="navbar-item px-2">
                          <a href="/category/list" class="nav-link">Categories</a>
                      </li>
                      <li class="navbar-item px-2">
                          <a href="/usuario/list" class="nav-link">Users</a>
                      </li>
                   </ul>
                  <?php Dashboard::login();?>
              </div>
          </div>
      </nav>
    <?php }

    // pone el login/logout
    public static function login(){
        // recupera el usuario identificado mediante el modelo Login
        $identificado = Login::get();

        echo "<ul class='navbar-nav ml-auto'>
                <li class='nav-item dropdown mr-3'>
                   <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
                       <i class='fas fa-user'></i> Welcome $identificado->usuario </a>
                   <div class='dropdown-menu'>
                       <a href='/usuario/show/$identificado->id' class='dropdown-item'>
                           <i class='fas fa-cog'></i> Settings
                       </a>
                   </div>
                </li>
                <li class='nav-item'>
                   <a href='/blog/admin' class='nav-link'>
                       <i class='fas fa-user-times'></i> Logout
                   </a>
                </li>
              </ul>";
    }

    // pone el footer
    public static function footer(){?>
      <footer id="main-footer" class="bg-dark text-white mb-1 p-3">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <p class="lead text-center">
                          Copyright &copy; <span id="year"></span> Framework 19-20, desarrollado en CIFO Vallés all rights reserved</p>
                          <p class="lead text-center">PJR@CIFO</p>
                  </div>
              </div>
          </div>
      </footer>
    <?php }
}
