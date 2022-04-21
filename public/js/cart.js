function showCart() {
  var TotalPreTax = 0;
  var code = [];
  var tbody2 = document.getElementById("tb2");
  $(tbody2).html("");
  for (var i = 0; i < window.localStorage.length; i++) {
    var tfooter = document.getElementById("tf1");
    $(tfooter).html("");
    var key = localStorage.key(i);
    var code = localStorage.key(i);
    console.log(key);
    var number = localStorage.getItem(key);
    item = itemList.find((item) => item.code === key);
    code = item.code;
    photo = item.photo; //Hình sản phẩm
    name = item.name; //Tên
    price = item.price; //Giá
    orderNumber = localStorage.getItem(key); //Số lượng đặt
    // console.log(localStorage.key(i) + " : " + localStorage.getItem(localStorage.key(i)))
    var tr = document.createElement("tr");
    var td = document.createElement("td");
    var oImg = document.createElement("img");
    td.width = "50";
    oImg.setAttribute("src", photo);
    oImg.width = "100";
    //   oImg.height="auto";
    td.appendChild(oImg);
    tr.appendChild(td);
    var td = document.createElement("td");
    td.style.textAlign = "left";
    var ten = document.createElement("p");
    var idd = document.createElement("p");
    idd.textContent = key;
    ten.textContent = name;
    ten.setAttribute("id", "ten");
    td.appendChild(ten);
    // td.appendChild(idd);
    tr.appendChild(td);
    var td = document.createElement("td");
    td.setAttribute("id", "price");
    
   // var sl = document.createElement("input");
    //sl.setAttribute("type", "number");
   // sl.setAttribute("max", "100");
    //sl.setAttribute("min", "1");
   // sl.setAttribute("value", number);
   // sl.setAttribute("id",code);
    //sl.setAttribute('onchange',"changeCart('"+code+"')");
    
    //sl.textContent = orderNumber;
    let sl = document.createElement('div');
    sl.setAttribute('class','row d-flex justify-content-center');
    sl.innerHTML = `<div class='col-4'><button class='btn btn-primary' onclick='Tru("${code}")'><i class='fa fa-minus' aria-hidden='true'></i></button></div><div class='col-4 text-center'>${number}</div><div class='col-4'><button class='btn btn-primary' onclick='Cong("${code}")'><i class='fa fa-plus' aria-hidden='true'></i></button></div>`;

    td.appendChild(sl);
    tr.appendChild(td);
    var td = document.createElement("td");
    td.setAttribute("id", "price");
    
    var gia = document.createElement("p");
    gia.textContent = Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
    }).format(price);
    td.appendChild(gia);
    tr.appendChild(td);
    var td = document.createElement("td");
    td.setAttribute("id", "price");
    
    var tt = document.createElement("p");
    tt.textContent = Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
    }).format(parseInt(number) * parseInt(price));
    td.appendChild(tt);
    tr.appendChild(td);
    var td = document.createElement("td");
    td.setAttribute("id", "imgg");
    var a = document.createElement("a");
    a.setAttribute("href", "#");
    a.setAttribute("onclick", "removeCart('" + key + "')");
    a.setAttribute("data-code", "key");
    var data = "<i class='fa fa-trash'> </i>";
    a.innerHTML = data;
    td.appendChild(a);
    tr.appendChild(td);
    tbody2.appendChild(tr);
    TotalPreTax = TotalPreTax + price * orderNumber;
  }
  if (TotalPreTax !== 0) {
    ck = TotalPreTax * getDiscountRate();
    console.log(TotalPreTax);
    console.log(ck);
    tax = 0.1 * (TotalPreTax - ck);
    Total = TotalPreTax - ck + tax;
    var tr = document.createElement("tr");
    var td = document.createElement("td");
    td.setAttribute("colspan", "6");
    var p = document.createElement("p");
    var span = document.createElement("span");
    p.innerHTML = "Tổng số tiền: " ;
    span.innerHTML = 
        Intl.NumberFormat("vi-VN", {
          style: "currency",
          currency: "VND",
        }).format(parseInt(TotalPreTax));
    p.appendChild(span);
    td.appendChild(p);
    tr.appendChild(td);
    td.setAttribute("id", "tf");
    tfooter.appendChild(tr);
    var tr = document.createElement("tr");
    var td = document.createElement("td");
    td.setAttribute("colspan", "3");
    tr.appendChild(td);
    var td = document.createElement("td");
    td.setAttribute("colspan", "1");
    tr.appendChild(td);
    var btn = document.createElement("button");
    var td = document.createElement("td");
    td.setAttribute("colspan", "1");
    $(btn).html("Xác Nhận Đơn Hàng");
    btn.setAttribute("id", "btn");
    td.appendChild(btn);
    tr.appendChild(td);
    var td = document.createElement("td");
    tr.appendChild(td);
    tfooter.appendChild(tr);
  }
}
function removeCart(code) {
  console.log(code);
  if (typeof window.localStorage[code] !== "undefined") {
    window.localStorage.removeItem(code);

    document.getElementById("tf1").innerHTML = "";

    showCart();
  }
}
function getDiscountRate() {
  var d = new Date();
  var weekday = d.getDay();
  var totalMins = d.getHours() * 60 + d.getMinutes();
  if (
    weekday >= 1 &&
    weekday <= 3 &&
    ((totalMins >= 420 && totalMins <= 660) ||
      (totalMins >= 780 && totalMins <= 1020))
  )
    return 0.1;
  return 0;
}
window.addEventListener("load", function () {
  showCart();
});
window.onstorage = () => {
  showCart();
};
jQuery(function() {
  
})
function updateQuantity(code) {
  item = itemList.find((item) => item.code === code);
  var sl = document.getElementById("quantity").value;
  window.localStorage.setItem(item.code, );
}
function changeCart(code) {
  console.log(code);
  let sl = 0;
   sl = document.getElementById(code).value;
  window.localStorage.setItem(code,sl);
  showCart();
}
function Cong(code) {
  console.log(code);
  let sl = window.localStorage.getItem(code);
  sl++;
  window.localStorage.setItem(code,sl);
  showCart();
}
function Tru(code) {
  console.log(code);
  let sl = window.localStorage.getItem(code);
  sl--;
  if(sl == 0 ) {
    removeCart(code);
  }
  else {
    window.localStorage.setItem(code,sl);
  }
  
  showCart();
}