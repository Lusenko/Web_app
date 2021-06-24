const form = document.getElementById('formid')
continueBtn = document.getElementById('submit')
let fname = document.getElementById('name')
let lastname = document.getElementById('lastname')
let product = document.getElementById('productname')
let amout = document.getElementById('amout')
let id = document.getElementById('id')

form.onsubmit = (e) =>{
		e.preventDefault();
}
continueBtn.onclick = () =>{
	let xhr = new XMLHttpRequest();
	xhr.open("POST","/Providers/providerData.php", true);
	xhr.onload = ()=>{
			if(xhr.readyState === XMLHttpRequest.DONE){
				if(xhr.status === 200){
					let data = xhr.response;
					if(data){
							fname.value = ''
							lastname.value = ''
							product.value = ''
							amout.value = ''
							alert(data)
					}
				}
			}
	}
	let formData = new FormData(form)
	xhr.send(formData);
}