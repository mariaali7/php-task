let div = document.querySelector('.table');

async function getData(){
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "data.php", true);
  
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        populateDiv(xhr);
    }
  };

  xhr.send();
}


function populateDiv(data){
  div.innerHTML = data;
  console.log(data);
}

getData();