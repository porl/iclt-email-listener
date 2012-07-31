iclt = {}; // global object for data passing

function iclt_init() {
	// get json data (do this once to save requests)
	var json_url = window.location.href + "json_data.php";
	// var data;

	$.ajax({
		'async' : false,
		'global' : false,
		'url' : json_url,
		'dataType' : "json",
		'success' : function(json) {
			iclt.data = json;
		}
	});

	//reset description tracking boolean
	iclt.descriptionEntered = false;
	
	// disable all but first collapsible
	$('#collapsibles').children(':not(:first)').addClass('ui-disabled');
	$('#nextArea').addClass('ui-disabled');
	$('#causeCollapsible').addClass('ui-disabled');
	
	// on radio selection, close current container and change header to match
	// then open next section

	$('.sectionOption').click(radioClicked);

	// on ticket type selection, reload results for services

	$('.type').click(typeClicked);

	// on service selection, reload results for categories (filter by ticket
	// type)

	$('.service').click(serviceClicked);
	
	//register events for input in text fields
	$('.descriptionField').keyup(descriptionFieldEntered);
	$('#resolution').keyup(resolutionEntered);
	
	$('#description').keyup(descriptionEntered);
	$('#title').keyup(titleEntered);
	
	$('.cause').click(causeClicked);

}

function radioClicked() {
	// get label text
	var labelText = $(this).siblings('label').find('.ui-btn-text').text();

	// modify section header (and put back 'tooltip')
	var sectionBlock = {};
	if (labelText !== "") {
		// find section header
		sectionBlock = $(this).parents('.ui-collapsible');
		var sectionHeader = sectionBlock.find('h3').find('.ui-btn-text');
		var sectionHeaderStatus = sectionHeader
				.find('.ui-collapsible-heading-status');


		sectionHeader.text(labelText).append(sectionHeaderStatus);
	}
	
	// collapse this section
	sectionBlock.trigger('collapse');

	// open next section
	sectionBlock.next().removeClass('ui-disabled');
	sectionBlock.next().trigger('expand');
}

function typeClicked() {
	// store current service (if any) so it can be reselected if applicable
	var selectedService = $('#serviceList').find('input').filter(':checked')
			.first(); // first() in case of something weird client-side
	var selectedServiceId = selectedService.attr('id');
	// get selected type
	var serviceType = $(this).attr('value').toLowerCase(); // lowercase to
															// match json data

	// reset services and categories labels
	// find service section header
	var sectionHeader = $('#serviceCollapsible').find('h3')
			.find('.ui-btn-text');
	var sectionHeaderStatus = sectionHeader
			.find('.ui-collapsible-heading-status');
	// modify section header (and put back 'tooltip')
	sectionHeader.text("Service").append(sectionHeaderStatus);

	// find service section header
	sectionHeader = $('#categoryCollapsible').find('h3').find(
			'.ui-btn-text');
	sectionHeaderStatus = sectionHeader
			.find('.ui-collapsible-heading-status');
	// modify section header (and put back 'tooltip')
	sectionHeader.text("Category").append(sectionHeaderStatus);

	// build services list
	var serviceList = $('#serviceList .ui-controlgroup-controls');
	serviceList.children().remove();

	for (var serviceKey in iclt.data.services) {
		var service = iclt.data.services[serviceKey];
		if (service[serviceType] === true) {
			serviceName = service.name;
			serviceId = serviceName.toLowerCase().replace(/ /g, "");
			serviceList
					.append('<input type="radio" name="service" id="service_' +
							serviceId +
							'" value="' +
							serviceName +
							'" class="sectionOption service">' +
					'<label for="service_' +
							serviceId + '">' + serviceName + '</label>');
		}
	}

	// insert services list to fieldset
	$('#serviceCollapsible').trigger('create');

	// register click events
	serviceList.find('input').click(radioClicked);
	serviceList.find('input').click(serviceClicked);

	// if selectedService exists in new list, 'click' it.
	if (selectedServiceId) {
		$('#' + selectedServiceId).click();
	}

}

function serviceClicked() {
	// store current category (if any) so it can be reselected if applicable
	var selectedCategory = $('#categoryList').find('input').filter(':checked')
			.first(); // first() in case of something weird client-side
	var selectedCategoryId = selectedCategory.attr('id');

	// get selected type
	var serviceType = $('#ticketTypeList').find('input').filter(':checked')
			.first(); // first() in case of something weird client-side
	var serviceTypeId = "";
	if (serviceType.length > 0) {
		serviceTypeId = serviceType.attr('value').toLowerCase(); // match
																	// json case
	}
	// get selected service
	var serviceName = $(this).attr('value');

	// reset categories labels
	// find category section header
	var sectionHeader = $('#categoryCollapsible').find('h3').find(
			'.ui-btn-text');
	var sectionHeaderStatus = sectionHeader
			.find('.ui-collapsible-heading-status');
	// modify section header (and put back 'tooltip')
	sectionHeader.text("Category").append(sectionHeaderStatus);

	// build categories list
	var categoryList = $('#categoryList .ui-controlgroup-controls');
	categoryList.children().remove();

	for (var serviceKey in iclt.data.services) {
		var service = iclt.data.services[serviceKey];
		if (service.name == serviceName) {

			for (var categoryKey in service.categories) {
				var category = service.categories[categoryKey];
				if (category[serviceTypeId] === true) {
					categoryName = category.name;
					categoryId = categoryName.toLowerCase().replace(/ /g, "");
					categoryList
							.append('<input type="radio" name="category" id="category_' +
									categoryId +
									'" value="' +
									categoryName +
									'" class="sectionOption category">' +
							'<label for="category_' +
									categoryId +
									'">' +
									categoryName +
									'</label>');
				}

			}

			break; // no need to search further
		}

	}

	// insert services list to fieldset
	$('#categoryCollapsible').trigger('create');

	// register click events
	categoryList.find('input').click(radioClicked);
	categoryList.find('input').click(categoryClicked);

	

	// if selectedService exists in new list, 'click' it.
	if (selectedCategoryId) {
		$('#' + selectedCategoryId).click();
	}

}

function categoryClicked() {
}


function descriptionEntered() {
	if (this.value === "") {
		iclt.descriptionEntered = false;
	} else {
		iclt.descriptionEntered = true;
	}
}

function titleEntered() {
	if (!iclt.descriptionEntered) {
		$('#description').text(this.value);
		descriptionFieldEntered(); //call description handler to check entries manually
	}

}

function descriptionFieldEntered() {
	//if all description fields are populated enable optional field collapsible
	var populated = true;
	$('.descriptionField').each(function() {
		if (!this.value) populated = false;
	});
	
	if (populated) {
		$('#optionalCollapsible').removeClass('ui-disabled');
		$('#nextArea').removeClass('ui-disabled');
	} else {
		$('#optionalCollapsible').addClass('ui-disabled');
		$('#nextArea').addClass('ui-disabled');
	}
}

function resolutionEntered() {
	//if resolution field is populated enable cause field collapsible
	if ($('#resolutionField').value !== "") {
		$('#causeCollapsible').removeClass('ui-disabled');
		//if cause is already selected then enable next
		if ($('input[name:cause]:checked', '#causeList').val()) {
			$('#nextArea').removeClass('ui-disabled');
		} else {
			$('#nextArea').addClass('ui-disabled');
		}
		
	} else {
		$('#causeCollapsible').addClass('ui-disabled');
		$('#nextArea').removeClass('ui-disabled');
	}
}

function causeClicked() {
	// get label text
	var labelText = $(this).siblings('label').find('.ui-btn-text').text();

	// modify section header (and put back 'tooltip')
	var sectionBlock = {};
	if (labelText !== "") {
		// find section header
		sectionBlock = $('#causeCollapsible');
		var sectionHeader = sectionBlock.find('h3').find('.ui-btn-text');
		var sectionHeaderStatus = sectionHeader
				.find('.ui-collapsible-heading-status');


		sectionHeader.text(labelText).append(sectionHeaderStatus);
	}
	
	// collapse this section
	sectionBlock.trigger('collapse');

	// enable next button
	$('#nextArea').removeClass('ui-disabled');

}

// go!
$(function() {
	iclt_init();
});
