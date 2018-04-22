<?php require_once("login-check.php"); ?>
<?php require_once("connect.php"); ?>
<!doctype html>
<html>
    <head>
        <title>Touchstone Management</title>
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css" />
        <link rel="stylesheet" href="css/app.css" />
        <script src="https://cdn.jsdelivr.net/npm/davidshimjs-qrcodejs@0.0.2/qrcode.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>
        <div class="modal modal-sm" id="qrModal">
            <a href="#close" class="modal-overlay" aria-label="Close" onclick="qrClose()"></a>
            <div class="modal-container">
                <div class="modal-header">
                    <a href="#close" class="btn btn-clear float-right" onclick="qrClose()" aria-label="Close"></a>
                    <div class="modal-title h5">Pairing Code</div>
                </div>
                <div class="modal-body">
                    <div class="content" style="text-align:center">
                        <div id="qrcode"></div>
                    </div>
                </div>
            </div>
        </div>
        <header class="navbar">
            <section class="navbar-section">
                <a href="index.php" class="navbar-brand mr-2">Touchstone Management</a>
                <a href="devices.php" class="btn btn-link">Devices</a>
                <a href="messages.php" class="btn btn-link">Messages</a>
            </section>
            <section class="navbar-section">
                <a href="admin.php" class="btn btn-link">Admin</a>
                <a href="logout.php" class="btn btn-link">Logout</a>
            </section>
        </header>
        <div class="container">
            <div class="columns">
                <div class="column col-6 col-mx-auto">
