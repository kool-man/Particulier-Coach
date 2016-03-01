

//<!--Checkbox et radiobox-->
(function() {
    $.fn.customRadioCheck = function() {

        return this.each(function() {

            var $this = $(this);
            var $span = $('<span/>');

            $span.addClass('custom-' + ($this.is(':checkbox') ? 'check' : 'radio'));
            $this.is(':checked') && $span.addClass('checked'); // init
            $span.insertAfter($this);

            $this.parent('label').addClass('custom-label')
                    .attr('onclick', ''); // Fix clicking label in iOS
            // hide by shifting left
            $this.css({position: 'absolute', left: '-9999px'});

            // Events
            $this.on({
                change: function() {
                    if ($this.is(':radio')) {
                        $this.parent().siblings('label')
                                .find('.custom-radio').removeClass('checked');
                    }
                    $span.toggleClass('checked', $this.is(':checked'));
                },
                focus: function() {
                    $span.addClass('focus');
                },
                blur: function() {
                    $span.removeClass('focus');
                }
            });
        });
    };
}());



function check(className){
	$('#'+className+' a.icheck').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('active').children('i').toggleClass('fa-check fa-circle-o');
		var data = {};
		var n = $('#'+className).length;
		var i = 0;
		$('#'+className).children('a.active').each(function() {
			data[i] = $(this).text();
			i++;
			console.log(className);
			console.log(data);
		});
	 });
}

check('options-check');
check('transport-check');


//CHECK BOX TRUE FALSE
$(".cb-enable").click(function() {
    var parent = $(this).parents('.switch');
    $('.cb-disable', parent).removeClass('selected');
    $(this).addClass('selected');
    $('.checkbox', parent).attr('checked', true);
});
$(".cb-disable").click(function() {
    var parent = $(this).parents('.switch');
    $('.cb-enable', parent).removeClass('selected');
    $(this).addClass('selected');
    $('.checkbox', parent).attr('checked', false);
});

$(document).click(function() {

});


//Form 3 steps
//STEP 1
/*$('#step-1-form .btn-success').on('click', function(e){
   e.preventDefault();
   $('#step-1-form').hide();
   $('#step-2-form').show();
   $('.row .bs-wizard .col-xs-4.bs-wizard-step:nth-child(1)').removeClass('disabled').addClass('complete');
});

//STEP 2
$('#step-2-form .btn-success').on('click', function(e){
   e.preventDefault();
   $('#step-2-form').hide();
   $('#step-3-form').show();
   $('.row .bs-wizard .col-xs-4.bs-wizard-step:nth-child(2)').removeClass('disabled').addClass('complete');
});

//STEP 3
$('#step-3-form .btn-success').on('click', function(e){
   e.preventDefault();
   $('#step-3-form').hide();
   $('#step-4-form').show();
   $('.row .bs-wizard .col-xs-4.bs-wizard-step:nth-child(3)').removeClass('disabled').addClass('complete');
});

//Return to STEP 1
$('#step-2-form .btn-warning').on('click', function(e){
   e.preventDefault();
   $('#step-1-form').show();
   $('#step-2-form').hide();
   $('.row .bs-wizard .col-xs-4.bs-wizard-step:nth-child(1)').addClass('disabled').removeClass('complete');
});

//Return to STEP 2
$('#step-3-form .btn-warning').on('click', function(e){
   e.preventDefault();
   $('#step-2-form').show();
   $('#step-3-form').hide();
   $('.row .bs-wizard .col-xs-4.bs-wizard-step:nth-child(2)').addClass('disabled').removeClass('complete');
});

//Return to STEP 3
$('#step-4-form .btn-warning').on('click', function(e){
   e.preventDefault();
   $('#step-3-form').show();
   $('#step-4-form').hide();
   $('.row .bs-wizard .col-xs-4.bs-wizard-step:nth-child(3)').addClass('disabled').removeClass('complete');
});

*/
//Btn upload styleSheets
$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
           // if( log ) alert(log);
        }
        
    });
	});



//nav bar fixed

//header height
function navBarFixed(){
	var header=$('header').height()+10;
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		if (scroll>header){
			$('.navbar').addClass('navbar-fixed-top fast fadeInDown');
			}
		else {
			$('.navbar').removeClass('navbar-fixed-top fast fadeInDown');
			}
	});
}
navBarFixed();

$(window).resize(function(){
	navBarFixed();					  
});

//choice pack1
$('.pack-choice .btn').on('click', function(e){
    e.preventDefault();
    var li=$('.limit-info ul li');
    var msg =$('#limit-info p');
    $('.pack-choice .btn').addClass('opac').children('i').removeClass('fa-check').addClass('fa-times');
    $(this).removeClass('opac');
    $(this).children('i').removeClass('fa-times').addClass('fa-check');
    var photos3 = document.getElementById("photos3");
    var photos6 = document.getElementById("photos6");
    var photos9 = document.getElementById("photos9");
    if($(this).hasClass('btn-star')){
        msg.hide();
        msg.eq(0).show();
        photos3.style.display = "none";
        photos6.style.display = "block";
        photos9.style.display = "none";
    }
    if($(this).hasClass('btn-gold')){
        msg.hide();
        msg.eq(1).show();
        photos3.style.display = "none";
        photos6.style.display = "none";
        photos9.style.display = "block";
    }
    if($(this).hasClass('btn-coach')){
       msg.hide();
       msg.eq(2).show();       
    }
    msg.addClass('animated fadeInUp');
});
//Functions Price detect



//Function select - type
$('#panneau-edit select.nature').on('change', function(){
	var val= $(this).val();
	var title= $('.panneau-creation .space-1');
	if (val==='avendre'){
		title.text('A VENDRE');
	}
	else if (val==='alouer'){
		title.text('A LOUER');
	}
});

/*
	$(formPanneauId + ' select.size').on('change', function(){
		var val= $(this).val();
		//var horizontal= $('.horizontal-arrow p');
		//var vertical= $('.vertical-arrow p');
		if (val==='size-1'){
		//	horizontal.text('60 cm').css('color','red');
		//	vertical.text('40 cm').css('color','red');
			info.attr('data-size', 40);
		}
		else if (val==='size-2'){
		//	horizontal.text('80 cm').css('color','green');
		//	vertical.text('60 cm').css('color','green');
			info.attr('data-size', 60);
		}
		console.log(val);
		getPrice();
	});
*/



function genericPanneau(formPanneauId, panneauId){
	
	
	//annonce panneau title

	 $(formPanneauId +' .annonce-titre-panneau').on('keyup', function(){
		var videMessage = "Titre de l'annonce"; 
		var text=$(this).val();
		var replace = $(panneauId +'.panneau-creation .space-2 span');
		
		if(text.length===0){
			replace.text(videMessage);
		}
		else{
			replace.text(text);
		}
	});
	
	$(formPanneauId +' .annonce-num-panneau').on('keyup', function(){
		var videMessage = "Numéro de Téléphone"; 
		var text=$(this).val();
		var replace = $(panneauId +'.panneau-creation .space-3');

		
		if(text.length===0){
			replace.text(videMessage);
		}
		else{
			replace.text(text);
		}
	});         




	var info=$(formPanneauId + ' .infos');
	//Function select - size
	$(formPanneauId + ' select.size').on('change', function(){
		var val= $(this).val();
		if (val==='size-1'){
			info.attr('data-size', 40);
		}
		else if (val==='size-2'){
			info.attr('data-size', 60);
		}
		getPrice();
	});


	//Function select - Quantity
	$(formPanneauId + ' .quantity').on('change', function(){
		var val= $(this).val();
		console.log(val);
		info.attr('data-quantity', val);
		$(formPanneauId + ' .somme .number').text(val)
		getPrice();
	});

	//Function oreillets
	$(formPanneauId + ' .oreillets').on('change', function(){
		var val= $(this).val();
		var or=0;
		var circle=$('.panneau-creation .space-1 .fa-circle-o');
		if (val==='sans'){
			or=0;
			circle.hide();
		}
		else if (val==='avec'){
			or=5;
			circle.show();
		}
		info.attr('data-or', or);
		getPrice();
	});
	
	//Function select - Quanlity
	$(formPanneauId + ' select.quality').on('change', function(){
		var val= $(this).val();
		var qual=0;
		if (val==='qual-1'){
			qual=5;
		}
		else if (val==='qual-2'){
			qual=10;
		}
		info.attr('data-quality', qual);
		getPrice();
	});
	
	function getPrice(){
		var info_qn=parseFloat(info.attr('data-quantity'));
		var info_sz=parseFloat(info.attr('data-size'));
		var info_or=parseFloat(info.attr('data-or'));
		
		price = info_qn*(info_sz+info_or);
		console.log(info_qn, info_sz, info_or,price);
		$(formPanneauId + ' .price span').text(price);
		$(formPanneauId + ' .facture-price').text(price);
	}
}
genericPanneau('#form-panneau-1', '#panneau-1');
genericPanneau('#form-panneau-2', '#panneau-2');
genericPanneau('#form-panneau-3', '#panneau-3');


//hover effect package table 
	
	var case_t= $('#pack-table td');
	var tr= $('#pack-table tbody tr');
	var div = tr.children('td').children('div')
$('#pack-table td:nth-child(2) , #pack-table td:nth-child(3), #pack-table td:nth-child(4), #pack-table td:nth-child(5)')
	.mouseover(function() {
		var index= $(this).index();
		tr.each(function(){
			$(this).children('td').children('div').removeClass('hover');
			$(this).children('td').eq(index).children('div').addClass('hover');
	});
    }).mouseout(function() {
		div.each(function(){
		$(this).removeClass('hover');
	})
  });
  
  /*$('#pack-table td:nth-child(2)').on('click', function(){
		window.location.replace("/annonce/step1/0");
  });
  $('#pack-table td:nth-child(3)').on('click', function(){
		window.location.replace("/annonce/step1/1");
  });
  $('#pack-table td:nth-child(4)').on('click', function(){
		window.location.replace("/annonce/step1/2");
  }); 
  $('#pack-table td:nth-child(5)').on('click', function(){
		window.location.replace("/paiement/3");
  });*/