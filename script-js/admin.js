$('.insert_prepod').on('click', function() {

    var val_login =  $('#insert_login_prepod').val();
    var val_pass =  $('#insert_pass_prepod').val();
    var val_surname =  $('#insert_surname_prepod').val();
    var val_name =  $('#insert_name_prepod').val();
    var val_patronymic =  $('#insert_patronymic_prepod').val();
    var val_predmet =  $('#insert_predmet_prepod').val();

    $.ajax({
        url: 'script_admin.php',
        method: 'post',
        dataType: 'html',
        data: {login: val_login, pass: val_pass, surname: val_surname, name: val_name, patronymic: val_patronymic, prepmet: val_predmet},
        success: function(data){
            $('.select_prepod_glaw').empty();
            $(".select_prepod_glaw").load("admin.php .select_prepod_glaw");

            location.href=location.href;

            return;
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
