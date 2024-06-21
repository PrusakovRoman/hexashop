<?

namespace app\models;

use app\core\Model;

class Main extends Model
{
  public function get_categories()
  {
    return $this->db->fetch_all('categories');
  }
}
