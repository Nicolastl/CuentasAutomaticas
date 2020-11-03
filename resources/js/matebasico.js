function add(x1, x2) {
    return x1+x2;
}
function substract(x1, x2) {
    return x1-x2;
}
function div(x1, x2) {
    if(x2==0){
        console.log('no');
    }else{
        return x1/x2
    }
}
exports.div = div;
exports.substract = substract;
exports.add = add;
