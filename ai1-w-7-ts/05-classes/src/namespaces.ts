namespace NamespaceA {
    export function myFunction() {
        console.log("Hello A");
    }
}

namespace NamespaceB {
    export function myFunction() {
        console.log("Hello B");
    }
}

NamespaceA.myFunction();
//--> Hello A
NamespaceB.myFunction();
//--> Hello B
