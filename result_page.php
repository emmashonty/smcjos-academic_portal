<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_student.php'); ?>
<?php include_once('sidebar1.php'); ?>

<style>

body { 

	overflow-y:scroll;
}


.modal-content1 {
	
   position: absolute;
   left: 125px; 
}
@media only screen and (max-width: 500px) {

	.modal-content1 {
   		
		position:static;
   
	}
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}
.image-error{
	border:1px solid #f44336;
	
}

.image-success{
	border:1px solid #009900;
	
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}

body.modal-open-noscroll1
{
    overflow:hidden;
	
 
}
/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}




</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        
        	First Term
           
            <small>Result</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Result Page</a></li>
        </ol>
	</section>

<!-- table for view all records -->
       
	<!-- Main content -->
	<section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000132-1-->
        	<div class="col-md-11">
            	<div class="box">
                	<div class="box-header">
                 		
                        <!--MSK-000115-td3--><td id="td3_<?php echo $row['id'];?>"><?php echo $row['s_class'];?>/</td>                    
                  		<h3 class="box-title"><small>First Term Result</small>/</h3>
                       
                 
                <!--MSK-000115-td1--><td id="td1_<?php echo $row['id'];?>"><?php echo $row['full_name'];?>/2021/2022/</td>
                        
                              
                 <!--MSK-000115-td1--><td id="td1_<?php echo $row['id'];?>"><?php echo $row['index_number'];?></td>
                	</div><!-- /.box-header -->
                	
                    	<!-- MSK-00093-->
                		<table id="example1" class="table table-bordered table-striped">
                            
                               
                               
                                
                                <th class="col-md-4">Subject</th>
                                <th class="col-md-1">1st Ass</th>
                                <th class="col-md-1">2nd Ass</th>
                                <th class="col-md-1">1st Ass</th>
                                <th class="col-md-1">2nd Ass</th>
                                <th class="col-md-1">Exam</th>
                                <th class="col-md-1">Total</th>`
                                <th class="col-md-1">Grade</th>
                                <th class="col-md-1">Remark</th>
                               
                           
                        	<tbody>

<?php
include_once('../controller/config.php');
$sql="select * from first_result where reg_no=$reg_no";
//$sql="select * from first_result";
$result=mysqli_query($conn,$sql);
$count = 0;
$current_date_number=date("d");

if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		$sr_id=$row['id'];
?>                                                               
                                <tr>
               
           
               
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['subject']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['a1']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['a2']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['t1']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['t2']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['exam']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['total']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['grade']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['remark']; ?></td>
                                    
                                    
                                    

                               		</td>
                            	</tr>
<?php } } ?>
                        	</tbody>
                    	</table>
                	</div><!-- ./box-body -->
            	</div><!-- ./box -->
        	</div> 
 
        </div>
     </section>   
      
    <div id="paymentDetails">
    
    </div>
    
    <section class="content">
        <div id="viewInvoice">
        
        </div>
	</section>

<script>

function showModal3(paymentD){
//MSK-00104
	
	var myArray = $(paymentD).data("id").split(',');
	
	var index = myArray[0];
	var year = myArray[1];
	var month = myArray[2];
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				
				document.getElementById('paymentDetails').innerHTML = this.responseText;//MSK-000137
				$('#modalviewPayment1').modal('show');			
    		}
			
  		};	
		
    	//xhttp.open("GET", "my_first_term_result.php?index=" + index + "&year="+year + "&month="+month , true);												
  		//xhttp.send();//MSK-00105-Ajax End
	 
};

function showModal4(viewINV){
//MSK-00104
	
	var myArray = $(viewINV).data("id").split(','); 
	
	var index = myArray[0];
	var desc = myArray[1];
	var mFee = myArray[2];
	var year = myArray[3];
	var month = myArray[4];
	var date = myArray[5];
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				
				document.getElementById('viewInvoice').innerHTML = this.responseText;//MSK-000137
				$('#modalINV1').modal('show');	
				
    		}
			
  		};	
		
    	xhttp.open("GET", "my_first_term_result.php?index=" + index + "&desc="+desc + "&paid="+mFee + "&year="+year  + "&month="+month  + "&date="+date   , true);												
  		xhttp.send();//MSK-00105-Ajax End
	 
};

function scrollDown(){
	
	window.scrollTo(0,document.body.scrollHeight);
}

</script>

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
              
<?php include_once('footer.php');?>
