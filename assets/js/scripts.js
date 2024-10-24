$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        var icone = $('nav.mobile div');
        // listaMenu.show();
        // listaMenu.hide();
        // listaMenu.fadeIn();
        // listaMenu.fadeOut();
        // listaMenu.slideToggle();

        if(listaMenu.is(':hidden')){
            // listaMenu.css('display', 'block')
            icone.removeClass('fa-bars');
            icone.addClass('fa-xmark');
            listaMenu.slideToggle();
        }
        else{
            // listaMenu.css('display', 'none')
            listaMenu.slideToggle();
            icone.removeClass('fa-xmark');
            icone.addClass('fa-bars');
        }

    })

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll}, 2000);
    }

})