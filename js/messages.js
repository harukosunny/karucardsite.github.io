$('form.contact').on('submit', function() {
    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

    that.find('[firstName]').each(function(index, value) {
        var that = $(this),
            firstName = that.attr('firstName'),
            value = that.val();

        data[firstName] = value;
    });

    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(response) {
            console.log(response);
        }
    });
    return false;
});