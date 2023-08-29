<!DOCTYPE html>
<html>
<html>
<title>Paystack Payment Gateway Integration</title>
<head>
<style>
body {
    font-family: Arial;
    line-height: 30px;
    color: #333;
}

#payment-box {
    padding: 40px;
    margin: 20px;
    border: #E4E4E4 1px solid;
    display: inline-block;
    text-align: center;
    border-radius: 3px;
}

#pay_now {
    padding: 10px 30px;
    background: #09f;
    border: #038fec 1px solid;
    border-radius: 3px;
    color: #FFF;
    width: 100%;
    cursor: pointer;
}

.txt-title {
    margin: 25px 0px 0px 0px;
    color: #4e4e4e;
}

.txt-price {
    margin-bottom: 20px;
    color: #08926c;
    font-size: 1.1em;
}
</style>
</head>
<body>
    <div id="payment-box">
        <img src="../paystack/images/logo.png" />
        <h4 class="txt-title">Fee Payment</h4>
        
        
             <style type="text/css">
        .form-style-1 {
            margin: 10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            border-width: thick;
            border: #FF80FF;
        }

        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }

        .form-style-1 label {
            margin: 0 0 3px 0;
            padding: 0px;
            display: block;
            font-weight: bold;
        }

        .form-style-1 input[type=text],
        .form-style-1 input[type=date],
        .form-style-1 input[type=datetime],
        .form-style-1 input[type=number],
        .form-style-1 input[type=search],
        .form-style-1 input[type=time],
        .form-style-1 input[type=url],
        .form-style-1 input[type=email],
        textarea,
        select {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #BEBEBE;
            padding: 7px;
            margin: 0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
        }

        .form-style-1 input[type=text]:focus,
        .form-style-1 input[type=date]:focus,
        .form-style-1 input[type=datetime]:focus,
        .form-style-1 input[type=number]:focus,
        .form-style-1 input[type=search]:focus,
        .form-style-1 input[type=time]:focus,
        .form-style-1 input[type=url]:focus,
        .form-style-1 input[type=email]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus {
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }

        .form-style-1 .field-divided {
            width: 49%;
        }

        .form-style-1 .field-long {
            width: 100%;
        }

        .form-style-1 .field-select {
            width: 100%;
        }

        .form-style-1 .field-textarea {
            height: 100px;
        }

        .form-style-1 input[type=submit], .form-style-1 input[type=button] {
            background: #f44336;
            padding: 8px 15px 8px 15px;
            border: none;
            color: #fff;
        }

        .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover {
            background: #e0372b;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .form-style-1 .required {
            color: red;
        }
    </style>
  
    
    
</head>
<body>

<head>
  <title>Provide email and Pay Now</title>
  <link href="https://www.filepicker.io/api/file/Lh5PgMCTrKBCvUNRhSKy" rel="shortcut icon" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet" />
</head>

 <form role="form" action="../index.php" method="post"  enctype="multipart/form-data" id="pay-form" class="form-horizontal" >
    <ul class="form-style-1">
<body onload="startUp()">
  
    
          Transaction Reference:<div  id="alert-holder2" ></div>
          <div class="text-center">
       
          
        </div>
        </fieldset>
        <fieldset class="form-group row">
          <label class="col-sm-3" for="tref">Transaction Reference</label>
          <div class=" col-sm-9">
          <textarea class="form-control" name="tran_ref" id="alert-holder"></textarea>                             
            
          </div>
        </fieldset>
        <fieldset class="form-group row">
          <label class="col-sm-3" for="class">Class</label>
          <div class=" col-sm-9">
            <input class="form-control" name="s_class" id="s_class" required="required" type="text" placeholder="Your Class (compulsory)" />
          </div>
          </fieldset>
        <fieldset class="form-group row">
          <label class="col-sm-3" for="regno">Reg No</label>
          <div class=" col-sm-9">
            <input class="form-control" name="reg_no" id="firstname" required="required" type="text" placeholder="Your Reg No (compulsory)" />
          </div>
          </fieldset>
        <fieldset class="form-group row">
          <label class="col-sm-3" for="email">Email Address</label>
          <div class=" col-sm-9">
            <input class="form-control" name="email" id="email" required="required" type="email" placeholder="Your Email Address (compulsory)" />
          </div>
           </fieldset>
        <!-- The amount box is not displayed by default. Will stay so unless the GET parameter amountinkobo is a valid integer -->
        <fieldset class="form-group row" id="amountinnaira" style="display:none">
          <label class="col-sm-3" for="amount-in-naira">Amount</label>
          <div class="col-sm-9">
            <div class="input-group">
              <div class="input-group-addon">&#x20a6;</div>
               
              
            </div>
          </div>
        </fieldset>
        
        <fieldset class="form-group row">
           <div class="col-sm-offset-3 col-sm-9">
            <input class="form-control" name="amount" id="amount" required="required" type="text" placeholder="Amount (compulsory)" />
             
              </div><!-- /.box-body -->
              <div class="box-footer">
              <button class="btn btn-secondary" type="button" onclick="validateAndPay()"> Pay Now </button>
              <input type="hidden" name="do" value="add_payment"  />
              <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- End of form section -->
    
    <script src="https://js.paystack.co/v1/inline.js"></script>
  <script>
    // change this to your public key so you 
    // will no more be prompted
    var public_key = 'pk_test_68873a1cfbbaa17fa597b90675142ead5342de77';
    
    /*
     * Start up
     */
    function startUp(){
      checkAmountInKobo();
      promptForPublicKey();
    }
    
    /*
     * check if the public key set is valid
     * 
     * @return bool
     */
    function isValidPublicKey(){
      var publicKeyPattern = new RegExp('^pk_(?:test|live)_','i');
      return publicKeyPattern.test(public_key);
    }
    
    /*
     * Prompt for and set public key to use
     * If public key set is not valid
     */
    function promptForPublicKey(){
      if(!isValidPublicKey()){
        // get a public key to use
        public_key = prompt(pk_test_68873a1cfbbaa17fa597b90675142ead5342de77);
                            
        //public_key = prompt("To run this sample, you need to provide a public key.\n"+
                          //  "Please visit https://dashboard.paystack.co/#/settings/developer to get your "+
                           // "public key and enter in the box below:", "68873a1cfbbaa17fa597b90675142ead5342de77");
        // check that we got a valid public key 
        // (starts with pk_live_ or pk_test_)
        if (!isValidPublicKey()) {
          var error_msg = "You didn't provide a public key. This page will not load.";
          alert(error_msg);
          document.getElementById('pay-form').innerHTML = error_msg;
        }
      }
    }


    /* 
     * Validate before opening Paystack popup
     */
    function validateAndPay(){
      var email = document.getElementById('email').value;
      if(!simpleValidEmail(email)){
        alert("Please provide a valid email");
        return;
      }
      
      var amountinkobo = getAmountInKobo();
      if(!amountinkobo){
        alert("Please provide a valid amount");
        document.getElementById('amountinnaira').style.display="block";
        document.getElementById('static-amount').style.display="none";
        return;
      }
      
      // We are not validating firstname and lastname
      var firstname = document.getElementById('firstname').value;
      var lastname  = document.getElementById('lastname').value;
      
      payWithPaystack(email, amountinkobo, firstname, lastname);
    }
  
    /* Get the query parameters for this window
     * 
     * source: http://stackoverflow.com/a/21210643/671568
     */
    function getParams(){
      var queryDict = {};
      location.search
        .substr(1)
        .split("&")
        .forEach(function(item) {
          queryDict[item.split("=")[0]] = item.split("=")[1];
        });
      return queryDict;
    }
    
    /* Check amount sent by get if it's a valid integer
     * show the amount input box if not
     */
    function checkAmountInKobo(){
      amountinkobo = getParams().amountinkobo;
      
      if(!simpleValidInt(amountinkobo)){
        // show the amount box since an amount was not specified by GET
        document.getElementById('amountinnaira').style.display="block";
        document.getElementById('static-amount').style.display="none";
      } else {
        document.getElementById('amountinngn').innerHTML = amountinkobo / 100;
      }
    }
  
    /* Get amount sent by get if it's a valid integer
     * Get the amount entered in input box  multiplied
     *  by 100. Show alert if no valid amountinkobo can be found
     */
    function getAmountInKobo(){
      amountinkobo = getParams().amountinkobo;
      
      if(!amountinkobo){
        amountinkobo = 100 * +document.getElementById('amount-in-naira').value;
      }
      
      if(!simpleValidInt(amountinkobo)){
        alert("Please provide an amount to pay");
      }
      
      return amountinkobo;
    }
  
    /* Get a random reference number based on the current time
     * 
     * gotten from http://stackoverflow.com/a/2117523/671568
     * replaced UUID with REF
     */
    function generateREF(){
      var d = new Date().getTime();
      if(window.performance && typeof window.performance.now === "function"){
        d += performance.now(); //use high-precision timer if available
      }
      var ref = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
      });
      return ref;
    }
    
    /* Validate integer
     *
     * gotten from http://stackoverflow.com/a/25016143/671568
     */
    function simpleValidInt( data ) {
      if (+data===parseInt(data)) {
        return true;
      } else {
        return false;
      }
    };

    
    /* Validate email address 
     * not meant for really secure email validation
     *
     * gotten from http://stackoverflow.com/a/28633540/671568
     * Had to correct Regex, allowing A-Za-z0-9 to repeat
     */
    function simpleValidEmail( email ) {
      return email.length < 256 && /^[^@]+@[^@]+[A-Za-z0-9]{2,}\.[^@]+[A-Za-z0-9]{2,}$/.test(email);
    };

    /* Show the paystack payment popup
     * 
     * source: https://developers.paystack.co/docs/paystack-inline
     */
    function payWithPaystack(validatedemail, amountinkobo, firstname, lastname){
      var handler = PaystackPop.setup({
        key:       public_key,
        email:     validatedemail,
        firstname: firstname,
        lastname:  lastname,
        amount:    amountinkobo,
        ref:       generateREF(), // This uses a random transaction reference based 
                                  // on the time the "Pay" button was clicked.
        callback:  function(response){
          // payment was received
          // clear away the form, show success message
          var msg = response.trxref;
          document.getElementById('alert-holder').innerHTML = msg;
          document.getElementById('t_ref').innerHTML = '<div textarea="alert alert-success">' + msg + '</div>';
          document.getElementById("pay-form").reset();
        },
        onClose:  function(){
          // Visitor cancelled payment
          var msg = 'Cancelled. Please click the \'Pay\' button to try again';
          document.getElementById('alert-holder').innerHTML = msg;
          document.getElementById('t_ref').innerHTML = '<div textarea="alert alert-danger">' + msg + '</div>';
        }
      });
      handler.openIframe();
    }
  </script>
    
    
    
    
    
    
<!-- Form validate (Before submit the form) -->       
<script>

$('[type="file"]').change(function (){
	//MSK-00098
	
	var fileSize = this.files[0].size;	
    var maxSize = 1000000;// bytes
	var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
	var imageNoError = 0;
	
	if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
		//MSK-00099
		output.src="../uploads/error.png";
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"                                title="The file type is not allowed" ></span>');
		
	}else{

		if(fileSize > maxSize) {
			//MSK-00100
			output.src="../uploads/error.png";
			$("#btnSubmit").attr("disabled", true);
			$('#divPhoto').addClass('has-error');
			$('#divPhoto1').addClass('has-feedback');	
			$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The file size is too large" ></span>');		
			
					
		}else{
			// MSK-00101
			output.src = URL.createObjectURL(this.files[0]);	
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhoto').removeClass('has-error');
			$('#spanPhoto').remove();// MSK-00101
			
		}
	}
});

$("#form1").submit(function (e) {
	//MSK-000098-form1 submit

	var index_number = $('#index_number').val();
	var full_name = $('#full_name').val();	
	var i_name = $('#i_name').val();
	var gender = $('#gender').val();	
	var phone = $('#phone').val();
	var email = $('#email').val();	
	var photo = $('#fileToUpload').val();
	var address = $('#address').val();

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
	var telformat = /\d{3}[\-]\d{4}[\-]\d{4}$/;
	var imageNoError= 0;
	
	if(index_number == ''){
		//MSK-00102-index_number 
		$("#btnSubmit").attr("disabled", true);
		$('#divIndexNumber').addClass('has-error has-feedback');
		$('#divIndexNumber').append('<span id="spanIndexNumber" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip"   	data-toggle="tooltip"    title="The index number is required" ></span>');	
			
		$("#index_number").keydown(function(){
			//MSK-00103-index_number 
			$("#btnSubmit").attr("disabled",false);	
			$('#divIndexNumber').removeClass('has-error has-feedback');
			$('#spanIndexNumber').remove();
			
		});

	}else{
		
	}

	if(full_name == ''){
		//MSK-00102-full_name 
		$("#btnSubmit").attr("disabled", true);
		$('#divFullName').addClass('has-error has-feedback');
		$('#divFullName').append('<span id="spanFullName" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The full name is required" ></span>');	
			
		$("#full_name").keydown(function(){
			//MSK-00103-full_name 
			$("#btnSubmit").attr("disabled",false);	
			$('#divFullName').removeClass('has-error has-feedback');
			$('#spanFullName').remove();
			
		});

	}else{
		
	}

	if(i_name == ''){
		//MSK-00102-i_name 
		$("#btnSubmit").attr("disabled",true);
		$('#divIName').addClass('has-error has-feedback');
		$('#divIName').append('<span id="spanIName" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The initials name is required" ></span>');	
		
		$("#i_name").keydown(function(){
			//MSK-00103-i_name 
			$("#btnSubmit").attr("disabled",false);	
			$('#divIName').removeClass('has-error has-feedback');
			$('#spanIName').remove();
			
		});
	
	}else{
		
	}

	if(address == ''){
		//MSK-00102-address
		$("#btnSubmit").attr("disabled",true);
		$('#divAddress').addClass('has-error has-feedback');
		$('#divAddress').append('<span id="spanAddress" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The address is required" ></span>');	
		
		$("#address").keydown(function() {
			//MSK-00103-address
			$("#btnSubmit").attr("disabled", false);	
			$('#divAddress').removeClass('has-error has-feedback');
			$('#spanAddress').remove();
			
		});
	
	}else{
		
	}
	
	if(gender == 'Select Gender'){
		//MSK-00102-gender
		$("#btnSubmit").attr("disabled", true);
		$('#divGender').addClass('has-error has-feedback');
		$('#divGender1').append('<span id="spanGender" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The gender is required" ></span>');	
		
		$("#gender").change(function() {
			//MSK-00103-gender
			$("#btnSubmit").attr("disabled", false);	
			$('#divGender').removeClass('has-error has-feedback');
			$('#spanGender').remove();
			
		});
	
	}else{
		
	}

	if(phone == ''){
  		//MSK-00102-phone
		$('#divPhone').addClass('has-error has-feedback');
		$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The phone number is required" ></span>');	
	 		
		$( "#phone" ).keydown(function() {
			//MSK-00103-phone
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhone').removeClass('has-error has-feedback');
			$('#spanPhone').remove();
			
		});
	
	}else{
		if (telformat.test(phone) == false){ 
			//MSK-00104-phone
			$('#divPhone').addClass('has-error has-feedback');
			$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid phone number" ></span>');
		
			$("#phone" ).keydown(function(){//MSK-00105-phone
				
				var $field = $(this);
    			var beforeVal = $field.val();// this is the value before the keypress

    			setTimeout(function() {

        			var afterVal = $field.val();// this is the value after the keypress
				
					if (telformat.test(afterVal) == true){
						//MSK-00106-phone
						$("#btnSubmit").attr("disabled", false);
						$('#divPhone').removeClass('has-error has-feedback');
						$('#spanPhone').remove();
						$('#divPhone').addClass('has-success has-feedback');
						$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-ok form-control-feedback"></span>');
						
					}else{
						//MSK-00107-phone
						$("#btnSubmit").attr("disabled", true);
						$('#spanPhone').remove();
						$('#divPhone').addClass('has-error has-feedback');
						$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
							
					}
				
    			}, 0);
				 	
			});
		
    	}else{
		
		}
		  
	}
	
	if(email == ''){
   		//MSK-00102-email
		$('#divEmail').addClass('has-error has-feedback');
		$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The email address is required" ></span>');	
	
		$( "#email" ).keydown(function() {
			//MSK-00103-email
			$("#btnSubmit").attr("disabled", false);	
			$('#divEmail').removeClass('has-error has-feedback');
			$('#spanEmail').remove();
			
		});
		
	}else{
		if (mailformat.test(email) == false){ 
			//MSK-00108-email
			$('#divEmail').addClass('has-error has-feedback');
			$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
		
			$("#email").keydown(function() {//MSK-00109-email
				
				var $field = $(this);
    			var beforeVal = $field.val();// this is the value before the keypress

    			setTimeout(function() {

        			var afterVal = $field.val();// this is the value after the keypress
				
					if (mailformat.test(afterVal) == true){
						//MSK-00110-email
						$("#btnSubmit").attr("disabled", false);
						$('#divEmail').removeClass('has-error has-feedback');
						$('#spanEmail').remove();
						$('#divEmail').addClass('has-success has-feedback');
						$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-ok form-control-feedback"></span>');
						
					}else{
						//MSK-00111-email
						$("#btnSubmit").attr("disabled", true);
						$('#spanEmail').remove();
						$('#divEmail').addClass('has-error has-feedback');
						$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
					
					}
				
    			}, 0);
				 	
			});
		
		}else{
			
		}
			  
	}

	if(photo == ''){
		//MSK-00102-photo
		output.src="../uploads/error.png";
		
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The image is required" ></span>');	
		
	}else{
		
	}
	
	if(full_name == '' || i_name == '' || address == '' || gender == '' || phone == '' || email == '' || mailformat.test(email) == false || telformat.test(phone) == false || photo == '' ){
		//MSK-000098- form1 validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
	}

});
</script>

<!--run insert alert using PHP & JS/jQuery  --> 
<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
  
$msg=$_GET['msg'];
$index=$_GET['index'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#index_Duplicated');
			myModal.modal('show');			
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
						
			</script>
		";
	}

	if($msg==2){//MSK-00120 
		echo"
			<script>
						
			var myModal1 = $('#modalSelectGrade');
			myModal1.data('id', '$index').modal('show');//MSK-00121
						 
			</script>
		";
	
	}

	if($msg==3){
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==4){
		echo"
			<script>
			
			var myModal = $('#index_email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==5){
		echo"
			<script>
			
			var myModal = $('#email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==6){
		echo"
			<script>
			
			var myModal = $('#upload_error1');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
    
    if($msg==7){
		echo"
			<script>
			
			var myModal = $('#insert_Success');
			myModal.modal('show');

			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
}
?><!--./Insert alert --> 

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>
  	 	
</div><!-- /.content-wrapper -->  
                           
