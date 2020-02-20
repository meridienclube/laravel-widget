<?PHP

namespace ConfrariaWeb\Widget\Services;

use ConfrariaWeb\Widget\Contracts\WidgetContract;
use Validator;
use Carbon\Carbon;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;
use ConfrariaWeb\Widget\Events\CreateHistoric;

class WidgetService
{
    use ServiceTrait;

    public function __construct(WidgetContract $widget)
    {
        $this->obj = $widget;
    }

    function pluck()
    {
        return $this->obj->all()->pluck('name', 'id');
    }

}
