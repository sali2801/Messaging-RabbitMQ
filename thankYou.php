
<?php
echo "THANK YOU FOR REGISTERING
Thank you for registering to the Oriel Alumni website. You should receive a confirmation email shortly with your user name and password reminder.
Before you can be given access to the website we need to verify your registration, which can take up to 3 working days to process. A notification email will be sent to you once this has been completed.";
  
 ?>
<!DOCTYPE html>
 <html dir="ltr" lang="en" class="modernizr-js modernizr-cssanimations modernizr-checked modernizr-cssgradients modernizr-rgba modernizr-filereader modernizr-svg modernizr-smil fixedsticky-withoutfixedfixed js modernizr-label-click js-ready"><!--<![endif]--><!-- DoSomething.org Platform v2.7.20 --><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"><script type="text/javascript" src="https://bam.nr-data.net/1/ee99636967?a=23661280&amp;v=998.365d633&amp;to=NAYHNxRTCEEABUxcWg1MJAASWwlcTgJKQEUCDzoEA0Y5VA4UVQ%3D%3D&amp;rst=997&amp;ref=https://www.dosomething.org/us/user/4362809/edit&amp;ap=214&amp;be=650&amp;fe=273&amp;dc=189&amp;perf=%7B%22timing%22:%7B%22of%22:1481114072829,%22n%22:0,%22r%22:72,%22re%22:285,%22f%22:285,%22dn%22:285,%22dne%22:285,%22c%22:285,%22ce%22:285,%22rq%22:287,%22rp%22:593,%22rpe%22:594,%22dl%22:594,%22di%22:839,%22ds%22:839,%22de%22:918,%22dc%22:923,%22l%22:923,%22le%22:924%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;at=GEEEQVxJG08%3D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-998.min.js"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="ZODXUyKCRRJN9ksGeD1IDeJjj06mWVN9frGOiaDwAcY">
  <meta name="drupal-user-id" content="4362809">

  <title>Edit Profile | DoSomething.org | Volunteer for Social Change</title>

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
  <a class="navigation__toggle js-navigation-toggle" href="#"><span>Show Menu</span></a>
  <div class="navigation__menu">
    <ul class="navigation__primary">
      <li>
        <a href="/campaigns">
          <strong class="navigation__title">Explore Campaigns</strong>
          <span class="navigation__subtitle">Any cause, anytime, anywhere.</span>
        </a>
      </li>

      <li>
        <a href="/us/about/who-we-are">
          <strong class="navigation__title">What Is DoSomething.org?</strong>
          <span class="navigation__subtitle">Young people + social change.</span>
        </a>
      </li>
    </ul>

    <ul class="navigation__secondary">
      <li>
        <form action="/us/search/apachesolr_search" method="post" id="search-block-form" accept-charset="UTF-8"><div>
<div class="form-item form-type-textfield form-item-search-block-form">
 <input type="search" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="text-field -search">
</div>
<input type="hidden" name="form_build_id" value="form-FehDhAVWXNtYqhVRhjza8nqcFy5S7dL0CNUf8BrCxaA">
<input type="hidden" name="form_token" value="ocJ5XMQr-YjJeNQE4y33P9uMCp3AgxQmUUa0uEtzhUk">
<input type="hidden" name="form_id" value="search_block_form">
</div></form>      </li>
              <li class="navigation__dropdown">
          <a href="#" class="navigation__dropdown-toggle">mimi</a>
          <ul>
            <li><a href="/us/user/4362809">My Account</a></li>
            <li><a href="/us/user/logout" class="secondary-nav-item" id="link--logout">Log Out</a></li>
          </ul>
        </li>
          </ul>
  </div>
</nav>
  
<header role="banner" class="header ">
  <div class="wrapper">
    <h1 class="header__title">Edit Profile</h1>
    
      </div>
</header>

  <main role="main" class="container -padded">
    <div class="wrapper">
      <div class="container__block">
          <div class="region region-content">
    
<form action="/us/user/4362809/edit" method="post" id="user-profile-form" accept-charset="UTF-8"><div><div id="edit-account" class="form-wrapper"><div class="form-item form-type-textfield form-item-mail">
  <label class="field-label" for="edit-mail">Email <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-mail" name="mail" value="salihaleadersoft@hotmail.com" size="60" maxlength="254" class="text-field required">
</div>
<div class="form-item form-type-password form-item-current-pass">
  <label class="field-label" for="edit-current-pass">Current Password </label>
 <input autocomplete="off" type="password" id="edit-current-pass" name="current_pass" size="25" maxlength="128" class="text-field">
</div>
 <div class="footnote">Enter your current password to change the <em class="placeholder">E-mail address</em> or <em class="placeholder">Password</em>. <a href="/us/user/password" title="Request new password via e-mail.">Request new password</a>.</div> 
<h4>Change Password</h4><div class="form-item form-type-password-confirm form-item-pass">
 <div class="form-item form-type-password form-item-pass-pass1">
  <label class="field-label" for="edit-pass-pass1">New Password </label>
 <input class="password-field text-field" type="password" id="edit-pass-pass1" name="pass[pass1]" size="25" maxlength="128">
</div>
<div class="form-item form-type-password form-item-pass-pass2">
  <label class="field-label" for="edit-pass-pass2">Confirm Password </label>
 <input class="password-confirm text-field" type="password" id="edit-pass-pass2" name="pass[pass2]" size="25" maxlength="128">
</div>

</div>
</div><input type="hidden" name="form_build_id" value="form-eBIbxp97PNSceGci6nK4siEo9e5HGjET-wCO2wAm69o">
<input type="hidden" name="form_token" value="29HSvi_xYOFbw9AeaFrJ_Wrm1dQNArgL-GpYm3iITrQ">
<input type="hidden" name="form_id" value="user_profile_form">
<div class="field-type-text field-name-field-first-name field-widget-text-textfield form-wrapper" id="edit-field-first-name"><div id="field-first-name-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-first-name-und-0-value">
  <label class="field-label" for="edit-field-first-name-und-0-value">First Name <span class="form-required" title="This field is required.">*</span></label>
 <input class="text-full text-field required" type="text" id="edit-field-first-name-und-0-value" name="field_first_name[und][0][value]" value="mimi" size="60" maxlength="255">
</div>
</div></div><div class="field-type-text field-name-field-last-name field-widget-text-textfield form-wrapper" id="edit-field-last-name"><div id="field-last-name-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-last-name-und-0-value">
  <label class="field-label" for="edit-field-last-name-und-0-value">Last Name </label>
 <input class="text-full text-field" type="text" id="edit-field-last-name-und-0-value" name="field_last_name[und][0][value]" value="" size="60" maxlength="255">
</div>
</div></div><div class="field-type-datetime field-name-field-birthdate field-widget-date-text form-wrapper" id="edit-field-birthdate"><div id="field-birthdate-add-more-wrapper"><fieldset class="form-wrapper"><legend><span class="fieldset-legend">  <span class="form-required" title="This field is required.">*</span></span></legend><div class="fieldset-wrapper"><div class="date-no-float container-inline-date"><div class="form-item form-type-date-text form-item-field-birthdate-und-0-value">
 <div id="edit-field-birthdate-und-0-value" class="date-padding clearfix"><div class="form-item form-type-textfield form-item-field-birthdate-und-0-value-date">
  <label class="field-label" for="edit-field-birthdate-und-0-value-date"><div class="validation"><div class="validation__label">Birthday </div><div class="validation__message"></div></div></label>
 <div class="date-date"><input class="js-validate text-field" placeholder="MM/DD/YYYY" data-validate="birthday" data-validate-required="" type="text" id="edit-field-birthdate-und-0-value-date" name="field_birthdate[und][0][value][date]" value="10/10/1991" size="60" maxlength="128"></div>
</div>
</div>
</div>
</div></div></fieldset>
</div></div><div class="field-type-text field-name-field-mobile field-widget-text-textfield form-wrapper" id="edit-field-mobile"><div id="field-mobile-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-mobile-und-0-value">
  <label class="field-label" for="edit-field-mobile-und-0-value">Cell # </label>
 <input class="text-full text-field" type="text" id="edit-field-mobile-und-0-value" name="field_mobile[und][0][value]" value="5513213298" size="60" maxlength="255">
</div>
</div></div><div class="field-type-addressfield field-name-field-address field-widget-addressfield-standard form-wrapper" id="edit-field-address"><div id="field-address-add-more-wrapper"><div id="addressfield-wrapper"><fieldset id="edit-field-address-und-0-address" class="form-wrapper"><div class="fieldset-wrapper"><div class="street-block"><div class="form-item form-type-textfield form-item-field-address-und-0-thoroughfare">
  <label class="field-label" for="edit-field-address-und-0-thoroughfare"><div class="validation"><div class="validation__label">Address 1 </div><div class="validation__message"></div></div></label>
 <input class="thoroughfare text-field" x-autocompletetype="address-line1" autocomplete="address-line1" data-validate="address1" type="text" id="edit-field-address-und-0-thoroughfare" name="field_address[und][0][thoroughfare]" value="" size="30" maxlength="128">
</div>
<div class="form-item form-type-textfield form-item-field-address-und-0-premise">
  <label class="field-label" for="edit-field-address-und-0-premise"><div class="validation"><div class="validation__label">Address 2 </div><div class="validation__message"></div></div></label>
 <input class="premise text-field" x-autocompletetype="address-line2" autocomplete="address-line2" data-validate="address2" type="text" id="edit-field-address-und-0-premise" name="field_address[und][0][premise]" value="" size="30" maxlength="128">
</div></div><div class="addressfield-container-inline locality-block country-US"><div class="form-item form-type-textfield form-item-field-address-und-0-locality">
  <label class="field-label" for="edit-field-address-und-0-locality"><div class="validation"><div class="validation__label">City </div><div class="validation__message"></div></div></label>
 <input class="locality text-field" x-autocompletetype="locality" autocomplete="locality" data-validate="city" type="text" id="edit-field-address-und-0-locality" name="field_address[und][0][locality]" value="" size="30" maxlength="128">
</div>
 <div class="form-item form-type-select form-item-field-address-und-0-administrative-area">
  <label class="field-label" for="edit-field-address-und-0-administrative-area"><div class="validation"><div class="validation__label">State </div><div class="validation__message"></div></div></label>
 <div class="select"><select class="state" x-autocompletetype="region" autocomplete="region" data-validate="state" id="edit-field-address-und-0-administrative-area" name="field_address[und][0][administrative_area]"><option value="" selected="selected">--</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value=" ">--</option><option value="PR">Puerto Rico</option></select></div>
</div>
 <div class="form-item form-type-textfield form-item-field-address-und-0-postal-code">
  <label class="field-label" for="edit-field-address-und-0-postal-code"><div class="validation"><div class="validation__label">ZIP Code </div><div class="validation__message"></div></div></label>
 <input class="postal-code text-field" x-autocompletetype="postal-code" autocomplete="postal-code" data-validate="zipcode" type="text" id="edit-field-address-und-0-postal-code" name="field_address[und][0][postal_code]" value="" size="10" maxlength="128">
</div></div></div></fieldset>
</div></div></div><div class="form-actions form-wrapper" id="edit-actions--2"><input class="button form-submit" type="submit" id="edit-submit" name="op" value="Save"></div></div></form>  </div>
      </div>
    </div>
  </main>

  
<footer class="footer">
  <div class="footer__columns">
    <div class="footer__column -social">
      <ul>
      <li>
      <a href="https://www.facebook.com/dosomething" class="social-icon -facebook" title="dosomething on Facebook"><span>dosomething on Facebook</span></a>    </li>
      <li>
      <a href="https://twitter.com/dosomething" class="social-icon -twitter" title="@dosomething on Twitter"><span>@dosomething on Twitter</span></a>    </li>
      <li>
      <a href="https://www.snapchat.com/add/dosomething" class="social-icon -snapchat" title="dosomething on Snapchat"><span>dosomething on Snapchat</span></a>    </li>
      <li>
      <a href="http://weheartit.com/dosomething" class="social-icon -weheartit" title="dosomething on We Heart It"><span>dosomething on We Heart It</span></a>    </li>
      <li>
      <a href="http://instagram.com/dosomething" class="social-icon -instagram" title="@dosomething on Instagram"><span>@dosomething on Instagram</span></a>    </li>
      <li>
      <a href="http://www.youtube.com/user/DoSomething1" class="social-icon -youtube" title="dosomething1 on YouTube"><span>dosomething1 on YouTube</span></a>    </li>
  </ul>

    </div>

          <div class="footer__column -links">
        <h4 class="js-toggle-collapsed is-collapsed is-toggleable">Who We Are</h4>
                  <ul>
                          <li><a href="/us/about/who-we-are">What is DoSomething.org?</a></li>
                          <li><a href="/us/about/our-people">Our Team</a></li>
                          <li><a href="/us/about/sexy-financials">Sexy Financials</a></li>
                          <li><a href="http://xyzfactor.org/">XYZ Factor</a></li>
                          <li><a href="https://app.dosomething.org/">Mobile App</a></li>
                          <li><a href="/us/about/our-press">Press</a></li>
                          <li><a href="https://blog.dosomething.org/">Blog</a></li>
                      </ul>
              </div>
          <div class="footer__column -links">
        <h4 class="js-toggle-collapsed is-collapsed is-toggleable">Our Friends</h4>
                  <ul>
                          <li><a href="http://www.tmiagency.org">TMI Agency</a></li>
                          <li><a href="/us/about/our-partners">Partners</a></li>
                          <li><a href="/us/about/old-people">Old People</a></li>
                          <li><a href="/us/about/hotline-list">Crisis Hotlines</a></li>
                      </ul>
              </div>
          <div class="footer__column -links">
        <h4 class="js-toggle-collapsed is-collapsed is-toggleable">Get Involved</h4>
                  <ul>
                          <li><a href="/us/about/easy-scholarships">Scholarships</a></li>
                          <li><a href="/us/about/join-our-team">Jobs</a></li>
                          <li><a href="/us/about/internships">Internships</a></li>
                          <li><a href="/us/about/donate">Donate</a></li>
                          <li><a href="https://help.dosomething.org/hc/en-us">Help Center</a></li>
                      </ul>
              </div>
      </div>

  <div class="footer__subfooter">
    <ul>
      <li><a href="/us/about/terms-service">Terms of Service</a></li>
      <li><a href="/us/about/privacy-policy">Privacy Policy</a></li>
    </ul>
  </div>
</footer>
</div>
  </div>

  <script type="text/javascript" src="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/dist/lib.js?ohih8l"></script>
<script type="text/javascript" src="https://www.dosomething.org/misc/drupal.js?ohih8l"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"us\/","ajaxPageState":{"theme":"paraneue_dosomething","theme_token":"M78uoW4umyzPM-zBSzHE9I1-PEgdGdvc114eRVn1wiI","js":[],"css":{"profiles\/dosomething\/themes\/dosomething\/paraneue_dosomething\/dist\/app.css":1}},"dosomethingSearch":{"solrURL":"\/\/search.dosomething.org\/solr\/","collection":"collection1","language":"en"},"urlIsAjaxTrusted":{"\/us\/search\/apachesolr_search":true,"\/us\/user\/4362809\/edit":true},"dosomethingUser":{"schoolFinderAPIEndpoint":"https:\/\/lofischools.herokuapp.com\/search"},"dsValidation":{"dateFormat":"MM\/DD\/YYYY"},"password":{"strengthTitle":"Password strength:","hasWeaknesses":"To make your password stronger:","tooShort":"Make it at least 6 characters","addLowerCase":"Add lowercase letters","addUpperCase":"Add uppercase letters","addNumbers":"Add numbers","addPunctuation":"Add punctuation","sameAsUsername":"Make it different from your username","confirmSuccess":"yes","confirmFailure":"no","weak":"Weak","fair":"Fair","good":"Good","strong":"Strong","confirmTitle":"Passwords match:","username":"4362809"},"dosomethingSetting":{"globeUrl":"https:\/\/dsrealtimefeed.herokuapp.com\/services\/drupal","countryCode":"US"}});
//--><!]]>
</script>
<script type="text/javascript" src="https://www.dosomething.org/profiles/dosomething/themes/dosomething/paraneue_dosomething/dist/app.js?ohih8l"></script>
<script type="text/javascript" src="//cdn.optimizely.com/js/2090121062.js"></script>
  
  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"ee99636967","applicationID":"23661280","transactionName":"NAYHNxRTCEEABUxcWg1MJAASWwlcTgJKQEUCDzoEA0Y5VA4UVQ==","queueTime":0,"applicationTime":214,"atts":"GEEEQVxJG08=","errorBeacon":"bam.nr-data.net","agent":""}</script>


<div class="modal-container"></div><script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{(function() { for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i.toString(); } else { d.textContent=i.toString(); } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }})()}catch(e){}</script></body></html>