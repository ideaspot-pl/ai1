function arrays() {
    let numbers : number[];
    numbers = [5, 10];
    numbers.push(15);
    console.log(numbers);
    //--> [ 5, 10, 15 ]

    // numbers.push("not number");
    // TS2345: Argument of type 'string' is not
    // assignable to parameter of type 'number'.
}
arrays();
