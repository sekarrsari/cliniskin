function fetchSearch(letters) {
    fetch('/cliniskin/search', {
        method: 'POST',
        body: new URLSearchParams('letters='+letters)
    }).then(res => res.json())
      .then(res => viewSearch(res))
      .catch(e => console.error('Error'+e));
}
function fetchSearchDate(letters) {
    fetch('/cliniskin/search-date', {
        method: 'POST',
        body: new URLSearchParams('letters='+letters)
    }).then(res => res.json())
      .then(res => viewSearch(res))
      .catch(e => console.error('Error'+e));
}

function viewSearch(data) {
    const tbody = document.getElementById('tbody-appointment');
    let children_len = tbody.children.length;
    if(children_len > 0) tbody.innerHTML = '';
    let count = 0;
    data.forEach(appointment => {
        count++;
        let xmlString = 
        `
        <td class="w-4 p-4">
            ${count}
        </td>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
            ${appointment['tanggal']}
        </th>
        <td class="px-6 py-4">
            ${appointment['jam']}
        </td>
        <td class="px-6 py-4">
            ${appointment['dokter']}
        </td>
        <td class="px-6 py-4">
            ${appointment['jenis']}
        </td>
        `
        const tr = document.createElement('tr');
        tr.classList.add('bg-white','border-b','hover:bg-gray-50');
        tr.innerHTML = xmlString;
        tbody.appendChild(tr);
    });
}
function doSearch(input) {
    let value = input.value;
    fetchSearch(value);
    }
function doSearchDate(element) {
    const input = document.querySelector('#date-search');
    fetchSearchDate(input.value);
}

document.querySelectorAll('.datepicker-cell').forEach(cell => {
    cell.addEventListener('focus',function(e) {
        console.log(e)
    });
});