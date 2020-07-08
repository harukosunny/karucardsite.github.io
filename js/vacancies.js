$(document).ready(function() {

    var count = 0;

    $('#user_dialog').dialog({
        autoOpen: false,
        width: 400
    });

    $('#add').click(function() {
        $('#user_dialog').dialog('option', 'title', 'Add Data');
        $('#cv').val('');
        $('#vacancie').val('');
        $('#error_cv').text('');
        $('#error_vacancie').text('');
        $('#cv').css('border-color', '');
        $('#vacancie').css('border-color', '');
        $('#save').text('Save');
        $('#user_dialog').dialog('open');
    });

    $('#save').click(function() {
        var error_cv = '';
        var error_vacancie = '';
        var cv = '';
        var vacancie = '';
        if ($('#cv').val() == '') {
            error_cv = 'CV is required';
            $('#error_cv').text(error_cv);
            $('#cv').css('border-color', '#cc0000');
            cv = '';
        } else {
            error_cv = '';
            $('#error_cv').text(error_cv);
            $('#cv').css('border-color', '');
            cv = $('#cv').val();
        }
        if ($('#vacancie').val() == '') {
            error_vacancie = 'Vacancie is required';
            $('#error_vacancie').text(error_vacancie);
            $('#vacancie').css('border-color', '#cc0000');
            vacancie = '';
        } else {
            error_vacancie = '';
            $('#error_vacancie').text(error_vacancie);
            $('#vacancie').css('border-color', '');
            vacancie = $('#vacancie').val();
        }
        if (error_cv != '' || error_vacancie != '') {
            return false;
        } else {
            if ($('#save').text() == 'Save') {
                count = count + 1;
                output = '<tr id="row_' + count + '">';
                output += '<td>' + cv + ' <input type="hidden" name="hidden_cv[]" id="cv' + count + '" class="cv" value="' + cv + '" /></td>';
                output += '<td>' + vacancie + ' <input type="hidden" name="hidden_vacancie[]" id="vacancie' + count + '" value="' + vacancie + '" /></td>';
                output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="' + count + '">View</button></td>';
                output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="' + count + '">Remove</button></td>';
                output += '</tr>';
                $('#user_data').append(output);
            } else {
                var row_id = $('#hidden_row_id').val();
                output = '<td>' + cv + ' <input type="hidden" name="hidden_cv[]" id="cv' + row_id + '" class="cv" value="' + cv + '" /></td>';
                output += '<td>' + vacancie + ' <input type="hidden" name="hidden_vacancie[]" id="vacancie' + row_id + '" value="' + vacancie + '" /></td>';
                output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="' + row_id + '">View</button></td>';
                output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="' + row_id + '">Remove</button></td>';
                $('#row_' + row_id + '').html(output);
            }

            $('#user_dialog').dialog('close');
        }
    });

    $(document).on('click', '.view_details', function() {
        var row_id = $(this).attr("id");
        var cv = $('#cv' + row_id + '').val();
        var vacancie = $('#vacancie' + row_id + '').val();
        $('#cv').val(cv);
        $('#vacancie').val(vacancie);
        $('#save').text('Edit');
        $('#hidden_row_id').val(row_id);
        $('#user_dialog').dialog('option', 'title', 'Edit Data');
        $('#user_dialog').dialog('open');
    });

    $(document).on('click', '.remove_details', function() {
        var row_id = $(this).attr("id");
        if (confirm("Are you sure you want to remove this row data?")) {
            $('#row_' + row_id + '').remove();
        } else {
            return false;
        }
    });

    $('#action_alert').dialog({
        autoOpen: false
    });

    $('#user_form').on('submit', function(event) {
        event.preventDefault();
        var count_data = 0;
        $('.cv').each(function() {
            count_data = count_data + 1;
        });
        if (count_data > 0) {
            var form_data = $(this).serialize();
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: form_data,
                success: function(data) {
                    $('#user_data').find("tr:gt(0)").remove();
                    $('#action_alert').html('<p>Data Inserted Successfully</p>');
                    $('#action_alert').dialog('open');
                }
            })
        } else {
            $('#action_alert').html('<p>Please Add atleast one data</p>');
            $('#action_alert').dialog('open');
        }
    });

});