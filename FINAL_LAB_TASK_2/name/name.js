function nameValidate(){
	var name1=document.getElementById('name').value;
	if(name1=="")
	{
		alert("Null input!!");
		return false;
	}
	else
	{
		if((name1[0]>='A' && name1[0]<='Z') ||(name1[0]>='a' && name1[0]<='z'))
		{
			if(name1.length>=2)
			{
				var i=0;
				while(i<name1.length)
				{
					if(!((name1[i]>='A' && name1[i]<='Z') ||(name1[i]>='a' && name1[i]<='z') || name1[i]=='.' || name1[i]=='-' || name1[i]==' '))
					{
						alert("Invalid Input!!");
						return false;
					}
					i=i+1;
				}
				return true;
			}
			else
			{
				alert("Too short!!");
				return false;
			}
		}
		else
		{
			alert("Invalid Input!!");
			return false;
		}
	}
	return false;
}
