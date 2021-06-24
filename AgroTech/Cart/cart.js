		continueBtn = document.querySelectorAll('.buttonIDS')
		let array = [];
		let value = [];
		let names = document.getElementById('name_cart')
		let lastName = document.getElementById('lastname_cart')
		let email = document.getElementById('inputEmail4')
		let adress = document.getElementById('inputAddress')
		let state = document.getElementById('inputState')
		let zip = document.getElementById('inputZip')
		let total = 0;

		continueBtn.forEach(b =>
				b.addEventListener('click', () => {
						let id = event.srcElement.id
						$.ajax({
								type: 'POST',
								url: '/Cart/cartDelete.php',
								data: { id_tov: id },
								success: function (data) {
									location.reload()
								}
						})
				})
		)
		$('table td span').each(function () {
			 total += parseInt($(this).html())
		})
		document.getElementById('totalth').innerHTML = total + "$"
		function cart() {
				$('table td p').each(function () {
					array.push($(this).html())
				})
				$('table td input[type=number]').each(function () {
					value.push($(this).val())
				})
				$.ajax({
					type: 'POST',
					url: '/Cart/order.php',
					data: {
						arrayL: array,
						values: value,
						cName: names.value,
						clastName: lastName.value,
						cemail: email.value,
						cadress: adress.value,
						cstate: state.value,
						czip: zip.value
					},
					success: function (data) {
						location.reload();
					},
				})
		}