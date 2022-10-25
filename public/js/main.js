$('#search-input').on('input', function() {
    let ul = $('<ul/>')
    $.ajax({
        url: '/search',
        accepts: 'json',
        data: {
            'title': this.value
        },
        success: (results) => {
            results.forEach((item) => {
                let li = $('<li/>')
                li.text(item.title + ' ')
                li.append(
                    $('<a/>')
                    .attr('href', '/update/' + item.id)
                    .text('Edit ')
                )
                li.append(
                    $('<a/>')
                    .attr('href', '/delete/' + item.id)
                    .text('Delete')
                )
                ul.append(li)
            })

            $('#promotions').html(ul)
        }
    })
})