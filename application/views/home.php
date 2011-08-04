<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CuteTypo &mdash; A Chat Web Service</title>
	</head>
	<body>
		<h1>CuteTypo &mdash; A Chat Web Service</h1>
		
		<h2>API Documentation</h2>
		<p>Two things to remember:</p>
		<ol>
			<li>For all calls, you <em>must</em> include your API Token in either a GET or POST variable.</li>
			<li>All calls accept a <code>callback</code> parameter for JSONP requests. (For example, calling <code>/name/get?callback=foo&token=<var>your-token</var></code> will return <code>foo({name:"<var>Your App Name</var>"})</code>.)</li>
		</ol>

		<h3><code>/name/get</code> (also: <code>/name</code>)</h3>
		<p>This returns the current name of your App.</p>
		<h4>Example</h4>
		<h5>Request</h5>
		<pre><code>/name/get?callback=foo&token=<var>your-token</var></code></pre>
		<h5>Response</h5>
		<pre><code>foo({name:"<var>Your App Name</var>"})</code></pre>
		
		<h3><code>/name/set</code></h3>
		<p>This sets the name of your App. Returns true if it was successfully set, false if otherwise.</p>
		<h4>Parameters</h4>
		<ul>
			<li><code>name</code> &mdash; The new name of your app. Max length of 255 characters.</li>
		</ul>
		<h4>Example</h4>
		<h5>Request</h5>
		<pre><code>/name/set/?<strong>name=New+App+Name</strong>&callback=foo&token=<var>your-token</var></code></pre>
		<h5>Response</h5>
		<pre><code>foo(true)</code></pre>

		<h3><code>/message/get</code> (also: <code>/messages</code>)</h3>
		<p>Returns a list of chat messages.</p>
		<h4>Parameters</h4>
		<ul>
			<li><code>since</code> &mdash; <em>Optional</em> Returns messages that were sent after this time. Defaults to 1 hour ago. You may supply any date format parsable by <a href="http://php.net/manual/en/function.strtotime.php">strtotime()</a>.</li>
		</ul>
		<h4>Example</h4>
		<h5>Request</h5>
		<pre><code>/message/get?<strong>since=-10days</strong>&callback=foo&token=<var>your-token</var></code></pre>
		<h5>Response</h5>
		<pre><code>foo([{"id":"1","app":"21","username":"0","message":"Testing, Testing, 1 2 3.","timestamp":"2011-08-03 20:31:29"}])</code></pre>

		<h3><code>/message/send</code></h3>
		<p>Sends a new chat message. Returns true if the send was successful, false if otherwise.</p>
		<h4>Parameters</h4>
		<ul>
			<li><code>message</code> &mdash; String of message to send. Max length of 980 characters.</li>
			<li><code>username</code> &mdash; Name of the user who is sending the message. Max length of 16 characters.</li>
		</ul>
		<h4>Example</h4>
		<h5>Request</h5>
		<pre><code>/mesage/send?<strong>message=This+is+a+message!</strong>&amp;<strong>username=peterwooley</strong>&callback=foo&token=<var>your-token</var></code></pre>
		<h5>Response</h5>
		<pre><code>foo(true)</code></pre>
	</body>
</html>
