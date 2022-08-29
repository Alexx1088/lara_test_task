const login = () => {
    fetch.post('testtask/login', {
        login: 'admin20@mail.ru',
        password: '12345678'
    })
        .then(res => console.log(res))
        .catch(err => console.log(err))
}

document.getElementById('login').addEventListener(
    'click', () => console.log('test')
)

