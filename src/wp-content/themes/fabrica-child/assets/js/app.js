
var elements = document.querySelectorAll('.add-row');
    

    elements.forEach(function(element) {
        element.onclick = function() {
            add_row_input(event);
        };
    });
    


    function add_row_input(event) {
        event.preventDefault();

        const inputContainer = document.getElementById("input-container");

        const newInputRow = document.createElement("div");
        newInputRow.className = "input-row ";

        newInputRow.innerHTML = `
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
            <div class="btn-action-form"><button id="add-more-row"><img src="/wp-content/themes/weiboo-child/assets/icons/add.png"></button><button id="minus-row"><img src="/wp-content/themes/weiboo-child/assets/icons/minus.png"></button></div>
            `;
            // Attach click event for the "add-more-row" button
            newInputRow.querySelector('#add-more-row').onclick = function(event) {
                add_row_input(event);
            };

            // Attach click event for the "minus-row" button
            newInputRow.querySelector('#minus-row').onclick = function(event) {
                event.preventDefault();
                newInputRow.remove(); // Remove the entire row
            };

            // Append the new input row to the container
            inputContainer.appendChild(newInputRow);
    }