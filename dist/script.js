document.addEventListener('DOMContentLoaded', function () {
    let sidebar_item = document.querySelector('.filament-sidebar-item-active');
    sidebar_item.scrollIntoView({ behavior: "auto", block: "center", inline: "center" });
});