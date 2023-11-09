<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="" class="logo m-0 float-start">Ndaku.com</a>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
            <li class="active"><a href="{{ route('user.home')}}">Accueil</a></li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('proprietes.index')}}">Shop</a>
           </li>
            <li class="has-children">
              <a href="">Propriétés</a>
              <ul class="dropdown">
                <li><a href="{{ route('proprietes.index')}}" class="login-link">A vendre</a></li>
                <li><a href="{{ route('proprietes.index')}}" class="login-link">A louer</a></li>
              </ul>
            </li>
            <li class="has-children">
              @if(auth()->check()) <!-- Vérifie si l'utilisateur est connecté -->
              <a href="">Mon compte</a>
              <ul class="dropdown">
                <li>
                <div class="" >
                  <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button type="submit" class="dropdown-item">Déconnexion</button>
                  </form>
                  <li><a href="#" class="login-link">Mes achats</a></li>
                  <li><a href="#" class="login-link">Acheter une propriété</a></li>
                  <li><a href="#" class="login-link">Vendre une propriété</a></li>
                  <li><a href="{{route('admin.home')}}" class="login-link">Gestion</a></li>
                  
                </div>
              </ul>
            </li>
           
        @else
        <li>
          <a href="{{route('register')}}" class="text-light btn btn-primary bouton-connexion">S'inscrire</a>
        </li>
        <li>
          <a href="{{route('login')}}" class="text-light btn btn-primary bouton-connexion">Se connecter</a>
        </li>
        @endif
        </ul>

          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
  