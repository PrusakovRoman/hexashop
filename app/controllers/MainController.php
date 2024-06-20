<?

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
  public function index_action()
  {
    $this->view->render();
  }
}
