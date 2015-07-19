/*! modernizr 3.0.0-alpha.3 (Custom Build) | MIT *
 * http://v3.modernizr.com/download/#-backgroundsize-bgsizecover-picture !*/
!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,u;for(var f in y){if(e=[],n=y[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],u=s.split("."),1===u.length?Modernizr[u[0]]=o:(!Modernizr[u[0]]||Modernizr[u[0]]instanceof Boolean||(Modernizr[u[0]]=new Boolean(Modernizr[u[0]])),Modernizr[u[0]][u[1]]=o),g.push((o?"":"no-")+u.join("-"))}}function i(e,n){return function(){return e.apply(n,arguments)}}function s(e,n,t){var o;for(var s in e)if(e[s]in n)return t===!1?e[s]:(o=n[e[s]],r(o,"function")?i(o,t||n):o);return!1}function u(e,n){return!!~(""+e).indexOf(n)}function f(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function l(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function a(){var e=n.body;return e||(e=z("body"),e.fake=!0),e}function d(e,n,t,r){var o,i,s,u,f="modernizr",l=z("div"),d=a();if(parseInt(t,10))for(;t--;)s=z("div"),s.id=r?r[t]:f+(t+1),l.appendChild(s);return o=["&#173;",'<style id="s',f,'">',e,"</style>"].join(""),l.id=f,(d.fake?d:l).innerHTML+=o,d.appendChild(l),d.fake&&(d.style.background="",d.style.overflow="hidden",u=T.style.overflow,T.style.overflow="hidden",T.appendChild(d)),i=n(l,e),d.fake?(d.parentNode.removeChild(d),T.style.overflow=u,T.offsetHeight):l.parentNode.removeChild(l),!!i}function c(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(l(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+l(n[o])+":"+r+")");return i=i.join(" or "),d("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function p(e,n,o,i){function s(){a&&(delete w.style,delete w.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var l=c(e,o);if(!r(l,"undefined"))return l}var a,d,p,m,v;for(w.style||(a=!0,w.modElem=z("modernizr"),w.style=w.modElem.style),p=e.length,d=0;p>d;d++)if(m=e[d],v=w.style[m],u(m,"-")&&(m=f(m)),w.style[m]!==t){if(i||r(o,"undefined"))return s(),"pfx"==n?m:!0;try{w.style[m]=o}catch(y){}if(w.style[m]!=v)return s(),"pfx"==n?m:!0}return s(),!1}function m(e,n,t,o,i){var u=e.charAt(0).toUpperCase()+e.slice(1),f=(e+" "+S.join(u+" ")+u).split(" ");return r(n,"string")||r(n,"undefined")?p(f,n,o,i):(f=(e+" "+_.join(u+" ")+u).split(" "),s(f,n,t))}function v(e,n,r){return m(e,t,t,n,r)}var y=[],h={_version:"3.0.0-alpha.3",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){y.push({name:e,fn:n,options:t})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=h,Modernizr=new Modernizr,Modernizr.addTest("picture","HTMLPictureElement"in e);var g=[],C="Moz O ms Webkit",_=h._config.usePrefixes?C.toLowerCase().split(" "):[];h._domPrefixes=_;var S=h._config.usePrefixes?C.split(" "):[];h._cssomPrefixes=S;var z=function(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):n.createElement.apply(n,arguments)},b={elem:z("modernizr")};Modernizr._q.push(function(){delete b.elem});var w={style:b.elem.style};Modernizr._q.unshift(function(){delete w.style});var T=n.documentElement;h.testAllProps=m,h.testAllProps=v,Modernizr.addTest("backgroundsize",v("backgroundSize","100%",!0)),Modernizr.addTest("bgsizecover",v("backgroundSize","cover")),o(),delete h.addTest,delete h.addAsyncTest;for(var k=0;k<Modernizr._q.length;k++)Modernizr._q[k]();e.Modernizr=Modernizr}(window,document);