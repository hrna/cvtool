

<div class="col-md-12" id="preview"></div>


<script id="preview-template" type="text/x-handlebars-template">
    <div class="col-md-12">
        <p>
            <span class="fas fa-user"></span> {{fullName}} <br /> 
            <span class="fas fa-birthday-cake"></span> {{dob}} <br />
            <span class="fas fa-address-card"></span> {{address}}, {{city}} {{zip}} <br />
            <span class="fas fa-phone-alt"></span> +358 40 123 4567 <br />
            <span class="fas fa-at"></span> {{email}}
        </p>
    </div>
    
    <div class="col-md-12">
        <h6>Areas of expertise</h6>
        {{#each expertise}}
        <li>{{this}}</li>
        {{/each}}
    </div>
    <div class="col-md-12">
        <h6>Personal skills</h6>
        {{#each skills}}
        <li>{{this}}</li>
        {{/each}}
    </div>
    <div class="col-md-12">
        <h6>Personal summary</h6>
        {{pSummary}}
    </div>
    <div class="col-md-12">
        <h6>Work experience</h6>
        {{wExperience}}
    </div>
    <div class="col-md-12">
        <h6>References</h6>
        {{references}}
    </div>
</script>

<script language="JavaScript" type="text/javascript">
        	var postData = <?php echo $data?>;
</script>