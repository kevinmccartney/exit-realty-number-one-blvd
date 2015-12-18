partnerImg = jQuery( '.partner-img-wrapper img' ),
partnerPod = jQuery( '.partner-pod' );

function partnerWellSizer() {
    var maxImgHeight = null,
        maxPodHeight = null;

    jQuery( partnerImg ).each(function() {
        partnerImgHeight = jQuery( this ).outerHeight( true );
        maxImgHeight = ( partnerImgHeight > maxImgHeight ) ? partnerImgHeight : maxImgHeight;
    });

    jQuery( partnerPod ).each(function() {
        partnerPodHeight = jQuery( this ).outerHeight( true );
        maxPodHeight = ( partnerPodHeight > maxPodHeight ) ? partnerPodHeight : maxPodHeight;
    });

    if ( maxPodHeight <= maxImgHeight ) {
        jQuery( partnerPod ).css( 'height', maxImgHeight * 1.25 );
    } else if ( maxPodHeight >= maxImgHeight ) {
        jQuery( partnerPod ).css( 'height', maxPodHeight );
    } else {
        // nothing!
    }
}

function agentPolyfill() {
    var agentImgHeight = jQuery( '.post-type-archive .agent-roster-photo img' )
                         .outerHeight( true ),
        agentBoxHeight = jQuery( '.post-type-archive .agent-data' ).outerHeight( true) ;

    if ( agentImgHeight >= agentBoxHeight ) {
        jQuery( '.post-type-archive .agent-data').css('height', agentImgHeight * 1.25 );
    } else {
        // nothing!
    }
}

jQuery(document).ready(function() {
    agentPolyfill();
    partnerWellSizer();
});

jQuery(window).resize(function() {
    jQuery( '.partner-pod' ).css( 'height', '' );
    partnerWellSizer();
});
