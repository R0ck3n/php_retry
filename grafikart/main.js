const xhr = new XMLHttpRequest();
const donneeClient = prompt("Entrée une valeur :");

xhr.open("POST", "http://localhost:8000/", true);

xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function () {
  //Call a function when the state changes.
  if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
    console.log("OK");
  }
};

xhr.send(donneeClient);

console.log(donneeClient);
