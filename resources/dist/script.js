document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        let sidebar_item = document.querySelector('.fi-sidebar-item-active');
        if (sidebar_item)
            sidebar_item.scrollIntoView({ behavior: "auto", block: "center", inline: "center", behavior: "smooth" });
    }, 300);
});