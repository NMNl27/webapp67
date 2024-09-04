/*const digitize = n => [...String{n}].mapi(i => parselnt(i));*/

/*const digitize = n => 
  Array.from(String(Math.abs(n))).map(char => parseInt(char, 10));

const number = 1230;
const digits = digitize(number);
console.log(digits);

/*const digitize = n => [...String(n)].map(Number);
const number = 1230;
const digits = digitize(number);
console.log(digits);*/

const digitize = n => [...String(n)].map(i => parseInt(i));

const number = 1230;
const digits = digitize(number);
console.log(digits); 
