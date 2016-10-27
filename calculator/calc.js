var answer = 0;
var operation = '';

function run1() {


	document.frm.result.value += '1';
}


function run2() {
	document.frm.result.value += '2';
}


function run3() {
	document.frm.result.value += '3';
}


function run4() {
	document.frm.result.value += '4';
}


function run5() {
	document.frm.result.value += '5';
}


function run6() {
	document.frm.result.value += '6';
}


function run7() {
	document.frm.result.value += '7';
}


function run8() {
	document.frm.result.value += '8';
}


function run9() {
	document.frm.result.value += '9';
}


function run0() {
	document.frm.result.value += '0';
}


function runplus() {
	operation = '+';
	storeInput();
	runclear();
	document.frm.result.value += '+  ';
}


function runrest() {
	operation = '-';
	storeInput();
	runclear();
	document.frm.result.value += '-  ';
}


function runmulti() {
	operation = '*';
	storeInput();
	runclear();
	document.frm.result.value += '*  ';
}


function runclear() {
	document.frm.reset();
}


function rundec() {
	document.frm.result.value += '.';
}


function runeval() {

	var resultValue = document.frm.result.value;

	resultValue = resultValue.slice(1, resultValue.length);

	switch (operation) {

		case '+':
			answer += Number(resultValue);
			break;
		
		case '-':		
			answer -= Number(resultValue);
			break;

		case '*':
			answer *= parseFloat(resultValue);
			break;
	}

	document.frm.result.value = answer;

}

function storeInput() {

	resultValue = document.frm.result;

	if (resultValue.value == '')
		answer = 0;
	else
		answer = parseFloat(resultValue.value);

}