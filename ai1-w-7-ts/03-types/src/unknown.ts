function unknown() {
    let a: unknown = 5  // unknown - explicit
    let b = a === 10    // boolean - implicit
    // let c = a + 15      // Error TS2571: Object is of type 'unknown'.
    if (typeof a === 'number') {
        let d = a + 10  // number - implicit
        console.log(d);
        //--> 15
    }
}
unknown();
