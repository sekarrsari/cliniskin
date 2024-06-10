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
function fetchSearchTime(keyword) {
    fetch('/cliniskin/search-keyword', {
        method: 'POST',
        body: new URLSearchParams('keyword='+keyword)
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
        <td class="px-6 py-4">
            <a href="/cliniskin/beranda-dokter/appointment/detail"
            class="font-medium text-[#22278B] hover:underline">Detail</a>
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
function doSearchDate() {
    const input = document.querySelector('#date-search');
    fetchSearchDate(input.value);
}

document.querySelectorAll('#dropdownRadio ul li').forEach(element => {
    element.addEventListener('click',(e) => {
        if(e.target.tagName == 'INPUT') {
            let id = document.querySelector('#idRadio').value;
            fetchSearchTime(e.target.dataset.id,id);
            }
        if(e.target.tagName == 'LABEL') {
            document.querySelector('#radioLabel').innerText = e.target.innerText;
        }
    });
});