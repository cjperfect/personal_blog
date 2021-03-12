$(function () {
    showUploadPic('upload');
    showUploadPic('upload1');

    function showUploadPic(id) {
        let html = $(`#${id}`).parent().next().find('.file-list-item').eq(0);
        $(`#${id}`).on('change', function () {
            let file = this.files[0];
            let fr = new FileReader();
            fr.onload = function () {
                html.find('div').attr('data-src', this.result).css('background', `url(${this.result})no-repeat center center / cover`);
                $(`#${id}`).parent().next().append(html);
            };
            fr.readAsDataURL(file);
            html.show();
        });
    }

});
