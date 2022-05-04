<?php

namespace Eutranet\Init\Http\Controllers;

use Illuminate\Http\Request;
use Eutranet\Init\Models\Media;

/**
 * The Menu controller allows administrators to configure and modify menus
 */
class MediaController extends BaseCrudController
{
    /**
     * The menu controller is accessible to authenticated administrators
     * @param Media $media
     */
    public function __construct(Media $media)
    {
        $this->middleware('auth:admin');
        $viewPath = 'init::crud';
        $resourceName = 'Media';
        $tableName = 'media';
        parent::__construct($media, $resourceName, $tableName);
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
