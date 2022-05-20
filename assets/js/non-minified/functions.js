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