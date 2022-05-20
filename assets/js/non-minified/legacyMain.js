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








