$(document).ready(function () {
  $(".progress-circle").each(function () {
    const $circle = $(this);
    const percentage = parseInt($circle.attr("data-percentage"));
    const $progress = $circle.find(".progress");
    const $text = $circle.find(".percent");

    let current = 0;
    const interval = setInterval(() => {
      if (current >= percentage) clearInterval(interval);
      $text.text(current + "%");
      const dash = (current / 100) * 100;
      $progress.attr("stroke-dasharray", dash + ", 100");
      current++;
    }, 20);
  });

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
});
