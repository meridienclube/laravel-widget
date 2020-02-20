<?PHP

namespace ConfrariaWeb\Widget\Repositories;

use ConfrariaWeb\Widget\Contracts\WidgetContract;
use ConfrariaWeb\Widget\Models\Widget;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class WidgetRepository implements WidgetContract
{

    use RepositoryTrait;

    function __construct(Widget $widget)
    {
        $this->obj = $widget;
    }

    public function where(array $data = [], $take = null)
    {
        $w = $this->obj;

        $w = isset($take) ? $w->paginate($take) : $w->get();
        return $w;
    }

}
