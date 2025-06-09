 let current=0;
        
        function updateslider(){
           const slider=document.getElementById("slider");
            const slidewidth=document.getElementById("slider").clientWidth;
            slider.style.transform=(slidewidth<1500)?`translateX(-${current*slidewidth}px)`:`translateX(-${current*1470}px)`;
        }
        
        document.getElementById("left").addEventListener('click',()=>{
            if(current>0){
                current--;
                updateslider();
            }
        })

        document.getElementById("right").addEventListener('click',()=>{
            const total=6;
            console.log(total);
            if(current<total-1){
                current++;
                updateslider();

            }
        })
        window.addEventListener("resize",updateslider);