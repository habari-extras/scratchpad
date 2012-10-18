<html>
<head><title>Habari ScratchPad</title>
<style>
body {
	background: #333;
	color: #eee;
	font: 11px sans-serif;
}
textarea, input, select {
	width: 100%;
}
textarea {
	height: 100px;
}
div { margin: 1em 0; }
div#scratchpads, div#scratchpad {
	width: 49%;
	float: left;
}
div#scratchpad {
	margin-left: 1px;
	float: right;
}
div#save {
	clear: both;
}
label {
	display: block;
}
</style>
</head>
<body>
<?php $form->out(); ?>
</body>
</html>
