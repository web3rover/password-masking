function passwordMasking_LoginForm()
{
	var checkbox = document.getElementById("passwordmask");

	if(checkbox.checked)
	{
		document.getElementById("user_pass").type = "text";
	}
	else
	{
		document.getElementById("user_pass").type = "password";
	}
}

function passwordMasking_ResetForm()
{
	var checkbox = document.getElementById("passwordmask");

	if(checkbox.checked)
	{
		document.getElementById("pass1").type = "text";
		document.getElementById("pass2").type = "text";
	}
	else
	{
		document.getElementById("pass1").type = "password";
		document.getElementById("pass2").type = "password";
	}
}