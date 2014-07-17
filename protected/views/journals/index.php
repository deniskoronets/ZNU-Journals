<?php
/* @var $this JournalsController */
/* @var $dataProvider CActiveDataProvider */

/* - Стартовая страница системы - список журналов
      Для каждого журнала ссылки
      "Выпуски",
      "Информация о журнале",
      "Отправить статью",
      "Информация для авторов".
*/

?>

<h1>Журналы</h1>

<!-- стили временно здесь -->
<style>
    .journal {
        border: 1px solid #999;
        margin: 10px 0;
        padding: 5px;
    }

    .journal h3 {
        margin: 0 0 10px 0;
    }

    .journal table.info {
        width: 100%;
    }

    .journal table.info tr {
        border: 1px solid #ddd;
    }

    .journal table.info td {
        padding: 10px;
    }

    .journal table.info .first {
        width: 200px;
        background: #f9f9f9;
    }
</style>

<?php foreach ($journals as $journal) { ?>
    <div class='journal'>
        <h3>
            <a href='<?php echo $this->createUrl('journals/view', array('journalId' => $journal->journal_id)); ?>'>
                <?php echo $journal->name; ?>
            </a>
        </h3>
        <table class='info'>
            <tr>
                <td class='first'>Языки журнала:</td>
                <td><?php echo $journal->user_languages; ?></td>
            </tr>
            <tr>
                <td class='first'>Статические страницы:</td>
                <td>
                    <ul>
                        <?php $v = 0; foreach ($journal->static_pages as $staticPage) { ?>
                        <?php if ($staticPage->is_visible) { $v++; ?>
                        <li><a href='<?php echo $this->createUrl('pages/view', array('pageId' => $staticPage->static_page_id)); ?>'>
                            <?php echo $staticPage->name; ?>
                        </a></li>
                        <?php } }
                        if ($v == 0) echo '<li>Нет страниц</li>';
                        ?>
                    </ul>
                </td>
            <tr>
                <td class='first'>Список выпусков:</td>
                <td>
                    <ul>
                        <?php $maxIssues = 1; ?>

                        <?php foreach (array_slice($journal->issues, 0, $maxIssues) as $issue) { ?>
                            <li><a href='<?php echo $this->createUrl('issues/view', array('issueId' => $issue->issue_id)); ?>'>
                                <?php echo $issue->name; ?>
                            </a></li>
                        <?php } ?>

                        <?php if (count($journal->issues) > $maxIssues) { ?>
                            <li><i>[ И еще <?php echo count($journal->issues) - $maxIssues; ?> выпуск(-ов, -а)</i></li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>