$(document).ready(function(){
    var startFrom = 0;
    var inProgress = false;
    $.ajax({            
            /* адрес файла-обработчика запроса */
            url: 'get.php',
            /* метод отправки данных */
            method: 'POST',
            /* данные, которые мы передаем в файл-обработчик */
            data: {"startFrom" : startFrom, "limit" : 5},
            /* что нужно сделать до отправки запрса */
            beforeSend: function() {
            /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
            inProgress = true;}
            /* что нужно сделать по факту выполнения запроса */            
            }).done(function(data){
            
            /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */ 
            data = jQuery.parseJSON(data);
            
            /* Если массив не пуст (т.е. статьи там есть) */
            if (data.length > 0) {
                
            /* Делаем проход по каждому результату, оказвашемуся в массиве,
            где в index попадает индекс текущего элемента массива, а в data - сама статья */                 
            $.each(data, function(index, data){
            
            /* Отбираем по идентификатору блок со статьями и дозаполняем его новыми данными */    
                $("#articles").append("<div class='blog-onepost animated pulse' id='blog-post'><a class='hvr-forward' href='/post.php?newid="+data.id+"'><h3>" + data.title +"</h3></a><p>" + data.content.substr(0,400) + "...</p><p class='more_info_post'><span><i class='fas fa-pen-nib mr-1'></i>Автор: "+data.author+"</span><span class='ml-3'><i class='far fa-calendar-alt mr-1'></i>Дата публикации: "+data.datepost+"</span><span class='ml-3'><i class='fas fa-hashtag mr-1'></i>Категория: "+data.category+"</span><p></div>");
            });
            
            /* По факту окончания запроса снова меняем значение флага на false */
            inProgress = false;
            // Увеличиваем на 10 порядковый номер статьи, с которой надо начинать выборку из базы
            startFrom += 5;
        }});   

    
       

/* Переменная-флаг для отслеживания того, происходит ли в данный момент ajax-запрос. В самом начале даем ей значение false, т.е. запрос не в процессе выполнения */    

/* С какой статьи надо делать выборку из базы при ajax-запросе */ 


    /* Используйте вариант $('#more').click(function() для того, чтобы дать пользователю возможность управлять процессом, кликая по кнопке "Дальше" под блоком статей (см. файл index.php) */
    $(window).scroll(function() {
        
        /* Если высота окна + высота прокрутки больше или равны высоте всего документа и ajax-запрос в настоящий момент не выполняется, то запускаем ajax-запрос */
        if($(window).scrollTop() + $(window).height() >= $(document).height()-200 && !inProgress) {
    
        $.ajax({            
            /* адрес файла-обработчика запроса */
            url: 'get.php',
            /* метод отправки данных */
            method: 'POST',
            /* данные, которые мы передаем в файл-обработчик */
            data: {"startFrom" : startFrom,"limit" : 0},
            /* что нужно сделать до отправки запрса */
            beforeSend: function() {
            /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
            inProgress = true;}
            /* что нужно сделать по факту выполнения запроса */            
            }).done(function(data){
            
            /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */ 
            data = jQuery.parseJSON(data);
            
            /* Если массив не пуст (т.е. статьи там есть) */
            if (data.length > 0) {
                
            /* Делаем проход по каждому результату, оказвашемуся в массиве,
            где в index попадает индекс текущего элемента массива, а в data - сама статья */                 
            $.each(data, function(index, data){
            
            /* Отбираем по идентификатору блок со статьями и дозаполняем его новыми данными */    
            $("#articles").append("<div class='blog-onepost animated pulse' id='blog-post'><a class='hvr-forward' href='/post.php?newid="+data.id+"'><h3>" + data.title +"</h3></a><p>" + data.content.substr(0,400) + "...</p><p class='more_info_post'><span><i class='fas fa-pen-nib mr-1'></i>Автор: "+data.author+"</span><span class='ml-3'><i class='far fa-calendar-alt mr-1'></i>Дата публикации: "+data.datepost+"</span><span class='ml-3'><i class='fas fa-hashtag mr-1'></i>Категория: "+data.category+"</span><p></div>");
            });
            
            /* По факту окончания запроса снова меняем значение флага на false */
            inProgress = false;
            // Увеличиваем на 10 порядковый номер статьи, с которой надо начинать выборку из базы
            startFrom += 1;
            }});   
        }
    });
});