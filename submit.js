
// {
//	var name = document.getElementById("name").value;
//	document.getElementById("demo").innerHTML = name;
//}
function submit()
{
	var form = document.getElementById('form_id');
 function listenToSubmit(event) {
 	event.preventDefault();

 }
 form.addEventListener('submit', listenToSubmit);
}