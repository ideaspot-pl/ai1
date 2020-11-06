function strings()
{
    let strImplicit = 'implicit';
    let strExplicit : string = 'explicit';

    const textImplicit = 'implicit';
    let textExplicit : 'explicit' = 'explicit';

    strImplicit = 'other'; // OK!
    strExplicit = 'other'; // OK!

    // textImplicit = 'other';
    // TS2588: Cannot assign to 'textImplicit' because it is a constant.

    // textExplicit = 'other';
    // TS2322: Type '"other"' is not assignable to type '"explicit"'.
}
strings();
