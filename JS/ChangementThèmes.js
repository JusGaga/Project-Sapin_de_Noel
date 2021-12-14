let sw = document.querySelector("#slider")
let css = document.querySelector("#themes")
let jour = 0;
sw.addEventListener("change",e=>{
    if(jour === 0){
        css.href = "../CSS/stylesJour.css"
        jour++;
    }else{
        css.href = "../CSS/stylesNuit.css"
        jour = 0;
    }
})