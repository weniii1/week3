const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send('Hello, Espress!');
});

app.get('/test', (req, res) => {
    res.send('Here is test word!');
});

app.listen(port, () => {
    console.log(`Server listing at http:localhost:${port}`);
});