
	var count=0;
	function add_row()
{
 var security=document.getElementById("security").value;
 var securityno=document.getElementById("securityno").value;
 var amount=document.getElementById("amount").value;
 
 var security_date=document.getElementById("security_date").value;
 var bank=document.getElementById("bank").value;
 var branch=document.getElementById("branch").value;
 var valid_date=document.getElementById("valid_date").value;
 var amt =document.getElementById("amt").value;
 count=+count + +amount;
 var ab = amt - count;
  alert('Remaining amount'+':'+ ab);
//window.prompt("sometext",amt-count);
  
if(security!='' && securityno!='' && amount!='' && security_date!='' && bank!='' && branch!='' && valid_date!='')
{
if(count<=amt)
 
{
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length);
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='security1"+table_len+"'>"+security+"<input type='hidden' value='"+security+"' name='sec[]'/></td><td id='securityno1"+table_len+"'>"+securityno+"<input type='hidden' value='"+securityno+"' name='secno[]'/></td><td id='amount1"+table_len+"'>"+amount+"<input type='hidden' value='"+amount+"' name='amount[]'/></td><td id='security_date"+table_len+"'>"+security_date+"<input type='hidden' value='"+security_date+"' name='sec_date[]'/></td><td id='bank"+table_len+"'>"+bank+"<input type='hidden' value='"+bank+"' name='bank[]'/></td><td id='branch"+table_len+"'>"+branch+"<input type='hidden' value='"+branch+"' name='branch[]'/></td><td id='valid_date"+table_len+"'>"+valid_date+"<input type='hidden' value='"+valid_date+"' name='valid_date[]'/></td><td><input type='button' value='X' class='delete' onclick='delete_row("+table_len+")'></td></tr>";
 if(count==amt)
 {
	document.getElementById("Button").disabled = false; 
 }
}
 else
{	count-=amount;
	alert(" enter valid amount!!");
	
}
}
else
{
	alert(" enter all the fields!!");
	
}
 


document.getElementById("security").value="";
 document.getElementById("securityno").value="";
 document.getElementById("amount").value="";
 document.getElementById("security_date").value="";
 document.getElementById("bank").value="";
 document.getElementById("branch").value="";
 document.getElementById("valid_date").value="";
}
function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}
