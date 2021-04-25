document.addEventListener('DOMContentLoaded', () => {
    let submitButton = document.querySelector('.button-contactForm');
    if (submitButton) {
        submitButton.addEventListener('click', (e) => {
            e.preventDefault();
            let message = document.querySelector('#message').value;
            let name = document.querySelector('#name').value;
            let email = document.querySelector('#email').value;
            let subject = document.querySelector('#subject').value;
            let form = document.querySelector('#contactForm');

            let ajaxData = {
                action: 'mailsend',
                message: message,
                name: name,
                email: email,
                subject: subject
            };
            jQuery.post(data.url, ajaxData, function (res) {

                if (res) {
                    form.insertAdjacentHTML('beforeend', '<div>Успешно отправлено</div>')

                } else {
                    console.log('error');
                }
                // success: '';
            });
        });
    }

});