$(document).ready(function() {
    if ($("#create").length > 0)
    {
        var countExp = 0;
        var countSkill = 0;

        $(document).on("click", ".add-exp", function() {
            var $parentDiv = $("<div>",{"class": "form-group input-group expertise-field", "id": "expertise-"+countExp});
            var $input = $("<input>",{"type": "text", "name": "expertise[]", "class": "form-control", "placeholder": "Something else"});
            var $delbut = $("<span>", {"class":"create-delimg btn btn-sm btn-outline-danger fas fa-trash-alt"});
            $parentDiv.append($input);
            $parentDiv.append($delbut);
            $(".expertise-parent").append($parentDiv);
            countExp++;
        });

        $(document).on("click", ".add-skill", function() {
            var $parentDiv = $("<div>",{"class": "form-group input-group skills-field", "id": "skills-"+countSkill});
            var $input = $("<input>",{"type": "text", "name": "skills[]", "class": "form-control", "placeholder": "Something else"});
            var $delbut = $("<span>", {"class":"create-delimg btn btn-sm btn-outline-danger fas fa-trash-alt"});
            $parentDiv.append($input);
            $parentDiv.append($delbut);
            $(".skills-parent").append($parentDiv);
            countExp++;
        });
        $(document).on("click", ".create-delimg", function() {
            var $del = $(this).closest("div").attr("id");
            $("#"+$del).remove();
            //console.log("removed #"+$del);
        });

        // create a JSON from form contents
        $("#createForm").on("change", function(){
            $("#previewjson").addClass("border");
            var jsonprev = JSON.stringify($("#createForm").serializeArray());
            $("#previewjson").html(jsonprev);
        });
    }
});


