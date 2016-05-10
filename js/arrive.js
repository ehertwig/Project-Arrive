$(function () {
    $('[data-toggle="popover"]').popover();
});



$(document).ready(function(){
 /*
    $.getJSON('https://openexchangerates.org/api/latest.json?app_id=ffd14c08ab174ffa818b84933b79cc41', function(){
          fx.settings = {from : 'USD', to : 'EUR'};  
        var convert = fx.convert(1, {from: 'USD', to: 'GBP'});
      $('.currency').text(convert);  
    });
*/
    
    
    
    var demo = function(data) {
    fx.rates = data.rates
    var rate = fx(1).from("USD").to("GBP");
    var conversion = "$1 = " + rate.toFixed(2);
       // $('.currency').append('<p>test</p>');  
        $( ".currency" ).html(conversion);
    }

$.getJSON("http://api.fixer.io/latest", demo);
    
    
});