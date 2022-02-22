const express = require("express");
const mysql = require("mysql");
const path = require("path");
const req = require("express/lib/request");
const bodyParser = require("body-parser");
const { reduce } = require("async");
const { redirect } = require("statuses");
const encoded = bodyParser.urlencoded({extended : false});
var id;
var userData;

const app = express();
const PORT = 5000;


app.set("view engine", "ejs");

app.use("/assets", express.static(path.join(__dirname, "/assets")));

const db = mysql.createPool({
    host: 'localhost',
    user: 'adem',
    password: '1234',
    database: 'bookstoredatabase',
    connectionLimit: 100
});

// db.connect((error) => {
//     if(error){
//         console.log(error);
//     }else{
//         console.log("Connected...");
//     }
// });

app.listen(PORT, "localhost", () => {
    console.log("Server started");
  });

app.get('/', (req, res) => {
    res.sendFile(__dirname + "/main.html");
});

app.get('/signIn', (req, res) => {
    res.sendFile(__dirname + "/signIn.html");
});

app.get('/myAccount', (req, res) => {
    res.sendFile(__dirname + "/myAccount.html");
});

app.get('/index', (req, res) => {
    res.sendFile(__dirname + "/index.html");
});

//Logout
app.get('/logout', (req, response) => {
    db.getConnection((err, conn) => {
        if(err) {
            throw err
            return
        }else{
            conn.query("CALL spUserAccount_Logout(?)", [id], (error, res, fields) => {
                if(error){
                    response.redirect("/signIn");
                }else{
                    if(res[0].length < 1){
                        // alert("Invlalid password")
                        response.redirect("/");
                    }else{
                        response.redirect("/");
                    }
                }
            })
        }
        conn.release()
    })
});

//Login
app.post('/signIn', encoded, (req, response) => {
    const username = req.body.username;
    const password = req.body.password;
    
    db.getConnection((err, conn) => {
        if(err) {
            throw err
            return
        }else{
            conn.query("CALL spUserAccount_Login(?, ?)", [username, password], (error, res, fields) => {
                if(error){
                    response.redirect("/signIn");
                }else{
                    if(res[0].length < 1){
                        // alert("Invlalid password")
                        response.redirect("/signIn");
                    }else{
                        id = res[0][0].uId;
                        response.redirect("/index");
                    }
                }
            })
        }
        conn.release()
    })
});

//Signup
app.post('/signUp', encoded, (req, response) => {

    const username = req.body.username
    const email = req.body.email
    const password = req.body.password
    const status = 1;
    
    db.getConnection((err, conn) => {
        if(err) {
            throw err
            return
        }else{
            conn.query("CALL spUserAccount_signUp(?, ?, ?, ?)", [username, email, password, status], (error, res, fields) => {
                if(error){
                    response.redirect("/signIn");
                }else{
                        id = res[0][0].uId;
                        // console.log(id);
                        response.redirect("/index");
                    }
                })
        }
        conn.release()
    })
});

//Crud operation
app.get('/myAccountLoad', encoded, (req, response, next) => {
    db.getConnection((err, conn) => {
        if(err) {
            throw err
            return
        }else{
            conn.query("CALL spUserAccount_viewUserDetail(?)", [id], (error, res, fields) => {
                if(error){
                    response.redirect("/index");
                    return
                }else{
                    userData = res[0]
                    if(userData.length < 0){
                        response.redirect("/signIn");
                        return
                    }else{
                        console.log(userData);
                        response.render('myAccount', {userData});
                    }
                }
                conn.release()
            })
        }
    })
});

app.post('/crud', encoded, (req, response, next) => {
    const username = req.body.username
    const email = req.body.email
    const password = req.body.password
    const confirmPass = req.body.confirmPass

    if(password == confirmPass){
        db.getConnection((err, conn) => {
            if(err) {
                throw err
                return
            }else{
                conn.query("CALL spUserAccount_updateSettings(?, ?, ?, ?)", [id, username, email, password], (error, res, fields) => {
                    if(error){
                        response.render('myAccount', {userData});
                        // console.log(res);
                    }else{
                        if(res[0].length < 1){
                            // alert("Invlalid password")
                            response.redirect("/signIn");
                        }else{
                        id = res[0][0].uId;
                        response.render('myAccount', {userData});
                        }
                    }
                    conn.release()
                })
            }
        })
    }
});
