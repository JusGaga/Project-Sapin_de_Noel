let tableau = document.querySelector("#tableau");
let lutin = document.querySelector("#nbrUsers");

fetch("./utilisateurs.php").then(res => {
  if (res.status === 200) {
    return res.json()
  }
}).then(value => {
  let array = value.list;
  let i = 1;
  array.forEach(v => {
    let tr = document.createElement("tr");
    tr.innerHTML = `<td class="col-4">${v.id}</td>
    <td class="col-4">${v.pseudo}<td/>
    <button id="${i}" class="btn" onclick="SuppList(this.id)">❌</button>`;
    i++;
    tableau.appendChild(tr);
  })
}).catch(err => {
  console.log(err)
})
//console.log(user)

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
