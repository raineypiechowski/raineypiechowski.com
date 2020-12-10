window.addEventListener('load', function(){
    var sideBarToggle = document.getElementById("side-bar-toggle");
    var sideBar = document.getElementById("side-bar");
    var sideBarSplint = document.getElementById("side-bar-splint");

    sideBarToggle.addEventListener("click", toggleSideBar);

    function toggleSideBar() {
        var styles = window.getComputedStyle(sideBar);

        if (styles.left == "0px") {
            //close side bar
            sideBar.style.left = "-68px";

           sideBarSplint.style.width = "0px";
        } else {
            //open side bar
            sideBar.style.left = "0px";

            if (window.innerWidth > 600) {
                sideBarSplint.style.width = "68px";
            } else {
                sideBarSplint.style.width = "0px";
            }
        }
    }

    window.addEventListener("resize", function() {
        //open side bar if window width is > 600px
        if (window.innerWidth > 600) {
            sideBar.style.left = "0px";
            sideBarSplint.style.width = "68px";
        } else {
            sideBar.style.left = "-68px";
            sideBarSplint.style.width = "0px";
        }
    });
});