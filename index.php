<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="/style/index.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Гланая</title>
</head>
<body>
    <div class="glaw_fon">
        <div class="div_glaw">
            <div class="div_header">
                <div class="vuveska">
                    <h3>Сайт кафедры для создания преподавателями контрольных работ.</h3>
                </div>

                <div class="div_vxod">
                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-dark button_vxod">Войти</button>
                </div>
            </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="script/proverka.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Введите данные для входа</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Введите логин</label>
                            <input name="input_login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Логин">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Введите пароль</label>
                            <input name="input_pass" type="text" class="form-control" id="formGroupExampleInput2" placeholder="пароль">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>
</html>
