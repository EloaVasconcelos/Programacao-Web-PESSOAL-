

/* criando array */

let heroes = ['Batman','Superman','Thor']
let heroesWoman = ['catWoman','SuperGirl']
//console.log(heroes)
//console.log(heroes[2])
heroes[2] = 'spider-man'
//console.log(heroes)
const ages = [21,32,38,45,32]
//console.log(ages)

const randomArray = ['José','Barbara', 17,16]
//console.log(randomArray)

//console.log(randomArray.length)

//console.log(heroes.length)


/*
para visualizar um iten específico:
console.log(heroes[2])
*/

/* criando um join */

/*
separado por virgula:
console.log(heroes.join())

separado por espaço:
console.log(heroes.join(', '))

separado por -:
console.log(heroes.join(' - '))
*/

//console.log(ages.indexOf(32))

const moreHeroes = heroes.concat(heroesWoman)
//console.log(moreHeroes)

//push adiciona
moreHeroes.push('Ciclops','Hulk')
//console.log(moreHeroes.join())

//pop elimina 
//console.log(moreHeroes.pop())


//console.log(moreHeroes.join())

let numbers
//console.log(numbers)
//console.log(numbers + 3)
// not a number - não é um número 


// null = 0 
let num = null
//console.log(num)
//console.log(num + 3)


  // AULA 4 - Boolean

let user = null 
user = 'Jubileu Silva'
//console.log(user)  

 // PARA LOCALIZAR - encontrou = true 
const email = 'Jubileu.Silva@gmail.com'
//const emailIncludes=email.includes('@')

// falsa - não encontrou 
const emailIncludes=email.includes('#')
//console.log(emailIncludes) 



//emailIncludes = email.includes('#')
//console.log(email.includes) 



let userNames = ['Enildo', 'André', 'Aline']
let nameIncludes = userNames.includes('Aline') //true
//console.log(nameIncludes) 
//console.log(userNames.includes('João'))  // false


// Verificações 
const age = 31
//console.log(age == 31) //true
//console.log(age !=45)  //true
//console.log(age <45)  // true
//console.log(age <= 31)  // true
//console.log(age >= 45)   // false
//console.log(age !=31)   // false


//

let userFace ='Luan'
//console.log(userFace == 'luan') 


userFace ='roger'
console.log(userFace > 'luan') // true

userFace ='roger'
console.log(userFace > 'enildo') // true

let crazyNumber='31'
console.log(crazyNumber == 31) // true

//=== Faz comparação 
console.log(crazyNumber === 31) //false 
console.log(crazyNumber !=31) //false 
console.log(crazyNumber !== 31) // true 


  // CONCATENOU 
//let score = '10'
//score += 12
//console.log(score) 


//CONVERSÃO 

let score = '10'
score =Number(score)+12
console.log(score) 































