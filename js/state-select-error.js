function val() {
if(frm.state.selectedIndex==0) 
{
	alert('Please select a state');
	frm.state.focus();
	return false;
}
return true;
}