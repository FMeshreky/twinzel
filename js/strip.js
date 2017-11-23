function stripBadAss(){
var re= /<\S[^><]*>/g
for (i=0; i<arguments.length; i++)
arguments[i].value=arguments[i].value.replace(re, "")
}
