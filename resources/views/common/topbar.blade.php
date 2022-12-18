<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky" >


<nav id = "navbar" class="uk-navbar-container uk-light" uk-navbar="align: center">
    <div class="uk-navbar-center">

        
        <a id ="logo"class="uk-navbar-item uk-logo" href={{route("/")}}>{{config('app.name')}}</a>
        
{{-- -------------   mobile desktop menu  ------------------------------ --}}

        <ul id="menu" class="uk-navbar-nav uk-visible@m"  >
            <li ><a href="#">Home </a></li>
                <li><a href="#">MyCourses</a></li>
                <li><a href="#">New</a></li>
                <li><a href="#">Offer</a></li>
        </ul>

{{-- -------------   mobile main menu  ------------------------------ --}}

        <div class="uk-navbar-item uk-hidden@m"  >
       <a uk-icon="icon: menu" uk-toggle="target: #offcanvas-overlay"></a>
        <div id="offcanvas-overlay" uk-offcanvas="overlay: true" uk-offcanvas="flip: true" >
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>{{config('app.name')}}</h3>
                <li ><a href="#">Home </a></li>
                <li><a href="#">MyCourses</a></li>
                <li><a href="#">New</a></li>
                <li><a href="#">Offer</a></li>
            </div>
            </div>
        </div>

 {{-- ---------------------     mune icons         ----------------------- --}}
        
        <ul class="uk-iconnav">
            <li><a href="{{route('profile')}}" uk-icon="icon: user"></a></li>
            <li><a href="#"><span uk-icon="icon: bag"></span> (2)</a></li>
        </ul>
 {{-- ---------------------     mune icons         ----------------------- --}}
        <form action="javascript:void(0)" class="uk-visible@s uk-navbar-item"	> 
        <div class="uk-inline uk-align-center ">
            <span  class="uk-form-icon"  uk-icon="icon: search"></span>
            <input class="uk-input" style="border-radius: 20px" type="text" aria-label="Not clickable icon">
        </div>
    </div>
</form>


</nav>

</div>
