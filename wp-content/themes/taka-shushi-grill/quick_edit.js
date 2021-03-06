/**
 * Created by 09520 on 7/22/2016.
 */
(function($) {

    // we create a copy of the WP inline edit post function
    var $wp_inline_edit = inlineEditPost.edit;
    // and then we overwrite the function with our own code
    inlineEditPost.edit = function( id ) {

        // "call" the original WP edit function
        // we don't want to leave WordPress hanging
        $wp_inline_edit.apply( this, arguments );

        // now we take care of our business

        // get the post ID
        var $post_id = 0;
        if ( typeof( id ) == 'object' )
            $post_id = parseInt( this.getId( id ) );

        if ( $post_id > 0 ) {

            // define the edit row
            var $edit_row = $( '#edit-' + $post_id );

            // get the release date
            var item_type = $( '#item_type-' + $post_id ).text();

            // populate the release date
            if (item_type=== 'NEU') {
                $edit_row.find( 'input[name="item_type"]' ).prop('checked', true);
            }

        }

    };
    $( '#bulk_edit' ).live( 'click', function() {

        // define the bulk edit row
        var $bulk_row = $( '#bulk-edit' );

        // get the selected post ids that are being edited
        var $post_ids = new Array();
        $bulk_row.find( '#bulk-titles' ).children().each( function() {
            $post_ids.push( $( this ).attr( 'id' ).replace( /^(ttle)/i, '' ) );
        });

        // get the item new
        var $item_type = $bulk_row.find( 'input[name="item_type"]' ).is(':checked') ? 'NEU' : '';

        // save the data
        $.ajax({
            url: ajaxurl, // this is a variable that WordPress has already defined for us
            type: 'POST',
            async: false,
            cache: false,
            data: {
                action: 'save_bulk_edit', // this is the name of our WP AJAX function that we'll set up next
                post_ids: $post_ids, // and these are the 2 parameters we're passing to our function
                item_type: $item_type
            }
        });

    });
})(jQuery);
