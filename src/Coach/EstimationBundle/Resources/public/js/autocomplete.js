var cache = {};
 
$(document).ready(function(){
	$("input[data-id=codePostal], input[data-id=ville]").autocomplete({
		source: function (request, response)
		{
			//Si la réponse est dans le cache
			if (request.term in cache)
			{
				response($.map(cache[request.term], function (item)
				{
					return {
						label: item.CodePostal + ", " + item.Ville,
						value: function ()
						{
							if ($(this).attr('data-id') == 'codePostal')
							{
								$('input[data-id=ville]').val(item.Ville);
								return item.CodePostal;
							}
							else
							{
								$('input[data-id=codePostal]').val(item.CodePostal);
								return item.Ville;
							}
						}
					};
				}));
			}
			//Sinon -> Requete Ajax
			else
			{
 
		            var objData = {};
		            var url = $(this.element).attr('data-url');
		            if ($(this.element).attr('data-id') == 'codePostal')
		            {
		            	objData = { codePostal: request.term };
		            }
		            else
		            {
		            	objData = { ville: request.term };
		            }
 
				$.ajax({
					url: url,
					dataType: "json",
					data : objData,
					type: 'POST',
					success: function (data)
					{
						//Ajout de reponse dans le cache
						cache[request.term] = data;
 
						response($.map(data, function (item)
						{
							return {
								label: item.CodePostal + ", " + item.Ville,
								value: function ()
								{
									if ($(this).attr('data-id') == 'codePostal')
									{
										$('input[data-id=ville]').val(item.Ville);
										return item.CodePostal;
									}
									else
									{
										$('input[data-id=codePostal]').val(item.CodePostal);
										return item.Ville;
									}
								}
							};
						}));
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						console.log(textStatus, errorThrown);
					}
				});
			}
		},
		minLength: 1,
		delay: 300
	});
});

