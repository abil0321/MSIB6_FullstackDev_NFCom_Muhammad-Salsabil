function calculateSalary(pegawai, jabatan, status) {
  let gapok;
  let tunjanganJabatan;
  let bpjs;
  let tunjanganKeluarga;
  let totalGaji;

  if (jabatan == "Manager") {
    gapok = 15000000;
  } else if (jabatan == "Asisten Manager") {
    gapok = 10000000;
  } else {
    gapok = 5000000;
  }

  tunjanganJabatan = 0.15 * gapok;
  bpjs = 0.1 * gapok;
  tunjanganKeluarga = status == "Menikah" ? 0.2 * gapok : 0;
  totalGaji = gapok + tunjanganJabatan + bpjs + tunjanganKeluarga;

  return {
    pegawai,
    jabatan,
    status,
    gapok,
    tunjanganJabatan,
    bpjs,
    tunjanganKeluarga,
    totalGaji,
  };
}

function displayTable(data) {
  const headerRow = `<thead bgcolor="gray">
        <tr>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan Jabatan</th>
            <th>BPJS</th>
            <th>Tunjangan Keluarga</th>
            <th>Total Gaji</th>
        </tr>
    </thead>`;

  const dataRow = `<tbody align="center">
        <tr>
            <td>${data.pegawai}</td>
            <td>${data.jabatan}</td>
            <td>${data.status}</td>
            <td>${data.gapok.toLocaleString("id-ID", {
              style: "currency",
              currency: "IDR",
            })}</td>
            <td>${data.tunjanganJabatan.toLocaleString("id-ID", {
              style: "currency",
              currency: "IDR",
            })}</td>
            <td>${data.bpjs.toLocaleString("id-ID", {
              style: "currency",
              currency: "IDR",
            })}</td>
            <td>${data.tunjanganKeluarga.toLocaleString("id-ID", {
              style: "currency",
              currency: "IDR",
            })}</td>
            <td>${data.totalGaji.toLocaleString("id-ID", {
              style: "currency",
              currency: "IDR",
            })}</td>
        </tr>
    </tbody>`;

  const footerRow = `<tfoot align="center">
        <tr>
            <th colspan='7'>Total</th>
            <th colspan='1' style="background-color: yellow">${data.totalGaji.toLocaleString("id-ID", {
              style: "currency",
              currency: "IDR",
            })}</th>
        </tr>
    </tfoot>`;

  const table = `<table>
                      ${headerRow}
                      ${dataRow}
                      ${footerRow}
                    </table>`;

  const employeeTable = document.getElementById("employeeTable");
  employeeTable.innerHTML = table;
}

const employeeForm = document.getElementById("employeeForm");
employeeForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const pegawai = document.getElementById("pegawai").value;
  const jabatan = document.getElementById("jabatan").value;
  const status = document.getElementById("status").value;

  const data = calculateSalary(pegawai, jabatan, status);
  displayTable(data);
});
