$(document).ready(function () {
	var pageNo = $('#pageNumber').val();
	getBlogPosts(pageNo);

	function getBlogPosts(pageNo) {
		pageNo = (pageNo && pageNo != 0) ? pageNo : 1;
		$.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "tpl/blog-list.tpl.php", 
        data: "pageNumber=" + pageNo,            
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#postResultBox").html(response); 
        }

    });
	}
});