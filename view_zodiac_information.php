<!-- For support of plugin and details of plugin contact support@zenixsol.com-->
<html>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<link href="<?php echo get_plugin_url(); ?>/zodiac-sign-information-widget/style.css" rel="stylesheet" type="text/css">

<script>
//this function renders information using ajax from getstar.php file
function getStarInformation(){

 //Gets Values of variables which are selected througn dropdown list
 var urlToget= $("#baseDir").val();
 var month=$("#getinfo_month").val();
 var date=$("#get_date").val();
 		
   if(month=="-1")
   {
   		alert("Please Select Month ");
		return;
   }
   else if(date=="-1")
   {
   		alert("Please Select Date");
		return; 
   }

  $.ajax({
   type: "GET",
    url: urlToget+"/zodiac-sign-information-widget/getstar_zodiac_information.php",
    data: "M=" + month+"&D="+date,
    success: function(server_response){
           $( '#txtResult' ).html( server_response );
        }                                      
   });
  
}

</script>
</head>
<?php 

//Function to get the directory of PLUGIN
function get_plugin_url() 
 {
    if ( !function_exists( "plugins_url" ) )
        return get_option( "siteurl" ) . "/wp-content/plugins/" . plugin_basename( dirname( __FILE__ ) );
    else
        return plugins_url( );
}
//functions to get url of blog 

?>
	<input type="hidden" id="baseDir" value="<?php echo get_plugin_url(); ?>" /><!-- Saves the value of hidden field-->
<!-- Main Wrap -->	
<table id="zodiac">
	<tr>
		<td>Month</td>
		<td>
	<select name="Month" id="getinfo_month">
				
				<option value="-1"> Select Month</option>
				<option value="January">January</option>
				<option value="Febuary">Febuary</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
	</select>
	</td>
</tr>	
<tr>
		<td>Date</td>
		   <td>
				<select name="Day"  id="get_date" style="float:right" >
				  <option value="-1"> Select Day  </option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				  <option value="9">9</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				  <option value="13">13</option>
				  <option value="14">14</option>
				  <option value="15">15</option>
				  <option value="16">16</option>
				  <option value="17">17</option>
				  <option value="18">18</option>
				  <option value="19">19</option>
				  <option value="20">20</option>
				  <option value="21">21</option>
				  <option value="22">22</option>
				  <option value="23">23</option>
				  <option value="24">24</option>
				  <option value="25">25</option>
				  <option value="26">26</option>
				  <option value="27">27</option>
				  <option value="28">28</option>
				  <option value="29">29</option>
				  <option value="30">30</option>
				  <option value="31">31</option>
				</select>
			</td>
		</tr>
</table>
<br/>
<input type="button" class="butn" name="btnGetInfo" value="Get Information" onClick="getStarInformation();" />
<br/>
<br/>
<div id="txtResult"></div>
</html>
