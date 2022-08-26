    <nav id="navbar" >
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
            <img src="Public/assets/bookstore01.png" class="logo-img" height="65rem" width=" 65rem" />
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>


<!--js-->
<script>
    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
        });
    });

    // Scrolling Effect

    $(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }

        else {
            $('nav').removeClass('black');
        }
    })</script>
