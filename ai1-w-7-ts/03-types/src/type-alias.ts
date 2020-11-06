function typeAlias() {
    type Index = number;

    type Student = {
        firstName: string,
        lastName: string,
        index: Index,
    };

    let id1 : Index = 3346;
    let student1 : Student = {
        firstName: "Artur",
        lastName: "Karczmarczyk",
        index: id1,
    }

    let student2 : Student = {
        firstName : "Artur",
        lastName: "Karczmarczyk",
        index: 3346, // Index is an alias for number so number is OK!
    }
}
typeAlias();
