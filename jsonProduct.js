
var proSend = document.getElementById("getText");
function loadJSON(){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
		showProduct(xhr);
		};

	var url = "http://localhost/webapp/jsonEcho.php";
	xhr.open("POST",url,true);
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

	xhr.send(proSend);
	// xhr.send("fn=Buachompoo&ln=Ford");
	// pName1=Puriku&pName2=Oishi&pName3=Pepsi&pName4=Ichiton&pName5=Bento
	// fn=Buachompoo&ln=Ford
	}

	function showProduct(xhr){
		if (xhr.readyState== 4 && xhr.status== 200) {
			var r = xhr.responseText; 
			alert(r);
			// if (r.indexOf("ERRNO") >= 0 || r.indexOf("error:") >= 0 || r.length== 0) 
			// 	throw (r.length== 0 ? "Server error." : r); 
			var myProduct = JSON.parse(r);
			// document.write(myProduct.pName.length);
			
			document.write("<div align='center'><table border=1>");
			document.write("<tr><td>MY ITEM LIST</td></tr>")
			var c=0;
			while(c < myProduct.pName.length){
				document.write("<tr><td style='text-align:center;'>"+myProduct.pName[c]+"</td></tr>");
				c++;
			}
			document.write("</table></div>");
		}
	}

