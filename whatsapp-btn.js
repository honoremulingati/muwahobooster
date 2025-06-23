// Bouton WhatsApp
const btn = document.createElement('a');
btn.href = 'https://wa.me/243981732170';
btn.target = '_blank';
btn.style.position = 'fixed';
btn.style.bottom = '20px';
btn.style.right = '20px';
btn.style.background = '#25d366';
btn.style.color = 'white';
btn.style.padding = '10px 20px';
btn.style.borderRadius = '50px';
btn.style.fontWeight = 'bold';
btn.innerText = 'WhatsApp';
document.body.appendChild(btn);
