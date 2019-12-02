let mahasiswa = { 
    "name" => "Nur Syaqinah Binti Safaruddin",
    "matric" => "193043405",
    "email" => "qinah@gmail.com"
}

console.log(JSON.stringify(mahasiswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatecjange = function () {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa); 
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();