<!-- Menu -->

<nav class="menu navbar navbar-expand-xl navbar-dark">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-center" id="menu">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"  href="?i=home" <?php if($pagina=='home'){echo 'style="color:white; font-weight: bold;"';} ?>>INÍCIO</a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  href="?i=foryou" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php if($pagina=='foryou'){echo 'style="color:white; font-weight: bold;"';} ?>>PARA VOCÊ</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?i=foryou#ParaSuaCasa">PARA SUA CASA</a>
            <a class="dropdown-item" href="?i=foryou#ParaSeuCondominio">PARA SEU CONDOMÍNIO</a>
            <a class="dropdown-item" href="?i=foryou#ParaSuaEscola">PARA SUA ESCOLA</a>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link"  href="?i=about" <?php if($pagina=='about'){echo 'style="color:white; font-weight: bold;"';} ?>>ALPHA ENGENHARIA</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link"  href="?i=services" <?php if($pagina=='services'){echo 'style="color:white; font-weight: bold;"';} ?>>SERVIÇOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="?i=blog" <?php if($pagina=='blog'||$pagina=='article'||$pagina=='blog-completo'){echo 'style="color:white; font-weight: bold;"';} ?>>BLOG</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?i=contact" <?php if($pagina=='contact'){echo 'style="color:white; font-weight: bold;"';} ?>>CONTATO</a>
        </li> 
    </ul>
</div>

</nav>
