partnerImg = jQuery( '.partner-img-wrapper' ),
partnerPod = jQuery( '.partner-pod' );

function partnerWellSizer() {
    var maxImgHeight = null,
        maxPodHeight = null;

    console.log('Image heights \n');

    jQuery( partnerImg ).each(function() {
        partnerImgHeight = jQuery( this ).outerHeight( true );
        console.log(partnerImgHeight);
        maxImgHeight = ( partnerImgHeight > maxImgHeight ) ? partnerImgHeight : maxImgHeight;
    });

    console.log('Box heights \n');

    jQuery( partnerPod ).each(function() {
        partnerPodHeight = jQuery( this ).outerHeight( true );
        console.log(partnerPodHeight);
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
});

window.onload = partnerWellSizer();

jQuery(window).resize(function() {
    jQuery( '.partner-pod' ).css( 'height', '' );
    partnerWellSizer();
});