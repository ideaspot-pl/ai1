function tuples() {
    let vector2 : [number, number];
    vector2 = [5, 10];

    let vector3 : [number, number, number];
    vector3 = [5, 10, 15];

    let vector : [number, number, number?];
    vector = vector2;
    vector = vector3;

    // vector3 = vector;
    // TS2322: Type '[number, number, (number | undefined)?]'
    // is not assignable to type '[number, number, number]'.

    let door : [string, ...string[]]; // at least 1 door
    door = ['front door'];
    door = ['front door', 'back door'];
    // door = [];
    // TS2322: Type '[]' is not assignable to type '[string, ...string[]]'.
}
tuples();
