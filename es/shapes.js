;$(() => {
    const $w = $(window);
    const scene = document.getElementById('scene');

    if(scene) {
        const parallaxInstance = new Parallax(scene, {
        });
        
        function checkScreenWidth() {
            if($w.width() < 992) {
                parallaxInstance.disable();
            } else {
                parallaxInstance.enable();
            }
        }
    
        checkScreenWidth();
    
        
        $w.on('resize', () => {
            
            checkScreenWidth();
            
        });
    }
});