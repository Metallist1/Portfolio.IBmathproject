var timeoutID = window.setTimeout(timeron , 1000);
function timeron (){
var defult = $( "#timer" ).html(); 
defult = parseFloat(defult) *100;              
		var h = 100 / parseFloat(defult) ,
                    g = 100,
                    I = defult;
                "undefined" != typeof Worker ? ("undefined" == typeof t && (t = new Worker("js/workeris.js")), t.onmessage = function(e) {
                    if (0 >= I) {
		    	 document.getElementsByTagName('input')[9].click();
			return t.terminate(), void(t = void 0);
			}
                    g = parseFloat(g) - parseFloat(h);
                    $('#progressbar').css({
                        'width': g + '%'
                    });
                    I--;
                    var a = I / 100;
			$("#timebonus").val(""+a.toPrecision(I.toString().length));
                    document.getElementById("timer").innerHTML = a.toPrecision(I.toString().length) + " secs"
                }) : $("#messages").append($("<li>").text("Your browser does not support Workers , please update it to use our site to its maximum."))
}