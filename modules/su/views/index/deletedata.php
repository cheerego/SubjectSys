<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/17
 * Time: 下午2:54
 */
?>
<p class="alert alert-danger">删除数据是一个危险的操作,请确定是否要删除数据!</br>学生数据是级联删除(学生相关联的数据也一并删除)</p>
<p class="alert alert-info"><a href="<?= \yii\helpers\Url::toRoute('teachercurd/index') ?>">老师数据请使用老师CURD!</a></p>
<p>
    <button id="deletestudent" class="btn btn-danger" data-toggle="modal"
            data-target="#myModal">
        删除全部学生
    </button>
</p>


<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script>
    <?php $this->beginBlock('js_end') ?>
    $('#deletestudent').click(function () {
        $.post('<?=\yii\helpers\Url::toRoute('index/deletedata')?>', null, function (data) {
            $("div[class='modal-body']").html('删除了'+data+'条数据!');
        });
    });
    <?php $this->endBlock() ?>
</script>
<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>
