function number() {
    let numberImplicit = 5;
    let numberExplicit : number = 5;

    const valueImplicit = 10;
    let valueExplicit : 10 = 10;

    console.log(numberExplicit < valueExplicit);
    //--> true

    numberImplicit = 10; // OK!
    numberExplicit = 10; // OK!

    // valueImplicit = 15;
    // TS2588: Cannot assign to 'valueImplicit'
    //         because it is a constant.

    // valueExplicit = 15;
    // TS2322: Type '15' is not assignable
    //         to type '10'.
}
number()
