let app = require("express")();
app.listen(3000);
console.log("Servern körs på port 3000");

// börja med att returnera ett hårdkodat objekt
let users = [
  {
    id: 0,
    firstname: "Holger",
    lastname: "Rosencrantz",
  },
  {
    id: 1,
    firstname: "Kalle",
    lastname: "Anka",
  },
];

app.get("/", function (req, res) {
  res.sendFile(__dirname + "/dokumentation.html");
});

app.get("/users", function (req, res) {
  res.send(users);
});

// processa route-parametrar
app.get("/users/:id", function (req, res) {
  console.log(req.params);
  // processa route-parametrar på liknande sätt som ovan, dvs. filtrera vårt hårdkodade objekt
  for (let i = 0; i < users.length; i++) {
    // loopa genom fältet users
    if (users[i].id == req.params.id) {
      res.send(users[i]); // returnera user med rätt ID
      return; // avsluta funktionen
    }
  }
  res.sendStatus(404); // 404 = not found, om man inte har hittat någon matchning
});
