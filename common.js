$("#form").submit(function() {
    $.ajax({
        type: "POST",
        url: "mail/mail.php",
        data: $("#form").serialize()
    }).done(function() {
        $.jGrowl("Найближчим часом ми зв'яжемося з вами!", {
            life: 10000,
            header: 'Ваша заявка відправлена!',
            theme: 'jgcolor',
            beforeOpen: function(e,m,o){
                $(e).width( "250px" ).height("110px");
            }
        });
    });
    return false;
});