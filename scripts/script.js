$(function () {
    $('.folder').on('click', function (e) {
        $(this).toggleClass('folder-open');
        e.stopPropagation();
    });

    $('.file').on('click', function (e) {
        e.stopPropagation();
        var video = $('#video')[0];
        const file_name = $(this).attr('data-src');
        const arr_type = ['mp4', 'ogv', 'webm', 'avi',];
        if(arr_type.includes(file_name.split('.').pop())){
            video.src = file_name;
            video.load();
            video.play();
        }
        else{
            alert('Такой формат не поддерживается. Поддерживаемые форматы .mp4 .ogv .webm .avi');
        }
    });


    $('.fast').on('click', function (e) {
        var video = $('#video')[0];
        if(video.playbackRate <= 2) video.playbackRate  = video.playbackRate  + 0.25;
        else alert('Максимальная скорость');
    });

    $('.slow').on('click', function (e) {
        if(video.playbackRate  >= 0.5) video.playbackRate  = video.playbackRate  - 0.25;
        else alert('Минимальная скорость');
    });
})