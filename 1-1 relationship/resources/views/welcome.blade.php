<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }
            .content {
                text-align: center;
                margin-top: 100px;
            }
            .mail, .pass{
                width: 300px;
                height: 30px;
                margin-top: 20px;
                border-radius: 20px;
                border-style: 1px solid;
                border-width: 0ch;
                text-align: center;
                color: #636b6f
            }
            .content{
                background: #636b6f;
                width: 400px;
                margin: 100px auto;
                padding: 30px 10px;
            }
            .title{
                color: #fff
            }
            .submit{
                margin: 40px 0 10px 0;
                border: none;
                width: 200px;
                height: 35px;
                border-radius: 20px;
                color: #636b6f
            }
            .mail:focus, .pass:focus, .submit:focus{
                outline: none;
            }
            ul li {
                display: inline;
                margin: 0;
                padding: 0 5px;
            }
            ul{
                margin: 0 !important;
                padding: 0 !important;
            }
            ul li a{
                text-decoration: none;
                color: #fff;
                font-weight: 200;
            }
            ul li a:hover{
                font-weight: 800;
            }
            .desc{
                text-align: center;
                font-size: 30px;
                margin-top: -20px;
                color: #939697;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    <h1>Laravel</h1>
                </div>
                <div class="form">
                    <form action="" method="head">
                        <input type="email" class="mail" name="email" placeholder="Enter Email"><br/>
                        <input type="password" class="pass" name="password" placeholder="Enter Password"><br/>
                        <button type="submit" name="submit" class="submit">Submit</button>
                    </form>
                    <ul>
                        <li><a href="#">Read</a></li>
                        <li><a href="#">Update</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class="desc">
                CRUD SYSTEM
            </div>
        </div>
    </body>
</html>
