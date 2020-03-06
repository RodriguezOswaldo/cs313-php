exports.computeOperation = function(op, left, right) {
    op = op.toLowerCase();

    let result = 0;
    right = parseInt(right, 10);
    left = parseInt(left, 10);

    if(op == "+"){
        resutl = left + right;
    }else if(op == "-"){
        result = left - right;
    }else if(op == "*"){
        result = left * right;
    }else if(op == "/"){
        if(right !=0){
            result = left /right;
        }
    }else{
        result = -9999;
    }
    return result;
};