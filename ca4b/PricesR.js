var quant1 = document.getElementById("Quantity1");
var quant2 = document.getElementById("Quantity2");
var type1a = document.getElementById("single1");
var type1b = document.getElementById("double1");
var quant3 = document.getElementById("Quantity3");
var type2a = document.getElementById("single2");
var type2b = document.getElementById("double2");

quant1.addEventListener("change", Price1, false);
quant2.addEventListener("change", Price2, false);
type1a.addEventListener("click", Price2a, false);
type1b.addEventListener("click", Price2b, false);
quant3.addEventListener("change", Price3, false);
type2a.addEventListener("click", Price3a, false);
type2b.addEventListener("click", Price3b, false);
