{% include 'layouts/header.tpl' %}

<input type="text" name="username">
<input type="password" name="password">
<input type="button" value="log in" onClick="parent.location='/home'">

{% include 'layouts/footer.tpl' %}
