$(document).ready(function() {
    var context_path = $("input[name=context_path]").val();
    var grid_visitors = $('#grid_visitors').bootgrid({
        ajax: true,
        url: context_path + "/getVisitorsData",
        selection: false,
        multiSelect: false,
        rowSelect: true,
        columnSelection: false
    });

    $(".clear-history").on("click", function() {
        $.ajax({
            method: "POST",
            url: context_path + "/clearHistory",
            data: {
                type: "visitors"
            },
            success: function (msg) {
                if (msg == "NEED_LOGIN")
                    location.reload();
                else
                    grid_visitors.bootgrid('reload');
            }
        });
    });
});