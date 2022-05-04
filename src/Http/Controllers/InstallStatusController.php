<?php

namespace Eutranet\Init\Http\Controllers;

use Illuminate\Http\Request;
use Eutranet\Init\Models\InstallStatus;

/**
 * The Menu controller allows administrators to configure and modify menus
 */
class InstallStatusController extends BaseCrudController
{
    /**
     * The install status controller is accessible to authenticated administrators
     * @param InstallStatus $installStatus
     */
    public function __construct(InstallStatus $installStatus)
    {
        $this->middleware('auth:admin');
        $resourceName = 'InstallStatus';
        $tableName = 'install_statuses';
        parent::__construct($installStatus, $resourceName, $tableName);
    }

    /**
     * @return mixed
     */
    public function inputStore(Request $request): array
    {
        $rules = [
            'package_name' => 'nullable|string|max:120',
            'installed' => 'nullable|boolean',
        ];
        $request->validate($rules);
        return [
            'package_name' => $request->package_name,
            'installed' => $request->installed
        ];
    }

    /**
     * @return mixed
     */
    public function inputUpdate(Request $request): array
    {
        $rules = [
            'package_name' => 'nullable|string|max:120',
            'installed' => 'nullable|boolean',
        ];
        $request->validate($rules);
        return [
            'package_name' => $request->package_name,
            'installed' => $request->installed
        ];
    }
}
