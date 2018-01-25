<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/user.png" class="img-circle" alt=""/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." disabled/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat disabled"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu '. Yii::$app->name, 'options' => ['class' => 'header']],
                    ['label' => 'Manage Users', 'url' => ['/user/admin/index'], 'visible' => !Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
