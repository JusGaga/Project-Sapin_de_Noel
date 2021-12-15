let i = 0;
let form = document.querySelector('#inForm')
let pseudo = document.querySelector('#Pseudo')
let lutin = document.querySelector('#nbrUsers')
let obj = [];



form.addEventListener("submit",e => {
    e.preventDefault();
    let a = pseudo.value;
    if (a !== ""){
        obj.push({id:i, name:a})
        i++;
    }
    console.log(obj)
    lutin.innerHTML = obj.length
})



