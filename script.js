$(document).ready(function () {
    
    // Fungsi untuk mengatur tampilan berdasarkan cookie
    function aturTampilan(namaCookie, checkboxId, barisClass) {
        if ($.cookie(namaCookie) === undefined) {
            $(checkboxId).prop('checked', false);
            $(barisClass).hide();
            
            // kalo tidak ada maka set cookie default, Yaitu nama, email, website dan anchor true, sisanya false
            $.cookie('nama', 'true', { path: '/' });
            $.cookie('email', 'true', { path: '/' });
            $.cookie('website', 'true', { path: '/' });
            $.cookie('anchor', 'true', { path: '/' });
            $.cookie('judul', 'false', { path: '/' });
            $.cookie('sandi', 'false', { path: '/' });
            $.cookie('noAnchor', 'false', { path: '/' });
        } else {
            if ($.cookie(namaCookie) === 'true') {
                $(checkboxId).prop('checked', true);
                $(barisClass).show();
            } else {
                $(checkboxId).prop('checked', false);
                $(barisClass).hide();
            }
        }
    }

    // Memanggil fungsi aturTampilan untuk setiap item
    aturTampilan('judul', '#judulCheckbox', '.baris_judul');
    aturTampilan('nama', '#namaCheckbox', '.baris_nama');
    aturTampilan('email', '#emailCheckbox', '.baris_email');
    aturTampilan('sandi', '#sandiCheckbox', '.baris_sandi');
    aturTampilan('website', '#websiteCheckbox', '.baris_website');
    aturTampilan('anchor', '#anchorCheckbox', '.baris_anchor');
    aturTampilan('noAnchor', '#noAnchorCheckbox', '.baris_noAnchor');

});