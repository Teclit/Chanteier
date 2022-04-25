/**
 * Slide Sidebar Nav to the left 
 */
    const divSilderNavBar = document.querySelector("#slideNavBar");
    const hideSideNavBars = document.querySelectorAll(".hiddenMinMedia");
    const sidebarMenu     = document.querySelector("#sidebarMenu");
    const pagewrapper    = document.querySelector("#page-wrapper");

    var sidebarMenuWidth = sidebarMenu.offsetWidth;
    var pagewrapperWidth = pagewrapper.offsetWidth;  
    var containerWith = sidebarMenuWidth + pagewrapperWidth;

    const SliderBtn = divSilderNavBar.querySelector("#sliderBtn");

    
    SliderBtn.addEventListener("click", function () {
        if(containerWith > 1200) {
                laptopScreen();
        }else if(containerWith < 1200 && containerWith> 500) {
                tabletscreen();
        }
    })

    // function slide left
    function laptopScreen(){
        const getIconLeft       = SliderBtn.querySelector(".fa-circle-left");
            if(typeof(getIconLeft) != 'undefined' && getIconLeft != null){
                getIconLeft.classList.remove("fa-circle-left");
                getIconLeft.classList.add("fa-table-list");
            
                    sidebarMenu.style.width      = "6%";
                    pagewrapper.style.width      = "94%";
                    hideSideNavBars.forEach(hideSideNavBar => {
                        hideSideNavBar.style.display = "none";
                    });
            

            } else {
                const getIconBar = SliderBtn.querySelector(".fa-table-list");
                if(typeof(getIconBar) != 'undefined' && getIconBar != null){
                    if(containerWith > 1200) {
                        getIconBar.classList.remove("fa-table-list");
                        getIconBar.classList.add("fa-circle-left");
                        window.location.reload();
                    }
                }
            }
    }

    // function slide right
    function  tabletscreen(){  
        const getIconBarR = SliderBtn.querySelector(".fa-circle-left");
        if(typeof(getIconBarR) != 'undefined' && getIconBarR != null){
            
                getIconBarR.classList.remove("fa-circle-left");
                getIconBarR.classList.add("fa-table-list");
                sidebarMenu.style.width = "30%";
                pagewrapper.style.width = "70%";
                hideSideNavBars.forEach(hideSideNavBar => {
                    hideSideNavBar.style.display= "inline";
                });
        }else{

            const getIconBar = SliderBtn.querySelector(".fa-table-list");
            if(typeof(getIconBar) != 'undefined' && getIconBar != null){
                    getIconBar.classList.remove("fa-table-list");
                    getIconBar.classList.add("fa-circle-left");
                    window.location.reload();
            }
        }
    }