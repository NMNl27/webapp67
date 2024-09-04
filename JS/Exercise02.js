const random_Number_In_Range = (min, max) => Math.random() * (max - min) + min;

const min = 1;
const max = 5;

const randomNuber = random_Number_In_Range(min, max);
console.log(randomNuber);