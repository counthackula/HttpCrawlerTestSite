<?php require_once __DIR__ . '/prepend.php'; ?>

<?php

define('PAGE_TITLE', 'DOM Modification');

renderJavaScriptTemplateStart();

?>

<p>This page uses a JavaScript function to generate the test list below. If a web crawler is unable to execute JavaScript, it may not be able to detect the links.</p>

<h3>Tests</h3>

<ul id="list">
</ul>

<script>
  (function() {
    var listElement;

    listElement = document.getElementById("list");

    for (var index = 1; index < 6; index++) {
      var itemElement;
      var anchorElement;

      anchorElement = document.createElement("a");
      anchorElement.innerText = "Test Page " + index;
      anchorElement.setAttribute("href", "domtest.php?number=" + index)

      itemElement = document.createElement("li");
      itemElement.appendChild(anchorElement);

      listElement.appendChild(itemElement);
    }
  })();
</script>

<?php renderJavaScriptTemplateEnd(); ?>