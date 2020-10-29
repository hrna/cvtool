$(document).ready(function() {
    if ($("#create").length > 0)
    {
        var count = 0;

        $(document).on("click", ".add", function() {
            var $parentDiv = $("<div>",{"class": "form-group input-group expertise-field", "id": "expertise-"+count});
            var $input = $("<input>",{"type": "text", "name": "expertise[]", "class": "form-control", "placeholder": "Something else"});
            var $delbut = $("<span>", {"class":"create-delimg btn btn-sm btn-outline-danger fas fa-trash-alt"});
            $parentDiv.append($input);
            $parentDiv.append($delbut);
            $(".input-parent").append($parentDiv);
            count++;
        });

        $(document).on("click", ".create-delimg", function() {
            var $del = $(this).closest("div").attr("id");
            $("#"+$del).remove();
            console.log("removed #"+$del);
        });
    }
});


