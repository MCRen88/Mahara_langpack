$j('#instconf_select_container input[type="radio"][value="0"]').on("click", function() {
    $j('#instconf_images_header').addClass('hidden');
    $j('#instconf_images_container').addClass('hidden');
    $j('#instconf_external_header').addClass('hidden');
    $j('#instconf_external_container').addClass('hidden');
    $j('#instconf_external').addClass('hidden');
    $j('#externalgalleryhelp').addClass('hidden');
    $j('#instconf_folder_header').removeClass('hidden');
    $j('#instconf_folder_container').removeClass('hidden');
});
$j('#instconf_select_container input[type="radio"][value="1"]').on("click", function() {
    $j('#instconf_folder_header').addClass('hidden');
    $j('#instconf_folder_container').addClass('hidden');
    $j('#instconf_external_header').addClass('hidden');
    $j('#instconf_external_container').addClass('hidden');
    $j('#instconf_external').addClass('hidden');
    $j('#externalgalleryhelp').addClass('hidden');
    $j('#instconf_images_header').removeClass('hidden');
    $j('#instconf_images_container').removeClass('hidden');
});
$j('#instconf_select_container input[type="radio"][value="2"]').on("click", function() {
    $j('#instconf_images_header').addClass('hidden');
    $j('#instconf_images_container').addClass('hidden');
    $j('#instconf_folder_header').addClass('hidden');
    $j('#instconf_folder_container').addClass('hidden');
    $j('#instconf_external_header').removeClass('hidden');
    $j('#instconf_external_container').removeClass('hidden');
    $j('#instconf_external').removeClass('hidden');
    $j('#externalgalleryhelp').removeClass('hidden');
});
$j('#instconf_style_container input[type="radio"][value="0"]').on("click", function () {
    $j('#instconf_width').val('75');
});
$j('#instconf_style_container input[type="radio"][value="1"]').on("click", function () {
    $j('#instconf_width').val('400');
});
$j('#instconf_style_container input[type="radio"][value="2"]').on("click", function () {
    $j('#instconf_width').val('75');
});
