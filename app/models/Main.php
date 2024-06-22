<?

namespace app\models;

use app\core\Model;

class Main extends Model
{
  public function get_categories()
  {
    return $this->db->fetch_all('categories');
  }

  public function get_latest_products()
  {
    return $this->db->custom_query("SELECT * FROM products WHERE hot <> 0");
  }

  public function get_random_socials()
  {
    $max = $this->db->custom_query("SELECT id FROM socials ORDER BY id DESC LIMIT 1;
    ")[0]->id;
    $random_socials = [];

    for ($i = 1; $i < 7; $i++) {
      $random_id = random_int(1, $max);
      $random_social = $this->db->fetch_one('socials', $random_id);
      if (!in_array($random_social, $random_socials)) {
        array_push($random_socials, $random_social);
      } else {
        $i--;
      }
    }
    return $random_socials;
  }
}
