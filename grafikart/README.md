localhost :
php -S localhost:8000

/**insertion d'un prompt dans une variable PHP **/

/\***\*\*\*\*\*\*\***\*\*\***\*\*\*\*\*\*\***/
/**\*\*\***coté JS:\***\*\*\*\*\*\***/
/\***\*\*\*\*\*\*\***\*\***\*\*\*\*\*\*\***/

```
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
```

/\***\*\*\*\*\*\*\***\*\*\***\*\*\*\*\*\*\***/
/**\*\*\***coté PHP:\***\*\*\*\*\***/
/\***\*\*\*\*\*\*\***\*\***\*\*\*\*\*\*\***/

```
            $jsData = json_decode(file_get_contents('php://input'), true);
            if ($jsData !== null){

                if ($jsData["valeur"] >= 10) {
                    echo 'gg tu a la moyenne';
                }else {
                    echo 'try again';
                }
            }
```
