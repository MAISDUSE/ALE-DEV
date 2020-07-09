var controler = {};

controler.init = function(){
    view.initHeader();
    view.initFooter();
}

controler.getATMUser = function(){
    return model.getUserFromCookie();
}

controler.saveATMUser = function(user){
    model.saveUserInCookie(user);
}