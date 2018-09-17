<?php
// 設定文件utf-8編碼
header("Content-Type:text/html; charset=utf-8");

require_once 'bootstrap.php'; //置入  db_doctrine

/**
 * 訊息內容頁
 *
 * @param EntityManager $em db連線
 */
function Content($em){
    try {
        if (!isset($_GET['id'])) {
            throw new Exception('無法取得留言編號');
        }
        if (!is_numeric($_GET['id'])) {
            throw new Exception('取得編號不為數字 : '.$_GET['id']);
        }
        $id = $_GET['id'];
        $query = $em->getRepository('Board')->find($id);
        $row = [
            'id'          => $query->getId(),
            'name'        => $query->getName(),
            'title'       => $query->getTitle(),
            'message'     => $query->getMessage(),
            'updateTime'  => $query->getUpdateTime()->format('Y-m-d H:i:s')
        ];
        require_once 'messageContentView.php';
    }catch (Exception $e){
        error_log(__FILE__ . ' function : ' . __FUNCTION__ . ' ' . $e->getMessage());
        echo $e->getMessage();
    }
    echo "IN message";
}


