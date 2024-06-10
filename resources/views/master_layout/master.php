<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <!-- css flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- script tailwindconfig.js -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            content: ["./resources/**/*.php", ],
            theme: {
                extend: {},
            },
            plugins: [],

        }
    </script>

</head>

<body>
    <?php if(isset($_SESSION['alert'])): ?>
        <script>
            let alerts = <?=$_SESSION['alert']?>;
            alert(alerts['message']);
        </script>
    <?php unset($_SESSION['alert']); endif; ?>
    <?= $body ?? ''; ?>

    <!-- script flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
     
</body>
</html>

