$(document).ready(function() {
    if ($("#preview").length > 0)
    {
		function getPreview()
		{
			// creating line breaks when using textarea
			Handlebars.registerHelper('breaklines', function(text) 
			{
				text = Handlebars.Utils.escapeExpression(text);
				text = text.replace(/(\r\n|\n|\r)/gm, '<br>');
				return new Handlebars.SafeString(text);
			});

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


