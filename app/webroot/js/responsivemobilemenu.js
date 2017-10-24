/*

Responsive Mobile Menu v1.0
Plugin URI: responsivemobilemenu.com

Author: Sergio Vitov
Author URI: http://xmacros.com

License: CC BY 3.0 http://creativecommons.org/licenses/by/3.0/

*/
var $j = jQuery.noConflict();

$j( document ).ready(function() {
     
    var elementosMenu = localStorage.getItem("menuAplicacion") 
	
	var parsedMenu = JSON.parse(elementosMenu);	   
	ulMenu = document.getElementById("ulMenu");	
	
	for(i=0; i < parsedMenu.length; i++){
        
        var a = document.createElement('a');
		var linkText = document.createTextNode(parsedMenu[i].menu);
		a.appendChild(linkText);		
		a.href = parsedMenu[i].forward;
		
        var li = document.createElement('li');	    
		li.appendChild(a); 
        
		ulMenu.appendChild(li);
		
	}
	
});


function responsiveMobileMenu() {	
		$j('.rmm').each(function() {
			
			
			
			$j(this).children('ul').addClass('rmm-main-list');	// mark main menu list
			
			
			var $jstyle = $j(this).attr('data-menu-style');	// get menu style
				if ( typeof $jstyle == 'undefined' ||  $jstyle == false )
					{
						$j(this).addClass('graphite'); // set graphite style if style is not defined
					}
				else {
						$j(this).addClass($jstyle);
					}
					
					
			/* 	width of menu list (non-toggled) */
			
			var $jwidth = 0;
				$j(this).find('ul li').each(function() {
					$jwidth += $j(this).outerWidth();
				});
				
			// if modern browser
			
			if ($j.support.leadingWhitespace) {
				$j(this).css('max-width' , $jwidth*1.05+'px');
			}
			// 
			else {
				$j(this).css('width' , $jwidth*1.05+'px');
			}
		
	 	});
}
function getMobileMenu() {

	/* 	build toggled dropdown menu list */
	
	$j('.rmm').each(function() {	
				var menutitle = $j(this).attr("data-menu-title");
				if ( menutitle == "" ) {
					menutitle = "Menu";
				}
				else if ( menutitle == undefined ) {
					menutitle = "Menu";
				}
				var $jmenulist = $j(this).children('.rmm-main-list').html();
				var $jmenucontrols ="<div class='rmm-toggled-controls'><div class='rmm-toggled-title'>" + menutitle + "</div><div class='rmm-button'><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div></div>";
				$j(this).prepend("<div class='rmm-toggled rmm-closed'>"+$jmenucontrols+"<ul>"+$jmenulist+"</ul></div>");

		});
}

function adaptMenu() {
	
	/* 	toggle menu on resize */
	
	$j('.rmm').each(function() {
	        
			var $jwidth = $j(this).css('max-width');
			$jwidth = $jwidth.replace('px', ''); 
			var $jparentwidth = $j(this).parent().width();
			var $jmaxwidthpow = $jwidth*1.05;
			
			/*if ( $jparentwidth < $jmaxwidthpow ) {
				$j(this).children('.rmm-main-list').hide(0);
				$j(this).children('.rmm-toggled').show(0);
				
				//$j("#menuMobile").show();
				$j("#divBienvenida").css('width','90%');
				$j("#divBienvenida").css('margin-left','0');
				$j("#divActions").hide();
				//$j( "div form" ).addClass( "formMobile" );
				
				elemento = document.getElementsByClassName('form');
				elsLen = elemento.length;
				
				for (i = 0; i < elsLen; i++) {
				  
					//elemento[i].addClass( "formMobile" );					 
					//elemento[i].style = 'width:100%;border-left: transparent;';
					elemento[i].style.width = "100%";
					elemento[i].style.borderLeft = "transparent";
					//border-left: transparent;';
				}
				
				
			//}*/
			//else {
				$j(this).children('.rmm-main-list').show(0);
				$j(this).children('.rmm-toggled').hide(0);
				
				$j("#menuMobile").hide();
				$j("#divBienvenida").css('width','28%');
				$j("#divBienvenida").css('margin-left','30%');
				$j("#divActions").show();
				//$j( "div form" ).removeClass( "formMobile" );
				
				
				elemento = document.getElementsByClassName('form');
				elsLen = elemento.length;
				
				for (i = 0; i < elsLen; i++) {
				    elemento[i].style.width = "76%";
					elemento[i].style.borderLeft = "1px solid #666"; 
					//elemento[i].style = 'width:76%;border-left: 1px solid #666;';
				}
			//}*/
		});
		
}

$j(function() {

	 responsiveMobileMenu();
	 getMobileMenu();
	 adaptMenu();
	 
	 /* slide down mobile menu on click */
	 
	 $j('.rmm-toggled, .rmm-toggled .rmm-button').click(function(){
	 	if ( $j(this).is(".rmm-closed")) {
		 	 $j(this).find('ul').stop().show(300);
		 	 $j(this).removeClass("rmm-closed");
	 	}
	 	else {
		 	$j(this).find('ul').stop().hide(300);
		 	 $j(this).addClass("rmm-closed");
	 	}
		
	});	

});
	/* 	hide mobile menu on resize */
$j(window).resize(function() {
 	adaptMenu();
});