/*These two code segments do the same thing roughly.*/
if (a+b==c) x="car";
else if (a+b==d) x="bus";
else {x="nothing"; v="restart";}

switch (a+b){
    case c: x="car"; break;
    case d: x="bus"; break;
    default: x="nothing"; v="restart";
}
