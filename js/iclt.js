$(function() {

	//on radio selection, close current container and change header to match then open next section
	$('.sectionOption').click(function(){
		//get label text
		var labelText = $(this).siblings('label').find('.ui-btn-text').text()
		
		//find section header
		var sectionBlock = $(this).parents('.ui-collapsible')
		var sectionHeader = sectionBlock.find('h3').find('.ui-btn-text')
		var sectionHeaderStatus = sectionHeader.find('.ui-collapsible-heading-status');
		
		//modify section header (and put back 'tooltip')
		sectionHeader.text(labelText).append(sectionHeaderStatus);
		
		//collapse this section
		sectionBlock.trigger('collapse');
		
		//open next section
		sectionBlock.next().trigger('expand');
		
	});

	//on ticket type selection, reload results for services
	
	$('.types').click(function(){
		var type = $(this).attr('value');
		
		
		
	});
	
	//on service selection, reload results for categories (filter by ticket type)

});
