function isWhiteSpaceOrEmpty(str) {
 return /^[\s\t\r\n]*$/.test(str);
}

function checkString(str, msg){
	if(isWhiteSpaceOrEmpty(str) == true){
		alert(msg);
		return false;
	}
	return true;
}

function isEmailInvalid(str){
	let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
	if(!email.test(str))
		return true;
	else{
		return false;
	}
}
function checkStringAndFocus(obj, msg, email){
	let str = obj.value;
	let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
	if(!email){
		if(isWhiteSpaceOrEmpty(str)){
			document.getElementById(errorFieldName).innerHTML = msg;
			obj.focus();
			return false;
		}
		else{
			document.getElementById(errorFieldName).innerHTML = "";
			return true;
		}
	}
	else{
		if(isEmailInvalid(str)){
			document.getElementById(errorFieldName).innerHTML = msg;
			obj.focus();
			return false;
		}
		else{
			document.getElementById(errorFieldName).innerHTML = "";
			return true;
		}
	}
}

function validate(formularz){
	var nazwisko = checkStringAndFocus(formularz.elements["f_nazwisko"], "Podaj nazwisko!", false);
	var imie = checkStringAndFocus(formularz.elements["f_imie"], "Podaj imię!", false);
	var email = checkStringAndFocus(formularz.elements["f_email"], "Podaj email!", true);
	var kod = checkStringAndFocus(formularz.elements["f_kod"], "Podaj kod!", false);
	var ulica =  checkStringAndFocus(formularz.elements["f_ulica"], "Podaj ulicę!", false);
	var miasto = checkStringAndFocus(formularz.elements["f_miasto"], "Podaj miasto!", false);
	if(miasto && ulica && kod && email && nazwisko && imie)
		return true;	
	else
		return false;
}

function showElement(e) {
 document.getElementById(e).style.visibility = 'visible';
}

function hideElement(e) {
 document.getElementById(e).style.visibility = 'hidden';
}

function alterRows(i, e) {
	if (e) {
		if (i % 2 == 1) {
			e.setAttribute("Style", "background-color: Aqua");
		}
		e = e.nextSibling;
		while(e && e.nodeType != 1) {
			e = e.nextSibling;
		}
		alterRows(++i, e);
	}
}

function nextNode(e) {
	while(e && e.nodeType != 1) {
		e = e.nextSibling;
	}
	return e;
}

function prevNode(e) {
	while(e && e.nodeType != 1) {
		e = e.previousSibling;
	}
	return e;
}

function swapRows(b) {
	let tab = prevNode(b.previousSibling);
	let tBody = nextNode(tab.firstChild);
	let lastNode = prevNode(tBody.lastChild);
	tBody.removeChild(lastNode);
	let firstNode = nextNode(tBody.firstChild);
	tBody.insertBefore(lastNode, firstNode);
} 

function cnt(form, msg, maxSize) {
	if(form.value.length > maxSize)
		form.value = form.value.substring(0, maxSize);
	else
		msg.innerHTML = maxSize - form.value.length;
}