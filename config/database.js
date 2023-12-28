//import mysql
const mysql = require('mysql');

//import dotenv
require('dotenv').config();


//destructuring objek
const {
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_DATABASE
} = process.env;

//create connection
const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USERNAME,
    password: DB_PASSWORD,
    database: DB_DATABASE
});

db.connect((err) => {
    if(err){
        console.log(`Error Connecting` + err.stack);
        return;
    } else {
      console.log(`Database Connected`);
      return;
    }
});

module.exports = db;