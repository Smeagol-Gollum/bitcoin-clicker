<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link rel="icon" type="image/png" href="favicon.png" />

<title>Bitcoin Clicker</title>

<script>
var has_gaq = false;
var has_loggly = false;

(function(e,t){var n,r,i=typeof t,o=e.location,a=e.document,s=a.documentElement,l=e.jQuery,u=e.$,c={},p=[],f="1.10.2",d=p.concat,h=p.push,g=p.slice,m=p.indexOf,y=c.toString,v=c.hasOwnProperty,b=f.trim,x=function(e,t){return new x.fn.init(e,t,r)},w=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,T=/\S+/g,C=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,N=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,k=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,E=/^[\],:{}\s]*$/,S=/(?:^|:|,)(?:\s*\[)+/g,A=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,j=/"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,D=/^-ms-/,L=/-([\da-z])/gi,H=function(e,t){return t.toUpperCase()},q=function(e){(a.addEventListener||"load"===e.type||"complete"===a.readyState)&&(_(),x.ready())},_=function(){a.addEventListener?(a.removeEventListener("DOMContentLoaded",q,!1),e.removeEventListener("load",q,!1)):(a.detachEvent("onreadystatechange",q),e.detachEvent("onload",q))};x.fn=x.prototype={jquery:f,constructor:x,init:function(e,n,r){var i,o;if(!e)return this;if("string"==typeof e){if(i="<"===e.charAt(0)&&">"===e.charAt(e.length-1)&&e.length>=3?[null,e,null]:N.exec(e),!i||!i[1]&&n)return!n||n.jquery?(n||r).find(e):this.constructor(n).find(e);if(i[1]){if(n=n instanceof x?n[0]:n,x.merge(this,x.parseHTML(i[1],n&&n.nodeType?n.ownerDocument||n:a,!0)),k.test(i[1])&&x.isPlainObject(n))for(i in n)x.isFunction(this[i])?this[i](n[i]):this.attr(i,n[i]);return this}if(o=a.getElementById(i[2]),o&&o.parentNode){if(o.id!==i[2])return r.find(e);this.length=1,this[0]=o}return this.context=a,this.selector=e,this}return e.nodeType?(this.context=this[0]=e,this.length=1,this):x.isFunction(e)?r.ready(e):(e.selector!==t&&(this.selector=e.selector,this.context=e.context),x.makeArray(e,this))},selector:"",length:0,toArray:function(){return g.call(this)},get:function(e){return null==e?this.toArray():0>e?this[this.length+e]:this[e]},pushStack:function(e){var t=x.merge(this.constructor(),e);return t.prevObject=this,t.context=this.context,t},each:function(e,t){return x.each(this,e,t)},ready:function(e){return x.ready.promise().done(e),this},slice:function(){return this.pushStack(g.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(0>e?t:0);return this.pushStack(n>=0&&t>n?[this[n]]:[])},map:function(e){return this.pushStack(x.map(this,function(t,n){return e.call(t,n,t)}))},end:function(){return this.prevObject||this.constructor(null)},push:h,sort:[].sort,splice:[].splice},x.fn.init.prototype=x.fn,x.extend=x.fn.extend=function(){var e,n,r,i,o,a,s=arguments[0]||{},l=1,u=arguments.length,c=!1;for("boolean"==typeof s&&(c=s,s=arguments[1]||{},l=2),"object"==typeof s||x.isFunction(s)||(s={}),u===l&&(s=this,--l);u>l;l++)if(null!=(o=arguments[l]))for(i in o)e=s[i],r=o[i],s!==r&&(c&&r&&(x.isPlainObject(r)||(n=x.isArray(r)))?(n?(n=!1,a=e&&x.isArray(e)?e:[]):a=e&&x.isPlainObject(e)?e:{},s[i]=x.extend(c,a,r)):r!==t&&(s[i]=r));return s},x.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),noConflict:function(t){return e.$===x&&(e.$=u),t&&e.jQuery===x&&(e.jQuery=l),x},isReady:!1,readyWait:1,holdReady:function(e){e?x.readyWait++:x.ready(!0)},ready:function(e){if(e===!0?!--x.readyWait:!x.isReady){if(!a.body)return setTimeout(x.ready);x.isReady=!0,e!==!0&&--x.readyWait>0||(n.resolveWith(a,[x]),x.fn.trigger&&x(a).trigger("ready").off("ready"))}},isFunction:function(e){return"function"===x.type(e)},isArray:Array.isArray||function(e){return"array"===x.type(e)},isWindow:function(e){return null!=e&&e==e.window},isNumeric:function(e){return!isNaN(parseFloat(e))&&isFinite(e)},type:function(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?c[y.call(e)]||"object":typeof e},isPlainObject:function(e){var n;if(!e||"object"!==x.type(e)||e.nodeType||x.isWindow(e))return!1;try{if(e.constructor&&!v.call(e,"constructor")&&!v.call(e.constructor.prototype,"isPrototypeOf"))return!1}catch(r){return!1}if(x.support.ownLast)for(n in e)return v.call(e,n);for(n in e);return n===t||v.call(e,n)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},error:function(e){throw Error(e)},parseHTML:function(e,t,n){if(!e||"string"!=typeof e)return null;"boolean"==typeof t&&(n=t,t=!1),t=t||a;var r=k.exec(e),i=!n&&[];return r?[t.createElement(r[1])]:(r=x.buildFragment([e],t,i),i&&x(i).remove(),x.merge([],r.childNodes))},parseJSON:function(n){return e.JSON&&e.JSON.parse?e.JSON.parse(n):null===n?n:"string"==typeof n&&(n=x.trim(n),n&&E.test(n.replace(A,"@").replace(j,"]").replace(S,"")))?Function("return "+n)():(x.error("Invalid JSON: "+n),t)},parseXML:function(n){var r,i;if(!n||"string"!=typeof n)return null;try{e.DOMParser?(i=new DOMParser,r=i.parseFromString(n,"text/xml")):(r=new ActiveXObject("Microsoft.XMLDOM"),r.async="false",r.loadXML(n))}catch(o){r=t}return r&&r.documentElement&&!r.getElementsByTagName("parsererror").length||x.error("Invalid XML: "+n),r},noop:function(){},globalEval:function(t){t&&x.trim(t)&&(e.execScript||function(t){e.eval.call(e,t)})(t)},camelCase:function(e){return e.replace(D,"ms-").replace(L,H)},nodeName:function(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()},each:function(e,t,n){var r,i=0,o=e.length,a=M(e);if(n){if(a){for(;o>i;i++)if(r=t.apply(e[i],n),r===!1)break}else for(i in e)if(r=t.apply(e[i],n),r===!1)break}else if(a){for(;o>i;i++)if(r=t.call(e[i],i,e[i]),r===!1)break}else for(i in e)if(r=t.call(e[i],i,e[i]),r===!1)break;return e},trim:b&&!b.call("\ufeff\u00a0")?function(e){return null==e?"":b.call(e)}:function(e){return null==e?"":(e+"").replace(C,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(M(Object(e))?x.merge(n,"string"==typeof e?[e]:e):h.call(n,e)),n},inArray:function(e,t,n){var r;if(t){if(m)return m.call(t,e,n);for(r=t.length,n=n?0>n?Math.max(0,r+n):n:0;r>n;n++)if(n in t&&t[n]===e)return n}return-1},merge:function(e,n){var r=n.length,i=e.length,o=0;if("number"==typeof r)for(;r>o;o++)e[i++]=n[o];else while(n[o]!==t)e[i++]=n[o++];return e.length=i,e},grep:function(e,t,n){var r,i=[],o=0,a=e.length;for(n=!!n;a>o;o++)r=!!t(e[o],o),n!==r&&i.push(e[o]);return i},map:function(e,t,n){var r,i=0,o=e.length,a=M(e),s=[];if(a)for(;o>i;i++)r=t(e[i],i,n),null!=r&&(s[s.length]=r);else for(i in e)r=t(e[i],i,n),null!=r&&(s[s.length]=r);return d.apply([],s)},guid:1,proxy:function(e,n){var r,i,o;return"string"==typeof n&&(o=e[n],n=e,e=o),x.isFunction(e)?(r=g.call(arguments,2),i=function(){return e.apply(n||this,r.concat(g.call(arguments)))},i.guid=e.guid=e.guid||x.guid++,i):t},access:function(e,n,r,i,o,a,s){var l=0,u=e.length,c=null==r;if("object"===x.type(r)){o=!0;for(l in r)x.access(e,n,l,r[l],!0,a,s)}else if(i!==t&&(o=!0,x.isFunction(i)||(s=!0),c&&(s?(n.call(e,i),n=null):(c=n,n=function(e,t,n){return c.call(x(e),n)})),n))for(;u>l;l++)n(e[l],r,s?i:i.call(e[l],l,n(e[l],r)));return o?e:c?n.call(e):u?n(e[0],r):a},now:function(){return(new Date).getTime()},swap:function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];i=n.apply(e,r||[]);for(o in t)e.style[o]=a[o];return i}}),x.ready.promise=function(t){if(!n)if(n=x.Deferred(),"complete"===a.readyState)setTimeout(x.ready);else if(a.addEventListener)a.addEventListener("DOMContentLoaded",q,!1),e.addEventListener("load",q,!1);else{a.attachEvent("onreadystatechange",q),e.attachEvent("onload",q);var r=!1;try{r=null==e.frameElement&&a.documentElement}catch(i){}r&&r.doScroll&&function o(){if(!x.isReady){try{r.doScroll("left")}catch(e){return setTimeout(o,50)}_(),x.ready()}}()}return n.promise(t)},x.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(e,t){c["[object "+t+"]"]=t.toLowerCase()});function M(e){var t=e.length,n=x.type(e);return x.isWindow(e)?!1:1===e.nodeType&&t?!0:"array"===n||"function"!==n&&(0===t||"number"==typeof t&&t>0&&t-1 in e)}r=x(a),function(e,t){var n,r,i,o,a,s,l,u,c,p,f,d,h,g,m,y,v,b="sizzle"+-new Date,w=e.document,T=0,C=0,N=st(),k=st(),E=st(),S=!1,A=function(e,t){return e===t?(S=!0,0):0},j=typeof t,D=1<<31,L={}.hasOwnProperty,H=[],q=H.pop,_=H.push,M=H.push,O=H.slice,F=H.indexOf||function(e){var t=0,n=this.length;for(;n>t;t++)if(this[t]===e)return t;return-1},B="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",P="[\\x20\\t\\r\\n\\f]",R="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",W=R.replace("w","w#"),$="\\["+P+"*("+R+")"+P+"*(?:([*^$|!~]?=)"+P+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+W+")|)|)"+P+"*\\]",I=":("+R+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+$.replace(3,8)+")*)|.*)\\)|)",z=RegExp("^"+P+"+|((?:^|[^\\\\])(?:\\\\.)*)"+P+"+$","g"),X=RegExp("^"+P+"*,"+P+"*"),U=RegExp("^"+P+"*([>+~]|"+P+")"+P+"*"),V=RegExp(P+"*[+~]"),Y=RegExp("="+P+"*([^\\]'\"]*)"+P+"*\\]","g"),J=RegExp(I),G=RegExp("^"+W+"$"),Q={ID:RegExp("^#("+R+")"),CLASS:RegExp("^\\.("+R+")"),TAG:RegExp("^("+R.replace("w","w*")+")"),ATTR:RegExp("^"+$),PSEUDO:RegExp("^"+I),CHILD:RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+P+"*(even|odd|(([+-]|)(\\d*)n|)"+P+"*(?:([+-]|)"+P+"*(\\d+)|))"+P+"*\\)|)","i"),bool:RegExp("^(?:"+B+")$","i"),needsContext:RegExp("^"+P+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+P+"*((?:-\\d)?\\d*)"+P+"*\\)|)(?=[^-]|$)","i")},K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,et=/^(?:input|select|textarea|button)$/i,tt=/^h\d$/i,nt=/'|\\/g,rt=RegExp("\\\\([\\da-f]{1,6}"+P+"?|("+P+")|.)","ig"),it=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:0>r?String.fromCharCode(r+65536):String.fromCharCode(55296|r>>10,56320|1023&r)};try{M.apply(H=O.call(w.childNodes),w.childNodes),H[w.childNodes.length].nodeType}catch(ot){M={apply:H.length?function(e,t){_.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function at(e,t,n,i){var o,a,s,l,u,c,d,m,y,x;if((t?t.ownerDocument||t:w)!==f&&p(t),t=t||f,n=n||[],!e||"string"!=typeof e)return n;if(1!==(l=t.nodeType)&&9!==l)return[];if(h&&!i){if(o=Z.exec(e))if(s=o[1]){if(9===l){if(a=t.getElementById(s),!a||!a.parentNode)return n;if(a.id===s)return n.push(a),n}else if(t.ownerDocument&&(a=t.ownerDocument.getElementById(s))&&v(t,a)&&a.id===s)return n.push(a),n}else{if(o[2])return M.apply(n,t.getElementsByTagName(e)),n;if((s=o[3])&&r.getElementsByClassName&&t.getElementsByClassName)return M.apply(n,t.getElementsByClassName(s)),n}if(r.qsa&&(!g||!g.test(e))){if(m=d=b,y=t,x=9===l&&e,1===l&&"object"!==t.nodeName.toLowerCase()){c=mt(e),(d=t.getAttribute("id"))?m=d.replace(nt,"\\$&"):t.setAttribute("id",m),m="[id='"+m+"'] ",u=c.length;while(u--)c[u]=m+yt(c[u]);y=V.test(e)&&t.parentNode||t,x=c.join(",")}if(x)try{return M.apply(n,y.querySelectorAll(x)),n}catch(T){}finally{d||t.removeAttribute("id")}}}return kt(e.replace(z,"$1"),t,n,i)}function st(){var e=[];function t(n,r){return e.push(n+=" ")>o.cacheLength&&delete t[e.shift()],t[n]=r}return t}function lt(e){return e[b]=!0,e}function ut(e){var t=f.createElement("div");try{return!!e(t)}catch(n){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function ct(e,t){var n=e.split("|"),r=e.length;while(r--)o.attrHandle[n[r]]=t}function pt(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&(~t.sourceIndex||D)-(~e.sourceIndex||D);if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function ft(e){return function(t){var n=t.nodeName.toLowerCase();return"input"===n&&t.type===e}}function dt(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function ht(e){return lt(function(t){return t=+t,lt(function(n,r){var i,o=e([],n.length,t),a=o.length;while(a--)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))})})}s=at.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?"HTML"!==t.nodeName:!1},r=at.support={},p=at.setDocument=function(e){var n=e?e.ownerDocument||e:w,i=n.defaultView;return n!==f&&9===n.nodeType&&n.documentElement?(f=n,d=n.documentElement,h=!s(n),i&&i.attachEvent&&i!==i.top&&i.attachEvent("onbeforeunload",function(){p()}),r.attributes=ut(function(e){return e.className="i",!e.getAttribute("className")}),r.getElementsByTagName=ut(function(e){return e.appendChild(n.createComment("")),!e.getElementsByTagName("*").length}),r.getElementsByClassName=ut(function(e){return e.innerHTML="<div class='a'></div><div class='a i'></div>",e.firstChild.className="i",2===e.getElementsByClassName("i").length}),r.getById=ut(function(e){return d.appendChild(e).id=b,!n.getElementsByName||!n.getElementsByName(b).length}),r.getById?(o.find.ID=function(e,t){if(typeof t.getElementById!==j&&h){var n=t.getElementById(e);return n&&n.parentNode?[n]:[]}},o.filter.ID=function(e){var t=e.replace(rt,it);return function(e){return e.getAttribute("id")===t}}):(delete o.find.ID,o.filter.ID=function(e){var t=e.replace(rt,it);return function(e){var n=typeof e.getAttributeNode!==j&&e.getAttributeNode("id");return n&&n.value===t}}),o.find.TAG=r.getElementsByTagName?function(e,n){return typeof n.getElementsByTagName!==j?n.getElementsByTagName(e):t}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},o.find.CLASS=r.getElementsByClassName&&function(e,n){return typeof n.getElementsByClassName!==j&&h?n.getElementsByClassName(e):t},m=[],g=[],(r.qsa=K.test(n.querySelectorAll))&&(ut(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||g.push("\\["+P+"*(?:value|"+B+")"),e.querySelectorAll(":checked").length||g.push(":checked")}),ut(function(e){var t=n.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("t",""),e.querySelectorAll("[t^='']").length&&g.push("[*^$]="+P+"*(?:''|\"\")"),e.querySelectorAll(":enabled").length||g.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),g.push(",.*:")})),(r.matchesSelector=K.test(y=d.webkitMatchesSelector||d.mozMatchesSelector||d.oMatchesSelector||d.msMatchesSelector))&&ut(function(e){r.disconnectedMatch=y.call(e,"div"),y.call(e,"[s!='']:x"),m.push("!=",I)}),g=g.length&&RegExp(g.join("|")),m=m.length&&RegExp(m.join("|")),v=K.test(d.contains)||d.compareDocumentPosition?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},A=d.compareDocumentPosition?function(e,t){if(e===t)return S=!0,0;var i=t.compareDocumentPosition&&e.compareDocumentPosition&&e.compareDocumentPosition(t);return i?1&i||!r.sortDetached&&t.compareDocumentPosition(e)===i?e===n||v(w,e)?-1:t===n||v(w,t)?1:c?F.call(c,e)-F.call(c,t):0:4&i?-1:1:e.compareDocumentPosition?-1:1}:function(e,t){var r,i=0,o=e.parentNode,a=t.parentNode,s=[e],l=[t];if(e===t)return S=!0,0;if(!o||!a)return e===n?-1:t===n?1:o?-1:a?1:c?F.call(c,e)-F.call(c,t):0;if(o===a)return pt(e,t);r=e;while(r=r.parentNode)s.unshift(r);r=t;while(r=r.parentNode)l.unshift(r);while(s[i]===l[i])i++;return i?pt(s[i],l[i]):s[i]===w?-1:l[i]===w?1:0},n):f},at.matches=function(e,t){return at(e,null,null,t)},at.matchesSelector=function(e,t){if((e.ownerDocument||e)!==f&&p(e),t=t.replace(Y,"='$1']"),!(!r.matchesSelector||!h||m&&m.test(t)||g&&g.test(t)))try{var n=y.call(e,t);if(n||r.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(i){}return at(t,f,null,[e]).length>0},at.contains=function(e,t){return(e.ownerDocument||e)!==f&&p(e),v(e,t)},at.attr=function(e,n){(e.ownerDocument||e)!==f&&p(e);var i=o.attrHandle[n.toLowerCase()],a=i&&L.call(o.attrHandle,n.toLowerCase())?i(e,n,!h):t;return a===t?r.attributes||!h?e.getAttribute(n):(a=e.getAttributeNode(n))&&a.specified?a.value:null:a},at.error=function(e){throw Error("Syntax error, unrecognized expression: "+e)},at.uniqueSort=function(e){var t,n=[],i=0,o=0;if(S=!r.detectDuplicates,c=!r.sortStable&&e.slice(0),e.sort(A),S){while(t=e[o++])t===e[o]&&(i=n.push(o));while(i--)e.splice(n[i],1)}return e},a=at.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=a(e)}else if(3===i||4===i)return e.nodeValue}else for(;t=e[r];r++)n+=a(t);return n},o=at.selectors={cacheLength:50,createPseudo:lt,match:Q,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(rt,it),e[3]=(e[4]||e[5]||"").replace(rt,it),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||at.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&at.error(e[0]),e},PSEUDO:function(e){var n,r=!e[5]&&e[2];return Q.CHILD.test(e[0])?null:(e[3]&&e[4]!==t?e[2]=e[4]:r&&J.test(r)&&(n=mt(r,!0))&&(n=r.indexOf(")",r.length-n)-r.length)&&(e[0]=e[0].slice(0,n),e[2]=r.slice(0,n)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(rt,it).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=N[e+" "];return t||(t=RegExp("(^|"+P+")"+e+"("+P+"|$)"))&&N(e,function(e){return t.test("string"==typeof e.className&&e.className||typeof e.getAttribute!==j&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r){var i=at.attr(r,e);return null==i?"!="===t:t?(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i+" ").indexOf(n)>-1:"|="===t?i===n||i.slice(0,n.length+1)===n+"-":!1):!0}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,l){var u,c,p,f,d,h,g=o!==a?"nextSibling":"previousSibling",m=t.parentNode,y=s&&t.nodeName.toLowerCase(),v=!l&&!s;if(m){if(o){while(g){p=t;while(p=p[g])if(s?p.nodeName.toLowerCase()===y:1===p.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?m.firstChild:m.lastChild],a&&v){c=m[b]||(m[b]={}),u=c[e]||[],d=u[0]===T&&u[1],f=u[0]===T&&u[2],p=d&&m.childNodes[d];while(p=++d&&p&&p[g]||(f=d=0)||h.pop())if(1===p.nodeType&&++f&&p===t){c[e]=[T,d,f];break}}else if(v&&(u=(t[b]||(t[b]={}))[e])&&u[0]===T)f=u[1];else while(p=++d&&p&&p[g]||(f=d=0)||h.pop())if((s?p.nodeName.toLowerCase()===y:1===p.nodeType)&&++f&&(v&&((p[b]||(p[b]={}))[e]=[T,f]),p===t))break;return f-=i,f===r||0===f%r&&f/r>=0}}},PSEUDO:function(e,t){var n,r=o.pseudos[e]||o.setFilters[e.toLowerCase()]||at.error("unsupported pseudo: "+e);return r[b]?r(t):r.length>1?(n=[e,e,"",t],o.setFilters.hasOwnProperty(e.toLowerCase())?lt(function(e,n){var i,o=r(e,t),a=o.length;while(a--)i=F.call(e,o[a]),e[i]=!(n[i]=o[a])}):function(e){return r(e,0,n)}):r}},pseudos:{not:lt(function(e){var t=[],n=[],r=l(e.replace(z,"$1"));return r[b]?lt(function(e,t,n,i){var o,a=r(e,null,i,[]),s=e.length;while(s--)(o=a[s])&&(e[s]=!(t[s]=o))}):function(e,i,o){return t[0]=e,r(t,null,o,n),!n.pop()}}),has:lt(function(e){return function(t){return at(e,t).length>0}}),contains:lt(function(e){return function(t){return(t.textContent||t.innerText||a(t)).indexOf(e)>-1}}),lang:lt(function(e){return G.test(e||"")||at.error("unsupported lang: "+e),e=e.replace(rt,it).toLowerCase(),function(t){var n;do if(n=h?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return n=n.toLowerCase(),n===e||0===n.indexOf(e+"-");while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===d},focus:function(e){return e===f.activeElement&&(!f.hasFocus||f.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeName>"@"||3===e.nodeType||4===e.nodeType)return!1;return!0},parent:function(e){return!o.pseudos.empty(e)},header:function(e){return tt.test(e.nodeName)},input:function(e){return et.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||t.toLowerCase()===e.type)},first:ht(function(){return[0]}),last:ht(function(e,t){return[t-1]}),eq:ht(function(e,t,n){return[0>n?n+t:n]}),even:ht(function(e,t){var n=0;for(;t>n;n+=2)e.push(n);return e}),odd:ht(function(e,t){var n=1;for(;t>n;n+=2)e.push(n);return e}),lt:ht(function(e,t,n){var r=0>n?n+t:n;for(;--r>=0;)e.push(r);return e}),gt:ht(function(e,t,n){var r=0>n?n+t:n;for(;t>++r;)e.push(r);return e})}},o.pseudos.nth=o.pseudos.eq;for(n in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})o.pseudos[n]=ft(n);for(n in{submit:!0,reset:!0})o.pseudos[n]=dt(n);function gt(){}gt.prototype=o.filters=o.pseudos,o.setFilters=new gt;function mt(e,t){var n,r,i,a,s,l,u,c=k[e+" "];if(c)return t?0:c.slice(0);s=e,l=[],u=o.preFilter;while(s){(!n||(r=X.exec(s)))&&(r&&(s=s.slice(r[0].length)||s),l.push(i=[])),n=!1,(r=U.exec(s))&&(n=r.shift(),i.push({value:n,type:r[0].replace(z," ")}),s=s.slice(n.length));for(a in o.filter)!(r=Q[a].exec(s))||u[a]&&!(r=u[a](r))||(n=r.shift(),i.push({value:n,type:a,matches:r}),s=s.slice(n.length));if(!n)break}return t?s.length:s?at.error(e):k(e,l).slice(0)}function yt(e){var t=0,n=e.length,r="";for(;n>t;t++)r+=e[t].value;return r}function vt(e,t,n){var r=t.dir,o=n&&"parentNode"===r,a=C++;return t.first?function(t,n,i){while(t=t[r])if(1===t.nodeType||o)return e(t,n,i)}:function(t,n,s){var l,u,c,p=T+" "+a;if(s){while(t=t[r])if((1===t.nodeType||o)&&e(t,n,s))return!0}else while(t=t[r])if(1===t.nodeType||o)if(c=t[b]||(t[b]={}),(u=c[r])&&u[0]===p){if((l=u[1])===!0||l===i)return l===!0}else if(u=c[r]=[p],u[1]=e(t,n,s)||i,u[1]===!0)return!0}}function bt(e){return e.length>1?function(t,n,r){var i=e.length;while(i--)if(!e[i](t,n,r))return!1;return!0}:e[0]}function xt(e,t,n,r,i){var o,a=[],s=0,l=e.length,u=null!=t;for(;l>s;s++)(o=e[s])&&(!n||n(o,r,i))&&(a.push(o),u&&t.push(s));return a}function wt(e,t,n,r,i,o){return r&&!r[b]&&(r=wt(r)),i&&!i[b]&&(i=wt(i,o)),lt(function(o,a,s,l){var u,c,p,f=[],d=[],h=a.length,g=o||Nt(t||"*",s.nodeType?[s]:s,[]),m=!e||!o&&t?g:xt(g,f,e,s,l),y=n?i||(o?e:h||r)?[]:a:m;if(n&&n(m,y,s,l),r){u=xt(y,d),r(u,[],s,l),c=u.length;while(c--)(p=u[c])&&(y[d[c]]=!(m[d[c]]=p))}if(o){if(i||e){if(i){u=[],c=y.length;while(c--)(p=y[c])&&u.push(m[c]=p);i(null,y=[],u,l)}c=y.length;while(c--)(p=y[c])&&(u=i?F.call(o,p):f[c])>-1&&(o[u]=!(a[u]=p))}}else y=xt(y===a?y.splice(h,y.length):y),i?i(null,a,y,l):M.apply(a,y)})}function Tt(e){var t,n,r,i=e.length,a=o.relative[e[0].type],s=a||o.relative[" "],l=a?1:0,c=vt(function(e){return e===t},s,!0),p=vt(function(e){return F.call(t,e)>-1},s,!0),f=[function(e,n,r){return!a&&(r||n!==u)||((t=n).nodeType?c(e,n,r):p(e,n,r))}];for(;i>l;l++)if(n=o.relative[e[l].type])f=[vt(bt(f),n)];else{if(n=o.filter[e[l].type].apply(null,e[l].matches),n[b]){for(r=++l;i>r;r++)if(o.relative[e[r].type])break;return wt(l>1&&bt(f),l>1&&yt(e.slice(0,l-1).concat({value:" "===e[l-2].type?"*":""})).replace(z,"$1"),n,r>l&&Tt(e.slice(l,r)),i>r&&Tt(e=e.slice(r)),i>r&&yt(e))}f.push(n)}return bt(f)}function Ct(e,t){var n=0,r=t.length>0,a=e.length>0,s=function(s,l,c,p,d){var h,g,m,y=[],v=0,b="0",x=s&&[],w=null!=d,C=u,N=s||a&&o.find.TAG("*",d&&l.parentNode||l),k=T+=null==C?1:Math.random()||.1;for(w&&(u=l!==f&&l,i=n);null!=(h=N[b]);b++){if(a&&h){g=0;while(m=e[g++])if(m(h,l,c)){p.push(h);break}w&&(T=k,i=++n)}r&&((h=!m&&h)&&v--,s&&x.push(h))}if(v+=b,r&&b!==v){g=0;while(m=t[g++])m(x,y,l,c);if(s){if(v>0)while(b--)x[b]||y[b]||(y[b]=q.call(p));y=xt(y)}M.apply(p,y),w&&!s&&y.length>0&&v+t.length>1&&at.uniqueSort(p)}return w&&(T=k,u=C),x};return r?lt(s):s}l=at.compile=function(e,t){var n,r=[],i=[],o=E[e+" "];if(!o){t||(t=mt(e)),n=t.length;while(n--)o=Tt(t[n]),o[b]?r.push(o):i.push(o);o=E(e,Ct(i,r))}return o};function Nt(e,t,n){var r=0,i=t.length;for(;i>r;r++)at(e,t[r],n);return n}function kt(e,t,n,i){var a,s,u,c,p,f=mt(e);if(!i&&1===f.length){if(s=f[0]=f[0].slice(0),s.length>2&&"ID"===(u=s[0]).type&&r.getById&&9===t.nodeType&&h&&o.relative[s[1].type]){if(t=(o.find.ID(u.matches[0].replace(rt,it),t)||[])[0],!t)return n;e=e.slice(s.shift().value.length)}a=Q.needsContext.test(e)?0:s.length;while(a--){if(u=s[a],o.relative[c=u.type])break;if((p=o.find[c])&&(i=p(u.matches[0].replace(rt,it),V.test(s[0].type)&&t.parentNode||t))){if(s.splice(a,1),e=i.length&&yt(s),!e)return M.apply(n,i),n;break}}}return l(e,f)(i,t,!h,n,V.test(e)),n}r.sortStable=b.split("").sort(A).join("")===b,r.detectDuplicates=S,p(),r.sortDetached=ut(function(e){return 1&e.compareDocumentPosition(f.createElement("div"))}),ut(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||ct("type|href|height|width",function(e,n,r){return r?t:e.getAttribute(n,"type"===n.toLowerCase()?1:2)}),r.attributes&&ut(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||ct("value",function(e,n,r){return r||"input"!==e.nodeName.toLowerCase()?t:e.defaultValue}),ut(function(e){return null==e.getAttribute("disabled")})||ct(B,function(e,n,r){var i;return r?t:(i=e.getAttributeNode(n))&&i.specified?i.value:e[n]===!0?n.toLowerCase():null}),x.find=at,x.expr=at.selectors,x.expr[":"]=x.expr.pseudos,x.unique=at.uniqueSort,x.text=at.getText,x.isXMLDoc=at.isXML,x.contains=at.contains}(e);var O={};function F(e){var t=O[e]={};return x.each(e.match(T)||[],function(e,n){t[n]=!0}),t}x.Callbacks=function(e){e="string"==typeof e?O[e]||F(e):x.extend({},e);var n,r,i,o,a,s,l=[],u=!e.once&&[],c=function(t){for(r=e.memory&&t,i=!0,a=s||0,s=0,o=l.length,n=!0;l&&o>a;a++)if(l[a].apply(t[0],t[1])===!1&&e.stopOnFalse){r=!1;break}n=!1,l&&(u?u.length&&c(u.shift()):r?l=[]:p.disable())},p={add:function(){if(l){var t=l.length;(function i(t){x.each(t,function(t,n){var r=x.type(n);"function"===r?e.unique&&p.has(n)||l.push(n):n&&n.length&&"string"!==r&&i(n)})})(arguments),n?o=l.length:r&&(s=t,c(r))}return this},remove:function(){return l&&x.each(arguments,function(e,t){var r;while((r=x.inArray(t,l,r))>-1)l.splice(r,1),n&&(o>=r&&o--,a>=r&&a--)}),this},has:function(e){return e?x.inArray(e,l)>-1:!(!l||!l.length)},empty:function(){return l=[],o=0,this},disable:function(){return l=u=r=t,this},disabled:function(){return!l},lock:function(){return u=t,r||p.disable(),this},locked:function(){return!u},fireWith:function(e,t){return!l||i&&!u||(t=t||[],t=[e,t.slice?t.slice():t],n?u.push(t):c(t)),this},fire:function(){return p.fireWith(this,arguments),this},fired:function(){return!!i}};return p},x.extend({Deferred:function(e){var t=[["resolve","done",x.Callbacks("once memory"),"resolved"],["reject","fail",x.Callbacks("once memory"),"rejected"],["notify","progress",x.Callbacks("memory")]],n="pending",r={state:function(){return n},always:function(){return i.done(arguments).fail(arguments),this},then:function(){var e=arguments;return x.Deferred(function(n){x.each(t,function(t,o){var a=o[0],s=x.isFunction(e[t])&&e[t];i[o[1]](function(){var e=s&&s.apply(this,arguments);e&&x.isFunction(e.promise)?e.promise().done(n.resolve).fail(n.reject).progress(n.notify):n[a+"With"](this===r?n.promise():this,s?[e]:arguments)})}),e=null}).promise()},promise:function(e){return null!=e?x.extend(e,r):r}},i={};return r.pipe=r.then,x.each(t,function(e,o){var a=o[2],s=o[3];r[o[1]]=a.add,s&&a.add(function(){n=s},t[1^e][2].disable,t[2][2].lock),i[o[0]]=function(){return i[o[0]+"With"](this===i?r:this,arguments),this},i[o[0]+"With"]=a.fireWith}),r.promise(i),e&&e.call(i,i),i},when:function(e){var t=0,n=g.call(arguments),r=n.length,i=1!==r||e&&x.isFunction(e.promise)?r:0,o=1===i?e:x.Deferred(),a=function(e,t,n){return function(r){t[e]=this,n[e]=arguments.length>1?g.call(arguments):r,n===s?o.notifyWith(t,n):--i||o.resolveWith(t,n)}},s,l,u;if(r>1)for(s=Array(r),l=Array(r),u=Array(r);r>t;t++)n[t]&&x.isFunction(n[t].promise)?n[t].promise().done(a(t,u,n)).fail(o.reject).progress(a(t,l,s)):--i;return i||o.resolveWith(u,n),o.promise()}}),x.support=function(t){var n,r,o,s,l,u,c,p,f,d=a.createElement("div");if(d.setAttribute("className","t"),d.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",n=d.getElementsByTagName("*")||[],r=d.getElementsByTagName("a")[0],!r||!r.style||!n.length)return t;s=a.createElement("select"),u=s.appendChild(a.createElement("option")),o=d.getElementsByTagName("input")[0],r.style.cssText="top:1px;float:left;opacity:.5",t.getSetAttribute="t"!==d.className,t.leadingWhitespace=3===d.firstChild.nodeType,t.tbody=!d.getElementsByTagName("tbody").length,t.htmlSerialize=!!d.getElementsByTagName("link").length,t.style=/top/.test(r.getAttribute("style")),t.hrefNormalized="/a"===r.getAttribute("href"),t.opacity=/^0.5/.test(r.style.opacity),t.cssFloat=!!r.style.cssFloat,t.checkOn=!!o.value,t.optSelected=u.selected,t.enctype=!!a.createElement("form").enctype,t.html5Clone="<:nav></:nav>"!==a.createElement("nav").cloneNode(!0).outerHTML,t.inlineBlockNeedsLayout=!1,t.shrinkWrapBlocks=!1,t.pixelPosition=!1,t.deleteExpando=!0,t.noCloneEvent=!0,t.reliableMarginRight=!0,t.boxSizingReliable=!0,o.checked=!0,t.noCloneChecked=o.cloneNode(!0).checked,s.disabled=!0,t.optDisabled=!u.disabled;try{delete d.test}catch(h){t.deleteExpando=!1}o=a.createElement("input"),o.setAttribute("value",""),t.input=""===o.getAttribute("value"),o.value="t",o.setAttribute("type","radio"),t.radioValue="t"===o.value,o.setAttribute("checked","t"),o.setAttribute("name","t"),l=a.createDocumentFragment(),l.appendChild(o),t.appendChecked=o.checked,t.checkClone=l.cloneNode(!0).cloneNode(!0).lastChild.checked,d.attachEvent&&(d.attachEvent("onclick",function(){t.noCloneEvent=!1}),d.cloneNode(!0).click());for(f in{submit:!0,change:!0,focusin:!0})d.setAttribute(c="on"+f,"t"),t[f+"Bubbles"]=c in e||d.attributes[c].expando===!1;d.style.backgroundClip="content-box",d.cloneNode(!0).style.backgroundClip="",t.clearCloneStyle="content-box"===d.style.backgroundClip;for(f in x(t))break;return t.ownLast="0"!==f,x(function(){var n,r,o,s="padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",l=a.getElementsByTagName("body")[0];l&&(n=a.createElement("div"),n.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px",l.appendChild(n).appendChild(d),d.innerHTML="<table><tr><td></td><td>t</td></tr></table>",o=d.getElementsByTagName("td"),o[0].style.cssText="padding:0;margin:0;border:0;display:none",p=0===o[0].offsetHeight,o[0].style.display="",o[1].style.display="none",t.reliableHiddenOffsets=p&&0===o[0].offsetHeight,d.innerHTML="",d.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",x.swap(l,null!=l.style.zoom?{zoom:1}:{},function(){t.boxSizing=4===d.offsetWidth}),e.getComputedStyle&&(t.pixelPosition="1%"!==(e.getComputedStyle(d,null)||{}).top,t.boxSizingReliable="4px"===(e.getComputedStyle(d,null)||{width:"4px"}).width,r=d.appendChild(a.createElement("div")),r.style.cssText=d.style.cssText=s,r.style.marginRight=r.style.width="0",d.style.width="1px",t.reliableMarginRight=!parseFloat((e.getComputedStyle(r,null)||{}).marginRight)),typeof d.style.zoom!==i&&(d.innerHTML="",d.style.cssText=s+"width:1px;padding:1px;display:inline;zoom:1",t.inlineBlockNeedsLayout=3===d.offsetWidth,d.style.display="block",d.innerHTML="<div></div>",d.firstChild.style.width="5px",t.shrinkWrapBlocks=3!==d.offsetWidth,t.inlineBlockNeedsLayout&&(l.style.zoom=1)),l.removeChild(n),n=d=o=r=null)}),n=s=l=u=r=o=null,t
}({});var B=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,P=/([A-Z])/g;function R(e,n,r,i){if(x.acceptData(e)){var o,a,s=x.expando,l=e.nodeType,u=l?x.cache:e,c=l?e[s]:e[s]&&s;if(c&&u[c]&&(i||u[c].data)||r!==t||"string"!=typeof n)return c||(c=l?e[s]=p.pop()||x.guid++:s),u[c]||(u[c]=l?{}:{toJSON:x.noop}),("object"==typeof n||"function"==typeof n)&&(i?u[c]=x.extend(u[c],n):u[c].data=x.extend(u[c].data,n)),a=u[c],i||(a.data||(a.data={}),a=a.data),r!==t&&(a[x.camelCase(n)]=r),"string"==typeof n?(o=a[n],null==o&&(o=a[x.camelCase(n)])):o=a,o}}function W(e,t,n){if(x.acceptData(e)){var r,i,o=e.nodeType,a=o?x.cache:e,s=o?e[x.expando]:x.expando;if(a[s]){if(t&&(r=n?a[s]:a[s].data)){x.isArray(t)?t=t.concat(x.map(t,x.camelCase)):t in r?t=[t]:(t=x.camelCase(t),t=t in r?[t]:t.split(" ")),i=t.length;while(i--)delete r[t[i]];if(n?!I(r):!x.isEmptyObject(r))return}(n||(delete a[s].data,I(a[s])))&&(o?x.cleanData([e],!0):x.support.deleteExpando||a!=a.window?delete a[s]:a[s]=null)}}}x.extend({cache:{},noData:{applet:!0,embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(e){return e=e.nodeType?x.cache[e[x.expando]]:e[x.expando],!!e&&!I(e)},data:function(e,t,n){return R(e,t,n)},removeData:function(e,t){return W(e,t)},_data:function(e,t,n){return R(e,t,n,!0)},_removeData:function(e,t){return W(e,t,!0)},acceptData:function(e){if(e.nodeType&&1!==e.nodeType&&9!==e.nodeType)return!1;var t=e.nodeName&&x.noData[e.nodeName.toLowerCase()];return!t||t!==!0&&e.getAttribute("classid")===t}}),x.fn.extend({data:function(e,n){var r,i,o=null,a=0,s=this[0];if(e===t){if(this.length&&(o=x.data(s),1===s.nodeType&&!x._data(s,"parsedAttrs"))){for(r=s.attributes;r.length>a;a++)i=r[a].name,0===i.indexOf("data-")&&(i=x.camelCase(i.slice(5)),$(s,i,o[i]));x._data(s,"parsedAttrs",!0)}return o}return"object"==typeof e?this.each(function(){x.data(this,e)}):arguments.length>1?this.each(function(){x.data(this,e,n)}):s?$(s,e,x.data(s,e)):null},removeData:function(e){return this.each(function(){x.removeData(this,e)})}});function $(e,n,r){if(r===t&&1===e.nodeType){var i="data-"+n.replace(P,"-$1").toLowerCase();if(r=e.getAttribute(i),"string"==typeof r){try{r="true"===r?!0:"false"===r?!1:"null"===r?null:+r+""===r?+r:B.test(r)?x.parseJSON(r):r}catch(o){}x.data(e,n,r)}else r=t}return r}function I(e){var t;for(t in e)if(("data"!==t||!x.isEmptyObject(e[t]))&&"toJSON"!==t)return!1;return!0}x.extend({queue:function(e,n,r){var i;return e?(n=(n||"fx")+"queue",i=x._data(e,n),r&&(!i||x.isArray(r)?i=x._data(e,n,x.makeArray(r)):i.push(r)),i||[]):t},dequeue:function(e,t){t=t||"fx";var n=x.queue(e,t),r=n.length,i=n.shift(),o=x._queueHooks(e,t),a=function(){x.dequeue(e,t)};"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,a,o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return x._data(e,n)||x._data(e,n,{empty:x.Callbacks("once memory").add(function(){x._removeData(e,t+"queue"),x._removeData(e,n)})})}}),x.fn.extend({queue:function(e,n){var r=2;return"string"!=typeof e&&(n=e,e="fx",r--),r>arguments.length?x.queue(this[0],e):n===t?this:this.each(function(){var t=x.queue(this,e,n);x._queueHooks(this,e),"fx"===e&&"inprogress"!==t[0]&&x.dequeue(this,e)})},dequeue:function(e){return this.each(function(){x.dequeue(this,e)})},delay:function(e,t){return e=x.fx?x.fx.speeds[e]||e:e,t=t||"fx",this.queue(t,function(t,n){var r=setTimeout(t,e);n.stop=function(){clearTimeout(r)}})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,n){var r,i=1,o=x.Deferred(),a=this,s=this.length,l=function(){--i||o.resolveWith(a,[a])};"string"!=typeof e&&(n=e,e=t),e=e||"fx";while(s--)r=x._data(a[s],e+"queueHooks"),r&&r.empty&&(i++,r.empty.add(l));return l(),o.promise(n)}});var z,X,U=/[\t\r\n\f]/g,V=/\r/g,Y=/^(?:input|select|textarea|button|object)$/i,J=/^(?:a|area)$/i,G=/^(?:checked|selected)$/i,Q=x.support.getSetAttribute,K=x.support.input;x.fn.extend({attr:function(e,t){return x.access(this,x.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each(function(){x.removeAttr(this,e)})},prop:function(e,t){return x.access(this,x.prop,e,t,arguments.length>1)},removeProp:function(e){return e=x.propFix[e]||e,this.each(function(){try{this[e]=t,delete this[e]}catch(n){}})},addClass:function(e){var t,n,r,i,o,a=0,s=this.length,l="string"==typeof e&&e;if(x.isFunction(e))return this.each(function(t){x(this).addClass(e.call(this,t,this.className))});if(l)for(t=(e||"").match(T)||[];s>a;a++)if(n=this[a],r=1===n.nodeType&&(n.className?(" "+n.className+" ").replace(U," "):" ")){o=0;while(i=t[o++])0>r.indexOf(" "+i+" ")&&(r+=i+" ");n.className=x.trim(r)}return this},removeClass:function(e){var t,n,r,i,o,a=0,s=this.length,l=0===arguments.length||"string"==typeof e&&e;if(x.isFunction(e))return this.each(function(t){x(this).removeClass(e.call(this,t,this.className))});if(l)for(t=(e||"").match(T)||[];s>a;a++)if(n=this[a],r=1===n.nodeType&&(n.className?(" "+n.className+" ").replace(U," "):"")){o=0;while(i=t[o++])while(r.indexOf(" "+i+" ")>=0)r=r.replace(" "+i+" "," ");n.className=e?x.trim(r):""}return this},toggleClass:function(e,t){var n=typeof e;return"boolean"==typeof t&&"string"===n?t?this.addClass(e):this.removeClass(e):x.isFunction(e)?this.each(function(n){x(this).toggleClass(e.call(this,n,this.className,t),t)}):this.each(function(){if("string"===n){var t,r=0,o=x(this),a=e.match(T)||[];while(t=a[r++])o.hasClass(t)?o.removeClass(t):o.addClass(t)}else(n===i||"boolean"===n)&&(this.className&&x._data(this,"__className__",this.className),this.className=this.className||e===!1?"":x._data(this,"__className__")||"")})},hasClass:function(e){var t=" "+e+" ",n=0,r=this.length;for(;r>n;n++)if(1===this[n].nodeType&&(" "+this[n].className+" ").replace(U," ").indexOf(t)>=0)return!0;return!1},val:function(e){var n,r,i,o=this[0];{if(arguments.length)return i=x.isFunction(e),this.each(function(n){var o;1===this.nodeType&&(o=i?e.call(this,n,x(this).val()):e,null==o?o="":"number"==typeof o?o+="":x.isArray(o)&&(o=x.map(o,function(e){return null==e?"":e+""})),r=x.valHooks[this.type]||x.valHooks[this.nodeName.toLowerCase()],r&&"set"in r&&r.set(this,o,"value")!==t||(this.value=o))});if(o)return r=x.valHooks[o.type]||x.valHooks[o.nodeName.toLowerCase()],r&&"get"in r&&(n=r.get(o,"value"))!==t?n:(n=o.value,"string"==typeof n?n.replace(V,""):null==n?"":n)}}}),x.extend({valHooks:{option:{get:function(e){var t=x.find.attr(e,"value");return null!=t?t:e.text}},select:{get:function(e){var t,n,r=e.options,i=e.selectedIndex,o="select-one"===e.type||0>i,a=o?null:[],s=o?i+1:r.length,l=0>i?s:o?i:0;for(;s>l;l++)if(n=r[l],!(!n.selected&&l!==i||(x.support.optDisabled?n.disabled:null!==n.getAttribute("disabled"))||n.parentNode.disabled&&x.nodeName(n.parentNode,"optgroup"))){if(t=x(n).val(),o)return t;a.push(t)}return a},set:function(e,t){var n,r,i=e.options,o=x.makeArray(t),a=i.length;while(a--)r=i[a],(r.selected=x.inArray(x(r).val(),o)>=0)&&(n=!0);return n||(e.selectedIndex=-1),o}}},attr:function(e,n,r){var o,a,s=e.nodeType;if(e&&3!==s&&8!==s&&2!==s)return typeof e.getAttribute===i?x.prop(e,n,r):(1===s&&x.isXMLDoc(e)||(n=n.toLowerCase(),o=x.attrHooks[n]||(x.expr.match.bool.test(n)?X:z)),r===t?o&&"get"in o&&null!==(a=o.get(e,n))?a:(a=x.find.attr(e,n),null==a?t:a):null!==r?o&&"set"in o&&(a=o.set(e,r,n))!==t?a:(e.setAttribute(n,r+""),r):(x.removeAttr(e,n),t))},removeAttr:function(e,t){var n,r,i=0,o=t&&t.match(T);if(o&&1===e.nodeType)while(n=o[i++])r=x.propFix[n]||n,x.expr.match.bool.test(n)?K&&Q||!G.test(n)?e[r]=!1:e[x.camelCase("default-"+n)]=e[r]=!1:x.attr(e,n,""),e.removeAttribute(Q?n:r)},attrHooks:{type:{set:function(e,t){if(!x.support.radioValue&&"radio"===t&&x.nodeName(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},propFix:{"for":"htmlFor","class":"className"},prop:function(e,n,r){var i,o,a,s=e.nodeType;if(e&&3!==s&&8!==s&&2!==s)return a=1!==s||!x.isXMLDoc(e),a&&(n=x.propFix[n]||n,o=x.propHooks[n]),r!==t?o&&"set"in o&&(i=o.set(e,r,n))!==t?i:e[n]=r:o&&"get"in o&&null!==(i=o.get(e,n))?i:e[n]},propHooks:{tabIndex:{get:function(e){var t=x.find.attr(e,"tabindex");return t?parseInt(t,10):Y.test(e.nodeName)||J.test(e.nodeName)&&e.href?0:-1}}}}),X={set:function(e,t,n){return t===!1?x.removeAttr(e,n):K&&Q||!G.test(n)?e.setAttribute(!Q&&x.propFix[n]||n,n):e[x.camelCase("default-"+n)]=e[n]=!0,n}},x.each(x.expr.match.bool.source.match(/\w+/g),function(e,n){var r=x.expr.attrHandle[n]||x.find.attr;x.expr.attrHandle[n]=K&&Q||!G.test(n)?function(e,n,i){var o=x.expr.attrHandle[n],a=i?t:(x.expr.attrHandle[n]=t)!=r(e,n,i)?n.toLowerCase():null;return x.expr.attrHandle[n]=o,a}:function(e,n,r){return r?t:e[x.camelCase("default-"+n)]?n.toLowerCase():null}}),K&&Q||(x.attrHooks.value={set:function(e,n,r){return x.nodeName(e,"input")?(e.defaultValue=n,t):z&&z.set(e,n,r)}}),Q||(z={set:function(e,n,r){var i=e.getAttributeNode(r);return i||e.setAttributeNode(i=e.ownerDocument.createAttribute(r)),i.value=n+="","value"===r||n===e.getAttribute(r)?n:t}},x.expr.attrHandle.id=x.expr.attrHandle.name=x.expr.attrHandle.coords=function(e,n,r){var i;return r?t:(i=e.getAttributeNode(n))&&""!==i.value?i.value:null},x.valHooks.button={get:function(e,n){var r=e.getAttributeNode(n);return r&&r.specified?r.value:t},set:z.set},x.attrHooks.contenteditable={set:function(e,t,n){z.set(e,""===t?!1:t,n)}},x.each(["width","height"],function(e,n){x.attrHooks[n]={set:function(e,r){return""===r?(e.setAttribute(n,"auto"),r):t}}})),x.support.hrefNormalized||x.each(["href","src"],function(e,t){x.propHooks[t]={get:function(e){return e.getAttribute(t,4)}}}),x.support.style||(x.attrHooks.style={get:function(e){return e.style.cssText||t},set:function(e,t){return e.style.cssText=t+""}}),x.support.optSelected||(x.propHooks.selected={get:function(e){var t=e.parentNode;return t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex),null}}),x.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){x.propFix[this.toLowerCase()]=this}),x.support.enctype||(x.propFix.enctype="encoding"),x.each(["radio","checkbox"],function(){x.valHooks[this]={set:function(e,n){return x.isArray(n)?e.checked=x.inArray(x(e).val(),n)>=0:t}},x.support.checkOn||(x.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})});var Z=/^(?:input|select|textarea)$/i,et=/^key/,tt=/^(?:mouse|contextmenu)|click/,nt=/^(?:focusinfocus|focusoutblur)$/,rt=/^([^.]*)(?:\.(.+)|)$/;function it(){return!0}function ot(){return!1}function at(){try{return a.activeElement}catch(e){}}x.event={global:{},add:function(e,n,r,o,a){var s,l,u,c,p,f,d,h,g,m,y,v=x._data(e);if(v){r.handler&&(c=r,r=c.handler,a=c.selector),r.guid||(r.guid=x.guid++),(l=v.events)||(l=v.events={}),(f=v.handle)||(f=v.handle=function(e){return typeof x===i||e&&x.event.triggered===e.type?t:x.event.dispatch.apply(f.elem,arguments)},f.elem=e),n=(n||"").match(T)||[""],u=n.length;while(u--)s=rt.exec(n[u])||[],g=y=s[1],m=(s[2]||"").split(".").sort(),g&&(p=x.event.special[g]||{},g=(a?p.delegateType:p.bindType)||g,p=x.event.special[g]||{},d=x.extend({type:g,origType:y,data:o,handler:r,guid:r.guid,selector:a,needsContext:a&&x.expr.match.needsContext.test(a),namespace:m.join(".")},c),(h=l[g])||(h=l[g]=[],h.delegateCount=0,p.setup&&p.setup.call(e,o,m,f)!==!1||(e.addEventListener?e.addEventListener(g,f,!1):e.attachEvent&&e.attachEvent("on"+g,f))),p.add&&(p.add.call(e,d),d.handler.guid||(d.handler.guid=r.guid)),a?h.splice(h.delegateCount++,0,d):h.push(d),x.event.global[g]=!0);e=null}},remove:function(e,t,n,r,i){var o,a,s,l,u,c,p,f,d,h,g,m=x.hasData(e)&&x._data(e);if(m&&(c=m.events)){t=(t||"").match(T)||[""],u=t.length;while(u--)if(s=rt.exec(t[u])||[],d=g=s[1],h=(s[2]||"").split(".").sort(),d){p=x.event.special[d]||{},d=(r?p.delegateType:p.bindType)||d,f=c[d]||[],s=s[2]&&RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),l=o=f.length;while(o--)a=f[o],!i&&g!==a.origType||n&&n.guid!==a.guid||s&&!s.test(a.namespace)||r&&r!==a.selector&&("**"!==r||!a.selector)||(f.splice(o,1),a.selector&&f.delegateCount--,p.remove&&p.remove.call(e,a));l&&!f.length&&(p.teardown&&p.teardown.call(e,h,m.handle)!==!1||x.removeEvent(e,d,m.handle),delete c[d])}else for(d in c)x.event.remove(e,d+t[u],n,r,!0);x.isEmptyObject(c)&&(delete m.handle,x._removeData(e,"events"))}},trigger:function(n,r,i,o){var s,l,u,c,p,f,d,h=[i||a],g=v.call(n,"type")?n.type:n,m=v.call(n,"namespace")?n.namespace.split("."):[];if(u=f=i=i||a,3!==i.nodeType&&8!==i.nodeType&&!nt.test(g+x.event.triggered)&&(g.indexOf(".")>=0&&(m=g.split("."),g=m.shift(),m.sort()),l=0>g.indexOf(":")&&"on"+g,n=n[x.expando]?n:new x.Event(g,"object"==typeof n&&n),n.isTrigger=o?2:3,n.namespace=m.join("."),n.namespace_re=n.namespace?RegExp("(^|\\.)"+m.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,n.result=t,n.target||(n.target=i),r=null==r?[n]:x.makeArray(r,[n]),p=x.event.special[g]||{},o||!p.trigger||p.trigger.apply(i,r)!==!1)){if(!o&&!p.noBubble&&!x.isWindow(i)){for(c=p.delegateType||g,nt.test(c+g)||(u=u.parentNode);u;u=u.parentNode)h.push(u),f=u;f===(i.ownerDocument||a)&&h.push(f.defaultView||f.parentWindow||e)}d=0;while((u=h[d++])&&!n.isPropagationStopped())n.type=d>1?c:p.bindType||g,s=(x._data(u,"events")||{})[n.type]&&x._data(u,"handle"),s&&s.apply(u,r),s=l&&u[l],s&&x.acceptData(u)&&s.apply&&s.apply(u,r)===!1&&n.preventDefault();if(n.type=g,!o&&!n.isDefaultPrevented()&&(!p._default||p._default.apply(h.pop(),r)===!1)&&x.acceptData(i)&&l&&i[g]&&!x.isWindow(i)){f=i[l],f&&(i[l]=null),x.event.triggered=g;try{i[g]()}catch(y){}x.event.triggered=t,f&&(i[l]=f)}return n.result}},dispatch:function(e){e=x.event.fix(e);var n,r,i,o,a,s=[],l=g.call(arguments),u=(x._data(this,"events")||{})[e.type]||[],c=x.event.special[e.type]||{};if(l[0]=e,e.delegateTarget=this,!c.preDispatch||c.preDispatch.call(this,e)!==!1){s=x.event.handlers.call(this,e,u),n=0;while((o=s[n++])&&!e.isPropagationStopped()){e.currentTarget=o.elem,a=0;while((i=o.handlers[a++])&&!e.isImmediatePropagationStopped())(!e.namespace_re||e.namespace_re.test(i.namespace))&&(e.handleObj=i,e.data=i.data,r=((x.event.special[i.origType]||{}).handle||i.handler).apply(o.elem,l),r!==t&&(e.result=r)===!1&&(e.preventDefault(),e.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,e),e.result}},handlers:function(e,n){var r,i,o,a,s=[],l=n.delegateCount,u=e.target;if(l&&u.nodeType&&(!e.button||"click"!==e.type))for(;u!=this;u=u.parentNode||this)if(1===u.nodeType&&(u.disabled!==!0||"click"!==e.type)){for(o=[],a=0;l>a;a++)i=n[a],r=i.selector+" ",o[r]===t&&(o[r]=i.needsContext?x(r,this).index(u)>=0:x.find(r,this,null,[u]).length),o[r]&&o.push(i);o.length&&s.push({elem:u,handlers:o})}return n.length>l&&s.push({elem:this,handlers:n.slice(l)}),s},fix:function(e){if(e[x.expando])return e;var t,n,r,i=e.type,o=e,s=this.fixHooks[i];s||(this.fixHooks[i]=s=tt.test(i)?this.mouseHooks:et.test(i)?this.keyHooks:{}),r=s.props?this.props.concat(s.props):this.props,e=new x.Event(o),t=r.length;while(t--)n=r[t],e[n]=o[n];return e.target||(e.target=o.srcElement||a),3===e.target.nodeType&&(e.target=e.target.parentNode),e.metaKey=!!e.metaKey,s.filter?s.filter(e,o):e},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(e,t){return null==e.which&&(e.which=null!=t.charCode?t.charCode:t.keyCode),e}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(e,n){var r,i,o,s=n.button,l=n.fromElement;return null==e.pageX&&null!=n.clientX&&(i=e.target.ownerDocument||a,o=i.documentElement,r=i.body,e.pageX=n.clientX+(o&&o.scrollLeft||r&&r.scrollLeft||0)-(o&&o.clientLeft||r&&r.clientLeft||0),e.pageY=n.clientY+(o&&o.scrollTop||r&&r.scrollTop||0)-(o&&o.clientTop||r&&r.clientTop||0)),!e.relatedTarget&&l&&(e.relatedTarget=l===e.target?n.toElement:l),e.which||s===t||(e.which=1&s?1:2&s?3:4&s?2:0),e}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==at()&&this.focus)try{return this.focus(),!1}catch(e){}},delegateType:"focusin"},blur:{trigger:function(){return this===at()&&this.blur?(this.blur(),!1):t},delegateType:"focusout"},click:{trigger:function(){return x.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):t},_default:function(e){return x.nodeName(e.target,"a")}},beforeunload:{postDispatch:function(e){e.result!==t&&(e.originalEvent.returnValue=e.result)}}},simulate:function(e,t,n,r){var i=x.extend(new x.Event,n,{type:e,isSimulated:!0,originalEvent:{}});r?x.event.trigger(i,null,t):x.event.dispatch.call(t,i),i.isDefaultPrevented()&&n.preventDefault()}},x.removeEvent=a.removeEventListener?function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n,!1)}:function(e,t,n){var r="on"+t;e.detachEvent&&(typeof e[r]===i&&(e[r]=null),e.detachEvent(r,n))},x.Event=function(e,n){return this instanceof x.Event?(e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||e.returnValue===!1||e.getPreventDefault&&e.getPreventDefault()?it:ot):this.type=e,n&&x.extend(this,n),this.timeStamp=e&&e.timeStamp||x.now(),this[x.expando]=!0,t):new x.Event(e,n)},x.Event.prototype={isDefaultPrevented:ot,isPropagationStopped:ot,isImmediatePropagationStopped:ot,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=it,e&&(e.preventDefault?e.preventDefault():e.returnValue=!1)},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=it,e&&(e.stopPropagation&&e.stopPropagation(),e.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=it,this.stopPropagation()}},x.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(e,t){x.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;return(!i||i!==r&&!x.contains(r,i))&&(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}}),x.support.submitBubbles||(x.event.special.submit={setup:function(){return x.nodeName(this,"form")?!1:(x.event.add(this,"click._submit keypress._submit",function(e){var n=e.target,r=x.nodeName(n,"input")||x.nodeName(n,"button")?n.form:t;r&&!x._data(r,"submitBubbles")&&(x.event.add(r,"submit._submit",function(e){e._submit_bubble=!0}),x._data(r,"submitBubbles",!0))}),t)},postDispatch:function(e){e._submit_bubble&&(delete e._submit_bubble,this.parentNode&&!e.isTrigger&&x.event.simulate("submit",this.parentNode,e,!0))},teardown:function(){return x.nodeName(this,"form")?!1:(x.event.remove(this,"._submit"),t)}}),x.support.changeBubbles||(x.event.special.change={setup:function(){return Z.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(x.event.add(this,"propertychange._change",function(e){"checked"===e.originalEvent.propertyName&&(this._just_changed=!0)}),x.event.add(this,"click._change",function(e){this._just_changed&&!e.isTrigger&&(this._just_changed=!1),x.event.simulate("change",this,e,!0)})),!1):(x.event.add(this,"beforeactivate._change",function(e){var t=e.target;Z.test(t.nodeName)&&!x._data(t,"changeBubbles")&&(x.event.add(t,"change._change",function(e){!this.parentNode||e.isSimulated||e.isTrigger||x.event.simulate("change",this.parentNode,e,!0)}),x._data(t,"changeBubbles",!0))}),t)},handle:function(e){var n=e.target;return this!==n||e.isSimulated||e.isTrigger||"radio"!==n.type&&"checkbox"!==n.type?e.handleObj.handler.apply(this,arguments):t},teardown:function(){return x.event.remove(this,"._change"),!Z.test(this.nodeName)}}),x.support.focusinBubbles||x.each({focus:"focusin",blur:"focusout"},function(e,t){var n=0,r=function(e){x.event.simulate(t,e.target,x.event.fix(e),!0)};x.event.special[t]={setup:function(){0===n++&&a.addEventListener(e,r,!0)},teardown:function(){0===--n&&a.removeEventListener(e,r,!0)}}}),x.fn.extend({on:function(e,n,r,i,o){var a,s;if("object"==typeof e){"string"!=typeof n&&(r=r||n,n=t);for(a in e)this.on(a,n,r,e[a],o);return this}if(null==r&&null==i?(i=n,r=n=t):null==i&&("string"==typeof n?(i=r,r=t):(i=r,r=n,n=t)),i===!1)i=ot;else if(!i)return this;return 1===o&&(s=i,i=function(e){return x().off(e),s.apply(this,arguments)},i.guid=s.guid||(s.guid=x.guid++)),this.each(function(){x.event.add(this,e,i,r,n)})},one:function(e,t,n,r){return this.on(e,t,n,r,1)},off:function(e,n,r){var i,o;if(e&&e.preventDefault&&e.handleObj)return i=e.handleObj,x(e.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if("object"==typeof e){for(o in e)this.off(o,n,e[o]);return this}return(n===!1||"function"==typeof n)&&(r=n,n=t),r===!1&&(r=ot),this.each(function(){x.event.remove(this,e,r,n)})},trigger:function(e,t){return this.each(function(){x.event.trigger(e,t,this)})},triggerHandler:function(e,n){var r=this[0];return r?x.event.trigger(e,n,r,!0):t}});var st=/^.[^:#\[\.,]*$/,lt=/^(?:parents|prev(?:Until|All))/,ut=x.expr.match.needsContext,ct={children:!0,contents:!0,next:!0,prev:!0};x.fn.extend({find:function(e){var t,n=[],r=this,i=r.length;if("string"!=typeof e)return this.pushStack(x(e).filter(function(){for(t=0;i>t;t++)if(x.contains(r[t],this))return!0}));for(t=0;i>t;t++)x.find(e,r[t],n);return n=this.pushStack(i>1?x.unique(n):n),n.selector=this.selector?this.selector+" "+e:e,n},has:function(e){var t,n=x(e,this),r=n.length;return this.filter(function(){for(t=0;r>t;t++)if(x.contains(this,n[t]))return!0})},not:function(e){return this.pushStack(ft(this,e||[],!0))},filter:function(e){return this.pushStack(ft(this,e||[],!1))},is:function(e){return!!ft(this,"string"==typeof e&&ut.test(e)?x(e):e||[],!1).length},closest:function(e,t){var n,r=0,i=this.length,o=[],a=ut.test(e)||"string"!=typeof e?x(e,t||this.context):0;for(;i>r;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(11>n.nodeType&&(a?a.index(n)>-1:1===n.nodeType&&x.find.matchesSelector(n,e))){n=o.push(n);break}return this.pushStack(o.length>1?x.unique(o):o)},index:function(e){return e?"string"==typeof e?x.inArray(this[0],x(e)):x.inArray(e.jquery?e[0]:e,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){var n="string"==typeof e?x(e,t):x.makeArray(e&&e.nodeType?[e]:e),r=x.merge(this.get(),n);return this.pushStack(x.unique(r))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}});function pt(e,t){do e=e[t];while(e&&1!==e.nodeType);return e}x.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return x.dir(e,"parentNode")},parentsUntil:function(e,t,n){return x.dir(e,"parentNode",n)},next:function(e){return pt(e,"nextSibling")},prev:function(e){return pt(e,"previousSibling")},nextAll:function(e){return x.dir(e,"nextSibling")},prevAll:function(e){return x.dir(e,"previousSibling")},nextUntil:function(e,t,n){return x.dir(e,"nextSibling",n)},prevUntil:function(e,t,n){return x.dir(e,"previousSibling",n)},siblings:function(e){return x.sibling((e.parentNode||{}).firstChild,e)},children:function(e){return x.sibling(e.firstChild)},contents:function(e){return x.nodeName(e,"iframe")?e.contentDocument||e.contentWindow.document:x.merge([],e.childNodes)}},function(e,t){x.fn[e]=function(n,r){var i=x.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=x.filter(r,i)),this.length>1&&(ct[e]||(i=x.unique(i)),lt.test(e)&&(i=i.reverse())),this.pushStack(i)}}),x.extend({filter:function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?x.find.matchesSelector(r,e)?[r]:[]:x.find.matches(e,x.grep(t,function(e){return 1===e.nodeType}))},dir:function(e,n,r){var i=[],o=e[n];while(o&&9!==o.nodeType&&(r===t||1!==o.nodeType||!x(o).is(r)))1===o.nodeType&&i.push(o),o=o[n];return i},sibling:function(e,t){var n=[];for(;e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}});function ft(e,t,n){if(x.isFunction(t))return x.grep(e,function(e,r){return!!t.call(e,r,e)!==n});if(t.nodeType)return x.grep(e,function(e){return e===t!==n});if("string"==typeof t){if(st.test(t))return x.filter(t,e,n);t=x.filter(t,e)}return x.grep(e,function(e){return x.inArray(e,t)>=0!==n})}function dt(e){var t=ht.split("|"),n=e.createDocumentFragment();if(n.createElement)while(t.length)n.createElement(t.pop());return n}var ht="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",gt=/ jQuery\d+="(?:null|\d+)"/g,mt=RegExp("<(?:"+ht+")[\\s/>]","i"),yt=/^\s+/,vt=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bt=/<([\w:]+)/,xt=/<tbody/i,wt=/<|&#?\w+;/,Tt=/<(?:script|style|link)/i,Ct=/^(?:checkbox|radio)$/i,Nt=/checked\s*(?:[^=]|=\s*.checked.)/i,kt=/^$|\/(?:java|ecma)script/i,Et=/^true\/(.*)/,St=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,At={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:x.support.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},jt=dt(a),Dt=jt.appendChild(a.createElement("div"));At.optgroup=At.option,At.tbody=At.tfoot=At.colgroup=At.caption=At.thead,At.th=At.td,x.fn.extend({text:function(e){return x.access(this,function(e){return e===t?x.text(this):this.empty().append((this[0]&&this[0].ownerDocument||a).createTextNode(e))},null,e,arguments.length)},append:function(){return this.domManip(arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Lt(this,e);t.appendChild(e)}})},prepend:function(){return this.domManip(arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Lt(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return this.domManip(arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return this.domManip(arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},remove:function(e,t){var n,r=e?x.filter(e,this):this,i=0;for(;null!=(n=r[i]);i++)t||1!==n.nodeType||x.cleanData(Ft(n)),n.parentNode&&(t&&x.contains(n.ownerDocument,n)&&_t(Ft(n,"script")),n.parentNode.removeChild(n));return this},empty:function(){var e,t=0;for(;null!=(e=this[t]);t++){1===e.nodeType&&x.cleanData(Ft(e,!1));while(e.firstChild)e.removeChild(e.firstChild);e.options&&x.nodeName(e,"select")&&(e.options.length=0)}return this},clone:function(e,t){return e=null==e?!1:e,t=null==t?e:t,this.map(function(){return x.clone(this,e,t)})},html:function(e){return x.access(this,function(e){var n=this[0]||{},r=0,i=this.length;if(e===t)return 1===n.nodeType?n.innerHTML.replace(gt,""):t;if(!("string"!=typeof e||Tt.test(e)||!x.support.htmlSerialize&&mt.test(e)||!x.support.leadingWhitespace&&yt.test(e)||At[(bt.exec(e)||["",""])[1].toLowerCase()])){e=e.replace(vt,"<$1></$2>");try{for(;i>r;r++)n=this[r]||{},1===n.nodeType&&(x.cleanData(Ft(n,!1)),n.innerHTML=e);n=0}catch(o){}}n&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var e=x.map(this,function(e){return[e.nextSibling,e.parentNode]}),t=0;return this.domManip(arguments,function(n){var r=e[t++],i=e[t++];i&&(r&&r.parentNode!==i&&(r=this.nextSibling),x(this).remove(),i.insertBefore(n,r))},!0),t?this:this.remove()},detach:function(e){return this.remove(e,!0)},domManip:function(e,t,n){e=d.apply([],e);var r,i,o,a,s,l,u=0,c=this.length,p=this,f=c-1,h=e[0],g=x.isFunction(h);if(g||!(1>=c||"string"!=typeof h||x.support.checkClone)&&Nt.test(h))return this.each(function(r){var i=p.eq(r);g&&(e[0]=h.call(this,r,i.html())),i.domManip(e,t,n)});if(c&&(l=x.buildFragment(e,this[0].ownerDocument,!1,!n&&this),r=l.firstChild,1===l.childNodes.length&&(l=r),r)){for(a=x.map(Ft(l,"script"),Ht),o=a.length;c>u;u++)i=l,u!==f&&(i=x.clone(i,!0,!0),o&&x.merge(a,Ft(i,"script"))),t.call(this[u],i,u);if(o)for(s=a[a.length-1].ownerDocument,x.map(a,qt),u=0;o>u;u++)i=a[u],kt.test(i.type||"")&&!x._data(i,"globalEval")&&x.contains(s,i)&&(i.src?x._evalUrl(i.src):x.globalEval((i.text||i.textContent||i.innerHTML||"").replace(St,"")));l=r=null}return this}});function Lt(e,t){return x.nodeName(e,"table")&&x.nodeName(1===t.nodeType?t:t.firstChild,"tr")?e.getElementsByTagName("tbody")[0]||e.appendChild(e.ownerDocument.createElement("tbody")):e}function Ht(e){return e.type=(null!==x.find.attr(e,"type"))+"/"+e.type,e}function qt(e){var t=Et.exec(e.type);return t?e.type=t[1]:e.removeAttribute("type"),e}function _t(e,t){var n,r=0;for(;null!=(n=e[r]);r++)x._data(n,"globalEval",!t||x._data(t[r],"globalEval"))}function Mt(e,t){if(1===t.nodeType&&x.hasData(e)){var n,r,i,o=x._data(e),a=x._data(t,o),s=o.events;if(s){delete a.handle,a.events={};for(n in s)for(r=0,i=s[n].length;i>r;r++)x.event.add(t,n,s[n][r])}a.data&&(a.data=x.extend({},a.data))}}function Ot(e,t){var n,r,i;if(1===t.nodeType){if(n=t.nodeName.toLowerCase(),!x.support.noCloneEvent&&t[x.expando]){i=x._data(t);for(r in i.events)x.removeEvent(t,r,i.handle);t.removeAttribute(x.expando)}"script"===n&&t.text!==e.text?(Ht(t).text=e.text,qt(t)):"object"===n?(t.parentNode&&(t.outerHTML=e.outerHTML),x.support.html5Clone&&e.innerHTML&&!x.trim(t.innerHTML)&&(t.innerHTML=e.innerHTML)):"input"===n&&Ct.test(e.type)?(t.defaultChecked=t.checked=e.checked,t.value!==e.value&&(t.value=e.value)):"option"===n?t.defaultSelected=t.selected=e.defaultSelected:("input"===n||"textarea"===n)&&(t.defaultValue=e.defaultValue)}}x.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){x.fn[e]=function(e){var n,r=0,i=[],o=x(e),a=o.length-1;for(;a>=r;r++)n=r===a?this:this.clone(!0),x(o[r])[t](n),h.apply(i,n.get());return this.pushStack(i)}});function Ft(e,n){var r,o,a=0,s=typeof e.getElementsByTagName!==i?e.getElementsByTagName(n||"*"):typeof e.querySelectorAll!==i?e.querySelectorAll(n||"*"):t;if(!s)for(s=[],r=e.childNodes||e;null!=(o=r[a]);a++)!n||x.nodeName(o,n)?s.push(o):x.merge(s,Ft(o,n));return n===t||n&&x.nodeName(e,n)?x.merge([e],s):s}function Bt(e){Ct.test(e.type)&&(e.defaultChecked=e.checked)}x.extend({clone:function(e,t,n){var r,i,o,a,s,l=x.contains(e.ownerDocument,e);if(x.support.html5Clone||x.isXMLDoc(e)||!mt.test("<"+e.nodeName+">")?o=e.cloneNode(!0):(Dt.innerHTML=e.outerHTML,Dt.removeChild(o=Dt.firstChild)),!(x.support.noCloneEvent&&x.support.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||x.isXMLDoc(e)))for(r=Ft(o),s=Ft(e),a=0;null!=(i=s[a]);++a)r[a]&&Ot(i,r[a]);if(t)if(n)for(s=s||Ft(e),r=r||Ft(o),a=0;null!=(i=s[a]);a++)Mt(i,r[a]);else Mt(e,o);return r=Ft(o,"script"),r.length>0&&_t(r,!l&&Ft(e,"script")),r=s=i=null,o},buildFragment:function(e,t,n,r){var i,o,a,s,l,u,c,p=e.length,f=dt(t),d=[],h=0;for(;p>h;h++)if(o=e[h],o||0===o)if("object"===x.type(o))x.merge(d,o.nodeType?[o]:o);else if(wt.test(o)){s=s||f.appendChild(t.createElement("div")),l=(bt.exec(o)||["",""])[1].toLowerCase(),c=At[l]||At._default,s.innerHTML=c[1]+o.replace(vt,"<$1></$2>")+c[2],i=c[0];while(i--)s=s.lastChild;if(!x.support.leadingWhitespace&&yt.test(o)&&d.push(t.createTextNode(yt.exec(o)[0])),!x.support.tbody){o="table"!==l||xt.test(o)?"<table>"!==c[1]||xt.test(o)?0:s:s.firstChild,i=o&&o.childNodes.length;while(i--)x.nodeName(u=o.childNodes[i],"tbody")&&!u.childNodes.length&&o.removeChild(u)}x.merge(d,s.childNodes),s.textContent="";while(s.firstChild)s.removeChild(s.firstChild);s=f.lastChild}else d.push(t.createTextNode(o));s&&f.removeChild(s),x.support.appendChecked||x.grep(Ft(d,"input"),Bt),h=0;while(o=d[h++])if((!r||-1===x.inArray(o,r))&&(a=x.contains(o.ownerDocument,o),s=Ft(f.appendChild(o),"script"),a&&_t(s),n)){i=0;while(o=s[i++])kt.test(o.type||"")&&n.push(o)}return s=null,f},cleanData:function(e,t){var n,r,o,a,s=0,l=x.expando,u=x.cache,c=x.support.deleteExpando,f=x.event.special;for(;null!=(n=e[s]);s++)if((t||x.acceptData(n))&&(o=n[l],a=o&&u[o])){if(a.events)for(r in a.events)f[r]?x.event.remove(n,r):x.removeEvent(n,r,a.handle);

u[o]&&(delete u[o],c?delete n[l]:typeof n.removeAttribute!==i?n.removeAttribute(l):n[l]=null,p.push(o))}},_evalUrl:function(e){return x.ajax({url:e,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})}}),x.fn.extend({wrapAll:function(e){if(x.isFunction(e))return this.each(function(t){x(this).wrapAll(e.call(this,t))});if(this[0]){var t=x(e,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstChild&&1===e.firstChild.nodeType)e=e.firstChild;return e}).append(this)}return this},wrapInner:function(e){return x.isFunction(e)?this.each(function(t){x(this).wrapInner(e.call(this,t))}):this.each(function(){var t=x(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=x.isFunction(e);return this.each(function(n){x(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(){return this.parent().each(function(){x.nodeName(this,"body")||x(this).replaceWith(this.childNodes)}).end()}});var Pt,Rt,Wt,$t=/alpha\([^)]*\)/i,It=/opacity\s*=\s*([^)]*)/,zt=/^(top|right|bottom|left)$/,Xt=/^(none|table(?!-c[ea]).+)/,Ut=/^margin/,Vt=RegExp("^("+w+")(.*)$","i"),Yt=RegExp("^("+w+")(?!px)[a-z%]+$","i"),Jt=RegExp("^([+-])=("+w+")","i"),Gt={BODY:"block"},Qt={position:"absolute",visibility:"hidden",display:"block"},Kt={letterSpacing:0,fontWeight:400},Zt=["Top","Right","Bottom","Left"],en=["Webkit","O","Moz","ms"];function tn(e,t){if(t in e)return t;var n=t.charAt(0).toUpperCase()+t.slice(1),r=t,i=en.length;while(i--)if(t=en[i]+n,t in e)return t;return r}function nn(e,t){return e=t||e,"none"===x.css(e,"display")||!x.contains(e.ownerDocument,e)}function rn(e,t){var n,r,i,o=[],a=0,s=e.length;for(;s>a;a++)r=e[a],r.style&&(o[a]=x._data(r,"olddisplay"),n=r.style.display,t?(o[a]||"none"!==n||(r.style.display=""),""===r.style.display&&nn(r)&&(o[a]=x._data(r,"olddisplay",ln(r.nodeName)))):o[a]||(i=nn(r),(n&&"none"!==n||!i)&&x._data(r,"olddisplay",i?n:x.css(r,"display"))));for(a=0;s>a;a++)r=e[a],r.style&&(t&&"none"!==r.style.display&&""!==r.style.display||(r.style.display=t?o[a]||"":"none"));return e}x.fn.extend({css:function(e,n){return x.access(this,function(e,n,r){var i,o,a={},s=0;if(x.isArray(n)){for(o=Rt(e),i=n.length;i>s;s++)a[n[s]]=x.css(e,n[s],!1,o);return a}return r!==t?x.style(e,n,r):x.css(e,n)},e,n,arguments.length>1)},show:function(){return rn(this,!0)},hide:function(){return rn(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){nn(this)?x(this).show():x(this).hide()})}}),x.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Wt(e,"opacity");return""===n?"1":n}}}},cssNumber:{columnCount:!0,fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":x.support.cssFloat?"cssFloat":"styleFloat"},style:function(e,n,r,i){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var o,a,s,l=x.camelCase(n),u=e.style;if(n=x.cssProps[l]||(x.cssProps[l]=tn(u,l)),s=x.cssHooks[n]||x.cssHooks[l],r===t)return s&&"get"in s&&(o=s.get(e,!1,i))!==t?o:u[n];if(a=typeof r,"string"===a&&(o=Jt.exec(r))&&(r=(o[1]+1)*o[2]+parseFloat(x.css(e,n)),a="number"),!(null==r||"number"===a&&isNaN(r)||("number"!==a||x.cssNumber[l]||(r+="px"),x.support.clearCloneStyle||""!==r||0!==n.indexOf("background")||(u[n]="inherit"),s&&"set"in s&&(r=s.set(e,r,i))===t)))try{u[n]=r}catch(c){}}},css:function(e,n,r,i){var o,a,s,l=x.camelCase(n);return n=x.cssProps[l]||(x.cssProps[l]=tn(e.style,l)),s=x.cssHooks[n]||x.cssHooks[l],s&&"get"in s&&(a=s.get(e,!0,r)),a===t&&(a=Wt(e,n,i)),"normal"===a&&n in Kt&&(a=Kt[n]),""===r||r?(o=parseFloat(a),r===!0||x.isNumeric(o)?o||0:a):a}}),e.getComputedStyle?(Rt=function(t){return e.getComputedStyle(t,null)},Wt=function(e,n,r){var i,o,a,s=r||Rt(e),l=s?s.getPropertyValue(n)||s[n]:t,u=e.style;return s&&(""!==l||x.contains(e.ownerDocument,e)||(l=x.style(e,n)),Yt.test(l)&&Ut.test(n)&&(i=u.width,o=u.minWidth,a=u.maxWidth,u.minWidth=u.maxWidth=u.width=l,l=s.width,u.width=i,u.minWidth=o,u.maxWidth=a)),l}):a.documentElement.currentStyle&&(Rt=function(e){return e.currentStyle},Wt=function(e,n,r){var i,o,a,s=r||Rt(e),l=s?s[n]:t,u=e.style;return null==l&&u&&u[n]&&(l=u[n]),Yt.test(l)&&!zt.test(n)&&(i=u.left,o=e.runtimeStyle,a=o&&o.left,a&&(o.left=e.currentStyle.left),u.left="fontSize"===n?"1em":l,l=u.pixelLeft+"px",u.left=i,a&&(o.left=a)),""===l?"auto":l});function on(e,t,n){var r=Vt.exec(t);return r?Math.max(0,r[1]-(n||0))+(r[2]||"px"):t}function an(e,t,n,r,i){var o=n===(r?"border":"content")?4:"width"===t?1:0,a=0;for(;4>o;o+=2)"margin"===n&&(a+=x.css(e,n+Zt[o],!0,i)),r?("content"===n&&(a-=x.css(e,"padding"+Zt[o],!0,i)),"margin"!==n&&(a-=x.css(e,"border"+Zt[o]+"Width",!0,i))):(a+=x.css(e,"padding"+Zt[o],!0,i),"padding"!==n&&(a+=x.css(e,"border"+Zt[o]+"Width",!0,i)));return a}function sn(e,t,n){var r=!0,i="width"===t?e.offsetWidth:e.offsetHeight,o=Rt(e),a=x.support.boxSizing&&"border-box"===x.css(e,"boxSizing",!1,o);if(0>=i||null==i){if(i=Wt(e,t,o),(0>i||null==i)&&(i=e.style[t]),Yt.test(i))return i;r=a&&(x.support.boxSizingReliable||i===e.style[t]),i=parseFloat(i)||0}return i+an(e,t,n||(a?"border":"content"),r,o)+"px"}function ln(e){var t=a,n=Gt[e];return n||(n=un(e,t),"none"!==n&&n||(Pt=(Pt||x("<iframe frameborder='0' width='0' height='0'/>").css("cssText","display:block !important")).appendTo(t.documentElement),t=(Pt[0].contentWindow||Pt[0].contentDocument).document,t.write("<!doctype html><html><body>"),t.close(),n=un(e,t),Pt.detach()),Gt[e]=n),n}function un(e,t){var n=x(t.createElement(e)).appendTo(t.body),r=x.css(n[0],"display");return n.remove(),r}x.each(["height","width"],function(e,n){x.cssHooks[n]={get:function(e,r,i){return r?0===e.offsetWidth&&Xt.test(x.css(e,"display"))?x.swap(e,Qt,function(){return sn(e,n,i)}):sn(e,n,i):t},set:function(e,t,r){var i=r&&Rt(e);return on(e,t,r?an(e,n,r,x.support.boxSizing&&"border-box"===x.css(e,"boxSizing",!1,i),i):0)}}}),x.support.opacity||(x.cssHooks.opacity={get:function(e,t){return It.test((t&&e.currentStyle?e.currentStyle.filter:e.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":t?"1":""},set:function(e,t){var n=e.style,r=e.currentStyle,i=x.isNumeric(t)?"alpha(opacity="+100*t+")":"",o=r&&r.filter||n.filter||"";n.zoom=1,(t>=1||""===t)&&""===x.trim(o.replace($t,""))&&n.removeAttribute&&(n.removeAttribute("filter"),""===t||r&&!r.filter)||(n.filter=$t.test(o)?o.replace($t,i):o+" "+i)}}),x(function(){x.support.reliableMarginRight||(x.cssHooks.marginRight={get:function(e,n){return n?x.swap(e,{display:"inline-block"},Wt,[e,"marginRight"]):t}}),!x.support.pixelPosition&&x.fn.position&&x.each(["top","left"],function(e,n){x.cssHooks[n]={get:function(e,r){return r?(r=Wt(e,n),Yt.test(r)?x(e).position()[n]+"px":r):t}}})}),x.expr&&x.expr.filters&&(x.expr.filters.hidden=function(e){return 0>=e.offsetWidth&&0>=e.offsetHeight||!x.support.reliableHiddenOffsets&&"none"===(e.style&&e.style.display||x.css(e,"display"))},x.expr.filters.visible=function(e){return!x.expr.filters.hidden(e)}),x.each({margin:"",padding:"",border:"Width"},function(e,t){x.cssHooks[e+t]={expand:function(n){var r=0,i={},o="string"==typeof n?n.split(" "):[n];for(;4>r;r++)i[e+Zt[r]+t]=o[r]||o[r-2]||o[0];return i}},Ut.test(e)||(x.cssHooks[e+t].set=on)});var cn=/%20/g,pn=/\[\]$/,fn=/\r?\n/g,dn=/^(?:submit|button|image|reset|file)$/i,hn=/^(?:input|select|textarea|keygen)/i;x.fn.extend({serialize:function(){return x.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=x.prop(this,"elements");return e?x.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!x(this).is(":disabled")&&hn.test(this.nodeName)&&!dn.test(e)&&(this.checked||!Ct.test(e))}).map(function(e,t){var n=x(this).val();return null==n?null:x.isArray(n)?x.map(n,function(e){return{name:t.name,value:e.replace(fn,"\r\n")}}):{name:t.name,value:n.replace(fn,"\r\n")}}).get()}}),x.param=function(e,n){var r,i=[],o=function(e,t){t=x.isFunction(t)?t():null==t?"":t,i[i.length]=encodeURIComponent(e)+"="+encodeURIComponent(t)};if(n===t&&(n=x.ajaxSettings&&x.ajaxSettings.traditional),x.isArray(e)||e.jquery&&!x.isPlainObject(e))x.each(e,function(){o(this.name,this.value)});else for(r in e)gn(r,e[r],n,o);return i.join("&").replace(cn,"+")};function gn(e,t,n,r){var i;if(x.isArray(t))x.each(t,function(t,i){n||pn.test(e)?r(e,i):gn(e+"["+("object"==typeof i?t:"")+"]",i,n,r)});else if(n||"object"!==x.type(t))r(e,t);else for(i in t)gn(e+"["+i+"]",t[i],n,r)}x.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(e,t){x.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}),x.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)},bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}});var mn,yn,vn=x.now(),bn=/\?/,xn=/#.*$/,wn=/([?&])_=[^&]*/,Tn=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Cn=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Nn=/^(?:GET|HEAD)$/,kn=/^\/\//,En=/^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,Sn=x.fn.load,An={},jn={},Dn="*/".concat("*");try{yn=o.href}catch(Ln){yn=a.createElement("a"),yn.href="",yn=yn.href}mn=En.exec(yn.toLowerCase())||[];function Hn(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(T)||[];if(x.isFunction(n))while(r=o[i++])"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function qn(e,n,r,i){var o={},a=e===jn;function s(l){var u;return o[l]=!0,x.each(e[l]||[],function(e,l){var c=l(n,r,i);return"string"!=typeof c||a||o[c]?a?!(u=c):t:(n.dataTypes.unshift(c),s(c),!1)}),u}return s(n.dataTypes[0])||!o["*"]&&s("*")}function _n(e,n){var r,i,o=x.ajaxSettings.flatOptions||{};for(i in n)n[i]!==t&&((o[i]?e:r||(r={}))[i]=n[i]);return r&&x.extend(!0,e,r),e}x.fn.load=function(e,n,r){if("string"!=typeof e&&Sn)return Sn.apply(this,arguments);var i,o,a,s=this,l=e.indexOf(" ");return l>=0&&(i=e.slice(l,e.length),e=e.slice(0,l)),x.isFunction(n)?(r=n,n=t):n&&"object"==typeof n&&(a="POST"),s.length>0&&x.ajax({url:e,type:a,dataType:"html",data:n}).done(function(e){o=arguments,s.html(i?x("<div>").append(x.parseHTML(e)).find(i):e)}).complete(r&&function(e,t){s.each(r,o||[e.responseText,t,e])}),this},x.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){x.fn[t]=function(e){return this.on(t,e)}}),x.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:yn,type:"GET",isLocal:Cn.test(mn[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Dn,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":x.parseJSON,"text xml":x.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?_n(_n(e,x.ajaxSettings),t):_n(x.ajaxSettings,e)},ajaxPrefilter:Hn(An),ajaxTransport:Hn(jn),ajax:function(e,n){"object"==typeof e&&(n=e,e=t),n=n||{};var r,i,o,a,s,l,u,c,p=x.ajaxSetup({},n),f=p.context||p,d=p.context&&(f.nodeType||f.jquery)?x(f):x.event,h=x.Deferred(),g=x.Callbacks("once memory"),m=p.statusCode||{},y={},v={},b=0,w="canceled",C={readyState:0,getResponseHeader:function(e){var t;if(2===b){if(!c){c={};while(t=Tn.exec(a))c[t[1].toLowerCase()]=t[2]}t=c[e.toLowerCase()]}return null==t?null:t},getAllResponseHeaders:function(){return 2===b?a:null},setRequestHeader:function(e,t){var n=e.toLowerCase();return b||(e=v[n]=v[n]||e,y[e]=t),this},overrideMimeType:function(e){return b||(p.mimeType=e),this},statusCode:function(e){var t;if(e)if(2>b)for(t in e)m[t]=[m[t],e[t]];else C.always(e[C.status]);return this},abort:function(e){var t=e||w;return u&&u.abort(t),k(0,t),this}};if(h.promise(C).complete=g.add,C.success=C.done,C.error=C.fail,p.url=((e||p.url||yn)+"").replace(xn,"").replace(kn,mn[1]+"//"),p.type=n.method||n.type||p.method||p.type,p.dataTypes=x.trim(p.dataType||"*").toLowerCase().match(T)||[""],null==p.crossDomain&&(r=En.exec(p.url.toLowerCase()),p.crossDomain=!(!r||r[1]===mn[1]&&r[2]===mn[2]&&(r[3]||("http:"===r[1]?"80":"443"))===(mn[3]||("http:"===mn[1]?"80":"443")))),p.data&&p.processData&&"string"!=typeof p.data&&(p.data=x.param(p.data,p.traditional)),qn(An,p,n,C),2===b)return C;l=p.global,l&&0===x.active++&&x.event.trigger("ajaxStart"),p.type=p.type.toUpperCase(),p.hasContent=!Nn.test(p.type),o=p.url,p.hasContent||(p.data&&(o=p.url+=(bn.test(o)?"&":"?")+p.data,delete p.data),p.cache===!1&&(p.url=wn.test(o)?o.replace(wn,"$1_="+vn++):o+(bn.test(o)?"&":"?")+"_="+vn++)),p.ifModified&&(x.lastModified[o]&&C.setRequestHeader("If-Modified-Since",x.lastModified[o]),x.etag[o]&&C.setRequestHeader("If-None-Match",x.etag[o])),(p.data&&p.hasContent&&p.contentType!==!1||n.contentType)&&C.setRequestHeader("Content-Type",p.contentType),C.setRequestHeader("Accept",p.dataTypes[0]&&p.accepts[p.dataTypes[0]]?p.accepts[p.dataTypes[0]]+("*"!==p.dataTypes[0]?", "+Dn+"; q=0.01":""):p.accepts["*"]);for(i in p.headers)C.setRequestHeader(i,p.headers[i]);if(p.beforeSend&&(p.beforeSend.call(f,C,p)===!1||2===b))return C.abort();w="abort";for(i in{success:1,error:1,complete:1})C[i](p[i]);if(u=qn(jn,p,n,C)){C.readyState=1,l&&d.trigger("ajaxSend",[C,p]),p.async&&p.timeout>0&&(s=setTimeout(function(){C.abort("timeout")},p.timeout));try{b=1,u.send(y,k)}catch(N){if(!(2>b))throw N;k(-1,N)}}else k(-1,"No Transport");function k(e,n,r,i){var c,y,v,w,T,N=n;2!==b&&(b=2,s&&clearTimeout(s),u=t,a=i||"",C.readyState=e>0?4:0,c=e>=200&&300>e||304===e,r&&(w=Mn(p,C,r)),w=On(p,w,C,c),c?(p.ifModified&&(T=C.getResponseHeader("Last-Modified"),T&&(x.lastModified[o]=T),T=C.getResponseHeader("etag"),T&&(x.etag[o]=T)),204===e||"HEAD"===p.type?N="nocontent":304===e?N="notmodified":(N=w.state,y=w.data,v=w.error,c=!v)):(v=N,(e||!N)&&(N="error",0>e&&(e=0))),C.status=e,C.statusText=(n||N)+"",c?h.resolveWith(f,[y,N,C]):h.rejectWith(f,[C,N,v]),C.statusCode(m),m=t,l&&d.trigger(c?"ajaxSuccess":"ajaxError",[C,p,c?y:v]),g.fireWith(f,[C,N]),l&&(d.trigger("ajaxComplete",[C,p]),--x.active||x.event.trigger("ajaxStop")))}return C},getJSON:function(e,t,n){return x.get(e,t,n,"json")},getScript:function(e,n){return x.get(e,t,n,"script")}}),x.each(["get","post"],function(e,n){x[n]=function(e,r,i,o){return x.isFunction(r)&&(o=o||i,i=r,r=t),x.ajax({url:e,type:n,dataType:o,data:r,success:i})}});function Mn(e,n,r){var i,o,a,s,l=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),o===t&&(o=e.mimeType||n.getResponseHeader("Content-Type"));if(o)for(s in l)if(l[s]&&l[s].test(o)){u.unshift(s);break}if(u[0]in r)a=u[0];else{for(s in r){if(!u[0]||e.converters[s+" "+u[0]]){a=s;break}i||(i=s)}a=a||i}return a?(a!==u[0]&&u.unshift(a),r[a]):t}function On(e,t,n,r){var i,o,a,s,l,u={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)u[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!l&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),l=o,o=c.shift())if("*"===o)o=l;else if("*"!==l&&l!==o){if(a=u[l+" "+o]||u["* "+o],!a)for(i in u)if(s=i.split(" "),s[1]===o&&(a=u[l+" "+s[0]]||u["* "+s[0]])){a===!0?a=u[i]:u[i]!==!0&&(o=s[0],c.unshift(s[1]));break}if(a!==!0)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(p){return{state:"parsererror",error:a?p:"No conversion from "+l+" to "+o}}}return{state:"success",data:t}}x.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(e){return x.globalEval(e),e}}}),x.ajaxPrefilter("script",function(e){e.cache===t&&(e.cache=!1),e.crossDomain&&(e.type="GET",e.global=!1)}),x.ajaxTransport("script",function(e){if(e.crossDomain){var n,r=a.head||x("head")[0]||a.documentElement;return{send:function(t,i){n=a.createElement("script"),n.async=!0,e.scriptCharset&&(n.charset=e.scriptCharset),n.src=e.url,n.onload=n.onreadystatechange=function(e,t){(t||!n.readyState||/loaded|complete/.test(n.readyState))&&(n.onload=n.onreadystatechange=null,n.parentNode&&n.parentNode.removeChild(n),n=null,t||i(200,"success"))},r.insertBefore(n,r.firstChild)},abort:function(){n&&n.onload(t,!0)}}}});var Fn=[],Bn=/(=)\?(?=&|$)|\?\?/;x.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Fn.pop()||x.expando+"_"+vn++;return this[e]=!0,e}}),x.ajaxPrefilter("json jsonp",function(n,r,i){var o,a,s,l=n.jsonp!==!1&&(Bn.test(n.url)?"url":"string"==typeof n.data&&!(n.contentType||"").indexOf("application/x-www-form-urlencoded")&&Bn.test(n.data)&&"data");return l||"jsonp"===n.dataTypes[0]?(o=n.jsonpCallback=x.isFunction(n.jsonpCallback)?n.jsonpCallback():n.jsonpCallback,l?n[l]=n[l].replace(Bn,"$1"+o):n.jsonp!==!1&&(n.url+=(bn.test(n.url)?"&":"?")+n.jsonp+"="+o),n.converters["script json"]=function(){return s||x.error(o+" was not called"),s[0]},n.dataTypes[0]="json",a=e[o],e[o]=function(){s=arguments},i.always(function(){e[o]=a,n[o]&&(n.jsonpCallback=r.jsonpCallback,Fn.push(o)),s&&x.isFunction(a)&&a(s[0]),s=a=t}),"script"):t});var Pn,Rn,Wn=0,$n=e.ActiveXObject&&function(){var e;for(e in Pn)Pn[e](t,!0)};function In(){try{return new e.XMLHttpRequest}catch(t){}}function zn(){try{return new e.ActiveXObject("Microsoft.XMLHTTP")}catch(t){}}x.ajaxSettings.xhr=e.ActiveXObject?function(){return!this.isLocal&&In()||zn()}:In,Rn=x.ajaxSettings.xhr(),x.support.cors=!!Rn&&"withCredentials"in Rn,Rn=x.support.ajax=!!Rn,Rn&&x.ajaxTransport(function(n){if(!n.crossDomain||x.support.cors){var r;return{send:function(i,o){var a,s,l=n.xhr();if(n.username?l.open(n.type,n.url,n.async,n.username,n.password):l.open(n.type,n.url,n.async),n.xhrFields)for(s in n.xhrFields)l[s]=n.xhrFields[s];n.mimeType&&l.overrideMimeType&&l.overrideMimeType(n.mimeType),n.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest");try{for(s in i)l.setRequestHeader(s,i[s])}catch(u){}l.send(n.hasContent&&n.data||null),r=function(e,i){var s,u,c,p;try{if(r&&(i||4===l.readyState))if(r=t,a&&(l.onreadystatechange=x.noop,$n&&delete Pn[a]),i)4!==l.readyState&&l.abort();else{p={},s=l.status,u=l.getAllResponseHeaders(),"string"==typeof l.responseText&&(p.text=l.responseText);try{c=l.statusText}catch(f){c=""}s||!n.isLocal||n.crossDomain?1223===s&&(s=204):s=p.text?200:404}}catch(d){i||o(-1,d)}p&&o(s,c,p,u)},n.async?4===l.readyState?setTimeout(r):(a=++Wn,$n&&(Pn||(Pn={},x(e).unload($n)),Pn[a]=r),l.onreadystatechange=r):r()},abort:function(){r&&r(t,!0)}}}});var Xn,Un,Vn=/^(?:toggle|show|hide)$/,Yn=RegExp("^(?:([+-])=|)("+w+")([a-z%]*)$","i"),Jn=/queueHooks$/,Gn=[nr],Qn={"*":[function(e,t){var n=this.createTween(e,t),r=n.cur(),i=Yn.exec(t),o=i&&i[3]||(x.cssNumber[e]?"":"px"),a=(x.cssNumber[e]||"px"!==o&&+r)&&Yn.exec(x.css(n.elem,e)),s=1,l=20;if(a&&a[3]!==o){o=o||a[3],i=i||[],a=+r||1;do s=s||".5",a/=s,x.style(n.elem,e,a+o);while(s!==(s=n.cur()/r)&&1!==s&&--l)}return i&&(a=n.start=+a||+r||0,n.unit=o,n.end=i[1]?a+(i[1]+1)*i[2]:+i[2]),n}]};function Kn(){return setTimeout(function(){Xn=t}),Xn=x.now()}function Zn(e,t,n){var r,i=(Qn[t]||[]).concat(Qn["*"]),o=0,a=i.length;for(;a>o;o++)if(r=i[o].call(n,t,e))return r}function er(e,t,n){var r,i,o=0,a=Gn.length,s=x.Deferred().always(function(){delete l.elem}),l=function(){if(i)return!1;var t=Xn||Kn(),n=Math.max(0,u.startTime+u.duration-t),r=n/u.duration||0,o=1-r,a=0,l=u.tweens.length;for(;l>a;a++)u.tweens[a].run(o);return s.notifyWith(e,[u,o,n]),1>o&&l?n:(s.resolveWith(e,[u]),!1)},u=s.promise({elem:e,props:x.extend({},t),opts:x.extend(!0,{specialEasing:{}},n),originalProperties:t,originalOptions:n,startTime:Xn||Kn(),duration:n.duration,tweens:[],createTween:function(t,n){var r=x.Tween(e,u.opts,t,n,u.opts.specialEasing[t]||u.opts.easing);return u.tweens.push(r),r},stop:function(t){var n=0,r=t?u.tweens.length:0;if(i)return this;for(i=!0;r>n;n++)u.tweens[n].run(1);return t?s.resolveWith(e,[u,t]):s.rejectWith(e,[u,t]),this}}),c=u.props;for(tr(c,u.opts.specialEasing);a>o;o++)if(r=Gn[o].call(u,e,c,u.opts))return r;return x.map(c,Zn,u),x.isFunction(u.opts.start)&&u.opts.start.call(e,u),x.fx.timer(x.extend(l,{elem:e,anim:u,queue:u.opts.queue})),u.progress(u.opts.progress).done(u.opts.done,u.opts.complete).fail(u.opts.fail).always(u.opts.always)}function tr(e,t){var n,r,i,o,a;for(n in e)if(r=x.camelCase(n),i=t[r],o=e[n],x.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),a=x.cssHooks[r],a&&"expand"in a){o=a.expand(o),delete e[r];for(n in o)n in e||(e[n]=o[n],t[n]=i)}else t[r]=i}x.Animation=x.extend(er,{tweener:function(e,t){x.isFunction(e)?(t=e,e=["*"]):e=e.split(" ");var n,r=0,i=e.length;for(;i>r;r++)n=e[r],Qn[n]=Qn[n]||[],Qn[n].unshift(t)},prefilter:function(e,t){t?Gn.unshift(e):Gn.push(e)}});function nr(e,t,n){var r,i,o,a,s,l,u=this,c={},p=e.style,f=e.nodeType&&nn(e),d=x._data(e,"fxshow");n.queue||(s=x._queueHooks(e,"fx"),null==s.unqueued&&(s.unqueued=0,l=s.empty.fire,s.empty.fire=function(){s.unqueued||l()}),s.unqueued++,u.always(function(){u.always(function(){s.unqueued--,x.queue(e,"fx").length||s.empty.fire()})})),1===e.nodeType&&("height"in t||"width"in t)&&(n.overflow=[p.overflow,p.overflowX,p.overflowY],"inline"===x.css(e,"display")&&"none"===x.css(e,"float")&&(x.support.inlineBlockNeedsLayout&&"inline"!==ln(e.nodeName)?p.zoom=1:p.display="inline-block")),n.overflow&&(p.overflow="hidden",x.support.shrinkWrapBlocks||u.always(function(){p.overflow=n.overflow[0],p.overflowX=n.overflow[1],p.overflowY=n.overflow[2]}));for(r in t)if(i=t[r],Vn.exec(i)){if(delete t[r],o=o||"toggle"===i,i===(f?"hide":"show"))continue;c[r]=d&&d[r]||x.style(e,r)}if(!x.isEmptyObject(c)){d?"hidden"in d&&(f=d.hidden):d=x._data(e,"fxshow",{}),o&&(d.hidden=!f),f?x(e).show():u.done(function(){x(e).hide()}),u.done(function(){var t;x._removeData(e,"fxshow");for(t in c)x.style(e,t,c[t])});for(r in c)a=Zn(f?d[r]:0,r,u),r in d||(d[r]=a.start,f&&(a.end=a.start,a.start="width"===r||"height"===r?1:0))}}function rr(e,t,n,r,i){return new rr.prototype.init(e,t,n,r,i)}x.Tween=rr,rr.prototype={constructor:rr,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||"swing",this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(x.cssNumber[n]?"":"px")},cur:function(){var e=rr.propHooks[this.prop];return e&&e.get?e.get(this):rr.propHooks._default.get(this)},run:function(e){var t,n=rr.propHooks[this.prop];return this.pos=t=this.options.duration?x.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):rr.propHooks._default.set(this),this}},rr.prototype.init.prototype=rr.prototype,rr.propHooks={_default:{get:function(e){var t;return null==e.elem[e.prop]||e.elem.style&&null!=e.elem.style[e.prop]?(t=x.css(e.elem,e.prop,""),t&&"auto"!==t?t:0):e.elem[e.prop]},set:function(e){x.fx.step[e.prop]?x.fx.step[e.prop](e):e.elem.style&&(null!=e.elem.style[x.cssProps[e.prop]]||x.cssHooks[e.prop])?x.style(e.elem,e.prop,e.now+e.unit):e.elem[e.prop]=e.now}}},rr.propHooks.scrollTop=rr.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},x.each(["toggle","show","hide"],function(e,t){var n=x.fn[t];x.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ir(t,!0),e,r,i)}}),x.fn.extend({fadeTo:function(e,t,n,r){return this.filter(nn).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=x.isEmptyObject(e),o=x.speed(t,n,r),a=function(){var t=er(this,x.extend({},e),o);(i||x._data(this,"finish"))&&t.stop(!0)};return a.finish=a,i||o.queue===!1?this.each(a):this.queue(o.queue,a)},stop:function(e,n,r){var i=function(e){var t=e.stop;delete e.stop,t(r)};return"string"!=typeof e&&(r=n,n=e,e=t),n&&e!==!1&&this.queue(e||"fx",[]),this.each(function(){var t=!0,n=null!=e&&e+"queueHooks",o=x.timers,a=x._data(this);if(n)a[n]&&a[n].stop&&i(a[n]);else for(n in a)a[n]&&a[n].stop&&Jn.test(n)&&i(a[n]);for(n=o.length;n--;)o[n].elem!==this||null!=e&&o[n].queue!==e||(o[n].anim.stop(r),t=!1,o.splice(n,1));(t||!r)&&x.dequeue(this,e)})},finish:function(e){return e!==!1&&(e=e||"fx"),this.each(function(){var t,n=x._data(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=x.timers,a=r?r.length:0;for(n.finish=!0,x.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;a>t;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish})}});function ir(e,t){var n,r={height:e},i=0;for(t=t?1:0;4>i;i+=2-t)n=Zt[i],r["margin"+n]=r["padding"+n]=e;return t&&(r.opacity=r.width=e),r}x.each({slideDown:ir("show"),slideUp:ir("hide"),slideToggle:ir("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){x.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),x.speed=function(e,t,n){var r=e&&"object"==typeof e?x.extend({},e):{complete:n||!n&&t||x.isFunction(e)&&e,duration:e,easing:n&&t||t&&!x.isFunction(t)&&t};return r.duration=x.fx.off?0:"number"==typeof r.duration?r.duration:r.duration in x.fx.speeds?x.fx.speeds[r.duration]:x.fx.speeds._default,(null==r.queue||r.queue===!0)&&(r.queue="fx"),r.old=r.complete,r.complete=function(){x.isFunction(r.old)&&r.old.call(this),r.queue&&x.dequeue(this,r.queue)},r},x.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2}},x.timers=[],x.fx=rr.prototype.init,x.fx.tick=function(){var e,n=x.timers,r=0;for(Xn=x.now();n.length>r;r++)e=n[r],e()||n[r]!==e||n.splice(r--,1);n.length||x.fx.stop(),Xn=t},x.fx.timer=function(e){e()&&x.timers.push(e)&&x.fx.start()},x.fx.interval=13,x.fx.start=function(){Un||(Un=setInterval(x.fx.tick,x.fx.interval))},x.fx.stop=function(){clearInterval(Un),Un=null},x.fx.speeds={slow:600,fast:200,_default:400},x.fx.step={},x.expr&&x.expr.filters&&(x.expr.filters.animated=function(e){return x.grep(x.timers,function(t){return e===t.elem}).length}),x.fn.offset=function(e){if(arguments.length)return e===t?this:this.each(function(t){x.offset.setOffset(this,e,t)});var n,r,o={top:0,left:0},a=this[0],s=a&&a.ownerDocument;if(s)return n=s.documentElement,x.contains(n,a)?(typeof a.getBoundingClientRect!==i&&(o=a.getBoundingClientRect()),r=or(s),{top:o.top+(r.pageYOffset||n.scrollTop)-(n.clientTop||0),left:o.left+(r.pageXOffset||n.scrollLeft)-(n.clientLeft||0)}):o},x.offset={setOffset:function(e,t,n){var r=x.css(e,"position");"static"===r&&(e.style.position="relative");var i=x(e),o=i.offset(),a=x.css(e,"top"),s=x.css(e,"left"),l=("absolute"===r||"fixed"===r)&&x.inArray("auto",[a,s])>-1,u={},c={},p,f;l?(c=i.position(),p=c.top,f=c.left):(p=parseFloat(a)||0,f=parseFloat(s)||0),x.isFunction(t)&&(t=t.call(e,n,o)),null!=t.top&&(u.top=t.top-o.top+p),null!=t.left&&(u.left=t.left-o.left+f),"using"in t?t.using.call(e,u):i.css(u)}},x.fn.extend({position:function(){if(this[0]){var e,t,n={top:0,left:0},r=this[0];return"fixed"===x.css(r,"position")?t=r.getBoundingClientRect():(e=this.offsetParent(),t=this.offset(),x.nodeName(e[0],"html")||(n=e.offset()),n.top+=x.css(e[0],"borderTopWidth",!0),n.left+=x.css(e[0],"borderLeftWidth",!0)),{top:t.top-n.top-x.css(r,"marginTop",!0),left:t.left-n.left-x.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent||s;while(e&&!x.nodeName(e,"html")&&"static"===x.css(e,"position"))e=e.offsetParent;return e||s})}}),x.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,n){var r=/Y/.test(n);x.fn[e]=function(i){return x.access(this,function(e,i,o){var a=or(e);return o===t?a?n in a?a[n]:a.document.documentElement[i]:e[i]:(a?a.scrollTo(r?x(a).scrollLeft():o,r?o:x(a).scrollTop()):e[i]=o,t)},e,i,arguments.length,null)}});function or(e){return x.isWindow(e)?e:9===e.nodeType?e.defaultView||e.parentWindow:!1}x.each({Height:"height",Width:"width"},function(e,n){x.each({padding:"inner"+e,content:n,"":"outer"+e},function(r,i){x.fn[i]=function(i,o){var a=arguments.length&&(r||"boolean"!=typeof i),s=r||(i===!0||o===!0?"margin":"border");return x.access(this,function(n,r,i){var o;return x.isWindow(n)?n.document.documentElement["client"+e]:9===n.nodeType?(o=n.documentElement,Math.max(n.body["scroll"+e],o["scroll"+e],n.body["offset"+e],o["offset"+e],o["client"+e])):i===t?x.css(n,r,s):x.style(n,r,i,s)},n,a?i:t,a,null)}})}),x.fn.size=function(){return this.length},x.fn.andSelf=x.fn.addBack,"object"==typeof module&&module&&"object"==typeof module.exports?module.exports=x:(e.jQuery=e.$=x,"function"==typeof define&&define.amd&&define("jquery",[],function(){return x}))})(window);
</script>
<script>



(function (root, factory) {
  if (typeof exports === "object" && exports) {
    factory(exports); // CommonJS
  } else {
    var mustache = {};
    factory(mustache);
    if (typeof define === "function" && define.amd) {
      define(mustache); // AMD
    } else {
      root.Mustache = mustache; // <script>
    }
  }
}(this, function (mustache) {

  var whiteRe = /\s*/;
  var spaceRe = /\s+/;
  var nonSpaceRe = /\S/;
  var eqRe = /\s*=/;
  var curlyRe = /\s*\}/;
  var tagRe = /#|\^|\/|>|\{|&|=|!/;


  var RegExp_test = RegExp.prototype.test;
  function testRegExp(re, string) {
    return RegExp_test.call(re, string);
  }

  function isWhitespace(string) {
    return !testRegExp(nonSpaceRe, string);
  }

  var Object_toString = Object.prototype.toString;
  var isArray = Array.isArray || function (obj) {
    return Object_toString.call(obj) === '[object Array]';
  };

  function escapeRegExp(string) {
    return string.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
  }

  var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': '&quot;',
    "'": '&#39;',
    "/": '&#x2F;'
  };

  function escapeHtml(string) {
    return String(string).replace(/[&<>"'\/]/g, function (s) {
      return entityMap[s];
    });
  }

  function Scanner(string) {
    this.string = string;
    this.tail = string;
    this.pos = 0;
  }

 
  Scanner.prototype.eos = function () {
    return this.tail === "";
  };

 
  Scanner.prototype.scan = function (re) {
    var match = this.tail.match(re);

    if (match && match.index === 0) {
      this.tail = this.tail.substring(match[0].length);
      this.pos += match[0].length;
      return match[0];
    }

    return "";
  };

 
  Scanner.prototype.scanUntil = function (re) {
    var match, pos = this.tail.search(re);

    switch (pos) {
    case -1:
      match = this.tail;
      this.pos += this.tail.length;
      this.tail = "";
      break;
    case 0:
      match = "";
      break;
    default:
      match = this.tail.substring(0, pos);
      this.tail = this.tail.substring(pos);
      this.pos += pos;
    }

    return match;
  };

  function Context(view, parent) {
    this.view = view || {};
    this.parent = parent;
    this._cache = {};
  }

  Context.make = function (view) {
    return (view instanceof Context) ? view : new Context(view);
  };

  Context.prototype.push = function (view) {
    return new Context(view, this);
  };

  Context.prototype.lookup = function (name) {
    var value = this._cache[name];

    if (!value) {
      if (name == '.') {
        value = this.view;
      } else {
        var context = this;

        while (context) {
          if (name.indexOf('.') > 0) {
            value = context.view;
            var names = name.split('.'), i = 0;
            while (value && i < names.length) {
              value = value[names[i++]];
            }
          } else {
            value = context.view[name];
          }

          if (value != null) break;

          context = context.parent;
        }
      }

      this._cache[name] = value;
    }

    if (typeof value === 'function') value = value.call(this.view);

    return value;
  };

  function Writer() {
    this.clearCache();
  }

  Writer.prototype.clearCache = function () {
    this._cache = {};
    this._partialCache = {};
  };

  Writer.prototype.compile = function (template, tags) {
    var fn = this._cache[template];

    if (!fn) {
      var tokens = mustache.parse(template, tags);
      fn = this._cache[template] = this.compileTokens(tokens, template);
    }

    return fn;
  };

  Writer.prototype.compilePartial = function (name, template, tags) {
    var fn = this.compile(template, tags);
    this._partialCache[name] = fn;
    return fn;
  };

  Writer.prototype.getPartial = function (name) {
    if (!(name in this._partialCache) && this._loadPartial) {
      this.compilePartial(name, this._loadPartial(name));
    }

    return this._partialCache[name];
  };

  Writer.prototype.compileTokens = function (tokens, template) {
    var self = this;
    return function (view, partials) {
      if (partials) {
        if (typeof partials === 'function') {
          self._loadPartial = partials;
        } else {
          for (var name in partials) {
            self.compilePartial(name, partials[name]);
          }
        }
      }

      return renderTokens(tokens, self, Context.make(view), template);
    };
  };

  Writer.prototype.render = function (template, view, partials) {
    return this.compile(template)(view, partials);
  };

 
  function renderTokens(tokens, writer, context, template) {
    var buffer = '';

    var token, tokenValue, value;
    for (var i = 0, len = tokens.length; i < len; ++i) {
      token = tokens[i];
      tokenValue = token[1];

      switch (token[0]) {
      case '#':
        value = context.lookup(tokenValue);

        if (typeof value === 'object') {
          if (isArray(value)) {
            for (var j = 0, jlen = value.length; j < jlen; ++j) {
              buffer += renderTokens(token[4], writer, context.push(value[j]), template);
            }
          } else if (value) {
            buffer += renderTokens(token[4], writer, context.push(value), template);
          }
        } else if (typeof value === 'function') {
          var text = template == null ? null : template.slice(token[3], token[5]);
          value = value.call(context.view, text, function (template) {
            return writer.render(template, context);
          });
          if (value != null) buffer += value;
        } else if (value) {
          buffer += renderTokens(token[4], writer, context, template);
        }

        break;
      case '^':
        value = context.lookup(tokenValue);


        if (!value || (isArray(value) && value.length === 0)) {
          buffer += renderTokens(token[4], writer, context, template);
        }

        break;
      case '>':
        value = writer.getPartial(tokenValue);
        if (typeof value === 'function') buffer += value(context);
        break;
      case '&':
        value = context.lookup(tokenValue);
        if (value != null) buffer += value;
        break;
      case 'name':
        value = context.lookup(tokenValue);
        if (value != null) buffer += mustache.escape(value);
        break;
      case 'text':
        buffer += tokenValue;
        break;
      }
    }

    return buffer;
  }

 
  function nestTokens(tokens) {
    var tree = [];
    var collector = tree;
    var sections = [];

    var token;
    for (var i = 0, len = tokens.length; i < len; ++i) {
      token = tokens[i];
      switch (token[0]) {
      case '#':
      case '^':
        sections.push(token);
        collector.push(token);
        collector = token[4] = [];
        break;
      case '/':
        var section = sections.pop();
        section[5] = token[2];
        collector = sections.length > 0 ? sections[sections.length - 1][4] : tree;
        break;
      default:
        collector.push(token);
      }
    }

    return tree;
  }

 
  function squashTokens(tokens) {
    var squashedTokens = [];

    var token, lastToken;
    for (var i = 0, len = tokens.length; i < len; ++i) {
      token = tokens[i];
      if (token) {
        if (token[0] === 'text' && lastToken && lastToken[0] === 'text') {
          lastToken[1] += token[1];
          lastToken[3] = token[3];
        } else {
          lastToken = token;
          squashedTokens.push(token);
        }
      }
    }

    return squashedTokens;
  }

  function escapeTags(tags) {
    return [
      new RegExp(escapeRegExp(tags[0]) + "\\s*"),
      new RegExp("\\s*" + escapeRegExp(tags[1]))
    ];
  }

 
  function parseTemplate(template, tags) {
    template = template || '';
    tags = tags || mustache.tags;

    if (typeof tags === 'string') tags = tags.split(spaceRe);
    if (tags.length !== 2) throw new Error('Invalid tags: ' + tags.join(', '));

    var tagRes = escapeTags(tags);
    var scanner = new Scanner(template);

    var sections = [];     // Stack to hold section tokens
    var tokens = [];       // Buffer to hold the tokens
    var spaces = [];       // Indices of whitespace tokens on the current line
    var hasTag = false;    // Is there a {{tag}} on the current line?
    var nonSpace = false;  // Is there a non-space char on the current line?


    function stripSpace() {
      if (hasTag && !nonSpace) {
        while (spaces.length) {
          delete tokens[spaces.pop()];
        }
      } else {
        spaces = [];
      }

      hasTag = false;
      nonSpace = false;
    }

    var start, type, value, chr, token;
    while (!scanner.eos()) {
      start = scanner.pos;

      value = scanner.scanUntil(tagRes[0]);
      if (value) {
        for (var i = 0, len = value.length; i < len; ++i) {
          chr = value.charAt(i);

          if (isWhitespace(chr)) {
            spaces.push(tokens.length);
          } else {
            nonSpace = true;
          }

          tokens.push(['text', chr, start, start + 1]);
          start += 1;

          if (chr == '\n') stripSpace();
        }
      }

      if (!scanner.scan(tagRes[0])) break;
      hasTag = true;

      type = scanner.scan(tagRe) || 'name';
      scanner.scan(whiteRe);

      if (type === '=') {
        value = scanner.scanUntil(eqRe);
        scanner.scan(eqRe);
        scanner.scanUntil(tagRes[1]);
      } else if (type === '{') {
        value = scanner.scanUntil(new RegExp('\\s*' + escapeRegExp('}' + tags[1])));
        scanner.scan(curlyRe);
        scanner.scanUntil(tagRes[1]);
        type = '&';
      } else {
        value = scanner.scanUntil(tagRes[1]);
      }

      if (!scanner.scan(tagRes[1])) throw new Error('Unclosed tag at ' + scanner.pos);

      token = [type, value, start, scanner.pos];
      tokens.push(token);

      if (type === '#' || type === '^') {
        sections.push(token);
      } else if (type === '/') {

        if (sections.length === 0) throw new Error('Unopened section "' + value + '" at ' + start);
        var openSection = sections.pop();
        if (openSection[1] !== value) throw new Error('Unclosed section "' + openSection[1] + '" at ' + start);
      } else if (type === 'name' || type === '{' || type === '&') {
        nonSpace = true;
      } else if (type === '=') {

        tags = value.split(spaceRe);
        if (tags.length !== 2) throw new Error('Invalid tags at ' + start + ': ' + tags.join(', '));
        tagRes = escapeTags(tags);
      }
    }

    var openSection = sections.pop();
    if (openSection) throw new Error('Unclosed section "' + openSection[1] + '" at ' + scanner.pos);

    tokens = squashTokens(tokens);

    return nestTokens(tokens);
  }

  mustache.name = "mustache.js";
  mustache.version = "0.7.2";
  mustache.tags = ["{{", "}}"];

  mustache.Scanner = Scanner;
  mustache.Context = Context;
  mustache.Writer = Writer;

  mustache.parse = parseTemplate;


  mustache.escape = escapeHtml;

  var defaultWriter = new Writer();

 
  mustache.clearCache = function () {
    return defaultWriter.clearCache();
  };

 
  mustache.compile = function (template, tags) {
    return defaultWriter.compile(template, tags);
  };

 
  mustache.compilePartial = function (name, template, tags) {
    return defaultWriter.compilePartial(name, template, tags);
  };

 
  mustache.compileTokens = function (tokens, template) {
    return defaultWriter.compileTokens(tokens, template);
  };

 
  mustache.render = function (template, view, partials) {
    return defaultWriter.render(template, view, partials);
  };

  mustache.to_html = function (template, view, partials, send) {
    var result = mustache.render(template, view, partials);

    if (typeof send === "function") {
      send(result);
    } else {
      return result;
    }
  };

}));

</script>

<script>
function StringBuffer()
{ 
    this.buffer = []; 
} 

StringBuffer.prototype.append = function append(string)
{ 
    this.buffer.push(string); 
    return this; 
}; 

StringBuffer.prototype.toString = function toString()
{ 
    return this.buffer.join(""); 
}; 

var Base64 =
{
    codex : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

    encode : function (input)
    {
        var output = new StringBuffer();

        var enumerator = new Utf8EncodeEnumerator(input);
        while (enumerator.moveNext())
        {
            var chr1 = enumerator.current;

            enumerator.moveNext();
            var chr2 = enumerator.current;

            enumerator.moveNext();
            var chr3 = enumerator.current;

            var enc1 = chr1 >> 2;
            var enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            var enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            var enc4 = chr3 & 63;

            if (isNaN(chr2))
            {
                enc3 = enc4 = 64;
            }
            else if (isNaN(chr3))
            {
                enc4 = 64;
            }

            output.append(this.codex.charAt(enc1) + this.codex.charAt(enc2) + this.codex.charAt(enc3) + this.codex.charAt(enc4));
        }

        return output.toString();
    },

    decode : function (input)
    {
        var output = new StringBuffer();

        var enumerator = new Base64DecodeEnumerator(input);
        while (enumerator.moveNext())
        {
            var charCode = enumerator.current;

            if (charCode < 128)
                output.append(String.fromCharCode(charCode));
            else if ((charCode > 191) && (charCode < 224))
            {
                enumerator.moveNext();
                var charCode2 = enumerator.current;

                output.append(String.fromCharCode(((charCode & 31) << 6) | (charCode2 & 63)));
            }
            else
            {
                enumerator.moveNext();
                var charCode2 = enumerator.current;

                enumerator.moveNext();
                var charCode3 = enumerator.current;

                output.append(String.fromCharCode(((charCode & 15) << 12) | ((charCode2 & 63) << 6) | (charCode3 & 63)));
            }
        }

        return output.toString();
    }
}


function Utf8EncodeEnumerator(input)
{
    this._input = input;
    this._index = -1;
    this._buffer = [];
}

Utf8EncodeEnumerator.prototype =
{
    current: Number.NaN,

    moveNext: function()
    {
        if (this._buffer.length > 0)
        {
            this.current = this._buffer.shift();
            return true;
        }
        else if (this._index >= (this._input.length - 1))
        {
            this.current = Number.NaN;
            return false;
        }
        else
        {
            var charCode = this._input.charCodeAt(++this._index);



            if ((charCode == 13) && (this._input.charCodeAt(this._index + 1) == 10))
            {
                charCode = 10;
                this._index += 2;
            }

            if (charCode < 128)
            {
                this.current = charCode;
            }
            else if ((charCode > 127) && (charCode < 2048))
            {
                this.current = (charCode >> 6) | 192;
                this._buffer.push((charCode & 63) | 128);
            }
            else
            {
                this.current = (charCode >> 12) | 224;
                this._buffer.push(((charCode >> 6) & 63) | 128);
                this._buffer.push((charCode & 63) | 128);
            }

            return true;
        }
    }
}

function Base64DecodeEnumerator(input)
{
    this._input = input;
    this._index = -1;
    this._buffer = [];
}

Base64DecodeEnumerator.prototype =
{
    current: 64,

    moveNext: function()
    {
        if (this._buffer.length > 0)
        {
            this.current = this._buffer.shift();
            return true;
        }
        else if (this._index >= (this._input.length - 1))
        {
            this.current = 64;
            return false;
        }
        else
        {
            var enc1 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var enc2 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var enc3 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var enc4 = Base64.codex.indexOf(this._input.charAt(++this._index));

            var chr1 = (enc1 << 2) | (enc2 >> 4);
            var chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            var chr3 = ((enc3 & 3) << 6) | enc4;

            this.current = chr1;

            if (enc3 != 64)
                this._buffer.push(chr2);

            if (enc4 != 64)
                this._buffer.push(chr3);

            return true;
        }
    }
};
</script>

    <!--// Google analytics //-->
<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20427551-8']);
_gaq.push(['_setDomainName', 'nullism.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);
_gaq.push(['_setSampleRate', '70']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript';
  ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
  'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
})();
has_gaq = true;
</script>
<!--// END Google analytics //-->

    <script>
  has_loggly = true;
  
(function(window, document) {
    var LOGGLY_INPUT_PREFIX = 'http' + ( ('https:' === document.location.protocol ? 's' : '') ) + '://logs-01.loggly.com/inputs/',
        LOGGLY_INPUT_SUFFIX = '.gif?',
        LOGGLY_SESSION_KEY = 'logglytrackingsession',
        LOGGLY_SESSION_KEY_LENGTH = LOGGLY_SESSION_KEY.length + 1;

    function uuid() {

        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
            return v.toString(16);
        });  
    }
    
    function LogglyTracker() {
        this.key = false;
    }
    
    function setKey(tracker, key) {
        tracker.key = key;
        tracker.setSession();
        setInputUrl(tracker);
    }
    
    function setInputUrl(tracker) {
        tracker.inputUrl = LOGGLY_INPUT_PREFIX + tracker.key + LOGGLY_INPUT_SUFFIX;
    }
    
    LogglyTracker.prototype = {
        setSession: function(session_id) {
            if(session_id) {
                this.session_id = session_id;
                this.setCookie(this.session_id);
            } else if(!this.session_id) {
                this.session_id = this.readCookie();
                if(!this.session_id) {
                    this.session_id = uuid();
                    this.setCookie(this.session_id);
                }
            }
        },
        push: function(data) {
            var type = typeof data;
            
            if( !data || !(type === 'object' || type === 'string') ) {
                return;
            }

            var self = this;

            setTimeout(function() {
                if(type === 'string') {
                    data = {
                        'text': data
                    };
                } else {
                    if(data.logglyKey) {
                        setKey(self, data.logglyKey);
                        return;
                    }
                
                    if(data.session_id) {
                        self.setSession(data.session_id);
                        return;
                    }
                }
                
                if(!self.key) {
                    return;
                }
            
                self.track(data);
            }, 0);
            
        },
        track: function(data) {

            data.sessionId = this.session_id;
        
            try {
                var im = new Image(),
                    q = 'PLAINTEXT=' + encodeURIComponent(JSON.stringify(data));
                im.src = this.inputUrl + q;
            } catch (ex) {
                if (window && window.console && typeof window.console.log === 'function') {
                    console.log("Failed to log to loggly because of this exception:\n" + ex);
                    console.log("Failed log data:", data);
                }
            }
        },
       
        readCookie: function() {
            var cookie = document.cookie,
                i = cookie.indexOf(LOGGLY_SESSION_KEY);
            if(i < 0) {
                return false;
            } else {
                var end = cookie.indexOf(';', i + 1);
                end = end < 0 ? cookie.length : end;
                return cookie.slice(i + LOGGLY_SESSION_KEY_LENGTH, end);
            }
        },
        setCookie: function(value) {
            document.cookie = LOGGLY_SESSION_KEY + '=' + value;
        }
    };
    
    var existing = window._LTracker;
    
    var tracker = new LogglyTracker();
    
    if(existing && existing.length ) {
        var i = 0,
            eLength = existing.length;
        for(i = 0; i < eLength; i++) {
            tracker.push(existing[i]);
        }
    }
    
    window._LTracker = tracker; // default global tracker
    
    window.LogglyTracker = LogglyTracker;   // if others want to instantiate more than one tracker
    
})(window, document);

  var _LTracker = _LTracker || [];
  _LTracker.push({'logglyKey': '47fed687-0ba9-4cef-8108-29a1543b5bcc' });
</script>


<style type="text/css">
body { 
    font-size: 1.0em;
    font-family: 'Exo 2', Verdana, Helvetica, Arial;
    color: #333;
    background: #f89900;
}
a, a:visited, a:active { 
    text-decoration: none;
    color: #369;
}
a:hover { 
    text-decoration: underline;
}
textarea { 
    border: 1px solid #aaa;
    background: #fff;
    border-radius: 5px;
}
button {
    margin: 1px; 
    background-color: #bbb;
    border: 1px solid #000;
    border-radius: 5px;
    color: #000;
    text-shadow: -1px -1px 0px #aaa;
    cursor: pointer;
    font-weight: bold;
    padding: 5px;
}
button:disabled, button.disabled {
    color: #aaa;
    background-color: #777;
    border-color: #000;
    cursor: default;
    text-shadow: none;
}

h1, h2 { 
    color: #fff;
    text-shadow: -1px -1px 0px #27c;
}
h3 { 
    font-size: 1.0em;
}
h2 { 
    font-size: 1.2em;
}
h1 { 
    font-size: 1.4em;
}
#updated { 
    display: none;
    background: #cfc;
    font-weight: bold;
    border-radius: 10px;
    padding: 10px;
}
#last_saved { 
    color: #eee;
    font-size: 0.9em;
    text-align: center;
}
#risk_div { 
    color: #fff;
    font-size: 1.1em;
    padding: 3px;
    margin-bottom: 5px;
    text-align: center;
}
#last_message { 
    color: #eee;
}
#last_message div { 
    margin: auto;
}
#messages { 
    position: relative;
    width: 100%;
    border: 1px solid #39e;
    overflow: hidden;
    border-radius: 10px;
    color: #eee;
}
#last_message div, #messages div { 
    margin-bottom: -2px;
}

.good_message {
    color: #209C02;
}
.bad_message { 
    color: #FF0000;
}
#footer a, #footer a:visited, #footer a:active { 
    color: #9be;
}
.make_up, .sell_up { 
    display: none;
    z-index: 1500;
    position: fixed;
    font-size: 1.3em;
    font-weight: bold;
    color: #ccc;
    text-shadow: 0px 1px 1px #333;
}
.make_up { 
    color: #58f;
}
.sell_up { 
    color: #5e5;
}
#left_wrap { 
    float: left;
    margin-right: 10px;
    width: 100%;
}
#left_floatable { 
    width: 100%;
    z-index: 1000;
}
#make_sell_wrap, #make_sell_spacer { 
    background: #fff;
    border-bottom: 2px solid #dde;
    border-radius: 5px;
    width: 100%;
}
#make_sell_spacer { 
    display: none;
    background: none;
    border: none; 
    height: 520px;
}
#make_div, #sell_div { 
    padding: 3px;
    margin: 4px;
    text-align: center;
}
#make_btn, #sell_btn {
    -moz-user-select: none; 
    -webkit-user-select: none; 
    -ms-user-select:none; 
    user-select:none; 
    margin: auto; 
    padding: 10px;
    width: 220px;
    font-weight: bold;
    font-size: 1.1em;
    color: #fff;
    cursor: pointer;
    border-radius: 10px;
    border: 2px solid #ccc;
}
#make_btn:disabled, #sell_btn:disabled { 
    color: #ddd;
}
#make_btn { 
    background-color: #39f;
    border-color: #27e;
    text-shadow: -1px -1px 1px #27e;
}
#sell_btn { 
    background-color: #1c3;
    border-color: #0a0;
    text-shadow: -1px -1px 1px #0a0;
}
#btctalk_btn {
    -moz-user-select: none; 
    -webkit-user-select: none; 
    -ms-user-select:none; 
    user-select:none; 
    margin: auto; 
    padding: 10px;
    width: 220px;
    font-weight: bold;
    font-size: 1.1em;
    color: #fff;
    cursor: pointer;
    border-radius: 10px;
    border: 2px solid #ccc;
	background-color: #00bcff;
    border-color: #39788f;
    text-shadow: -1px -1px 1px #39788f;
}


.semi_trans { 
    opacity: 0.5;
    -moz-opacity: 0.5;
}
.s_div, .w_div { 
   
    border-radius: 8px;
    background: #fff;
    margin: 4px;
    padding: 2px;
}
.w_div { 
    padding: 10px;
}
.s_div p { 
    margin: 0px;
    padding: 3px;
}
.s_div h3 { 
    margin: 2px;
}
.space_left { 
    margin-left: 10px;
}
.pull_left { 
    float: left;
}
.pull_right { 
    float: right;
}
.small { 
    font-size: 0.8em;
}
.grey { 
    color: #777;
}
.light_grey { 
    color: #aaa;
}

.tab { 
    outline: none;
    width: 48%;
}
.tab.active { 
    background: #eee;
    border-color: #000;
    color: #000;
    text-shadow: none;
}


.message, .error { 
    margin: 0px;
    padding: 3px;
}
.error { 
    font-weight: bold;
    color: #f22;
}
.hidden { 
    display: none;
}
.purchased { 
    color: #0a0;
}
.locked { 
    color: #777;
}
.max { 
    width: 100%;
    clear: both;
    margin: 0px;
}
.clear { 
    clear: both;
    padding: 0;
    margin: 0;
    width: 0;
    height: 0;
}
.resource { 
    float: left;
    padding: 3px;
    margin: 2px;
    border: 1px solid #eee;
}
.btn { 
    padding: 5px;
    background: #ddd;
    font-weight: bold;
    border-radius: 10px;
    border: 1px solid #ddd;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    box-shadow: 1px 1px 1px #bbb;
}
.btn:disabled { 
    cursor: default;
}

.btn-large { 
    font-size: 1.1em;
    padding: 10px;
}
.btn-large:disabled { 
    color: #ddd;
}
.blue_bg, .green_bg { 
    color: #fff;
}
.blue_bg { 
    background-color: #11aaff;
    border-color: #11aaff;
    text-shadow: -1px -1px 0px #09d;
}
.green_bg { 
    background-color: #11dd77;
    border-color: #11dd77;
    text-shadow: -1px -1px 0px #0a3;
}

@media screen and (min-height: 550px) and (min-width: 700px) { 
    #left_floatable {
        position: fixed; 
        top: 5px;
        left: 5px;
        border: none;
        background: none;
        width: inherit;
    }
    #make_sell_spacer { display: block; }
}

@media screen and (min-width: 200px) {
    .tab {
        width: 100%;
    }
}
@media screen and (min-width: 400px) { 
    .tab { 
        width: 48%;
    }
}
@media screen and (min-width: 700px) { 
    #tab_divs, #tab_btns {
        float: left;
        width: 58%;
    }
    .tab { 
        width: 48%;
    }
    #left_wrap { 
        float: left;
        min-width: 250px;
        width: 40%;
    }

}

@media screen and (min-width: 850px) { 

}

@media screen and (min-width: 1100px) { 
    .tab { 
        width: 31%;
    }
    #left_wrap { 
        width: 30%;
    }
    #tab_divs, #tab_btns { 
        width: 65%;
    }
}
@media screen and (min-width: 1300px) { 
    .tab { 
        width: 23%;
    }
    #left_wrap { 
        width: 25%;
    }
    #tab_divs, #tab_btns { 
        width: 70%;
    }
}
@media screen and (min-width: 1600px) { 
    .tab { 
        width: 19%;
    }
    #left_wrap { 
        width: 20%;
    }
    #tab_divs, #tab_btns { 
        width: 75%;
    }
}
@media screen and (min-width: 1900px) { 
    .tab { 
        width: 15%;
    }
    #left_wrap { 
        width: 16%;
    }
    #tab_divs, #tab_btns { 
        width: 80%;
    }
}



</style>

</head>

<body>

<script>


var active_tab = '';
var tmr = null;
var sec_tmr = null;
var save_tmr = null;
var last_save_tmr = null;
var stat_tmr = null;
var event_tmr = null;
var ver_tmr = null;
var last_tick = (new Date).getTime();
var last_saved = 0;
var last_click = 0;
var last_bust = 0;
var last_float = 10;

var tick_ms = 100;



function Game() { 

    var pd = {
        'title':'Bitcoin Clicker',
        'version':'0.8.3',
        'make_amount':1,
        'make_rps_multiplier':0,
        'sell_amount':1,
        'sell_rps_multiplier':0,
        'sell_return':0.5,
        'economy_roi':1,
        'difficulty_multiplier':1,
        'economy_rois':[
            {
                'roi':0.5,
                'label':'Poor',
            },
            {
                'roi':1,
                'label':'Average',
            },
            {
                'roi':1.5,
                'label':'Good',
            },
            {
                'roi':2,
                'label':'Very Good',
            },
        ],
        'difficulty_level':0,
        'difficulty_levels':[
            {
                'level':0,
                'label':'Default',
            },
            {
                'level':1,
                'label':'Hard',
            },
            {
                'level':2,
                'label':'Insane',
            },
        ],
        'risk_amount':0,
        'risk2_amount':0,
        'risk_levels':[
            {
                'level':0.0001,
                'label':'nearly impossible',
                'color':'green',
            },
            { 
                'level':0.005,
                'label':'super low',
                'color':'green',
            },
            {
                'level':0.05,
                'label':'very low',
                'color':'green'
            },
            {
                'level':0.2,
                'label':'low',
                'color':'green',
            },
            { 
                'level':0.35,
                'label':'moderate',
                'color':'orange',
            },
            {
                'level':0.50,
                'label':'high',
                'color':'red',
            },
            {   
                'level':0.7,
                'label':'very high',
                'color':'red',
            },
            {
                'level':0.9,
                'label':'nearly certain (!)',
                'color':'red',
            },
            { 
                'level':100000000000000000,
                'label':'certain (!!)',
                'color':'red',
            },
        ],
        'cash': {
            'amount':0,
            'safe':0, 
            'safe_rps':0,
            'label':'United States Dollars',
            'action_label':'EXCHANGE!',
        },
        'widget_roi':1,
        'widgets':{
            'amount':0,
            'label':'Bitcoin',
            'action_label':'MINE!',
            'qualities':{
                1: 'dirt cheap',
                2: 'cheap',
                4: 'still cheap',
                6: 'getting better',
                10: 'okay',
                13: 'good',
                16: 'great',
                20: 'really great',
                25: 'awesome',
                50: 'really awesome',
                100: 'extremely awesome!',
            },
        },

        'banks':{
            'b_lemonade':{
                'amount':0,
                'label':'Safe',
                'description':'Keep your mining earnings in a small safe.',
                'rps':1,
                'unlock_rps':1,
                'cost':200,
                'base_cost':200,
                'unlocked':true,
                'sid':'b1',
            },
            'b_nail_salon':{
                'amount':0,
                'label':'Hidden Room',
                'description':'Fill a hidden room with cash to keep it safe from the IRS.',
                'rps':12,
                'unlock_rps':5,
                'cost':8000,
                'base_cost':8000,
                'unlocked':false,
                'sid':'b2',
            },
            'b_banana_stand':{
                'amount':0,
                'label':'Local Bank',
                'description':'Deposit small amounts of cash in a local bank.',
                'rps':120,
                'unlock_rps':12,
                'cost':100000,
                'base_cost':100000,
                'unlocked':false,
                'sid':'b3',
            },
            'b_chicken_place':{
                'amount':0,
                'label':'Cayman Bank Account',
                'description':'Put money into a Cayman bank account.',
                'rps':1500,
                'unlock_rps':150,
                'cost':1000000,
                'base_cost':1000000,
                'unlocked':false,
                'sid':'b4',
            },
            'b_laser_tag':{
                'amount':0,
                'label':'Swiss Bank Account',
                'description':'Deposit large amounts of cash into a Swiss account.',
                'rps':16000,
                'unlock_rps':500,
                'cost':10000000,
                'base_cost':10000000,
                'unlocked':false,
                'sid':'b5',
            },
            'b_car_wash':{
                'label':'Small Island',
                'amount':0,
                'description':'Buy a small Pacific island and keep cash there.',
                'rps':220000,
                'unlock_rps':5000,
                'cost':100000000,
                'base_cost':100000000,
                'unlocked':false,
                'sid':'b6',
            },
            'b_donations':{
                'label':'Register with the IRS as a religion',
                'amount':0,
                'description':'Register as a religion to keep most of your cash safe.',
                'rps':5200000,
                'unlock_rps':50000,
                'cost':500000000,
                'base_cost':500000000,
                'unlocked':false,
                'sid':'b7',
            },
            'b_offshore': {
                'label':'The Bitcoin Bank',
                'amount':0,
                'description':'Keep your cash safe under the disguise of a bank',
                'rps':60000000,
                'unlock_rps':500000,
                'cost':4500000000,
                'base_cost':4500000000,
                'unlocked':false,
                'sid':'b8',
            },
            'b_nyme': {
                'label':'NYSE',
                'amount':0,
                'description':'Secure high volumes of cash through stocks and bonds on '
                    + 'the New York Stock Exchange ',
                'rps':750000000,
                'unlock_rps':5000000,
                'cost':50500000000,
                'base_cost':50500000000,
                'unlocked':false,
                'sid':'b9',
            },
            'b_franchise': {
                'label':'Food Franchise',
                'amount':0,
                'description':'Secure cash through a food franchise.',
                'rps':4550000000,
                'unlock_rps':15000000,
                'cost':150500000000,
                'base_cost':150500000000,
                'unlocked':false,
                'sid':'b10',
            },
            'b_cantina': {
                'label':'Space Cantina',
                'amount':0,
                'description':'Secure your cash on an intergalactic scale with the Space Cantina',
                'rps':14550000000,
                'unlock_rps':30000000,
                'cost':750500000000,
                'base_cost':750500000000,
                'unlocked':false,
                'sid':'b11',
            },
            'b_resort':{
                'label':'Space Resort',
                'amount':0,
                'description':'Secure your cash through a low gravity spa and resort',
                'rps':200000000000,
                'unlock_rps':50000000,
                'cost':2500500000000,
                'base_cost':2500500000000,
                'unlocked':false,
                'sid':'b12',
            },
            'b_spacecorp':{
                'label':'Space Corp',
                'amount':0,
                'description':'Secure cash through a shady conglomerate that deals in planetary '
				    +  'colonisation, asteroid mining, and other technology, with secret ties to the military',
                'rps':1200000000000,
                'unlock_rps':125000000,
                'cost':10000000000000,
                'base_cost':10000000000000,
                'unlocked':false,
                'sid':'b13',
            },
        },

        'clickers':{
            '01_storage_shed':{
                'label':'Pentium 4 CPU',
                'description':'A cheap CPU that lay unused in an old computer.',
                'amount':0,
                'risk':0.05,
                'rps':1,
                'base_cost':30,
                'cost':30,
                'unlock_rps':0,
                'unlocked':true,
                'sid':'c1',
				'img':'http://www.esaitech.com/images/detailed/8/SSS/img51492.jpg',
            },
            '03_used_rv':{
                'label':'Celeron CPU',
                'description':'A low-cost CPU from your local computer parts store.',
                'amount':0,
                'risk':0.05,
                'rps':5,
                'base_cost':200,
                'cost':200,
                'unlock_rps':1,
                'unlocked':false,
                'sid':'c2',
				'img': 'http://i1-news.softpedia-static.com/images/news2/17W-TDP-Sandy-Bridge-Based-Celeron-Coming-in-Summer-2.jpg',
            },
            'trailer':{
                'label':'Core 2 Quad CPU',
                'description':'A medium-cost CPU from your local computer parts store.',
                'amount':0,
                'risk':.005,
                'rps':10,
                'base_cost':1000,
                'cost':1000,
                'unlock_rps':6,
                'unlocked':false,
                'sid':'c3',
				'img':'http://pcwizkidstechtalk.com/images/stories/pcwizkid/intel%20core%202%20quad.jpg',
            },
            '05_house':{
                'label':'Core i7 CPU',
                'description':'A higher-end CPU from an online retailer.',
                'amount':0,
                'risk':.05,
                'rps':25,
                'base_cost':5000,
                'cost':5000,
                'unlock_rps':12,
                'unlocked':false,
                'sid':'c4',
				'img':'http://www.pc-malta.com/core%20i7%20cpu.jpg',
            },
            '07_warehouse':{
                'label':'Quad Intel Xeon CPU',
                'description':'The best CPU on the market, times four.',
                'amount':0,
                'rps':60,
                'risk':0.05,
                'base_cost':30000,
                'cost':30000,
                'unlock_rps':30,
                'unlocked':false,
                'sid':'c5',
				'img':'http://images10.newegg.com/NeweggImage/ProductImageCompressAll300/19-117-182-03.jpg',
            },
            '09_lab':{ 
                'label':'AMD 4870 GPU',
                'description':'A low-end GPU from 2008.',
                'amount':0,
                'rps':100,
                'risk':.1,
                'base_cost':150000,
                'cost':150000,
                'unlock_rps':100,
                'unlocked':false,
                'sid':'c6',
				'img':'http://snappi.wpengine.netdna-cdn.com/wp-content/uploads/2009/08/ati_radeon_hd_4870_1.jpg',
            },
            '10_under_lab': {
                'label':'AMD 5870 GPU',
                'description':'A GPU one tier above the 4870.',
                'amount':0,
                'risk':0.005,
                'rps':500,
                'base_cost':600000,
                'cost':600000,
                'unlock_rps':250,
                'unlocked':false,
                'sid':'c7',
				'img':'http://www.amd.com/PublishingImages/Public/Photograph_ProductShots/PNG/40810.png',
            },
            '11_bot': {
                'label':'Triple AMD 7990 GPUs',
                'description':'The greatest bitcoin mining GPUs ever to hit the market.',
                'amount':0,
                'risk':0.1,
                'rps':3000,
                'base_cost':3000000,
                'cost':3000000,
                'unlock_rps':750,
                'unlocked':false,
                'sid':'c8',
				'img':'http://i.imgur.com/NmkcKv3.jpg?1?1052',
            },
            '11_bot_s': {
                'label':'Dual Block Erupter Blades',
                'description':'ASIC Technology by ASICMINER',
                'amount':0,
                'risk':0.1,
                'rps':20000,
                'base_cost':15000000,
                'cost':15000000,
                'unlock_rps':3900,
                'unlocked':false,
                'sid':'c9',
				'img':'http://www.bitcoinminerz.com/image/cache/data/Bitcoin%20Mining%20Hardware/Erupter_blade_stockimage-600x600.jpg',
            },
            'under_complex':{
                'label':'KnCMiner Mercury',
                'description':'An high hashrate ASIC bitcoin miner by KnCMiner',
                'amount':0,
                'risk':0.005,
                'rps':100000,
                'base_cost':75000000,
                'cost':75000000,
                'unlock_rps':24500,
                'unlocked':false,
                'sid':'c10',
				'img':'https://www.kncminer.com/pictures/category/5426.jpg',
            },
            'country':{
                'label':'BitForce Mini Rig',
                'description':'A high-hashrate bitcoin mining rig.',
                'amount':0,
                'risk':0.00000001,
                'rps':500000,
                'base_cost':400000000,
                'cost':400000000,
                'unlock_rps':125000,
                'unlocked':false,
                'sid':'c11',
				'img':'http://i.imgur.com/fGBFBgo.png',
            },
            '12_moon_lab': {
                'label':'CoinTerra TerraMiner IV',
                'description':'One of the fastest and most efficient bitcoin miners.',
                'amount':0,
                'risk':0.00000001,
                'rps':2000000,
                'base_cost':2000000000,
                'cost':2000000000,
                'unlock_rps':650000,
                'unlocked':false,
                'sid':'c12',
				'img':'http://cointerra.com/wp-content/uploads/2013/10/rear-iso-wo-cover1.jpg',
            },
            'station': {
                'label':'14nm ASIC Technology',
                'description':'Advanced ASIC technology which will soon be released to the public.',
                'amount':0,
                'risk':0.000000001,
                'rps':10000000,
                'base_cost':16750000000,
                'cost':16750000000,
                'unlock_rps':2750000,
                'unlocked':false,
                'sid':'c13',
				'img':'http://i.imgur.com/GOSfb3s.png',
            },
            'meth_factory':{
                'label':'Experimental 5nm ASIC Technology',
                'description':'Experiments undertaken by your team of researches '
				    + 'have been successful, and 5nm ASIC miners are now a reality.',
                'amount':0,
                'risk':0.55,
                'rps':75000000,
                'base_cost':85500000000,
                'cost':85500000000,
                'unlock_rps':13000000,
                'unlocked':false,
                'sid':'c14',
				'img':'http://i.imgur.com/vMBdaRA.jpg',
            },
            'belt':{
                'label':'Highly Advanced 0.5nm ASIC Chips',
                'description':'Your team of researchers have been able to '
                    + 'break laws of quantum mechanics and produce 0.5nm chips.',
                'amount':0,
                'risk':0.000001,
                'rps':500000000,
                'base_cost':411700000000,
                'cost':411700000000,
                'unlock_rps':90000000,
                'unlocked':false,
                'sid':'c15',
				'img':'http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2009/8/26/1251307299242/Broken-glass-003.jpg',
            },
            'c_planet':{
                'label':'Satoshi\'s Miner',
                'description':'Your team finds Satoshi\'s real identity '
           		    + 'and he gives you the blueprints for his own miner.  (For a price, of course, and a very high one at that.)',
                'amount':0,
                'risk':0.000001,
                'rps':5000000000,
                'base_cost':2000000000000,
                'cost':200000000000,
                'unlock_rps':600000000,
                'unlocked':false,
                'sid':'c16',
				'img':'http://assets2.motherboard.tv/content-images/contentimage/no-slug/7deda737ec724e8499b5dc273024082f.jpg',
            },
            'c_portal':{
                'label':'51% Attack',
                'description':'Surreptitiously 51% attack the bitcoin network and'
                    + 'double' + ' spend your coins!  51% other blockchains as well for more fun!',
                'amount':0,
                'risk':0.1,
                'rps':50000000000,
                'base_cost':1500000000000,
                'cost':1500000000000,
                'unlock_rps':7500000000,
                'unlocked':false,
                'sid':'c17',
				'img':'http://bit24.nl/bit24.nl/wp-content/uploads/2014/01/37.-51logo.jpg',
            },
        },


        'sellers':{
            '01_dealer':{
                'label':'Local Contacts',
                'description':'Sell neglible amounts of bitcoin to local contacts.',
                'amount':0,
                'risk':0.05,
                'rps':1,
                'base_cost':30,
                'cost':30,
                'unlock_rps':0,
                'unlocked':true,
                'sid':'s1',
				'img':'http://3.bp.blogspot.com/-ynu9YoINA48/Ua2xWIYLQXI/AAAAAAAAABk/oOukJ45n6UY/s1600/LocalBitcoins.com%2BLogo%2Bcropped.png',
            },
            '03_drug_mule':{
                'label':'Forum Trades',
                'description':'Sell tiny amounts of bitcoin to users of the bitcoin forum.',
                'amount':0,
                'risk':.005,
                'rps':5,
                'base_cost':200,
                'cost':200,
                'unlock_rps':1,
                'unlocked':false,
                'sid':'s2',
				'img':'http://i1-news.softpedia-static.com/images/news2/Hackers-Target-Bitcoin-Talk-via-Vulnerability-in-AnonymousSpeech-Registrar-405123-2.jpg?1385985588',
            },
            'drug_van':{
                'label':'Coinbase',
                'description':'Sell small amounts of bitcoin on your coinbase account.',
                'amount':0,
                'risk':.005,
                'rps':10,
                'base_cost':350,
                'cost':350,
                'unlock_rps':6,
                'unlocked':false,
                'sid':'s3',
				'img':'https://coinbase.com/assets/logos/coinbase_logo_white.png',
            },
            'cheap_lawyer':{
                'label':'Precious Metals',
                'description':'Buy precious metals using medium amounts of bitccoin, and sell the metals for cash.',
                'amount':0,
                'risk':0,
                'rps':25,
                'base_cost':1500,
                'cost':1500,
                'unlock_rps':12,
                'unlocked':false,
                'sid':'s4',
				'img':'http://www.etftrends.com/wp-content/uploads/2010/10/gold-bars.jpg',
            },
            '04_club':{
                'label':'Mt. Gox',
                'description':'Sell somewhat larger amounts of bitcoin on Mt. Gox, but be careful that your account is not locked!',
                'amount':0,
                'risk':0,
                'rps':60,
                'base_cost':3000,
                'cost':3000,
                'unlock_rps':30,
                'unlocked':false,
                'sid':'s5',
				'img':'http://www.techweekeurope.co.uk/wp-content/uploads/2013/05/mtgox.png',
            },
            '05_cartel':{
                'label':'Bitstamp',
                'description':'Sell large amounts of bitcoin through Bitstamp.',
                'amount':0,
                'rps':100,
                'risk':.1,
                'base_cost':5000,
                'cost':5000,
                'unlock_rps':100,
                'unlocked':false,
                'sid':'s6',
				'img':'http://bitcoin.travel/wp-content/uploads/965366.png',
            },
            '07_dea':{
                'label':'Bitcoin City',
                'description':'A bitcoin city in which fiat is not allowed.  Tourists must buy bitcoins to enter, from you.',
                'amount':0,
                'risk':0.005,
                'rps':500,
                'base_cost':24000,
                'cost':24000,
                'unlock_rps':250,
                'unlocked':false,
                'sid':'s7',
				'img':'http://i.imgur.com/hOhKz4u.png',
            },
            '09_diplomat':{ 
                'label':'Floating Bitcoin Island',
                'description':'Buy a large floating island and turn it into a bitcoin-based economic superpower.',
                'amount':0,
                'risk':0.1,
                'rps':3000,
                'base_cost':125000,
                'cost':125000,
                'unlock_rps':750,
                'unlocked':false,
                'sid':'s8',
				'img':'http://upload.wikimedia.org/wikipedia/commons/6/67/AndrasGyorfi.jpg',
            },
            '11_city_police':{
                'label':'Interplanetary Exploration',
                'description':'You discover sentient and intelligent beings living in a massive '
				    + 'complex under the surface of Titan, the largest moon of Saturn.  They are '
					+ 'extremely interested in the bitcoin concept and buy very large amounts of your coins.',
                'amount':0,
                'risk':0.1,
                'rps':20000,
                'base_cost':825000,
                'cost':825000,
                'unlock_rps':3900,
                'unlocked':false,
                'sid':'s9',
				'img':'http://d1jqu7g1y74ds1.cloudfront.net/wp-content/uploads/2013/05/star_trek_space_station.jpg',
            },
             'senator':{
                'label':'Solar-system-wide Bitcoin Exchanges',
                'description':'The discovery of intelligent beings in other places of the Solar system, most notably Europa, '
				    + 'the second moon of Jupiter, has led to the creation of Solar-system-wide bitcoin exchanges.',
                'amount':0,
                'risk':0.005,
                'rps':100000,
                'base_cost':4125000,
                'cost':4125000,
                'unlock_rps':24500,
                'unlocked':false,
                'sid':'s10',
				'img':'http://i.space.com/images/i/000/009/474/i02/nasa-solar-system-graphic-72.jpg',
            },       
            'big_cartel':{
                'label':'Bitcoin Religion',
                'description':'Some devotees of bitcoin have started a religion.  To join, prospective members must exchange '
				    + '1 million dollars of fiat to bitcoin.',
                'amount':0,
                'risk':0.00000001,
                'rps':500000,
                'base_cost':20750000,
                'cost':20750000,
                'unlock_rps':125000,
                'unlocked':false,
                'sid':'s11',
				'img':'http://i.imgur.com/wNrNRAT.jpg',
            },
            'dictator':{
                'label':'Alpha Centauri Bitcoin Exchanges',
                'description':'With faster-than-light travel perfected by the Jovian race of Europa, '
				    + 'interstellar travel is possible.  The first bitcoin exchanges of the Alpha Centauri system are opening for business.',
                'amount':0,
                'risk':0.00000001,
                'rps':2000000,
                'base_cost':93500000,
                'cost':93500000,
                'unlock_rps':650000,
                'unlocked':false,
                'sid':'s12',
				'img':'http://www.robertphoenix.com/content/wp-content/uploads/2010/08/RedSun.jpg',
            },
            'space_mules':{
                'label':'Andromeda Galaxy Bitcoin Exchanges',
                'description':'With efficient tachyonic travel perfected by the Saturnian race of Titan, '
				    + 'intergalactic travel is possible.  The first bitcoin exchanges of the Andromeda galaxy are opening for business.',
                'amount':0,
                'risk':0.000000001,
                'rps':10000000,
                'base_cost':467500000,
                'cost':467500000,
                'unlock_rps':2750000,
                'unlocked':false,
                'sid':'s13',
				'img':'http://www.srl.caltech.edu/andromeda/m31.gif',
            },
            'meth_mart':{
                'label':'Bitcoin becomes official currency of the Galactic American Empire',
                'description':'With your money, you are able to bribe the oligarchy '
                    + 'of the Galactic American Empire to decree its official currency bitcoin. '
					+ 'The Galactic American Empire, known throughout the Universe for its continued '
					+ 'use of the Imperial system of measurement, subjects its population of 300 sextillion'
					+ ' to persecution if caught using any currency besides bitcoin.  Large amounts of your '
					+ ' coin hoard are being continually bought.',
                'amount':0,
                'risk':0.55,
                'rps':75000000,
                'base_cost':3550000000,
                'cost':3550000000,
                'unlock_rps':13000000,
                'unlocked':false,
                'sid':'s14',
				'img':'http://i1146.photobucket.com/albums/o534/kingwilliam86/NationStates/Flags/USGalaxyFlag.gif'
            },

            'shuttle':{
                'label':'Time Machine',
                'description':'Your team of researchers have been able to '
                    + 'travel forward in time, you sell your bitcoin easily for high prices.',
                'amount':0,
                'risk':0.000001,
                'rps':500000000,
                'base_cost':11700000000,
                'cost':11700000000,
                'unlock_rps':90000000,
                'unlocked':false,
                'sid':'s15',
				'img':'http://images.apple.com/support/assets/images/products/timemachine/hero_timemachine_lg.jpg',
            },
            's_meth_relay':{
                'label':'King of the Universe',
                'description':'With your bitcoins, you have gained power within the galaxy.  You are in control of the galaxy\'s finanicial systems, and your 283 septillion subjects buy bitcoins at your command.',
                'amount':0,
                'risk':0.000001,
                'rps':5000000000,
                'base_cost':100000000000,
                'cost':100000000000,
                'unlock_rps':600000000,
                'unlocked':false,
                'sid':'s16',
				'img':'http://images4.wikia.nocookie.net/__cb20110320044208/revengeristsconsortium/images/5/53/Xenu2.jpg',
            },
            's_church':{
                'label':'God',
                'description':'You exist on a separate temporal plane of the Universe, with the ability to manipulate space, matter, and time.  Your riches '
                    + 'are unimaginable and your influence extends across the entirety of existence.',
                'amount':0,
                'risk':0.1,
                'rps':50000000000,
                'base_cost':1500000000000,
                'cost':1500000000000,
                'unlock_rps':7500000000,
                'unlocked':false,
                'sid':'s17',
				'img':'http://www.fromquarkstoquasars.com/wp-content/uploads/2013/10/Quantum-Gravity.jpg',
            },
        }, 


        'upgrades':{

            '00_air_fresheners':{
                'label':'More Efficient Mining',
                'description':'Your equipment is upgraded, you can mine an extra bitcoin at a time.',
                'action':'make_amount',
                'purchased':false,
                'mod':1,
                'cost':10,
                'prereq':null,
                'sid':'u01',
            },
            '01_exhaust_fan':{
                'label':'Even More Efficient Mining',
                'description':'Your equipment is upgraded again, now you can mine five more bitcoins at a time!',
                'action':'make_amount',
                'purchased':false,
                'mod':5,
                'cost':100,
                'prereq':'00_air_fresheners',
                'sid':'u02',
            },
            '02_goatee':{
                'label':'Goatee',
                'description':'Your mighty goatee intimidates buyers into buying more bitcoins; you can now exchange an extra bitcoin at a time.',
                'action':'sell_amount',
                'purchased':false,
                'mod':1,
                'cost':10,
                'prereq':null,
                'sid':'u03',
            },
            '03_hvac':{
                'label':'More Reliable Internet Connection',
                'description':'You upgrade your internet connection, you can now mine 100 more bitcoins at a time.',
                'action':'make_amount',
                'purchased':false,
                'mod':100,
                'cost':11050,
                'prereq':'01_exhaust_fan',
                'sid':'u04',
            },
            '04_glasses':{
                'label':'Prescription Glasses',
                'description':'Your nerdy specs make your buyers feel they can trust you more; you can now sell 5 additional bitcoins at a time',
                'action':'sell_amount',
                'purchased':false,
                'mod':5,
                'cost':100,
                'prereq':'02_goatee',
                'sid':'u05',
            },
            '07_hat': { 
                'label':'Large Industrial Cooling System',
                'description':'This cooling system prevents your equipment from overheating, allowing you to mine an extra 50 bitcoins at a time.',
                'action':'make_amount',
                'purchased':false,
                'mod':50,
                'cost':500,
                'prereq':'04_glasses',
                'sid':'u06',
            },
            '08_mariachi_band':{
                'label':'Trade Fee',
                'description':'You start charging a fee to people who want to buy bitcoins, due to large demand. '
    				+ 'You charge an extra $5 per bitcoin.',
                'action':'widget_roi',
                'purchased':false,
                'mod':5,
                'cost':17500,
                'prereq':'07_hat',
                'sid':'u07',
            },
            '09_vats':{
                'label':'Extremely Efficient Mining',
                'description':'Your click-mining powers are now very efficient, allowing you to mine an additional 500 bitcoins at a time.',
                'action':'make_amount',
                'purchased':false,
                'mod':500,
                'cost':4507500,
                'prereq':'08_mariachi_band',
                'sid':'u08',
            },

            '11_dealer_business_cards':{
                'label':'Increase Bitcoin Price',
                'description':'Increase bitcoin price by fifty cents',
                'cost':30,
                'action':'widget_roi',
                'mod':0.5,
                'purchased':false,
                'prereq':null,
                'sid':'u09',
            },
            '13_spinning_rims':{
                'label':'Increase Bitcoin Price',
                'description':'Increase bitcoin price by fifty cents',
                'action':'widget_roi',
                'purchased':false,
                'mod':0.5,
                'cost':250,
                'prereq':'11_dealer_business_cards',
                'sid':'u10',
            },
            'dealer_slacks':{
                'label':'Large Influx of Forum Members',
                'description':'Large numbers of people are registering accounts on the bitcoin forum, allowing you '
				    + 'to exchange 2 more bitcoins at a time.',
                'action':'sellers.03_drug_mule.rps',
                'purchased':false,
                'mod':2,
                'cost':550,
                'prereq':'13_spinning_rims',
                'sid':'u11',
            },
            'mules_1': {
                'label':'Rich Forum Members',
                'description':'A large number of affluent people are registering an account '
				    + 'on the bitcoin forum, allowing you to exchange 4 more bitcoins at a time.',
                'action':'sellers.03_drug_mule.rps',
                'purchased':false,
                'mod':4,
                'cost':1250,
                'prereq':'dealer_slacks',
                'sid':'u12',
            },
            'mules_2': {
                'label':'Wall Street Bankers Registering on the Bitcoin Forum',
                'description':'Wall Street bankers are registering on the bitcoin forum to buy coins, allowing '
				    + 'you to exchange an extra sixteen bitcoins at a time on the forums.',
                'action':'sellers.03_drug_mule.rps',
                'purchased':false,
                'mod':16,
                'cost':55000,
                'prereq':'mules_1',
                'sid':'u13',
            },
            'dealer_guns': {
                'label':'More Local Contacts',
                'description':'More contacts are being introduced into your bitcoin network, so your contacts buy an extra 0.5 bitcoin per second.',
                'action':'sellers.01_dealer.rps',
                'purchased':false,
                'mod':0.5,
                'cost':8000,
                'prereq':'dealer_slacks',
                'sid':'u14',
            },
            'van_jingle':{
                'label':'Quicker Coinbase',
                'description':'Coinbase guarantees that your transaction will be processed quickly, allowing you to exchange 5 more bitcoins at a time with Coinbase',
                'action':'sellers.drug_van.rps',
                'purchased':false,
                'mod':5,
                'cost':16000,
                'prereq':'dealer_guns',
                'sid':'u15',
            },
            'lawyers_sleaze': {
                'label':'Larger Precious Metals Dealer Accepting Bitcoin',
                'description':'A larger precious metals dealer begins accepting bitcoin as payment, '
				    + 'allowing you to exchange 10 more at a time when you exchange bitcoins for precious metals.',
                'action':'sellers.cheap_lawyer.rps',
                'purchased':false,
                'mod':10,
                'cost':150000,
                'prereq':'van_jingle',
                'sid':'u16',
            },
            'lawyers_better':{
                'label':'Accredited Precious Metals Dealer',
                'description':'Your precious metals dealers are now accredited, reducing risk of losing bitcoins by an additional 5%.',
                'action':'sellers.cheap_lawyer.risk',
                'purchased':false,
                'mod':-0.05,
                'cost':1175000,
                'prereq':'lawyers_sleaze',
                'sid':'u17',
            },
            'lawyers_best':{
                'label':'Major Precious Metals Dealer Now Accepting Bitcoin',
                'description':'The largest precious metals dealers are now accepting bitcoin as payment, allowing you to exchange an '
				    + 'additional 25 bitcoins at a time when exchanging for precious metals.',
                'action':'sellers.cheap_lawyer.rps',
                'purchased':false,
                'mod':25,
                'cost':11275000,
                'prereq':'lawyers_better',
                'sid':'u18',
            },
            'lawyers_super':{
                'label':'Palladium and Iridium',
                'description':'High demand for precious metals palladium and iridium have allowed your '
				    +'precious metals dealer to expand, they can now exchange an additional 50 bitcoins at a time',
                'action':'sellers.cheap_lawyer.rps',
                'purchased':false,
                'mod':50,
                'cost':210555000,
                'prereq':'lawyers_best',
                'sid':'u19',
            },       
            'lawyers_magic':{
                'label':'Radioactive Metals',
                'description':'The North Korean and Russian state both are in need of high '
				    +  'amounts of Uranium and Plutonium.  Luckily, your dealer has both metals. '
    			    +  'Your dealers now exchange an additional 100 bitcoins at a time.',
                'action':'sellers.cheap_lawyer.rps',
                'purchased':false,
                'mod':100,
                'cost':164200552000,
                'prereq':'lawyers_super',
                'sid':'u20',
            },
            'better_diplomats': {
                'label':'Island Expansion',
                'description':'Your islands have grown in terms of tourism, allowing them to sell an extra 1K batches at a time.',
                'action':'sellers.09_diplomat.rps',
                'purchased':false,
                'mod':1000,
                'cost':15005000,
                'prereq':'lawyers_sleaze',
                'sid':'u21',
            },
            '21_portable_generator':{
                'label':'Overclock Celeron CPUs',
                'description':'Overclock your Celeron CPUs, allowing them to mine 2 more bitcoins per second.',
                'action':'clickers.03_used_rv.rps',
                'purchased':false,
                'mod':2,
                'cost':150,
                'prereq':'01_exhaust_fan',
                'sid':'u22',
            },
            'shed_power':{
                'label':'Overclock Pentium 4.',
                 'description':'Overclock your Pentium 4s, allowing them to mine another 0.8 batches at a time',
                'action':'clickers.01_storage_shed.rps',
                'purchased':false,
                'mod':0.8,
                'cost':9500,
                'prereq':'21_portable_generator',
                'sid':'u23',
            },
            'rv_solar':{
                'label':'Celeron Solar Power',
                'description':'Harness the power of the sun! Allows your Celeron CPUs to mine an extra 2.5 bitcoins at a time',
                'action':'clickers.03_used_rv.rps',
                'purchased':false,
                'mod':2.5,
                'cost':1250,
                'prereq':'shed_power',
                'sid':'u24',
            },
            'camper_lab':{
                'label':'Dangerously Overclocked Celerons',
                'description':'Completely overclock your Celeron CPUs for maximum bitcoin mining performance, allowing them '
				    + 'to mine an extra SIXTEEN bitcoins at a time',
                'action':'clickers.03_used_rv.rps',
                'purchased':false,
                'mod':16,
                'cost':55000,
                'prereq':'rv_solar',
                'sid':'u25',
            },
            '22_hazmat_suit':{
                'label':'Volcano Suit',
                'description':'Now you can mine without regard to the extreme heat emanating from your equipment. '
                    + 'Make an additional 100 bitcoins at a time!',
                'action':'make_amount',
                'purchased':false,
                'mod':100,
                'cost':15000,
                'prereq':'04_glasses',
                'sid':'u26',
            },

            '23_personal_enforcer':{
                'label':'Personal Enforcer',
                'description':'Hire a personal enforcer to prevent your cash from getting stolen, you can now sell an extra 100 bitcoins at a time',
                'action':'sell_amount',
                'purchased':false,
                'mod':100,
                'cost':15000,
                'prereq':'22_hazmat_suit',
                'sid':'u27',
            },

            '31_electric_hotplate':{
                'label':'Dorm Room',
                'description':'Your mining base.',
                'action':null,
                'purchased':true,
                'mod':0,
                'cost':25,
                'prereq':null,
                'sid':'u28',
            },
            '32_gas_stove':{
                'label':'Increase Bitcoin Price',
                'description':'Increase bitcoin price by fifty cents',
                'cost':30,
                'action':'widget_roi',
                'mod':0.5,
                'purchased':false,
                'prereq':null,
                'sid':'u29',
            },
            '33_steel_burner':{
                'label':'Increase Bitcoin Price',
                'description':'Increase bitcoin price a further one dollar.',
                'cost':240,
                'action':'widget_roi',
                'mod':0.5,
                'purchased':false,
                'prereq':'32_gas_stove',
                'sid':'u30',
            },
            '34_titanium_burner':{
                'label':'Media Attention',
                'description':'Larger media attention to bitcoin increases its price by two dollars.',
                'cost':3550,
                'action':'widget_roi',
                'mod':2,
                'purchased':false,
                'prereq':'33_steel_burner',
                'sid':'u31',
            },
            '35_platinum_burner':{
                'label':'Small Retailers Begin Accepting Bitcoin',
                'description':'Small retailers begin accepting bitcoin, increasing its value by three dollars.',
                'cost':23550,
                'action':'widget_roi',
                'mod':3,
                'purchased':false,
                'prereq':'34_titanium_burner',
                'sid':'u32',
            },
            '41_cheap_cookware':{
                'label':'Electricity',
                'description':'Used for mining.',
                'cost':20,
                'action':null,
                'mod':0,
                'purchased':true,
                'prereq':null,
                'sid':'u33',
            },
            '42_steel_cookware':{
                'label':'Increase Bitcoin Price',
                'description':'Increase bitcoin price by one dollar',
                'cost':50,
                'action':'widget_roi',
                'mod':1,
                'purchased':false,
                'prereq':null,
                'sid':'u34',
            },
            '43_glass_flasks':{
                'label':'All-Time High',
                'description':'Bitcoin reaches an all-time high!  Its value increases by one dollar.',
                'cost':240,
                'action':'widget_roi',
                'mod':1,
                'purchased':false,
                'prereq':'42_steel_cookware',
                'sid':'u35',
            },
            '46_hard_glass_boilers':{
                'label':'Increase Bitcoin Price',
                'description':'Further increases bitcoin price by one dollar.',
                'cost':1500,
                'action':'widget_roi',
                'mod':1,
                'purchased':false,
                'prereq':'43_glass_flasks',
                'sid':'u36',
            },
            
            '47_carbon_filters':{
                'label':'Bitcoin Price Increase',
                'description':'Bitcoin value increases by $3',
                'cost':92500,
                'action':'widget_roi',
                'mod':3,
                'purchased':false,
                'prereq':'46_hard_glass_boilers',
                'sid':'u37',
            },
            '49_diamond_flasks':{
                'label':'All-Time High! (Again)',
                'description':'Bitcoin is almost $25!  I don\'t think it\'ll get this high ever again, though.',
                'cost':252500,
                'action':'widget_roi',
                'mod':5,
                'purchased':false,
                'prereq':'46_hard_glass_boilers',
                'sid':'u38',
            },
            '50_platinum_boilers':{
                'label':'Whoa!  Over $30 per Bitcoin!',
                'description':'Bitcoin price increases by $10!',
                'cost':2155000,
                'action':'widget_roi',
                'mod':10,
                'purchased':false,
                'prereq':'49_diamond_flasks',
                'sid':'u39',
            },
            '53_space_hazmat':{
                'label':'Space Station',
                'description':'Now you can mine in space! Mine an additional 1000 batches per click.',
                'cost':121550000,
                'action':'make_amount',
                'mod':1000,
                'purchased':false,
                'prereq':'50_platinum_boilers',
                'sid':'u40',
            },
            'personal_snipers':{
                'label':'SWAT Snipers',
                'description':'Your team of highly trained snipers protects you during high-value transactions. Safely sell an additional 1000 bitcoins at a time',
                'cost':321500000,
                'action':'sell_amount',
                'mod':1000,
                'purchased':false,
                'prereq':'50_platinum_boilers',
                'sid':'u41',
            },
            'chem_degree':{
                'label':'Cryptography Doctorate',
                'description':'By ordering this online degree, you find an fundemental flaw '
                    + 'in the SHA-256 encryption protocol.  You are now able to mine an extra '
					+ '50% of your current rate.',
                'cost':4500750000,
                'action':'make_rps_multiplier',
                'mod':0.5,
                'purchased':false,
                'prereq':'53_space_hazmat',
                'sid':'u42',
            },
            'mech_suit':{
                'label':'Mech Suit',
                'description':'Your mech suit keeps you safe while making deals. '
                    + 'Sell an additional 50% of bitcoins at a time',
                'cost':5100500000,
                'action':'sell_rps_multiplier',
                'mod':0.5,
                'purchased':false,
                'prereq':'personal_snipers',
                'sid':'u43',
            },
            'slap_chop':{
                'label':'Lunar Datacenters',
                'description':'With these Lunar Datacenters, you can mine '
				    + 'an additional 50% of bitcoins at a time.',
                'cost':18100500000,
                'action':'make_rps_multiplier',
                'mod':0.5,
                'purchased':false,
                'prereq':'chem_degree',
                'sid':'u44',
            },
             'fearless':{
                'label':'Fearless',
                'description':'After facing death so many times, '
                    +'you no longer have a sense of self preservation. '
                    +'Sell another 50% of bitcoins at a time',
                'cost':20100500000,
                'action':'sell_rps_multiplier',
                'mod':0.5,
                'purchased':false,
                'prereq':'mech_suit',
                'sid':'u45',
            },
            'better_genetics':{
                'label':'Matter Replication Device',
                'description':'Hire every scientist on the planet to create a matter replication device. '
                    + 'Double your mining output.',
                'cost':3518100500000,
                'action':'make_rps_multiplier',
                'mod':1,
                'purchased':false,
                'prereq':'slap_chop',
                'sid':'u46',
            }, 
            'crack_bite':{
                'label':'Radioactive Lightning',
                'description':'After being struck by a bolt of radioactive '
                    + 'lightning, you\'ve gained super strength. Your manual sell rate is doubled.',
                'cost':3720100500000,
                'action':'sell_rps_multiplier',
                'mod':1,
                'purchased':false,
                'prereq':'fearless',
                'sid':'u47',
            },
            'u_trick_or_treat': {
                'label':'Trick or Treat',
                'description':'Hand out bitcoins like they\'re candy, and sell an additional 200% of bitcoins at a time',
                'action':'sell_rps_multiplier',
                'purchased':false,
                'mod':2,
                'hidden':true,
                'cost':15000000,
                'prereq':'hidden',
                'sid':'u47.1',
            },

            'ancient_methology': { 
                'label':'Market Manipulation',
                'description':'With your wealth you are able to manipulate the bitcoin market easily, '
                    + 'increasing bitcoin prices by $10',
                'cost':820000000,
                'action':'widget_roi',
                'mod':10,
                'purchased':false,
                'prereq':'50_platinum_boilers',           
                'sid':'u48',
            },
            'methylamine_secret': { 
                'label':'Graphene Semiconductors',
                'description':'These graphene semiconductors double your manual mining output.',
                'cost':126321500000,
                'action':'make_rps_multiplier',
                'mod':1,
                'purchased':false,
                'prereq':'ancient_methology',           
                'sid':'u49',
            },
//            'alien_meth':{
//                'label':'Meth of the Third Kind',
//                'description':'Exta terrestrial meth purification processes '
//                    + 'have been discovered on Mars. Increases purity by another 12 IPUs',
//                'cost':2100320555000,
//                'action':'widget_roi',
//                'mod':12,
//                'purchased':false,
//                'prereq':'methylamine_secret',           
//                'sid':'u50',
//            },
            'quantum_meth':{
                'label':'$100 per bitcoin',
                'description':'Bitcoin reaches $100, thanks to your market manipulation.',
                'cost':42100500555000,
                'action':'widget_roi',
                'mod':56,
                'purchased':false,
                'prereq':'methylamine_secret',           
                'sid':'u50.1',               
            },
//            'u_holy_meth':{
//                'description':'Your followers feel closer to the heavens when they gaze upon '
//                    + 'these holy crystals. Charge another $53 per batch',
//                'cost':142100500555000,
//                'action':'widget_roi',
//                'mod':53,
//                'purchased':false,
//                'prereq':'alien_meth',           
//                'sid':'u50.2',               
//            },
//            'u_angelic':{
//                'label':'Angelic Meth',
//                'description':'It is said that the Arch Angels of Methen prefer the taste of your meth',
//                'cost':1042100500555000,
//                'action':'widget_roi',
//                'mod':60,
//                'purchased':false,
//                'prereq':'u_holy_meth',           
//                'sid':'u50.3',               
//            },
//
//            'u_nyme_1':{
//                'label':'Insider Trading',
//                'description':'Improves NYME laundering by $500m per second ',
//                'cost':50020555000,
//                'action':'banks.b_nyme.rps',
//                'mod':500000000,
//                'purchased':false,
//                'prereq':'lawyers_sleaze',                          
//                'sid':'u51',
//            },
//            'u_nyme_2': {
//                'label':'Sleazy Brokers',
//                'description':'These sleazy stock brokers help your NYME launder '
//                    + 'an extra $1B per second',
//                'cost':500320555000,
//                'action':'banks.b_nyme.rps',
//                'mod':1000000000,
//                'purchased':false,
//                'prereq':'u_nyme_1',                          
//                'sid':'u52',
//            },
            'donator_thanks':{
                'label':'Thank You',
                'description':'Thanks for donating, your meth is now worth $50 more per batch',
                'cost':321500000,
                'action':'widget_roi',
                'mod':50,
                'purchased':false,
                'prereq':'hidden',
                'sid':'u70',
            },
         },

        'achievements': { 
            'hand_made_widgets_1': { 
                'label':'This is kinda fun...',
                'description':'You\'ve click-mined your first bitcoin!',
                'property':'stats.hand_made_widgets',
                'required':1,
                'unlocked':false,
                'value':1,
                'group':10,
                'min_time':1,
                'sid':'a01',
            },
            'hand_made_widgets_2': { 
                'label':'I see how this works',
                'description':'You\'ve click-mined 100 total bitcoins!',
                'property':'stats.hand_made_widgets',
                'required':100,
                'unlocked':false,
                'value':2,
                'group':11,
                'min_time':1,
                'sid':'a02',
            },
            'hand_made_widgets_3': { 
                'label':'Click apprentice',
                'description':'You\'ve click-mined 1,000 total bitcoins!',
                'property':'stats.hand_made_widgets',
                'required':1000,
                'unlocked':false,
                'value':3,
                'group':12,
                'min_time':1,
                'sid':'a03',
            },
            'hand_made_widgets_4':{ 
                'label':'Click magician',
                'description':'You\'ve click-mined 100,000 total bitcoins!',
                'property':'stats.hand_made_widgets',
                'required':100000,
                'unlocked':false,
                'value':4,
                'group':13,
                'min_time':1,
                'sid':'a04',
            },      
            'hand_made_widgets_5':{ 
                'label':'Clickity-splickity',
                'description':'You\'ve click-mined 1,000,000 total bitcoins!',
                'property':'stats.hand_made_widgets',
                'required':1000000,
                'unlocked':false,
                'value':5,
                'group':14,
                'min_time':1,
                'sid':'a05',
            },      
            'hand_made_widgets_6':{ 
                'label':'I AM THE ONE WHO CLICKS',
                'description':'YOU are to be feared. You\'ve click-mined 100,000,000 total bitcoins!',
                'property':'stats.hand_made_widgets',
                'required':100000000,
                'unlocked':false,
                'value':6,
                'group':15,
                'min_time':1,
                'sid':'a06',
            },
            'total_cash_1': {
                'label':'In the mining business',
                'description':'You\'ve mined and exchanged your first $1,000',
                'property':'stats.total_cash',
                'required':1000,
                'unlocked':false,
                'value':1,
                'group':20,
                'min_time':1,           
                'sid':'a07',
            },
			'total_cash_0': {
                'label':'SHA-256',
                'description':'You\'ve mined and exchanged your first $256,256',
                'property':'stats.total_cash',
                'required':256256,
                'unlocked':false,
                'value':1,
                'group':20,
                'min_time':1,           
                'sid':'a98',
            },
            'total_cash_2': {
                'label':'In the money business',
                'description':'You\'ve mined and exchanged your first $1,000,000!',
                'property':'stats.total_cash',
                'required':1000000,
                'unlocked':false,
                'value':2,
                'group':21,
                'min_time':1,           
                'sid':'a08',
            },
			'total_cash_99': {
                'label':'SHA-256 #2',
                'description':'You\'ve mined and exchanged your first $256,256,256',
                'property':'stats.total_cash',
                'required':256256256,
                'unlocked':false,
                'value':1,
                'group':21,
                'min_time':1,           
                'sid':'a99',
            },
            'total_cash_3': {
                'label':'Billion with a B',
                'description':'You\'ve mined and exchanged your first $1,000,000,000',
                'property':'stats.total_cash',
                'required':1000000000,
                'unlocked':false,
                'value':3,
                'group':22,
                'min_time':1,           
                'sid':'a09',
            },
			'total_cash_98': {
                'label':'SHA-256 #3',
                'description':'You\'ve mined and exchanged your first $256,256,256,256',
                'property':'stats.total_cash',
                'required':256256256256,
                'unlocked':false,
                'value':1,
                'group':22,
                'min_time':1,           
                'sid':'a98',
            },
            'total_cash_4': {
                'label':'T-T-T-Trillion',
                'description':'You\'ve mined and exchanged your first $1 trillion',
                'property':'stats.total_cash',
                'required':1000000000000,
                'unlocked':false,
                'value':4,
                'group':23,
                'min_time':1,           
                'sid':'a10',
            },
            'total_cash_5': {
                'label':'In the empire business',
                'description':'You\'ve mined and exchanged $1 quadrillion dollars!',
                'property':'stats.total_cash',
                'required':1000000000000000,
                'unlocked':false,
                'value':5,
                'group':24,
                'min_time':1,           
                'sid':'a11',
            },

            'under_complex_1': {
                'label':'Gigahasher',
                'description':'You\'ve obtained your first ASIC',
                'property':'clickers.11_bot_s.amount',
                'required':1,
                'unlocked':false,
                'value':1,
                'group':200,
                'min_time':1,           
                'sid':'a12',
            },
            'city_police_1': {
                'label':'Jupiter is Cool',
                'description':'You\'ve started interplanetary exploration!',
                'property':'sellers.11_city_police.amount',
                'required':1,
                'unlocked':false,
                'value':1,
                'group':210,
                'min_time':1,           
                'sid':'a13',
            },
            'lab_1': { 
                'label':'Graphics Processing Unit',
                'description':'You\'ve acquired your first GPU',
                'property':'clickers.09_lab.amount',
                'required':1,
                'unlocked':false,
                'value':1,
                'group':220,
                'min_time':1,           
                'sid':'a14',
            },
            'moon_lab_1':{
                'label':'Terahasher',
                'description':'You\'ve acquired the highest-performance miner available to the general public.',
                'property':'clickers.12_moon_lab.amount',
                'required':1,
                'unlocked':false,
                'hidden':false,
                'value':1,
                'group':227,
                'min_time':1,           
                'sid':'a15',
            },
            'a_spacecorp':{
                'label':'Secure your cash throughout the galaxy',
                'description':'You\'ve bought a Space Corp!',
                'property':'banks.b_spacecorp.amount',
                'required':1,
                'unlocked':false,
                'hidden':false,
                'value':1,
                'group':240,
                'min_time':1,
                'sid':'a21',
            },
            'a_playtime1':{
                'label':'A Minute of Your Time',
                'description':'You\'ve managed a bitcoin miner for 1 minute',
                'property':'stats.seconds_played',
                'required':60,
                'unlocked':false,
                'hidden':false,
                'value':1,
                'group':301,
                'min_time':1,
                'sid':'a22',
            },
            'a_playtime2':{
                'label':'Five Minutes of Fame',
                'description':'You\'ve managed a bitcoin miner for 5 minutes',
                'property':'stats.seconds_played',
                'required':300,
                'unlocked':false,
                'hidden':false,
                'value':2,
                'group':302,
                'min_time':1,
                'sid':'a23',
            },
            'a_playtime3':{
                'label':'Mining Hour',
                'description':'You\'ve managed a bitcoin miner for an hour',
                'property':'stats.seconds_played',
                'required':3600,
                'unlocked':false,
                'hidden':false,
                'value':3,
                'group':303,
                'min_time':1,
                'sid':'a24',
            },
            'a_playtime4':{
                'label':'Half a day down the drain',
                'description':'You\'ve managed a bitcoin miner for 12 hours',
                'property':'stats.seconds_played',
                'required':43200,
                'unlocked':false,
                'hidden':false,
                'value':5,
                'group':304,
                'min_time':1,
                'sid':'a25',
            },
            'a_playtime5':{
                'label':'Day Miner',
                'description':'You\'ve managed a mining empire for an entire day',
                'property':'stats.seconds_played',
                'required':86400,
                'unlocked':false,
                'hidden':false,
                'value':10,
                'group':305,
                'min_time':1,
                'sid':'a26',
            },
            'a_playtime6':{
                'label':'Pro Miner',
                'description':'You\'ve managed a mining empire for an entire week!',
                'property':'stats.seconds_played',
                'required':86400*5,
                'unlocked':false,
                'hidden':false,
                'value':10,
                'group':306,
                'min_time':1,
                'sid':'a27',
            },
            'a_playtime7':{
                'label':'Burnout',
                'description':'You\'ve managed a mining empire for a month! Dayum!',
                'property':'stats.seconds_played',
                'required':86400*30,
                'unlocked':false,
                'hidden':false,
                'value':10,
                'group':307,
                'min_time':1,
                'sid':'a28',
            },
            'a_spent_million':{
            	'label':'Kardashian',
            	'description':'You\'ve spent your first $1,000,000!',
            	'property':'stats.total_spent',
            	'required':1000000,
            	'unlocked':false,
            	'hidden':false,
            	'value':1,
            	'group':315,
            	'min_time':1,
            	'sid':'a29',
            },
            'a_spent_billion':{
            	'label':'Kanye',
            	'description':'You\'ve spent your first $1,000,000,000!',
            	'property':'stats.total_spent',
            	'required':1000000000,
            	'unlocked':false,
            	'hidden':false,
            	'value':5,
            	'group':316,
            	'min_time':1,
            	'sid':'a30',
            },
            'a_spent_trillion':{
            	'label':'The Fed',
            	'description':'You\'ve spent your first $1,000,000,000,000!',
            	'property':'stats.total_spent',
            	'required':1000000000000,
            	'unlocked':false,
            	'hidden':false,
            	'value':10,
            	'group':317,
            	'min_time':1,
            	'sid':'a31',
            },
            'a_spent_quadrillion':{
            	'label':'THE High Roller',
            	'description':'You\'ve spent your first $1 Quadrillion!',
            	'property':'stats.total_spent',
            	'required':1000000000000000,
            	'unlocked':false,
            	'hidden':false,
            	'value':15,
            	'group':318,
            	'min_time':1,
            	'sid':'a32',
            },
            'a_spent_quintillion':{
            	'label':'Fortune 1',
            	'description':'You\'ve spent your first $1 Quintillion!',
            	'property':'stats.total_spent',
            	'required':1000000000000000000,
            	'unlocked':false,
            	'hidden':false,
            	'value':25,
            	'group':319,
            	'min_time':1,
            	'sid':'a33',
            },
            'cheated_cash_1':{
                'label':'Counterfeiter',
                'description':'You\'ve hacked in some cash',
                'property':'stats.cheated_cash',
                'required':1,
                'unlocked':false,
                'hidden':true,
                'value':1,
                'group':230,
                'min_time':1,           
                'sid':'a101',
            },
            'cheated_meth_1':{
                'label':'Bitcoins from nowhere',
                'description':'You\'ve hacked in some bitcoins!',
                'property':'stats.cheated_widgets',
                'required':1,
                'unlocked':false,
                'hidden':true,
                'value':1,
                'group':240,
                'min_time':1,           
                'sid':'a102',
            },

        },

        'events': { 
            'cash_found_small':{
                'chance':0.04,
                'action':'event_found_cash(60)',
            },
            'cash_found_med': {
                'chance':0.005,
                'action':'event_found_cash(240)',
            },
            'cash_found_large': {
                'chance':0.001,
                'action':'event_found_cash(640)',
            },
            'meth_found_small':{
                'chance':0.04,
                'action':'event_found_meth(120)',
            },
            'building_seized':{
                'chance':0.2,
                'action':'event_dea_seize_building()',
            },
            'cash_lost': { 
                'chance':0.007,
                'action':'event_lose_cash(60)',
            },
            'rival_cash_lost': { 
                'chance':0.005,
                'action':'event_rival_lose_cash(205)',
            },
            'pay_bribe':{
                'chance':0.01,
                'action':'event_pay_bribe(125)',
            },
            'lose_meth':{
                'chance':0.005,
                'action':'event_lose_meth(125)',
            },
            'irs_audit_1': { 
                'chance':0.18,
                'action':'event_irs_audit(0.5)',
            },
            
        },

        'stats': {
            'seller_rps':0,
            'clicker_rps':0,
            'bank_rps':0,
            'cheated_widgets':0,
            'cheated_cash':0,
            'hand_made_widgets':0,
            'made_widgets':0,
            'sold_widgets':0,
            'hand_sold_widgets':0,
            'seconds_played':0,
            'bought_upgrades':0,
            'total_cash':0,
            'total_spent':0,
            'start_time':(new Date).getTime(),
        },
    };

    this.error_log = function(msg) { 
        error_log(msg, this.get_debug_data());
    }

    this.get_debug_data = function() { 
        return {
            'cash':pd.cash.amount,
            'widgets':pd.widgets.amount,
            'safe_cash':pd.cash.safe,
            'make_amount':pd.make_amount,
            'sell_amount':pd.sell_amount,
        }
    }

    this.sec_tick = function() {
        fix_saved();
        fix_stats();
        check_achievements();
    }

    this.tick = function() { 
 
        var this_tick = (new Date).getTime();
        var this_sub = 1000 / tick_ms;
        var ticks = Math.round((this_tick - last_tick) / tick_ms);
        if(ticks > 360000) { 
            ticks = 360000;
        } else if (ticks < 1) { 
            return;
        }
        last_tick = this_tick;

        if(pd.cash.amount < 0) { 
            this.error_log('negative_cash: '+pd.cash.amount);
            pd.cash.amount = 0;
        } 
        if(pd.widgets.amount < 0) { 
            this.error_log('negative_widgets: '+pd.widgets.amount);
            pd.widgets.amount = 0;
        }
        if(pd.cash.safe < 0) {
            this.error_log('negative_safe_cash: '+pd.cash.safe);
            pd.cash.safe = 0;
        }

        var make_amount = 0;
        for(var k in pd.clickers) {
            var cl = pd.clickers[k]; 
            make_amount += cl.amount * cl.rps;
        }
        pd.stats.clicker_rps = make_amount;
        make_amount = make_amount / this_sub;
        do_make(make_amount * ticks);
      

        var sell_amount = 0;
        for(var k in pd.sellers) { 
            var sl = pd.sellers[k];
            sell_amount += sl.amount * sl.rps;
        }
        pd.stats.seller_rps = sell_amount;
        sell_amount = sell_amount / this_sub;

        do_sell(sell_amount * ticks);

        var safe_amount = 0;
        for(var k in pd.banks) { 
            var bn = pd.banks[k];
            safe_amount += bn.amount * bn.rps;
        }
        pd.stats.bank_rps = safe_amount;
        safe_amount = safe_amount / this_sub;
        pd.cash.safe += safe_amount * ticks;
        if(pd.cash.safe > pd.cash.amount) { 
            pd.cash.safe = pd.cash.amount;
        }

        fix_display();
    }

    function earn_cash(n) { 
        pd.cash.amount += n;
        return true;
    }

    function spend_cash(n) {
        if(n > (pd.cash.amount)) {
            return false;
        } 
        pd.cash.amount -= n;
        pd.stats.total_spent += n;
        return true;
    }

    this.check_version = function() { 
        $.get('/version.json',
            function(data) { 
                if(data.data.version) {
                    if(data.data.version > pd.version) { 
                        $('#updated').show(500);
                    }
                }
            }
            
        ,"json");
    }

    function get_risk() { 
        var rsk = 0;
        for(var k in pd.clickers) { 
            if(pd.clickers[k].risk) { 
                rsk += pd.clickers[k].risk * pd.clickers[k].amount;
            }
        }
        for(var k in pd.sellers) { 
            if(pd.sellers[k].risk) { 
                rsk += pd.sellers[k].risk * pd.sellers[k].amount;
            }
        }
        return rsk;
    }

    function get_risk2() {
        if(pd.cash.amount <= 20000) { 
            return 0;
        }
        if(pd.cash.safe > pd.cash.amount) { 
            return 0;
        }
        return 0.5 - (pd.cash.safe / pd.cash.amount);
    }


    this.get_click_sell_amount = function() { 
        return pd.sell_amount + (pd.stats.seller_rps * pd.sell_rps_multiplier);
    }

    this.get_click_make_amount = function() { 
        return pd.make_amount + (pd.stats.clicker_rps * pd.make_rps_multiplier);
    }

this.get_difficulty_multiplier = function() {
    var diff_time = (pd.stats.seconds_played / 5);
    return Math.pow(pd.difficulty_multiplier, diff_time);
}

    this.get_widget_roi = function() {
        return pd.widget_roi;
    }

    this.get_title = function() { 
        return pd.title;
    }
    this.dump_pd = function(key) { 
        console.log(pd[key]);
    }
    function get_item_cost(scl) { 
        var cst = ((scl.amount + 1) * scl.base_cost) * (scl.amount + 1);

        if((scl.amount + 1) > 10) { 
            cst *= 2;
        }
        return cst;
    }

    function get_item_last_cost(scl) { 
        var cst = ((scl.amount) * scl.base_cost) * (scl.amount);

        if(scl.amount > 10) { 
            cst *= 2;
        }
        return cst;
    }

    function get_item_sell_value(scl) {
        return get_item_last_cost(scl) * (pd.sell_return * pd.economy_roi);
    }
    
    function get_safe_cash() { 
        if(pd.cash.safe > pd.cash.amount) {
            return pd.cash.amount;
        } else { 
            return pd.cash.safe;
        }
    }

    function get_unsafe_cash() { 
        var unsafe = pd.cash.amount - pd.cash.safe;
        if(unsafe < 0) { unsafe = 0; }
        return unsafe;
    }

    function get_hex_from_int(n) { 
        return n.toString(24);
    }
    function get_int_from_hex(s) { 
        return parseInt(s, 24);
    }
    
    function pd_to_json() { 


        var sv = {
            'cash':Math.round(pd.cash.amount),
            'cash_safe':Math.round(pd.cash.safe),
            'widgets':Math.round(pd.widgets.amount),
            'clickers':{},
            'sellers':{},
            'upgrades':{},
            'banks':{},
            'stats':pd.stats,
            'version':pd.version,
        };
    

        for(var k in pd.banks) { 
            if(pd.banks[k].unlocked) {
                sv.banks[k] = {
                    'amount':pd.banks[k].amount,
                    'unlocked':pd.banks[k].unlocked,
                };
            }
        }

        for(var k in pd.clickers) { 
            sv.clickers[k] = {
                'amount':pd.clickers[k].amount,
                'unlocked':pd.clickers[k].unlocked,
            };
        }

        for(var k in pd.sellers) { 
            sv.sellers[k] = {
                'amount':pd.sellers[k].amount,
                'unlocked':pd.sellers[k].unlocked,
            };
        }

        for(var k in pd.upgrades) { 
            sv.upgrades[k] = {
                'purchased':pd.upgrades[k].purchased,
            };
        }
        return sv;
    }
    function new_pd_to_json() { 
        var sdata = {
            'c':get_hex_from_int(Math.round(pd.cash.amount)),
            'cs':get_hex_from_int(Math.round(pd.cash.safe)),
            'w':get_hex_from_int(Math.round(pd.widgets.amount)),
        };
       
        var unlockables = {
            "clickers":"cl",
            "sellers":"sl",
            "banks":"bn",
        };
        for(var k in unlockables) { 
            var items = pd[k];
            var sk = unlockables[k];
            var tmpa = [];
            for(var ik in items) { 
                if(items[ik].unlocked) {
                    tmpa.push(
                        items[ik].sid
                        + ":" +
                        get_hex_from_int(items[ik].amount)
                    ); 
                }
            }
            sdata[sk] = tmpa.join('|');
        }

        var tmpu = [];
        for(var k in pd.upgrades) { 
            var u = pd.upgrades[k];
            if(u.purchased) { 
                tmpu.push(u.sid); 
            }
        }
        sdata['u'] = tmpu.join('|')

        var tmps = [];
        for(var k in pd.stats) { 
            tmps.push(k+':'
                +get_hex_from_int(pd.stats[k])
            );
        }
        sdata['s'] = tmps.join('|');
        return sdata;
    }


    function ac_to_json() { 

        var ac = [];
        for(var k in pd.achievements) { 
            if(pd.achievements[k].unlocked) { 
                ac.push(k);
            }
        }
        return ac;
    }

    function new_ac_to_json() { 
        var ac = [];
        for(var k in pd.achievements) { 
            if(pd.achievements[k].unlocked) { 
                ac.push(pd.achievements[k].sid);
            }
        }
        return ac.join('|');
    }

    function update_save_from_pd() { 
        localStorage.sv = JSON.stringify(pd_to_json());
        localStorage.ac = JSON.stringify(ac_to_json());
    }
    function new_update_save_from_pd() {
        localStorage.sv2 = Base64.encode(JSON.stringify(new_pd_to_json()));
        localStorage.ac2 = Base64.encode(JSON.stringify(new_ac_to_json()));
    }

    function update_pd_from_json(sv) {

        pd.cash.amount = sv.cash;
        if(sv.cash_safe) { pd.cash.safe = sv.cash_safe; }
        pd.widgets.amount = sv.widgets;
        $.extend(pd.stats, sv.stats);

        if(sv.banks) {
            for(var k in sv.banks) { 
                if(pd.banks[k]) {
                    pd.banks[k].amount = sv.banks[k].amount;
                    pd.banks[k].unlocked = sv.banks[k].unlocked;
                }
            }
        }

        for(var k in sv.clickers) { 
            if(pd.clickers[k]) {
                pd.clickers[k].amount = sv.clickers[k].amount;
                pd.clickers[k].unlocked = sv.clickers[k].unlocked;
            }
        }

        for(var k in sv.sellers) { 
            if(pd.sellers[k]) { 
                pd.sellers[k].amount = sv.sellers[k].amount;
                pd.sellers[k].unlocked = sv.sellers[k].unlocked;
            }
        }

        for(var k in sv.upgrades) { 
            if(pd.upgrades[k]) { 
                if(sv.upgrades[k].purchased) { 
                    apply_upgrade(k);
                }
            }
        }
    }
    function new_update_pd_from_json(sv) { 
        pd.cash.amount = get_int_from_hex(sv.c);
        if(sv.cs) { pd.cash.safe = get_int_from_hex(sv.cs); }
        pd.widgets.amount = get_int_from_hex(sv.w);

        var unlockables = {
            'banks':'bn',
            'clickers':'cl',
            'sellers':'sl',
        };

        for(var uk in unlockables) {
            var sk = unlockables[uk];
            if(sv[sk]) { 
                var bns = sv[sk].split('|');
                for(var i=0; i<bns.length; i++) {
                    var bid = bns[i].split(':');
                    for(var k in pd[uk]) {
                        if(pd[uk][k].sid == bid[0]) { 
                            pd[uk][k].amount = get_int_from_hex(bid[1]);
                            pd[uk][k].unlocked = true;
                        } 
                    }
                }
            }
        }

        var upgs = sv.u.split('|');
        for(var k in pd.upgrades) { 
            var upg = pd.upgrades[k];
            if(upgs.indexOf(upg.sid) > -1) {
                apply_upgrade(k);
            }
        }

        var svs = sv.s.split('|');
        for(var k in pd.stats) { 
            for(var i=0; i<svs.length; i++) { 
                var svsp = svs[i].split(':');
                if(svsp[0] == k) {
                   pd.stats[k] = get_int_from_hex(svsp[1]);
                }
            }
        }
    }

    function update_ac_from_json(ac) {

        for(var i=0; i<ac.length; i++) {
            if(pd.achievements[ac[i]]) { 
                pd.achievements[ac[i]].unlocked = true;
            }
        }
    }
    function new_update_ac_from_json(ac) {
        ac = ac.split('|');
        for(var k in pd.achievements) { 
            if(ac.indexOf(pd.achievements[k].sid) > -1) { 
                pd.achievements[k].unlocked = true;
            } 
        }
    }

    function update_pd_from_save() { 

        if(localStorage.ac) { 
            var ac = $.parseJSON(localStorage.ac);
            update_ac_from_json(ac);
        }

        if(localStorage.sv) { 
            var sv = $.parseJSON(localStorage.sv);
            update_pd_from_json(sv);
        } 
    }
    function new_update_pd_from_save() { 

        if(localStorage.ac2) { 
            var ac = $.parseJSON(Base64.decode(localStorage.ac2));
            new_update_ac_from_json(ac);
        }
        if(localStorage.sv2) { 
            var sv = $.parseJSON(Base64.decode(localStorage.sv2));
            new_update_pd_from_json(sv);
        } 
    }

    this.add_cash = function(n) { 
        earn_cash(n);
        pd.stats.cheated_cash += n;
    }

    this.add_widgets = function(n) { 
        pd.widgets.amount += n;
        pd.stats.cheated_widgets += n;
    }
    
    this.do_save = function() {

        new_update_save_from_pd();
        last_saved = 0;
        track_page_view('/game_save');
    }

    this.do_load = function() { 
        if((localStorage.sv2)||(localStorage.ac2)) { 

            new_update_pd_from_save();
            message('Game loaded!');
            track_page_view('/game_load');
        }
    }

    this.do_export = function() {
        var exdata = {
            'sv': new_pd_to_json(),
            'ac': new_ac_to_json()
        };
        var exdata_json = JSON.stringify(exdata);
        var exdata_base64 = Base64.encode(exdata_json);
        $('#impexp').val(exdata_base64);
        message('Game exported!');
    }
    this.do_import = function() { 
        var imptxt = $('#impexp').val();
        if(!imptxt) { 
            return false;
        }
        if(imptxt == 'THANK YOU!') {
            good_message('You have unlocked the "Thank You" hidden upgrade'); 
            apply_upgrade('donator_thanks');
            return;
        }
        var exdata_json = Base64.decode($.trim(imptxt));
        var exdata = $.parseJSON(exdata_json);
        new_update_ac_from_json(exdata.ac);
        new_update_pd_from_json(exdata.sv);
        message('Game imported!');
    }

this.do_run = function() { 
        var input = $('#console_input').val();
        if(!input) { 
            return false;
        }
        if(input == 'add cash') {
                alert("Warning: When adding cash, please enter a numeric value, or the\ngame will cease to function.  Negative values are not permitted.")
                var n = prompt("Enter the amount of cash (USD) to add.", "0");
                var n = Number(n);
                if(n < 0) {
                alert("Please enter positive values only.");
                }
                alert(n + " USD will be added to your balance");
                earn_cash(n);
                pd.stats.cheated_cash += n;
        }
        if(input == 'add bitcoin') {
                alert("Warning: When adding bitcoin, please enter a numeric value, or the\ngame will cease to function.")
                var b = prompt("Enter the amount of bitcoin to add.", "0");
                var b = Number(b);
                alert(b + " bitcoin will be added to your balance");
                pd.widgets.amount += b;
                pd.stats.cheated_widgets += b;
        }
}
    this.do_reset = function() { 
        localStorage.removeItem("sv2");
        message('Game reset');
        track_page_view('/game_reset');
        location.reload();
    }
    this.do_reset_all = function() { 
        localStorage.clear();
        message('Game reset - all');
        track_page_view('/game_reset_all');
        location.reload();
    }

    this.do_reset_confirm = function() { 
        var ok = confirm('Are you sure? You\'ll lose everything '
            + 'except Achievements.');
        if(ok) { 
            this.do_reset();
        }
    }
    this.do_reset_all_confirm = function() { 
        var ok = confirm('Are you sure? You\'ll lose everything, '
            + 'including Achievements.');
        if(ok) { 
            this.do_reset_all();
        }
    }

    function do_make(n) {
        pd.widgets.amount += n;   
        pd.stats.made_widgets += n; 
        return true;
    }

    this.do_make_click = function() { 
        
        var nw = (new Date).getTime();
        if((nw - last_click) < 70) { 
            return false;
        }
        last_click = nw;
        
        var amt = this.get_click_make_amount();
        if(do_make(amt)) { 

            pd.stats.hand_made_widgets += amt;
            fix_make_sell();
        }
    }

    function do_sell(n) { 
        if(pd.widgets.amount < 1) {
            return 0;
        }         
        if(n > pd.widgets.amount) {
            n += (pd.widgets.amount - n);
            if(n < 1) { 
                return 0;
            } 
        }
        pd.stats.sold_widgets += n;
        pd.widgets.amount -= n;
        earn_cash(n * pd.widget_roi);
        pd.stats.total_cash += (n * pd.widget_roi);
        return n;
    }

    this.do_sell_click = function() {
        
        var nw = (new Date).getTime();
        if((nw - last_click) < 70) {
            return false;
        } 
        last_click = nw;
        
        var sale = do_sell(this.get_click_sell_amount());
        if(sale) { 

            pd.stats.hand_sold_widgets += sale;
            fix_make_sell();
            return sale;
        }
        return 0;
    }

    function get_widget_quality() { 
        var keys = Object.keys(pd.widgets.qualities).sort(function(a,b){return a-b});
        for(var i=0; i<keys.length; i++) { 
            var idx = keys[i];
            if(pd.widget_roi > idx) { 
                continue;
            }
            return pd.widgets.qualities[idx];
        }
        return 'NA';
    }


   

    this.buy_bank = function(key) {
        var bn = pd.banks[key];
        if(!bn) { 
            return error('Invalid bank key');
        }
        if(!spend_cash(bn.cost)) { 
            return false;
        }
        bn.amount += 1;
        message('You have purchased a '+bn.label+' for $'+pretty_bigint(bn.cost));

        return true;
    }

    this.sell_bank = function(key) { 
        var bn = pd.banks[key];
        if(bn.amount < 1) { 
            return false;
        }
        var sell_val = get_item_sell_value(bn);
        earn_cash(sell_val);
        message('You sold a '+bn.label+' for $'+pretty_bigint(sell_val));

        bn.amount -= 1;
        return true;
    }

    this.buy_clicker = function(key) { 
        var cl = pd.clickers[key];
        if(!spend_cash(cl.cost)) { 
            return false;
        }
        cl.amount += 1;
        message('You have purchased a '+cl.label+' for $'+pretty_bigint(cl.cost));
        fix_clickers();

        return true;
    }

    this.sell_clicker = function(key) { 
        var cl = pd.clickers[key];
        if(cl.amount < 1) { 
            return false;
        }
        var sell_val = get_item_sell_value(cl);
        earn_cash(sell_val);
        message('You sold a '+cl.label+' for $'+pretty_bigint(sell_val));

        cl.amount -= 1;
        return true;
    }

    this.buy_seller = function(key) { 
        var sl = pd.sellers[key];
        if(!spend_cash(sl.cost)) { 
            return false;
        }
        sl.amount += 1;
        message('You have purchased a '+sl.label+' for $'+pretty_bigint(sl.cost));
        fix_sellers();

        return true;
    }

    this.sell_seller = function(key) { 
        var sl = pd.sellers[key];
        if(sl.amount < 1) { 
            return false;
        }
        var sell_val = get_item_sell_value(sl);
        earn_cash(sell_val);
        message('You sold a '+sl.label+' for $'+pretty_bigint(sell_val));

        sl.amount -= 1;
        return true;
    }

    this.buy_upgrade = function(key) { 
        var upg = pd.upgrades[key];
        var unl = apply_upgrade(key);
        if(!unl) { 
            return false;
        }
        if(!spend_cash(upg.cost)) {
            return false; 
        } 
        message('You have unlocked '+upg.label+' for $'+pretty_bigint(upg.cost));
        track_page_view('/game_buy_upgrade');
        fix_upgrades();
    }

    function apply_upgrade(key) { 
        var upg = pd.upgrades[key];
        if(!upg) { 
            return false; 
        }
        if(upg.purchased) { 
            return false;
        }
        upg.purchased = true;
        var act_parts = upg.action.split('.');
        if(act_parts.length == 1) { 
            pd[act_parts[0]] += upg.mod;
        } else if(act_parts.length == 2) {
            pd[act_parts[0]][act_parts[1]] += upg.mod;
        } else if(act_parts.length == 3) { 
            pd[act_parts[0]][act_parts[1]][act_parts[2]] += upg.mod;
        }

        return true;
    }

    function unlock_achievement(key) { 
        var ac = pd.achievements[key];
        if(!ac) { 
            return false;
        }
        if(ac.unlocked) { 
            return false; 
        }
        ac.unlocked = true;
        good_message('You have earned a new achievement: <em>'+ac.label+'</em>');
        return true;
    }

   

    function fix_display() { 
        fix_unlocks();
        fix_clickers();
        fix_sellers();
        fix_upgrades();
        fix_make_sell();
        fix_title();
        fix_risk();
        fix_achievements();
        fix_banks(); 
    }

    function fix_achievements() {
        if(active_tab != 'achievements') { 
            return false;
        }
        for(var k in pd.achievements) { 
            var ac = pd.achievements[k];
            var el = $('#'+k);
            var el_lbl = $('#'+k+'_lbl');
            if((ac.hidden)&&(!ac.unlocked)) {
                el.addClass('hidden'); 
                continue;
            }
            if(ac.unlocked) { 
                el.removeClass('hidden');
                el.removeClass('semi_trans');
                el_lbl.addClass('purchased');
                el.removeClass('locked');
            } else { 
                el.addClass('locked');
                el.addClass('semi_trans');
            }
        }

    }

    function fix_banks() {
        if(active_tab != 'banks') { 
            return; 
        }

        $('#bank_rps').html(pretty_bigint(pd.stats.bank_rps));
        $('#bank_total').html(pretty_bigint(pd.cash.safe));
        for(var k in pd.banks) {
            var bn = pd.banks[k];
            bn.cost = get_item_cost(bn);
            var el = $('#'+k);
            var el_btn = $('#'+k+'_btn');
            var el_sell_btn = $('#'+k+'_sell_btn');
            var el_lbl = $('#'+k+'_lbl');
            var el_cst = $('#'+k+'_cst');
            var el_amt = $('#'+k+'_amt');
            var el_rps = $('#'+k+'_rps');
        
            el_amt.html(pretty_int(bn.amount));
            el_cst.html(pretty_bigint(bn.cost));
            el_rps.html(pretty_bigint(bn.rps));

            if((!bn.unlocked)) { 
                el.addClass('hidden');
                continue;
            }
            
            if(pd.cash.amount < bn.cost) {
                el_btn.attr('disabled',true);
            } else { 
                el_btn.attr('disabled',false);
            }

            if(bn.amount < 1) {
                el_sell_btn.attr('disabled',true);
            } else { 
                el_sell_btn.attr('disabled',false);
            }
                
            el.removeClass('hidden');
        }
    }

    function fix_risk() { 
        pd.risk_amount = get_risk();
        pd.risk2_amount = get_risk2();
        $('#risk_amount').html(pretty_int(pd.risk_amount * 100)); 
        $('#risk2_amount').html(pretty_int(pd.risk2_amount * 100));
        var el_lvl = $('#risk_level');
        var el_lvl2 = $('#risk2_level');
        var slvl = false;
        var slvl2 = false;
        for(var i=0; i<pd.risk_levels.length; i++) {
            if((pd.risk_amount < pd.risk_levels[i].level) && (!slvl)) {
                el_lvl.html(pd.risk_levels[i].label);
                slvl = true;
            }
            if((pd.risk2_amount < pd.risk_levels[i].level) && (!slvl2)) { 
                el_lvl2.html(pd.risk_levels[i].label);
                slvl2 = true;
            }
        }
        
    }

    function fix_saved() { 
        last_saved += 1;
        $('#last_saved').html('Game saved '+last_saved+' seconds ago');
    }

    function fix_title() { 
        document.title = '$'+pretty_bigint(pd.cash.amount)+' | '+pd.title;
    }

    function fix_make_sell() { 
        $('#sell_btn').html(pd.cash.action_label);
        $('#sell_lbl').html(pd.cash.label);
        $('#sell_amt').html(pretty_int(pd.cash.amount));
        $('#sell_roi').html(pd.widget_roi.toFixed(2));
        $('#safe_cash').html(pretty_int(get_safe_cash()));
        $('#cheated_cash').html(pretty_int(pd.stats.cheated_cash));
        $('#cheated_bitcoins').html(pretty_int(pd.stats.cheated_widgets));
        var sell_rate = pd.stats.seller_rps;
        if((pd.stats.seller_rps > pd.stats.clicker_rps)&&(pd.widgets.amount < pd.stats.seller_rps)) { 
            sell_rate = pd.stats.clicker_rps;
        }
        $('#seller_rps').html(pretty_int(sell_rate * pd.widget_roi));
        $('#make_btn').html(pd.widgets.action_label);
        $('#make_lbl').html(pd.widgets.label);
        $('#make_amt').html(pretty_int(pd.widgets.amount));
        $('#make_qlt').html(get_widget_quality());
        $('#clicker_rps').html(pretty_int(pd.stats.clicker_rps-pd.stats.seller_rps));
        $('#clicker_rps_g').html(pretty_int(pd.stats.clicker_rps));
    }

    function fix_clickers() {
        if(active_tab != 'clickers') {
            return false;
        } 
        for(var k in pd.clickers) { 
            var el = $('#'+k);
            var el_btn = $('#'+k+'_btn');
            var el_sell_btn = $('#'+k+'_sell_btn');
            var el_amt = $('#'+k+'_amt');
            var el_cst = $('#'+k+'_cst');
            var el_rps = $('#'+k+'_rps');
            var el_rsk = $('#'+k+'_rsk');

            var cl = pd.clickers[k];
            if(cl.amount > 0) { 
                el_sell_btn.attr('disabled', false);
            } else { 
                el_sell_btn.attr('disabled', true);
            }
            
            cl.cost = get_item_cost(cl); 
            
            if(cl.cost > pd.cash.amount) { 
                el_btn.attr('disabled', true);
            } else { 
                el_btn.attr('disabled', false);
            }
            if(!cl.unlocked) { 
                el.addClass('hidden');
            } else { 
                el.removeClass('hidden');
            }
            el_cst.html(pretty_bigint(cl.cost));
            el_amt.html(pretty_int(cl.amount));
            el_rps.html(pretty_bigint(cl.rps));
            el_rsk.html(pretty_int(cl.risk * 100));
        }
    }

    function fix_sellers() {
        if(active_tab != 'sellers') { 
            return;
        } 
        for(var k in pd.sellers) { 
            var el = $('#'+k);
            var el_btn = $('#'+k+'_btn');
            var el_sell_btn = $('#'+k+'_sell_btn');
            var el_amt = $('#'+k+'_amt');
            var el_cst = $('#'+k+'_cst');
            var el_rps = $('#'+k+'_rps');
            var el_rsk = $('#'+k+'_rsk');

            var sl = pd.sellers[k];

            if(sl.amount < 1) { 
                el_sell_btn.attr('disabled', true);
            } else { 
                el_sell_btn.attr('disabled', false);
            }

            sl.cost = get_item_cost(sl);

            if(sl.cost > pd.cash.amount) {
                el_btn.attr('disabled', true); 
            } else { 
                el_btn.attr('disabled', false);
            }
            if(!sl.unlocked) { 
                el.addClass('hidden');
            } else { 
                el.removeClass('hidden');
            }
            el_cst.html(pretty_bigint(sl.cost));
            el_amt.html(pretty_int(sl.amount));
            el_rps.html(pretty_bigint(sl.rps));
            el_rsk.html(pretty_int(sl.risk * 100));
        }
    }

    function fix_unlocks() {

        var cl_unl = 0;
        var cl_tot = 0; 
        for(var k in pd.clickers) { 
            cl_tot += 1;
            var cl = pd.clickers[k];
            if(cl.unlock_rps <= pd.stats.seller_rps) { 
                cl.unlocked = true;
                cl_unl += 1;
            }
        }
        $('#clickers_unlocked').html(pretty_int(cl_unl));
        $('#clickers_total').html(pretty_int(cl_tot));

        var sl_unl = 0;
        var sl_tot = 0;
        for(var k in pd.sellers) { 
            sl_tot += 1;
            var sl = pd.sellers[k];
            if(sl.unlock_rps <= pd.stats.seller_rps) {
                sl_unl += 1;
                sl.unlocked = true;        
            }
        }
        $('#sellers_unlocked').html(pretty_int(cl_unl));
        $('#sellers_total').html(pretty_int(cl_tot));

        var bn_unl = 0;
        var bn_tot = 0;
        for(var k in pd.banks) { 
            bn_tot += 1;
            var bn = pd.banks[k];
            if((bn.unlock_rps <= pd.stats.seller_rps)||(bn.unlocked)) { 
                bn_unl += 1;
                bn.unlocked = true;
            }
        }
        $('#banks_total').html(pretty_int(bn_tot));
        $('#banks_unlocked').html(pretty_int(bn_unl));

        var ac_unl = 0;
        var ac_tot = 0;
        for(var k in pd.achievements) { 
            var ac = pd.achievements[k];
            if((!ac.unlocked)&&(ac.hidden)) { 
                continue;
            }
            if(ac.unlocked) { 
                ac_unl += 1;
            }
            ac_tot += 1;
        }
        $('#achievements_unlocked').html(pretty_int(ac_unl));
        $('#achievements_total').html(pretty_int(ac_tot));

    }

    function fix_upgrades() {
        var up_tot = 0;
        var up_unl = 0; 
        for(var k in pd.upgrades) {
            var el = $('#'+k); 
            var el_btn = $('#'+k+'_btn');
            var el_cst = $('#'+k+'_cst');
            var upg = pd.upgrades[k];

            if((upg.prereq)) { 
                var req = pd.upgrades[upg.prereq];
                if((req)&&(!req.purchased)) {
                    up_tot += 1;
                    el.addClass('hidden');
                    continue;
                } 
            } 

            if((upg.prereq == 'hidden')&&(!upg.purchased)) { 
                el.addClass('hidden');
                continue;
            } else { 
                up_tot += 1;  
            }  
            
            if(upg.purchased) { 
                el_btn.addClass('hidden');
                $('#'+k+'_lbl').addClass('purchased');
                el_cst.html('&#10004;');
                up_unl += 1;
            } else { 
                el_cst.html('$'+pretty_bigint(upg.cost));
            }
            if(pd.cash.amount < upg.cost) { 
                el_btn.attr('disabled', true);
            } else { 
                el_btn.attr('disabled', false);
            }
            el.removeClass('hidden');
        }
        $('#upgrades_unlocked').html(pretty_int(up_unl));
        $('#upgrades_total').html(pretty_int(up_tot));
    }


    function fix_stats() {
        pd.stats.seconds_played += 1;
        pd.stats.bought_upgrades = 0;
        for(var k in pd.upgrades) { 
            if(pd.upgrades[k].purchased) { 
                pd.stats.bought_upgrades += 1;
            }
        }
        
        if(active_tab != 'misc') { return; }
        $('#hand_made_widgets').html(pretty_bigint(pd.stats.hand_made_widgets));
        $('#made_widgets').html(pretty_bigint(pd.stats.made_widgets));
        $('#sold_widgets').html(pretty_bigint(pd.stats.sold_widgets));
        $('#hand_sold_widgets').html(pretty_bigint(pd.stats.hand_sold_widgets));
        $('#total_cash').html(pretty_bigint(pd.stats.total_cash));
        $('#total_spent').html(pretty_bigint(pd.stats.total_spent));
        $('#bought_upgrades').html(pretty_int(pd.stats.bought_upgrades));
        $('#time_played').html(pretty_int(pd.stats.seconds_played));
        $('#click_sell_amount').html(pretty_int(pd.sell_amount));
        $('#click_make_amount').html(pretty_int(pd.make_amount));
    }

   

    this.setup_display = function() {
        setup_clickers(); 
        setup_sellers();
        setup_upgrades();   
        setup_banks();
        setup_achievements();
    }

    function setup_achievements() { 
       var sortlist = [];
        for(var k in pd.achievements) { 
            sortlist.push([k, pd.achievements[k].group]);
        } 
        var sorted = sortlist.sort(function(x,y) { return x[1] - y[1] });
        var ac_el = $('#achievements');
        ac_el.html('');

        for(var i in sorted) {
            var k = sorted[i][0];
            var ac = pd.achievements[k];
            var template = $('#tpl_achievement').html();
            var data = {'ac':ac, 'id':k};
            var html = Mustache.to_html(template, data);
            ac_el.prepend(html);
        }    
    }

    function setup_banks() {
       var sortlist = [];
        for(var k in pd.banks) { 
            sortlist.push([k, pd.banks[k].cost]);
        } 
        var sorted = sortlist.sort(function(x,y) { return x[1] - y[1] });
        var bn_el = $('#banks');
        bn_el.html('');

        for(var i in sorted) {
            var k = sorted[i][0];
            var bn = pd.banks[k];
            var template = $('#tpl_bank').html();
            var data = {'bn':bn, 'id':k};
            var html = Mustache.to_html(template, data);
            bn_el.prepend(html);
        }
    }

    function setup_clickers() { 
        var sortlist = [];
        for(var k in pd.clickers) { 
            sortlist.push([k, pd.clickers[k].base_cost]);
        } 
        var sorted = sortlist.sort(function(x,y) { return x[1] - y[1] });

        var cs_el = $('#clickers');
        cs_el.html('');
        
        for(var i in sorted) {
            var k = sorted[i][0];
            var cl = pd.clickers[k];
            var template = $('#tpl_clicker').html();
            var data = {'cl':cl, 'id':k};
            var html = Mustache.to_html(template, data);
            cs_el.prepend(html);
        }
    }

    function setup_sellers() { 
        var sortlist = [];
        for(var k in pd.sellers) { 
            sortlist.push([k, pd.sellers[k].base_cost]);
        } 
        var sorted = sortlist.sort(function(x,y) { return x[1] - y[1] });

        var sl_el = $('#sellers');
        sl_el.html('');
        
        for(var i in sorted) {
            var k = sorted[i][0];
            var sl = pd.sellers[k];
            var template = $('#tpl_seller').html();
            var data = {'sl':sl, 'id':k};
            var html = Mustache.to_html(template, data);
            sl_el.prepend(html);
        }
    }

    function setup_upgrades() {
        var sortlist = [];
        for(var k in pd.upgrades) { 
            sortlist.push([k, pd.upgrades[k].cost]);
        } 
        var sorted = sortlist.sort(function(x,y) { return x[1] - y[1] });
        var upgs_el = $('#upgrades');
        upgs_el.html('');

        for(var i in sorted) { 
            var k = sorted[i][0];
            var upg = pd.upgrades[k];
            var template = $('#tpl_upgrade').html();
            var data = {'upg':upg, 'id':k};
            var html = Mustache.to_html(template, data);
            upgs_el.prepend(html);
        }
    }

   

    function check_achievements() {
        for(var k in pd.achievements) { 
            var a = pd.achievements[k];
            if(a.unlocked) { 
                continue;
            }
            var pps = a.property.split('.');
            var val = pd;
            for(var i = 0; i<pps.length; i++) { 
                val = val[pps[i]];
            }
            if((val === true)&&(val === a.required)) { 
                unlock_achievement(k);
            }
            else if((val)&&((a.required >= 0 && val >= a.required)||(a.required < 0 && val <= a.required))) {
                unlock_achievement(k);
            } 
        }
    }

   

    this.check_events = function() {
        for(var k in pd.events) { 
            var rnd = Math.random();
            if(pd.events[k].chance > rnd) { 
                run_event(k);
            }
        } 
    }

    function run_event(evk) { 
        if(pd.events[evk]) {
            eval(pd.events[evk].action);
        }
    }

    function event_irs_audit(n) { 
        var rsk = get_risk2();
        if(rsk < Math.random()) { 
            good_message('You were able to avoid an IRS audit');
            return;
        }
        var amt = pd.cash.amount * n;
        amt -= get_safe_cash();
        if(amt < 1) {
            good_message('The IRS was unable to find any unsecured cash to seize');
            return;
        }
        pd.cash.amount -= amt;
        bad_message('The IRS has confiscated $'+pretty_bigint(amt)+' of your funds');
    }

    function event_found_meth(r) { 
        var amt = pd.stats.clicker_rps * r;
        if(amt < 100) { amt = 100; }
        pd.widgets.amount += amt;
        good_message('You found an old hard drive, with '
            +pretty_bigint(amt)+' bitcoin within its wallet.dat!');
    }

    function event_found_cash(r) { 
        var amt = (pd.stats.seller_rps * pd.widget_roi) * r;
        if(amt < 100) { amt = 100; }
        earn_cash(amt);
        if(amt > 10000000000) { 
            good_message('A mystery benefactor has contributed $'
                +pretty_bigint(amt)+' to your cause');
            return;
        }
        if(amt > 10000000) { 
            good_message('You found a truck load of cash, containing $'
                +pretty_bigint(amt)+' inside!');
            return;
        }
        if(amt > 100000) { 
            good_message('You found a briefcase with $'+pretty_int(amt)+' inside!');
            return;
        }
        good_message('You found some extra cash hidden in a shoe box, worth $'
            +pretty_int(amt)+'!');
    }

    function event_lose_meth(r) { 
        var amt = (pd.stats.clicker_rps * r);
        if(amt < 1) { 
            return false;
        }
        if(amt > pd.widgets.amount) { 
            amt = pd.widgets.amount;
        }
        pd.widgets.amount -= amt;
        bad_message('About '+pretty_bigint(amt)+' bitcoins have gone missing...');
        return true;
    }

    function event_lose_cash(r) { 
        var amt = (pd.stats.seller_rps * pd.widget_roi) * r;
        amt -= get_safe_cash();
        if(amt < 1) { 
            return false;
        }
        if(amt > pd.cash.amount) { 
            amt = pd.cash.amount;
        }
        pd.cash.amount -= amt;
        bad_message('According to accounting, $'+pretty_bigint(amt)+' has been "lost"');
        return true;
    }

    function event_rival_lose_cash(r) { 
        var amt = (pd.stats.seller_rps * pd.widget_roi) * r;
        amt -= get_safe_cash();
        if(amt < 1) { 
            return false;
        }
        if(amt > pd.cash.amount) { 
            amt = pd.cash.amount;
        }
        pd.cash.amount -= amt;
        bad_message('$'+pretty_bigint(amt)+'was accidentally lost!');
        return true;
    }

    function event_pay_bribe(r) { 
        var amt = (pd.stats.seller_rps * pd.widget_roi) * r;
        amt -= get_safe_cash();
        if(amt < 1) { 
            return false;
        }
        if(amt > pd.cash.amount) { 
            amt = pd.cash.amount;
        }
        pd.cash.amount -= amt;
        bad_message('You had to give your mom a birthday present worth $'+pretty_bigint(amt));
        return true;
    }

    function event_dea_seize_cash(n) { 
        var amt = (pd.cash.amount * n);
        amt -= get_safe_cash();
        if(amt < 1) { 
            good_message('Whoa, your equipment almost overheated!');
            return false;
        }
        pd.cash.amount -= amt;
        bad_message('Due to a hardware failure, you have lost $'+pretty_bigint(amt)+'!');
        return true;
    }

    function event_dea_seize_building() {
        var nw = (new Date).getTime();

        if(pd.risk_amount > Math.random()) {
            if((nw - last_bust) < 240000) {
                good_message('You narrowly avoided an major hardware failure.');
                return false;
            }
            var picks = [];
            for(var k in pd.clickers) { 
                var cl = pd.clickers[k];
                if((cl.amount > 0) && (cl.risk > 0.001)) { 
                    picks.push(k);
                }
            }
            if(picks.length < 1) {
                good_message('You dropped a hard drive with a valuable wallet.dat, but luckily a kind pedestrian returned it to you!');
                return false;
            }
            var pick = picks[Math.floor(Math.random()*picks.length)];
            pd.clickers[pick].amount -= 1;
            bad_message('Due to a hardware failure, you had to give up a '+pd.clickers[pick].label+'!');
            event_dea_seize_cash(0.1);
            last_bust = nw;
            return true;
        }
        good_message('Watch out, you almost lost your wallet.dat!');
        return false;
    }
} // END - Game()



function add_message(msg, _type) { 
    var el = $("<div></div>");
    el.html(msg);
    el.addClass(_type);
    $('#last_message').html($(el).clone().wrap('<p>').parent().html());
    $('#messages').prepend(el);

    if($('#messages div').length > 45) { 
        $('#messages div:last').remove();
    }
}
function error(msg) { 
    add_message('&#10007; '+msg, 'error');    
}
function message(msg) { 
    add_message('&#9993; '+msg, 'message');
}
function good_message(msg) { 
    add_message('&#9733; '+msg, 'good_message');
}
function bad_message(msg) { 
    add_message('&#10007; '+msg, 'bad_message');
}

function switch_tab(tbid) {
    var tb_el = $('#'+tbid+'_div');
    $('.tab_div').hide();
    $('.tab').removeClass('active');
    $('#'+tbid+'_tab').addClass('active');
    tb_el.show();
    active_tab = tbid;
    return false;
}

function toggle_tab(tbid) { 
    $('#'+tbid+'_div').toggle(200);
    return false;
}

function pretty_bigint(num) { 
    var sn = '';
    if(num >= 1000000000000000000000000) { 
        return pretty_int(num)
    }
	if(num < 1) { 
        sn = Math.round(num * 1000) / 1000;
		return sn;
		}    
    if(num >= 1000000000000000000000) { 
        sn = Math.round((num / 1000000000000000000000) * 100) / 100;
        return sn + 'S';
    }
    if(num >= 1000000000000000000) { 
        sn = Math.round((num / 1000000000000000000) * 100) / 100;
        return sn + 'Qt';
    }
    if(num >= 1000000000000000) { 
        sn = Math.round((num / 1000000000000000)*100) / 100;
        return sn + 'Q';
    }
    if(num >= 1000000000000) { 
        sn = Math.round((num / 1000000000000) * 100) / 100;
        return sn + 'T';
    }
    if(num >= 1000000000) { 
        sn = Math.round((num / 1000000000) * 100) / 100;
        return sn + 'B';
    }
    if(num >= 1000000) { 
        sn = Math.round((num / 1000000) * 100) / 100;
        return sn + 'M';
    } 
    return pretty_int(num);
}

function pretty_int(num) {
	if(num < 1000) { 
        num = Math.round(num * 100) / 100;
		}		
    else { 
        num = Math.round(num);
    }
    var num_str = num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); 
    return num_str;
}

function track_page_view(pg) { 
    if(has_gaq) {
        _gaq.push(['_trackPageview',pg]);
        return true;
    }
    return false;
}

function track_event(category, action, message) {
    return false;
    if(has_gaq) { 
        _gaq.push(['_trackEvent', category, action, message]);
        return true;
    } 
    return false;
}

function log(type, msg, data) { 
    var obj = null;
    if(data) { obj = data; }
    remote_log({
        'type':type,
        'text':msg,
        'version':'0.8.3',
        'user_agent':navigator.userAgent,
        'extra':Base64.encode(JSON.stringify(obj)),
    });
    console.log(type.toUpperCase()+': '+msg);
}

function warning_log(msg, data) { 
    log('warning',msg,data);
}

function debug_log(msg, data) { 
    log('debug',msg,data);
}

function error_log(msg, data) {
    log('error',msg,data);
}

function remote_log(data) {
    if(has_loggly) { 
        _LTracker.push(data);
        return true;
    }
    return false;
}

var gm = new Game();
$(document).ready(function() {
    gm.setup_display();
    tmr = setInterval("gm.tick()", tick_ms);
    sec_tmr = setInterval("gm.sec_tick()", 1000);
    save_tmr = setInterval("gm.do_save()", 30000);
    event_tmr = setInterval("gm.check_events()", 120000);
    ver_tmr = setInterval("gm.check_version()", 620000);
    gm.do_load();
    message('Welcome to '+gm.get_title()+'!');

    var bind_type = 'click';
    if ('ontouchstart' in window) {
        bind_type = 'touchstart click';
    } else if(window.navigator.msPointerEnabled) {
        bind_type = 'touchstart click';
    }

    $('#make_btn').bind(bind_type, function(e) { 
        gm.do_make_click();
        
        var elc = $('.make_up:first').clone()
        elc.html('+'+pretty_bigint(gm.get_click_make_amount()));
        $('#make_div').append(elc);
        elc.show();
        elc.offset({left:e.pageX-30, top:e.pageY-50});
        var end_y = e.clientY-150;
        elc.css('opacity',100);
        if(last_float == 1) { 
            var this_float = e.pageX;
            last_float = 0;
        } else { 
            var this_float = e.pageX - 60;
            last_float = 1; 
        }
        elc.animate({'top':end_y.toString()+'px', 'opacity':0, 'left':this_float.toString()+'px'}, 750, function() { 
            $(this).remove();
        });
        
    });

    $('#sell_btn').bind(bind_type, function(e) { 
        var sale = gm.do_sell_click();
        if(sale == 0) { 
            return;
        }
        
        var elc = $('.sell_up:first').clone()
        elc.html('$'+pretty_bigint(sale*gm.get_widget_roi()));
        $('#sell_div').append(elc);
        elc.show();
        elc.offset({left:e.pageX-30, top:e.pageY-50});
        var end_y = e.clientY-150;
        elc.css('opacity',100);
        if(last_float == 1) { 
            var this_float = e.pageX;
            last_float = 0;
        } else { 
            var this_float = e.pageX - 60;
            last_float = 1; 
        }
        elc.animate({'top':end_y.toString()+'px', 'opacity':0, 'left':this_float.toString()+'px'}, 750, function() { 
            $(this).remove();
        });
        
    });

    switch_tab('clickers');
    $('button').attr('disabled', false);
});


</script>

<div id="left_wrap" class="left_width">
    <div id="make_sell_spacer"></div>  
    <div id="left_floatable">     
    <div id="make_sell_wrap">
    <div id="make_div">
        <p>
            <span id="make_lbl">Bitcoins</span>
            (bitcoin price is <em><span id="make_qlt">NA</span></em>)<br />
            <strong><span id="make_amt">0</span></strong><br />
            <small><span id="clicker_rps">0</span> bitcoins mined per second (net)</small><br />
            <small><span id="clicker_rps_g">0</span> bitcoins mined per second (gross)</small><br />
            <small class="cheat_btc" style="font-weight: bold;"><span id="cheated_bitcoins">0</span> not real bitcoins</small>
        </p>
        <div id="make_btn">MINE!</div>
    </div>
    <div id="sell_div">
        <p>
            <span id="sell_lbl">United States Dollars</span>
            ($<span id="sell_roi">0</span> per bitcoin)<br />
            $<strong><span id="sell_amt">0</span></strong><br />
            <small>$<span id="safe_cash">0</span> in tax havens</small><br />
            <small>$<span id="seller_rps">0</span> exchanged per second</small><br />
<small class="cheat_btc" style="font-weight: bold;">$<span id="cheated_cash">0</span> not real cash</small>
        </p>
        <div id="sell_btn">sell</div>
<br>
    </div>
    <div class="clear"></div>
    </div>

    <div id="make_sell_pad"></div>

    <div id="risk_div" class="small">
        You have a <b><span id="risk_level">low</span></b> chance of losing bitcoins or hardware failure
        (<b><span id="risk_amount">0</span>%</b>)<br />
        You have a <b><span id="risk2_level">low</span></b> chance of an IRS audit
        (<b><span id="risk2_amount">0</span>%</b>)
    </div>
    <div id="last_saved">Game saved 60 seconds ago</div>
    <div id="last_message">No new messages</div>
    </div> <!-- End left floatable -->
</div> <!-- End left_wrap -->

<div id="tab_btns" class="tabs">
    <div id="updated" class="w_div">The game has been updated! It may be wise to create a backup before refreshing.</div>
    <button onclick="switch_tab('clickers');" id="clickers_tab" class="tab">
        Mining (<span id="clickers_unlocked">0</span>/<span id="clickers_total">0</span>)
    </button>
    <button onclick="switch_tab('sellers');" id="sellers_tab" class="tab">
        Exchanging (<span id="sellers_unlocked">0</span>/<span id="sellers_total">0</span>)
    </button>
    <button onclick="switch_tab('upgrades');" id="upgrades_tab" class="tab">
        Upgrades (<span id="upgrades_unlocked">0</span>/<span id="upgrades_total">0</span>)
    </button>
    <button onclick="switch_tab('banks');" id="banks_tab" class="tab">
        Tax Havens (<span id="banks_unlocked">0</span>/<span id="banks_total">0</span>)
    </button>
    <button onclick="switch_tab('achievements');" id="achievements_tab" class="tab">
        Achievements (<span id="achievements_unlocked">0</span>/<span id="achievements_total">0</span>)
    </button>
    <button onclick="switch_tab('messages');" id="messages_tab" class="tab">
        All Messages
    </button>
    <button onclick="switch_tab('misc');" id="misc_tab" class="tab">
        Options &amp; Stats
    </button>
    <button onclick="switch_tab('console');" id="console_tab" class="tab">
        Console
    </button>
</div>

<div id="tab_divs">

    <div class="tab_div" id="clickers_div" style="display:none;">
        <div id="clickers"></div>
    </div>

    <div class="tab_div" id="sellers_div" style="display:none;">
        <div id="sellers"></div>
    </div>

    <div class="tab_div" id="upgrades_div" style="display:none;">
        <div id="upgrades"></div>
    </div>

    <div class="tab_div" id="banks_div" style="display:none;">
        <div class="w_div">
            <h3>
                <a href="#" onclick="$('#toggle_finance_info').toggle(100); return false;">
                Tax Havens 
                </a>
                <small class="pull_right">$<span id="bank_rps">0</span>/sec</small>
            </h3>
            <div id="toggle_finance_info">
            <p class="small">Total secured <b>$<span id="bank_total">0</span></b>
                <br /><br />
                Secured cash is the amount of <em>your total cash</em> that is 
                safe from being stolen or
                seized by the IRS or being lost due to a hardware failure. The more secured to 
                total cash you have, the lower the likelihood that 
                you'll be audited. Secured cash is not a separate resource,
                so it can never be higher than your total cash.
                
                </p>
            </div>
        </div>
        <div id="banks"></div>
    </div>

    <div class="tab_div" id="achievements_div" style="display:none;">
        <div id="achievements"></div>
    </div>

    <div class="tab_div" id="messages_div" style="display:none;">
        <div id="messages" style="text-align: left; background-color: white; color: black;"></div>
    </div>

    <div class="tab_div w_div" id="misc_div" style="display:none;">
        <div class="pull_left space_left">
            <h3>Instructions</h3>
            <ol>
                <li>Mine bitcoins</li>
                <li>Exchange bitcoins for USD</li>
                <li>Buy stuff with your exchanged money</li>
            </ol>
        </div>
        <div class="pull_left space_left">
            <h3>Options</h3>
                <button onclick="gm.do_reset_confirm();">Reset</button>
                <button onclick="gm.do_reset_all_confirm();">Reset All</button>
                <button onclick="gm.do_save();">Save</button>
                <button onclick="gm.do_load();">Load</button>
        </div>
        
        
        <div class="pull_left space_left">
            <h3>Backup</h3>
            <textarea id="impexp" style="width: 100%; height: 100px;"></textarea>
            <br>
            <button onclick="gm.do_export();">Create backup</button>
            <button onclick="gm.do_import();">Import backup</button>
        </div>
        

        <div class="pull_left space_left">
            <h3>Stats</h3>
            <ul>
                <li>Bitcoins mined: <b><span id="made_widgets">0</span></b></li>
                <li>Bitcoins click-mined: <b><span id="hand_made_widgets">0</span></b></li>
                <li>Bitcoins sold: <b><span id="sold_widgets">0</span></b></li>
                <li>Bitcoins click-sold: <b><span id="hand_sold_widgets">0</span></b></li>
                <li>Total upgrades purchased: <b><span id="bought_upgrades">0</span></b></li>
                <li>Total USD earned: <b>$<span id="total_cash">0</span></b></li>
                <li>Total USD spent: <b>$<span id="total_spent">0</span></b></li> 
                <li>Seconds spent playing: <b><span id="time_played">0</span></b></li>
                <li>Bitcoins mined per click: <b><span id="click_make_amount">0</span></b></li>
                <li>Bitcoins exchanged per click: <b><span id="click_sell_amount">0</span></b></li>
            </ul>    
        </div>

        <div class="pull_left space_left">
            <h3>Credits</h3>
            <ul>
			    <li><b>smeagol</b> 
                    - Conversion to Bitcoin</li>
                <li><b>Aaron Meier</b> 
                    - Programming and design</li>
                <li><b>Cody Stevens</b> 
                    - Name</li>
                <li><b>Dustin Lee</b> 
                    - Concept</li>
            </ul>
        </div>
		<br>
		<br>
        <div class="pull_left space_left">
                    <b>
                        Donate</b>
					<ul>
                    <li><b>Devcoin:</b> 1SMEAGqpm9JSpJ6JZaM5dEBptPTNahpFa</li>
					
					<li><b>Bitcoin:</b> 1SMEAGqpm9JSpJ6JZaM5dEBptPTNahpFa</li>
					<ul>
		</div>
<br>
<br>
        <div class="clear"></div>
    </div>
</div>
    <div class="tab_div" id="console_div" style="display:none; width: 75%; float: right; margin-right:10px; padding: 15px;">
        <div id="console" style="background-color: white; border-radius: 10px; padding: 15px;">
<h3 style="font-size: 36px;">Console</h3>
<p>Type the command you wish to run (e.g. "add cash") and click the "Run" button.</p>
            <textarea id="console_input" style="width: 55%; font-family:monospace; padding: 2px; height: 60px; font-size: 24px; color: lime; background-color: black;"></textarea>
            <br>
            <button onclick="gm.do_run();" style="font-size: 25px; font-family: monospace;">Run &rarr;</button>
<div style="margin-right: 30px;">
<h3>Commands:</h3>
<ul><li>add cash</li>
<li>add bitcoin</li><ul>
</div>    
</div>
</div>

<div class="make_up"></div>
<div class="sell_up"></div>


<script id="tpl_achievement" type="text/template">
<div id="{{id}}" class="s_div">
    <h3 id="{{id}}_lbl">
        {{ac.label}}
    </h3>
    <p class="small">
        {{ac.description}}
    </p>
</div>
</script>

<script id="tpl_bank" type="text/template">
<div id="{{id}}" class="s_div">
    <h3 id="{{id}}_lbl">{{bn.label}}
        <label id="{{id}}_amt" class="grey pull_right">{{bn.amount}}</label>
    </h3>
    <p class="small">
        <b>$<span id="{{id}}_cst">{{bn.cost}}</span></b> &mdash;
        <em class="grey">{{bn.description}}</em>
    </p>
    <p class="pull_right small">
        Secures <b>$<span id="{{id}}_rps">{{bn.rps}}</span></b> per second
    </p>
    <button id="{{id}}_btn" onclick="gm.buy_bank('{{id}}')">Buy</button>
    <button id="{{id}}_sell_btn" onclick="gm.sell_bank('{{id}}')">Sell</button>
    <p class="clear"></p>
</div>
</script>

<script id="tpl_clicker" type="text/template">
<div id="{{id}}" class="s_div">
    <h3 id="{{id}}_lbl">{{cl.label}} 
        <label id="{{id}}_amt" class="grey pull_right">{{cl.amount}}</label>
    </h3>
    <p class="small">
        <b>$<span id="{{id}}_cst">{{cl.cost}}</span></b> &mdash;
        <em class="grey">{{cl.description}}</em>
		<br>
		<br>
		<div style="display:block;"><img height=100px src="{{cl.img}}"/></div>
    </p>
    <p class="pull_right small">
        Mines <b><span id="{{id}}_rps">{{cl.rps}}</span></b> per second; 
        <b><span id="{{id}}_rsk">{{cl.risk}}</span>%</b> risk of hardware failure
    </p>
    <button id="{{id}}_btn" onclick="gm.buy_clicker('{{id}}')">Purchase</button>
    <button id="{{id}}_sell_btn" onclick="gm.sell_clicker('{{id}}')">Sell</button>
</div>
</script>

<script id="tpl_seller" type="text/template">
<div id="{{id}}" class="s_div">
    <h3 id="{{id}}_lbl">{{sl.label}} 
        <label id="{{id}}_amt" class="grey pull_right">{{sl.amount}}</label>
    </h3>
    <p class="small">
        <b>$<span id="{{id}}_cst">{{sl.cost}}</span></b> &mdash; 
        <em class="grey">{{sl.description}}</em>
		<br>
		<br>
		<div style="display:block;"><img height=100px src="{{sl.img}}"/></div>
    </p>
    <p class="pull_right small">
        Exchanges <b><span id="{{id}}_rps">{{sl.rps}}</span></b> per second;
        <b><span id="{{id}}_rsk">{{sl.risk}}</span>%</b> risk of loss of bitcoins
    </p>
    <button id="{{id}}_btn" onclick="gm.buy_seller('{{id}}')">Purchase</button>
    <button id="{{id}}_sell_btn" onclick="gm.sell_seller('{{id}}')">Sell</button>
</div>
</script>

<script id="tpl_upgrade" type="text/template">
<div id="{{id}}" class="s_div">
    <h3 id="{{id}}_lbl">
        {{upg.label}} 
        <span id="{{id}}_cst" class="grey pull_right">${{upg.cost}}</span>
    </h3>
    <p class="small grey"><em>{{upg.description}}</em></p>
    <button id="{{id}}_btn" onclick="gm.buy_upgrade('{{id}}')">Purchase</button>
</div>
</script>




    <div class="clear"></div>
<br>
<br>
<br>
<div id="footer">
    <div style = "color:black;">
        <p style="color:black;">
		    &copy;2014 smeagol, version <b><span id="version">0.2</span></b>
            Forked from [<a href="https://github.com/webgovernor/clickingbad/" style="color:blue;">Clicking Bad, v0.8.3 by nullism.com</a>]
            created on <b>Mon, Jun 23, 2014 @ 2:49 PM Eastern Standard Time</b> &mdash; beta version. 
        </p>
    </div>
</div>
<br>
<div id="share_footer">
    <!--// Twitter Follow //-->
    <div class="pull_left" style="margin-left: 10px;">
        <a href="https://bitcointalk.org/index.php?action=profile;u=111121" 
            id="btctalk_btn" style = "border: 2px solid black;">Find smeagol on Bitcointalk</a>
    </div>
    <div class="pull_left" style="margin-left: 10px;" onclick="devcoin()">
        <p id="btctalk_btn" style = "background-color:green;border:2px solid black; font-size: 17px;">Donate Devcoin (click here)</p>
    </div>
    <div class="pull_left" style="margin-left: 10px;" onclick="bitcoin()">
        <p id="btctalk_btn" style = "background-color:orange;border:2px solid black;">Donate Bitcoin (click here)</p>
    </div>
    <div class="clear"></div>
<script>
function bitcoin()
{
alert("Bitcoin Donation Address: 1SMEAGqpm9JSpJ6JZaM5dEBptPTNahpFa - Thank you!");
}
function devcoin()
{
alert("Devcoin Donation Address: 1SMEAGqpm9JSpJ6JZaM5dEBptPTNahpFa  - Thank you!");
}
</script>
</div> <!--// End Share footer -->
<br>
<script>
 return {
            'cash':pd.cash.amount,
            'widgets':pd.widgets.amount,
            'safe_cash':pd.cash.safe,
            'make_amount':pd.make_amount,
            'sell_amount':pd.sell_amount,
        }
</script>
<?php
echo "test";
?>
</body>
</html>