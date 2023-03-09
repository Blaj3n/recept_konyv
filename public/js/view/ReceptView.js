class ReceptView {
    #elem;
    constructor(elem, szuloelem){
        console.log("ReceptView HALI!");
        this.#elem = elem;
        szuloelem.append(`
        <div class="recept">
            <h2>${elem.nev}</h2>
            <h2>${elem.kat_id}</h2>
            <img src="${elem.kep_eleresi_ut}">
            <h2>${elem.leiras}</h2>
        </div>
        `)
    }
}

export default ReceptView;