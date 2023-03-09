import ReceptView from "./ReceptView.js";

class ReceptsView{
    constructor(tomb, szuloelem){
        console.log("ReceptsView HALI!");
        szuloelem.html(`
        <div id="receptek">
        </div>`)
        this.divElem = szuloelem.children("div:last-child");
        tomb.forEach(adat => {
            const adatom = new ReceptView(adat, this.divElem);
        });
    }
}

export default ReceptsView;