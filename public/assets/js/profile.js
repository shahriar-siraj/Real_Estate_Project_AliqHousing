$(document).ready(function() {
    var context_path = $("input[name=context_path]").val();
    $(".save").on("click", function() {
        var uid = $("#uid").val(),
            pass = $("#pwd").val(),
            confirm = $("#confirm").val();

        if (uid == "")
            showMessage(0, "User ID is required.");
        else if (pass != confirm)
            showMessage(0, "Password are no match.");
        else {
            $.ajax({
                method: "POST",
                url: context_path + "/updateProfile",
                data: {
                    uid: uid,
                    pass: pass
                }, success: function(msg) {
                    if (msg == "S_OK") {
                        showMessage(1, "Successfully updated.");
                        $(".main-header .navbar-custom-menu .dropdown-toggle").html(uid);
                    } else
                        showMessage(0, "Failed to update.");
                }
            });
        }
    });

    var showMessage = function(type, msg) {
        if (type == 0)
            $("#div_error").removeClass("alert-info").addClass("alert-warning").removeClass("display-none").html(msg);
        else
            $("#div_error").removeClass("alert-warning").addClass("alert-info").removeClass("display-none").html(msg);
    }
});