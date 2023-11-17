jQuery(document).ready(function($){

      
    $('#enviarFormulario').on('click', function(e){
         e.preventDefault()
         var nombre = $('#nombre').val() 
         var email = $('#email').val()
         var telefono = $('#telefono').val()
         var nonce = $('#procesar_formulario_nonce').val() 
         var error = $('<p class="error-form">Todos los campos son obligatorios</p>')
         

          if([nombre,email, telefono].includes('')) {
            console.log('todos los campos son obligatorios') 
             
            
                 $('.error-form').remove()

                 var errorMostrado = false
                 if(!errorMostrado){
                  $('.contenedor-formulario').append(error)
                  setTimeout(() => {
                    $('.error-form').remove()

                  },1500)
                  errorMostrado = true
                 }
              
             
          } else {
            $.ajax({
              type:'POST',
              url:my_ajax_object.ajax_url,
              data:{
                action:'procesar_formulario_ajax',
                nombre:nombre,
                email:email,
                telefono:telefono,
                nonce:nonce
              },
              success:function(response){
                console.log(response)
              }
           })
           
             $('#nombre').val('')
             $('#email').val('')
             $('#telefono').val('')

             console.log('enviando datos') 
             setTimeout(() => {
                $('.error-form').remove()
             },1000) 

             const mensajeExitoso = document.createElement('p')
             mensajeExitoso.textContent = "Tu mensaje ha sido enviado"
             mensajeExitoso.classList.add('.mensaje-exitoso')
             setTimeout(() => {
                  $('.formulario').append(mensajeExitoso)
             },1000) 

             setTimeout(() => {
                $('.mensaje-exitoso').remove()
             },2000)
          }
        
    }) 
 })