
var i=0;
function compile() {
	var html = document.getElementById("html"+i);
	var css = document.getElementById("css"+i);
	var js = document.getElementById("js"+i);
	var code = document.getElementById("code"+i).contentWindow.document;

	document.body.keyup = function() {
	    code.open();
	    code.writeln(
			html.value +
	        "<style>" +
	        css.value +
	        "</style>" +
	        "<script>" +
	        js.value +
	        "</script>"
	    );
	    code.close();
	};
}
compile();