function submitform()
{
	var typeAnnonce   = document.myform.coach_annoncebundle_annonce_typeAnnonce.value;
	var nbPieces      = document.myform.coach_annoncebundle_annonce_nbPieces.value;
	var nbChambre     = document.myform.coach_annoncebundle_annonce_nbChambre.value;
	var classAnnonce  = document.myform.coach_annoncebundle_annonce_classAnnonce.value;
	var optionAnnonce = document.myform.coach_annoncebundle_annonce_optionAnnonce.value;
	var cp            = document.myform.coach_annoncebundle_annonce_cp.value;
	var ville         = document.myform.coach_annoncebundle_annonce_ville.value;
	var adresse       = document.myform.coach_annoncebundle_annonce_adresse.value;
	var titre         = document.myform.coach_annoncebundle_annonce_titre.value;
	var prix          = document.myform.coach_annoncebundle_annonce_prix.value;
	var surface       = document.myform.coach_annoncebundle_annonce_surface.value;
	var tel1          = document.myform.coach_annoncebundle_annonce_tel1.value;
	var description   = document.myform.coach_annoncebundle_annonce_description.value;
	var email         = document.myform.coach_annoncebundle_annonce_annonceur_email.value;
	var password_clear= document.myform.coach_annoncebundle_annonce_annonceur_password_clear.value;
	if(!typeAnnonce){
		$('html,body').animate({scrollTop: 300 }, 'slow');
	}
	else if(!nbPieces){          
		$('html,body').animate({scrollTop: 300}, 'slow');
	}
	else if(!nbChambre){
		$('html,body').animate({scrollTop: 300}, 'slow');
	}
	else if(!classAnnonce){
		$('html,body').animate({scrollTop: 300}, 'slow');
	}
	else if(!optionAnnonce){
		$('html,body').animate({scrollTop: 300}, 'slow');
	}
	else if(!cp){
		$('html,body').animate({scrollTop: 700}, 'slow');
	}
	else if(!ville){
		$('html,body').animate({scrollTop: 700}, 'slow');
	}
	else if(!adresse){
		$('html,body').animate({scrollTop: 700}, 'slow');
	}
	else if(!titre){
		$('html,body').animate({scrollTop: 900}, 'slow');
	}
	else if(!prix){
		$('html,body').animate({scrollTop: 900}, 'slow');
	}
	else if(!surface){
		$('html,body').animate({scrollTop: 900}, 'slow');
	}
	else if(!tel1){
		$('html,body').animate({scrollTop: 900}, 'slow');
	}
	else if(!description){
		$('html,body').animate({scrollTop: 900}, 'slow');
	}
	else if(!email){
	}
	else if(!password_clear){
	}
	else{
		document.myform.submit();
	}
  
}