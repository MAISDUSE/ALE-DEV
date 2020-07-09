var view = {};

view.initHeader = function(){
    $("header").load("../View/Design/Header.html");
    view.verifUtilisateur();
}

view.initFooter = function(){
    $("footer").load("../View/Design/Footer.html");
}

