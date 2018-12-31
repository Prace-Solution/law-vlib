function rightclick() {
    var rightclick;
    var e = window.event;
    if (e.which) {
        rightclick = (e.which == 3);
    } else if (e.button) {
        rightclick = (e.button == 2);
    }
    e.preventDefault();
    e.stopPropagation();
    if (rightclick) {
         alert('Operation not allowed.');
    }
    // true or false, you can trap right click here by if comparison 
}