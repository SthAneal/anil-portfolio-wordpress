(function(){

    window.onload = (event)=>{
        // toggle the mobile view menu
        const mobileViewMenuBtn = document.getElementById('mobile-view-menu-btn');
        const webViewMenuWrapper = document.getElementById('web-view-menu-wrapper');

        const mainHeader = document.getElementById('main-header');
        const basicInfoWebView = document.getElementById('main-header-basic-info-web-view');
        const menuLogoContainerWebView = document.getElementById('menu-logo-container-web-view');

        const menuLogoMobileView = document.getElementById('menu-logo-mobile-view');

        mobileViewMenuBtn.addEventListener('click', ()=>{
            // toggle the menu btn
            mobileViewMenuBtn.classList.contains('open') ? 
            mobileViewMenuBtn.classList.remove('open') : 
            mobileViewMenuBtn.classList.add('open');


            // toggle the menu wrapper
            webViewMenuWrapper.classList.contains('open') ? 
            webViewMenuWrapper.classList.remove('open') : 
            webViewMenuWrapper.classList.add('open');
        })

        // to hide the main-header__basic-info
        document.addEventListener('scroll',()=>{
            if(window.scrollY >= 50){
                mainHeader.classList.add('main-header-fixed');
                basicInfoWebView.classList.add('hide-basic-info');
                menuLogoContainerWebView.classList.add('reduce-height');    
            }else{
                mainHeader.classList.remove('main-header-fixed');
                basicInfoWebView.classList.remove('hide-basic-info');   
                menuLogoContainerWebView.classList.remove('reduce-height');    
            }
        })

        window.onresize = (event)=>{
            // reset the initial state of menu wrapper
            webViewMenuWrapper.classList.remove('open');  

            // reset the initial state of menu btn
            mobileViewMenuBtn.classList.remove('open');
        }

        // to manipulate the hover effect in my project section
        // const projectsWrapper = document.querySelectorAll('.cus-port__project-item__image');
        // projectsWrapper.forEach(ele => {
        //     console.log(ele);

        //     ele.onpointerdown = (e)=>{
        //         ele.style.mixBlendMode = 'normal';
        //     }

        //     ele.onpointerup = (e)=>{
        //         ele.style.mixBlendMode = 'luminosity';
        //     }
        // });
    }

    
}());