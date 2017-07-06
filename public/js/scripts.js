
    jQuery(document).ready(function() {

        $('.single-item').slick({
            speed: 1000,
            dots: true,
        });

        $('.meeting-slide, .btn-meeting').click(function(){
            $('.meeting-popup').fadeIn(300);
            $('body').css('overflow-y','hidden');
        });

        $('.close').click(function(){
            $('.meeting-popup').fadeOut(300);
            $('body').css('overflow-y','auto');
        });
        if($(window).height() > $('body').height()){
            $('footer').css('position','absolute');
            $('footer').css('width','100%');
            $('footer').css('bottom','0px');
        }

        if($('.alert').length !== 0){
            if($('.alert').html().length > 0){

                $('.alert').animate({top: $('.alert').height()+23, opacity: '0.95'}, 600, 'swing');
            }
        }
        $('.alert-close').click(function(){
            $('.alert').animate({top: '0px'},300, 'swing');
        });

        $('.meeting-popup .option label').toggle(function(){
            $(this).css({background: '#87bc26', color: '#fff'});
            $(this).next('input[type="checkbox"]').prop('checked', true);
        }, function () {
            $(this).attr('style','');
            $(this).next('input[type="checkbox"]').prop('checked', false);
        });


        if($(window).width() > 767) {
            var maxHeight = -1;
            $(this).find("#categories .category-card").each(function () {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            $('#categories .category-card').height(maxHeight);
        }

            $('main').click(function(){
                 $('.navbar-collapse').removeClass('in');
            });

    });

$(window).one('resize', function(){
    if($(window).width() > 767) {
        var maxHeight = -1;
        $(this).find("#categories .category-card").each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });
        $('#categories .category-card').height(maxHeight);
    }
});

$(window).resize(function(){
    if($(window).width() > 767) {
        var maxHeight = -1;
        $('#categories .category-card').each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
            $('#categories .category-card').height(maxHeight);
        });
    }
});


$(window).scroll(function () {
    if($(window).scrollTop() > 350){
        $('.meeting-slide-title').fadeOut(0);
        $('.meeting-slide i.fa').fadeIn(0);
        $('.meeting-slide').attr('style','width: 125px;right:-55px;padding: 15px 8px 8px');
    }else{
        $('.meeting-slide').attr('style','');
        $('.meeting-slide-title').fadeIn(0);
        $('.meeting-slide i.fa').fadeOut(0);
    }

    if($(window).scrollTop() > 10){
        $('.navbar-inverse .navbar-nav>li>a').addClass('menu-padding');
        $('.navbar-brand img').addClass('logo-width');
    }else{
        $('.navbar-inverse .navbar-nav>li>a').removeClass('menu-padding');
        $('.navbar-brand img').removeClass('logo-width');
    }
});
