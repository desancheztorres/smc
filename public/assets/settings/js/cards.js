$(document).ready(function(){

    var ias = jQuery.ias({
        container: '.box-cards',
        item: '.card-item',
        pagination: '.pagination',
        next: '.pagination .page-link',
        triggerPageThreshold: 5
    });

    ias.extension(new IASTriggerExtension({
        text: 'See more cards',
        offset: 3
    }));

    ias.extension(new IASSpinnerExtension({
        src: URL+'/../assets/images/ajax-loader.gif'
    }));

    ias.extension(new IASNoneLeftExtension({
        text: 'No more cards'
    }));

    ias.on('ready', function(event){
        followButtons();
    });

    ias.on('rendered', function(event){
        followButtons();
    });

});