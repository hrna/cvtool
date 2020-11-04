$(document).ready(function() {
    if ($("#preview").length > 0)
    {
		function getPreview()
		{
			//console.log(postData);
			// Handlebars insert
			if(postData)
			{
				// Retrieve the template data from the HTML (jQuery is used here).
				var template = $('#preview-template').html();

				// Compile the template data into a function
				var templateScript = Handlebars.compile(template);
				var html = templateScript(postData);
				console.log(html);

				// Insert the HTML code into the page
				$("#preview").html(html);
				//console.log(template);
			}
			else {
				console.log("ERROR..ERROR..");
				$("#preview").html("<h4>Nothing to show here</h4>");
			}

		}
		getPreview(); 
    }
});


