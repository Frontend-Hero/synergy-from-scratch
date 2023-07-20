/*************************************************************************
* Set Desktop / Mobile classes to body
*************************************************************************/

function setDesktopMobileClasses () {
    jQuery(window).on('load resize', function() {
        let width = jQuery(window).width();

        if(width < 1050) {
            document.body.classList.add('mobile-view');
            document.body.classList.remove('desktop-view');
        }
        else {
            document.body.classList.add('desktop-view');
            document.body.classList.remove('mobile-view');
        }

    });
}
setDesktopMobileClasses();


/*************************************************************************
* Toggle mobile primary nav 
*************************************************************************/

function toggleMobilePrimaryNav() 
{	
	const hamburger = document.getElementById('hamburger');
	hamburger.addEventListener('click', function() 
	{
		hamburger.classList.toggle('is-active');
		navIsToggled();
	}) 
}
toggleMobilePrimaryNav();


/*************************************************************************
* Toggle mobile primary nav
*************************************************************************/

function navIsToggled() {
    document.body.classList.toggle('nav-is-toggled');
}


/*************************************************************************
* Trigger search form in header
*************************************************************************/

function triggerSearchForm() 
{
    const searchTrigger = document.getElementById('search-trigger'); 
    const searchFormWrapper = document.getElementById('search-form-wrapper'); 
    const primaryNav = document.getElementById('primary-nav'); 
	const closeSearch = document.getElementById('close-search');
	
	/** 
	* Search trigger
	*/
    searchTrigger.addEventListener('click', function() {

		primaryNav.classList.add('inactive');
        searchFormWrapper.classList.add('active');

		setTimeout(function() {
            document.querySelector('#search').focus();
		}
		,250);
		
        let screenWidth;
        jQuery( window ).resize(function() 
        {	
            screenWidth = jQuery(window).width();

            if(screenWidth <= 500 && searchFormWrapper.classList.contains('active')) {
                fadeOutLogo();
            }
            else {
                fadeInLogo();
            }

        
        }).resize(); 
	});
	
	/** 
	* Close search
	*/
    closeSearch.addEventListener('click', function() {
		removeSearchFormRestoreNav();
		fadeInLogo();
	});
	
	/** 
	* Include escape key function
	*/
	hitEscapeKey();
		
}
triggerSearchForm();


/*************************************************************************
* Close search form and restore nav
*************************************************************************/

function removeSearchFormRestoreNav() 
{
	jQuery('#primary-nav').removeClass('inactive');
	jQuery('#search-form-wrapper').removeClass('active');
}


/*************************************************************************
* Fade out logo
*************************************************************************/

function fadeOutLogo() {
    document.querySelector('#header-primary .logo').classList.add('fade-out');
}


/*************************************************************************
* Fade in logo
*************************************************************************/

function fadeInLogo() {
	document.querySelector('#header-primary .logo').classList.remove('fade-out');
}


/*************************************************************************
* Toggle mobile primary nav sub menus  
*************************************************************************/

function toggleMobileSubMenus()
{
    const subMenus = document.querySelectorAll('ul.sub-menu');
    const ddArrows = document.querySelectorAll('span.dd-arrow');
    // const menuItemHasChildrenAll = document.querySelectorAll('li.menu-item-has-children');

    ddArrows.forEach(function(ddArrow) {
        ddArrow.addEventListener('click', function(e) {
            e.preventDefault(); 

            const ul = this.parentElement.nextElementSibling;
            const liHasChildren = this.parentElement.parentElement;

            if (!liHasChildren.classList.contains('active')) { 

                /* menuItemHasChildrenAll.forEach(function(menuItemHasChildren) {
                    menuItemHasChildren.classList.remove('active');
                }); */
                
                this.parentNode.parentNode.classList.add('active');
            } 
            else if (liHasChildren.classList.contains('active')) { 
                this.parentNode.parentNode.classList.remove('active');
            }
        });
    });
}
toggleMobileSubMenus();


/*************************************************************************
* Escape key
*************************************************************************/

function hitEscapeKey() 
{
	document.addEventListener('keydown', function(e) 
	{
		if(e.key === "Escape")
		{
			removeSearchFormRestoreNav();
            fadeInLogo();
		}
	});
} 
