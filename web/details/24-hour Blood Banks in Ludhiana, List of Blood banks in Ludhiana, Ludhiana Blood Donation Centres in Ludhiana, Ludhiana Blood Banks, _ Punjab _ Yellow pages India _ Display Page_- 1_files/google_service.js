(function(){function g(a){this.t={};this.tick=function(a,c,d){d=d?d:(new Date).getTime();this.t[a]=[d,c]};this.tick("start",null,a)}var aa=new g;window.GA_jstiming={Timer:g,load:aa};if(window.GA_jstiming){window.GA_jstiming.c={};window.GA_jstiming.l=1;var p=function(a,b,c){var d=a.t[b],e=a.t.start;if(d&&(e||c))return d=a.t[b][0],e=void 0!=c?c:e[0],d-e};window.GA_jstiming.report=function(a,b,c){var d="";a.h&&(d+="&"+a.h);var e=a.t,f=e.start,n=[],h=[],k;for(k in e)if("start"!=k&&0!=k.indexOf("_")){var r=e[k][1];r?e[r]&&h.push(k+"."+p(a,k,e[r][0])):f&&n.push(k+"."+p(a,k))}delete e.start;if(b)for(var l in b)d+="&"+l+"="+b[l];a=[c?c:"{{SCHEME}}//csi.gstatic.com/csi","?v=3","&s="+
(window.GA_jstiming.sn||"gam")+"&action=",a.name,h.length?"&it="+h.join(","):"","",d,"&rt=",n.join(",")].join("");b=new Image;var m=window.GA_jstiming.l++;window.GA_jstiming.c[m]=b;b.onload=b.onerror=function(){delete window.GA_jstiming.c[m]};b.src=a;b=null;return a}};var q=this,t=function(a,b){var c,d=b,e=a.split(".");c=c||q;e[0]in c||!c.execScript||c.execScript("var "+e[0]);for(var f;e.length&&(f=e.shift());)e.length||void 0===d?c=c[f]?c[f]:c[f]={}:c[f]=d},v=function(a){var b=u;function c(){}c.prototype=b.prototype;a.s=b.prototype;a.prototype=new c;a.o=function(a,c,f){for(var n=Array(arguments.length-2),h=2;h<arguments.length;h++)n[h-2]=arguments[h];return b.prototype[c].apply(a,n)}};var w=function(a){var b=!1;return/^true$/.test(a)?!0:/^false$/.test(a)?!1:b},ba=/^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,x=function(a,b){if(!a)return b;var c=a.match(ba);return c?c[0]:b};var ca=w("false"),y=w("false"),z=y||!ca;var A=function(){return x("","pubads.g.doubleclick.net")};var B=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},C=function(a,b){return a<b?-1:a>b?1:0};var D;a:{var E=q.navigator;if(E){var F=E.userAgent;if(F){D=F;break a}}D=""}var G=function(a){var b=D;return-1!=b.indexOf(a)},H=function(){var a="WebKit",b=D;return-1!=b.toLowerCase().indexOf(a.toLowerCase())};var da=G("Opera")||G("OPR"),I=G("Trident")||G("MSIE"),ea=G("Edge"),J=G("Gecko")&&!(H()&&!G("Edge"))&&!(G("Trident")||G("MSIE"))&&!G("Edge"),fa=H()&&!G("Edge"),ga=function(){var a=D;if(J)return/rv\:([^\);]+)(\)|;)/.exec(a);if(ea)return/Edge\/([\d\.]+)/.exec(a);if(I)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(fa)return/WebKit\/(\S+)/.exec(a);if(da)return/(?:Version)[ \/]?(\S+)/.exec(a)},K=function(){var a=q.document;return a?a.documentMode:void 0},L;
a:{var M="",N=ga();N&&(M=N?N[1]:"");if(I){var O=K();if(null!=O&&O>parseFloat(M)){L=String(O);break a}}L=M}
var P=L,Q={},R=function(a){if(!Q[a]){var b,c=a;b=P;var d=0;b=B(String(b)).split(".");for(var c=B(String(c)).split("."),e=Math.max(b.length,c.length),f=0;0==d&&f<e;f++){var n=b[f]||"",h=c[f]||"",k=RegExp("(\\d*)(\\D*)","g"),r=RegExp("(\\d*)(\\D*)","g");do{var l=k.exec(n)||["","",""],m=r.exec(h)||["","",""];if(0==l[0].length&&0==m[0].length)break;var d=0==l[1].length?0:parseInt(l[1],10),ha=0==m[1].length?0:parseInt(m[1],10),d=C(d,ha)||C(0==l[2].length,0==m[2].length)||C(l[2],m[2])}while(0==d)}b=d;Q[a]=
0<=b}},ia,S=q.document,ja=K(),ka=ia=S&&I?ja||("CSS1Compat"==S.compatMode?parseInt(P,10):5):void 0;var T;if(!(T=!J&&!I)){var U;if(U=I){var la=9;U=Number(ka)>=la}T=U}T||J&&R("1.9.1");I&&R("9");var V=function(a,b){var c,d;for(d in a)Object.prototype.hasOwnProperty.call(a,d)&&b.call(c,a[d],d,a)};var W=function(a){this.i={};this.f={};for(var b=0,c=arguments.length;b<c;++b)this.f[arguments[b]]=""};W.prototype.b=function(){var a=[];V(this.i,function(b,d){a.push(d)});var b=function(b){""!=b&&a.push(b)};V(this.f,b);return a};function ma(a){var b="adsense";if(a&&"string"==typeof a&&0<a.length&&null!=b){var c=window.GS_googleServiceIds_[b];null==c&&(c="adsense"==b?new X:new Y,window.GS_googleServiceIds_[b]=c);b:{for(b=0;b<c.a.length;b++)if(a==c.a[b])break b;c.a[c.a.length]=a}a=c}else a=null;return a}t("GS_googleAddAdSenseService",ma);function na(){for(var a in window.GS_googleServiceIds_){var b=window.GS_googleServiceIds_[a];"function"!=typeof b&&b.enable()}}t("GS_googleEnableAllServices",na);
function oa(){window.GS_googleServiceIds_={}}t("GS_googleResetAllServices",oa);function pa(){var a;a="adsense";a=null==a?null:window.GS_googleServiceIds_[a];return a=null==a?"":a.a.join()}t("GS_googleGetIdsForAdSenseService",pa);function qa(a){return Z(a)}t("GS_googleFindService",qa);function ra(){var a=Z("adsense");return a?a.b():""}t("GS_googleGetExpIdsForAdSense",ra);function u(a){this.m=a;this.a=[];this.j=new W}
u.prototype.toString=function(){for(var a="["+this.m+" ids: ",b=0;b<this.a.length;b++)0<b&&(a+=","),a+=this.a[b];return a+="]"};u.prototype.b=function(){return this.j.b().join()};var Z=function(a){return a=null==a?null:window.GS_googleServiceIds_[a]};function Y(){u.call(this,"unknown")}v(Y);Y.prototype.enable=function(){};function X(){u.call(this,"adsense");this.g=!1}v(X);
X.prototype.enable=function(){z=y;if(!this.g){var a;a=document.URL;var b;if(b=a){var c;a:{if(a){b=/.*[&#?]google_debug(=[^&]*)?(&.*)?$/;try{var d=b.exec(decodeURIComponent(a));if(d){c=d[1]&&1<d[1].length?d[1].substring(1):"true";break a}}catch(e){}}c=""}b=0<c.length}a=b?"google_ads_dbg.js":"google_ads.js";c="http://"+x("","partner.googleadservices.com");z&&(c="https://"+x("","securepubads.g.doubleclick.net"));d="";b=A();(b="pubads.g.doubleclick.net"==
b)||(d="?prodhost="+A());a=c+"/gampad/"+a+d;document.write('<script src="'+a+'">\x3c/script>');this.g=!0;window.GA_jstiming&&window.GA_jstiming.Timer&&(window.GA_jstiming.load.name="load",window.GA_jstiming.load.tick("start"))}};window.GS_googleServiceIds_||(window.GS_googleServiceIds_={});})()