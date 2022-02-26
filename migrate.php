<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="glaws">
    <form method="post" action="run.php">
        <br>
        <text>Введите Данные от Mysql</text>
        <h6>Пользователь:</h6>
        <input name="post_login" type="text">
        <h6>Пароль:</h6>
        <input name="post_pass" type="text">
        <input name="val_form" type="hidden" value="1">

        <button type="submit" class="btn btn-light">Запустить</button>
    </form>
</div>


<style>
    .glaws {
        margin: auto;
        margin-top: 8%;
        width: 350px;
        height: 400px;
        background-color: #d275ff;
        border-radius: 25px;
        text-align: center;
    }

    text {
        color: white;
        font-size: 1.3em;
        font-weight: 800;

    }

    h6 {
        margin-top: 35px;
    }

    input {

        height: 35px;
    }

    button {
        margin-top: 30px;
    }
</style>