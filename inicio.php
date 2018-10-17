<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORM RGB</title>
    <link href='https://fonts.googleapis.com/css?family' rel='stylesheet' type='text/css'>
    
    <!-- css -->
    <style type="text/css">

        * {
            padding: 0;
            margin: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .texto {
            text-align: center;

        }

        .wrap {
            width: 90%;
            max-width: 500px;
            margin: auto;
            
        }

        form {
            width: 100%;
            margin: 20px 0;
            padding: 20px;
            background: #fff;
            overflow: hidden;
            box-shadow: 0 0 3px grey;
            border-top:14px solid #536DFE;
        }

        form input[type="text"],
        form textarea {
            border: 1px solid #536DFE;
            border-radius: 20px;
            padding: 16px;
            width: 100%;
            display: block;
            margin-bottom:20px;
            font-family:"Roboto", Arial, sans-serif, helvetica;
            font-size: 1em;
            color:#141938;
        }

        form input[type="text"]:focus,
        form textarea:focus{
            border: 2px solid #3F51B5;
            padding: 15px;
        }

        form textarea {
            max-width: 100%;
            min-width: 100%;
            max-height: 300px;
            min-height: 150px;
        }


        .btn,
        form input[type="submit"]{
            padding: 15px;
            background: #ED572A;
            color:#E1E9FA;
            font-size: 1em;
            font-family:"Roboto", Arial, sans-serif, helvetica;
            border-radius: 20px;
            border:none;
            cursor: pointer;
        }

        form input[type="submit"]:hover{
            background: #536DFE;
        } 

    </style>
<body>
    <br>
    <div class="texto">
        <h1>Convierte tu RGB a Hexadecimal</h1>

        <h3>Rellena los campos con valores de 0 a 255</h3>
    </div>
    <div class="wrap">
    
        <form action="comprobar.php" method="POST"  name="" id="" class="">
            <input type="text" class="form-R" placeholder="R" name="R">
            <input type="text" class="form-G" placeholder="G" name="G">
            <input type="text" class="form-B" placeholder="B" name="B">
            <input type="submit" class="boton-Enviar" value="Enviar">

        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

    
</body>
</html>