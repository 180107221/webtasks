let buttons = document.querySelectorAll('button');
for (let i of buttons) {
	i.addEventListener('click', ()=> {
		if(i.parentNode.dataset.status == 'done'){
			i.parentNode.dataset.status = 'none';
		}
		else{
			i.parentNode.dataset.status = 'done';
		}
	});

}