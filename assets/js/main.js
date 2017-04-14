$(function(){
    $("#from_date").change(function () {
        $("#to_date").attr("min", $("#from_date").val());
        $("#to_date").val($("#from_date").val());
    });

    $("#from_time").change(function () {
        $("#to_time").val($("#from_time").val());
    });
});

