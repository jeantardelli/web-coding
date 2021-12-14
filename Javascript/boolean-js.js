/* Remember that ‘undefined’, ‘null’, 0, ‘NaN’, and the empty string “” evaluate to false in a Boolean contex */
// No alert at all
var b2 = new Boolean
b2 = false;
if (b2) alert(100);
if (undefined) alert(1);
if (null) alert(1);
if (0) alert(1);
if (NaN) alert(1);
if (false) alert(1);

// Alerts 100 as b1 is not a primitive value
var b1 = new Boolen(false);
if (b1) alert(100);
