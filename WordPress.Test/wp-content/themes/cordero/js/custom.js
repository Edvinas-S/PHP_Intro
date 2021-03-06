/**
 * Cordero Custom JS
 *
 * @package Cordero
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */
jQuery(document).ready(function($){
    // Defining a function to adjust mobile menu and search icons position if we have a large Top Bar widget area
    function fullscreen(){

        if ( $('#wpadminbar').length ) {
            var adminbarheight = parseInt( $('#wpadminbar').outerHeight() );
            $('#masthead').css({'top' : adminbarheight + 'px'});
        }

        if ( $('#masthead.transparent').length ) {
            var mastheadheight = parseInt( $('#masthead').height() );
            $('article > .entry-content *:not(.wp-block-group,.wp-block-group__inner-container):first').css({'padding-top' : mastheadheight + 'px'});
        }

        var footerheight = parseInt( $('#colophon').height() );
        footerheight = footerheight - 1;
        $('#page.sticky-footer').css({'padding-bottom' : footerheight + 'px'});

        if ( ! $('#primary-menu').length ) {
            $('.toggle-nav').css({'display' : 'none'});
        }

    }
  
    fullscreen();

    // Run the function in case of window resize
    jQuery(window).resize(function() {
        fullscreen();         
    });

});

jQuery(function($){

    function navScroll(){
        var mastheadheight = parseInt( $('#masthead').height() );
        var s = $("#masthead");
        var pos = s.position();
        var windowpos = $(window).scrollTop();
        if (windowpos > pos.top) {
            $('#masthead').addClass('scrolled');
            if ( ! $('#masthead.transparent').length ) {
                $('#page').css({'padding-top' : mastheadheight + 'px'});
            }
        } else {
            $('#masthead').removeClass('scrolled');
            if ( ! $('#masthead.transparent').length ) {
                $('#page').css({'padding-top' : '0'});
            }
        }
    }

    function navScrollTs(){
        var s = $("#masthead");
        var pos = s.position();
        var windowpos = $(window).scrollTop();
        if (windowpos > pos.top) {
            $('#masthead').addClass('not-fixed-scrolled');
        } else {
            $('#masthead').removeClass('not-fixed-scrolled');
        }
    }

    if ( ! $('#masthead.not-fixed').length ) {
        $(window).scroll(function() {
            navScroll();
        });
        $(document).ready(function() {
            navScroll();
        });
    } else {
        if ( $('#masthead.transparent').length ) {
            $(window).scroll(function() {
                navScrollTs();
            });
            $(document).ready(function() {
                navScrollTs();
            });
        }
    }

    // WooCommerce quantity buttons
    jQuery('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').addClass('buttons_added').append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />');

    // Target quantity inputs on product pages
    jQuery('input.qty:not(.product-quantity input.qty)').each( function() {
        var min = parseFloat( jQuery( this ).attr('min') );

        if ( min && min > 0 && parseFloat( jQuery( this ).val() ) < min ) {
            jQuery( this ).val( min );
        }
    });

    jQuery( document ).on('click', '.plus, .minus', function() {

        // Get values
        var $qty        = jQuery( this ).closest('.quantity').find('.qty'),
            currentVal  = parseFloat( $qty.val() ),
            max         = parseFloat( $qty.attr('max') ),
            min         = parseFloat( $qty.attr('min') ),
            step        = $qty.attr('step');

        // Format values
        if ( ! currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
        if ( max === '' || max === 'NaN') max = '';
        if ( min === '' || min === 'NaN') min = 0;
        if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN') step = 1;

        // Change the value
        if ( jQuery( this ).is('.plus') ) {

            if ( max && ( max == currentVal || currentVal > max ) ) {
                $qty.val( max );
            } else {
                $qty.val( currentVal + parseFloat( step ) );
            }

        } else {

            if ( min && ( min == currentVal || currentVal < min ) ) {
                $qty.val( min );
            } else if ( currentVal > 0 ) {
                $qty.val( currentVal - parseFloat( step ) );
            }

        }

        // Trigger change event
        $qty.trigger('change');
    });

    if ( $('.mini-account p.username-wrap').length ) {
        $('.mini-account p.username-wrap').html($('.mini-account p.username-wrap').html().replace('(','<br>('));
    }

    $( '.top-search .cordero-icon-search' ).on( 'click', function(e) {
        $( '.top-search' ).toggleClass( 'search-open' );
    });

    $( '.top-search .search-close' ).on( 'click', function(e) {
        $( '.top-search' ).toggleClass( 'search-open' );
        $( '.top-search .cordero-icon-search' ).focus();
    });

    $( '.toggle-nav,.toggle-nav-open' ).click( function() {
        $( '#site-navigation' ).toggleClass( 'menu-open' );
        $( 'body' ).toggleClass( 'menu-open' );
    });

    $( '.menu-close' ).click( function() {
        $( '#site-navigation' ).toggleClass( 'menu-open' );
        $( 'body' ).toggleClass( 'menu-open' );
        $( '.toggle-nav' ).focus();
    });

    $( '.menu-close' ).on( 'keydown', function (e) {
        var isTabbed = ( e.key === 'Tab' || e.keyCode === 9 );
        if ( !isTabbed ) {
            return;
        }
        if ( e.shiftKey ) {
            return;
        } else {
            $( '.toggle-nav-open' ).focus();
            e.preventDefault();
        }
    });

    $( '.toggle-nav-open' ).on( 'keydown', function (e) {
        var isTabbed = ( e.key === 'Tab' || e.keyCode === 9 );
        if ( !isTabbed ) {
            return;
        }
        if ( e.shiftKey ) {
            $( '#site-navigation' ).toggleClass( 'menu-open' );
            $( 'body' ).toggleClass( 'menu-open' );
        } else {
            return
        }
    });

    $( '#site-navigation' ).swipe( {
        swipeLeft:function( event, direction ) {
            $( '#site-navigation' ).toggleClass( 'menu-open' );
            $( 'body' ).toggleClass( 'menu-open' );
        },
    });

    $( '.sub-trigger' ).click( function() {
        $( this ).toggleClass( 'is-open' );
        $( this ).siblings( '.sub-menu' ).toggle();
    });

    $( '.shop-filter-wrap .shop-filter-toggle' ).click( function() {
        $( '.shop-filter-wrap #shop-filters' ).toggleClass( 'active' );
        $( this ).toggleClass( 'active' );
    });

    $( '.top-account .mini-account input' ).focusin( function() {
        $( '.top-account .mini-account' ).addClass( 'locked' );
    }).add( '.top-account .mini-account' ).focusout( function() {
        if ( !$( '.top-account .mini-account' ).is( ':focus' ) ) {
            $( '.top-account .mini-account' ).removeClass( 'locked' );
        }
    });

    $( '#primary-menu li.menu-item-has-children' ).focusin( function() {
        $( this ).addClass( 'locked' );
    }).add( this ).focusout( function() {
        if ( !$( this ).is( ':focus' ) ) {
            $( this ).removeClass( 'locked' );
        }
    });

    $( '.top-account #customer_login .u-column2 h2' ).click( function() {
        $( '.top-account #customer_login .u-column2' ).toggleClass( 'open' );
    });

});

jQuery( document ).ready( function( $ ){
    $(document).on( 'added_to_wishlist removed_from_wishlist', function(){
        var counter = $('.wishlist_products_counter_number');

        $.ajax({
            url: yith_wcwl_l10n.ajax_url,
            data: {
                action: 'yith_wcwl_update_wishlist_count'
            },
            dataType: 'json',
            success: function( data ){
                counter.html( data.count );
            }
        })
    } )
});
