function enums() {
    enum StatusImplicit {
        New,
        InProgress,
        Done,
    }

    enum StatusExplicit {
        New = 0,
        InProgress = 1,
        Done = 2,
    }

    enum StatusText {
        New = "New",
        InProgress = "InProgress",
        Done = "Done",
    }

    console.log(StatusImplicit.New === StatusImplicit["New"]);
    //--> true

    // console.log(StatusImplicit.InProgress === StatusExplicit.InProgress);
    // TS2367: This condition will always return 'false' since the
    // types 'StatusImplicit' and 'StatusExplicit' have no overlap.

    console.log(StatusImplicit.Done === 2);
    //--> true

    console.log(StatusText.New === "New");
    //--> true
}
enums();
