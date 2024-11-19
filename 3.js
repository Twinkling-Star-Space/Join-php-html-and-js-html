var x= document.foem1.name.value;
var y= document.form1.address.value;
var w= document.form1.email.value;
var z=document.form1.gm.value;

validation();
function validation()
{
    if(x=="" || x==NULL && y=="" || y==NULL &&z=="" || z==NULL && W=="" || w==NULL)
      {
        alert("FILL THE FORM");
      }
    else{
        alert("successful");
    }  
    if(x.lenght<=6 && y.length<=6 && z.length<=7 )
        {
            alert("ENTER MORE THE CHARACTER");
        }  
    else{
        alert("successful");
    }
    }