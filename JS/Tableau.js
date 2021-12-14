let tableau = document.querySelector("#tableau");
let lutin = document.querySelector("#nbrUsers");
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
let i = 1;
function defTr() {
  user.forEach((v) => {
    let tr = document.createElement("tr");
    tr.innerHTML = `<td class="col-4">${v.id}</td>
<td class="col-4">${v.name}<td/>
<button id="${i}" class="btn" onclick="SuppList(this.id)">❌</button>`;
    i++;
    tableau.appendChild(tr);
  });
}

function suppChild(parent) {
  while (parent.firstChild) {
    parent.removeChild(parent.firstChild);
  }
}

function SuppList(id) {
  user.find((e, i) => {
    if (i !== user.length) {
      if (String(e.name) === tableau.children[id - 1].children[1].textContent) {
        user.splice(i, 1);
      }
    }
  });
  lutin.innerHTML = user.length;
  suppChild(tableau);
  i = 1;
  defTr();
}
lutin.innerHTML = user.length;
defTr();
