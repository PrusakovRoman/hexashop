<?

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
  public function index_action()
  {
    $categories = $this->model->get_categories();

    $data = compact('categories');

    $this->view->render((object) $data);
  }
}
