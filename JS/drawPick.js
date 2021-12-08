let array_nameReceveur = [];
let Utilisateurs = [
  {
    id: "1",
    name: "jean",
  },
  {
    id: "2",
    name: "pierre",
  },
  {
    id: "3",
    name: "michel",
  },
  {
    id: "4",
    name: "jack",
  },
  {
    id: "5",
    name: "bernard",
  },
  {
    id: "6",
    name: "giovanie",
  },
];

let array_name = [];

function DefArray() {
  Utilisateurs.forEach((v) => {
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

  while (Number === Number2) {
    Number2 = randomNumber(ArrayName.length);
  }

  let donneur = ArrayName[Number];
  let receveur = array_nameReceveur[Number2];

  array_nameReceveur.splice(Number2, 1);
  ArrayName.splice(Number, 1);
  // Ajouter ci dessous le code permettant d'afficher les réponses
}

DefArray()

console.log(array_name)
console.log(array_nameReceveur)

console.log(new Date("2021-12-10"))