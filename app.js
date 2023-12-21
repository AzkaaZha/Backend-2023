//import express
const express = require(`express`);

//Membuat object express
const app = express();

//Menggunakan middleware
app.use(express.json());

//Definisikan Route
const router = require(`./routes/api.js`);
app.use(router);

//Definisikan port
app.listen(3000, () => {
    console.log(`Server running at http://127.0.0.1:3000`);
});



