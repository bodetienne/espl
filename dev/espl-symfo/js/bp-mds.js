$(function() {
	//PARTIE 1 - Changement rond barre de progression
	$('.formulaire-1 .barre-progression .ronds .rond-jaune').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-jaune-vide.png');

	//Formulaire 2 - Changement barre progression 
	$('.formulaire-2 .barre-progression .barre .bg-candidat').animate({width: '10%'}); 
	
	//Formulaire 3 - Changement barre progression 
	$('.formulaire-3 .barre-progression .barre .bg-candidat').animate({width: '15%'}); 
	
	//Formulaire 4 - Changement barre progression
	$('.formulaire-4 .barre-progression .barre .bg-candidat').animate({width: '20%'}); 
	
	
	//PARTIE 2 - Changement ronds barre de progression
	$('.formation-1 .barre-progression .ronds .rond-orange').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-orange-plein.png');

	//Formation 1 - Changement barre progression 
	$('.formation-1 .barre-progression .barre .bg-candidat').animate({width: '25%'}); 
	$('.formation-1 .barre-progression .barre .bg-garants').animate({width: '10%'}); 
	
	//Foufou 1 - Changement barre progression 
	$('.foufou-1 .barre-progression .barre .bg-garants').animate({width: '12%'}); 
	
	//Foufou 2 - Changement barre progression
	$('.foufou-2 .barre-progression .barre .bg-garants').animate({width: '20%'}); 
	

	//PARTIE 3 - Changement ronds barre de progression
	$('.dossier-reflexion .barre-progression .ronds .rond-orange').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-orange-plein.png');	
	$('.dossier-reflexion .barre-progression .ronds .rond-bleu-clair').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-turquoise-plein.png');

	//Dossier de réflexion - Changement barre progression 
	$('.dossier-reflexion .barre-progression .barre .bg-candidat').animate({width: '25%'}); 
	$('.dossier-reflexion .barre-progression .barre .bg-garants').animate({width: '25%'}); 
	$('.dossier-reflexion .barre-progression .barre .bg-formation').animate({width: '12%'}); 
	

	//PARTIE 4 - Changement ronds barre de progression
	$('.p-j .barre-progression .ronds .rond-orange').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-orange-plein.png');	
	$('.p-j .barre-progression .ronds .rond-bleu-clair').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-turquoise-plein.png');
	$('.p-j .barre-progression .ronds .rond-bleu').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-bleu-plein.png');

	//Pièces jointes - Changement barre progression 
	$('.p-j .barre-progression .barre .bg-candidat').animate({width: '25%'}); 
	$('.p-j .barre-progression .barre .bg-garants').animate({width: '25%'}); 
	$('.p-j .barre-progression .barre .bg-formation').animate({width: '25%'}); 
	$('.p-j .barre-progression .barre .bg-formation').animate({width: '12%'}); 
	

	//PARTIE 5 - Changement ronds barre de progression
	$('.fin .barre-progression .ronds .rond-orange').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-orange-plein.png');	
	$('.fin .barre-progression .ronds .rond-bleu-clair').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-turquoise-plein.png');
	$('.fin .barre-progression .ronds .rond-bleu').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-bleu-plein.png');
	$('.fin .barre-progression .ronds .rond-rose').attr('src', '/espl/dev/espl-symfo/public/../elements/rond-rose-plein.png');

	//Fin - Changement barre progression 
	$('.fin .barre-progression .barre .bg-candidat').animate({width: '25%'}); 
	$('.fin .barre-progression .barre .bg-garants').animate({width: '25%'}); 
	$('.fin .barre-progression .barre .bg-formation').animate({width: '25%'}); 
	$('.fin .barre-progression .barre .bg-formation').animate({width: '25%'}); 
	
});

