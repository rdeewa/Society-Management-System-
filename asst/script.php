
<script>
    
// store finder

document.getElementById('shop_finder').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        shopfinder('shop_finder/index.php');
    });

    function shopfinder() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'shop_finder/index.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

// Gallery

document.getElementById('Gallery').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Gallery('Gallery/index.php');
    });

    function Gallery() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'Gallery/index.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // buy and sell
    //Add Prodcut
    document.getElementById('buy-pro').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Buy_pro('Lishing/display_products.php');
    });
    
    function Buy_pro() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'Listing/index.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }


    //Add Prodcut
    document.getElementById('add-pro').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Add_pro('Lishing/display_products.php');
    });
    
    function Add_pro() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'Listing/display_products.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Notification

    document.getElementById('Notification').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Notification('notification/notifications.php');
    });

    function Notification() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'notification/notifications.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Notification Admin

    document.getElementById('Notification-admin').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Notification_admin('manegemnet/notification_form.php');
    });

    function Notification_admin() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'manegemnet/notification_form.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
    
    // Notification Admin

    document.getElementById('EventA').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        EventA('EventA/index.php');
    });

    function EventA() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'EventA/index.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    
     // Notification Admin

    document.getElementById('Notification-admin').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Notification_admin('manegemnet/notification_form.php');
    });

    function Notification_admin() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'manegemnet/notification_form.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Gallery Admin 

    document.getElementById('Gallery-admin').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Gallery_admin('manegemnet/admin_gallery.php');
    });

    function Gallery_admin() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'manegemnet/admin_gallery.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    

    //Memeber 

    document.getElementById('VMember').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        member('manegemnet/Memeber.php');
    });

    function member() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'manegemnet/Memeber.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
    
    //EditMemeber 

    document.getElementById('EMember').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Emember('manegemnet/add_member.php');
    });

    function Emember() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'manegemnet/add_member.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    document.getElementById('AMember').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        // Remove the active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add the active class to the clicked nav link
        this.classList.add('active');

        // Call include_once('file.php') script
        Amember('manegemnet/edit_user.php');
    });

    function Amember() {
        // Send an AJAX request to include the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'manegemnet/edit_user.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Insert the content into the content area
                document.getElementById('contentArea').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
   
</script>

