const data = {
    frontend: 'Edgar',
    backend: 'Daniel',
    design: 'Ruben',
}

const entries = Object.entries(data);
console.log(entries);
console.log(entries.length);

// object values

const data = {
    frontend: 'Edgar',
    backend: 'Daniel',
    design: 'Ruben',
}

const values = Object.values(data);
console.log(values);
console.log(values.length);

// padding
const string = 'hello';
console.log(string.padStart(7,'hi'));
console.log(string.padEnd(12, '----'));
console.log('food'.padEnd(12, ' ----'));

const obj = {
    backend: 'Edgar',
}

const helloWorld = () => {
    return new Promise((resolve, reject) =>{
        (false) 
            ? setTimeout(() => resolve('Hello World!'), 3000)
            : reject(new Error('Test Error')) 
    });
}

const hellowAsync = async () =>{
    const hello = await helloWorld();
    console.log(hello);
}

hellowAsync();


// 

const anotherFunction = async () => {
    try{
        const hello = await helloWorld();
        console.log(hello);
    }catch(error){
        console.log(error);
    }
}

anotherFunction();