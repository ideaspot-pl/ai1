// console.log(5 + [5]);
//--> Error:(1, 13) TS2365: Operator '+' cannot be applied to types 'number' and 'number[]'.

(5).toString() + [5].toString()
//--> 55
