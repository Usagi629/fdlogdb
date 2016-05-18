<?php
echo					
'<span id="logo" class="logo col-2">
	<img src="/img/100.jpg" alt="logo goes here"/>
</span>
<div id="timeandtitle" class="col-10">
	<div id="datetime" class="col-6">
		<div id="clock" class="row">
			<h2>HH:mm:ss</h2>
		</div>
		<div id="date" class="row">
			<h2>DD/MM/YYYY</h2>
		</div>';
		if (!empty($_SESSION['name'])) {
			echo '<h5>Welcome, '. $_SESSION['name'].'</h5>';
		}
		echo '
	</div>
	<div id="title" class="col-6">
		<h1>KB3ABC/1</h1>
	</div>
</div>';
if (!empty($_SESSION['priv']) and $_SESSION['priv'] === "admin") {
	echo '
		<div class="row">
			<h2>Logged in as Admin! Please do not log your contacts as admin.</h2>
		</div>';
}
?>