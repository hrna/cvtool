$(document).ready(function() {
    if ($("#create").length > 0)
    {
        $(".add").click(function() {
            var $parentDiv = $("<div>",{"class": "form-group input-group expertise-field"});
            var $input = $("<input>",{"type": "text", "name": "expertise[]", "class": "form-control", "placeholder": "Something else"});
            $parentDiv.append($input);
            $(".input-parent").append($parentDiv);
            $("#hide-1").remove();
        });
    }
});


