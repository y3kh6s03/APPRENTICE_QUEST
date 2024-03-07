class Person {
  name: string;
  age: number;
  constructor(name: string, age: number) {
    this.name = name
    this.age = age
  }
}
const persons: object[] = []
for (let i: number = 0; i < 5; i++) {
  persons[i]=new Person(`yosu ${i}`, i);
}

console.log(persons);