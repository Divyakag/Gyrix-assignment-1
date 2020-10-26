class Operation {
    constructor()
      {     }
     even() {
                console.log("Even numbers are: ")
                for(let i=0;i<array.length;i++) {
                    if(array[i]%2==0)
                    //document.getElementById("demo").innerHTML= array[i];
                   
                    console.log(array[i])
                }
            }
     odd() {
                console.log("Odd numbers are:")
                for(let i=0;i<array.length;i++) {
                    if(array[i]%2!=0)
                    console.log(array[i])
                }
            }
     perfect(){
                console.log("Perfect numbers are: ")
                for(let i=0;i<array.length;i++) { 
                    var sum=0;
                    for(let j=1;j<=array[i]/2;j++) {
                            if(array[i]%j == 0)
                            sum = sum + j;
                        }
                        if(sum==array[i])
                    console.log(array[i]);
                  }
             }
    searchNo(number) {
                 for(let i=0;i<array.length;i++){
                    if(array[i]==number){
                    console.log("number is present " + number);
                    break;}
                    }
            }
}
 let array = [2,3,4,5,6,7,8,9,10,12,24,28,128,496];
 let operation=new Operation();
 operation.even();
 operation.odd();
 operation.perfect();
 operation.searchNo(24);