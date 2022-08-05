let tableData = Array.from(document.getElementsByTagName("td"));


function search(data) {
//   let Userdata = searchBox.value.toLocaleUpperCase();
console.log("working fine")
  let Userdata = data.toLocaleUpperCase();

  tableData.forEach((Ele) => {
    let rowData = Ele.textContent.toLocaleUpperCase();
    let contex = rowData.indexOf(Userdata);

    if (contex > -1) {
      Ele.parentElement.style.display = "table-row";
    } else {
      Ele.parentElement.style.display = "none";
    }
  });
}
