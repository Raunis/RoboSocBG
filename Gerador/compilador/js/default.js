$(document).ready(function(){
	//code here...
	var code = $(".code")[0];
	var editor = CodeMirror.fromTextArea(code, {
		lineNumbers : true,
		theme : "yeti",
		mode: "text/x-c++src"
	});
});