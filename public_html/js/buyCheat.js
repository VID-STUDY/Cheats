$(function () {
    $('#customRange2').on('change', function () {
        let index = this.value - 1;
        let price = $(`#durationPrice${index}`).html();
        $('#payButton').html(`Перейти к оплате (${price} руб.)`)
    });
})
