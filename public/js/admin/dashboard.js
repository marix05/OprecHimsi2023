document.querySelectorAll('a[data-bs-toggle="tab"]').forEach((t, i) => {
    t.addEventListener("show.bs.tab", function (e) {
        let targetClass = t.getAttribute("href");
        var pane = document.querySelector("#secondTabContent " + targetClass);
        var sibling = document.querySelector(
            "#secondTabContent .tab-pane.active"
        );
        // hide 2nd pane sibling
        sibling.classList.remove("show");
        sibling.classList.remove("active");
        // show 2nd pane
        pane.classList.add("show");
        pane.classList.add("active");
    });
});

$("#tableSemua").DataTable({
    scrollX: true,
});
$("#tableBistra").DataTable({
    scrollX: true,
});
$("#tableHumas").DataTable({
    scrollX: true,
});
$("#tableMulmed").DataTable({
    scrollX: true,
});
$("#tableKastrad").DataTable({
    scrollX: true,
});
$("#tableKestari").DataTable({
    scrollX: true,
});
$("#tableSeni").DataTable({
    scrollX: true,
});
$("#tableOlahraga").DataTable({
    scrollX: true,
});
$("#tablePSDM").DataTable({
    scrollX: true,
});
$("#tableAkademik").DataTable({
    scrollX: true,
});
$("#tablePTI").DataTable({
    scrollX: true,
});

$('a[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
});
