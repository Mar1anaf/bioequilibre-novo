const title = document.getElementById('typingEffect');
const text = "Bioéquilibre";

let index = 0;

function type() {
    if (index < text.length) {
        title.textContent += text.charAt(index);
        index++;
        setTimeout(type, 100);
    }
}

type();