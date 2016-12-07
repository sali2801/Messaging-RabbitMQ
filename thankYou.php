
<?php

  
 ?>
<!DOCTYPE html>
 <html dir="ltr" lang="en" class="modernizr-js modernizr-cssanimations modernizr-checked modernizr-cssgradients modernizr-rgba modernizr-filereader modernizr-svg modernizr-smil fixedsticky-withoutfixedfixed js modernizr-label-click js-ready">
 <!--<![endif]--><!-- DoSomething.org Platform v2.7.20 -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <script type="text/javascript" src="https://bam.nr-data.net/1/ee99636967?a=23661280&amp;v=998.365d633&amp;to=NAYHNxRTCEEABUxcWg1MJAASWwlcTgJKQEUCDzoEA0Y5VA4UVQ%3D%3D&amp;rst=997&amp;ref=https://www.dosomething.org/us/user/4362809/edit&amp;ap=214&amp;be=650&amp;fe=273&amp;dc=189&amp;perf=%7B%22timing%22:%7B%22of%22:1481114072829,%22n%22:0,%22r%22:72,%22re%22:285,%22f%22:285,%22dn%22:285,%22dne%22:285,%22c%22:285,%22ce%22:285,%22rq%22:287,%22rp%22:593,%22rpe%22:594,%22dl%22:594,%22di%22:839,%22ds%22:839,%22de%22:918,%22dc%22:923,%22l%22:923,%22le%22:924%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;at=GEEEQVxJG08%3D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-998.min.js"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="ZODXUyKCRRJN9ksGeD1IDeJjj06mWVN9frGOiaDwAcY">
  <meta name="drupal-user-id" content="4362809">
  <title>THANK YOU</title>
  <link type="text/css" rel="stylesheet" href="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/dist/app.css?ohih8l" media="all">
  <!--[if lte IE 8]>
      <script type="text/javascript" src="/profiles/dosomething/themes/dosomething/paraneue_dosomething/node_modules/html5shiv/dist/html5shiv.min.js"></script>
      <script type="text/javascript" src="/profiles/dosomething/themes/dosomething/paraneue_dosomething/node_modules/es5-shim/es5-shim.min.js"></script>
      <script type="text/javascript" src="/profiles/dosomething/themes/dosomething/paraneue_dosomething/node_modules/es5-shim/es5-sham.min.js"></script>
      <script type="text/javascript" src="/profiles/dosomething/themes/dosomething/paraneue_dosomething/node_modules/respond.js/dest/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="/profiles/dosomething/themes/dosomething/paraneue_dosomething/node_modules/@dosomething/forge/assets/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="/profiles/dosomething/themes/dosomething/paraneue_dosomething/node_modules/@dosomething/forge/assets/images/apple-touch-icon-precomposed.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="robots" content="NOODP">
  <meta name="p:domain_verify" content="14e81c42e6c4ff0ca4ec7be173a4799f">
  <link href="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/logo.png" rel="image_src">
  <link href="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/logo.png" rel="kik-icon">
  <meta property="og:image" content="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/logo.png">
  <meta property="og:image:width" content="740">
  <meta property="og:image:height" content="480">
  <meta property="twitter:image" content="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/logo.png">
  <script type="text/javascript" src="/profiles/dosomething/themes/dosomething/paraneue_dosomething/dist/modernizr.js"></script>
</head>

<body class="html not-front logged-in no-sidebars page-user page-user- page-user-4362809 page-user-edit i18n-en">
  <div class="chrome">
        
<!--[if lt IE 8 ]><div class="messages error">You're using an unsupported browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to make sure everything works nicely!</div><![endif]-->


<div class="wrapper">
  
<nav class="navigation -white -floating">
  <a class="navigation__logo" href="/"><span>DoSomething.org</span></a>
  <div class="navigation__menu">
  </div>
</nav>
  
<header role="banner" class="header ">
  <div class="wrapper">
  </div>
</header>

  <main role="main" class="container -padded">
    <div class="wrapper">
      <div class="container__block">
	  <p> THANK YOU FOR REGISTERING<P>
<p> Thank you for registering to the Oriel Alumni website. You should receive a confirmation email shortly with your user name and password reminder.
Before you can be given access to the website we need to verify your registration, which can take up to 3 working days to process. A notification email will be sent to you once this has been completed.
 </p>
          </div>
      </div>
    </div>
  </main>

  

</div>
  </div>
</body></html>