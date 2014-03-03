$(document).ready(function(){
    function ajax(sort, request){
        obj={};
        obj[sort]=request;
        $.getJSON('/'+sort, obj, function(data){
            if (sort=='Country')
                createCity(data);
            else
                createStreet(data);
        })
    };

    function createStreet(data){
        $("#street").empty();
        $("#street").show();
        for (i=0; i<data.length; i++){
            $("#street").append("<li>"+data[i].address+"</li>");
        };
    };

    function createCity(data){
        $("#city").empty();
        $("#city").show();
        for (i=0; i<data.length; i++){
            $("#city").append("<option value=\""+data[i].city+"\">"+data[i].city+"</option>");
        };
    };

    $('#country').change(function(){
        ajax('Country', this.options[this.selectedIndex].value);
    });

    $("#city").change(function(){
        ajax('City', this.options[this.selectedIndex].value);
    });
});

