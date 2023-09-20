const log = document.querySelector("#log");
const elementType = document.querySelector("#elementType");

const div = document.querySelector("#divEl");
const paragraph = document.querySelector("#paragraphEl");
const btn = document.querySelector("#btnEl");

let clickedCount = 0;

// Add event listeners for the nested elements: <div><p><button>...</button></p></div>
div.addEventListener("click", onButtonClick, true); // The 'true' param causes the event to be triggered in the capturing phase.
paragraph.addEventListener("click", onButtonClick);
btn.addEventListener("click", onButtonClick);
// btn.onclick = onButtonClick; // Property based event handler hook-up

// Add event listeners for element ID and mouse coords
div.addEventListener("mousemove", idElement); // or mouseover
log.addEventListener("mousemove", onMouseMove);

function onButtonClick(event) {
    // console.log("Button clicked");
    clickedCount++;
    // plog(`Button clicked (${clickedCount})`);
    // plog(`Button clicked`);

    plog(`An event of type '${event.type}' occurred.`);
    plog(`The target is '${event.target.tagName}'.`); // tagName returns a 'friendly' representation of the tag
    plog(`The current target is '${event.currentTarget.tagName}'.`);
    plog("");

    // event.stopPropagation(); // Stops the event propagating further
}

function idElement(event) {
    if (elementType) {
        elementType.innerText = event.target.tagName;
    }
}

function onMouseMove(event) {
    const coords = document.querySelector("#mouseCoords");
    if (coords) {
        coords.innerHTML = `x: ${event.offsetX}, y: ${event.offsetY}`;
    }
}

function plog(message) {
    if (log) {
        log.innerText += message + "\n";
        // log.innerText = message + "\n" + log.innerText; // To prepend messages
    }
}

function reset() {
    clickedCount = 0;
    if (log) {
        log.innerText = "";
    }
}
