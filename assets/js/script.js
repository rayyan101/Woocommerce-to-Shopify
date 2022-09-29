jQuery(document).ready(function($){ 
    $("#sync_button").on("click",function(){
        $("#sync_loader").show();
        var hidden_value = $('#post_id').val();
        $(this).attr('disabled','disabled');
        setTimeout(function(){$("#sync_button").html("Syncing..."); });
        jQuery.ajax({
            url:   ajax_object.ajaxurl,
            type: 'POST',
            data: {  
                action: 'wsm_ajax_callback_function',  
                hidden_value: hidden_value 
            },
            success: function (data) {
                $('#sync_button').attr('disabled',false);
                setTimeout(function(){$("#sync_button").html("Sync Product"); });
                $("#sync_loader").hide();
            }
        });
    });
});