<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<p>Проверка високосный год или нет</p>
<p>Введите год </p>
<input name="Year" type="text">
<button id="button">Проверить</button>
<p class="out"></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '#button', function(){
        var $data = {};
        $(document).find ('input, textearea, select').each(function() {
            $data[this.name] = $(this).val();});
        $.ajax({
            url: 'func.php',
            type: 'GET',
            data: $data,
            success: function(data){
                $('p.out').text(data);},
            error: function(){
                console.log('ERROR');}})})
</script>
</body>
</html>





