
$(document).ready(function(){$('#sidebar').affix({
      offset: {
        top: 230,
        bottom: 100
      }
});	
$('#midCol').affix({
      offset: {
        top: 230,
        bottom: 100
      }
});	
});

$(document).ready(function(){

$("#signup").validate({
rules:{
	fname:"required",
	lname:"required",
	email:{
		required:true,
		email: true
	},
	passwd:{
		required:true,
		minlength: 8
	},
	conpasswd:{
		required:true,
		equalTo: "#passwd"
	}
},

errorClass: "help-inline"

});
});