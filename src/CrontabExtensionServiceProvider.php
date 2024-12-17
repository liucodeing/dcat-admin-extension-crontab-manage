<?php

namespace Dcat\Admin\Extension\Crontab;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Extension\Crontab\Commands\CrontabAutoTask;

class CrontabExtensionServiceProvider extends ServiceProvider
{
    protected $js = [
        'js/index.js',
    ];
    protected $css = [
        'css/index.css',
    ];
    // 定义菜单
    protected $menu = [
        [
            'title'         => '定时任务管理',
            'icon'          => 'fa-gears',
            'uri'           => '',
            'parent_id'     => 0,
        ],
        [
            'parent'        => '定时任务管理',
            'title'         => '任务列表',
            'icon'          => 'fa-tasks',
            'uri'           => 'extension/crontab',
        ],
        [
            'parent'        => '定时任务管理',
            'title'         => '日志列表',
            'icon'          => 'fa-file-text-o',
            'uri'           => 'extension/crontab-log',
        ]
    ];

    public function register()
    {
        // 添加命令
        if ($this->app->runningInConsole()) {
            $this->commands([
                CrontabAutoTask::class,
            ]);
        }
    }

    public function init()
    {
        parent::init();

        //

    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
