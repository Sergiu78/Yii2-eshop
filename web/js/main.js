function openCart(event) {
    event.preventDefault();

    $.ajax({
        url: 'cart/open',
        type: 'GET',
        success: function(res){
            $('#cart .modal-content').html(res);
            $('#cart').modal('show');
        },
        error: function(){
            alert('Неудача');
        }
    });
}

$('.product-button__add').on('click', function(event) {
    event.preventDefault();
    let name = $(this).data('name');
    

    $.ajax({
        url: 'cart/add',
        data: {name: name},
        type: 'GET',
        success: function(res){
            $('#cart .modal-content').html(res);
        },
        error: function(){
            alert('Неудача');
        }
    });
});