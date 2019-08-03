<footer class="main-footer">
    <div id="footer" class="container">
        <section class="footer-contacts">
            Барбершоп "Бородинский"<br>
            Адрес: г. Санкт-Петербург, Б. Конюшенная, д.19/8<br>
            <a href="#">Как нас найти?</a><br>
            Телефон: +7 (812) 666-02-66
        </section>
        <section class="footer-social">
            <p>ДАВАЙТЕ ДРУЖИТЬ!</p>
            <a class="social-btn social-btn-vk" href="#">ВКОНТАКТЕ</a>
            <a class="social-btn social-btn-fb" href="#">ФЕЙСБУК</a>
            <a class="social-btn social-btn-inst" href="#">ИНСТАГРАМ</a>
        </section>
        <section class="footer-copyright">
            <p>РАЗРАБОТАНО:</p>
            <a class="btn" href="https://htmlacademy.ru">DIMON</a>
        </section>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.main-navigation a[href^="#footer"]').click( function(){
            var scroll_el = $(this).attr('href');
            var destination = $(scroll_el).offset().top;
            if ($(scroll_el).length != 0) {
                $('html, body').animate( { scrollTop: destination }, 1100 );
            }
            return false;
        });
    })
</script>