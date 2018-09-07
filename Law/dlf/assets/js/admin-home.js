
function openSidebar(){
	document.getElementById('side-bar').style.left = "0";
	document.getElementById('side-bar').style.width = "70%";
	document.getElementById('side-bar').style.zIndex = "100";
	document.getElementById('side-bar').style.transition = "1s";
}
function closeSidebar(){
	document.getElementById('side-bar').style.left = "-100px";
	document.getElementById('side-bar').style.width = "0px";
	document.getElementById('side-bar').style.transition = "1s";
}
function addClient(e){
	e.preventDefault();
	document.getElementById('table-body').style.display = "none";
	document.getElementById('form-body').style.display = "block";
	document.getElementById('manage-client').classList.remove('active');
	document.getElementById('add-client').classList.add('active');
	document.getElementById('add-client').style.textDecoration = "none";
	document.getElementById('add-client').style.color = "white";
}

function manageClient(e){
	e.preventDefault();
	document.getElementById('table-body').style.display = "block";
	document.getElementById('form-body').style.display = "none";
	document.getElementById('add-client').classList.remove('active');
	document.getElementById('manage-client').classList.add('active');
	document.getElementById('manage-client').style.textDecoration = "none";
	document.getElementById('manage-client').style.color = "white";
}
