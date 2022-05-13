<!DOCTYPE html>
<!-- saved from url=(0056)https://www.javatpoint.com/post/php-date-create-function -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>PHP date_create() function - Javatpoint
</title>
<link rel="SHORTCUT ICON" href="https://www.javatpoint.com/images/logo/icon.png">
<link rel="stylesheet" type="text/css" href="./dateAdd(df)_files/link.css">
<meta name="description" content="PHP date_create() Function with Examples on php, datetime function, checkdate(), date_add(), date_create(), dateset(), dateformat(), modify(), time(), idate(), etc. ">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="canonical" href="https://www.javatpoint.com/post/php-date-create-function">
<meta property="og:title" content="PHP date_create() function - Javatpoint">
<meta property="og:description" content="PHP date_create() Function with Examples on php, datetime function, checkdate(), date_add(), date_create(), dateset(), dateformat(), modify(), time(), idate(), etc. ">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta name="twitter:title" property="og:title" content="PHP date_create() function - Javatpoint">
<meta name="twitter:description" property="og:description" content="PHP date_create() Function with Examples on php, datetime function, checkdate(), date_add(), date_create(), dateset(), dateformat(), modify(), time(), idate(), etc. ">
<meta property="og:url" content="https://www.javatpoint.com/post/php-date-create-function">
<meta property="og:site_name" content="www.javatpoint.com">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@pagejavatpoint">
<meta name="twitter:domain" content="www.javatpoint.com">
<meta name="twitter:creator" content="@pagejavatpoint">
<script async="" src="./dateAdd(df)_files/async-ads.js.download"></script><script async="" src="./dateAdd(df)_files/async-ads.js.download"></script><script src="./dateAdd(df)_files/f.txt"></script><script src="./dateAdd(df)_files/f(1).txt" id="google_shimpl"></script><script type="text/javascript" async="" src="./dateAdd(df)_files/ga.js.download"></script><script type="text/javascript" async="" src="./dateAdd(df)_files/f(2).txt"></script><script type="text/javascript" async="" src="./dateAdd(df)_files/f(2).txt"></script><script data-cfasync="false" type="text/javascript">(function(w, d) { var s = d.createElement('script'); s.src = '//delivery.adrecover.com/37784/adRecover.js?ts=1543562646174'; s.type = 'text/javascript'; s.async = true; (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s); })(window, document);</script><script src="./dateAdd(df)_files/adRecover.js.download" type="text/javascript" async=""></script>
<script data-cfasync="false" type="text/javascript">(function(w, d) { var s = d.createElement('script'); s.src = '//cdn.adpushup.com/37780/adpushup.js'; s.type = 'text/javascript'; s.async = true; (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s); })(window, document);</script><script src="./dateAdd(df)_files/adpushup.js.download" type="text/javascript" async=""></script>
<meta http-equiv="origin-trial" content="AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><link rel="preload" href="./dateAdd(df)_files/f(3).txt" as="script"><script type="text/javascript" src="./dateAdd(df)_files/f(3).txt"></script><link rel="preload" href="./dateAdd(df)_files/f(4).txt" as="script"><script type="text/javascript" src="./dateAdd(df)_files/f(4).txt"></script><script src="./dateAdd(df)_files/cse_element__en.js.download" type="text/javascript"></script><link type="text/css" rel="stylesheet" href="./dateAdd(df)_files/default+en.css"><link type="text/css" rel="stylesheet" href="./dateAdd(df)_files/espresso.css"><script src="./dateAdd(df)_files/cse_element__en.js.download" type="text/javascript"></script><link type="text/css" rel="stylesheet" href="./dateAdd(df)_files/default+en.css"><link type="text/css" rel="stylesheet" href="./dateAdd(df)_files/espresso.css"><style type="text/css">.gsc-control-cse{font-family:georgia, arial, serif}.gsc-control-cse .gsc-table-result{font-family:georgia, arial, serif}.gsc-refinementsGradient{background:linear-gradient(to left,rgba(255,255,255,1),rgba(255,255,255,0))}.gsc-control-cse{border-color:#FFFFFF;background-color:#FFFFFF}input.gsc-input,.gsc-input-box,.gsc-input-box-hover,.gsc-input-box-focus{border-color:#D3BCA1}.gsc-search-button-v2,.gsc-search-button-v2:hover,.gsc-search-button-v2:focus{border-color:#300D00;background-color:#461200;background-image:none;filter:none}.gsc-search-button-v2 svg{fill:#FFFFFF}.gsc-tabHeader.gsc-tabhActive,.gsc-refinementHeader.gsc-refinementhActive{color:#461200;border-color:#461200;background-color:#FFFFFF}.gsc-tabHeader.gsc-tabhInactive,.gsc-refinementHeader.gsc-refinementhInactive{color:#950000;border-color:#950000;background-color:#FFFFFF}.gsc-webResult.gsc-result,.gsc-results .gsc-imageResult{border-color:#FFFFFF;background-color:#FFFFFF}.gsc-webResult.gsc-result:hover{border-color:#FFFFFF;background-color:#FFFFFF}.gs-webResult.gs-result a.gs-title:link,.gs-webResult.gs-result a.gs-title:link b,.gs-imageResult a.gs-title:link,.gs-imageResult a.gs-title:link b{color:#950000}.gs-webResult.gs-result a.gs-title:visited,.gs-webResult.gs-result a.gs-title:visited b,.gs-imageResult a.gs-title:visited,.gs-imageResult a.gs-title:visited b{color:#950000}.gs-webResult.gs-result a.gs-title:hover,.gs-webResult.gs-result a.gs-title:hover b,.gs-imageResult a.gs-title:hover,.gs-imageResult a.gs-title:hover b{color:#950000}.gs-webResult.gs-result a.gs-title:active,.gs-webResult.gs-result a.gs-title:active b,.gs-imageResult a.gs-title:active,.gs-imageResult a.gs-title:active b{color:#950000}.gsc-cursor-page{color:#950000}a.gsc-trailing-more-results:link{color:#950000}.gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,.gs-fileFormatType{color:#333333}.gs-webResult div.gs-visibleUrl{color:#A25B08}.gs-webResult div.gs-visibleUrl-short{color:#A25B08}.gsc-cursor-box{border-color:#FFFFFF}.gsc-results .gsc-cursor-box .gsc-cursor-page{border-color:#950000;background-color:#FFFFFF;color:#950000}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{border-color:#461200;background-color:#FFFFFF;color:#461200}.gsc-webResult.gsc-result.gsc-promotion{border-color:#FEFEDC;background-color:#FFFFCC}.gsc-completion-title{color:#950000}.gsc-completion-snippet{color:#333333}.gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link{color:#0000CC}.gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited{color:#0000CC}.gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover{color:#0000CC}.gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active{color:#0000CC}.gs-promotion .gs-snippet,.gs-promotion .gs-title .gs-promotion-title-right,.gs-promotion .gs-title .gs-promotion-title-right *{color:#333333}.gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short{color:#A25B08}.gcsc-find-more-on-google{color:#950000}.gcsc-find-more-on-google-magnifier{fill:#950000}</style><style type="text/css">.gscb_a{display:inline-block;font:27px/13px arial,sans-serif}.gsst_a .gscb_a{color:#a1b9ed;cursor:pointer}.gsst_a:hover .gscb_a,.gsst_a:focus .gscb_a{color:#36c}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;position:relative;user-select:none;-webkit-user-select:none;white-space:nowrap}.gsst_e{vertical-align:middle;opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}.gsq_a{padding:0}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em;-webkit-appearance:button}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gssb_a{padding:0 9px}.gsib_a{padding:5px 9px 4px 9px}.gscb_a{line-height:27px}.gssb_e{border:0}.gssb_l{margin:5px 0}input.gsc-input::-webkit-input-placeholder{font-size:14px}input.gsc-input:-moz-placeholder{font-size:14px}input.gsc-input::-moz-placeholder{font-size:14px}input.gsc-input:-ms-input-placeholder{font-size:14px}input.gsc-input:focus::-webkit-input-placeholder{color:transparent}input.gsc-input:focus:-moz-placeholder{color:transparent}input.gsc-input:focus::-moz-placeholder{color:transparent}input.gsc-input:focus:-ms-input-placeholder{color:transparent}.gssb_c .gsc-completion-container{position:static}.gssb_c{z-index:5000}.gsc-completion-container table{background:transparent;font-size:inherit;font-family:inherit}.gssb_c > tbody > tr,.gssb_c > tbody > tr > td,.gssb_d,.gssb_d > tbody > tr,.gssb_d > tbody > tr > td,.gssb_e,.gssb_e > tbody > tr,.gssb_e > tbody > tr > td{padding:0;margin:0;border:0}.gssb_a table,.gssb_a table tr,.gssb_a table tr td{padding:0;margin:0;border:0}</style><style type="text/css">.gscb_a{display:inline-block;font:27px/13px arial,sans-serif}.gsst_a .gscb_a{color:#a1b9ed;cursor:pointer}.gsst_a:hover .gscb_a,.gsst_a:focus .gscb_a{color:#36c}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;position:relative;user-select:none;-webkit-user-select:none;white-space:nowrap}.gsst_e{vertical-align:middle;opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}.gsq_a{padding:0}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em;-webkit-appearance:button}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gssb_a{padding:0 9px}.gsib_a{padding:5px 9px 4px 9px}.gscb_a{line-height:27px}.gssb_e{border:0}.gssb_l{margin:5px 0}input.gsc-input::-webkit-input-placeholder{font-size:14px}input.gsc-input:-moz-placeholder{font-size:14px}input.gsc-input::-moz-placeholder{font-size:14px}input.gsc-input:-ms-input-placeholder{font-size:14px}input.gsc-input:focus::-webkit-input-placeholder{color:transparent}input.gsc-input:focus:-moz-placeholder{color:transparent}input.gsc-input:focus::-moz-placeholder{color:transparent}input.gsc-input:focus:-ms-input-placeholder{color:transparent}.gssb_c .gsc-completion-container{position:static}.gssb_c{z-index:5000}.gsc-completion-container table{background:transparent;font-size:inherit;font-family:inherit}.gssb_c > tbody > tr,.gssb_c > tbody > tr > td,.gssb_d,.gssb_d > tbody > tr,.gssb_d > tbody > tr > td,.gssb_e,.gssb_e > tbody > tr,.gssb_e > tbody > tr > td{padding:0;margin:0;border:0}.gssb_a table,.gssb_a table tr,.gssb_a table tr td{padding:0;margin:0;border:0}</style><style type="text/css">.gsc-control-cse{font-family:georgia, arial, serif}.gsc-control-cse .gsc-table-result{font-family:georgia, arial, serif}.gsc-refinementsGradient{background:linear-gradient(to left,rgba(255,255,255,1),rgba(255,255,255,0))}.gsc-control-cse{border-color:#FFFFFF;background-color:#FFFFFF}input.gsc-input,.gsc-input-box,.gsc-input-box-hover,.gsc-input-box-focus{border-color:#D3BCA1}.gsc-search-button-v2,.gsc-search-button-v2:hover,.gsc-search-button-v2:focus{border-color:#300D00;background-color:#461200;background-image:none;filter:none}.gsc-search-button-v2 svg{fill:#FFFFFF}.gsc-tabHeader.gsc-tabhActive,.gsc-refinementHeader.gsc-refinementhActive{color:#461200;border-color:#461200;background-color:#FFFFFF}.gsc-tabHeader.gsc-tabhInactive,.gsc-refinementHeader.gsc-refinementhInactive{color:#950000;border-color:#950000;background-color:#FFFFFF}.gsc-webResult.gsc-result,.gsc-results .gsc-imageResult{border-color:#FFFFFF;background-color:#FFFFFF}.gsc-webResult.gsc-result:hover{border-color:#FFFFFF;background-color:#FFFFFF}.gs-webResult.gs-result a.gs-title:link,.gs-webResult.gs-result a.gs-title:link b,.gs-imageResult a.gs-title:link,.gs-imageResult a.gs-title:link b{color:#950000}.gs-webResult.gs-result a.gs-title:visited,.gs-webResult.gs-result a.gs-title:visited b,.gs-imageResult a.gs-title:visited,.gs-imageResult a.gs-title:visited b{color:#950000}.gs-webResult.gs-result a.gs-title:hover,.gs-webResult.gs-result a.gs-title:hover b,.gs-imageResult a.gs-title:hover,.gs-imageResult a.gs-title:hover b{color:#950000}.gs-webResult.gs-result a.gs-title:active,.gs-webResult.gs-result a.gs-title:active b,.gs-imageResult a.gs-title:active,.gs-imageResult a.gs-title:active b{color:#950000}.gsc-cursor-page{color:#950000}a.gsc-trailing-more-results:link{color:#950000}.gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,.gs-fileFormatType{color:#333333}.gs-webResult div.gs-visibleUrl{color:#A25B08}.gs-webResult div.gs-visibleUrl-short{color:#A25B08}.gsc-cursor-box{border-color:#FFFFFF}.gsc-results .gsc-cursor-box .gsc-cursor-page{border-color:#950000;background-color:#FFFFFF;color:#950000}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{border-color:#461200;background-color:#FFFFFF;color:#461200}.gsc-webResult.gsc-result.gsc-promotion{border-color:#FEFEDC;background-color:#FFFFCC}.gsc-completion-title{color:#950000}.gsc-completion-snippet{color:#333333}.gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link{color:#0000CC}.gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited{color:#0000CC}.gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover{color:#0000CC}.gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active{color:#0000CC}.gs-promotion .gs-snippet,.gs-promotion .gs-title .gs-promotion-title-right,.gs-promotion .gs-title .gs-promotion-title-right *{color:#333333}.gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short{color:#A25B08}.gcsc-find-more-on-google{color:#950000}.gcsc-find-more-on-google-magnifier{fill:#950000}</style></head>
<body onload="highlightlink()">

<div id="div-gpt-ad-1512468834310-0" style="height:1px; width:1px;">
<script> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1512468834310-0'); }); 
</script>
</div> <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;">⇧</button>
<div id="page" style="margin:-8px;background-color:#f5f5f4;">
<div id="container">
<div class="header"> <table style="width:100%;margin-bottom:5px">
<tbody><tr>
<td>
<div style="clear:both;float:left;width:230px;margin-top:15px;margin-left:20px">
<a href="https://www.javatpoint.com/"><img src="./dateAdd(df)_files/jtp_logo.png" alt="Javatpoint Logo"></a>
</div>
<div style="float:left;width:60%;">
<script>
  (function() {
    var cx = '005383125436438536544:y1edweedxwi';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<div id="___gcse_0"><div class="gsc-control-cse gsc-control-cse-en"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table cellspacing="0" cellpadding="0" id="gs_id50" class="gstl_50 gsc-input" style="width: 100%; padding: 0px;"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id1" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none;"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" title="Clear search box" role="button" style="display: none;"><span class="gscb_a" id="gs_cb50" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-nooverlay"><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div aria-label="refinement" role="tab" class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Custom Search</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-refinementsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td><td class="gsc-orderby-container"><div class="gsc-orderby-invisible"><div class="gsc-orderby-label gsc-inline-block">Sort by:</div><div class="gsc-option-menu-container gsc-inline-block"><div class="gsc-selected-option-container gsc-inline-block"><div class="gsc-selected-option">Relevance</div><div class="gsc-option-selector"></div></div><div class="gsc-option-menu-invisible"><div class="gsc-option-menu-item gsc-option-menu-item-highlighted"><div class="gsc-option">Relevance</div></div><div class="gsc-option-menu-item"><div class="gsc-option">Date</div></div></div></div></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div></div></div></div>
</div>
</td>
</tr>

</tbody></table>
</div>
<div class="headermobile">
<div style="margin-top:10px;padding:0px;text-align:left;">
<span style="float:left">
<input type="image" src="./dateAdd(df)_files/menuhome64.png" alt="Go To Top" onclick="showmenu()">
</span>
<span style="float:left"><a href="https://www.javatpoint.com/"><img src="./dateAdd(df)_files/jtp_logo.png" alt="Javatpoint Logo"></a>
</span>
</div>
<div style="margin:0px;padding:0px;clear:both">
<script>
  (function() {
    var cx = '005383125436438536544:y1edweedxwi';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<div id="___gcse_1"><div class="gsc-control-cse gsc-control-cse-en"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id2"><table cellspacing="0" cellpadding="0" id="gs_id51" class="gstl_51 gsc-input" style="width: 100%; padding: 0px;"><tbody><tr><td id="gs_tti51" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id2" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none;"></td><td class="gsib_b"><div class="gsst_b" id="gs_st51" dir="ltr"><a class="gsst_a" href="javascript:void(0)" title="Clear search box" role="button" style="display: none;"><span class="gscb_a" id="gs_cb51" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-nooverlay"><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div aria-label="refinement" role="tab" class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Custom Search</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-refinementsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td><td class="gsc-orderby-container"><div class="gsc-orderby-invisible"><div class="gsc-orderby-label gsc-inline-block">Sort by:</div><div class="gsc-option-menu-container gsc-inline-block"><div class="gsc-selected-option-container gsc-inline-block"><div class="gsc-selected-option">Relevance</div><div class="gsc-option-selector"></div></div><div class="gsc-option-menu-invisible"><div class="gsc-option-menu-item gsc-option-menu-item-highlighted"><div class="gsc-option">Relevance</div></div><div class="gsc-option-menu-item"><div class="gsc-option">Date</div></div></div></div></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div></div></div></div>
</div>
</div>
<div id="link" style="clear:both">
<div class="ddsmoothmenu"><ul><li><a href="https://www.javatpoint.com/">Home</a></li><li><a href="https://www.javatpoint.com/java-tutorial">Java</a></li><li><a href="https://www.javatpoint.com/c-programming-language-tutorial">C</a></li><li><a href="https://www.javatpoint.com/cpp-tutorial">C++</a></li><li><a href="https://www.javatpoint.com/c-sharp-tutorial">C#</a></li><li><a href="https://www.javatpoint.com/sql-tutorial">SQL</a></li><li><a href="https://www.javatpoint.com/android-tutorial">Android</a></li><li><a href="https://www.javatpoint.com/php-tutorial">PHP</a></li><li><a href="https://www.javatpoint.com/html-tutorial">HTML</a></li><li><a href="https://www.javatpoint.com/css-tutorial">CSS</a></li><li><a href="https://www.javatpoint.com/xml-tutorial">XML</a></li><li><a href="https://www.javatpoint.com/javascript-tutorial">JavaScript</a></li><li><a href="https://www.javatpoint.com/ajax-tutorial">Ajax</a></li><li><a href="https://www.javatpoint.com/python-tutorial">Python</a></li><li><a href="https://www.javatpoint.com/interview-questions-and-answers">Interview Q</a></li><li><a href="https://www.javatpoint.com/training">Training</a></li></ul><br style="clear: left"></div>
</div>
<div class="mobilemenu" style="clear:both">

<ins class="adPushupAds" data-adpcontrol="hqdgs" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBDbV8zMDB4MjUwX01vYl8xNC85IC0tPgo8aW5zIGNsYXNzPSJhZHNieWdvb2dsZSIKICAgICBzdHlsZT0iZGlzcGxheTppbmxpbmUtYmxvY2s7d2lkdGg6MzAwcHg7aGVpZ2h0OjI1MHB4IgogICAgIGRhdGEtYWQtY2xpZW50PSJjYS1wdWItNDY5OTg1ODU0OTAyMzM4MiIKICAgICBkYXRhLWFkLXNsb3Q9IjcwMTQyNzI1MTkiPjwvaW5zPgo8c2NyaXB0PgooYWRzYnlnb29nbGUgPSB3aW5kb3cuYWRzYnlnb29nbGUgfHwgW10pLnB1c2goe30pOwo8L3NjcmlwdD4=" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
</div>
<div id="menu"> <div class="leftmenu2">
<h2 class="spanh2"><span class="spanh2">PHP date()/time()</span></h2>
</div>
<div class="leftmenu">
<a href="https://www.javatpoint.com/post/php-date-time-function">date()/time() Function</a>
<a href="https://www.javatpoint.com/post/php-date-function">date() Function</a>
<a href="https://www.javatpoint.com/post/php-checkdate-function">checkdate()</a>
<a href="https://www.javatpoint.com/post/php-date-add-function">date_add()</a>
<a href="https://www.javatpoint.com/post/php-date-create-function">date_create()</a>
<a href="https://www.javatpoint.com/post/php-date-date-set-function">date_date_set()</a>
<a href="https://www.javatpoint.com/post/php-date-default-timezone-get-function">date_default_timezone_get()</a>
<a href="https://www.javatpoint.com/post/php-date-default-timezone-set-function">date_default_timezone_set()</a>
<a href="https://www.javatpoint.com/post/php-date-diff-function">date_diff()</a>
<a href="https://www.javatpoint.com/post/php-date-format-function">date_format()</a>
<a href="https://www.javatpoint.com/post/php-date-get-last-errors-function">date_get_last_errors()</a>
<a href="https://www.javatpoint.com/post/php-date-interval-format-function">date_interval_format()</a>
<a href="https://www.javatpoint.com/post/php-date-isodate-set-function">date_isodate_set()</a>
<a href="https://www.javatpoint.com/post/php-date-modify-function">date_modify()</a>
<a href="https://www.javatpoint.com/post/php-date-offset-get-function">date_offset_get()</a>
<a href="https://www.javatpoint.com/post/php-date-parse-from-format-function">date_parse_from_format()</a>
<a href="https://www.javatpoint.com/post/php-date-parse-function">date_parse()</a>
<a href="https://www.javatpoint.com/post/php-date-sub-function">date_sub()</a>
<a href="https://www.javatpoint.com/post/php-date-sun-info-function">date_sun_info()</a>
<a href="https://www.javatpoint.com/post/php-date-sunrise-function">date_sunrise()</a>
<a href="https://www.javatpoint.com/post/php-date-timestamp-set-function">date_timestamp_set()</a>
<a href="https://www.javatpoint.com/post/php-date-timezone-get-function">date_timezone_get()</a>
<a href="https://www.javatpoint.com/post/php-date-timezone-set-function">date_timezone_set()</a>
<a href="https://www.javatpoint.com/post/php-getdate-function">getdate()</a>
<a href="https://www.javatpoint.com/post/php-gettimeofday-function">gettimeofday()</a>
<a href="https://www.javatpoint.com/post/php-gmdate-function">gmdate()</a>
<a href="https://www.javatpoint.com/post/php-gmmktime-function">gmmktime()</a>
<a href="https://www.javatpoint.com/post/php-gmstrftime-function">gmstrftime()</a>
<a href="https://www.javatpoint.com/post/php-idate-function">idate()</a>
<a href="https://www.javatpoint.com/post/php-localtime-function">localtime()</a>
<a href="https://www.javatpoint.com/post/php-microtime-function">microtime()</a>
<a href="https://www.javatpoint.com/post/php-mktime-function">mktime()</a>
<a href="https://www.javatpoint.com/post/php-strftime-function">strftime()</a>
<a href="https://www.javatpoint.com/post/php-strtotime-function">strtotime()</a>
<a href="https://www.javatpoint.com/post/php-time-function">time() Function</a>
<a href="https://www.javatpoint.com/post/php-timezone-abbreviations-list-function">timezone_abbreviations_list()</a>
<a href="https://www.javatpoint.com/post/php-timezone-identifiers-list-function">timezone_identifiers_list()</a>
<a href="https://www.javatpoint.com/post/php-timezone-location-get-function">timezone_location_get()</a>
<a href="https://www.javatpoint.com/post/php-timezone-name-from-abbr-function">timezone_name_from_abbr()</a>
<a href="https://www.javatpoint.com/post/php-timezone-name-get-function">timezone_name_get()</a>
<a href="https://www.javatpoint.com/post/php-timezone-offset-get-function">timezone_offset_get()</a>
<a href="https://www.javatpoint.com/post/php-timezone-open-function">timezone_open()</a>
<a href="https://www.javatpoint.com/post/php-timezone-version-get-function">timezone_version_get()</a>
<a href="https://www.javatpoint.com/post/php-date-sunset-function">date_sunset()</a>
<a href="https://www.javatpoint.com/post/php-date_time-set-function">date_time_set()</a>
<a href="https://www.javatpoint.com/post/php-date-timestamp_get-function">date_timestamp_get()</a>
</div> <img src="./dateAdd(df)_files/wh.JPG" alt="Okay"> <br>
<div id="leftad" style="margin-left:20px">
<ins class="adPushupAds" data-adpcontrol="am3c1" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBuZXdyaWdodCAtLT4KPGlucyBjbGFzcz0iYWRzYnlnb29nbGUiCiAgICAgc3R5bGU9ImRpc3BsYXk6YmxvY2siCiAgICAgZGF0YS1hZC1jbGllbnQ9ImNhLXB1Yi00Njk5ODU4NTQ5MDIzMzgyIgogICAgIGRhdGEtYWQtc2xvdD0iNjAzNDkxMjU0MSIKICAgICBkYXRhLWFkLWZvcm1hdD0iYXV0byIKICAgICBkYXRhLWZ1bGwtd2lkdGgtcmVzcG9uc2l2ZT0idHJ1ZSI+PC9pbnM+CjxzY3JpcHQ+CihhZHNieWdvb2dsZSA9IHdpbmRvdy5hZHNieWdvb2dsZSB8fCBbXSkucHVzaCh7fSk7Cjwvc2NyaXB0Pg==" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
</div>
</div>
<div class="onlycontent">
<div class="onlycontentad">

<ins class="adPushupAds" data-adpcontrol="bt6l6" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Imh0dHBzOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBDTV9KVFBfTGVhZGVyYmFvcmQgLS0+CjxpbnMgY2xhc3M9ImFkc2J5Z29vZ2xlIgogICAgIHN0eWxlPSJkaXNwbGF5OmJsb2NrIgogICAgIGRhdGEtYWQtY2xpZW50PSJjYS1wdWItNDY5OTg1ODU0OTAyMzM4MiIKICAgICBkYXRhLWFkLXNsb3Q9IjkyMDE5MDE5MTUiCiAgICAgZGF0YS1hZC1mb3JtYXQ9ImF1dG8iCiAgICAgZGF0YS1mdWxsLXdpZHRoLXJlc3BvbnNpdmU9InRydWUiPjwvaW5zPgo8c2NyaXB0PgogICAgIChhZHNieWdvb2dsZSA9IHdpbmRvdy5hZHNieWdvb2dsZSB8fCBbXSkucHVzaCh7fSk7Cjwvc2NyaXB0Pg==" data-push="1"></ins> <script data-cfasync="false" type="text/javascript"> (function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){  if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") {  ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k);  k.setAttribute("data-push", "1"); }  }  })(window, document); </script>
</div>
<div class="onlycontentinner"> <div id="city"><table><tbody><tr><td><div id="bottomnextup">
<a class="next" href="https://www.javatpoint.com/post/php-date-time-function">next →</a>
<a class="next" href="https://www.javatpoint.com/post/php-date-time-function">← prev</a>
</div>
<h1 class="h1">PHP date_create() function</h1>
<p>It returns new date and time.</p>
<h2 class="h3">Syntax</h2>
<div class="codeblock"><div class="dp-highlighter"><div class="bar"><div class="tools"><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;ViewSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;PrintSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;About&#39;,this);return false;"></a></div></div><ol start="1" class="dp-c"><li class="alt"><span><span>DateTime&nbsp;date_create&nbsp;(&nbsp;[</span><span class="vars">$time</span><span>&nbsp;[,&nbsp;timezone]]&nbsp;);&nbsp;&nbsp;</span></span></li></ol></div><textarea name="code" class="php" style="display: none;">DateTime date_create ( [$time [, timezone]] );
</textarea></div>
<h4 class="n">Note : time and timezone are the optional parameters.</h4>
<h2 class="h3">Return</h2>
<p>This function returns the DateTime object on success or FALSE on failure.</p>
<h2 class="h2">Example 1</h2>
<div class="codeblock"><div class="dp-highlighter"><div class="bar"><div class="tools"><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;ViewSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;PrintSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;About&#39;,this);return false;"></a></div></div><ol start="1" class="dp-c"><li class="alt"><span><span>&lt;?php&nbsp;&nbsp;</span></span></li><li class=""><span>&nbsp;&nbsp;<span class="vars">$datefind</span><span>=date_create(</span><span class="string">"2018-7-25&nbsp;5:0:00"</span><span>,timezone_open(</span><span class="string">"America/Chicago"</span><span>));&nbsp;&nbsp;</span></span></li><li class="alt"><span><span class="func">echo</span><span>&nbsp;date_format(</span><span class="vars">$datefind</span><span>,</span><span class="string">"Y/m/d&nbsp;H:iP"</span><span>);&nbsp;&nbsp;</span></span></li><li class=""><span>?&gt;&nbsp;&nbsp;</span></li></ol></div><textarea name="code" class="php" style="display: none;">&lt;?php
  $datefind=date_create("2018-7-25 5:0:00",timezone_open("America/Chicago"));
echo date_format($datefind,"Y/m/d H:iP");
?&gt;
</textarea></div>
<p><strong>Output:</strong></p>
<div class="codeblock3"><pre>2018/07/25 05:00-05:00
</pre></div>
<h2 class="h2">Example 2</h2>
<div class="codeblock"><div class="dp-highlighter"><div class="bar"><div class="tools"><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;ViewSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;PrintSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;About&#39;,this);return false;"></a></div></div><ol start="1" class="dp-c"><li class="alt"><span><span>&lt;?php&nbsp;&nbsp;</span></span></li><li class=""><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="vars">$date</span><span>=date_create(</span><span class="string">"2018-07-27"</span><span>);&nbsp;&nbsp;</span></span></li><li class="alt"><span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="func">echo</span><span>&nbsp;date_format(</span><span class="vars">$date</span><span>,</span><span class="string">"Y/m/d"</span><span>);&nbsp;&nbsp;</span></span></li><li class=""><span>&nbsp;&nbsp;&nbsp;&nbsp;?&gt;&nbsp;&nbsp;</span></li></ol></div><textarea name="code" class="php" style="display: none;">&lt;?php
     $date=date_create("2018-07-27");
    echo date_format($date,"Y/m/d");
    ?&gt;
</textarea></div>
<p><strong>Output:</strong></p>
<div class="codeblock3"><pre>2018/07/27
</pre></div>
<h2 class="h2">Example 3</h2>
<div class="codeblock"><div class="dp-highlighter"><div class="bar"><div class="tools"><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;ViewSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;PrintSource&#39;,this);return false;"></a><a href="https://www.javatpoint.com/post/php-date-create-function#" onclick="dp.sh.Toolbar.Command(&#39;About&#39;,this);return false;"></a></div></div><ol start="1" class="dp-c"><li class="alt"><span><span>&lt;?php&nbsp;&nbsp;</span></span></li><li class=""><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li class="alt"><span><span class="vars">$date</span><span>=date_create(</span><span class="string">"2018-12-10"</span><span>);&nbsp;&nbsp;</span></span></li><li class=""><span>&nbsp;&nbsp;&nbsp;</span></li><li class="alt"><span>date_add(<span class="vars">$date</span><span>,&nbsp;date_interval_create_from_date_string(</span><span class="string">"10&nbsp;days"</span><span>));&nbsp;&nbsp;</span></span></li><li class=""><span><span class="func">echo</span><span>&nbsp;date_format(</span><span class="vars">$date</span><span>,&nbsp;</span><span class="string">"Y-m-d"</span><span>);&nbsp;&nbsp;</span></span></li><li class="alt"><span>&nbsp;&nbsp;&nbsp;</span></li><li class=""><span>?&gt;&nbsp;&nbsp;</span></li></ol></div><textarea name="code" class="php" style="display: none;">&lt;?php
  
$date=date_create("2018-12-10");
 
date_add($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "Y-m-d");
 
?&gt;
</textarea></div>
<p><strong>Output:</strong></p>
<div class="codeblock3"><pre>2018-12-20
</pre></div>
<div class="nexttopicdiv">
<span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="https://www.javatpoint.com/post/php-date-time-function">PHP date()/time() Function</a></span>
</div>

<br><br>
<div id="bottomnext">
<a style="float:left" class="next" href="https://www.javatpoint.com/post/php-date-time-function">← prev</a>
<a style="float:right" class="next" href="https://www.javatpoint.com/post/php-date-time-function">next →</a>
</div><br></td></tr></tbody></table></div>
<h2 class="h2">Help Others, Please Share</h2>
<a rel="nofollow" title="Facebook" target="_blank" href="https://www.facebook.com/sharer.php?u=https://www.javatpoint.com/post/php-date-create-function"><img src="./dateAdd(df)_files/facebook32.png" alt="facebook"></a>
<a rel="nofollow" title="Twitter" target="_blank" href="https://twitter.com/share?url=https://www.javatpoint.com/post/php-date-create-function"><img src="./dateAdd(df)_files/twitter32.png" alt="twitter"></a>
<a rel="nofollow" title="Pinterest" target="_blank" href="https://www.pinterest.com/pin/create/button/?url=https://www.javatpoint.com/post/php-date-create-function"><img src="./dateAdd(df)_files/pinterest32.png" alt="pinterest"></a>
</div>
<br> <br>
<div class="mobilemenu" style="clear:both">
<ins class="adPushupAds" data-adpcontrol="jrfe7" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSByZXNwb25zaXZlbW9iaWxlZm9vdGVyIC0tPgo8aW5zIGNsYXNzPSJhZHNieWdvb2dsZSIKICAgICBzdHlsZT0iZGlzcGxheTpibG9jayIKICAgICBkYXRhLWFkLWNsaWVudD0iY2EtcHViLTQ2OTk4NTg1NDkwMjMzODIiCiAgICAgZGF0YS1hZC1zbG90PSI4MjIyODY2MzE4IgogICAgIGRhdGEtYWQtZm9ybWF0PSJhdXRvIgogICAgIGRhdGEtZnVsbC13aWR0aC1yZXNwb25zaXZlPSJ0cnVlIj48L2lucz4KPHNjcmlwdD4KKGFkc2J5Z29vZ2xlID0gd2luZG93LmFkc2J5Z29vZ2xlIHx8IFtdKS5wdXNoKHt9KTsKPC9zY3JpcHQ+" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
</div>
</div>
<div id="right">
<ins class="adPushupAds" data-adpcontrol="am3c1" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBuZXdyaWdodCAtLT4KPGlucyBjbGFzcz0iYWRzYnlnb29nbGUiCiAgICAgc3R5bGU9ImRpc3BsYXk6YmxvY2siCiAgICAgZGF0YS1hZC1jbGllbnQ9ImNhLXB1Yi00Njk5ODU4NTQ5MDIzMzgyIgogICAgIGRhdGEtYWQtc2xvdD0iNjAzNDkxMjU0MSIKICAgICBkYXRhLWFkLWZvcm1hdD0iYXV0byIKICAgICBkYXRhLWZ1bGwtd2lkdGgtcmVzcG9uc2l2ZT0idHJ1ZSI+PC9pbnM+CjxzY3JpcHQ+CihhZHNieWdvb2dsZSA9IHdpbmRvdy5hZHNieWdvb2dsZSB8fCBbXSkucHVzaCh7fSk7Cjwvc2NyaXB0Pg==" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
<br><br>
<ins class="adPushupAds" data-adpcontrol="am3c1" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBuZXdyaWdodCAtLT4KPGlucyBjbGFzcz0iYWRzYnlnb29nbGUiCiAgICAgc3R5bGU9ImRpc3BsYXk6YmxvY2siCiAgICAgZGF0YS1hZC1jbGllbnQ9ImNhLXB1Yi00Njk5ODU4NTQ5MDIzMzgyIgogICAgIGRhdGEtYWQtc2xvdD0iNjAzNDkxMjU0MSIKICAgICBkYXRhLWFkLWZvcm1hdD0iYXV0byIKICAgICBkYXRhLWZ1bGwtd2lkdGgtcmVzcG9uc2l2ZT0idHJ1ZSI+PC9pbnM+CjxzY3JpcHQ+CihhZHNieWdvb2dsZSA9IHdpbmRvdy5hZHNieWdvb2dsZSB8fCBbXSkucHVzaCh7fSk7Cjwvc2NyaXB0Pg==" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
<br><br>
</div>
<div class="right1024" style="float:left;margin-left:10px;margin-top:120px;">
<ins class="adPushupAds" data-adpcontrol="am3c1" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBuZXdyaWdodCAtLT4KPGlucyBjbGFzcz0iYWRzYnlnb29nbGUiCiAgICAgc3R5bGU9ImRpc3BsYXk6YmxvY2siCiAgICAgZGF0YS1hZC1jbGllbnQ9ImNhLXB1Yi00Njk5ODU4NTQ5MDIzMzgyIgogICAgIGRhdGEtYWQtc2xvdD0iNjAzNDkxMjU0MSIKICAgICBkYXRhLWFkLWZvcm1hdD0iYXV0byIKICAgICBkYXRhLWZ1bGwtd2lkdGgtcmVzcG9uc2l2ZT0idHJ1ZSI+PC9pbnM+CjxzY3JpcHQ+CihhZHNieWdvb2dsZSA9IHdpbmRvdy5hZHNieWdvb2dsZSB8fCBbXSkucHVzaCh7fSk7Cjwvc2NyaXB0Pg==" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
<br> <br>
</div>
<br>
<div id="footer" style="clear:both;width:100%"> 
<div style="width:100%;margin-top:10px;color:white;background-image: linear-gradient(145deg,#52a2fc,#480fcc);line-height:28px;">
<h2 style="padding:60px 0px 0px 20px">Javatpoint Services</h2>
<p style="padding:0px 20px 0px 20px">JavaTpoint offers too many high quality services. Mail us on hr@javatpoint.com, to get more information about given services. </p>
<ul class="points">
<li>Website Designing</li>
<li>Website Development</li>
<li>Java Development</li>
<li>PHP Development</li>
<li>WordPress</li>
<li>Graphic Designing</li>
<li>Logo</li>
<li>Digital Marketing</li>
<li>On Page and Off Page SEO</li>
<li>PPC</li>
<li>Content Development</li>
<li>Corporate Training</li>
<li>Classroom and Online Training</li>
<li>Data Entry</li>
</ul>
<p style="padding-bottom:60px"></p>
</div>
<div style="width:100%;margin-top:-20px;color:white;background-image: linear-gradient(145deg,#dc8140,#b16b15);line-height:28px;">
<h2 style="padding:60px 0px 0px 20px">Training For College Campus</h2>
<p style="padding:0px 20px 60px 20px">JavaTpoint offers college campus training on Core Java, Advance Java, .Net, Android, Hadoop, PHP, Web Technology and Python. Please mail your requirement at hr@javatpoint.com.
<br>Duration: 1 week to 2 week
<br>
</p>
</div>

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-24880427-1']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<div style="margin-top:5px;text-align:center"> <sup style="font:16px arial;">Like/Subscribe us for latest updates or newsletter </sup>
<a target="_blank" rel="nofollow" href="https://feeds.feedburner.com/javatpointsonoo"><img src="./dateAdd(df)_files/rss1.png" alt="RSS Feed"></a>
<a target="_blank" rel="nofollow" href="https://feedburner.google.com/fb/a/mailverify?uri=javatpointsonoo"><img src="./dateAdd(df)_files/mail1.png" alt="Subscribe to Get Email Alerts"></a>
<a rel="nofollow" target="_blank" href="https://www.facebook.com/javatpoint"><img src="./dateAdd(df)_files/facebook1.jpg" alt="Facebook Page"></a>
<a target="_blank" rel="nofollow" href="https://twitter.com/pagejavatpoint"><img src="./dateAdd(df)_files/twitter1.png" alt="Twitter Page"></a>
<a target="_blank" rel="nofollow" href="https://www.youtube.com/channel/UCUnYvQVCrJoFWZhKK3O2xLg"><img src="./dateAdd(df)_files/youtube32.png" alt="YouTube"></a>
<a target="_blank" rel="nofollow" href="https://javatpoint.blogspot.com/"><img src="./dateAdd(df)_files/blog.png" alt="Blog Page"></a>
</div>
<footer class="footer1">
<div class="column4">
<h3>Learn Tutorials</h3><a href="https://www.javatpoint.com/java-tutorial">Learn Java Tutorial</a><a href="https://www.javatpoint.com/c-programming-language-tutorial">Learn C Tutorial</a><a href="https://www.javatpoint.com/cpp-tutorial">Learn C++ Tutorial</a><a href="https://www.javatpoint.com/c-sharp-tutorial">Learn C# Tutorial</a><a href="https://www.javatpoint.com/php-tutorial">Learn PHP Tutorial</a><a href="https://www.javatpoint.com/html-tutorial">Learn HTML Tutorial</a><a href="https://www.javatpoint.com/css-tutorial">Learn CSS Tutorial</a><a href="https://www.javatpoint.com/javascript-tutorial">Learn JavaScript Tutorial</a><a href="https://www.javatpoint.com/jquery-tutorial">Learn jQuery Tutorial</a><a href="https://www.javatpoint.com/spring-tutorial">Learn Spring Tutorial</a></div>
<div class="column4">
<h3>Our Websites</h3><a href="https://www.javatpoint.com/">Javatpoint.com</a><a target="_blank" href="https://www.hindi100.com/">Hindi100.com</a><a target="_blank" href="https://www.lyricsia.com/">Lyricsia.com</a><a rel="nofollow" target="_blank" href="https://www.quoteperson.com/">Quoteperson.com</a><a rel="nofollow" target="_blank" href="https://www.wordcountee.com/">Wordcountee.com</a><a rel="nofollow" target="_blank" href="https://www.charactercountee.com/">Charactercountee.com</a><a rel="nofollow" target="_blank" href="https://www.jobandplacement.com/">Jobandplacement.com</a></div>
<div class="column4">
<h3>Our Services</h3>
<p>Website Development</p>
<p>Android Development</p>
<p>Website Designing</p>
<p>Digital Marketing</p>
<p>Summer Training</p>
<p>Industrial Training</p>
<p>College Campus Training</p>
</div>
<div class="column4">
<h3>Contact</h3>
<p>Address: G-13, 2nd Floor, Sec-3</p>
<p>Noida, UP, 201301, India</p>
<p>Contact No: 0120-4256464, 9990449935</p><a href="https://www.javatpoint.com/contact-us">Contact Us</a> <a href="https://www.javatpoint.com/subscribe.jsp">Subscribe Us</a> <a href="https://www.javatpoint.com/privacy-policy">Privacy Policy</a><a href="https://www.javatpoint.com/sitemap.xml">Sitemap</a></div>
</footer>
<footer class="footer2">
<p>© Copyright 2011-2018 www.javatpoint.com. All rights reserved. <a rel="nofollow" target="_blank" href="https://www.sssit.org/">Developed by SSS IT Pvt Ltd (JavaTpoint)</a> </p>
</footer>
</div>
</div>
</div>
<script async="" src="./dateAdd(df)_files/f(5).txt">
</script>
<script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-4699858549023382", enable_page_level_ads: true }); 
</script>
<script src="./dateAdd(df)_files/shcoreandbrush.js.download">
</script><script type="text/javascript" src="./dateAdd(df)_files/google.js.download"></script>

<script> dp.SyntaxHighlighter.HighlightAll('code'); 
</script>
<script src="./dateAdd(df)_files/jquery.min.js.download">
</script>

<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;" data-ad-status="unfilled"><ins id="aswift_0_expand" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"><ins id="aswift_0_anchor" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:undefinedpx !IMPORTANT;height:undefinedpx !IMPORTANT" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="./dateAdd(df)_files/ads.html" data-google-container-id="a!1" data-load-complete="true"></iframe></ins></ins></ins><table cellspacing="0" cellpadding="0" class="gstl_50 gssb_c" style="width: 2px; display: none; top: 3px; position: absolute; left: -1px;"><tbody><tr><td class="gssb_f"></td><td class="gssb_e" style="width: 100%;"></td></tr></tbody></table><table cellspacing="0" cellpadding="0" class="gstl_51 gssb_c" style="width: 726px; display: none; top: 84px; position: absolute; left: 14px;"><tbody><tr><td class="gssb_f"></td><td class="gssb_e" style="width: 100%;"></td></tr></tbody></table></body><iframe id="google_esf" name="google_esf" src="./dateAdd(df)_files/zrt_lookup.html" style="display: none;"></iframe></html>