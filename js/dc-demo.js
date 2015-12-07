function trim(s) 
{
  // Remove leading spaces and carriage returns
  
  while ((s.substring(0,1) == ' ') || (s.substring(0,1) == '\n') || (s.substring(0,1) == '\r'))
  {
    s = s.substring(1,s.length);
  }

  // Remove trailing spaces and carriage returns

  while ((s.substring(s.length-1,s.length) == ' ') || (s.substring(s.length-1,s.length) == '\n') || (s.substring(s.length-1,s.length) == '\r'))
  {
    s = s.substring(0,s.length-1);
  }
  return s;
}

function checkAlpha(inputStr) {
var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
     var checkStr = inputStr;
     var allValid = true;     
            
     for (i = 0;  i < checkStr.length;  i++) {
          ch = checkStr.charAt(i);
          for (j = 0;  j < checkOK.length;  j++)
               if (ch == checkOK.charAt(j))
                    break;
          if (j == checkOK.length) {
               allValid = false;
               break;
          }
     }     
     if (!allValid) {
          return false;
     }
     return true;
}

function IsNumeric(strString)
   //  check for valid numeric strings	
{
   var strValidChars = "0123456789";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;

   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
         blnResult = false;
         }
      }
   return blnResult;
 }
function validateDate(day,mon,year)
{


      switch(mon)
         {
         case "2" :
            //February
            if (year == Math.round(year / 4) * 4)
	       //leap year
	         {
	         
	       if (day > 29)
                  {
                  return false;
                  }
           else
				  {
				  return true;
				  }
				       
               }
            else
               {
               //non-leap year
               if (day > 28)
                  {
                  return false;
                  }
               else
				  {
				  return true;
				  }
               }
               break;	
         case "4" :
            //April
            if (day > 30)
               {
               return false;
               }
               return true;	
               break;
         case "6":
            //June
            if (day > 30)
               {
               return false;
               }	
               return true;
               break;		
         case "9":
            //September
            if (day > 30)
               {
               return false;
               }	
               return true;
               break;
         case "11":
            //November
            if (day > 30)
               {
               return false;
               }	
               return true;
               break;
         default:
            //date is valid
            return true;
            break;
         }
  }

 function blankvalidation()
{
var themessage = "";






// First Name
if (trim(document.frmVICStep1.txtFirstName.value)=="") {

document.frmVICStep1.txtFirstName.focus();
//themessage = themessage + "Please specify your First Name. \n";
alert("Please specify your First Name");
return false;
}

// Last Name
if (trim(document.frmVICStep1.txtLastName.value)=="") {
document.frmVICStep1.txtLastName.focus(); 
//themessage = themessage + "Please specify your Last Name. \n";
alert("Please specify your Last Name");
return false;
}

//Date Validations
strDOBMonth = document.frmVICStep1.txtDOBMonth.value;
strDOBDate = document.frmVICStep1.txtDOBDate.value;
strDOBYear = document.frmVICStep1.txtDOBYear.value;



// Month of Birth
if (strDOBMonth == "") {
document.frmVICStep1.txtDOBMonth.focus(); 
//themessage = themessage + "Please specify your Month of Birth. \n";
alert("Please specify your Month of Birth");
return false;
}

// Date of Birth
if (strDOBDate == "") {
document.frmVICStep1.txtDOBDate.focus();
//themessage = themessage + "Please specify your Date of Birth. \n";
alert("Please specify your Date of Birth");
return false;
}

// Year of Birth
if (strDOBYear == "") {
document.frmVICStep1.txtDOBYear.focus(); 
//themessage = themessage + "Please specify your Year of Birth. \n";
alert("Please specify your Year of Birth");
return false;


}
else
{
	if (!IsNumeric(strDOBYear)){
	
		document.frmVICStep1.txtDOBYear.focus();
		//themessage = themessage + "Please specify valid Year of Birth. \n";
		alert("Please specify valid Year of Birth");
		return false;
	}
	if (trim(document.frmVICStep1.txtDOBYear.value).length <4 )
	{
		document.frmVICStep1.txtDOBYear.select();
		document.frmVICStep1.txtDOBYear.focus();
		alert("Year should be atleast 4 Characters");
		return false;
	}
	if (document.frmVICStep1.txtDOBYear.value < 1800 || document.frmVICStep1.txtDOBYear.value>2015 )
		 {
			document.frmVICStep1.txtDOBYear.focus();
			alert("Please specify valid Year of Birth");
			return false;
		 }
}	

//Valid Date
if (strDOBMonth != "" && strDOBDate != "" && strDOBYear != "")
{
	if (IsNumeric(strDOBYear))
	{

	
		if (!validateDate(strDOBDate,strDOBMonth,strDOBYear))
		{



			document.frmVICStep1.txtDOBMonth.focus(); 
		//	themessage = themessage + "Please specify a valid Date. \n";				
			alert("Please specify a valid Date");
			return false;
		}
	}

}


if (trim(document.frmVICStep1.txtZipCode.value)=="")
{

document.frmVICStep1.txtZipCode.focus(); 
alert("Please specify your Zip Code");
return false;

}
else
{
	if (!IsNumeric(trim(document.frmVICStep1.txtZipCode.value)))
	{
	
		document.frmVICStep1.txtZipCode.focus(); 
	
		alert("Please specify valid Zip Code");
		return false;
		
	}
	if (trim(document.frmVICStep1.txtZipCode.value).length < 5)
	{
		document.frmVICStep1.txtZipCode.select(); 
		document.frmVICStep1.txtZipCode.focus();
		//themessage = themessage + "Please specify valid Year of Birth. \n";
		alert("ZipCode should be atleast 5 Characters");
		return false;
	} 
}	




document.frmVICStep1.submit();

 }
  
  



function fld_alpha()
{
 if (event.keyCode > 90 || event.keyCode < 65 )
 {
	if (event.keyCode == 13)
	{
	return true;
	}	

	if ( event.keyCode < 123 && event.keyCode > 96)
	{
	return true;
	}
	else
	{	
		if (event.keyCode == 32 || event.keyCode == 39 || event.keyCode == 45)
		{
		return true;
		}
		else
		{
		return false;
		}	
		
	}
 }
}

function isAlpha_Numeric_withHyphen(e)
{   
	var c = (window.Event) ? e.which : e.keyCode;
	if ((c < 65 || c > 90) && (c < 97 || c > 122) && (c < 48 || c > 57) && c!=32 && c!=46 && c!=45  ) 
	{
	e.returnValue=false;
	}
	
}


function fld_alpha_without_sp_char()
{
 if (event.keyCode > 90 || event.keyCode < 65 )
 {
	if (event.keyCode == 13)
	{
	return true;
	}	

	if ( event.keyCode < 123 && event.keyCode > 96)
	{
	return true;
	}
	else
	{	
		
		return false;
			
		
	}
 }
}


function fld_alphanum() {
	if (event.keyCode == 13)
	{
	return true;
	}
	if (event.keyCode==34 || event.keyCode==39||event.keyCode==45||event.keyCode==32)
	{
	return true;
	}


	if ((event.keyCode < 48) || (event.keyCode> 122) || 
	   ((event.keyCode> 57) && (event.keyCode < 65)) || 
	   ((event.keyCode > 90) && (event.keyCode < 97))   ) {
		return false;
	} else {
		return true;
	}
}

function fld_num(e)
{
	var keynum
	if(window.event) // IE
	{
		keynum = e.keyCode
	}
	else if(e.which) // Netscape/Firefox/Opera
	{
		keynum = e.which
	}

	if(keynum==13 || keynum==8)
	{
		return true;
	}
	if (keynum <48 || keynum >57)
	{
		return false;
	}
}

function fld_numeric()
{

	if (event.keyCode == 13 )
	{
		return true;
	}
	else if(event.charCode == 13)
	{
	return true;
	}	

	if (event.keyCode < 48 || event.keyCode > 57 )
	{
		return false;
	}
	else if(event.charCode < 48 || event.charCode > 57)
	{
	return false;
	}
}

// func. allowing decimal value.
// By	:	B. Surendar
// Date	:	10-May-06
function fld_float()
{
	if (event.keyCode == 13 || event.keyCode == 46)
	{
	return true;
	}	

	if (event.keyCode < 48 || event.keyCode > 57)
	{
	return false;
	}
}


function fld_notnull(id)
{
	
	if (trim(document.getElementById(id).value).length == 0 || trim(document.getElementById(id).value) == '')
	{
	document.getElementById(id).focus();
	alert('Field should not be null');
	return false;
	}
}

function fld_maxlen(id,len,id_name)
{
	if (trim(document.getElementById(id).value).length < len)
	{
		document.getElementById(id).select();
		document.getElementById(id).focus();
		alert(id_name + ' should be atleast ' + len + ' Characters');
		return false;
	}
}
function fld_combo(id)
{

	
	if (document.getElementById(id).selectedIndex == 0 )
	{
		document.getElementById(id).focus();
		alert('Please Select atleast on option');
		return true;
	}
}
function currencyFormat(e,num) 
{
var whichCode = (window.Event) ? e.which : e.keyCode;
var strCheck = '0123456789.';
var temp;

	key = String.fromCharCode(whichCode);
	
	if (whichCode == 13) return true;  
	key = String.fromCharCode(whichCode);  // Get key value from key code

	if (num.indexOf(".") >=0) 
	{
		temp=num.substring(num.indexOf("."),num.length);
		if(temp.length>2) return false;
	}

	if ((whichCode == 46)&&(num.indexOf(key) != -1)) return false;
	
	if (strCheck.indexOf(key) == -1) return false; 
}


function only_alphabets(e)
{


var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;

//allow tab key, backspace key and all arrow keys, delete keys

if (key==9 || key==8 || (key>36 && key<41) || key==46) return true;

 if (key > 90 || key < 65 )
 {
	if (key == 13)
	{
	return true;
	}	

	if ( key < 123 && key > 96)
	{
	return true;
	}
	else
	{	
		if (key == 32 || key == 39 || key == 45)
		{
		return true;
		}
		else
		{
		return false;
		}	
		
	}
 }


}

function only_numbers(e)
{


document.defaultAction = true; 
var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;

//allow tab key, backspace key and all arrow keys, delete keys


if (key==9 || key==8 || (key>37 && key<41) || key==46) return true;



	if (key == 13)
	{
	return true;
	}
	if (key==34 ||key==45)
	{
	return true;
	}



	if (key>47 && key<59)
	{
		return true;
	} else 
	{
		return false;
	}


}

function only_alpha_numbers(e)
{

var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;

//allow tab key, backspace key and all arrow keys, delete keys

if (key==9 || key==8 || (key>36 && key<41) || key==46) return true;

	if (key == 13)
	{
	return true;
	}
	if (key==34 || key==39||key==45||key==32)
	{
	return true;
	}
	if ((key < 48) || (key> 122) || 
	   ((key> 57) && (key < 65)) || 
	   ((key > 90) && (key < 97))   ) {
		return false;
	} else {
		return true;
	}

}


function kd_onlyNumbers(e)
{
	var evt = e || window.event;
	var keycode = evt.keyCode

	if(e.shiftKey && (keycode>47 && keycode <58)) return false;

	if( 
			(keycode>47 && keycode <58) 
			|| (keycode > 35 && keycode <41) 
			|| keycode==46 
			|| keycode==9 
			|| keycode==8
			|| keycode==13			
			
		)
	{
		return true;
	}
	else
	{
		return false;
	}
	
	
	
}



function kd_alpha_with_quotes(e)
{
	var evt = e || window.event;
	var keycode = evt.keyCode;

	
	if( 
			(keycode>64 && keycode <91) 
			|| (keycode > 35 && keycode <41) 
			|| keycode==46 
			|| keycode==32
			|| keycode==9 
			|| keycode==8
			|| keycode==13			
			|| keycode==222			
			|| keycode==189						
		)
	{
		return true;
	}
	else
	{
		return false;
	}

}
</script>
