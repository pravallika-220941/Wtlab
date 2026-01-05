
let visitorscount = 0;


function showResourcesAlert() {
    alert("Explore trusted cybersecurity resources and stay protected!");
}


window.onload = function () {

    const websitename = "Cybersecurity Awareness";
    const Securitystatus = "Protected";

    document.getElementById("sitename").textContent = websitename;
    document.getElementById("Securitystatus").textContent = Securitystatus;
    document.getElementById("visitorcount").textContent = visitorscount;
};
function showStatus() {
    document.getElementById("statusSection").style.display = "block";
}


function increaseVisitors() {
    visitorscount = visitorscount + 1;
    document.getElementById("visitorcount").textContent = visitorscount;
    console.log("updated visitors count:",visitorscount);
    alert("Thank you for visiting my website ");
}
try {
    websitename = "Hacked Website";
} catch (error) {
    console.log("Error when reassigning const:", error.message);
}