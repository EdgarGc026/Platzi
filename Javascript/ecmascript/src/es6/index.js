// usando emacscript6

// antes de:
function newFunction(name, age, country){
    var name = name || 'Edgar';
    var age = age || 23;
    var country = country || 'MX';

    console.log(name, age, country);
}

// ahora con e6
function nowFunction(name = 'edgar', age = 23, country = 'MX'){
    console.log(name, age, country);
}

nowFunction();
nowFunction('Mayolo', 23, 'Brasil');

let hello = 'hello';
let world = 'world';
let epicPhrase = hello + ' ' + world;
console.log(epicPhrase);

let epicPhrase2 = `${hello} ${world}`;
console.log(epicPhrase2);

let lorem = "Anita lava la tina\n"
+ "es una palabra palindromo.";

let lorem2 = `otra frase epica que necesitamos
Ahora es otra frase epica
`;

console.log(lorem);
console.log(lorem2);

let person = {
    'name': 'edgar',
    'age': 23,
    'country': 'MX'
}

console.log(person.name, person.age, person.country);

let {name,  country } = person;
console.log(name, country);

// operador de propagacion
let team1 = ['Edgar', 'Roberto', 'Fernando'];
let team2 = ['Luis', 'Ruso', 'Daniel'];

let fucho = ['Nermi', ...team1, ...team2];

console.log(fucho);

// let nueva forma para guardar datos en memoria


{
    var globalVar = 'Seras global';
}
console.log(globalVar);

{
    let globalLet = 'Global let';
    console.log(globalLet);
}

// 
const a = 'b';
a = 'a';
console.log(a);

// Arrow Functions,  Promesas y parametros en objetos
let name = 'Edgar';
let age = '23';

// es5
obj = {name: name, age: age};
// es6
obj2 = {name, age};
console.log(obj2);

const names = [
    {name: 'Edgar', age: 23},
    {name: 'Daniel', age: 22}
];

let listOfNames = names.map(function(item){
    console.log(item.name);
});

let listOfNames2 = names.map(item => console.log(item.name));

const listOfNames3 = (name, age, country) => {
    // ... bloque de codigo
}

const listOfNames4 = name =>{
    // ... bkoque de codigo
}

const square = num => num * num;

// promesas
const hellowPromise = () => {
    return new Promise(( resolve, reject)=>{
        if(false){
            resolve('Hey!');
        }else{
            reject('Ups!!');
        }
    })
}

hellowPromise()
    .then(response => console.log(response))
    .catch(error => console.log(error));

    // herencia
    class calculator{
        constructor(){
            this.valueA = 0;
            this.valueB = 0;
        }

        sum(valueA,valueB){
            this.valueA = valueA;
            this.valueB = valueB;

            return this.valueA + this.valueB;
        }
    } 

    const calc = new calculator();
    console.log(calc.sum(2,2));

    // trabajo con modulos
    import { hello } from './module';

    hello();

    // generators
    function* helloWorld(){
        if(true){
            yield 'Jelou, ';
        }
        if (true) {
            yield 'Gourld';
        }
    };

    const generatorHellow = helloWorld();
    console.log(generatorHellow.next().value);
    console.log(generatorHellow.next().value);
    console.log(generatorHellow.next().value);