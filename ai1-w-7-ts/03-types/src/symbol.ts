function symbols() {
    let s1 = Symbol("a");
    let s2 = Symbol("a");
    console.log(s1 == s2);
    //--> false
    console.log(s1 === s2);
    //--> false

    let s3 : symbol = Symbol("b"); // OK!
    let s4 : symbol = Symbol("b"); // OK!

    // let s5 : unique symbol = Symbol("c");
    // TS1332: A variable whose type is a 'unique symbol' type must be 'const'.

    const s6 : unique symbol = Symbol("c"); // OK!
}
symbols();
