var validated = false;

function calculateAge()
{
	document.getElementById("age").value = null;
	var selecteddate = document.getElementById("DOB").value;
	var d = new Date(selecteddate);
	var today = new Date();
	var ageYears = parseInt(today.getFullYear()) - parseInt(d.getFullYear());
	//var ageMonth = parseInt(today.getMonth()) - parseInt(d.getMonth());
	if(ageYears >= 0)
	{
		document.getElementById("age").innerHTML = ageYears;
	}
	else
	{
	
	}
}

function enableAge(){
	document.getElementById("age").disabled = "false"
}


