$(document).ready(function(){


	getCards();



	 $('.btn-category-filter').on('click', function(event){
	 	event.preventDefault();

	 	console.log($(this).data( "category" ));

	 	getCards($(this).data( "category" ))
	 });

	 $('#container-cards-products').on('click', '.btn-remove-card', function(event){
	 	
		var $element = $(this);
	 	
	 	

	 	swal({   
	 		title: "¿Estas seguro?",   
	 		text: "El producto se eliminara permanentemente.",   
	 		type: "warning",   
	 		showCancelButton: true,   
	 		confirmButtonColor: "#DD6B55",   
	 		cancelButtonText: "Cancelar",
	 		confirmButtonText: "Si, eliminar!",   
	 		closeOnConfirm: false
	 		}, function(){   
	 		swal("Eliminado!", "El producto ha sido eliminado.", "success"); 
	 				

	 			$.ajax({
				  method: "POST",
				  url: './products/' + $element.data( "product" ),
				  data: {'_method':'DELETE', '_token':$('meta[name="csrf-token"]').attr('content') }
				})
				  .done(function( response ) {
				  		
				  		$element.parents('div.card-product').remove();

				  		var countFilter = parseInt($('#filter-category-' + $element.data( "category" ) + ' .badge').html());
				  		
				  		countFilter--;
			
				  		$('#filter-category-' + $element.data( "category" ) + ' .badge').html(countFilter)
				  		
				 
				});
				  
		

	 		


	 	});



	 	
	 });


	 


});

function getCards(category)
{
	$('#container-cards-products').hide();
	$('.loader').show();
	var cards = '';
	var urlRequest = '';
	if(category != null)
	{
		urlRequest =  "./api/products/all/" + category;
	}
	else
	{
		urlRequest =  "./api/products/all";
	}

	$('#container-cards-products').html('');

	$.ajax({
	  method: "GET",
	  url: urlRequest
	})
	  .done(function( response ) {


	  		$.each(response, function(index, data){


		    	  	cards += '<div class="col-xs-12 col-sm-4 col-md-3 card-product"> '+
						'<div class="cards-products">' +
							'<div class="image">'+
								'<img src="'+ data.image+'" alt="">'+
									
							'</div>'+
							
							'<div class="description">'+
								'<p>'+ data.name+'</p>'+
								'<p>Cantidad: '+ data.quanty+'</p>'+
								'<p>Valor: $'+ data.value+'</p>	'+
								'<a href="./products/1/edit"><span class="glyphicon glyphicon-pencil"  aria-hidden="true">Editar</span></a>'+
								' | <span class="glyphicon glyphicon-remove btn-remove-card" data-product="'+ data.id+'" data-category="'+ data.category_id+'" aria-hidden="true">Eliminar</span>'+
							'</div>					'+
						'</div>					'+
						'</div>';
		});

	
	  
	   $('#container-cards-products').html(cards);
	   $('#container-cards-products').fadeIn(1000);
	   $('.loader').hide();
	});



}