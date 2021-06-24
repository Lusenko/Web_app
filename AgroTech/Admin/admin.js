const form = document.getElementById('form')
continueBtn = document.getElementById('submit')
form.onsubmit = e => {
	e.preventDefault()
}
continueBtn.onclick = () => {
	let xhr = new XMLHttpRequest()
	xhr.open('POST', '/Admin/adminQuery.php', true)
	xhr.onload = () => {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response
				if (data === 'success') {
						window.location =
							'http://kursova/Admin/admin/admin/admin/admin.php'  
				} else {
					document.getElementById('error').innerHTML = data
				}
			}
		}
	}
	let formData = new FormData(form)
	xhr.send(formData)
}
