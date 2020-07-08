$(document).ready(function() {
    var careercount = 2;
    $("button").click(function() {
        careercount = careercount + 2;
        $("#careers").load("load-careers.php", {
            careernewcount: careercount
        });
    });
});