let employee = document.getElementById("employee");
let customer = document.getElementById("customer");
let supplier = document.getElementById("supplier");
let complain = document.getElementById("complain");

customer.classList.remove("d-block");
customer.classList.add("d-none");

supplier.classList.remove("d-block");
supplier.classList.add("d-none");

complain.classList.remove("d-block");
complain.classList.add("d-none");


function worker() {
    employee.classList.remove("d-none");
    employee.classList.add("d-block");

    complain.classList.remove("d-block");
    complain.classList.add("d-none");

    supplier.classList.remove("d-block");
    supplier.classList.add("d-none");

    customer.classList.remove("d-block");
    customer.classList.add("d-none");

}


function cus() {

    customer.classList.remove("d-none");
    customer.classList.add("d-block");

    employee.classList.remove("d-block");
    employee.classList.add("d-none");

    complain.classList.remove("d-block");
    complain.classList.add("d-none");

    supplier.classList.remove("d-block");
    supplier.classList.add("d-none");


}


function sup() {

    supplier.classList.remove("d-none");
    supplier.classList.add("d-block");

    employee.classList.remove("d-block");
    employee.classList.add("d-none");

    complain.classList.remove("d-block");
    complain.classList.add("d-none");

    customer.classList.remove("d-block");
    customer.classList.add("d-none");


}


function com() {

    complain.classList.remove("d-none");
    complain.classList.add("d-block");

    employee.classList.remove("d-block");
    employee.classList.add("d-none");

    supplier.classList.remove("d-block");
    supplier.classList.add("d-none");

    customer.classList.remove("d-block");
    customer.classList.add("d-none");


}
