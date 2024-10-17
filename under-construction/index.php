<?php include_once '../includes/env.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?></title>
    <link type="text/css" rel="stylesheet" href="/styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet">

    <style>
        body {
            background: var(--black);
            color: var(--white);
        }

        #main-container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px;
            text-align: center;
        }

        img {
            max-width: 200px;
            margin-bottom: 48px;
        }

        p {
            line-height: 1.5;
            max-width: 800px;
        }
    </style>
</head>

<body>
    <div id="main-container">
        <img src="/assets/images/misc/hardhat.avif" alt="Hardhat">
        <h1>Under Construction</h1>
        <p>The site is getting an upgrade! Keep an eye out to know when we're up and running!</p>
    </div>
</body>

</html>