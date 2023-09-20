// 1: Hello
console.log("Hello, World");


// 2: Vars
var myVar = "Hello";
myVar = 42;

let myOtherVar = null;
const PI = 3.14159;

console.log(myVar);
console.log(myOtherVar);

let firstName = "Jackie";
let year = 2023;
let height = 160.5;

console.log("In " + year + ", " + firstName + " was " + height + "cm tall");

console.log(`In ${year}, ${firstName} was ${height}cm tall`);


// 3: Bool equality
if (1 == "1") {     // loose equality
    console.log("1 == 1");
}

if (1 === "1") {    // strict equality
    console.log("1 === 1");
}

// 4: Truthy/falsy
// In short, 0, "", '', null, undefined, and NaN are all falsy; everything else is truthy
if ("") {
    console.log("Truthy");
}


// 5: Arrays
let bookmarks = [];
console.log(bookmarks);

bookmarks.push("Possums in your home");
bookmarks[1] = "A bookmark";
bookmarks[3] = "Yet another bookmark";
bookmarks[2] = "Another bookmark";

console.log(`Bookmarks array has ${bookmarks.length} items`);
console.log(bookmarks);


// 6: Functions
function printArray(arr) {
    for (let i = arr.length - 1; i >= 0; i--) {
        console.log(arr[i]);
    }
    // for (let bm of arr) { // for-in: loop over props(index); for-of: loop over vals
    //     console.log(bm);
    // }
}

// const printArray = function (arr) {
//     for (let bm of arr) {
//         console.log(bm);
//     }
// }

// const printArray = (arr) => {
//     for (let bm of arr) {
//         console.log(bm);
//     }
// };

printArray(bookmarks);


// 7: Scope
let globalVar = 42;

function scopeExample() {
    let localVar = 100;

    var i = 10;

    { // for...
        var i = 20;
    }

    console.log(`i is ${i}`);
}
scopeExample();


// 8. Hoisting
function hoist1() {
    x = 50;

    console.log(`x is ${x}`);

    var x; // declaration hoisted to top of scope (i.e., betweem lines 96-97)

    // How the browser interprets the code:
    //  var x;
    //  x = 50;
    //  console.log(`x is ${x}`);
}
hoist1();

function hoist2() {
    console.log(`x is ${x}`);
    var x = 50; // only the decalation is hoisted

    // How the browser interprets the code:
    //  var x;
    //  console.log(`x is ${x}`);
    //  x = 50;
}
hoist2();


// 9. DOM
// let title = document.getElementById("#title");
let title = document.querySelector("#title");
if (title) {
    console.log(title);
    console.log(title.innerText); // get
    title.innerText = "Changed with JS"; // set (note this replaces all content, inc. any children)
}

let img = document.querySelector("#headlineImage");
// if (img) {
//     console.log(img.alt)
//     img.alt = "Replaced alt attribute";
// }
if (img && img.hasAttribute("alt")) {
    img.setAttribute("alt", "Replaced alt attribute");
}

// title.style.color = "#ff0000"; // set inline style, e.g., <h1 ... style="color: #ff0000;" ...>
title.classList.add("border");
title.classList.remove("border");

let ulBookmarks = document.querySelector("#toc-bookmarks");
if (ulBookmarks) {
    // Loop over items in bookmarks array
    for (bm of bookmarks) {

        // Create a new <li>
        let li = document.createElement("li");

        // Create a new <a>
        let a = document.createElement("a");

        // Append the bookmark text (as a new text node) as a child of the <a>
        // <a>...bookmark...</a>
        a.appendChild(document.createTextNode(bm));

        // Set the href of the new bookmark
        a.setAttribute("href", "#");

        // Append the <a> as a child of the <li>
        // <li><a>...bookmark...</a></li>
        li.appendChild(a);

        // Append the <li> as a child of the <ul>
        // <ul>
        //   <li><a>...bookmark...</a></li>
        // </ul>
        ulBookmarks.appendChild(li);
    }
}
