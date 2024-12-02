<?php

function form_booking_custom(){
    ?>
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">Request an attendance – Survey &amp; Inspection
        </h2>
    </div>
    <form method="POST" class="form-custom-booking">
        <div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
            <b>Name (Required)</b>				
        </div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_4d402c0 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_4d402c0" class="elementor-field-label">First</label>
			<input size="1" type="text" name="first_name_customer" id="first_name_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
        </div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_4386143 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_4386143" class="elementor-field-label">Last</label>
			<input size="1" type="text" name="last_name_customer" id="last_name_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_d4ba7a0 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_d4ba7a0" class="elementor-field-label">Company Name</label>
			<input size="1" type="text" name="company_name" id="company_name" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_02e5592 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_02e5592" class="elementor-field-label">Title</label>
			<input size="1" type="text" name="title_form" id="title_form" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-email" class="elementor-field-label">Email</label>
			<input size="1" type="email" name="email_customer" id="email_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_9afdc18 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_9afdc18" class="elementor-field-label">Mobile Number</label>
			<input size="1" type="tel" name="mobile_number_customer" id="mobile_number_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
        </div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_3079ab7 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_3079ab7" class="elementor-field-label">Vessel name</label>
			<input size="1" type="text" name="vessel_name_customer" id="vessel_name_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_9f9122f elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_9f9122f" class="elementor-field-label">IMO Number</label>
			<input size="1" type="text" name="imo_number_customer" id="imo_number_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_7f2222a elementor-col-100">
			<b>Survey location (Required)</b>				
        </div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_7b89406 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_7b89406" class="elementor-field-label">Country</label>
			<input size="1" type="text" name="country_customer" id="country_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_a301aaf elementor-col-50">
			<label for="form-field-field_a301aaf" class="elementor-field-label">Port</label>
			<input size="1" type="text" name="port_customer" id="port_customer" class="elementor-field elementor-size-sm elementor-field-textual fill_inited">
		</div>
        <div class="elementor-field-type-date elementor-field-group elementor-column elementor-field-group-field_a0c6b22 elementor-col-50 elementor-field-required elementor-mark-required">
			<label for="form-field-field_a0c6b22" class="elementor-field-label">Date</label>
			<input type="date" name="date_customer" id="date_customer" class="elementor-field elementor-size-sm elementor-field-textual elementor-date-field flatpickr-input fill_inited" required="required" aria-required="true">
		</div>
        <div class="elementor-field-type-time elementor-field-group elementor-column elementor-field-group-field_877cb96 elementor-col-50">
			<label for="form-field-field_877cb96" class="elementor-field-label">Time</label>
			<input type="text" name="time_customer" id="time_customer" class="elementor-field elementor-size-sm elementor-field-textual elementor-time-field flatpickr-input fill_inited">
		</div>
        <div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_62f5a1b elementor-col-100">
            <b>Onboard representative</b>				
        </div>
        <div class="row-onboard">
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_e920572 elementor-col-25">
            <label for="form-field-field_e920572" class="elementor-field-label">
            Name							</label>
            <input size="1" type="text" name="name_onboard[]" id="name_onboard" class="elementor-field elementor-size-sm elementor-field-textual fill_inited">
        </div>
        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_b974262 elementor-col-25">
            <label for="form-field-field_b974262" class="elementor-field-label">
            Title							</label>
            <input size="1" type="text" name="title_onboard[]" id="title_onboard" class="elementor-field elementor-size-sm elementor-field-textual fill_inited">
        </div>
        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-field_55abaef elementor-col-25">
            <label for="form-field-field_55abaef" class="elementor-field-label">
            Email							</label>
            <input size="1" type="email" name="email_onboard[]" id="email_onboard" class="elementor-field elementor-size-sm elementor-field-textual fill_inited">
        </div>
        <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_fef3320 elementor-col-25">
            <label for="form-field-field_fef3320" class="elementor-field-label">
            Mobile number							</label>
            <input size="1" type="text" name="phone_onboard[]" id="phone_onboard" class="elementor-field elementor-size-sm elementor-field-textual fill_inited" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
        </div>
        <div class="btn-action-form"><button class="add-row btn-add-row-origin"><img src="http://localhost:64/wp-content/uploads/2024/11/add.png"></button></div>
        </div>
        <div id="input-container">
            
        </div>
        <div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_32ed237 elementor-col-100">
			<h3>Survey</h3>
            <p class="element-has-border-bottom">Please select the desired survey task from the checkboxes below.</p>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_729f263 elementor-col-100">
			<label for="form-field-field_729f263" class="elementor-field-label">Bunkering</label>
			<div class="elementor-field-subgroup  ">
                <span class="elementor-field-option">
                    <input type="checkbox" value="Bunker Quantity Survey (BQS)" id="bunkering_form" name="bunkering_form"> <label for="form-field-field_729f263-0">Bunker Quantity Survey (BQS)</label></span><span class="elementor-field-option"><input type="checkbox" value="Bunker Sampling &amp; Analysis" id="form-field-field_729f263-1" name="form_fields[field_729f263][]"> <label for="form-field-field_729f263-1">Bunker Sampling &amp; Analysis</label></span><span class="elementor-field-option"><input type="checkbox" value="Forensic Bunker Survey" id="form-field-field_729f263-2" name="form_fields[field_729f263][]"> <label for="form-field-field_729f263-2">Forensic Bunker Survey</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_3a22759 elementor-col-100">
			<label for="form-field-field_3a22759" class="elementor-field-label">Lloyds / P&amp;I / Warranty</label>
			<div class="elementor-field-subgroup  ">
                <span class="elementor-field-option">
                    <input type="checkbox" value="Lloyds Agency" id="lloyds_form" name="lloyds_form"> 
                    <label for="form-field-field_3a22759-0">Lloyds Agency</label></span><span class="elementor-field-option"><input type="checkbox" value="Marine Warranty Survey" id="form-field-field_3a22759-1" name="form_fields[field_3a22759][]"> <label for="form-field-field_3a22759-1">Marine Warranty Survey</label></span><span class="elementor-field-option"><input type="checkbox" value="Protection &amp; Indemnity (P&amp;I) Survey" id="form-field-field_3a22759-2" name="form_fields[field_3a22759][]"> <label for="form-field-field_3a22759-2">Protection &amp; Indemnity (P&amp;I) Survey</label></span><span class="elementor-field-option"><input type="checkbox" value="Proof &amp; Protection of Asset" id="form-field-field_3a22759-3" name="form_fields[field_3a22759][]"> <label for="form-field-field_3a22759-3">Proof &amp; Protection of Asset</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_fb56bdc elementor-col-100">
			<label for="form-field-field_fb56bdc" class="elementor-field-label">Lifting Appliances</label>
			<div class="elementor-field-subgroup  ">
                <span class="elementor-field-option">
                    <input type="checkbox" value="Crane Inspection" id="lifting_appliances_form" name="lifting_appliances_form"> <label for="form-field-field_fb56bdc-0">Crane Inspection</label></span><span class="elementor-field-option"><input type="checkbox" value="Wire Inspection" id="form-field-field_fb56bdc-1" name="form_fields[field_fb56bdc][]"> <label for="form-field-field_fb56bdc-1">Wire Inspection</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_7ccfaef elementor-col-100">
			<label for="form-field-field_7ccfaef" class="elementor-field-label">Cargo Operations</label>
			<div class="elementor-field-subgroup  ">
                <span class="elementor-field-option">
                    <input type="checkbox" value="Cargo Handling &amp; Stowage" id="cargo_operations_form" name="cargo_operations_form"> 
                    <label for="form-field-field_7ccfaef-0">Cargo Handling &amp; Stowage</label></span><span class="elementor-field-option"><input type="checkbox" value="Cargo Lashing Supervision" id="form-field-field_7ccfaef-1" name="form_fields[field_7ccfaef][]"> <label for="form-field-field_7ccfaef-1">Cargo Lashing Supervision</label></span><span class="elementor-field-option"><input type="checkbox" value="Cargo Logistics" id="form-field-field_7ccfaef-2" name="form_fields[field_7ccfaef][]"> <label for="form-field-field_7ccfaef-2">Cargo Logistics</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_3de75af elementor-col-100">
			<label for="form-field-field_3de75af" class="elementor-field-label">Asset condition</label>
			<div class="elementor-field-subgroup  "><span class="elementor-field-option">
                <input type="checkbox" value="Hull &amp; Machinery Survey" id="asset_condition_form" name="asset_condition_form"> <label for="form-field-field_3de75af-0">Hull &amp; Machinery Survey</label></span><span class="elementor-field-option"><input type="checkbox" value="Underwater Inspection" id="form-field-field_3de75af-1" name="form_fields[field_3de75af][]"> <label for="form-field-field_3de75af-1">Underwater Inspection</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_ddd03a4 elementor-col-100">
			<label for="form-field-field_ddd03a4" class="elementor-field-label">Bulk Cargo Operations</label>
			<div class="elementor-field-subgroup  "><span class="elementor-field-option">
                <input type="checkbox" value="Breakbulk Port Captain" id="bulk_cargo_operations_form" name="bulk_cargo_operations_form"> <label for="form-field-field_ddd03a4-0">Breakbulk Port Captain</label></span><span class="elementor-field-option"><input type="checkbox" value="Bulk Buyers Inspection" id="form-field-field_ddd03a4-1" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-1">Bulk Buyers Inspection</label></span><span class="elementor-field-option"><input type="checkbox" value="Draft Survey" id="form-field-field_ddd03a4-2" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-2">Draft Survey</label></span><span class="elementor-field-option"><input type="checkbox" value="Hold Survey – Cleanliness" id="form-field-field_ddd03a4-3" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-3">Hold Survey – Cleanliness</label></span><span class="elementor-field-option"><input type="checkbox" value="Hold Survey – Damage" id="form-field-field_ddd03a4-4" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-4">Hold Survey – Damage</label></span><span class="elementor-field-option"><input type="checkbox" value="Hatch Cover Integrity" id="form-field-field_ddd03a4-5" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-5">Hatch Cover Integrity</label></span><span class="elementor-field-option"><input type="checkbox" value="Loadmaster / Port Superintendent" id="form-field-field_ddd03a4-6" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-6">Loadmaster / Port Superintendent</label></span><span class="elementor-field-option"><input type="checkbox" value="Petro/Chemical Cargo Operations" id="form-field-field_ddd03a4-7" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-7">Petro/Chemical Cargo Operations</label></span><span class="elementor-field-option"><input type="checkbox" value="Pipe Survey" id="form-field-field_ddd03a4-8" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-8">Pipe Survey</label></span><span class="elementor-field-option"><input type="checkbox" value="Steel Survey" id="form-field-field_ddd03a4-9" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-9">Steel Survey</label></span><span class="elementor-field-option"><input type="checkbox" value="Stockpile Survey" id="form-field-field_ddd03a4-10" name="form_fields[field_ddd03a4][]"> <label for="form-field-field_ddd03a4-10">Stockpile Survey</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_b881688 elementor-col-100">
			<label for="form-field-field_b881688" class="elementor-field-label">Charter / Sale &amp; Purchase</label>
			<div class="elementor-field-subgroup  "><span class="elementor-field-option">
                <input type="checkbox" value="Sale &amp; Purchase" id="charter_form" name="charter_form"> <label for="form-field-field_b881688-0">Sale &amp; Purchase</label></span><span class="elementor-field-option"><input type="checkbox" value="Ship Vetting" id="form-field-field_b881688-1" name="form_fields[field_b881688][]"> <label for="form-field-field_b881688-1">Ship Vetting</label></span><span class="elementor-field-option"><input type="checkbox" value="On/Off-Hire Condition Survey" id="form-field-field_b881688-2" name="form_fields[field_b881688][]"> <label for="form-field-field_b881688-2">On/Off-Hire Condition Survey</label></span></div>				
        </div>
        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_9dcae91 elementor-col-100">
			<label for="form-field-field_9dcae91" class="elementor-field-label">Security</label>
			<div class="elementor-field-subgroup  "><span class="elementor-field-option">
                <input type="checkbox" value="Citadel Inspections" id="form-field-field_9dcae91-0" name="security_form"> <label for="form-field-field_9dcae91-0">Citadel Inspections</label></span><span class="elementor-field-option"><input type="checkbox" value="Ship Security Assessment (SSA)" id="form-field-field_9dcae91-1" name="form_fields[field_9dcae91][]"> <label for="form-field-field_9dcae91-1">Ship Security Assessment (SSA)</label></span><span class="elementor-field-option"><input type="checkbox" value="Anti-Piracy Ship Security Assessment (APSSA)" id="form-field-field_9dcae91-2" name="form_fields[field_9dcae91][]"> <label for="form-field-field_9dcae91-2">Anti-Piracy Ship Security Assessment (APSSA)</label></span><span class="elementor-field-option"><input type="checkbox" value="Ship Security Plan (SSP) Review" id="form-field-field_9dcae91-3" name="form_fields[field_9dcae91][]"> <label for="form-field-field_9dcae91-3">Ship Security Plan (SSP) Review</label></span><span class="elementor-field-option"><input type="checkbox" value="Port Security Assessment (PSA) per ISPS" id="form-field-field_9dcae91-4" name="form_fields[field_9dcae91][]"> <label for="form-field-field_9dcae91-4">Port Security Assessment (PSA) per ISPS</label></span></div>				
        </div>
        <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-field_a46c07e elementor-col-100">
			<label for="form-field-field_a46c07e" class="elementor-field-label">Other comments</label>
			<textarea class="elementor-field-textual elementor-field elementor-size-sm fill_inited" name="other_comments_form" id="other_comments_form" rows="4"></textarea>				
        </div>
        <input type="submit" name="submit_form_booking">
    </form>
    <?php
}
add_shortcode('form_booking_custom', 'form_booking_custom');

function process_form_booking(){
    if (!empty($_POST['submit_form_booking']))  {
        $first_name_customer = $_POST['first_name_customer'];
        $last_name_customer = $_POST['last_name_customer'];
        $company_name = $_POST['company_name'];
        $title_form = $_POST['title_form'];
        $email_customer = $_POST['email_customer'];
        $mobile_number_customer = $_POST['mobile_number_customer'];
        $vessel_name_customer = $_POST['vessel_name_customer'];
        $imo_number_customer = $_POST['imo_number_customer'];
        $country_customer = $_POST['country_customer'];
        $port_customer = $_POST['port_customer'];
        $date_customer = $_POST['date_customer'];
        $time_customer = $_POST['time_customer'];
        $bunkering_form = $_POST['bunkering_form'];
        $lloyds_form = $_POST['lloyds_form'];
        $lifting_appliances_form = $_POST['lifting_appliances_form'];
        $cargo_operations_form = $_POST['cargo_operations_form'];
        $asset_condition_form = $_POST['asset_condition_form'];
        $bulk_cargo_operations_form = $_POST['bulk_cargo_operations_form'];
        $charter_form = $_POST['charter_form'];
        $security_form = $_POST['security_form'];
        $other_comments_form = $_POST['other_comments_form'];

        $name_form_values = $_POST['name_onboard'];
        $title_form_values = $_POST['title_onboard'];
        $email_form_values = $_POST['email_onboard'];
        $phone_form_values = $_POST['phone_onboard'];
        
        if ($name_form_values[0] == "" || $title_form_values[0] == "" || $email_form_values[0] == "" || $phone_form_values[0] == "") {
            echo '<script>alert("Please complete all information.");</script>';
            return;
        }

        $recipient = 'trantan302002@gmail.com';

        //setting email
        $subject = 'Form Booking On Website';

        // Config message mail
        $message = "";
        $message .= "<h3>Request an attendance – Survey & Inspection</h3>";
        $message .= "Customer Name: $first_name_customer $last_name_customer <br>";
        $message .= "Company Name: $company_name <br>";
        $message .= "Title: $title_form <br>";
        $message .= "Email: $email_customer <br>";
        $message .= "Phone: $mobile_number_customer <br>";
        $message .= "Vessel Name: $vessel_name_customer <br>";
        $message .= "IMO Number: $imo_number_customer <br>";
        $message .= "<br>";
        $message .= "<h3>Survey location </h3>";
        $message .= "Country: $country_customer Port: $port_customer - Date: $date_customer - Time: $time_customer <br>";
        $message .= "<br>";
        $message .= "<h3>Onboard representative </h3>";

        foreach ($name_form_values as $key => $value) {
            $message .= "<h4>Onboard representative: $key</h4>" ;
            $message .= "Name: $value<br>" ;
            $message .= "Title: {$title_form_values[$key]}<br>";
            $message .= "Email: {$email_form_values[$key]}<br>";
            $message .= "Phone Number: {$phone_form_values[$key]}<br>";
            $message .= "<br>";
            
        }
        
        $message .= "<h3>Survey </h3>";
        $message .= "Bunkering: $bunkering_form <br>";
        $message .= "Lloyds / P&I / Warranty: $lloyds_form <br>";
        $message .= "Lifting Appliances: $lifting_appliances_form <br>";
        $message .= "Cargo Operations: $cargo_operations_form <br>";
        $message .= "Asset condition:   <br>";
        $message .= "Bulk Cargo Operations: $bulk_cargo_operations_form <br>";
        $message .= "Charter / Sale & Purchase: $charter_form <br>";
        $message .= "Security:  $security_form<br>";

        $message .= "Other comments:  $other_comments_form<br>";

        // Set the headers (optional)
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: Aregius Marine <yourname@example.com>',
        );

        // Send the email
        if (wp_mail($recipient, $subject, $message, $headers)) {
            echo '<script>alert("Email sent successfully.")</script>';
        } else {
            echo '<script>alert("Failed to send the email.")</script>';
        }
    }
}
add_action('init','process_form_booking');
