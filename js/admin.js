jQuery(function($){

    // ----------------------------------------
    // ! modify options on user page
    // ----------------------------------------

    jQuery('#createuser').find('[for="url"]').closest('.form-field').remove();
    jQuery('#your-profile').find('.form-table').first().remove();
    jQuery('[for="url"]').closest('tr').remove();

    // ----------------------------------------
    // ! banner options
    // ----------------------------------------
    var banner_uploader;
    var banner_reciever;
    var banner_preview;

    jQuery('#banner-option').on('click.openMediaManager','.open-media',function(e){

        // Prevent the default action from occuring.
        e.preventDefault();

        // Get our Parent element
        banner_reciever = jQuery(this).closest('.control').siblings('.info').find('.url');

        // preview
        banner_preview = jQuery(this).closest('.control').find('.preview');

        // If the frame already exists, re-open it.
        if ( banner_uploader ) {
            banner_uploader.open();
            return;
        }
        banner_uploader = wp.media.frames.banner_uploader = wp.media({

            //createe our media frame
            className: 'media-frame banner-media-frame',
            frame: 'select', //Allow Select Only
            multiple: false //Disallow Mulitple selections
        });

        // ----------------------------------------
        // ! when select
        // ----------------------------------------

        banner_uploader.on('select', function(){
            // Grab our attachment selection and construct a JSON representation of the model.
            var media_attachment = banner_uploader.state().get('selection').map( function( attachment ) {
                attachment = attachment.toJSON();
                return attachment;
            });
            // Send the attachment URL to our custom input field via jQuery.

            var imgurl = media_attachment[0].url;

            banner_reciever.val(imgurl);

            var $preview = jQuery('<img>').attr('src',imgurl).addClass('img-responsive');

            banner_preview.html($preview);

        });

        // Now that everything has been set, let's open up the frame.
        banner_uploader.open();

    })

	// ----------------------------------------
	// ! add new banner item
	// ----------------------------------------
	jQuery('#banner-option #addnew').on('click.addBannerItem','.add',function(e) {
        e.preventDefault();
        var number = jQuery('.tab-pane').not('#addnew').size()+1;

        $newItem = jQuery(this).closest('#addnew').clone();
        $newItemNav = jQuery('<li>').append('<a href="#'+number+'" data-toggle="tab">'+number+'</a>');
        addNewInit();

		$newItem.removeClass('active').attr('id',number);
		$newItem.find('.add').addClass('save').removeClass('add').parent().addClass('col-sm-3').removeClass('col-sm-6').after('<div class="col-sm-3"><button type="button" class="btn btn-warning btn-block delete">删除本新闻</button></div>');
        console.log($newItem);
        console.log($newItemNav);

        // insert
        jQuery('#banner-option .nav-tabs li').last().before($newItemNav);
        jQuery('#banner-option #addnew').before($newItem);
	})

	function addNewInit() {
		jQuery('#banner-option #addnew').find('input').val('').closest('#addnew').find('.preview').html('');
	}

	// ----------------------------------------
	// ! delete banner item
	// ----------------------------------------
	jQuery('#banner-option .tab-content').on('click.deleteBannerItem','.delete',function(e) {
        e.preventDefault();


    }

    // ----------------------------------------
    // ! rebuild number
    // ----------------------------------------
    function reNumber() {
	    jQuery('#banner-option .nav-tabs li:not(:last)').each(function(i,e) {
	    	var number = i+1;
		    jQuery(e).find('a').attr('href','#'+number).text(number);
	    });
	    jQuery('#banner-option .tab-content .tab-pane:not(:last)').each(function(i,e) {
	    	var number = i+1;
		    jQuery(e).attr('id',number);
	    });
    }
})


