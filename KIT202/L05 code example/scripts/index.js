
// let pages = [];
// pages[0] = "Events";
// pages[1] = "Form validation";

// let hrefs = [];
// hrefs[0] = "events.html";
// hrefs[1] = "validation.html";

// Could also use objects and one array, e.g.
let links = [];
links[0] = { page: "Events", href: "events.html" };
links[1] = { page: "Form validation", href: "validation.html" };


let title = document.querySelector("#title");
if (title) {
    // console.log(title);
    // console.log(title.innerText); // get
    title.innerText = "DOM Events, Forms (Part 2), and HTTP Methods"; // set
}

let toc = document.querySelector("#toc-bookmarks");
if (toc) {
    // Loop over items in bookmarks array
    for (let i = 0; i < links.length; i++) {

        // Create a new <li>
        let li = document.createElement("li");

        // Create a new <a>
        let a = document.createElement("a");

        // Append the bookmark text (as a new text node) as a child of the <a>
        // <a>...bookmark...</a>
        a.appendChild(document.createTextNode(links[i].page));

        // Set the href of the new bookmark
        a.setAttribute("href", links[i].href);

        // Append the <a> as a child of the <li>
        // <li><a>...bookmark...</a></li>
        li.appendChild(a);

        // Append the <li> as a child of the <ul>
        // <ul>
        //   <li><a>...bookmark...</a></li>
        // </ul>
        toc.appendChild(li);
    }
}


