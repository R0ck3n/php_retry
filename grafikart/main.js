const url = "/";
const data = { valeur: prompt("saisir un chiffre") };

fetch(url, {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify(data),
})
  .then((response) => response.text())
  .then((data) => {
    const div = document.querySelector("div");
    div.innerHTML = data.split("head>")[2].split("  ")[6];
    console.log("Réponse du serveur :", data.split("head>")[2].split("  ")[6]);
  })
  .catch((error) => {
    console.error("Erreur :", error);
  });
