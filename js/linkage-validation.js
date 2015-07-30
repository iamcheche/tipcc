  $(document).ready(function() {
  
    // Setup form validation on the #register-form element
    $("#submit").validate({
    
        // Specify the validation rules
        rules: {
            company_name: "required",
            company_tel_no: "required",
            address_no: {
                required: true,
                number: true
            },
            street_address: "required",
            city_address: "required",
            region: "required",
            zip: {
                required:true,
                number: true
            },
            contact_fname: "required",
            contact_mi: "required",
            contact_lname: "required",
            contact_position: "required",
            contact_email: {
                required: true,
                email: true
            },
            contact_number: {
                required: true,
                number: true
            },
            sy_start: "required",
            sy_end: "required",
            program_supported: "required",
            brief_desc: "required",
            slo: "required",
            grad_employability: "required",
        },    
        // Specify the validation error messages
        messages: {
            company_name: "This field is required.",
            company_tel_no: {
                required: "This field is required.",
                number:"Please insert numbers only"
            },
            address_no:{
                required: "This field is required",
                number: "Please insert numbers only"
            }
        },
    
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
