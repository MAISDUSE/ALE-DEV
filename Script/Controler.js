var controler = {};

controler.page = 0;

controler.getATMUser = function(){
    return model.getUserFromCookie();
}

controler.saveATMUser = function(user){
    model.saveUserInCookie(user);
}

controler.loadActu = function(){
    var liste = model.recupActu(0 + (10 * controler.page),10 + (10 * controler.page));
    controler.page++;
    view.affichageActualites(liste);
}
