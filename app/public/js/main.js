$(function () {
    $('.js-select').select2();

    if(goForIt){
        calc();
    }

    $('.js-calc').on('click', function(e){
        calc();
    });
});

function calc(){
    $('.js-emergency').hide();
    $('.js-not-emergency').hide();

    var population = $('.js-select').val();
    var concelho = $('.js-select option:selected').text()
    var min = $('.js-select option:selected').data('min');
    var count = $('#casos').val();
    var tax = (count / population) * 100000;

    var emergency = false;
    if(tax >= 240){
        emergency = true;
    }

    $('.js-cases').text(count);
    $('.js-concelho').text(concelho)
    $('.js-min').text(min);

    if(emergency){
        $('.js-emergency').show();
    } else {
        $('.js-not-emergency').show();
    }

    insertUrlParam('concelho', concelho);
    insertUrlParam('casos', count);

}

function insertUrlParam(key, value) {
    if (history.pushState) {
        let searchParams = new URLSearchParams(window.location.search);
        searchParams.set(key, value);
        let newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + searchParams.toString();
        window.history.pushState({path: newurl}, '', newurl);
    }
}