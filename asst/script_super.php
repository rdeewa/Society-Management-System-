<script>
    // View Admin

document.getElementById('Vadmin').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        VAD('superadmin/display_admin.php');
    });

    function VAD() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'superadmin/display_admin.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
    // View Shop

document.getElementById('Vshop').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        VSH('superadmin/display_shop.php');
    });

    function VSH() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'superadmin/display_shop.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }



document.getElementById('Ashop').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Ashop('shop_finder/add_shop.php');
    });

    function Ashop() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'shop_finder/add_shop.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

</script>