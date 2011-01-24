{% include 'layouts/header.tpl' %}

<div class="login_form">
<form>

	<div class="login_form_label">Username</div>
		<input type="text" name="username" class="login_form_field">

	<div class="login_form_label">Password</div>
		<input type="password" name="password" class="login_form_field">

	
	<a class="button" href="/home">Login</a>

</form>
</div>

{% include 'layouts/footer.tpl' %}
