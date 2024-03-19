const formPegawai = document.getElementById("form-pegawai");
const dataPegawai = document.getElementById("data-pegawai");
const totalGaji = document.getElementById("total-gaji");

formPegawai.addEventListener("submit", function (event) {
  event.preventDefault();
  const nama = formPegawai.nama.value;
  const jabatan = formPegawai.jabatan.value;
  const status = formPegawai.status.value;

  let gajiPokok = 0;

  if (jabatan === "Manager") {
    gajiPokok = 15000000;
  } else if (jabatan === "Asisten Manager") {
    gajiPokok = 10000000;
  } else if (jabatan === "Staff") {
    gajiPokok = 5000000;
  }

  const tunjanganJabatan = gajiPokok * 0.15;
  const bpjs = gajiPokok * 0.1;
  let tunjanganKeluarga = 0;
  if (status === "menikah") {
    tunjanganKeluarga = gajiPokok * 0.2;
  }

  const totalGajiPegawai =
    gajiPokok + tunjanganJabatan + bpjs + tunjanganKeluarga;

  const tr = document.createElement("tr");
  tr.innerHTML = `
        <td>${nama}</td>
        <td>${jabatan}</td>
        <td>${status}</td>
        <td>${gajiPokok.toLocaleString("id-ID", {
          style: "currency",
          currency: "IDR",
        })}</td>
        <td>${tunjanganJabatan.toLocaleString("id-ID", {
          style: "currency",
          currency: "IDR",
        })}</td>
        <td>${bpjs.toLocaleString("id-ID", {
          style: "currency",
          currency: "IDR",
        })}</td>
        <td>${tunjanganKeluarga.toLocaleString("id-ID", {
          style: "currency",
          currency: "IDR",
        })}</td>
        <td>${totalGajiPegawai.toLocaleString("id-ID", {
          style: "currency",
          currency: "IDR",
        })}</td>
    `;
  dataPegawai.appendChild(tr);

  let total = gajiPokok + tunjanganJabatan + bpjs + tunjanganKeluarga;
  const tfoot = document.querySelector("tfoot tr");
  const tds = tfoot.getElementsByTagName("td");
  for (let i = 0; i < tds.length - 1; i++) {
    total += parseFloat(tds[i].innerText.replace(/[^\d.]/g, ""));
  }
  totalGaji.innerText = `Total Gaji: Rp. ${total.toLocaleString("id-ID", {
    style: "currency",
    currency: "IDR",
  })}`;

  formPegawai.reset();
});
