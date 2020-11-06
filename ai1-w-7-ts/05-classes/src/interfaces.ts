function interfaces() {
    interface HasNameInterface {
        firstName: string
        lastName: string
    }

    interface HasAgeInterface {
        age: number
    }

    // class Pupil implements HasNameInterface, HasAgeInterface {}
    // TS2420: Class 'Pupil' incorrectly implements interface 'HasNameInterface'.
    //   Type 'Pupil' is missing the following properties from type
    //   'HasNameInterface': firstName, lastName

    class Pupil implements HasNameInterface, HasAgeInterface {
        age: number;
        firstName: string;
        lastName: string;
        constructor(firstName: string, lastName: string, age: number) {
            this.firstName = firstName;
            this.lastName = lastName;
            this.age = age;
        }
    }

    class Student implements HasNameInterface, HasAgeInterface {
        constructor(public firstName: string, public lastName : string, public age : number) {
        }
    }
}
interfaces();
