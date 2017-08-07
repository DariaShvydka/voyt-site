/**
 * Created by Daria on 07.08.17.
 */
$(document).ready(function(){

    $("#form11").on('submit', function(){
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: th.serialize(),
            beforeSend: function(html){
                $(modal) // берем строку с селектором и делаем из нее jquery объект
                    .css('display', 'none')
                    .animate({opacity: 0, top: '50%'}, 200); // плавно показываем
            },
            success: function(html){
                open_modal_tnx();
                setTimeout(function() {
                    th.trigger("reset");
                    close.click();
                }, 7000);
            }
        });
        return false;
    });
});