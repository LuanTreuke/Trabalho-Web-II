function typeWriter(elemento, delay = 0, callback) {
    const textoArray = elemento.textContent.split('');
    elemento.innerHTML = ''; 
    textoArray.forEach((letra, i) => {
        setTimeout(() => elemento.innerHTML += letra, delay + 2 * i);
    });

    
    setTimeout(callback, delay + 2 * textoArray.length);
}


const txt1 = document.querySelector('.txt1');
const txt2 = document.querySelector('.txt2');
const txt3 = document.querySelector('.txt3');
const txt4 = document.querySelector('.txt4');


txt2.style.visibility = 'hidden';
txt3.style.visibility = 'hidden';
txt4.style.visibility = 'hidden';


typeWriter(txt1, 0, () => {
    
    txt2.style.visibility = 'visible';  
    typeWriter(txt2, 0, () => {

        txt3.style.visibility = 'visible';  
        typeWriter(txt3, 0, () => {
            
            txt4.style.visibility = 'visible';  
            typeWriter(txt4, 0);
        });
    });
});
