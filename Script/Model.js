var model = {};

model.getUserFromCookie = function(){
    return JSON.parse(decodeURIComponent($.cookie("atmuser")));
}

model.saveUserInCookie = function(user){
    var cookie = encodeURIComponent(JSON.stringify(user));
    $.cookie("atmuser", cookie);
};

model.recupActu = function(start, end){
    
}