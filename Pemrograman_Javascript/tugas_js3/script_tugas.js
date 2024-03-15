function perkenalan() {
  // Prevent the form from submitting and refreshing the page

  const form = document.getElementById("form");
  const nama = form.nama;
  const pekerjaan = form.pekerjaan;
  const hobby = form.hobby;

  if (nama.value == "") {
    document.getElementById("val_nama").innerHTML = "Gak kosong juga Namanya!";
  } else {
    document.getElementById("val_nama").innerHTML = "";
  }

  if (pekerjaan.value == "") {
    document.getElementById("val_pek").innerHTML = "Gak kosong juga Pekerjaan!";
  } else {
    document.getElementById("val_pek").innerHTML = "";
  }

  if (hobby.value == "") {
    document.getElementById("val_hob").innerHTML = "Gak kosong juga Hobby!";
  } else {
    document.getElementById("val_hob").innerHTML = "";

  } if (nama.value && pekerjaan.value && hobby.value) {

    document.getElementById("namaR").innerHTML = nama.value;
    document.getElementById("pekR").innerHTML = pekerjaan.value;
    document.getElementById("hobR").innerHTML = hobby.value;

    let input = `<p>Hallo, nama saya <b>${nama.value}</b>, pekerjaan saya sebagai <b>${pekerjaan.value}</b> dan hobby saya <b>${hobby.value}</b>.</p>`;
    document.getElementById("hasil").innerHTML = input;
    
  }
}
