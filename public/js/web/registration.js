$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
        },
    });

    $("#provinsi").change(function () {
        let province_id = $(this).val().split(",")[0];
        console.log(province_id);
        $.ajax({
            type: "GET",
            url: "/getkota/" + province_id,
            success: function (response) {
                $("#kota").html(response);
            },
            error: function (msg) {
                console.log("eror", msg);
            },
        });
    });

    $("select").change(function () {
        var $this = $(this);
        var prevVal = $this.data("prev");
        var otherSelects = $("select").not(this);
        otherSelects
            .find("option[value=" + $(this).val() + "]")
            .attr("disabled", true);
        if (prevVal) {
            otherSelects
                .find("option[value=" + prevVal + "]")
                .attr("disabled", false);
        }

        $this.data("prev", $this.val());
    });
});
