function onClick(){
	var A = document.getElementById('A').value;
	var B = document.getElementById('B').value;
	var C = document.getElementById('C').value;
	var D = document.getElementById('D').value;
	var E = document.getElementById('E').value;
	var F = document.getElementById('F').value;
	var G = document.getElementById('G').value;
	var H = document.getElementById('H').value;
	var I = document.getElementById('I').value;

	if(!A.match(/^\d+/) || !B.match(/^\d+/) || !C.match(/^\d+/) || !D.match(/^\d+/) || !E.match(/^\d+/) || !F.match(/^\d+/) || !G.match(/^\d+/) || !H.match(/^\d+/)
	 || !I.match(/^\d+/)){
		alert("Try again please!!!");
	}

	else {	
		var det = A*(E*I - F*H) - B*(D*I - F*G) + C*(D*H - E*G);
		document.getElementById('Determinant').innerHTML = det;
		document.getElementById('Solution').innerHTML = "|A| = " + A + "(" +  E + "*" + I + " - " + F + "*" + H + ") - " + B + "(" + D + "*" + I +
		 " - " + F + "*" + G  + ") + " + C + "(" + D + "*" + H + " - " + E + "*" + G + ") = " + det;

	}
}

