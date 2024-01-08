console.log('Hello World');

const num_1 = 5;
const num_2 = 3;
let sum = num_1 + num_2;
let difference = num_1 - num_2;
console.log(sum, difference);

const greet = (name) => {
    console.log('Hello,' + name);
}
greet('Hikaru');

// 温度チェッカー
const checkTemperature = (t) => {
    if (t >= 30 && t <= 50) {
        console.log("Hot");
    } else if(t < 30 && t >= 15){
        console.log("Warm");
    } else if(t < 15){
        console.log("Cold");
    } else {
        console.log("-50 <= t <= 50 で引数を渡してください" )
    }
}

checkTemperature(100);

// 偶数チェッカー
const checkOddOrEven = (num) => {
    if (num % 2 === 0) {
        console.log("Even");
    } else {
        console.log("Odd" );
    }
}
checkOddOrEven(9);