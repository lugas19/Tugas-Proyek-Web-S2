

//data input dengan name = 'Rmerah' akan diubah dengan DOM dimasukkan ke variabel baru
const Rmerah = document.querySelector('input[name=Rmerah]');
//data input dengan name = 'Rhijau' akan diubah dengan DOM dimasukkan ke variabel baru
const Rhijau = document.querySelector('input[name=Rhijau]');
//data input dengan name = 'Rbiru' akan diubah dengan DOM dimasukkan ke variabel baru
const Rbiru = document.querySelector('input[name=Rbiru]');

const warnaKonten = document.getElementById('konten');

Rmerah.addEventListener('input', function(){
	const r = Rmerah.value;
	const g = Rhijau.value;
	const b = Rbiru.value;
//hubungkan dengan CSS dengan value 0-255
	warnaKonten.style.backgroundColor = 'rgb('+r+', '+g+', '+b+')';
});
Rhijau.addEventListener('input', function(){
	const r = Rmerah.value;
	const g = Rhijau.value;
	const b = Rbiru.value;

	warnaKonten.style.backgroundColor = 'rgb('+r+', '+g+', '+b+')';
});
Rbiru.addEventListener('input', function(){
	const r = Rmerah.value;
	const g = Rhijau.value;
	const b = Rbiru.value;

	warnaKonten.style.backgroundColor = 'rgb('+r+', '+g+', '+b+')';
});