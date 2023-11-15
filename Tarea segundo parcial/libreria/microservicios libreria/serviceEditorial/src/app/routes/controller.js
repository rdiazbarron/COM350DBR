var VerifyToken = require('./VerifyToken');
var dbConnection = require('../../config/dbConnection').pool;

var config = require('../../config/config');
var logger = require('../../config/log');
var secrets = require('../../config/secrets');
var jwt = require('jsonwebtoken');
var bcrypt = require('bcryptjs');
var dateFormat = require('dateformat');
var mysql = require('mysql');
var fileUpload = require('express-fileupload')
var multer = require('multer');
var cloudinary = require('cloudinary');
var bodyParser = require('body-parser');

var upload = multer({ dest: './photos/' })

module.exports = app => {
    app.use(function(item, req, res, next) {
        console.log(item);
        res.status(200).send(item);
    });

    cloudinary.config(secrets.cloudinary);

    app.get('/api/v1/editoriales', (req, res) => {
        logger.info("GET: /api/v1/editoriales");
        console.log("GET: /api/v1/editoriales");

        var sql = "";


        sql = "SELECT id_editorial,descripcion FROM editorials ";
        
       

        dbConnection.getConnection(function (err, connection) {
            connection.query(sql, (err, result) => {
                res.json(result);
                console.log("Query editoriales by " + req.userid);
                logger.info("Query editoriales by " + req.userid);
            });
            connection.release();
        });
    });


    app.post('/api/v1/editoriales', (req, res) => {
        const { descripcion } = req.body;
        var sql = `INSERT INTO editorials (descripcion) VALUES (?)`;
    
        dbConnection.getConnection(function (err, connection) {
            if (err) {
                console.error('Error getting connection:', err.message);
                return res.status(500).json({ error: 'Error connecting to the database' });
            }
    
            connection.query(sql, [descripcion], function (err, result) {
                connection.release();
    
                if (err) {
                    console.error('Error executing query:', err.message);
                    return res.status(500).json({ error: 'Error executing the query' });
                }
    
                res.status(201).json({ message: 'Editorial creada con éxito', result: result });
            });
        });
    });
    



    app.put('/api/v1/editoriales/:id', (req, res) => {     
        logger.info("PUT: /api/v1/editoriales/:id");
    
        const body = req.body;
        
        var sql = "UPDATE editorials SET descripcion='" + body.descripcion + "'WHERE id_editorial=" + req.params.id + ";";
        console.log(sql);
    
        dbConnection.getConnection(function(err, connection){
            if (err) {
                // Si hay un error obteniendo la conexión, devolver la respuesta de inmediato
                return res.json({ error: err.message });
            };
            
            connection.query(sql, function(err, result) {
                if (err) {
                    // Liberar la conexión en caso de error y devolver respuesta
                    connection.release();
                    return res.json({ error: err.message });
                };
                // Si la consulta fue exitosa, liberar conexión y enviar respuesta
                connection.release();
                console.log("Editorial updated by " + req.params.id);
                logger.info("Editorial updated by " + req.params.id);
                res.status(200).json({ message: 'Editorial actualizado con éxito', result: result });
            });
        });
    });
    
    

    /* DELETE item. */
    app.delete('/api/v1/editoriales/:id', VerifyToken, (req, res) => {     
        logger.info("DELETE: /api/v1/editoriales/:id");

        const body = req.body;
        var sql = "DELETE FROM  editorials WHERE id_editorial=" + req.params.id + ";";
        console.log(sql);

        dbConnection.getConnection(function(err, connection){
            if (err) {
                // Si hay un error obteniendo la conexión, devolver la respuesta de inmediato
                return res.json({ error: err.message });
            };
            
            connection.query(sql, function(err, result) {
                if (err) {
                    // Liberar la conexión en caso de error y devolver respuesta
                    connection.release();
                    return res.json({ error: err.message });
                };
                // Si la consulta fue exitosa, liberar conexión y enviar respuesta
                connection.release();
                console.log("editorial deleted by " + req.params.id);
                logger.info("editorial delted by " + req.params.id);
                res.status(200).json({ message: 'editorial eliminado con éxito', result: result });
            });
        });
    });


        
    /* PATCH item. */
//     app.patch('/api/v1/editoriales/', VerifyToken, (req, res) => {
//         logger.info("PATCH: /api/v1/editoriales/");

//         const body = req.body;
//         var sqlCheckItem = "SELECT userid, state FROM dbtantakatu.item WHERE id = "+ body.itemId + ";"

//         var itemuserid = "";
//         var editorialestate = -1;
//         dbConnection.getConnection(function(err, connection) {
//             connection.query(sqlCheckItem, function(err, result) {
//                 if (err) {
//                     res.json({ error: err })
//                 };
//                 console.log(result);
//                 itemuserid = result[0].userid;
//                 editorialestate  = result[0].state;
//                 console.log("Item user id " + itemuserid);
//                 console.log("Buyer user id " + req.userid);

//                 if (itemuserid == req.userid)
//                 {
//                     console.log("Buyer and Seller are the same");
//                     res.end();
//                     connection.release();
//                 }
//                 else if (editorialestate == 0)
//                 {
//                     console.log("Item is already sold !");
//                     res.end();
//                     connection.release();
//                 }
//                 else
//                 {
//                  var sqlPurchase = "INSERT INTO purchase (ItemId, userid, purchaseDate) VALUES (" + body.itemId + ", '" + req.userid + "', NOW());";
//                         console.log(sqlPurchase);
//                         var sqlUpdateItem = "UPDATE item SET state = 0 WHERE id = "+ body.itemId + ";";
//                         console.log(sqlUpdateItem);
//                         dbConnection.getConnection(function(err, connection) {
//                             connection.query(sqlPurchase, function(err, result) {
//                                 if (err) {
//                                     res.json({ error: err })
//                                 };
//                                 console.log("purchase performed");
//                                 logger.info("purchase performed");
//                             });
//                             connection.query(sqlUpdateItem, function(err, result) {
//                                 if (err) {
//                                     res.json({ error: err })
//                                 };
//                                 console.log("purchase performed");
//                                 logger.info("purchase performed");
//                             });            
//                             res.end();
//                             connection.release();
//                         });
//                 };
//             });
//             });
    
//         logger.info("End purchase perform");

//         });
};