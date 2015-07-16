<?php

/**
 * Plugin Name: Password Masking
 * Plugin URI: http://sitepoint.com/
 * Description: An plugin to add show password checkbox to Login and Password Reset Forms.
 * Author: WooThemes
 */

function pm_enqueue_scripts() 
{
    wp_register_script("pm-js", plugins_url("password-masking/password-masking.js"));
    wp_enqueue_script("pm-js");
}
 
add_action("login_enqueue_scripts", "pm_enqueue_scripts");

function display_login_checkbox() 
{ 
	?>
		<p>
			<label for="passwordmask">
				<input name="passwordmask" type="checkbox" id="passwordmask" onclick="passwordMasking_LoginForm()"> 
				Show Password
			</label>
		</p>	
	<?php 
}

add_action("login_form", "display_login_checkbox");

function display_password_reset_checkbox() 
{ 
	?>
		<p>
			<label for="passwordmask">
				<input name="passwordmask" type="checkbox" id="passwordmask" onclick="passwordMasking_ResetForm()"> 
				Show Password
			</label>
		</p>	
	<?php 
}

add_action("resetpass_form", "display_password_reset_checkbox");