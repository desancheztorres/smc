<script src="{{ asset('assets/settings/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script> <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
<script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script> <!-- Bootstrap v3.3.7 -->
<script src="{{ asset('assets/settings/js/jquery.mb.ytplayer.min.js') }}" type="text/javascript"></script> <!-- YTPlayer for video header background -->
<script src="{{ asset('assets/settings/js/jquery.easing.min.js') }}" type="text/javascript"></script> <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
<script src="{{ asset('assets/settings/js/jquery.countdown.min.js') }}" type="text/javascript"></script> <!-- The Final Countdown v2.2.0 plugin for jQuery -->
<script src="{{ asset('assets/settings/js/swiper.min.js') }}" type="text/javascript"></script> <!-- Swiper v3.4.2 for image gallery swiper -->
<script src="{{ asset('assets/settings/js/jquery.magnific-popup.js') }}" type="text/javascript"></script> <!-- Magnific Popup v1.1.0 for lightboxes -->
<script src="{{ asset('assets/settings/js/waypoints.min.js') }}" type="text/javascript"></script> <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
<script src="{{ asset('assets/settings/js/jquery.counterup.min.js') }}" type="text/javascript"></script> <!-- Counter-Up v1.0 for statistics -->
<script src="{{ asset('assets/settings/js/validator.min.js') }}" type="text/javascript"></script> <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
<script src="{{ asset('assets/settings/js/scripts.js') }}" type="text/javascript"></script> <!-- Custom scripts -->

<script>
    $(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })
</script>