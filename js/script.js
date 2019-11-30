$(function(){
    $('#text-origin').on("input change keyup",function(){
        transform('#text-origin','#text-modified','#text-highlight',dict);
    });
});