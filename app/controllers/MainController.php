<?

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
  public function index_action()
  {
    $categories = $this->model->get_categories();
    $latest_products = $this->model->get_latest_products();
    $socials = $this->model->get_random_socials();

    $data = compact('categories', 'latest_products', 'socials');

    $this->view->render((object) $data);
  }
}
