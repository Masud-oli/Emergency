
//action type title

  function validateInput_mobileNo2()
   {
	var pn=document.forms["f"]["mobileNo"].value;
			if(/[^0-9]+$/.test(pn))
			{
				
			alertify.alert("<b><img src='admin/images/warning.png' width='22' height='22'> Please input decimal value.</b>");	
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
            xmlHttp.open("GET","./layout/selectToSelect.php?name="+values,true);
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
			xmlHttp.open("GET","./layout/selectToSelect2.php?name="+values,true);
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
 var limit = 99;

 function update() {
   var old = document.f.counter.value;
   document.f.counter.value=document.f.reportDescription.value.length;
   document.f.counter.style.color = '#ff0000';
   document.f.counter.style.fontWeight = 'bold';
   	if(document.f.counter.value > limit && old <= limit) 
		{
     		alertify.error("<span class='glyphicon glyphicon-warning-sign'></span> Already 100 Characters typed.");
        }
   }
   
  
	function validateForm_rab()
	{
		var pn=document.forms["f"]["action_title"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> Action title name must be select.</b>");	
	            return false;
	
			}
				
		var pn=document.forms["f"]["divisionName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> Division name must be select.</b>");	
	            return false;
	
			}
			
		var pn=document.forms["f"]["districtName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> District name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["f"]["upazillaName"].value;
			if (pn==null || pn=="select") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> Upazilla name must be select.</b>");	
	            return false;
	
			}
		var pn=document.forms["f"]["placeName"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> Place name must be field out.</b>");	
	            return false;
	
			}
	 var pn=document.forms["f"]["mobileNo"].value.length;
			 if (pn<=13) // Double Quote must be closed.
				{
					
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> Mobile no. must be field out.</b>");	
	           	 return false;
		
				}
		
		var pn=document.forms["f"]["reportDescription"].value;
			if (pn==null || pn=="") // Double Quote must be closed.
			{
				
				alertify.alert("<b><img src='admin/images/warning.png' width='20' height='20'> Report description must be field out.</b>");	
	            return false;
	
			}
			
		
		
				
	}
	
	

function callCourses2()
{ 
    if(document.forms[0].divisionName.value!='select')
    { 
        var divisionName=document.forms[0].divisionName.value;
        values=divisionName;    
        if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
        {
            xmlHttp.open("GET","layout/selectToSelect_police.php?name="+values,true);
            xmlHttp.onreadystatechange=serverResponseDistrictName;
            xmlHttp.send(null);
        }else{       
            setTimeout('callCourses2()',500);     
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



function callUpazilla2()
{ 
	if(document.forms[0].districtName.value!='select')
	{ 
		var districtName=document.forms[0].districtName.value;
		values=districtName;	
		if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
		{
			xmlHttp.open("GET","layout/selectToSelect2_police.php?name="+values,true);
			xmlHttp.onreadystatechange=serverResponseUpazillaName;
			xmlHttp.send(null);
		}else{		 
			setTimeout('callUpazilla2()',500);     
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

function callCourses3()
{ 
    if(document.forms[0].divisionName.value!='select')
    { 
        var divisionName=document.forms[0].divisionName.value;
        values=divisionName;    
        if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
        {
            xmlHttp.open("GET","layout/selectToSelect_fire_service.php?name="+values,true);
            xmlHttp.onreadystatechange=serverResponseDistrictName;
            xmlHttp.send(null);
        }else{       
            setTimeout('callCourses3()',500);     
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



function callUpazilla3()
{ 
	if(document.forms[0].districtName.value!='select')
	{ 
		var districtName=document.forms[0].districtName.value;
		values=districtName;	
		if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
		{
			xmlHttp.open("GET","layout/selectToSelect2_fire_service.php?name="+values,true);
			xmlHttp.onreadystatechange=serverResponseUpazillaName;
			xmlHttp.send(null);
		}else{		 
			setTimeout('callUpazilla3()',500);     
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

function callCourses4()
{ 
    if(document.forms[0].divisionName.value!='select')
    { 
        var divisionName=document.forms[0].divisionName.value;
        values=divisionName;    
        if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
        {
            xmlHttp.open("GET","layout/selectToSelect_hospital.php?name="+values,true);
            xmlHttp.onreadystatechange=serverResponseDistrictName;
            xmlHttp.send(null);
        }else{       
            setTimeout('callCourses4()',500);     
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



function callUpazilla4()
{ 
	if(document.forms[0].districtName.value!='select')
	{ 
		var districtName=document.forms[0].districtName.value;
		values=districtName;	
		if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
		{
			xmlHttp.open("GET","layout/selectToSelect2_hospital.php?name="+values,true);
			xmlHttp.onreadystatechange=serverResponseUpazillaName;
			xmlHttp.send(null);
		}else{		 
			setTimeout('callUpazilla4()',500);     
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

function callhospital4()
{ 
	if(document.forms[0].upazillaName.value!='select')
	{ 
		var upazillaName=document.forms[0].upazillaName.value;
		values=upazillaName;	
		if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
		{
			xmlHttp.open("GET","layout/selectToSelect3_hospital.php?name="+values,true);
			xmlHttp.onreadystatechange=serverResponseHospital;
			xmlHttp.send(null);
		}else{		 
			setTimeout('callhospital4()',500);     
			}	
	}else
	{alert('Please, Select an UserName!'); return false;}
}



function serverResponseHospital()
{  
  if(xmlHttp.readyState==4)
    {
	  if(xmlHttp.status==200)
	    {
			xmlResponse=xmlHttp.responseXML;
	  		xmlDocumentElement=xmlResponse.documentElement; 
	  		optionBuildup=xmlDocumentElement.firstChild.data;
			if(optionBuildup!='blank')			
	  		document.getElementById('hospitalName').innerHTML='<i>'+optionBuildup+'</i>';
			else
			document.getElementById('hospitalName').innerHTML='';
		}
		else		
		    alert("There was a problem while accessing the server"+xmlHTTP.statusText);	
		
			
	}	
}