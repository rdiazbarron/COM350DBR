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

    app.get('/api/v1/libros', (req, res) => {
        logger.info("GET: /api/v1/libros");
        console.log("GET: /api/v1/libros");

        var sql = "";


        sql = "SELECT id_libro,titulo,autor,editorial_id,edicion,pais,precio FROM libros ";
        
       

        dbConnection.getConnection(function (err, connection) {
            connection.query(sql, (err, result) => {
                res.json(result);
                console.log("Query libros by " + req.userid);
                logger.info("Query libros by " + req.userid);
            });
            connection.release();
        });
    });


    app.post('/api/v1/libros', (req, res) => {
        const body = req.body;
        var sql = `INSERT INTO libros (titulo, autor, editorial_id, edicion, pais, precio) 
                   VALUES ('${body.titulo}', '${body.autor}', ${body.editorial_id}, 
                   ${body.edicion}, '${body.pais}', ${body.precio});`;
    
        dbConnection.getConnection(function (err, connection) {
            if (err) {
                // Si hay un error obteniendo la conexión, devolver la respuesta de inmediato
                return res.json({ error: err.message });
            }
    
            connection.query(sql, function (err, result) {
                // Asegúrate de liberar la conexión primero
                connection.release();
                
                if (err) {
                    // Si hay un error en la consulta, devolver la respuesta de inmediato
                    return res.json({ error: err.message });
                }
                //console.log("libro created by ");
                //logger.info("libro created by ");
                // Si todo está bien, enviar la respuesta
                res.status(201).json({ message: 'Libro creado con éxito', result: result });
            });
        });
    });
    

    



    /* PUT item updating. */
    app.put('/api/v1/libros/:id', (req, res) => {     
        logger.info("PUT: /api/v1/libros/:id");
    
        const body = req.body;
        
        var sql = "UPDATE libros SET titulo='" + body.titulo + "', autor='" + body.autor + 
                "', editorial_id='" + body.editorial_id + "', edicion=" + body.edicion + ", pais='" + body.pais + 
                "', precio='" + body.precio + "' WHERE id_libro=" + req.params.id + ";";
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
                console.log("libro updated by " + req.params.id);
                logger.info("libro updated by " + req.params.id);
                res.status(200).json({ message: 'Libro actualizado con éxito', result: result });
            });
        });
    });
    

    /* DELETE item. */
    app.delete('/api/v1/libros/:id', VerifyToken, (req, res) => {     
        logger.info("DELETE: /api/v1/libros/:id");

        const body = req.body;
        var sql = "DELETE FROM  libros WHERE id_libro=" + req.params.id + ";";
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
                console.log("libro deleted by " + req.params.id);
                logger.info("libro delted by " + req.params.id);
                res.status(200).json({ message: 'Libro eliminado con éxito', result: result });
            });
        });
    });


        
    /* PATCH item. */
//     app.patch('/api/v1/libros/', VerifyToken, (req, res) => {
//         logger.info("PATCH: /api/v1/libros/");

//         const body = req.body;
//         var sqlCheckItem = "SELECT userid, state FROM dbtantakatu.item WHERE id = "+ body.itemId + ";"

//         var itemuserid = "";
//         var librostate = -1;
//         dbConnection.getConnection(function(err, connection) {
//             connection.query(sqlCheckItem, function(err, result) {
//                 if (err) {
//                     res.json({ error: err })
//                 };
//                 console.log(result);
//                 itemuserid = result[0].userid;
//                 librostate  = result[0].state;
//                 console.log("Item user id " + itemuserid);
//                 console.log("Buyer user id " + req.userid);

//                 if (itemuserid == req.userid)
//                 {
//                     console.log("Buyer and Seller are the same");
//                     res.end();
//                     connection.release();
//                 }
//                 else if (librostate == 0)
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