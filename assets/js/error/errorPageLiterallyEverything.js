/*! functions.js 1.1.5  | MIT */

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function setCharAt(str,index,chr) {
    if(index > str.length-1) return str;
    return str.substring(0,index) + chr + str.substring(index+1);
}

function random(items) {
    return items[Math.floor(Math.random()*items.length)];
}


function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function setDarkTheme(element, classNameDark, classNameLight) {
    let darkThemeCookie = getCookie("darkTheme");
    if (darkThemeCookie != "") {
        if (darkThemeCookie == "True") {
        element.className = classNameDark;
        changeElemContent(themeButton, "Toggle light!");

        } else {
        element.className = classNameLight;
        changeElemContent(themeButton, "CHANGE IT BACK!");

        }
    } else {
        setCookie("darkTheme", "True", 365);
    }
}

function switchTheme(element, className) {
        element.className = className;
}

function changeElemContent(element, changedText) {
    element.innerText = changedText;
}

/*! main.js 3.5.149  | MIT */

let body = document.getElementById("body");
let themeButton = document.getElementById("themeButton");
let footer = document.getElementById("footer");
let footerContainer = document.getElementById("footerContainer"); 
let dropShadow = document.getElementById("dropShadow");


function loadOverlayOff() {
  document.getElementById("loadOverlay").style.display = "none";
}


/* =========================================================
 * Generic functions for site main template
 *  See also: functions.js for functions in this file
 * ========================================================== */

/* 
 * Theme button functionality
 */

function toggleTheme() {
  if(body.className == "bodyDark") {
    switchTheme(body, "bodyLight");
    switchTheme(footer, "footerLight");
    switchTheme(footerContainer, "footerLight footerTextDark");
    switchTheme(themeButton, "themeButtonLight");
    switchTheme(dropShadow, "dropShadowLight");
    setCookie("darkTheme", "False", -1);
    setCookie("darkTheme", "False", 365);
  } else {
    switchTheme(body, "bodyDark");
    switchTheme(footer, "footerDark");
    switchTheme(footerContainer, "footerDark footerTextLight");
    switchTheme(themeButton, "themeButtonDark");  
    switchTheme(dropShadow, "dropShadowDark");
    setCookie("darkTheme", "True", -1);
    setCookie("darkTheme", "True", 365);
  }
}

/* 
 * Check if darkTheme cookie exists (with value true) and;
 * if so, cause a theme change.
 * See also: functions.js
 */

function checkDarkTheme() {
  setDarkTheme(body, "bodyDark", "bodyLight");
  setDarkTheme(footer, "footerDark", "footerLight");
  setDarkTheme(footerContainer, "footerDark footerTextLight", "footerLight footerTextDark");
  setDarkTheme(themeButton, "themeButtonDark", "themeButtonLight");
  setDarkTheme(dropShadow, "dropShadowDark", "dropShadowLight");
}








/*! error.js 1.4.87  | MIT */

var errorCode = document.getElementById("errorCode");
var recieving = document.getElementById("recieving");

function errorJsToggleTheme() {
  if(body.className == "bodyDark") {
    switchTheme(errorCode, "errorCodeLight");
    switchTheme(recieving, "recievingLight");
    changeElemContent(themeButton, "Toggle light!");
  } else {
    switchTheme(errorCode, "errorCodeDark");
    switchTheme(recieving, "recievingDark");
    changeElemContent(themeButton, "MY EYESSSS!!!");
  }
}

function errorJsCheckTheme() {
    setDarkTheme(errorCode, "errorCodeLight", "errorCodeDark");
    setDarkTheme(recieving, "recievingLight", "recievingDark");
}


// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
      'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
      'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
      'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
      'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});
  
    while (length--) {
      method = methods[length];
  
      // Only stub undefined methods.
      if (!console[method]) {
        console[method] = noop;
      }
    }
  }());
  
  // Place any jQuery/helper plugins in here.
  