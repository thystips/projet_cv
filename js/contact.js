$(document).ready(function () {
  (function ($) {
    'use strict'

    jQuery.validator.addMethod('answercheck', function (value, element) {
      return this.optional(element) || /^\bcat\b$/.test(value)
    }, 'type the correct answer -_-')

    // validate contactForm form
    $(function () {
      $('#contactForm').validate({
        rules: {
          name: {
            required: true,
            minlength: 2
          },
          subject: {
            required: true,
            minlength: 4
          },
          email: {
            required: true,
            email: true
          },
          message: {
            required: true,
            minlength: 20
          }
        },
        messages: {
          name: {
            required: 'Vous avez bien un nom ?',
            minlength: 'Votre nom doit contenir au moins 2 caractères'
          },
          subject: {
            required: 'euillez remplir ce champ',
            minlength: 'Ce champ contenir au moins 2 caractères'
          },
          email: {
            required: "pas d'email, pas de message"
          },
          message: {
            required: 'Vous devez renseigner ce champ.',
            minlength: 'Rien de plus ?'
          }
        },
        submitHandler: function (form) {
          $(form).ajaxSubmit({
            type: 'POST',
            data: $(form).serialize(),
            url: 'contact_process.php',
            success: function () {
              $('#contactForm :input').attr('disabled', 'disabled')
              $('#contactForm').fadeTo('slow', 0.15, function () {
                $(this).find(':input').attr('disabled', 'disabled')
                $(this).find('label').css('cursor', 'default')
                $('#success').fadeIn()
              })
            },
            error: function () {
              $('#contactForm').fadeTo('slow', 0.15, function () {
                $('#error').fadeIn()
              })
            }
          })
        }
      })
    })
  })(jQuery)
})
