<?php

class NewsController
{

    public function actionAll()
    {
        $db = new DB();
        $res = $db->query(
            'SELECT * FROM news WHERE id=:id',
            [':id' => 2]
        );
        var_dump($res);
        die;
        /*
        $news = News::getAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
        */
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->assign('item', $item);
        $view->display('news/one.php');
    }

}