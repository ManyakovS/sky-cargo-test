<?php
$flexible_name = carbon_get_the_post_meta('tariff_flexible_name');
$express_name  = carbon_get_the_post_meta('tariff_express_name');
$flexible_desc = carbon_get_the_post_meta('tariff_flexible_desc');
$express_desc  = carbon_get_the_post_meta('tariff_express_desc');
$rows          = carbon_get_the_post_meta('delivery_rows');

if (empty($rows)) return;
?>

<section class="delivery container">
    <h2 class="delivery__title block-title">
        Курьерская доставка: тариф <span class="delivery__title--accent">Экспресс</span> и тариф <span class="delivery__title--accent">Гибкий</span>
    </h2>

    <div class="delivery__table-wrapper">
        <table class="delivery-table">
            <thead class="delivery-table__head">
                <tr class="delivery-table__row">
                    <th class="delivery-table__cell"></th>
                    <th class="delivery-table__cell delivery-table__cell--base"><?php echo esc_html($flexible_name); ?></th>
                    <th class="delivery-table__cell delivery-table__cell--primary"><?php echo esc_html($express_name); ?></th>
                </tr>
            </thead>

            <tbody>
                <?php if ($flexible_desc || $express_desc) : ?>
                    <tr class="delivery-table__row">
                        <td class="delivery-table__cell"></td>
                        <td class="delivery-table__cell delivery-table__cell--description"><?php echo nl2br(esc_html($flexible_desc)); ?></td>
                        <td class="delivery-table__cell delivery-table__cell--description"><?php echo nl2br(esc_html($express_desc)); ?></td>
                    </tr>
                <?php endif; ?>

                <?php foreach ($rows as $row) : ?>
                    <tr class="delivery-table__row">
                        <td class="delivery-table__cell delivery-table__cell--secondary">
                            <?php echo esc_html($row['label']); ?>
                        </td>
                        <td class="delivery-table__cell">
                            <?php echo esc_html($row['val_flexible']); ?>
                        </td>
                        <td class="delivery-table__cell">
                            <?php echo esc_html($row['val_express']); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>