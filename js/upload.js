$(document).ready(function(){


  $.validator.addMethod('filesize', function(value, element, param) {
      // param = size (in bytes)
      // element = element to validate (<input>)
      // value = value of the element (file name)
      return this.optional(element) || (element.files[0].size <= param)
  });

  $("form[name='apply']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        lastname: "required",
        city: "required",
        country: "required",
        firstname: "required",
        email: {
          required: true,
          email: true
        },
        ampersand: "required",
        company: "required",
        file1: {
          required: true,
          extension: "svg",
          filesize : 2097152
        },

      },
      // Specify validation error messages
      messages: {
        lastname: "Your lastname !",
        firstname: "Your firstname !",
        city: "Your city !",
        company: "Your company !",
        country: "Yout country !",
        ampersand: "The name of your ampersand !",
        email: "A valid e-mail !",
        file1: "SVG, 2mo max !"

      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
})
