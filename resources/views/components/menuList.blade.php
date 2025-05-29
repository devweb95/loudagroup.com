<nav class="main-nav">
    <ul class="parent-nav">
        <!-- <li class="has-dropdown">
                    <a class="nav-link " href="#">
                        <span class="rolling-text">QUI SOMMES-NOUS</span>
                    </a>
                    <ul class="submenu mega-menu-wrapper">
                    
                    
                            <li class="menu-single-list">
                                <a href="#" class="top-title">OnePage</a>
                                <ul>
                                    <li><a href="{{ route('onepage-one') }}">Onepage Corporate</a></li>
                                    <li><a href="{{ route('onepage-two') }}">Onepage Financial</a></li>
                                    <li><a href="{{ route('onepage-three') }}">Onepage Marketing</a></li>
                                    <li><a href="{{ route('onepage-four') }}">Onepage Agency</a></li>
                                    <li><a href="{{ route('onepage-five') }}">Onepage Startup</a></li>
                                    <li><a href="{{ route('onepage-six') }}">Onepage Construction</a></li>
                                    <li><a href="{{ route('onepage-seven') }}">Onepage Construction 2</a></li>
                                    <li><a href="{{ route('onepage-eight') }}">Onepage Company</a></li>
                                </ul>
                            </li> 
                        
                        <li class="menu-single-list">
                            <a href="#" class="top-title"></a>
                            <ul>
                                <li><a href="{{ route('index') }}">Notre Groupe</a></li>
                                <li><a href="{{ route('index-two') }}">Notre objectif et nos principes</a></li>
                                <li><a href="{{ route('index-three') }}">Nos entreprises</a></li>
                                <li><a href="{{ route('index-four') }}">Direction</a></li>
                                <li><a href="{{ route('index-five') }}">Conseil d'administration</a></li>
                            
                                <li><a href="{{ route('index-six') }}">Construction Demo</a></li>
                                <li><a href="{{ route('index-seven') }}">Construction 2 Demo</a></li>
                                <li><a href="{{ route('index-eight') }}">Company Demo</a></li>
                            
                            </ul>
                        </li>
                        
                    </ul>
                </li>
        -->
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">QUI SOMMES-NOUS</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('notre_group') }}">Notre Groupe</a></li>
                <li><a href="{{ route('objectif-principes') }}">Nos Valeurs</a></li>
                <!--<li><a href="{{ route('nos-entreprise') }}">Nos entreprises</a></li>-->
                <li><a href="{{ route('direction') }}">Direction</a></li>
                <li><a href="{{ route('conseil_admin') }}">Conseil d'Administration</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">CE QUE NOUS FAISONS</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('louda_chimical') }}">Louda Chemical</a></li>
                <li><a href="{{ route('louda_industry') }}">Louda Industry</a></li>
                <li><a href="{{ route('louda_service') }}">Louda Services</a></li>
                
            </ul>
        </li>

        <li>
            <a class="nav-link" href="{{ route('actualite') }}">
                <span class="rolling-text">ACTUALITÉ</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('offre_emploie') }}">
                <span class="rolling-text">CARRIÈRE</span>
            </a>
        </li>
      
        
        <li>
            <a class="nav-link" href="{{ route('contact') }}">
                <span class="rolling-text">CONTACT</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">FILIALES</span>
            </a>
           <ul class="submenu">
                <li><a href="{{ route('acceul_bf') }}">Louda Burkina Faso</a></li>
                <li><a href="{{ route('acceul_ci') }}">Louda Côte d’Ivoire</a></li>
            </ul>
        </li>
    </ul>
</nav>