<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO | BACKLINK</title>
    <link rel="icon" href="seo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-secondary">

    <div class="container p-4">
        <table class="table shadow-lg table-bordered table-dark table-hover table-responsive">
            <tr>
                <td colspan="3" class="fs-4">Website Backlink <button onclick="window.location.href='proses.php'" class="btn float-end btn-secondary sh hv">Proses</button></td>
            </tr>
            <tr>
                <td class="p-5 table-light">
                    <?php foreach ($website as $key => $value) { ?>
                        <p style="margin: 0px;"><?= $value['link'] ?> = <b><?= $value['nama'] ?></b></p>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr style="border: 2px solid white;">
                </td>
            </tr>
        </table>
    </div>
</body>

</html>