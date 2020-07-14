<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Блог - двухколоночный макет блога с пользовательской навигацией, заголовком и содержанием.">

    <title><?=$pageItem['title']?></title>

    <!-- Bootstrap core CSS, JS,  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
<div class="container">

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
            <a class="p-2 text-muted" href="/">Главная страница</a>
        </nav>
    </div>

    <div class="py-1 mb-2">
        <div class="alert alert-success" role="alert">
            Выберите тип запроса!
        </div>
        <form id="apiForm" method="get">
            <div class="form-check m-2">
                <input class="form-check-input" type="radio" name="input" id="newsApi" value="news">
                <label class="form-check-label" for="newsApi">
                    Актуальные новости в России
                </label>
            </div>
            <div class="form-check m-2">
                <input class="form-check-input" type="radio" name="input" id="weathersApi" value="weather">
                <label class="form-check-label" for="weathersApi">
                    Актуальная погода в Новосибирске
                </label>
            </div>
            <button class="btn btn-success" type="submit">Отправить запрос</button>
        </form>
    </div>
</div>
</body>
</html>