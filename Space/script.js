let img = document.querySelector('#fImg')
let get = document.getElementById('Get')
let inputText = document.getElementById('Text')
let randomQuotesButton = document.getElementById('randomQuotesButton')
function setNewSize()
{
    img.style.width = "500px"
    img.style.height = "366px"
}
function setOldImage()
{
    img.style.width = "400px"
    img.style.height = "266px"
}
get.onclick=function(){
    alert(navigator.userAgent)
}
let buttom = document.getElementById("SubmitId")

buttom.addEventListener('click', () => {
    if (document.getElementById('contactChoice1').checked == true)
    {
        document.getElementById('fImg').src = 'imeges/radio/radio1.jpg'
    }
    else if (document.getElementById('contactChoice2').checked == true)
    {
        document.getElementById('fImg').src = 'imeges/radio/radio2.jpg'
    }
    else if (document.getElementById('contactChoice3').checked == true)
    {
        document.getElementById('fImg').src = 'imeges/radio/radio3.jpg'
    }
    else if (document.getElementById('contactChoice4').checked == true)
    {
        document.getElementById('fImg').src = 'imeges/radio/radio4.jpg'
    }
    else if (document.getElementById('contactChoice5').checked == true)
    {
        document.getElementById('fImg').src = 'imeges/radio/radio5.jpg'
    }
})
function add_favorite(a) { 
    title=document.title; 
    url=document.location; 
    try { 
      // Internet Explorer 
      window.external.AddFavorite(url, title); 
    } 
    catch (e) { 
      try { 
        // Mozilla 
        window.sidebar.addPanel(title, url, ""); 
      } 
      catch (e) { 
        // Opera 
        if (typeof(opera)=="object") { 
          a.rel="sidebar"; 
          a.title=title; 
          a.url=url; 
          return true; 
        } 
        else { 
          // Unknown 
          alert('Нажмите Ctrl-D чтобы добавить страницу в закладки'); 
        } 
      } 
    } 
    return false; 
  }
  var op;
  function func() {
    var result;
    var num1 = Number(document.getElementById("num1").value);
    var num2 = Number(document.getElementById("num2").value);
    switch (op) {
      case '+':
        result = num1 + num2;
        break;
      case '-':
        result = num1 - num2;
        break;
      case '*':
        result = num1 * num2;
        break;
      case '/':
        if (num2) {
          result = num1 / num2;
        } else {
          result = 'бесконечность';
        }
        break;
      default:
        result = 'выберите операцию';
    }

    document.getElementById("result").innerHTML = result;
  }
  function Select(value)
  {
    location = value;
  }
  function Language(value)
  {
    location = value;
  }
  function randQ()
  {
    let rand = ['Лучше быть последним — первым, чем первым — последним',
          'На случай, если буду нужен, то я там же, где и был, когда был не нужен',
          'Если волк молчит то лучше его не перебивай',
          'Каждый в цирке думает, что знает в цирке, но не каждый, что в цирке знает, что в цирке не каждый знает думает ',
          'Легко вставать, когда ты не ложился',
          'Кем бы ты ни был, кем бы ты не стал, помни, где ты был и кем ты стал']

    let rnd = Math.floor(Math.random() * rand.length)
    if(inputText.value != rand[rnd])
    {
      inputText.value = rand[rnd]     
    }
  }

  const form = document.getElementById('form')
let radio_form = document.getElementById('first_input')
let inputType = document.getElementById('second_input')
let phoneForm = document.getElementById('form_phone')
let formName = document.getElementById('nameForm')
let formMail = document.getElementById('form_mail')
let passForm = document.getElementById('passForm')
let passwordas = ''

form.addEventListener('submit', formSend)
async function formSend(e) {
	e.preventDefault()
	if ( phoneForm.value == '380' || formName.value == '' || formMail.value == '') {
		alert('Enter Name or Mail or Phone')
	} else {
		if (radio_form.checked == true && inputType.value == 12) {
			if (phoneForm.type === 'number') {
				phoneForm.type = 'text'
				let phone = phoneForm.value
				phoneForm.type = 'number'
				for (let index = 0; index < passForm.value.length; index++) {
					passwordas += '•'
				}
				let resultStrt = 'Name: ' + formName.value + '\n' + ' Password: ' + passwordas + '\n' + ' Email: ' + formMail.value + '\n' + ' Phone: +' + phone + '\n' +' Quetion one: Red' + '\n' + ' Quetion two: ' + inputType.value
				document.getElementById('text_form').value = resultStrt
			}
		} else {
			alert('Get answer on quetion!')
		}
	}
}
