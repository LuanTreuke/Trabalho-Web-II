const button = document.querySelector('submit');

const handleSubmit = (event) => {
    event.preventDefault();
    //Inputs do formulario
    const email = document.querySelector('input[type=email]').value
    
    //Endpoint do sheetsDB
    fetch('https://sheetdb.io/api/v1/z41apl0mb4hut', {
        method: 'post',
        headers:{
            'Accept': 'application/json',
            'Content-type': 'application/json'
        },
        body: JSON.stringify({
            email
        })
    });

    alert('E-mail enviado com sucesso!');
    window.location.href = '';
}

document.querySelector('form').addEventListener('submit', handleSubmit);