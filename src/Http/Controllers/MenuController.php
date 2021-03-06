<?php

namespace Eutranet\Init\Http\Controllers;

use Illuminate\Http\Request;
use Eutranet\Init\Models\Menu;
use Illuminate\Support\Facades\Schema;

/**
 * The Menu controller allows administrators to configure and modify menus
 */
class MenuController extends BaseCrudController
{
    /**
     * The menu controller is accessible to authenticated administrators
     * @param Menu $menu
     */
    public function __construct(Menu $menu)
    {
        $this->middleware('auth:admin');
        $viewPath = 'init::crud';
        $resourceName = 'Menu';
        $tableName = 'menus';
        parent::__construct($menu, $resourceName, $tableName);
    }

    /**
     * @return mixed
     */
    public function inputStore(Request $request): array
    {
        $rules = [
            'component' => 'nullable|string|max:50',
            'label' => 'required|string|max:50',
            'route_class' => 'required|string|max:50',
        ];
        $request->validate($rules);
        return [
            'component' => $request->component,
            'label' => $request->label,
            'route_class' => $request->route_class
        ];
    }

    /**
     * @return mixed
     */
    public function inputUpdate(Request $request): array
    {
        $rules = [
            'component' => 'nullable|string|max:50',
            'label' => 'required|string|max:50',
            'route_class' => 'required|string|max:50',
        ];
        $request->validate($rules);
        return [
            'component' => $request->component,
            'label' => $request->label,
            'route_class' => $request->route_class
        ];
    }
}
