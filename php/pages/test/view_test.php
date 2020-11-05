<?php
// Require composer autoload
require_once $config->home.'plugins/mpdf/vendor/autoload.php';
// Create an instance of the class:
//$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['tempDir' => '/var/www/cvtool/tmp/']);

?>
<!--mpdf
    <div class="col-md-12 border" id="pdf">
        <div class="row col-md-12">
            <div class="col-md-6 text-left"><small>Curriculum Vitae</small></div>
            <div class="col-md-6 text-right"><small><?php echo $_SESSION['formdata']['date']?></small></div>
        </div>
        <div class="col-md-12 text-center">
            <p>
                <h1><?php echo $_SESSION['formdata']['fullName']?></h1> <br /> 
                <span class="fas fa-birthday-cake"></span> <?php echo $_SESSION['formdata']['dob']?> <br />
                <span class="fas fa-address-card"></span> <?php echo $_SESSION['formdata']['address'].', '.$_SESSION['formdata']['city'].' '.$_SESSION['formdata']['zip']?> <br />
                <span class="fas fa-phone-alt"></span><?php echo $_SESSION['formdata']['phone']?><br />
                <span class="fas fa-at"></span><?php echo $_SESSION['formdata']['email']?>
            </p>
        </div>
        
        <div class="row col-md-12">
            <table class="table table-borderless">
                <thead>
                    <th scope="col" width="20%">Areas of expertise</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['formdata']['expertise'] as $expert):?>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col" class="text-left"><li><?php echo $expert?></li></td> 
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <div class="row col-md-12">
            <table class="table table-borderless">
                <thead>
                    <th scope="col" width="20%">Personal skills</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    {{#each skills}}
                    <tr>
                        <td scope="col"></td>
                        <td scope="col" class="text-left"><li>{{this}}</li></td> 
                    </tr>
                    {{/each}}
                </tbody>
            </table>
        </div>
        <div class="row col-md-12">
            <tabpreviewle class="table table-borderless">
                <thead>
                    <th scope="col" width="20%">Personal Summary</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col" class="text-left">{{pSummary}}</td> 
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row col-md-12">
            <table class="table table-borderless">
                <thead>
                    <th scope="col" width="20%">Work Experience</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col" class="text-left">{{breaklines wExperience}}</td> 
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row col-md-12">
            <table class="table table-borderless">
                <thead>
                    <th scope="col" width="20%">References</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col" class="text-left">{{references}}</td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
mpdf-->
<?php
// Write some HTML code:
$html = ob_get_contents();

$mpdf->WriteHTML($html,2);

// Output a PDF file directly to the browser
$mpdf->Output("test.pdf", "D");

#print_r($_SESSION['formdata']);

?>