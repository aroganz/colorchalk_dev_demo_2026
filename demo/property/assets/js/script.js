function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filter-item");
    if (c == "all") c = "";
    
    for (i = 0; i < x.length; i++) {
        // Hide elements
        x[i].classList.add("hide");
        // Show selected elements
        if (x[i].className.indexOf(c) > -1) {
            x[i].classList.remove("hide");
        }
    }
    
    // Add 'active' class to clicked button
    var btnContainer = document.getElementById("filter-nav");
    var btns = btnContainer.getElementsByClassName("filter-btn");
    for (var j = 0; j < btns.length; j++) {
        btns[j].classList.remove("active");
    }
    event.currentTarget.classList.add("active");
}

// Ensure "All" is active on load
window.onload = function() {
    filterSelection('all');
};