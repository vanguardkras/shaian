/*
*   Project: Hero - Multipurpose HTML template
*   File: Main JavaScript for the "Hero" HTML template
*   Created on: May 6, 2020
*   Last modified: May 24, 2020
*/

(function($) {
    'use strict';

    /* Global variables */
    var body = $('body'), menuBtn = $('.know-more-section-btn'), menuIcon = $('#video-btn').find('i'), mainContainer = $('#main-container'), menuFlag = false, _window = $('.window'), navLinks = $('a','#main-nav'), splashScreen = $('#splash-screen'), head = $('head');

    /* Start: Hamburger button click functionality */
    menuBtn.on('click', function(){
        var knowMoreSection = $('#know-more-section');

        if( menuFlag ) {
            menuFlag = false;
            menuIcon.addClass('lni-menu');
            menuIcon.removeClass('lni-close');
            knowMoreSection.removeClass('active');
        }else {
            menuFlag = true;
            menuIcon.removeClass('lni-menu');
            menuIcon.addClass('lni-close');
            knowMoreSection.addClass('active');
        }
    });
    /* End: Hamburger button click functionality */

    /* Start: Window expand/minimize button click functionality */
    $('.window-expand-btn').on('click', function () {
        var _this = $(this), __window = _this.closest('.window');
        __window.toggleClass('window-expanded').removeClass('draggable');
        _this.toggleClass('window-minimize-btn');

        if( __window.hasClass('window-expanded') ) {
           mainContainer.addClass('expanded');
        }else{
            mainContainer.removeClass('expanded');
        }
    });
    /* End: Window expand/minimize button click functionality */

    /* Start: Window close button click functionality */
    function deactivateNavLinks() {
        navLinks.removeClass('active');
    }

    function closeWindow(__window) {
        mainContainer.removeClass('expanded');
        _window.removeClass('window-expanded');
        deactivateNavLinks();
        
        if(__window) {
            __window.find('.window-expand-btn').removeClass('window-minimize-btn');
        }
    }

    $('.window-close-btn').on('click', function () {
        var _this = $(this), __window = _this.closest('.window');
        closeWindow(__window);
    });

    $('a[href="#"]').click(function(){
        deactivateNavLinks();
    });

    navLinks.click(function(){
        var _this = $(this);
        navLinks.removeClass('active');
        _this.addClass('active');
    });
    /* End: Window close button click functionality */

    /* Start: Portfolio items shuffle functionality */
    setTimeout(function(){
        var portfolioBody = $('#portfolio-body'), 
        portfolioTabs = $('.portfolio-tab', '#portfolio-tabs'), 
        filterValue;
        
        portfolioBody.isotope({
            itemSelector: '.portfolio-item',
        });

        portfolioTabs.on('click', function(){
            portfolioTabs.removeClass('active');
            $(this).addClass('active');

            filterValue = $(this).data('filter');
            portfolioBody.isotope({ filter: filterValue });
        });
    }, 100);
    /* End: Portfolio items shuffle functionality */

    /* Start: Window drag functionality */
    function handle_mousedown(_this, e) {
        var top, left;
        window.my_dragging = {};
        my_dragging.pageX0 = e.pageX;
        my_dragging.pageY0 = e.pageY;
        my_dragging.elem = _this.closest('.window');

        if ($(my_dragging.elem).hasClass('window-expanded')) {
            return false;
        }

        $(my_dragging.elem).addClass('dragged');
        body.addClass('window-is-dragged');

        my_dragging.offset0 = $(my_dragging.elem).offset();

        function handle_dragging(e) {
            left = my_dragging.offset0.left + (e.pageX - my_dragging.pageX0);
            top = my_dragging.offset0.top + (e.pageY - my_dragging.pageY0);
            var mainContainerWidth = mainContainer.outerWidth(),
            rightOffset = $(window).outerWidth() - (mainContainer.offset().left + mainContainerWidth),
            draggedWindowWidth = $(my_dragging.elem).outerWidth(),
            windowHeaderHeight = $(my_dragging.elem).find('.window-header').outerHeight(),
            mainHeaderHeight = $('#main-header').outerHeight(),
            bottomStopPoint = mainContainer.outerHeight() - windowHeaderHeight + mainHeaderHeight,
            mainContainerTop = mainContainer.offset().top,
            mainContainerLeft = mainContainer.offset().left;
            
            if (top < mainContainerTop) {
                top = mainContainerTop;
            }

            if (top > bottomStopPoint) {
                top = bottomStopPoint;
            }

            if (left < mainContainerLeft) {
                left = mainContainerLeft;
            }

            if ((draggedWindowWidth + left) > mainContainerWidth) {
                left = mainContainerWidth + rightOffset - draggedWindowWidth;
            }
            $(my_dragging.elem).offset({
                top: top,
                left: left
            });
        }

        function handle_mouseup(e) {
            body
                .off('mousemove', handle_dragging)
                .off('mouseup', handle_mouseup);
            $(my_dragging.elem).removeClass('dragged');
            body.removeClass('window-is-dragged');
        }

        body
            .on('mouseup', handle_mouseup)
            .on('mousemove', handle_dragging);
    }
    $('.window-header').on('mousedown', function(e){
        handle_mousedown($(this), e);
    });
    /* End: Window drag functionality */

    /* Start: Dark mode */
    function addDarkModeCSSfile() {
        if(darkModeCSSfilePath && ($('link[href="'+darkModeCSSfilePath+'"]', 'head').length == 0)) {
            var path = $();
            head.append('<link rel="stylesheet" href="'+darkModeCSSfilePath+'">');
        }
    }

    function removeDarkModeCSSfile() {
        head.find('link[href="'+darkModeCSSfilePath+'"]').remove();
    }

    if(darkMode === 'on') {
        addDarkModeCSSfile();
    }
    /* End: Dark mode */

    /* Start: Auto dark mode */
    function getCurrentDaySeconds(_date) {
        return _date.getSeconds() + (60 * _date.getMinutes()) + (60 * 60 * _date.getHours());
    }

    if(darkMode === 'off') {
        if(autoDarkMode === 'on') {
            if(autoDarkModeTime.length == 3) {
                var autoDarkModeHr = parseInt(autoDarkModeTime[0]), 
                autoDarkModeMin = parseInt(autoDarkModeTime[1]), 
                autoDarkModeSec = parseInt(autoDarkModeTime[2]),
                targetSeconds = 0,
                currSeconds;
    
                if( (autoDarkModeHr >=0 && autoDarkModeHr < 24) && (autoDarkModeMin >= 0 && autoDarkModeMin < 60) && (autoDarkModeSec >= 0 && autoDarkModeSec < 60) ) {
                    targetSeconds += autoDarkModeHr * 60 * 60;
                    targetSeconds += autoDarkModeMin * 60;
                    targetSeconds += autoDarkModeSec;
    
                    currSeconds = getCurrentDaySeconds(new Date());
    
                    if( currSeconds >= targetSeconds ){
                        addDarkModeCSSfile();
                    }
    
                    setInterval(function(){
                        currSeconds = getCurrentDaySeconds(new Date());
            
                        if( currSeconds >= targetSeconds ){
                            addDarkModeCSSfile();
                        }else{
                            removeDarkModeCSSfile();
                        }
                    },1000);
                }
            }
        }
    }
    /* End: Auto dark mode */

    /* Start: Splash screen */
    body.imagesLoaded({background: true}, function() {
        setTimeout(function(){
            splashScreen.fadeOut(200);
        }, 500);
    });
    /* End: Splash screen */
})(jQuery);
