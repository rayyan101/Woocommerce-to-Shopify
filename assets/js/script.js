jQuery(document).ready(function($){ 
    $("#sync").on("click",function(){
        var hidden_value = $('#post_id').val();
        jQuery.ajax({
            url:   ajax_object.ajaxurl,
            type: 'POST',
            data: {  
                action: 'WSM_ajax_callback_function',  
                hidden_value: hidden_value 
            },
            success: function (data) {
                console.log("Succuess");
                console.log(data);
             }
        });
    });
});