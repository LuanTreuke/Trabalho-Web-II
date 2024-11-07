const button = document.querySelector('submit');

const handleSubmit = (event) => {
    event.preventDefault();
    //Inputs do formulario
    const email = document.querySelector('input[type=email]').value
    
    //Endpoint do sheetsDB
    fetch('https://sheetdb.io/api/v1/x9957cyi6x9jb', {
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