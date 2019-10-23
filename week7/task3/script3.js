let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];

let idCars = document.getElementById('cars');

for(let car of cars){
    let div = document.createElement('div');
    div.className = 'card';

    let image = document.createElement('img');
    image.src = car.image_url;
    image.className = 'card';

    let basket = document.createElement('img');
    basket.src = 'add-to-cart.png';
    basket.className = 'basket';
    basket.id = car.price;
    basket.setAttribute('status','done');

    div.appendChild(basket);
    div.append(image);
    div.append(car.brand + " " + car.model);
    idCars.appendChild(div);
}

let v = document.querySelectorAll('.basket');

for(let click of v){
    click.addEventListener('click', () =>{
        let sum = document.getElementById('sum');
        let items = document.getElementById('items');
        if(click.getAttribute('status') == 'done'){
            sum.innerHTML = sum.innerHTML * 1 + click.id * 1;
            items.innerHTML = items.innerHTML * 1 + 1;
            click.setAttribute('status','none');
            click.src = 'dollar-symbol.png'
        }
        else{
            sum.innerHTML = sum.innerHTML * 1 - click.id * 1;
            items.innerHTML = items.innerHTML * 1 - 1;
            click.setAttribute('status','done');
            click.src = 'add-to-cart.png';
        }
    });
}