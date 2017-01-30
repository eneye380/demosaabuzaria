

<?php
include '../../script/php/stateslga.php';
/* Class name: Form
 * Description: A class that creates a simple HTML form
 * containing only text input fields. The
 * class has 3 methods.
 */

class Form {

    private $fields = array(); # contains field names and labels
    private $actionValue = "#"; # name of script to process form
    private $onClick = "return true"; # function invoked on button click
    private $Nfields = 0; # number of fields added to the form
    private $submit = "Submit Form"; # value on submit button
    private $hint = "";

    /* Constructor: User passes in the name of the script where
     * form data is to be sent ($actionValue) and the value to
     * display on the submit button.
     */

    function __construct() {
        
    }

    /* Display form function. Displays the form.
     */

    function displayForm() {
        echo "\n<form action='{$this->actionValue}' method=’POST’>\n";
        for ($j = 1; $j <= sizeof($this->fields); $j++) {
            echo "<p style='clear: left; margin: 0; padding: 0; padding-top: 5px'>\n";
            echo "<label style='float: left; width: 20%'> {$this->fields[$j - 1]['label']}: </label>\n";
            echo "<input style='width: 200px' type='text' name='{$this->fields[$j - 1]['name']}'></p>\n";
        }
        echo "<input type='submit' value='{$this->submit}' style='margin-left: 25%; margin-top: 10px'>\n";
        echo "</form>";
    }

    /* Display form function. Displays the form.
     */

    function displayNewForm() {
        echo "<div class='row'>";
        echo "<div class='col-lg-8 col-lg-offset-2'>";
        echo "\n<form class='form-horizontal' action='{$this->actionValue}' style='padding: 25px' role='form' method='post' onsubmit='{$this->onClick}'>\n";
        for ($j = 1; $j <= sizeof($this->fields); $j++) {
            echo "<div class='row control-group'>";
            echo "<div class='form-group col-lg-12 floating-label-form-group controls'>";
            echo "<label>{$this->fields[$j - 1]['label']}</label>\n";
            echo" <input type='{$this->fields[$j - 1]['type']}' class='form-control' name='{$this->fields[$j - 1]['name']}' value='{$this->fields[$j - 1]['value']}' id='{$this->fields[$j - 1]['name']}' placeholder='{$this->fields[$j - 1]['label']}' required data-validation-required-message='Please enter your {$this->fields[$j - 1]['label']}.'>";
            echo "<p class='help-block text-danger'></p>";
            echo "<p class='help-block text-danger'></p>";
            echo "</div>";
            echo "</div>";
        }
        "<div id='success'></div>";
        echo "<div class='row'>";
        echo "<div class='form-group col-lg-12'>";
        echo '' . $this->hint;
        echo "<button type='submit' class='btn btn-success btn-lg' name='{$this->submit}' id='{$this->submit}'  style='background-color: #18bc9c;border-color: #18bc9c' >{$this->submit}</button>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }

    function addHint($hint) {
        $this->hint = "<p class='help-block text-danger' id='$hint' style='color: red'></p>";
    }

    /* Function that adds a field to the form. The user needs to
     * send the name of the field and a label to be displayed.
     */

    function addField($name, $label, $type,$value) {
        $this->fields[$this->Nfields]['name'] = $name;
        $this->fields[$this->Nfields]['label'] = $label;
        $this->fields[$this->Nfields]['type'] = $type;
        $this->fields[$this->Nfields]['value'] = $value;
        $this->Nfields = $this->Nfields + 1;
    }

    function setOnClick($onClick) {
        $this->onClick = $onClick;
    }

    function setActionValue($actionValue) {
        $this->actionValue = $actionValue;
    }

    function setSubmit($submit) {
        $this->submit = $submit;
    }

    function addAddressInformation() {
        echo "<fieldset id='owner_information' style='margin-top: 25px'>";
        echo "<legend>Address Information</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Address Type</label>";
        echo "<select class='form-control' name='address' id='addresstype' required>";
        echo "<option class='p_level' value=''>select type</option>";
        echo "<option class='p_level' value='home'>home</option>";
        echo "<option class='p_level' value='business'>business</option>";
        echo "</select>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Building No./Name</label>";
        echo "<input type='text' class='form-control' placeholder='Building Number' name='buildno' id='buildingnumber' 
                                               value='' required data-validation-required-message='Please enter building number'>";
        echo "</div>";
        echo "<div class='col-lg-4 floating-label-form-group controls'>";
        echo "<label>Street Name</label>";
        echo "<input type='text' class='form-control' placeholder='Street Name' name='strname' id='streetname' 
                                               value='' required data-validation-required-message='Please enter street name'>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Nearest Bus Stop</label>";
        echo "<input type='text' class='form-control' placeholder='Nearest B/S' name='bsstp' id='busstop' 
                                               value=''>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Nearest LandMark</label>";
        echo "<input type='text' class='form-control' placeholder='Nearest LandMark' name='landmrk' id='landmark' 
                                               value=''>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row' style='margin-top: 25px'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>Postcode</label>";
        echo "<input type='text' class='form-control' placeholder='Postcode' name='pstcde' id='postcode'
                                               value='' required data-validation-required-message='Please enter postcode'>";
        echo "</div>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>Latitude</label>";
        echo "<input type='text' class='form-control' placeholder='Latitude' name='lat' id='latitude'
                                               value=''>";
        echo "</div>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>Longitude</label>";
        echo "<input type='text' class='form-control' placeholder='Longitude' name='lon' id=longitude' 
                                               value=''>";
        echo "</div>";
        echo "</div>";
        /**echo "<div class='row' style='margin-top: 25px'>";
        echo "<div class='col-xs-6 floating-label-form-group controls'>";
        echo "<label>State</label>";
        echo "<select class='form-control' name='state' id='state'>";
        echo "<option class='p_level' value='state'>Select State</option>";

        foreach ($stateslga as $key => $value) {
            echo "<option class='p_level' value='$key' onmouseup='myfunc()'>$key</option>";
        }

        echo "</select>";
        echo "</div>";
        echo "<div class='col-xs-6 floating-label-form-group controls'>";
        echo "<label>L.G.A.</label>";
        echo "<select class='form-control' name='lga' id='lga'>";
        echo "<option class='p_level' value='lga'>Select L.G.A.</option>";

        foreach ($stateslga as $key => $value) {
            echo "<option class='p_level' value='$key'>$key</option>";
        }

        echo "</select>";

        echo "</div>";

        echo "</div>";*/
        echo "</fieldset>";
    }

    function addPersonalInformation() {
        echo "<fieldset id='personal'>";
        echo "<legend>Personal Information</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Title</label>";
        echo "<select class='form-control' name='title' id='title' required>";
        echo "<option class='p_level' value=''>select title</option>";
        echo "<option class='p_level' value='mr'>mr</option>";
        echo "<option class='p_level' value='mrs'>mrs</option>";
        echo "<option class='p_level' value='miss'>miss</option>";
        echo "<option class='p_level' value='dr'>dr</option>";
        echo "<option class='p_level' value='prof'>prof</option>";
        echo "<option class='p_level' value='mallam'>mallam</option>";
        echo "</select>";
        echo "</div>";
        echo "<div class='col-lg-4 floating-label-form-group controls'>";
        echo "<label>First Name</label>";
        echo "<input type='text' class='form-control' placeholder='first name' name='firstname' id='firstname'
                                               value='' required data-validation-required-message='Please enter first name'>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Middle Name</label>";
        echo "<input type='text' class='form-control' placeholder='middle name' name='middlename' id='middlename'
                                               value=''>";
        echo "</div>";
        echo "<div class=' col-lg-4 floating-label-form-group controls'>";
        echo "<label>Last Name</label>";
        echo "<input type='text' class='form-control' placeholder='last name' name='lastname' id='lastname'
                                               value='' required data-validation-required-message='Please enter last name'>";
        echo "</div>";
        echo "</div>";
        echo "<h4 style='margin-top: 25px'>Date of Birth</h4>";
        echo "<div class='row' style=''>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Day</label>";
        echo "<input type='number' class='form-control' placeholder='dd' min='1' max='31' name='daydob' id='day'
                                               value='' required data-validation-required-message='please enter day'>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Month</label>";
        echo "<input type='number' class='form-control' placeholder='mm' min='1' max='12' name='monthdob' id='month'
                                               value='' required data-validation-required-message='please enter month'>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Year</label>";
        echo "<input type='number' min='1900' max='2017 ' class='form-control' placeholder='yyyy' name='yeardob' id='year' 
                                               value='' required data-validation-required-message='please enter year'>";
        echo "</div>";
        echo "</div>";
        echo "</fieldset>";
    }

    function addAdditionalInformation() {
        echo "<fieldset id='personal' style='margin-top: 25px'>";
        echo "<legend>Additional Information</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-4 floating-label-form-group controls'>";
        echo "<label>Fax</label>";
        echo "<input type='text' class='form-control' placeholder='fax' name='fax' id='fax'
                                               value=''>";
        echo "</div>";
        echo "<div class='col-lg-1 floating-label-form-group controls'>";

        echo "</div>";
        echo "<div class=' col-lg-4 floating-label-form-group controls'>";
        echo "<label>Website</label>";
        echo "<input type='text' class='form-control' placeholder='Website' name='website' id='website' 
                                               value=''>";
        echo "</div>";
        echo "</div>";

        echo "</fieldset>";
    }

    function addContactInformation() {
        echo "<fieldset id='personal' style='margin-top: 25px'>";
        echo "<legend>Contact Information</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>Phone Number</label>";
        echo "<input type='text' class='form-control' placeholder='Phone Number' name='phonenumber' id='phonenumber'
                                               value='' required data-validation-required-message='Please enter phone number.'>";
        echo "</div>";
        echo "<div class=' col-lg-3 floating-label-form-group controls'>";
        echo "<label>Email</label>";
        echo "<input type='email' class='form-control' placeholder='Email' name='email' id='email' 
                                               value='' required data-validation-required-message='Please enter email.'>";
        echo "</div>";
        echo "<div class=' col-lg-3 floating-label-form-group controls'>";
        echo "<label>Fax</label>";
        echo "<input type='text' class='form-control' placeholder='Fax' name='fax' id='fax' 
                                               value=''>";
        echo "</div>";
        echo "<div class=' col-lg-3 floating-label-form-group controls'>";
        echo "<label>Website</label>";
        echo "<input type='text' class='form-control' placeholder='Website' name='website' id='website' 
                                               value=''>";
        echo "</div>";
        echo "</div>";

        echo "</fieldset>";
    }

    function addOrganizationInformation() {
        echo "<fieldset id='personal' style='margin-top: 25px'>";
        echo "<legend>Organization Information</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-8 floating-label-form-group controls'>";
        echo "<label>Organization Name</label>";
        echo "<input type='text' class='form-control' placeholder='Organization Name' name='organization' id='organization' 
                                               value='' required data-validation-required-message='Please enter organization name.'>";
        echo "</div>";
        echo "</div>";
        echo "<h4 style='margin-top: 25px'>Registered Date</h4>";
        echo "<div class='row'>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Day</label>";
        echo "<input type='number' class='form-control' placeholder='dd' min='1' max='31' name='dayreg' id='day'
                                               value=''>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Month</label>";
        echo "<input type='number' class='form-control' placeholder='mm' min='1' max='12' name='monthreg' id='month'
                                               value=''>";
        echo "</div>";
        echo "<div class='col-lg-2 floating-label-form-group controls'>";
        echo "<label>Year</label>";
        echo "<input type='number' min='1900' max='2017 ' class='form-control' placeholder='yyyy' name='yearreg' id='year' 
                                               value=''>";
        echo "</div>";
        echo "</div>";
        echo "</fieldset>";
    }

    function changePassword() {
        echo "<fieldset id='personal' style='margin-top: 25px'>";
        echo "<legend>Change Password</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>Old Password</label>";
        echo "<input type='password' class='form-control' placeholder='Old Password'  name='opassword' id='opassword'
                                               value='' required data-validation-required-message='please enter day'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>New Password</label>";
        echo "<input type='password' class='form-control' placeholder='New Password' name='password1' id='password1'
                                               value='' required data-validation-required-message='please enter day'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>New Password</label>";
        echo "<input type='password' class='form-control' placeholder='New Password' name='password2' id='password2'
                                               value='' required data-validation-required-message='please enter day'>";
        echo "</div>";
        echo "</div>";
        echo "</fieldset>";
    }
    
    function forgotPassord(){
        echo "<fieldset id='personal' style='margin-top: 25px'>";
        echo "<legend>Forgot Password</legend>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>New Password</label>";
        echo "<input type='password' class='form-control' placeholder='New Password' name='password1' id='npassword1'
                                               value='' required data-validation-required-message='please enter day'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 floating-label-form-group controls'>";
        echo "<label>New Password</label>";
        echo "<input type='password' class='form-control' placeholder='New Password' name='password2' id='npassword2'
                                               value='' required data-validation-required-message='please enter day'>";
        echo "</div>";
        echo "</div>";
        echo "</fieldset>";
    }

}
