
		//var elem = document.getElementById('rproduct');

document.getElementById('rproduct').addEventListener('click', function() {
      var divElem1 = document.getElementById('country'); 
	  var divElem2 = document.getElementById('year');
	  var divElem3 = document.getElementById('product');
	  
    if( this.checked){
        divElem1.style.display = 'block'  ;
		divElem2.style.display = 'block'  ;	
		divElem3.style.display = 'none'  ;		
    }
    else{
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'none'  ;
		divElem3.style.display = 'none'	;
    }
});	
	document.getElementById('ryear').addEventListener('click', function() {
      var divElem1 = document.getElementById('country'); 
	  var divElem2 = document.getElementById('year');
	  var divElem3 = document.getElementById('product');
	  
    if( this.checked){
        divElem1.style.display = 'block'  ;
		divElem2.style.display = 'none'  ;	
		divElem3.style.display = 'block'  ;		
    }
    else{
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'none'  ;
		divElem3.style.display = 'none'	;
    }

});
	document.getElementById('rcountry').addEventListener('click', function() {
      var divElem1 = document.getElementById('country'); 
	  var divElem2 = document.getElementById('year');
	  var divElem3 = document.getElementById('product');
	  
    if( this.checked){
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'block'  ;	
		divElem3.style.display = 'block'  ;		
    }
    else{
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'none'  ;
		divElem3.style.display = 'none'	;
    }

});

