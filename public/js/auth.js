var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });
  var toastMixin2 = Swal.mixin({
    toast: true,
    icon: 'error',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });
$(document).ready(function () {

    // Validation
 
  
    // Registration
    $("#crud-submit").on('click', function(e){
        e.preventDefault();
        // alert('s');
        let data = {
            firstName : $('#firstName').val(),
            lastName : $('#lastName').val(),
            email : $('#email').val(),
            password :$('#password').val(),
            passwordConfirm :$('#passwordConfirm').val()
        }
        
        $.ajax({
         
            type:'POST',
            url: 'controllers/request/registration.php',
            data:data,
            encode: true,
            success: function(data) { 
                var personObject = JSON.parse(data);
        
            console.log(data);
            if( personObject.success == true) {
                toastMixin.fire({
                    animation: true,
                    title: "Success Registered!"
                    });
                setTimeout(function() {
                    location.reload();
                    if(personObject.location){
                        window.location.href = personObject.location;
                      }
                }, 2000);
                
            }else {
                // console.log(data['success'])
                var personObject = JSON.parse(data);
                console.log(data);
            //    console.log( personObject.errors.first_name);
                toastMixin2.fire({
                    animation: true,
                    title:  'Something wrong!'
                });
                // if (data.errors.name) {
                //     $("#fname").addClass("has-error");
                //     $("#fname").append(
                //       '<div class="help-block">' + data.errors.name + "</div>"
                //     );
                // }
            }
            },error:function(data) {
                
console.log(data)
            },
        })
     
    });    
});
//   success: function(data) {
                
//     console.log(data[0]);
//     if(data.status == 200){
//         toastMixin.fire({
//             animation: true,
//             title: "Congratulations, your account <br> has been successfully created."
//           });
//         setTimeout(function() {
//             location.reload();
//         }, 2000);
//     }
    
// },
// error: function(response) {
    
// }