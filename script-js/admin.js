$('.insert_prepod').on('click', function() {

    var val_login =  $('#insert_login_prepod').val();
    var val_pass =  $('#insert_pass_prepod').val();
    var val_surname =  $('#insert_surname_prepod').val();
    var val_name =  $('#insert_name_prepod').val();
    var val_patronymic =  $('#insert_patronymic_prepod').val();
    var val_predmet =  $('#insert_predmet_prepod').val();
    var val_id_prepod = $('#id_last_prepod').val();

    $.ajax({
        url: 'script_admin.php',
        method: 'post',
        dataType: 'html',
        data: {login: val_login, pass: val_pass, surname: val_surname, name: val_name, patronymic: val_patronymic, predmet: val_predmet},
        success: function(data){
            $( ".select_prepod").append( " <div class=select_prepod_glaw><div class=mini_prepod><img src=../../res/prepod_ikon.svg><h4>Логин: <text>" + val_login + "</text>;  Пароль: <text>"+val_pass+"</text>;</h4></div>" +
                "<div class='mini_info'><h4>"+val_surname+" "+val_name+" "+val_patronymic+";Предмет: <text>"+val_predmet+"</text>;</h4></div></div>" );
            $( ".ewrewrwere" ).append("<option value='"+val_id_prepod+"'>"+val_login+"</option>");
        }
    });
});

$('#select_prepod').on('change', function() {
    var id_prepod =  $('#select_prepod').val();

    $.ajax({
        url: 'select.php',
        method: 'post',
        ddataType: 'html',
        data: {id_prepod: id_prepod},
        success: function(data){

            var wer = JSON.parse(data);

            document.getElementById("update_login_prepod").value = "";
            document.getElementById('update_login_prepod').value = wer[0][1];

            document.getElementById("update_pass_prepod").value = "";
            document.getElementById('update_pass_prepod').value = wer[0][3];

            document.getElementById("update_surname_prepod").value = "";
            document.getElementById('update_surname_prepod').value = wer[0][4];

            document.getElementById("update_name_prepod").value = "";
            document.getElementById('update_name_prepod').value = wer[0][5];

            document.getElementById("update_patronymic_prepod").value = "";
            document.getElementById('update_patronymic_prepod').value = wer[0][6];

            document.getElementById("update_predmet_prepod").value = "";
            document.getElementById('update_predmet_prepod').value = wer[0][7];

            console.log(wer);
        }
    });
});


$('.update_prepod_but').on('click', function() {
    var val_up_login =  $('#update_login_prepod').val();
    var val_up_pass =  $('#update_pass_prepod').val();
    var val_up_surname =  $('#update_surname_prepod').val();
    var val_up_name =  $('#update_name_prepod').val();
    var val_up_patronymic =  $('#update_patronymic_prepod').val();
    var val_up_predmet =  $('#update_predmet_prepod').val();
    var val_select_up_prepod = $('#select_prepod').val();

    $.ajax({
        url: 'script_admin2.php',
        method: 'post',
        dataType: 'html',
        data: {id_up: val_select_up_prepod,login: val_up_login, pass: val_up_pass, surname: val_up_surname, name: val_up_name, patronymic: val_up_patronymic, predmet: val_up_predmet},
        success: function(data){

        }
    });
});
