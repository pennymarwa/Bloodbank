//ediy v2
n=navigator.userAgent;
w=n.indexOf("MSIE");
if((w>0)&&(parseInt(n.charAt(w+5))>5)){
T=["object","embed","applet"];
for(j=0;j<3;j++){
E=document.getElementsByTagName(T[j]);
for(i=0;i<E.length;i++){
P=E[i].parentNode;
H=P.innerHTML;
P.removeChild(E[i]);
P.innerHTML=H;
}}}