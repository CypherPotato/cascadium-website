document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".code-block").forEach(e => {
        var tabstrip = document.createElement("div");
        tabstrip.classList.add("tabs");

        var blockItems = e.querySelectorAll(".code-item");

        blockItems.forEach(ci => {
            var tabitem = document.createElement("div");
            tabitem.classList.add("tab-item");
            tabitem.innerText = ci.getAttribute("data-item");

            tabitem.addEventListener("click", () => {
                blockItems.forEach(cii => cii.style.display = "none");
                e.querySelector(".tabs > .tab-item[current]")
                    ?.removeAttribute("current");
                ci.style.display = "block";
                tabitem.setAttribute("current", "");
            });

            tabstrip.append(tabitem);

            if (ci.getAttribute("current") != null) {
                tabitem.click();
            }
        });

        e.prepend(tabstrip);
    });
});