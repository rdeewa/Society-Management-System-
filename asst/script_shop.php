<script>
document.getElementById('update').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        shopfinder('shop_finder/update.php');
    });

    function shopfinder() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'shop_finder/update.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    
</script>