<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/mediaQuery.css">
    
    <title></title>
</head>
<body>
    <div id="wrapper" class="page-conatiner">
        <div  id="sidebarMenu" class="navbar navbar-default-sidebar" role="navigation">
            <div class="header">
                <div class="logo">
                    <img  class="logoshape" src="images/logoshape.png" alt="logoshape">
                    <img class="logoText hiddenMinMedia" src="images/logotext.png" alt="logotext">
                </div>

                <div class="topBarIcon" id="topBarIcon"><i class="fa-solid fa-bars"></i></div>
            </div>
            
            <div class="dropdown" id="dropdownUser">
                <button  class="dropbtn" id="dropbtn">
                    <i class="fa-solid fa-circle-user  mr-s showMinMedia"></i> <span class="hiddenMinMedia">Guillaume ROBILLI..</span> <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul id="userDropList" class="dropdown-content">
                    <li><a href="#"><i class="fa-solid fa-gauge showMinMedia mr-m"></i><span class="hiddenMinMedia">compte</span></a></span></li>
                    <li><a href="#"><i class="fa-solid fa-address-card  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Information</span></a></span></li>
                    <li><a href="#"><i class="fa-solid fa-image  showMinMedia mr-m"></i><span class="hiddenMinMedia">Modifier ma photo</span></a></span></li>
                    <li><a href="#"><i class="fa-solid fa-user-secret  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Identifiants</span></a></span></li>
                    <li><a href="#"><i class="fa-solid fa-comments   showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Notifications</span></a></span></li>
                    <li><a href="#"><i class="fa-solid fa-circle-user  showMinMedia  mr-m"></i><span class="hiddenMinMedia">Mes critère</span></a></span></li>
                    <li><a href="#"><i class="fa-solid fa-power-off   showMinMedia mr-m"></i><span class="hiddenMinMedia">se déconnecter</span></a></span></li>

                </ul>
            </div>
            
            
            <div class="sidebarMenuContainer" id="sidebarMenuContainer">
                <ul class="sidebarMenuList" id="sidebarMenuList">
                    <h5 class="hiddenMinMedia"> --- Mon Reporting</h5>
                    <li><a><i class="fa-solid fa-gauge  showMinMedia mr-m"></i><span class="hiddenMinMedia">Tableau de beaurd</a></span></li>
                    <li><a><i class="fa-solid fa-address-book showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Prospects</a></span></li>
                    <li><a><i class="fa-solid fa-download showMinMedia mr-m"></i><span class="hiddenMinMedia">Téléchargment</a></span></li>
                    <li><a><i class="fa-solid fa-phone  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Appels</a></span></li>
                    <li><a><i class="fa-solid fa-calendar-check showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes RDVs</a></span></li>
                    <li><a> <i class="fa-solid fa-calendar-days showMinMedia mr-m"></i><span class="hiddenMinMedia">Mon Agenda</a></span></li>
                
                <h5 class="hiddenMinMedia"> --- Commades</h5>
                    <li><a><i class="fa-solid fa-file-lines  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Commandes</a></span></li>
                    <li><a><i class="fa-solid fa-file  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes devis</a></span></li>
                    <li><a><i class="fa-solid fa-file-lines  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes moyens de paiement</a></span></li>
                    <li><a><i class="fa-solid fa-envelope showMinMedia mr-m"></i><span class="hiddenMinMedia">Messagerie</a></span></li>

                <h5 class="hiddenMinMedia"> --- MarketPlace</h5>
                    <li><a><i class="fa-solid fa-gavel showMinMedia mr-m"></i><span class="hiddenMinMedia">Lead à l'unité <span class="tc-danger ml-s">NEW</span></a></span></li>
                    <li><a><i class="fa-solid fa-calendar-days showMinMedia mr-m"></i><span class="hiddenMinMedia">Rendez-Vous</a></span></li>
                    <li><a><i class="fa-solid fa-cart-arrow-down showMinMedia mr-m"></i><span class="hiddenMinMedia">Mon panier</a></span></li>
                    <li><a><i class="fa-solid fa-credit-card showMinMedia mr-m" ></i><span class="hiddenMinMedia">Pack Crédits</a></span></li>
            
                <h5 class="hiddenMinMedia"> --- Facturation</h5>
                    <li><a><i class="fa-solid fa-file-pdf showMinMedia mr-m"></i><span class="hiddenMinMedia">Factures</a></span></li>
                    <li><a><i class="fa-solid fa-credit-card showMinMedia mr-m" ></i><span class="hiddenMinMedia">Transactions</a></span></li>
                    <li><a><i class="fa-solid fa-cart-shopping showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes achats</a></span></li>

                <h5 class="hiddenMinMedia"> --- Collaborateurs</h5>
                    <li><a><i class="fa-solid fa-users showMinMedia mr-m"></i><span class="hiddenMinMedia">Collaborateurs</a></span></li>
                    <li><a><i class="fa-solid fa-gears showMinMedia mr-m"></i><span class="hiddenMinMedia">Restrictions</a></span></li>
                    <li><a><i class="fa-solid fa-share-nodes showMinMedia mr-m"></i><span class="hiddenMinMedia">Invitation</a></span></li>
                    
                </ul>
                
                
            </div>
        </div>
        <!-- Start page-wrapper --> 
        <div id="page-wrapper" class="page-content">
            <nav class="navbar navbar-default">
                <ul class="defaultLeftMenu" id="defaultLeftMenu">
                    <li class="mr-s"><a href="#">Espace Pro</a></li>
                    <li><a href="#">Leads à L'unité</a></li>
                    <li class="sliderSidebar" id="slideNavBar">
                        <button id="sliderBtn" class="sliderBtn">
                            <i class="fa-solid fa-circle-left"></i>
                            <!-- <i class="fa-solid fa-table-list"></i> -->
                            <!-- <i class="fa-solid fa-sidebar"></i> -->
                        </button>
                    </li>
                    <li><a href="#"><i class="fa-solid fa-headset l mr-s"></i>0615085609 </a></li>
                </ul>

                <div class="defaultRightMenu">
                    <div><a href="#"><i class="fa-solid  fa-envelope"></i><span class="ml-s">0</span></a></div>  
                    <div><a href="#"><i class="fa-solid fa-message  "></i><span class="ml-s">0</span></a></div> 
                    <div><a href="#"><i class="fa-solid fa-cart-shopping "></i><span> Prospects</span></a></div> 

                    <div class="dropdownmenutop">
                        <button class="navTopdropBtn" id="navTopdropBtn">
                            <i class="fa-solid fa-circle-user  mr-s "></i> 
                            <span class="hiddenMinMedia">Guillaume ROBILLI..</span> 
                            <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <ul id="usertopDropList" class="dropdown-contentmenutop">
                            <li><a href="#"><i class="fa-solid fa-gauge showMinMedia mr-m"></i><span class="hiddenMinMedia">compte</span></a></span></li>
                            <li><a href="#"><i class="fa-solid fa-address-card  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Information</span></a></span></li>
                            <li><a href="#"><i class="fa-solid fa-image  showMinMedia mr-m"></i><span class="hiddenMinMedia">Modifier ma photo</span></a></span></li>
                            <li><a href="#"><i class="fa-solid fa-user-secret  showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Identifiants</span></a></span></li>
                            <li><a href="#"><i class="fa-solid fa-comments   showMinMedia mr-m"></i><span class="hiddenMinMedia">Mes Notifications</span></a></span></li>
                            <li><a href="#"><i class="fa-solid fa-circle-user  showMinMedia  mr-m"></i><span class="hiddenMinMedia">Mes critère</span></a></span></li>
                            <li><a href="#"><i class="fa-solid fa-power-off   showMinMedia mr-m"></i><span class="hiddenMinMedia">se déconnecter</span></a></span></li>
        
                        </ul>
                    </div>
                    <div><a href="#"><i class="fa-solid fa-power-off "></i> </a></div>

                </div>

            </nav>
            <!-- End Nabar Defaut -->