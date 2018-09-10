
//action type title
function validateForm_actionType()
	{
		var pn=document.forms["myForm"]["report_title"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Report title must be field out.</b>");	
	            return false;
	
			}
			
				
	}
	
function validateForm_division()
	{
		var pn=document.forms["myForm"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Division name must be field out.</b>");	
	            return false;
	
			}
			
				
	}
	
function validateForm_district()
	{
		var pn=document.forms["myForm"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Division name must be select.</b>");	
	            return false;
	
			}
			
		var pn=document.forms["myForm"]["districtName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> District name must be field out.</b>");	
	            return false;
	
			}
				
				
	}
	
	function validateForm_rab()
	{
		var pn=document.forms["myForm"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Division name must be select.</b>");	
	            return false;
	
			}
			
		var pn=document.forms["myForm"]["districtName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> District name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["upazillaName"].value;
			if (pn==null || pn=="select") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Upazilla name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["rab_title"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> RAB title name must be field out.</b>");	
	            return false;
	
			}
				
		 var pn=document.forms["myForm"]["mobileNo"].value.length;
			 if (pn<=13) // Double Quote must be closed.
				{
					
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Mobile no. must be field out.</b>");	
	           	 return false;
		
				}
				
	}
	
	function validateForm_police()
	{
		var pn=document.forms["myForm"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Division name must be select.</b>");	
	            return false;
	
			}
			
		var pn=document.forms["myForm"]["districtName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> District name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["upazillaName"].value;
			if (pn==null || pn=="select") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Upazilla name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["police_title"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Police title name must be field out.</b>");	
	            return false;
	
			}
		 var pn=document.forms["myForm"]["mobileNo"].value.length;
			 if (pn<=13) // Double Quote must be closed.
				{
					
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Mobile no. must be field out.</b>");	
	           	 return false;
		
				}
		
	 				
	}
	
	function validateForm_fire_service()
	{
		var pn=document.forms["myForm"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Division name must be select.</b>");	
	            return false;
	
			}
			
		var pn=document.forms["myForm"]["districtName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> District name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["upazillaName"].value;
			if (pn==null || pn=="select") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Upazilla name must be select.</b>");	
	            return false;
	
			}
		
	     var pn=document.forms["myForm"]["fire_station_title"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Fire Station title name must be field out.</b>");	
	            return false;
	
			}
		 var pn=document.forms["myForm"]["mobileNo"].value.length;
			 if (pn<=13) // Double Quote must be closed.
				{
					
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Mobile no. must be field out.</b>");	
	           	 return false;
		
				}
				
				
	}
	function validateForm_hospital()
	{
		var pn=document.forms["myForm"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Division name must be select.</b>");	
	            return false;
	
			}
			
		var pn=document.forms["myForm"]["districtName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> District name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["upazillaName"].value;
			if (pn==null || pn=="select") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Upazilla name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["myForm"]["hospital_title"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Hospital title name must be field out.</b>");	
	            return false;
	
			}
		 var pn=document.forms["myForm"]["mobileNo"].value.length;
			 if (pn<=13) // Double Quote must be closed.
				{
					
				alertify.alert("<b><img src='images/warning.png' width='20' height='20'> Mobile no. must be field out.</b>");	
	           	 return false;
		
				}
				
				
	}

function validateInput_mobileNo()
{
	var pn=document.forms["myForm"]["mobileNo"].value;
			if(/[^0-9]+$/.test(pn))
			{
				
			alertify.alert("<b><img src='images/warning.png' width='22' height='22'> Please input decimal value.</b>");	
				return false;
	
			}

}

var xmlHttp = createXmlHttpRequestObject();
function createXmlHttpRequestObject()
{
  var xmlHttp;
  if(window.ActiveXobject)
  {
     try{
          xmlHttp=new ActiveXobject("Microsoft.XMLHttp");
         }catch(e){
                    xmlHttp=false;
                  }  
   }else{
          try{
               xmlHttp=new XMLHttpRequest();
              }catch(e){
                         xmlHttp=false;  
                        }   
   }
   
   if(!xmlHttp)
      alert("Error creating the XMLHttpRequest object."); 
    else
    return xmlHttp;
}


function callCourses()
{ 
    if(document.forms[0].divisionName.value!='select')
    { 
        var divisionName=document.forms[0].divisionName.value;
        values=divisionName;    
        if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
        {
            xmlHttp.open("GET","selectToSelect.php?name="+values,true);
            xmlHttp.onreadystatechange=serverResponseDistrictName;
            xmlHttp.send(null);
        }else{       
            setTimeout('callCourses()',500);     
            }   
    }else
    {alert('Please, Select a Division!'); return false;}
}

function serverResponseDistrictName()
{  
  if(xmlHttp.readyState==4)
    {
      if(xmlHttp.status==200)
        {
            xmlResponse=xmlHttp.responseXML;
            xmlDocumentElement=xmlResponse.documentElement; 
            optionBuildup=xmlDocumentElement.firstChild.data;
            if(optionBuildup!='blank')          
            document.getElementById('districtName').innerHTML='<i>'+optionBuildup+'</i>';
            else
            document.getElementById('districtName').innerHTML='';
        }
        else        
            alert("There was a problem while accessing the server"+xmlHTTP.statusText); 
        
            
    }   
}



function callUpazilla()
{ 
	if(document.forms[0].districtName.value!='select')
	{ 
		var districtName=document.forms[0].districtName.value;
		values=districtName;	
		if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
		{
			xmlHttp.open("GET","selectToSelect2.php?name="+values,true);
			xmlHttp.onreadystatechange=serverResponseUpazillaName;
			xmlHttp.send(null);
		}else{		 
			setTimeout('callUpazilla()',500);     
			}	
	}else
	{alert('Please, Select an UserName!'); return false;}
}



function serverResponseUpazillaName()
{  
  if(xmlHttp.readyState==4)
    {
	  if(xmlHttp.status==200)
	    {
			xmlResponse=xmlHttp.responseXML;
	  		xmlDocumentElement=xmlResponse.documentElement; 
	  		optionBuildup=xmlDocumentElement.firstChild.data;
			if(optionBuildup!='blank')			
	  		document.getElementById('upazillaName').innerHTML='<i>'+optionBuildup+'</i>';
			else
			document.getElementById('upazillaName').innerHTML='';
		}
		else		
		    alert("There was a problem while accessing the server"+xmlHTTP.statusText);	
		
			
	}	
}

