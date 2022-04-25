/************************************Dropdown*********************************************************************/  

/**
 * DropDown User Nav sidebar Menue 
 */
    const dropBtn = document.querySelector("#dropbtn");
    const dropMenu = document.querySelector("#userDropList");
    
    dropBtn.addEventListener("click", function () {
        dropMenu.classList.toggle("show");
    });

/**
 * DropDown User Top Nav Menue 
 */
    const dropTopBtn = document.querySelector("#navTopdropBtn");
    const dropTopMenu = document.querySelector("#usertopDropList");
    dropTopBtn.addEventListener("click", function () {
        dropTopMenu.classList.toggle("dropdown-contentmenutopShow");
    });

    
  /**********************************Hover***********************************************************************/  

/**
 * Sidebar sidebar  Nav Menu mouse hover 
 */
    const SidebarMenus = document.querySelectorAll("#sidebarMenuList li");
    for (const SidebarMenu of SidebarMenus) {
        SidebarMenu.addEventListener("mouseover", function () {
            const spanText = SidebarMenu.querySelector(".hiddenMinMedia");
            spanText.classList.remove("hiddenMinMedia");
        })
    
        SidebarMenu.addEventListener("mouseout", function () {
            const spanText = SidebarMenu.querySelector("span");
            spanText.classList.toggle("hiddenMinMedia");
        })
    }


/**
 * Sidebar sidebar Dropdown user Menu mouse hover 
 */
    const SidebarUserMenus = document.querySelectorAll("#userDropList li");
    for (const SidebarUserMenu of SidebarUserMenus) {
        SidebarUserMenu.addEventListener("mouseover", function () {
            const spanText = SidebarUserMenu.querySelector(".hiddenMinMedia");
            spanText.classList.remove("hiddenMinMedia");
        })

        SidebarUserMenu.addEventListener("mouseout", function () {
            const spanText = SidebarUserMenu.querySelector("span");
            spanText.classList.toggle("hiddenMinMedia");
        })
    }
    
/**
 * Sidebar sidebar  Top Navbar Menu mouse hover 
 */
    const SidebarTopMenus = document.querySelectorAll("#usertopDropList li");
    for (const SiidebarTopMenu of SidebarTopMenus) {
        SiidebarTopMenu.addEventListener("mouseover", function () {
            const spanText = SiidebarTopMenu.querySelector(".hiddenMinMedia");
            spanText.classList.remove("hiddenMinMedia");
        })
    
        SiidebarTopMenu.addEventListener("mouseout", function () {
            const spanText = SiidebarTopMenu.querySelector("span");
            spanText.classList.toggle("hiddenMinMedia");
        })
    }


/*********************************************************************************************************/  
/**
 * Mobile Responsive
 */

        const BarIconDrop   = document.querySelector("#topBarIcon");
        const userDropMenu =  document.querySelector("#dropdownUser")
        const sideBarMenu  =  document.querySelector("#sidebarMenuContainer ") 
        BarIconDrop.classList.add('topBarIconColapse');

        BarIconDrop.addEventListener("dblclick", function () {
                userDropMenu.style.display = "inline";
                sideBarMenu.style.display  = "inline"
                
        });

        BarIconDrop.addEventListener("click", function () {
            userDropMenu.style.display = "none";
            sideBarMenu.style.display  = "none"
        });


        


    