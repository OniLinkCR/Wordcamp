var idx = 0;
renderSlides(idx);
//change image background
setInterval( function () {
    var size = $('.slide').size();
    // console.log(size);
    
    if(idx < (size - 1)){
        idx++;
    }else{
        idx = 0;
    }
    //console.log('index', idx);
    
    renderSlides(idx);
    // console.log(arr[idx]);
}, 5000);




function renderSlides(index) {
    $('.slide').each( function(eleIdx) {
        
        
        if(idx !== eleIdx) {
            $(this).css('display', 'none');
        } else {
            //console.log('eleIdx: ', eleIdx);
            $(this).css('display', 'block');

        }
        
    });
}


