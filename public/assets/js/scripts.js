
const avatarText = document.getElementById('avatar-text');
let lastSpokenMessage = '';
let hasGreeted = false; // Control para el saludo inicial

// Función para que el avatar hable
function speak(text) {
    if (speechSynthesis.speaking || lastSpokenMessage === text) return;
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = 'es-ES';
    utterance.rate = 1;
    speechSynthesis.speak(utterance);
    lastSpokenMessage = text;
}

// Actualizar el texto y la voz del avatar según la sección visible
function updateAvatarText() {
    const sections = document.querySelectorAll('section');
    let activeSection = null;

    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const visibleHeight = Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);
        if (visibleHeight > 0.5 * section.offsetHeight) {
            activeSection = section.id;
        }
    });

    let newText = '';
    switch (activeSection) {
        case 'kahoot':
            newText = '¡Participa en Kahoot!';
            break;
        case 'scratch':
            newText = '¡Explora el juego: Rythm, hecho en Scratch!';
            break;
        case 'podcasts':
            newText = '¡Escucha los podcasts educativos sobre la historia de la música!';
            break;
        case 'app-inventor':
            newText = '¡Descarga nuestra app interactiva!, es una grabadora de voz que fue utilizada para los podcast de la sección de podcast';
            break;
        default:
            if (!hasGreeted) {
                newText = '¡Hola! Estoy aquí para ayudarte.';
                hasGreeted = true;
            }
            break;
    }

    if (newText && avatarText.innerText !== newText) {
        avatarText.innerText = newText;
        speak(newText);
    }
}

// Detectar cambios de sección al hacer scroll
window.addEventListener('scroll', updateAvatarText);

// Inicialización
updateAvatarText();