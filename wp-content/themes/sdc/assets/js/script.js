(function ($) {
    $(document).ready(function () {
        $('.burger').click(function () {
            $('.mobile_nav .burger').toggleClass('close');
            $('.mobile_nav').toggleClass('open-menu');
            $('body').toggleClass('overflow-hidden');
        });

        function showSkills() {
            $('.career_item_skills_container').each(function (index, element) {
                var career_item_skills_container = $(element);
                var containerWidth = $(career_item_skills_container).width();
                var itemsSum = $('.career_item_skills_container').find('.skill_items_dots').innerWidth();
                $(this).find('.countable_skill_item').each(function (index, element) {
                    var countable_skill_item = $(element);
                    itemsSum = itemsSum + $(countable_skill_item).innerWidth() + 10;
                    if( containerWidth <= itemsSum ) {
                        $(this).addClass('hide_skill');
                    }else{
                        $(this).removeClass('hide_skill');
                    }
                })
            });
        }

        $('.mb-0').click(function () {
            // $('.career_page_item').removeClass('active-career');
            $(this).parents('.career_page_item').toggleClass('active-career');
            var elementHeight = 0;
            if ( $(".hide-open-collapse")[0] && !$(this).parents('.career_page_item').first() ) {
                elementHeight = $('.hide-open-collapse').parents('.career_page_item').find('.collapseable-element').height();
            }

            $(document).scrollTop( $(this).parents('.career_page_item').offset().top - elementHeight);


        });

        showSkills();

        function changeMobileServicesElementPossition() {
            if( $( window ).width() < 768 ) {
                $( ".services-mobile" ).prependTo( $( ".service_page_container" ) );
            }else {
                $( ".services-mobile" ).appendTo( $( ".service_page_container" ) );
            }
        }

        changeMobileServicesElementPossition();

        $( window ).resize(function() {
            showSkills();
            changeMobileServicesElementPossition();
        });

        $( "body" ).on( "click", ".open-page-and-scroll", function(e) {
            var bodyClass = $(this).attr('data-serviceparent');
            var scrollOffsetElement = $(this).attr('data-service');
            setCookie('clickedlink', scrollOffsetElement);

            if( !$("body").hasClass(bodyClass) ) {
                setCookie('scrollHome', 1);
                if(bodyClass === 'page-template-careers') {
                    location.href = 'https://www.sdc.am/career/';
                }else {
                    location.href = 'https://www.sdc.am/services/';
                }

            }

            var clickedlink = getCookie('clickedlink');
            e.preventDefault();
            var scrollOffsetElement1 = '.';
            scrollOffsetElement1 = scrollOffsetElement1 + clickedlink;
            var scrollOffset = $(scrollOffsetElement1).offset();
            var pluseHeaderHeight = scrollOffset.top;
            var body = $("html, body");
            body.stop().animate({scrollTop: pluseHeaderHeight}, 500, 'swing', function() {
            });
            deleteCookie('clickedlink');
        });


        function getCookie(name) {
            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return v ? v[2] : null;
        }
        function setCookie(name, value, days) {
            var d = new Date;
            d.setTime(d.getTime() + 24*60*60*1000*days);
            document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
        }
        function deleteCookie(name) { setCookie(name, '', -1); }

        var scrollHome = getCookie('scrollHome');

        if(scrollHome) {
            var clickedlink = getCookie('clickedlink');
            var scrollOffsetElement1 = '.';
            scrollOffsetElement1 = scrollOffsetElement1 + clickedlink;
            var scrollOffset = $(scrollOffsetElement1).offset();
            var pluseHeaderHeight = scrollOffset.top;
            var body = $("html, body");
            body.stop().animate({scrollTop: pluseHeaderHeight}, 500, 'swing', function() {
            });
            if( $('body').hasClass('page-template-careers')) {
                $(scrollOffsetElement1).find('.mb-0 button').click();
            }
            deleteCookie('scrollHome');
        }
    });
}) (jQuery);