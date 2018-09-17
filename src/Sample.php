<?PHP
header("Content-Type:text/html; charset=utf-8");
require_once __DIR__ . '/dbDoctrine.php';
spl_autoload_register("autoload");
try {
    $method = 'index';
    if (isset($_REQUEST['method'])){
        $method = escapeString($_REQUEST['method']);
        if (!function_exists($method)) {
            throw new Exception('function not exists : ' . $method);
        }
    }
    $method($em);
}catch (Exception $e){
    error_log(__FILE__ . ' ' . $e->getMessage());
    echo $e->getMessage();
}
/**
 * 首頁
 *
 * @param EntityManager $em db連線
 */
function index($em){
    $pageLimit = 10;
    try {
        // 取得總頁數
        $totalPage = $em->getRepository('Board')->getTotalPage($pageLimit);
        // 取得當下頁數, 預設為1
        $page = 1;
        if (isset($_GET['page'])) {
            if (!is_numeric($_GET['page'])) {
                throw new Exception('取得頁數不為數字 : ' . $_GET['page']);
            }
            $page = (int)$_GET['page'];
        }
        // 計算起始資料為第幾筆
        $start = bcmul($pageLimit, bcsub($page, 1));
        $datas = $em->getRepository('Board')->findBy([], ['updateTime'=>'desc'], $pageLimit, $start);
        if (is_array($datas) && count($datas) >= 1) {
            foreach ($datas as $key => $val) {
                $rows[] = [
                    'id'          => $val->getId(),
                    'name'        => $val->getName(),
                    'title'       => $val->getTitle(),
                    'updateTime'  => $val->getUpdateTime()->format('Y-m-d H:i:s')
                ];
            }
        }
        require_once 'messageIndexView.php';
    }catch (Exception $e){
        error_log(__FILE__ . ' function : ' . __FUNCTION__ . ' ' . $e->getMessage());
        echo $e->getMessage();
    }
}
