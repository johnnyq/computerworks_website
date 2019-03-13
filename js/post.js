
// config
var idRespond = "#search_results";
var targetFile = "test/s2.php";


	  function postAjax(searchQuery) {
		    if (request) {
		        request.abort();
		    }


			var data = {};
            data["q"] = searchQuery;

				    // fire off the request to /form.php
				    var request = $.ajax({
				        url: targetFile,
				        type: "post",
				        data: data
				    });

				    // callback handler that will be called on success
				    request.done(function (response, textStatus, jqXHR){
				        // log a message to the console
				        $('#search_results').html(response);
				        //alert(response);


				    });

				    // callback handler that will be called on failure
				    request.fail(function (jqXHR, textStatus, errorThrown){
				        // log the error to the console
				        $('#search_results').html("error");
				        console.error(
				            "The following error occured: "+
				            textStatus, errorThrown
				        );
				    });





	 }



