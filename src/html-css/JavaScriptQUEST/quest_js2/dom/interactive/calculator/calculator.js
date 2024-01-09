// ユーザーが数字ボタンを押すと、その数字が表示エリアに表示されます
const display = document.querySelector("#display");
const numButtons = document.querySelectorAll(".digit");
const opeButtons = document.querySelectorAll(".operator");
const equalsButton = document.querySelector("#equals");
const clearButton = document.querySelector("#clear");

let firstVal = "";
let secondVal = "";
let operator = "";

numButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        if (operator === "") {
            firstVal += button.innerHTML;
            display.innerHTML = firstVal;
        } else {
            display.innerHTML = "";
            secondVal += button.innerHTML;
            display.innerHTML = secondVal;
        }
    })
})
opeButtons.forEach((opeButton) => {
    opeButton.addEventListener("click", (e) => {
        e.preventDefault();
        operator = opeButton.innerHTML;
        display.innerHTML = firstVal + operator;
    })
})

equalsButton.addEventListener("click", (e) => {
    e.preventDefault();
    let result;
    firstVal = Number(firstVal);
    secondVal = Number(secondVal);
    if(operator === "+"){
        result = firstVal + secondVal;
    }else if(operator === "-"){
        result = firstVal - secondVal;
    }else if(operator === "/"){
        result = firstVal / secondVal;
    }else if(operator === "*"){
        result = firstVal * secondVal;
    }
    display.innerHTML = result;
    firstVal = "";
    secondVal = "";
    operator = "";
})

clearButton.addEventListener("click", (e)=>{
    e.preventDefault();
    firstVal = "";
    secondVal = "";
    operator = "";
    display.innerHTML = "";
})

