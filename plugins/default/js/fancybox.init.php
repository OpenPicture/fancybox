  $(document).ready(function(){	    
		$(".ossn-wall-item .post-contents img").fancybox({
			'titleShow'     : false,
            top: '75px',  
            afterClose: function(){
  			 	 $(".ossn-wall-item .post-contents img").show();
			},        
		});
	});		
