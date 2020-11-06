function any() {
    let a : any = 5;
    let b : any = [" years"];
    let c : any = a + b;
    console.log(c);
    //--> 5 years

    let x = 5;
    let y = [" years"];
    // let z = x + y;
    //--> TS2365: Operator '+' cannot be applied
    //--> to types 'number' and 'string[]'.
}
any();
