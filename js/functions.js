
/*************************************************************************
* Hamburger 
*************************************************************************/

function mobileNav() 
{	
	const hamburger = document.getElementById('hamburger');
	hamburger.addEventListener('click', function() 
	{
		hamburger.classList.toggle('is-active');
		document.body.classList.toggle('nav-is-toggled');
	}) 
}
	


/*************************************************************************
* Trigger search form in header
*************************************************************************/

function triggerSearchForm() 
{
	const searchTrigger = jQuery('#search-trigger');
	const searchFormWrapper = jQuery('#search-form-wrapper');
	const primaryNav = jQuery('#primary-nav');
	const closeSearch = jQuery('.close-search');
	
	/** 
	* Search trigger
	*/
	searchTrigger.click(function()
	{
		primaryNav.addClass('inactive');
		searchFormWrapper.addClass('active');
		setTimeout(function()
		{
			searchFormWrapper.find('#search').focus();
		}
		,250);
		
        let screenWidth;
        jQuery( window ).resize(function() 
        {	
            screenWidth = jQuery( window ).width();

            if(screenWidth <= 500 && searchFormWrapper.hasClass('active')) 
            {
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
	closeSearch.click(function()
	{
		removeSearchFormRestoreNav();
		fadeInLogo();
	});
	
	/** 
	* Include escape key function
	*/
	hitEscapeKey();
		
}


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

function fadeOutLogo()
{
	jQuery('#header-primary .logo').addClass('fade-out');
}
/*************************************************************************
* Fade in logo
*************************************************************************/

function fadeInLogo()
{
	jQuery('#header-primary .logo').removeClass('fade-out');
}



/*************************************************************************
* Escape key
*************************************************************************/

function hitEscapeKey() 
{
	document.addEventListener('keydown', function(e) 
	{
		if(e.keyCode == 27)
		{
			removeSearchFormRestoreNav();
		}
	});
}