// var i=1;
// function compile() {
// 	var html = document.getElementById("html"+i);
// 	var css = document.getElementById("css"+i);
// 	var js = document.getElementById("js"+i);
// 	var code = document.getElementById("code"+i).contentWindow.document;

// 	document.body.onclick = function() {
// 	    code.open();
// 	    code.writeln(
// 			html.value +
// 	        "<style>" +
// 	        css.value +
// 	        "</style>" +
// 	        "<script>" +
// 	        js.value +
// 	        "</script>"
// 	    );
// 	    code.close();
// 	};
// }
// $(document).ready(function(){  
// 	$('#add').click(function(){  
           
// 	i++;  
      
// 		$('#add_snippet').append('<div class="form-group row" id="row'+i+'"> '+
//         '<label for="body" class="col-md-2 col-form-label ">Snippet</label>'+
//         '<div class="col-md-10" id="add_snippet">'+
//           '<ul class="nav nav-tabs nav-justified" role="tablist">'+
//             '<li class="nav-item">'+
//               '<input id="heading" type="text" class="form-control form-control-sm" name="headings[]" placeholder="Code Heading" value="" required autofocus">'+
//             '</li>'+
//             '<li class="nav-item">'+
//               '<a class="nav-link" href="#html-editor'+i+'" role="tab" data-toggle="tab">HTML</a>'+
//             '</li>'+
//             '<li class="nav-item">'+
//               '<a class="nav-link" href="#css-editor'+i+'" role="tab" data-toggle="tab">CSS</a>'+
//             '</li>'+
//             '<li class="nav-item">'+
//               '<a class="nav-link" href="#javascript-editor'+i+'" role="tab" data-toggle="tab">JAVASCRIPT</a>'+
//             '</li>'+
//             '<li class="nav-item">'+
//               '<a class="nav-link" href="#preview'+i+'" role="tab" data-toggle="tab" >Preview</a>'+
//             '</li>'+
//             '<li>'+
//               '<a type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</a>'+
//             '</li>'+
//           '</ul>'+

//           '<div class="tab-content">'+
//             '<div role="tabpanel" class="card text-white bg-success tab-pane fade in m-0 p-0" id="preview'+i+'">'+
//               '<div class="card-body  m-0 p-1">'+
//                 '<iframe id="code'+i+'"  class="codeeditor-iframe active"></iframe>'+
//               '</div>'+
//             '</div>'+

//             '<div role="tabpanel" class="card text-white bg-danger tab-pane fade m-0 p-0" id="html-editor'+i+'">'+
//               '<div class="card-body  m-0 p-1">'+
//                  '<textarea id="html'+i+'" placeholder="HTML Codes here" class="codeeditor-textarea" name="html-code[]" autofocus></textarea>'+
//               '</div>'+
//             '</div>'+

//             '<div role="tabpanel" class="card text-white bg-primary tab-pane fade m-0 p-0" id="css-editor'+i+'">'+
//               '<div class="card-body  m-0 p-1">'+
//            '     <textarea id="css'+i+'" placeholder="CSS Codes here" class="codeeditor-textarea" name="css-code[]" autofocus></textarea>'+
//            '   </div>'+
//           '  </div>'+

//           '  <div role="tabpanel" class="card text-white bg-warning tab-pane fade m-0 p-0" id="javascript-editor'+i+'">'+
//           '    <div class="card-body  m-0 p-1">'+
//            '     <textarea id="js'+i+'" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript-code[]" autofocus></textarea> '+
//           '    </div>'+
//           '  </div>'+

//          ' </div>'+
//         '</div>'+

//       '</div>');
  
// 	});

// 	$.ajaxSetup({
//           headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//       });

	

//     $(document).on('click', '.btn_remove', function(){  
// 		var button_id = $(this).attr("id");   
// 		$('#row'+button_id+'').remove();  
// 	});  

// 	function printErrorMsg (msg) {
// 		$(".print-error-msg").find("ul").html('');
// 		$(".print-error-msg").css('display','block');
// 		$(".print-success-msg").css('display','none');
// 		$.each( msg, function( key, value ) {
// 			$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
// 		});
// 	}
	

// });
// compile();
