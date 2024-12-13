<!-- HASIL : Teknisi Komputer Terdekat - Warungkomputer.net selalu siap membantu perbaikan perangkat komputer Anda dengan hasil memuaskan. -->
<?php

require_once 'data.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO | PROSES BACKLINK</title>
    <link rel="icon" href="seo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</head>

<body class="bg-secondary">

    <div class="container pt-5">
        <table class="table shadow-lg table-bordered table-hover table-responsive table-secondary">
            <tr>
                <td colspan="3" class="bg-dark text-white">
                    <button onclick="window.location.href='index.php'" class="btn btn-secondary float-start sh hv">Kembali</button>
                    <button onclick="window.location.href='proses.php'" class="btn btn-secondary float-end sh hv">Replace</button>
                    <div class="float-end mx-3 my-1">
                        <input type="checkbox" name="judulCheckbox" id="judulCheckbox" class="form-check-input mx-1">
                        <label for="judulCheckbox">Judul</label>
                        <input type="checkbox" name="namaCheckbox" id="namaCheckbox" class="form-check-input mx-1">
                        <label for="namaCheckbox">Nama</label>
                        <input type="checkbox" name="emailCheckbox" id="emailCheckbox" class="form-check-input mx-1">
                        <label for="emailCheckbox">Email</label>
                        <input type="checkbox" name="sandiCheckbox" id="sandiCheckbox" class="form-check-input mx-1">
                        <label for="sandiCheckbox">Sandi</label>
                        <input type="checkbox" name="websiteCheckbox" id="websiteCheckbox" class="form-check-input mx-1">
                        <label for="websiteCheckbox">Website</label>
                        <input type="checkbox" name="anchorCheckbox" id="anchorCheckbox" class="form-check-input mx-1">
                        <label for="anchorCheckbox">Anchor</label>
                        <input type="checkbox" name="noAnchorCheckbox" id="noAnchorCheckbox" class="form-check-input mx-1">
                        <label for="noAnchorCheckbox">No Anchor</label>
                    </div>
                </td>
            </tr>
            <?php foreach ($website as $key => $value) { ?>
                <?php
                $linkAnchor      = htmlspecialchars("<a target='_blank' rel='noopener noreferrer' title='" . $value['kategori'] . "' href='" . $value['link'] . "'>" . $value['kategori'] . "</a>");
                $linkNoAnchor    = $value['kategori'];
                $kategori = strtolower($value['kategori']);
                if ($kategori == 'teknisi komputer terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($komputer[rand(0, count($komputer) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($komputer[rand(0, count($komputer) - 1)][0]);
                } else if ($kategori == 'konsultan legalitas dan perizinan terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($riksa[rand(0, count($riksa) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($riksa[rand(0, count($riksa) - 1)][0]);
                } else if ($kategori == 'cctv terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($cctvbro[rand(0, count($cctvbro) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($cctvbro[rand(0, count($cctvbro) - 1)][0]);
                } else if ($kategori == 'interior desain terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($alfainterior[rand(0, count($alfainterior) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($alfainterior[rand(0, count($alfainterior) - 1)][0]);
                } else if ($kategori == 'gazebo terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($saungrifkiberkah[rand(0, count($saungrifkiberkah) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($saungrifkiberkah[rand(0, count($saungrifkiberkah) - 1)][0]);
                } else if ($kategori == 'sablon terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($inisablon[rand(0, count($inisablon) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($inisablon[rand(0, count($inisablon) - 1)][0]);
                } else if ($kategori == 'internet terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($myrepublicindonesia[rand(0, count($myrepublicindonesia) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($myrepublicindonesia[rand(0, count($myrepublicindonesia) - 1)][0]);
                } else if ($kategori == 'rolling door terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($bagjarollingdoor[rand(0, count($bagjarollingdoor) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($bagjarollingdoor[rand(0, count($bagjarollingdoor) - 1)][0]);
                } else if ($kategori == 'kayu lapis terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($tropika[rand(0, count($tropika) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($tropika[rand(0, count($tropika) - 1)][0]);
                } else if ($kategori == 'bengkel vespa terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($bengkelvespa[rand(0, count($bengkelvespa) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($bengkelvespa[rand(0, count($bengkelvespa) - 1)][0]);
                } else if ($kategori == 'rak heavy duty second terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($rakheavydutysecond[rand(0, count($rakheavydutysecond) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($rakheavydutysecond[rand(0, count($rakheavydutysecond) - 1)][0]);
                } else if ($kategori == 'ac mobil terdekat') {
                    $hasilAnchor = $linkAnchor . " - " . ucfirst($putrajayaacmobil[rand(0, count($putrajayaacmobil) - 1)][0]);
                    $hasilNoAnchor = $linkNoAnchor . " - " . ucfirst($putrajayaacmobil[rand(0, count($putrajayaacmobil) - 1)][0]);
                }
                ?>
                <tr class="baris_<?= $value['nama']; ?>">
                    <td class="text-center align-middle fs-5 table-secondary"><?= $key + 1 ?>.</td>
                    <td colspan="2" class="ps-4 kolom_<?= $value['nama']; ?>">
                        <h3 class="d-inline-block"><?= $value['nama'] ?></h3>
                        <button data-nama="<?= $value['nama'] ?>" class="btn btn-sm btn-status btn-danger float-end sh hv">Belum</button>
                    </td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_judul">
                    <td class="kolom_<?= $value['nama']; ?>">Judul</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><?= $value['kategori'] ?></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_nama">
                    <td class="kolom_<?= $value['nama']; ?>">Nama</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><?= $value['nama'] ?></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_email">
                    <td class="kolom_<?= $value['nama']; ?>">Email</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><?= $value['email'] ?></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_sandi">
                    <td class="kolom_<?= $value['nama']; ?>">Sandi</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><?= $value['sandi'] ?></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_website">
                    <td class="kolom_<?= $value['nama']; ?>">Website</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $value['link'] ?></a></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_anchor">
                    <td class="kolom_<?= $value['nama']; ?>">Anchor Text</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><?= $hasilAnchor ?></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?> baris_noAnchor">
                    <td class="kolom_<?= $value['nama']; ?>">No Anchor Text</td>
                    <td class="kolom_<?= $value['nama']; ?>">:</td>
                    <td class="ps-4 kolom_<?= $value['nama']; ?>"><?= $hasilNoAnchor ?> Hanya di <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $value['link'] ?></a></td>
                </tr>
                <tr class="baris_<?= $value['nama']; ?>">
                    <td colspan="3">
                        <hr style="border: 2px solid darkgreen;">
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3">
                    <button onclick="window.location.href='index.php'" class="btn btn-secondary sh hv">Kembali</button>
                    <button onclick="window.location.href='proses.php'" class="btn btn-secondary float-end sh hv">Replace</button>
                </td>
            </tr>
        </table>
    </div>
</body>

<script>
    $(document).ready(function() {

        $('.btn-status').click(function() {
            $(this).toggleClass('btn-success btn-danger');
            $(this).text($(this).hasClass('btn-success') ? 'Sudah' : 'Belum');
            let nama = $(this).data('nama');
            $('.kolom_' + nama).toggleClass('table-success', $(this).hasClass('btn-success'));
        });

        $('#judulCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_judul').show();
                $.cookie('judul', 'true');
            } else {
                $('.baris_judul').hide();
                $.cookie('judul', 'false');
            }
        });

        $('#namaCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_nama').show();
                $.cookie('nama', 'true');
            } else {
                $('.baris_nama').hide();
                $.cookie('nama', 'false');
            }
        });
        $('#emailCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_email').show();
                $.cookie('email', 'true');
            } else {
                $('.baris_email').hide();
                $.cookie('email', 'false');
            }
        });
        $('#sandiCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_sandi').show();
                $.cookie('sandi', 'true');
            } else {
                $('.baris_sandi').hide();
                $.cookie('sandi', 'false');
            }
        });
        $('#websiteCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_website').show();
                $.cookie('website', 'true');
            } else {
                $('.baris_website').hide();
                $.cookie('website', 'false');
            }
        });
        $('#anchorCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_anchor').show();
                $.cookie('anchor', 'true');
            } else {
                $('.baris_anchor').hide();
                $.cookie('anchor', 'false');
            }
        });
        $('#noAnchorCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.baris_noAnchor').show();
                $.cookie('noAnchor', 'true');
            } else {
                $('.baris_noAnchor').hide();
                $.cookie('noAnchor', 'false');
            }
        });

        console.log($.cookie());

    });
</script>

</html>