let email = "eloavasconcelos.09.vm@gmail.com";
console.log(email);

let name = "André";
let surname = "CUNHA";

//concatenação de valores
//console.log(name + " " + surname);

// o espaço conta
// procurando a letra de acordo com posição na string
//console.log(name[0]);
//console.log(name[3]);
//console.log(name[2]);
//console.log(name[4]);

//length para verificar a quantidade de letras
console.log(name.length);

let fullName = name + " " + surname;
//console.log(fullName);

//console.log(fullName.length);

// Métodos

// Colocar em letra maiuscula
//let nameUpper = name.toUpperCase();
//console.log(nameUpper, name);

// Colocar em minuscula
//let surnameLower = surname.toLowerCase();
//console.log(surnameLower);

// Outro método
// Posição do caractere
let index = email.indexOf("@");
console.log(index);

// lastindexOf vai informar a posição de uma letra especifica, irá mostrar a posição da último letra 'o'

//let lastIndexOf = email.lastIndexOf("o");
//console.log(lastIndexOf);

// Método Slice = fatiar/cortar um pedaço de uma string, é preciso mostrar a posição de inicio e a final
let emailSlice = email.slice(0, 15);
console.log(emailSlice);

// Replace =Substituir uma string por outra
let emailReplace = email.replace("eloavasconcelos", " Eloáaaa ");
console.log(emailReplace);

// Numbers

const num1 = 10;
const num2 = 2;
const num3 = 3;

// *=potencia

//const result = num1 / num2;
//console.log(result);

//Resto da divisão
const reminder = num1 % num3;
console.log(reminder);

// ordem das operações
//const crazyOperation = 5 * (10 - 3) ** 2;
//console.log(crazyOperation);

// decremento e incremento

// uma constante não pode alterar
//const postLikes = 100;
//postLikes = postLikes + 1;
//console.log(postLikes);

let postLikes = 100;
// Forma inteira
//postLikes = postLikes + 1;

//Forma Abreviada
postLikes++;
console.log(postLikes);

// abreviada

// adicionando 10 na variavel
postLikes += 10;
console.log(postLikes);

postLikes *= 2;
console.log(postLikes);
