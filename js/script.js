jQuery(document).ready(function(){
	/* show/hide info */
	jQuery("#more").click(function(){
		jQuery("#info").toggle('slow'); 
	});
	/* validate plus_id field required, number, length = 21 */
	jQuery("#googleplusfeed-form").validate({
  		rules: {
    			plus_id: {
      				required: true,
				number: true,
      				minlength: 21,
				maxlength:21,
    			}
  		},
		submitHandler: function() {
			var url = "http://www.jmolivas.com/googleplusfeed/widget.php?plus_id="+jQuery("#plus_id").val();
			jQuery("#googleplusfeed-widget-frame").attr("src",url);
			updateSource();
			return false;
		}
	});
	/* extract frame source & update textarea */
	function updateSource(){
		var source = jQuery("#googleplusfeed-widget-wrapper").html();
		jQuery("#googleplusfeed-widget-frame-source").val(jQuery.trim(source));
	}
	/* execute & update frame source on load */
	updateSource();
});
