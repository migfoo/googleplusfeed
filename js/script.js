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
  		}
	});

	
});
