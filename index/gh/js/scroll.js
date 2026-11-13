var anchors = [];
var currentAnchor = -1;
var isAnimating  = false;

$(function(){
    
    function updateAnchors() {
        anchors = [];
        $('.anchor').each(function(i, element){
            anchors.push( $(element).offset().top );
        });
        console.log(anchors)
    }
    
    $('body').on('mousewheel', function(e){
        e.preventDefault();
        e.stopPropagation();
        if( isAnimating ) {
            return false;
        }
        isAnimating  = true;
        // Increase or reset current anchor
        if( e.originalEvent.wheelDelta >= 0 ) {
            currentAnchor--;
        }else{
            currentAnchor++;
        }
        if( currentAnchor > (anchors.length - 1) 
           || currentAnchor < 0 ) {
            currentAnchor = 0;
        }
        isAnimating  = true;
        $('html, body').animate({
            scrollTop: parseInt( anchors[currentAnchor] )
        }, 500, 'swing', function(){
            isAnimating  = false;
        });
    });

    updateAnchors();   
    
});


const animItems = document.querySelectorAll('._anim-items')

if (animItems.length>0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(param){
        for (let index = 0; index <animItems.length;index++) {
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if (animItemHeight > window.innerHeight - animItemHeight / animStart) {
                animItemPoint = window.innerHeight - animItemHeight / animStart;
            }

            if((pageYOffset > animItemOffset -  animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
                animItem.classList.add('_active')  
                console.log("dsadasdsadf")
            } else{
                if (!animItem.classList.contains('_anim-no-hide')){
                    animItem.classList.remove('_active')  
                }
            }
        }
    }
    function offset(el) {
        const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }
}