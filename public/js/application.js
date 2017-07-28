$(function() {

    // this is just a super-simple demo of JS

	var demoHeaderBox;
	var table_form = $('#form-list');
	var modal_content;

	//console.log(positions);

    // simple demo to show create something via javascript on the page
    if ($('#javascript-header-demo-box').length !== 0) {
    	demoHeaderBox = $('#javascript-header-demo-box');
    	demoHeaderBox
    		.hide()
    		.text('Hello from JavaScript! This line has been added by public/js/application.js')
    		.css('color', 'green')
    		.fadeIn('slow');
    }

    // if #javascript-ajax-button exists
    if ($('#javascript-ajax-button').length !== 0) {

        $('#javascript-ajax-button').on('click', function(){

            // send an ajax-request to this URL: current-server.com/songs/ajaxGetStats
            // "url" is defined in views/_templates/footer.php
            $.ajax(url + "songs/ajaxGetStats")
                .done(function(result) {
                    // this will be executed if the ajax-call was successful
                    // here we get the feedback from the ajax-call (result) and show it in #javascript-ajax-result-box
                    $('#javascript-ajax-result-box').html(result);
                })
                .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
                .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
        });
    }

	if (table_form.length !== 0) {
		console.log("boom!");

		table_form.DataTable();

	}
	
	//if($('#modal').length !== 0){
		$("#modal").iziModal({
			onClosed: function(){
				$('.modal-card-title').html('');
				$('.modal-card-body').html('');
				$('.modal-card-foot a:first-of-type').removeClass();
				$('.modal-card-foot a:first-of-type').addClass('is-success button');
				$('.modal-card-foot a:first-of-type').attr('name', '');
			}
		});
	//}
	
	$(document).on('click', '.modal-trigger', function (event) {
		event.preventDefault();
		
		if($(this).hasClass('modal-add-employee')){
			modalAddEmployee();
		}
		if($(this).hasClass('modal-add-messenger')){
			modalAddMessenger();
		}
		if($(this).hasClass('modal-add-form')){
			modalAddForm();
		}
		if($(this).hasClass('modal-add-position')){
			modalAddPosition();
		}
		$('#modal').iziModal('open');
		
	});

	
	function modalAddEmployee(){
		var $title = 'Add Employee';
		//var $content = '';
		
		$('.modal-card-title').html($title);
		//$('.modal-card-body').html($content);
		$('.modal-card-body').load(url + "app/addEmployeeModalTemplate");
		$('.modal-card-foot a:first-of-type').attr('name', 'submit_add_employee');
	}
	function modalAddMessenger(){
		var $content = "add messenger";
		$('.modal-card-body').html($content);
	}
	function modalAddForm(){
		var $content = "add form";
		$('.modal-card-body').html($content);
	}
	
	function modalAddPosition(){
		var $title = "Add Position";
		$('.modal-card-title').html($title);
		$('.modal-card-body').load(url + "app/addPositionModalTemplate");
		$('.modal-card-foot a:first-of-type').attr('name', 'submit_add_position');
	}
	
	$(document).on('click', '.modal-card-foot a:first-of-type', function(event){
		if($(this).attr('name') == "submit_add_position"){
			submitAddPosition(
				$('.modal-card-body').find('form input[name="name"]').val(),
				$('.modal-card-body').find('form input[name="description"]').val()
			);
		}

		if($(this).attr('name') == "submit_add_employee"){
				console.log($('.modal-card-body').find('form input[name="first-name"]').val());

			submitAddEmployee(
				$('.modal-card-body').find('form input[name="first-name"]').val(),
				$('.modal-card-body').find('form input[name="middle-name"]').val(),
				$('.modal-card-body').find('form input[name="last-name"]').val(),
				$('.modal-card-body').find('form select[name="position-id"] option:selected').val(),
				
			)
		}
	});

	function closeModal(){
		$('#close-modal').trigger("click");
	}

	function triggerForceLoad(){
		$('.pace').toggleClass('pace-active pace-inactive');
	}
	
	/*submit*/
	function submitAddPosition($name, $description){
		triggerForceLoad();
		$.ajax({
			url: url + "app/addPosition",
			type: "post",
			data: {name: $name, description: $description},
			success: function (response) {
			   	closeModal();
				triggerForceLoad();      
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}


		});
	}

	function submitAddEmployee($first_name, $middle_name, $last_name, $position_id){
		triggerForceLoad();
		$.ajax({
			url: url + "app/addEmployee",
			type: "post",
			data: {first_name: $first_name, middle_name: $middle_name, last_name:$last_name, position_id: $position_id},
			success: function (response) {
			   	  closeModal();
			      triggerForceLoad();
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			   
			}


		});
	}
	
	


 
    $('#form-list tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button_form_table_delete').click( function () {
        table.row('.selected').remove().draw( false );
    } );

});