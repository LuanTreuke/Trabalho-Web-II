$(function(){
    //Tempo do carousel
    var delay = 7

    //valor atual do slide
    var currentSlide = 0;
    //quantidade total de slides  
    var maxSlide = $('.banner-single').length -1;
    
    initSlider();
    changeSlider();

    function initSlider(){
        //esconder todos os elementos da classe
        $('.banner-single').hide();
        //eq seleciona o index() | show mostra
        $('.banner-single').eq(0).show();

        for(var i=0; i < maxSlide+1; i++){
            //Recuperando o conteúdo do html
            var content = $('.bullets').html();

            //Verificando se é o primeiro bullet
            if(i==0){
                content += '<span class="active-slider"></span>'
            }else{
                content += '<span></span>';
            }
                
            $('.bullets').html(content);       
        }
    }

    function changeSlider(){
        setInterval(function(){
            $('.banner-single').eq(currentSlide).fadeOut();
            currentSlide++;

            if(currentSlide > maxSlide){
                currentSlide = 0;
            }

            $('.banner-single').eq(currentSlide).fadeIn();
            //Trocar os bullets de navegação
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(currentSlide).addClass('active-slider');
            
        }, delay*1000);
    }

    $('body').on('click', '.bullets span', function(){
        var currentBullet = $(this);
        //Sincronizar bullets e slider
        $('.banner-single').eq(currentSlide).stop().fadeOut();
        currentSlide = currentBullet.index();
        $('.banner-single').eq(currentSlide).stop().fadeIn();
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');
    })

})