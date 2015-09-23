  $(document).ready(function(){	    
		$(".activity-item-container .description img").fancybox({
			'titleShow'     : false,
            top: '75px',  
            afterClose: function(){
  			 	 $(".activity-item-container .description img").show();
			},        
		});
	});		
