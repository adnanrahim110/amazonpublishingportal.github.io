
function validateConsultationForm(form){
    form.validate({
        rules: {
            name:{
                required: true,
                minlength: 3,
                maxlength: 100
            },
            email:{
                required: true,
                email: true,
            },
            phone_number:{
                required: true,
                minlength: 4,
                maxlength: 20
            },
            message:{
                
                maxlength: 600
            },
        },    
        focusCleanup: true,
        onkeyup: function(element) {
            $(element).removeAttr('title');
        },
        
        errorPlacement: function (error, element) {
            element.attr('title', error.text());
        }
    });
}


