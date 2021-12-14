let table = document.querySelector("#liste");
let kdo = document.querySelector("#CadeauCentre");
let lutin = document.querySelector("#nbrUsers")

let user = [
  {id: 1, name: "a"},
  {id: 2, name: "b"},
  {id: 3, name: "c"},
  {id: 4, name: "d"},
  {id: 5, name: "e"},
  {id: 6, name: "f"},
  {id: 7, name: "g"},
  {id: 8, name: "h"},
  {id: 9, name: "i"},
  {id: 10, name: "j"},
];

let array_nameReceveur = [];

let array_name = [];

function DefArray() {
  user.forEach((v) => {
    array_name.push(v.name);
    array_nameReceveur.push(v.name);
  });
}

function randomNumber(max) {
  return Math.floor(Math.random() * max);
}

function tiragePersonnes(ArrayName) {
  let Number = randomNumber(ArrayName.length);
  let Number2 = randomNumber(ArrayName.length);

  let donneur = ArrayName[Number];
  let receveur = array_nameReceveur[Number2];
  if (ArrayName.length !== 0) {
    if (donneur === receveur) {
      while (donneur === receveur) {
        receveur = array_nameReceveur[randomNumber(ArrayName.length)];
      }
    }

    let tr = document.createElement("tr");
    tr.innerHTML = `<li>${donneur} donne son cadeau à ${receveur} </li>`;
    table.appendChild(tr);

    array_nameReceveur.splice(Number2, 1);
    ArrayName.splice(Number, 1);
  }
}

kdo.addEventListener("click", (e) => {
  tiragePersonnes(array_name);
  document.querySelector("#result").style.display = "block";
  lutin.innerHTML = array_name.length
});

DefArray();
lutin.innerHTML = array_name.length


