<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('user.home')}}">
         Ndaku.com
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href=" {{route('admin.home')}} " class="dropdown-toggle no-arrow">
                        <span class="micon icon-copy fa fa-dashboard"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon icon-copy fa fa-group"></span><span class="mtext"> Propriétés</span>
                        </a>
                        <ul class="submenu">
                            
                            <li><a href="{{route('proprietes.create')}}">Nouvelle propriete</a></li>                     
                            
                            <li><a href="{{route('proprietes.index')}}">Liste</a></li>    
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon icon-copy fa fa-group"></span><span class="mtext"> Post de vente</span>
                        </a>
                        <ul class="submenu">
                            
                            <li><a href="{{route('posters.create')}}">Poster une propriete</a></li>                     
                            
                            <li><a href="{{route('posters.index')}}">Liste de mes postes</a></li>    
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon icon-copy fa fa-group"></span><span class="mtext"> Responsable</span>
                        </a>
                        <ul class="submenu">
                            
                            <li><a href="{{route('responsables.create')}}">Ajouter un responsable</a></li>                     
                            
                            <li><a href="{{route('responsables.index')}}">Liste de responsables</a></li>    
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy fa fa-folder"></span><span class="mtext">Catégories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tarifs.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy fa fa-folder"></span><span class="mtext">Mes tarifs</span>
                        </a>
                    </li>
                </ul>
                
            </ul>
        </div>
    </div>
</div>