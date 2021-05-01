const handleLogin = async (inputEvent, form) => {
    inputEvent.preventDefault()

    let formData = getFormData(form);

    updateLoginStatus = updateInnerHtml(document.querySelector('[js-data=login-status]'))
    updateLoginStatus('Verificando Credenciais')

    const response = await fetch("auth/auth.php", {
            body: formData,
            method: "post"
        });

    updateLoginStatus(await response.text())
    return false
}


const updateInnerHtml = (element) => (statusMessage) => {
    element.innerHTML = statusMessage
}

function getFormData(form) {
    let formData = new FormData();
    formData.append('user_name', form['user_name'].value);
    formData.append('user_password', form['user_password'].value);
    return formData;
}
