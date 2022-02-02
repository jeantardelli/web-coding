// primes.js
var n = 2;
function timedCount(){
	var prime = true;
	for (i=2; i<Math.sqrt(n)+1; i++){
		if (n%i==0) {prime=false; break;}
	}
	if (prime||n==2) postMessage(n);
	setTimeout("timedCount()",500);
	if (n==2) n++; else n+=2;
}
timedCount();
