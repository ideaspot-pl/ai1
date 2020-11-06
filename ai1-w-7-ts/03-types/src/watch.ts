function watch() {

    let firstName = "Artur";
    let lastName = "Karczmarczyk";

    let birthYear = 1986;

    let student = {
        name: firstName + " " + lastName,
        birthYear: birthYear,
    }

    let age = new Date().getFullYear() - student.birthYear;
    console.log(age);

}
watch();
