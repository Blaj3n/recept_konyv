import AdatFeldolgozModel from "../model/AdatFeldolgozModel.js";
import ReceptsView from "../view/ReceptsView.js";

class ReceptController{
    constructor(){
        console.log("ReceptController HALI!")
        
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel;

        this.vegpont = "/recepts";
        adatFeldolgozModel.adatBe(this.vegpont, this.receptAdatok);
    }
    receptAdatok(tomb){
        const szuloelem = $("article");
        new ReceptsView(tomb, szuloelem);
    }
}

export default ReceptController;