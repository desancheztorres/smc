{{-- jQuery --}}
<script type='text/javascript' src='{{ asset('js/jquery/jquery.js') }}'></script>
{{-- Bootstrap --}}
<script type='text/javascript' src='{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/jquery-migrate.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.form.min.js') }}'></script>

<script type='text/javascript' src='{{ asset('js/cform.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontend/add-to-cart.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery-blockui/jquery.blockUI.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontend/woocommerce.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery-cookie/jquery.cookie.min.js') }}'></script>

<script type='text/javascript' src='{{ asset('js/frontend/cart-fragments.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/ui/core.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/ui/widget.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/ui/mouse.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/ui/sortable.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/ui/tabs.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery/ui/accordion.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/owl-carousel/owl.carousel.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.swiper.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.plugins.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/mfn.menu.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/scripts.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/placeholder.js') }}'></script>

<script>
    jQuery(document).ready(function($) {
        // show / hide
        $('#configurator .control').click(function(e){
            e.preventDefault();
            if ($('#configurator').hasClass('active')){
                $('#configurator').removeClass('active').animate({ 'left':-192 },500);
            } else {
                $('#configurator').addClass('active').animate({ 'left':-1 },500);
            }
        });
        // layout select
        $('#configurator .select-layout a').click(function(e){
            e.preventDefault();
            var newClass = $(this).attr('class');
            $('body')
                .removeClass('layout-full-width layout-boxed')
                .addClass(newClass);
            $(this)
                .parent().addClass('active')
                .siblings().removeClass('active');
        });
        // grid select
        $('#configurator .select-grid a').click(function(e){
            e.preventDefault();
            var newClass = $(this).attr('class');
            $('body')
                .removeClass('grid960 grid1200')
                .addClass(newClass);
            $(this)
                .parent().addClass('active')
                .siblings().removeClass('active');
        });
        // menu select
        $('#configurator .select-menu a').click(function(e){
            e.preventDefault();
            var newClass = $(this).attr('class');
            $('body')
                .removeClass('menu-clean menu-default')
                .addClass(newClass);
            $(this)
                .parent().addClass('active')
                .siblings().removeClass('active');
        });
        // bg select
        $('#configurator .select-image a').click(function(e){
            e.preventDefault();
            var bg_attr = $(this).attr('data-rel');
            var bg = 'url("'+ $(this).children('img').attr('src') +'") ' + bg_attr;
            $('html').css('background','none').css('background',bg);
            // boxed layout
            $('body').removeClass('layout-full-width').addClass('layout-boxed');
        });
        // color select
        $('#configurator .select-color a').click(function(e){
            e.preventDefault();
            var value = $(this).attr('class');
            if( value != 'default' ){
                $('#configurator .inp-color').attr('name','mfn-c');
            }
            $('#configurator .inp-color').val(value);
            $('#config').submit();
        });
    });
</script>
<script type='text/javascript' src='{{ asset('js/tabs.js') }}'></script>
<script>
    //<![CDATA[
    window.mfn_slider_vertical	= { autoplay:5000 	};
    window.mfn_slider_portfolio 	= { autoPlay:0 };
    //]]>
</script>