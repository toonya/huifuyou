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
        banner_reciever = jQuery(this).closest('.control').siblings('.info').find('.imgurl');

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
            console.log(banner_reciever);

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

        $newItem = jQuery(this).closest('#addnew').clone();
        $newItemNav = jQuery('<li>').append('<a href="#" data-toggle="tab"></a>');
        addNewInit();

		$newItem.removeClass('active');
		$newItem.find('.add').addClass('save').removeClass('add').parent().addClass('col-sm-3').removeClass('col-sm-6').after('<div class="col-sm-3"><button type="button" class="btn btn-warning btn-block delete">删除本新闻</button></div>');
        //console.log($newItem);
        //console.log($newItemNav);

        // insert
        jQuery('#banner-option .nav-tabs li').last().before($newItemNav);
        jQuery('#banner-option #addnew').before($newItem);

        reNumber();
	});

	// ----------------------------------------
	// ! init the addnew area
	// ----------------------------------------
	function addNewInit() {
		jQuery('#banner-option #addnew').find('input').val('').closest('#addnew').find('.preview').html('');
	}

	// ----------------------------------------
	// ! save modify
	// ----------------------------------------
	jQuery('#banner-option').on('click.saveBannerList','.save',function(e) {
		e.preventDefault();

		save_banner_option();
	})

	// ----------------------------------------
	// ! delete banner item
	// ----------------------------------------
	jQuery('#banner-option .tab-content').on('click.deleteBannerItem','.delete',function(e) {
        e.preventDefault();

		var _this = jQuery(this).closest('.tab-pane');
		var _num  = _this.attr('id')-1;
		jQuery('#banner-option .nav-tabs li').eq(_num).remove();
		_this.remove();

		reNumber();
		jQuery('[href="#addnew"]').click();
    });

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

	    save_banner_option();
    }

    // ----------------------------------------
    // ! draggable nav-tabs
    // ----------------------------------------
    $( ".nav-tabs" ).sortable({axis:"x",stop: function( event, ui ) {
	    banner_sort();
    }});

    // ----------------------------------------
    // ! resort the list
    // ----------------------------------------
    function banner_sort(){

		var $before   = jQuery('#banner-option .nav-tabs li a:not([href="#addnew"])');
		var args      = [];

		$before.each(function(i,e){   // collect item value that we want to sort on.
			args[i] = $(e).text()-1;
		});
		console.log(args);

		var $new = [];
		$.each(args,function(i,e) {
			$new[i] = $('.tab-pane').eq(e).clone().attr('id',e);
		});

		jQuery('.tab-content .tab-pane:not(:last)').remove();

		$.each($new,function(i,e) {
			$('.tab-content #addnew').before(e);
		})

		var $addNew = jQuery('#banner-option .nav-tabs li a[href="#addnew"]').closest('li').detach();
		jQuery('#banner-option .nav-tabs').append($addNew);

		reNumber();
	}

	// ----------------------------------------
	// ! save banner option
	// ----------------------------------------
	function save_banner_option() {
		var banner_data = banner_option;
		banner_data.bannerlist = [];

		//get every banner info.
		jQuery('.tab-pane:not(:last)').each(function(i,e) {
			var banner_item = {} ;

			banner_item.title = jQuery(e).find('input.title').val();
			banner_item.imgurl   = jQuery(e).find('input.imgurl').val();

			banner_data.bannerlist[i] = banner_item;
		});

		//post to server.
		jQuery.post(banner_data.url, banner_data, function(response) {console.log(response);}).done(function(){console.log('done')}).fail(function(){console.log('failed')});
	}
})


