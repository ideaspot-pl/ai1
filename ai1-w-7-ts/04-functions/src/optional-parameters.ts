function optionalParameters() {
    function printFullName(lastName: string, firstName: string, middleName?: string) {
        console.log(firstName + ' ' + (middleName ? (middleName + ' ') : '') + lastName);
    }

    printFullName("Allen", "Barry");
    //--> Barry Allen

    printFullName("Allen", "Barry", "Henry");
    //--> Barry Henry Allen
}
optionalParameters();
