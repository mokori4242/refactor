let defaultOwner = { firstName: "マーティン", lastName: "ファウラー" };
export function defaultOwner() { return defaultOwner; }
export function setDefaultOwner(arg) { defaultOwner = arg; }