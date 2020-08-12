jQuery(function () {
    $('#customRange2').on('change', function () {
        let index = this.value;
        let price = $(`#durationPrice${index}`).html();
        $('#payButton').html(`Перейти к оплате (${price} руб.)`)
    });
})
