{% include 'layouts/header.tpl' %}

<div class="messageList">
<h1>Messages</h1>

<h2>Today</h2>
<ul id="messageList">
	<li><a href="/bluehornet/message/34982093">Save 30% On Your Next Order</a>
	<li><a href="/bluehornet/message/34920039">Free Shipping On Orders Over $100!</a>
	<li><a href="/bluehornet/message/39400392">Free Shipping On Orders Over $90!</a>
</ul>

<h2>Yesterday</h2>
<ul id="messageList">
	<li><i>No Messages</i>
</ul>

<h2>{{twoDaysAgo}}</h2>
<ul id="messageList">
	<li><a href="/bluehornet/message/34230039">Get Set For Summer</a>
	<li><a href="/bluehornet/message/39450392">Free Shipping On Orders Over $50!</a>
</ul>

<h2>{{threeDaysAgo}}</h2>
<ul id="messageList">
	<li><a href="/bluehornet/message/34780039">Fly Fishing Tips and Tricks</a>
	<li><a href="/bluehornet/message/39990392">All Bass Lures 25% Off</a>
</ul>

<h2>{{fourDaysAgo}}</h2>
<ul id="messageList">
	<li><i>No Messages</i>
</ul>

</div>
{% include 'layouts/footer.tpl' %}