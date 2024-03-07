"use strict";
class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
}
const persons = [];
for (let i = 0; i < 5; i++) {
    persons[i] = new Person(`yosu ${i}`, i);
}
console.log(persons);
