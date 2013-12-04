jQuery(function($) {
    $('.current-menu-item').addClass('active');


    // ----------------------------------------
    // ! let it become a plugin later, so can add 150*150 etc. function.
    // ----------------------------------------


    $('.auto-add-bg').each(function(i,e) {
	    var bgSrc = jQuery(e).data('bg-src');

	    if(bgSrc) {
			jQuery(e).css({background:'url('+bgSrc+') center top'});
	    }
    });

    // ----------------------------------------
    // ! banner nav hover
    // ----------------------------------------

     $('.carousel-nav li').hover(
     	function(){
     		jQuery(this).addClass('hover');
     	},
     	function(){
     		jQuery(this).removeClass('hover');
     	}
     ).click(function(e){
	     if(jQuery(this).hasClass('active'))
	     	return;
	     else jQuery(this).addClass('active').siblings().removeClass('active');
     });

     // ----------------------------------------
     // ! banner nav animation effect
     // ----------------------------------------

     $('.carousel-nav li').each(function(i,e) {
     	var origin_content = jQuery(e).text();
     	var new_content = jQuery('<div>');
     	var slide_top = $('<div>').addClass('silde-bar-top').html(origin_content);
     	var slide_bottom = $('<div>').addClass('silde-bar-bottom').html(origin_content);
     	slide_top.append(slide_bottom);
     	// Process the content
     	new_content.addClass('slide-bar-wrap').html(slide_top);
	 	jQuery(e).html(new_content);
     });

     // ----------------------------------------
     // ! popover
     // ----------------------------------------
	 jQuery('[href*="tc="]').each(function(index,ele) {
		 var _this = jQuery(ele);
		 var title = _this.attr('href');
		 var remove = /tc=/;
		 title = title.replace(remove,'');
		 var content = _this.attr('title');

		 _this.attr({
			 'data-container':"body",
			 'data-toggle':"popover",
			 'data-placement':'top',
			 'data-content':content,
			 'data-original-title':title,
			 'title':""
		 })
		 .popover()
		 .on('click.preventDefault',function(e){e.preventDefault()})
		 .hover(function(){
			 jQuery(this).popover('show');
		 },function(){
			 jQuery(this).popover('hide');
		 });
	 })
})