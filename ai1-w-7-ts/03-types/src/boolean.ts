function boolean() {
    let boolImplicit1 = true;
    boolImplicit1 = false; // OK!

    var boolImplicit2 = false;
    boolImplicit2 = true; // OK!

    const trueImplicit = true;
    // trueImplicit = false;
    // TS2588: Cannot assign to 'trueImplicit'
    //         because it is a constant.

    const falseImplicit = false;
    // falseImplicit = true;
    // TS2588: Cannot assign to 'falseImplicit'
    //         because it is a constant.

    let boolExplicit: boolean = true;
    boolExplicit = false; // OK!

    let trueExplicit: true = true;
    // trueExplicit = false;
    // TS2322: Type 'false' is not assignable
    //         to type 'true'.

    let falseExplicit: false = false;
    // falseExplicit = true;
    // TS2322: Type 'true' is not assignable
    //         to type 'false'.
}
boolean();
