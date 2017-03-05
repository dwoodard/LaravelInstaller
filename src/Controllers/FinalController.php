<?php

namespace Dwoodard\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Dwoodard\LaravelInstaller\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param InstalledFileManager $fileManager
     * @return \Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager)
    {
        $fileManager->update();

        return view('vendor.installer.finished');
    }
}
