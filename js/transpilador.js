function transform(origin,destiny,highlight,dictonary){
    var texto = $(origin).val();
    var resultado = texto;
    var destaque = texto;
    dictonary.map(e => {
        if(texto.indexOf(e[0])>-1){
            resultado = resultado.replace(e[0],e[1]);
            destaque = destaque.replace(e[0],"<font color='#f00'>"+e[1]+"</font>");
        }
    })
    $(destiny).html(resultado);
    $(highlight).html(destaque);
}