$(document).ready(function () {
  //BARRA DE PROGRESSO DA META

  const circle = document.querySelector(".progress-ring__value");
  const radius = circle.r.baseVal.value;
  const circumference = 2 * Math.PI * radius;

  function setProgress(percent) {
    const offset = circumference - (percent / 100) * circumference;
    circle.style.strokeDashoffset = offset;
  }

  // MENU SIDEBAR

  const sidebar = document.querySelector(".sidebar");
  const toggle = document.querySelector(".menu-toggle");

  sidebar.classList.add("collapsed");

  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("fixed");

    if (sidebar.classList.contains("fixed")) {
      sidebar.classList.remove("collapsed");
    } else {
      sidebar.classList.add("collapsed");
    }
  });

  // GRAFICO DE GASTOS

  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawVisualization);

  function drawVisualization() {
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
      [
        "Month",
        "Bolivia",
        "Ecuador",
        "Madagascar",
        "Papua New Guinea",
        "Rwanda",
        "Average",
      ],
      ["2004/05", 165, 938, 522, 998, 450, 614.6],
      ["2005/06", 135, 1120, 599, 1268, 288, 682],
      ["2006/07", 157, 1167, 587, 807, 397, 623],
      ["2007/08", 139, 1110, 615, 968, 215, 609.4],
      ["2008/09", 136, 691, 629, 1026, 366, 569.6],
    ]);

    var options = {
      title: "Monthly Coffee Production by Country",
      vAxis: { title: "Cups" },
      hAxis: { title: "Month" },
      seriesType: "bars",
      series: { 5: { type: "line" } },
    };

    var chart = new google.visualization.ComboChart(
      document.getElementById("chart_div")
    );
    chart.draw(data, options);
  }
});
