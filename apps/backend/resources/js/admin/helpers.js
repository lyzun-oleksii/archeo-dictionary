export function addClassToElement(el, className) {
    let arr = el.className.split(" ");

    if (arr.indexOf(className) === -1) {
        el.className += " " + className;
    }
}

export function removeClassFromElement(el, regExp) {
    el.className = el.className.replace(regExp, "");
}
