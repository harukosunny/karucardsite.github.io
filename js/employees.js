$(document).ready(function() {
    $('#search').click(function() {
        var id = $('#employee_list').val();
        if (id != '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(data) {
                    $('#employee_details').css("display", "block");
                    $('#employee_name').text(data.name);
                    $('#employee_address').text(data.address);
                    $('#employee_gender').text(data.gender);
                    $('#employee_designation').text(data.designation);
                    $('#employee_age').text(data.age);
                }
            })
        } else {
            alert("Please Select Employee");
            $('#employee_details').css("display", "none");
        }
    });
});