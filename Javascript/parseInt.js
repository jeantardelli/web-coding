var x = document.getElementsByTagName("input")[0].value;
var y = document.getElementsByTagName("input")[1].value;

alert(y-x);                           // 10
alert(x+y);                           // 1020
alert(parseInt(x,10)+parseInt(y,10)); // 30
alert((+x)+(+y));                     // 30
