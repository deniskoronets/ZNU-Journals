<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class='col-lg-12'>
    <h1>Список журналов</h1>
</div>

<style>
    .bordered {
        border: 1px solid gray;
        padding: 5px 20px;
        border-radius: 10px;
    }
</style>

<?php foreach ($journals as $journal) { ?>
<div class='col-lg-6 bordered'>
    <h4><a href='<?php echo $this->createUrl('journals/view', array('journalId' => $journal->journal_id)); ?>'><?php echo $journal->name; ?></a></h4>
    Выпуски журнала:
    <ul>
    <?php foreach ($journal->issues as $issue) { ?>
        <li><?php echo $issue->name; ?></li>
    <?php } ?>
    </ul>
</div>
<?php } ?>
