<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ГородОк
 */

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/404.css">
  <title>Страница не найдена - Город'ОК - рекламно-производственная компания</title>
</head>
<body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #f8f8f8;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Nunito Sans", sans-serif;
    }

    .error-box {
        padding: 0 5px;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .error-box .number-error {
        font-size: 5.5em;
        color: #122042;
        opacity: 0.8;
        margin-bottom: 0.3em;
        z-index: 2;
    }
    .error-box .far {
        color: #122042;
        margin-bottom: 0.4em;
        z-index: 3;
    }
    .error-box .text {
        color: #122042;
        font-size: 1.4em;
        margin-bottom: 2.5em;
        line-height: 2em;
        z-index: 4;
    }
    .error-box a {
        color: #9f201f;
        padding: 20px 0;
        border-radius: 30px;
        border: 1px solid #9f201f;
        display: block;
        width: 270px;
        text-decoration: none;
        transition: 0.3s all ease;
        font-weight: 600;
        overflow: hidden;
        position: relative;
        z-index: 100;
    }
    .error-box a::before {
        content: "";
        position: absolute;
        left: 0;
        width: 0;
        height: 100%;
        background: #BC1515;
        z-index: -1;
        transition: 0.3s;
        bottom: 0;
        border-radius: 0 30% 30% 0;
    }
    .error-box a:hover {
        color: #fff;
    }
    .error-box a:hover:before {
        width: 180%;
    }
    .error-box::after {
        content: "404";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 20em;
        font-weight: 600;
        z-index: 1;
        opacity: 0.1;
        color: #c23a3a;
    }

    @media (max-width: 769px) {
        .error-box .number-error {
            font-size: 5.5em;
        }
        .error-box .far {
            color: #122042;
            margin-bottom: 0.4em;
            z-index: 3;
        }
        .error-box .text {
            color: #122042;
            font-size: 1.1em;
            margin-bottom: 2.5em;
            line-height: 2em;
            z-index: 4;
        }
        .error-box a {
            color: #c23a3a;
            padding: 20px 40px;
            border-radius: 30px;
            border: 1px solid #c23a3a;
            display: block;
            width: 270px;
            text-decoration: none;
            transition: 0.3s all ease;
            font-weight: 600;
            z-index: 4;
        }
        .error-box a:hover {
            color: #fff;
            background: #c23a3a;
        }
        .error-box::after {
            content: "404";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 20em;
            font-weight: 600;
            z-index: 1;
            opacity: 0.1;
            color: #c23a3a;
        }
    }
    @media (max-width: 576px) {
        .error-box .number-error {
            font-size: 3.5em;
        }
        .error-box .far {
            color: #122042;
            margin-bottom: 0.4em;
            z-index: 3;
        }
        .error-box .text {
            color: #122042;
            font-size: 0.8em;
            margin-bottom: 2.5em;
            line-height: 2em;
            z-index: 4;
        }
        .error-box .text br {
            display: none;
        }
        .error-box a {
            color: #c23a3a;
            padding: 20px 40px;
            border-radius: 30px;
            border: 1px solid #c23a3a;
            display: block;
            width: 270px;
            text-decoration: none;
            transition: 0.3s all ease;
            font-weight: 600;
            z-index: 4;
        }
        .error-box a:hover {
            color: #fff;
            background: #c23a3a;
        }
        .error-box::after {
            content: "404";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 12em;
            font-weight: 600;
            z-index: 1;
            opacity: 0.1;
            color: #c23a3a;
        }
    }
    @media (max-width: 320px) {
        .error-box .number-error {
            font-size: 3em;
        }
        .error-box .far {
            color: #122042;
            margin-bottom: 0.4em;
            z-index: 3;
        }
        .error-box .text {
            color: #122042;
            font-size: 0.8em;
            margin-bottom: 2.5em;
            line-height: 2em;
            z-index: 4;
        }
        .error-box .text br {
            display: none;
        }
        .error-box a {
            color: #c23a3a;
            padding: 15px 20px;
            border-radius: 30px;
            border: 1px solid #c23a3a;
            display: block;
            width: 200px;
            font-size: 0.8em;
            text-decoration: none;
            transition: 0.3s all ease;
            font-weight: 600;
            z-index: 4;
        }
        .error-box a:hover {
            color: #fff;
            background: #c23a3a;
        }
        .error-box::after {
            content: "404";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 9em;
            font-weight: 600;
            z-index: 1;
            opacity: 0.1;
            color: #c23a3a;
        }
    }


</style>
<div class="error-box">
  <h2 class="number-error">Ошибка 404</h2>
  <i class="far fa-frown fa-5x"></i>
  <p class="text">Кажется что-то пошло не так. Страница, котороую вы запрашиваете, не существует.<br>Возможно она устарела или был введен неверный адрес.</p>
  <a href="/">Вернуться на главную</a>
</div>


</body>
</html>

