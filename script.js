// let et var permet de dire que que je créer une 
// variable d'un nom souhaité
let Autruche = "Animal"
var Perche = "Poisson"
// j'ai défini des variables de type "string"
// (chaine de caractère)
let NombreStagiaire = 10
// j'ai défini une variable avec le nom NombreStagiaire
// Et je lui ai donné le nombre 10
// j'ai défini une variable de type int (Nombre Entier)
var heure = 14.31
// 'ai crér une variable avec le nom heure 
// je li donner la donnée 14.31
// j'ai défini une variable de type float/double
// (nombre à virgule)
let Allumer = true
// j'ai créer une variable avec le nom Allumer
// Et comme valeur je lui donner true  (vrai)
// le type de cette est boolean (true/false)
var Ventilo = null// j'ai créer une variable avec le nom Ventilo 
// A vec comme valeur null qui est rien du tout
// le type est null
let Phrase = "j'aime l' " + Autruche + "mais pas les " + Perche
// J'aime l'Animal mais pas les poisson
// J'ai concaténer les chaines de caractères
// et les variables
var calcul = heure + NombreStagiaire // / * - %
// 14.31 + 10

console.log(Phrase)
console.log(calcul)


// je créer une fonction qui se nomme horloge avec comme 
// paramètre temps
var temps = + 50
function horloge() {
  // Si temps est plus petit ou égale à 10 on éxécue l'addition
  // et le console .log
    if (temps > 0) { // <, >, <=, =>
    temps = temps -1

    //temps++ temps -=
    // j'additionne 1 à ma variable temps
    console.log(temps)
   }
    
} 

setInterval(horloge, 2000)
// je voudrait avoir un compte a reboursqui commence à 50

