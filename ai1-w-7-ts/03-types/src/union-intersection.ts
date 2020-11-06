function unionIntersection() {
    type Pupil = {
        firstName: string,
        lastName: string,
        age: number,
    };

    type Student = {
        firstName: string,
        lastName: string,
        index: number,
    }

    type Person = Pupil | Student; // Pupil fields, Student fields or both
    let person : Person;
    person = {firstName: "Artur", lastName: "Karczmarczyk", index: 3346} // OK!
    person = {firstName: "Artur", lastName: "Karczmarczyk", age: 33} // OK!
    person = {firstName: "Artur", lastName: "Karczmarczyk", age: 33, index: 3346} // OK!

    // person = {firstName: "Artur", lastName: "Karczmarczyk"}
    //  TS2322: Type '{ firstName: string; lastName: string; }' is not assignable to type 'Person'.
    //   Property 'index' is missing in type '{ firstName: string; lastName: string; }' but required in type 'Student'.

    type AgedPerson = Pupil & Student; // both Pupil and Student fields
    let agedPerson : AgedPerson;
    agedPerson = {firstName: "Artur", lastName: "Karczmarczyk", index: 3346, age: 33} // OK!

    // agedPerson = {firstName: "Artur", lastName: "Karczmarczyk", age: 33}
    // error TS2322: Type '{ firstName: string; lastName: string; age: number; }' is not assignable to type 'AgedPerson'.
    //   Property 'index' is missing in type '{ firstName: string; lastName: string; age: number; }'
    //   but required in type 'Student'.

    // agedPerson = {firstName: "Artur", lastName: "Karczmarczyk", index: 3346}
    // TS2322: Type '{ firstName: string; lastName: string; age: number; }' is not assignable to type 'AgedPerson'.
    //   Property 'index' is missing in type '{ firstName: string; lastName: string; age: number; }'
    //   but required in type 'Student'.
}
unionIntersection();
