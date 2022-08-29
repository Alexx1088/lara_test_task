const axios = require('axios')

const baseURL = 'testtask/login';

axios.post(baseURL, {
    login: 'admin20@mail.ru',
    password: '12345678'
}).then(res => console.log(res))
  .catch(err => console.log(err))