# Dcat2 Admin Extension

# Crontab Manage extension for dcat-admin

来自 [arrowjustdoit/dcat-admin-crontab-extension](https://github.com/ArrowJustDoIt/dcat-admin-crontab-extension)

更新适配`dcat2`

## 安装

下载 zip 安装

在服务器中配置 crontab

命令 `php artisan Crontab:AutoTask`

配置在系统计划任务中

```bash
crontab -e //回车

* * * * * php /your web dir/artisan Crontab:AutoTask >>/home/crontab.log 2>&1 //>>后面为日志文件保存地址,可加可不加
```

## 访问

```
https://your domain/admin/extension/crontab #定时任务列表
https://your domain/admin/extension/crontab-log #定时任务日志列表
```

## License

Licensed under [The MIT License (MIT)](LICENSE).
