$(document).ready(function () {

    if ($('.tabs ul li').length > 0) {
        var cnt = 0;
        var toppos = 35;

        $('.tabs ul li:visible').each(function () {
            //console.log($(this).position().top);
            if ($(this).next().length) {
                if ($(this).next().position().top > toppos) {
                    $(this).addClass('last-tab');
                    return false;
                }
            }
        });

        $('.tabs .prev').hide();

        if ($('.tabs ul li:last').position().top < toppos) {
            $('.tabs .next').hide();
        }


        $('.tabs').on('click', '.next', function () {

            $('.tabs ul').find('li:visible:first').hide();

            $('.tabs ul li').removeClass('first-tab').removeClass('last-tab');
            $('.tabs ul').find('li:visible:first').addClass('first-tab');

            $('.tabs ul li:visible').each(function () {
                //console.log($(this).position().top);
                if ($(this).next().length) {
                    if ($(this).next().position().top > toppos) {
                        $(this).addClass('last-tab');
                        return false;
                    }
                }
            });

            if ($('.tabs ul li:last').position().top < toppos) {
                $('.tabs .next').hide();
            }
            $('.tabs .prev').show();
        });

        $('.tabs').on('click', '.prev', function () {

            $('.tabs ul').find('li:hidden:last').css('display', '');

            $('.tabs ul li').removeClass('first-tab').removeClass('last-tab');
            $('.tabs ul').find('li:visible:first').addClass('first-tab');

            $('.tabs ul li:visible').each(function () {
                //console.log($(this).position().top);
                if ($(this).next().length) {
                    if ($(this).next().position().top > toppos) {
                        $(this).addClass('last-tab');
                        return false;
                    }
                }
            });

            $('.tabs .next').show();

            if ($('.tabs ul li:first').is(':visible')) {
                $('.tabs .prev').hide();
            }
        });
    }
    else
    {
        $('.tabs .prev').hide();
        $('.tabs .next').hide();
    }
});