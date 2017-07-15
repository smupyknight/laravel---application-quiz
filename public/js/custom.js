$( function(){
	var slides = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '14_sub', '15', '15_sub', 'notice', '16', '16_sub', '17', '17_sub', '18', '18_sub', '19', '19_sub', '20', '20_sub', '21', '21_sub', '22', '22_sub', '23', '23_sub', 'success'];
	var visited_history = [];

	var back = false;
	var slide_ind;

	for (i = 0; i <= slides.length; i++) {
		if(slides[i] == cur_slide) {
			slide_ind = i;
			break;
		}
	}	

	for (i = 0; i <= slide_ind; i++) {
		visited_history.push(i);
	}

	if($.session.get('params') == undefined) 
		params = {};
	else 
		params = $.parseJSON($.session.get('params'));
	
	var multiple_list = ['app_beneficiary_name', 'app_beneficiary_relationship', 'app_beneficiary_percent', 'app_current_ins_co', 'app_current_benefit_amt', 'app_current_policytype', 'app_current_replacing', 'app_other_co', 'app_other_benefit_amt', 'app_other_dateofapp', 'app_other_result'];

	$('body').keypress( function(e){
		if($('textarea:focus').length > 0) return;
		if($('.other-state:focus').length > 0) return;
		if(e.keyCode == 13) $('a.proceed').trigger('click');
	});

	function setSavedValues() {
		if($.session.get('params') == undefined) 
			params = {};
		else 
			params = $.parseJSON($.session.get('params'));
		
		$.each(params, function(key, value) {
			var element = $('[name="'+key+'"]');

			if (key == 'app_beneficiary_name' || key == 'app_beneficiary_relationship' || key=='app_beneficiary_percent') {
				app_beneficiary_name = params['app_beneficiary_name'];
				app_beneficiary_relationship = params['app_beneficiary_relationship'];
				app_beneficiary_percent = params['app_beneficiary_percent'];

				if($('.select.beneficiary').length > 0) {
					$('.select.beneficiary').remove();
					var content = '';
					for(i = 0; i<app_beneficiary_name.length ;i++)
						content += '<div class="select beneficiary"><div class="col-md-4"><input type="text" placeholder="Beneficiary Name" class="required" name="app_beneficiary_name" value="'+app_beneficiary_name[i]+'"></div><div class="col-md-4"><input type="text" placeholder="Relationship" class="required" name="app_beneficiary_relationship" value="'+app_beneficiary_relationship[i]+'"></div><div class="col-md-4"><input type="text" placeholder="Percentage" class="required" name="app_beneficiary_percent" value="'+app_beneficiary_percent[i]+'"></div></div></div>';

					var style = (app_beneficiary_name.length > 1) ? 'display:block' : 'display:none';

					content += '<div class="add-element add-beneficiary"><span class="glyphicon glyphicon-plus-sign"></span></div><div class="remove-element remove-beneficiary" style="'+style+'"><span class="glyphicon glyphicon-minus-sign"></span></div>';
					$('.content').html(content);
				}
			} else if (key == 'app_current_ins_co' || key == 'app_current_policytype' || key == 'app_current_replacing' || key == 'app_current_benefit_amt') {
				app_current_ins_co = params['app_current_ins_co']
				app_current_benefit_amt = params['app_current_benefit_amt'];
				app_current_policytype = params['app_current_policytype'];
				app_current_replacing = params['app_current_replacing'];

				if($('.select.current-insurance').length > 0) {
					$('.select.current-insurance').remove();
					var content = '';
					for(i = 0; i<app_current_ins_co.length ;i++)
						content += '<div class="select current-insurance"><div class="col-md-3"><input type="text" placeholder="Company Name" name="app_current_ins_co" value="'+app_current_ins_co[i]+'"></div><div class="col-md-3"><input type="text" placeholder="Benefit Amount" name="app_current_benefit_amt" value="'+app_current_benefit_amt[i]+'"></div><div class="dropdown-wrapper col-md-3"><a href="#" class="dropdown-toggle" id="state-dropdown-button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="selected-option" name="app_current_policytype" data-selected="false">'+app_current_policytype[i]+'</span><span class="glyphicon glyphicon-triangle-bottom"></span></a><ul class="dropdown-menu" id="state-dropdown" aria-labelledby="state-dropdown-button"><li><a href="#">Group</a></li><li><a href="#">Individual</a></li></ul></div><div class="col-md-3"><input type="text" placeholder="Replacing" name="app_current_replacing" value="'+app_current_replacing[i]+'"></div></div>';

					var style = (app_current_ins_co.length > 1) ? 'display:block' : 'display:none';

					content += '<div class="add-element add-current-insurance"><span class="glyphicon glyphicon-plus-sign"></span></div><div class="remove-element remove-current-insurance" style="'+style+'"><span class="glyphicon glyphicon-minus-sign"></span></div>';

					$('.content').html(content);
				}

			} else if (key == 'app_other_co' || key == 'app_other_benefit_amt' || key == 'app_other_dateofapp' || key == 'app_other_result') {
				app_other_co = params['app_other_co'];
				app_other_benefit_amt = params['app_other_benefit_amt'];
				app_other_dateofapp = params['app_other_dateofapp'];
				app_other_result = params['app_other_result'];

				if($('.select.other-insurance').length > 0) {
					$('.select.other-insurance').remove();
					var content = '';
					for(i=0; i<app_other_co.length; i++) {
						content += '<div class="select other-insurance"><div class="col-md-3"><input type="text" placeholder="Company Name" name="app_other_co" value="'+app_other_co[i]+'"></div><div class="col-md-3"><input type="text" placeholder="Benefit Amount" name="app_other_benefit_amt" value="'+app_other_benefit_amt[i]+'"></div><div class="col-md-3"><input type="text" placeholder="Date of Application" name="app_other_dateofapp" value="'+app_other_dateofapp[i]+'"></div><div class="col-md-3"><input type="text" placeholder="Result" name="app_other_result" value="'+app_other_result[i]+'"></div></div>';
					}

					var style = (app_other_co.length > 1) ? 'display:block' : 'display:none';					

					content += '<div class="add-element add-other-insurance"><span class="glyphicon glyphicon-plus-sign"></span></div><div class="remove-element remove-other-insurance" style="'+style+'"><span class="glyphicon glyphicon-minus-sign"></span></div>';

					$('.content').html(content);
				}

			} else {

				if (element.is('input[type=hidden]')) {
					element.val(value);
					element.closest('.content').find('.option[data-active-answer='+value+']').addClass('active');
				}

				if (element.is('input') || element.is('textarea')) {
					element.val(value);
				}

				if (element.is('span') && element.hasClass('selected-option')) {
					element.html(value);
					element.attr('data-selected', true);
				}

				if (element.is('div') && element.hasClass('review-value')) {
					element.html(value);
				}

				if (element.is('span') && !element.hasClass('selected-option')) {
					element.html(value);
				}
			}

			if(params['app_first_name'] !== undefined && params['app_last_name'] !== undefined)
				$('[name="app_policyowner_name"]').val(params['app_first_name'] + ' ' + params['app_last_name']);
		});
	}

	setSavedValues();

	$(document).on('pjax:success', function() {
		$('#pjax-container').show('slide', {direction: (back) ? 'left' : 'right', duration: 500});
		setSavedValues();
	});

	$('body').delegate('a.back', 'click', function(event){
		var link;
		var current_slide;

		visited_history.pop();
		current_slide = visited_history[visited_history.length - 1];

		link = '/questions/'+slides[current_slide];
		back = true;
		$('#pjax-container').hide('slide', {direction: 'right', duration: 500}, function(){
			$.pjax({url: link, container: '#pjax-container', timeout: 10000,  scrollTo: 'false'});
		});
	});

	$('body').delegate('a.logo-link', 'click', function(event) {
		$('#pjax-container').hide('slide', {direction: 'left', duration: 500}, function(){
			$.pjax({url: '/', container: '#pjax-container', timeout: 10000, scrollTo: 'false'});
		});
	});

	$('body').delegate('a.proceed', 'click', function(event){
		var validate = true;
		var has_next_step = false;
		var selected_answer;

		var current_slide = visited_history[visited_history.length - 1];

		if($('.required').length > 0) {
			$('.required').each (function(){
				element = $(this);

				if (((element.is('input') || element.is('textarea')) && element.val() == '')) {
					validate = false; 
					element.parent().addClass('invalid');
					return;
				}

				if (element.is('div') && element.hasClass('select')) {
					var active = element.find('.active');
					if(active.length == 0) {
						element.addClass('invalid');
						validate = false; 
						return;
					} else {
						if(element.hasClass('has-next-step')) {
							has_next_step = true;
							selected_answer = active.attr('data-active-answer');
							validate = true;
							return;
						}
					}
				}

				if (element.is('span') && element.hasClass('selected-option')) {
					if (element.attr('data-selected') == 'false') {
						element.closest('.dropdown-wrapper').addClass('invalid');
						validate = false; 
						return;
					}
				}
			});
		}


		if (validate) {
			for(i=0;i<multiple_list.length;i++) {
				if($('[name="'+multiple_list[i]+'"]').length > 0) params[multiple_list[i]] = null;
			}


			$('[name*="app_"]').each(function(){
				var param_name = $(this).attr('name');
				var param_value = ($(this).is('input') || $(this).is('textarea')) ? $(this).val() : $(this).html();

				if(jQuery.inArray(param_name, multiple_list) != -1) {
					if(params[param_name] == undefined) {
						params[param_name] = new Array();
					}

					var tmp = params[param_name];
					tmp.push(param_value);
					params[param_name] = tmp;
					

				} else { 
					params[param_name] = param_value;
				}
			});

			if(has_next_step) {
				(selected_answer == 'yes') ? current_slide++ : current_slide+=2 ;
			} else {
				current_slide++;
			}

			var link;

			link = '/questions/'+slides[current_slide];
			
			visited_history.push(current_slide);

			back = false;

			$.session.set("params", JSON.stringify(params));

			$('#pjax-container').hide('slide', {direction: 'left', duration: 500}, function(){
				if ( $('#params').length )
					$.pjax({url: link, type: 'POST', container: '#pjax-container', timeout: 10000, scrollTo: 'false', data: JSON.parse($('#params').val()) });
				else
					$.pjax({url: link, type: 'POST', container: '#pjax-container', timeout: 10000, scrollTo: 'false' });
			});
		}
	});

	$('body').delegate('input[name="app_name"]', 'change', function(){
		params['app_name'] = $(this).val();
	});

	$('body').delegate('.add-beneficiary', 'click', function(){
		$("<div class='select beneficiary'><div class='col-md-4'><input type='text' placeholder='Beneficiary Name' class='required' name='app_beneficiary_name' /></div><div class='col-md-4'><input type='text' placeholder='Relationship' class='required' name='app_beneficiary_relationship' /></div><div class='col-md-4'><input type='text' placeholder='Percentage' class='required' name='app_beneficiary_percent' /></div></div>").insertBefore($(this));
		$(this).parent().find('.remove-element').css('display', 'inline-block');
	});

	$('body').delegate('.add-current-insurance', 'click', function(){
		$("<div class='select current-insurance'><div class='col-md-3'><input type='text' placeholder='Company Name' name='app_current_ins_co' /></div><div class='col-md-3'><input type='text' placeholder='Benefit Amount' name='app_current_benefit_amt' /></div><div class='dropdown-wrapper col-md-3'><a href='#' class='dropdown-toggle' id='state-dropdown-button' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='true'><span class='selected-option' name='app_current_policytype' data-selected='ture'>Group/Individual</span><span class='glyphicon glyphicon-triangle-bottom'></span></a><ul class='dropdown-menu' id='state-dropdown' aria-labelledby='state-dropdown-button'><li><a href='#'>Group</a></li><li><a href='#'>Individual</a></li></ul></div><div class='col-md-3'><input type='text' placeholder='Replacing' name='app_current_replacing' /></div></div>").insertBefore($(this));
		$(this).parent().find('.remove-element').css('display', 'inline-block');
	});

	$('body').delegate('.add-other-insurance', 'click', function(){
		$("<div class='select other-insurance'><div class='col-md-3'><input type='text' placeholder='Company Name' name='app_other_co' /></div><div class='col-md-3'><input type='text' placeholder='Benefit Amount' name='app_other_benefit_amt' /></div><div class='col-md-3'><input type='text' placeholder='Date of Application' name='app_other_dateofapp' /></div><div class='col-md-3'><input type='text' placeholder='Result' name='app_other_result' /></div></div>").insertBefore($(this));
		$(this).parent().find('.remove-element').css('display', 'inline-block');
	});

	$('body').delegate('.remove-element', 'click', function() {
		var selects = $(this).closest('.content').find('.select');
		selects.last().remove();
		if (selects.length == 2) $(this).css('display', 'none');
	});

	$('body').delegate('.select .option', 'click', function(){
		$(this).closest('.content').find('input[type="hidden"]').val($(this).attr('data-active-answer'));
	 	$(this).parent().find('.option').removeClass('active');
	 	$(this).parent().removeClass('invalid');
	 	$(this).addClass('active');
	});

	$('body').delegate('input, textarea', 'input', function(e){
		if(!$(this).hasClass('other-state')) {
			($(this).val()!='') ? $(this).parent().removeClass('invalid') : $(this).parent().addClass('invalid');
		}
	});

	$('body').delegate('.other-state', 'keypress', function(e){
		if(e.keyCode == 13) $(this).parent().trigger('click');
	});

	$('body').delegate('.dropdown-menu li', 'click', function(){
		var other_state = $(this).find('input');
		var value;

		if(other_state.length == 0) {
			value = $(this).find('a').html();
		} else {
			value = other_state.val();
		}

		var wrapper = $(this).closest('.dropdown-wrapper');

		if(value != '') {
			wrapper.find('.selected-option').html(value).attr('data-selected', true);
			wrapper.removeClass('invalid');
		} else {
			wrapper.find('.selected-option').html('Select state').attr('data-selected', false);
			wrapper.addClass('invalid');
		}
	});

	$('body').delegate('.submit-application', 'click', function(){
		$.ajax({
			url: 'https://www1.mscc2.com/Termprovider/BigLouApp.php',
			type: 'POST',
			data: params,
			success: function(msg) {
				alert(msg);
			}
		});
	});
});
