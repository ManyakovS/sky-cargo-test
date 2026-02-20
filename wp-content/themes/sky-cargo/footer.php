<footer class="footer">
    <div class="footer__top container">
        <div class="footer__action">
            <?php get_template_part('template-parts/ui/logo', null, ['class' => 'footer__logo']); ?>

            <?php get_template_part('template-parts/ui/button', null, [
                'text'  => 'Оставить заявку',
                'class' => 'btn--primary btn--base',
                'href'  => '#callback"'
            ]); ?>
        </div>
        <?php get_template_part('template-parts/navigation/footer-menu'); ?>
    </div>
    <div class="footer__bottom container">
        <span>ООО "Кита Шиппинг" ИНН 5405075596</span>
        <span>Политика конфиденциальности</span>
    </div>
</footer>
</body>

</html>