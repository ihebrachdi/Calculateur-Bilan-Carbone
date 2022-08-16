
function CalculateResult(startId , rowNumber){
    for(let i = startId ; i < startId + rowNumber+1 ; i++){
        document.getElementById("l" + i.toString()).classList.remove("line-1");
    }
    let total = 0;    
    for( let i = startId ,j = startId ; i < startId +  rowNumber * 2 ; i += 2 ,j++){
        let res = document.getElementById(i.toString()).value * document.getElementById((i + 1).toString()).value ; 
        document.getElementById(j.toString() + 'r').innerText  = res;
        total +=res;  
       
    }
    document.getElementById((rowNumber+startId ).toString() + 'r').innerText = total;
    
}

let total1 = 0; 
let total2 = 0; 
function CalculateResult3(startId , rowNumber ,nbr = 2){
    for(let i = startId ; i < startId + rowNumber+1 ; i++){
        document.getElementById("l" + i.toString()).classList.remove("line-1");
    }
    let total = 0;    
    for( let i = startId ,j = startId ; i < startId +  rowNumber * 2 ; i += 2 ,j++){
        let res = document.getElementById(i.toString()).value * document.getElementById((i + 1).toString()).value ; 
        document.getElementById(j.toString() + 'r').innerText  = res;
        total +=res;  
       
    }
    document.getElementById((rowNumber+startId ).toString() + 'r').innerText = total;
    
    document.getElementById("lf").classList.remove("line-1");
    
    if(nbr == 1)
        total1 = total;
    else
        total2 = total;
    
    document.getElementById("rf").innerHTML = (parseFloat(total1) + parseFloat(total2)).toString();
    
}

function CalculateResultfinale(startId , rowNumber){
    for(let i = startId ; i < startId + rowNumber+1 ; i++){
        document.getElementById("l" + i.toString()).classList.remove("line-1");
    }
    let total = 0;    
    for( let i = startId ,j = startId ; i < startId +  rowNumber * 2 ; i += 2 ,j++){
        let res = document.getElementById(i.toString()).value * document.getElementById((i + 1).toString()).value ; 
        document.getElementById(j.toString() + 'r').innerText  = res;
        total +=res;  
       
    }
    document.getElementById((rowNumber+startId ).toString() + 'r').innerText = total;
    document.getElementById("lf").classList.remove("line-1");
    let totalres = document.getElementById("resId").value;
    
    document.getElementById("rf").innerHTML = (parseFloat(totalres) + total).toString();
    
}

function DeleteResult(startId , rowNumber){
    for( let i = startId ; i < startId  + rowNumber * 2 ; i += 2 ){
        document.getElementById(i.toString()).value = "" ;
        document.getElementById((i + 1).toString()).value = "" ;  
       
    }
    for(let i = startId ; i < startId +  rowNumber + 1 ; i++){
        document.getElementById(i.toString() + 'r').innerText  = "";
        document.getElementById("l" + i.toString()).classList.add("line-1");
    }
}

function DeleteResult3(startId , rowNumber , nbr = 2){
    for( let i = startId ; i < startId  + rowNumber * 2 ; i += 2 ){
        document.getElementById(i.toString()).value = "" ;
        document.getElementById((i + 1).toString()).value = "" ;  
       
    }
    for(let i = startId ; i < startId +  rowNumber + 1 ; i++){
        document.getElementById(i.toString() + 'r').innerText  = "";
        document.getElementById("l" + i.toString()).classList.add("line-1");
    }

    if(nbr == 1)
        total1 = 0;
    else
        total2 = 0;
}
function SumTotal(s1,n1,s2,n2){
    let totalRes = parseFloat(document.getElementById((s1+n1 ).toString() + 'r').innerText) + parseFloat(document.getElementById((s2+n2 ).toString() + 'r').innerText);
    document.getElementById("resId").value =parseFloat(document.getElementById("resId").value) + totalRes;
    console.log(totalRes);
}


function CalculateResult2(startId , rowNumber){
    for(let i = startId ; i < startId + rowNumber+1 ; i++){
        document.getElementById("l" + i.toString()).classList.remove("line-1");
    }
    let total = 0;    
    for( let i = startId ,j = startId ; i < startId +  rowNumber * 3 ; i += 3 ,j++){
        let res = document.getElementById(i.toString()).value * document.getElementById((i + 1).toString()).value * document.getElementById((i + 2).toString()).value; 
        document.getElementById(j.toString() + 'r').innerText  = res;
        total +=res;  
       
    }
    document.getElementById((rowNumber+startId ).toString() + 'r').innerText = total;

}

function DeleteResult2(startId , rowNumber){
    for( let i = startId ; i < startId  + rowNumber * 3 ; i += 3 ){
        document.getElementById(i.toString()).value = "" ;
        document.getElementById((i + 1).toString()).value = "" ;  
        document.getElementById((i + 2).toString()).value = "" ;  
       
    }
    for(let i = startId ; i < startId +  rowNumber + 1 ; i++){
        document.getElementById(i.toString() + 'r').innerText  = "";
        document.getElementById("l" + i.toString()).classList.add("line-1");
    }
}