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
        }
    });
});

/