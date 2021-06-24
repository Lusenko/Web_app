$(".buttonIDS").on('click', function(event){
    let id = this.id
    $.ajax({
        url: "AddToCart.php",
        type: 'post',
        data: { id_tov: id },
        success: function( data ) {
            alert(data);
        }
    });
});