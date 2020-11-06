function objects() {
    let obj1 : object = {
        name: "Artur"
    }
    // obj1.name = "Nope";
    // TS2339: Property 'name' does not exist on type 'object'.

    let obj2 = {
        name: "Artur"
    }
    obj2.name = "Other"; // OK!

    let obj3 : { name: string} = {
        name: "Artur"
    }
    obj3.name = "Other"; // OK!


    class Student {
        constructor(public firstName: string, public lastName: string) {
            // <public x> same as <this.x = x>
        }
    }

    let student : {firstName: string, lastName: string} = {
        firstName: "Artur",
        lastName: "Karczmarczyk"
    };
    student = new Student("John", "Smith"); // OK!

    let student2 : Student = {firstName: "Jack", lastName: "Snack"}
    student2 = student; // OK!



    let dimensions : {x: number, y: number};

    // dimensions = {};
    // TS2739: Type '{}' is missing the following properties
    //         from type '{ x: number; y: number; }': x, y

    // dimensions = {x: 5}
    // TS2741: Property 'y' is missing in type '{ x: number; }'
    //         but required in type '{ x: number; y: number; }'.

    dimensions = {x: 5, y: 10}; // OK!

    // dimensions = {x: 5, y: 10, z: 15};
    // TS2322: Type '{ x: number; y: number; z: number; }' is not
    //         assignable to type '{ x: number; y: number; }'.


    let flatArea : {
        kitchen: number,
        toilet?: number,
        room: number,
    };
    flatArea = {kitchen: 8, toilet: 4, room: 16}

    let biggerFlatArea : {
        kitchen: number,
        [key: string]: number, // can also be [key: number]
    };
    biggerFlatArea = {kitchen: 8, toilet: 2, bathroom: 6,
        "living room": 16, bedroom: 10};


    let married : {
        readonly firstName: string,
        lastName: string,
    };
    married = {firstName: "Susan", lastName: "Smith"}
    married.lastName = "Blacksmith"; // OK!
    // married.firstName = "Kate";
    // TS2540: Cannot assign to 'firstName' because it is a read-only property.

    married = {firstName: "Kate", lastName: "Blacksmith"} // OK!
}
objects();
