$(document).ready(function() {
    var context_path = $("input[name=context_path]").val();
    var grid_whatsapp = $('#grid_whatsapp').bootgrid({
        ajax: true,
        url: context_path + "/getWhatsAppData",
        selection: false,
        multiSelect: false,
        rowSelect: true,
        columnSelection: false
    });
    var grid_phone = $('#grid_phone').bootgrid({
        ajax: true,
        url: context_path + "/getPhoneData",
        selection: false,
        multiSelect: false,
        rowSelect: true,
        columnSelection: false
    });
    var grid_building = $('#grid_building').bootgrid({
        ajax: true,
        url: context_path + "/getBuildingData",
        selection: false,
        multiSelect: false,
        rowSelect: true,
        columnSelection: false
    }).on("loaded.rs.jquery.bootgrid", function() {
        $("#grid_building tbody tr td:nth-child(2)").each(function(i, el) {
            $(el).css("text-transform", "capitalize");
        });
    });

    $(".clear-history").on("click", function() {
        var type = $(this).data("type");
        $.ajax({
            method: "POST",
            url: context_path + "/clearHistory",
            data: {
                type: type
            },
            success: function(msg) {
                if (msg == "NEED_LOGIN")
                    location.reload();
                else if (type == "whatsapp") {
                    grid_whatsapp.bootgrid('reload');
                    $(".whatsapp .clicks").html("0");
                } else if (type == "phone") {
                    grid_phone.bootgrid('reload');
                    $(".phone .clicks").html("0");
                } else if (type == "building")
                    grid_building.bootgrid('reload');
            }
        });
    });
});