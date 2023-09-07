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

//setInterval(horloge, 2000)

// je voudrait avoir un compte a reboursqui commence à 50
// Array = Tableau
// Type de variable qui est elle même un tableau 
var tab = [10, "bonjour", 7.5, null]
// cette variable est un tableau qui conient 4 valeurs dans l'ordre 
//10
//"bonjour"
// 7.5
// null
 console.log (tab[1]) // on affiche la valeurqui ce trouve à la position 1 ui est "bonjour"
 console.log (tab[3])
 // on affiche la valeur qui ce trouve à la position 3 qui est null
 //Je voudrait un tableau qui ce nomme Chmilblik qui comporte
 // 5 valeur de type string et 5 de valaur de type int ou float 
  var Chmilblik = ["courir", "sauter", "liberté", "jeter", "partir",12,34,78,99,65 ]
  console.log (Chmilblik)
  console.log (Chmilblik.length)

  //document.getElementById('animal').innerHTML = "autruche"
  let animal = "Autruche"
  let temp = ""  
  document.getElementById('animal').addEventListener('click', function() {
  temp = document.getElementById('animal').innerHTML 
  document.getElementById('animal').innerHTML = animal
  animal = temp })

  while(false) {} // Tandis que ce qu'il ce trouve dans les parentheses 
  // est vrai elle tourne

  for(var i=1; i <= 10; i++) {
  // je défini un vraiable i qui sincrémenter de 1 tout les tours de 
  // la boucle grace à i++
  //et je lui demande de tourner jusqu'à ce que i soit supérieur à 10
  console.log(i)
  }
  // la boucle tourne jusqu'à la taille du tableau 
  for(var i=0; i < Chmilblik.length; i++) {
    console.log(Chmilblik[i])
    if (i == 3){
      break
    }
  }
  do{
      console.log('Bonjour')
     // Elle s'éxecute une fois même si la condition est fausse 
     // Et elle continue si de s'éxecuter si la condition est vrai
  } while (false);
for (index in Chmilblik) {
  console.log(index)
}

// Tableau Associatif 
var tab_assoc = {"ami":"Chien", "cafe":"caféine" } 
for (index in tab_assoc) {
  console.log(index)
}

  for(var i=10; i >= 0; i--) {
   // console.log("Il reste " + i + "lignes à écrire")
  }
  // console.log("il reste ", i, "lignes à écrire")
  console.log(`Il reste ${i} ligne${i <= 1 ? '' : 's'} à écrire`)
  // ${i <= 1 ? '' : 's'} = condition ternaire sois si i=1 alord (?) je change rien sinon(:) je met S
  // i <= 1 ? '' : 's' 
  //Reviens à faire 
  //if (i <= 1) { // Si vrai
 //console.log('')
// } else { // Sinon faux
// console.log ('s')
//}
function diviseur (n) {
  var i = 2;
  var temp = '1';
  while (i <= n) {
    if (n % i ===0) {
      temp = temp + ', ' + i;
    }
    return temp
  }
}

for (let index =1; index <= 100; index++) {
  console.log(`Les diviseurs de ${index} sont: ${diviseur(index)}`)
}
