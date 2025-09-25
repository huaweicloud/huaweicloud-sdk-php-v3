<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadAssetFileRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadAssetFileRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * searchParam  **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'searchParam' => 'string',
            'exportHeaders' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * searchParam  **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'searchParam' => null,
        'exportHeaders' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * searchParam  **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'searchParam' => 'search_param',
            'exportHeaders' => 'export_headers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * searchParam  **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'searchParam' => 'setSearchParam',
            'exportHeaders' => 'setExportHeaders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * searchParam  **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'searchParam' => 'getSearchParam',
            'exportHeaders' => 'getExportHeaders'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['searchParam'] = isset($data['searchParam']) ? $data['searchParam'] : null;
        $this->container['exportHeaders'] = isset($data['exportHeaders']) ? $data['exportHeaders'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['searchParam']) && (mb_strlen($this->container['searchParam']) > 128)) {
                $invalidProperties[] = "invalid value for 'searchParam', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['searchParam']) && (mb_strlen($this->container['searchParam']) < 0)) {
                $invalidProperties[] = "invalid value for 'searchParam', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['exportHeaders'] === null) {
            $invalidProperties[] = "'exportHeaders' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets searchParam
    *  **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSearchParam()
    {
        return $this->container['searchParam'];
    }

    /**
    * Sets searchParam
    *
    * @param string|null $searchParam **参数解释**: 查询条件，json格式字符串，如{\\\"port_string\\\": \\\"8080\\\"} **约束限制**: 如下接口的请求参数的json格式 - users         ：/v5/{project_id}/asset/users - auto_launch   ：/v5/{project_id}/asset/auto-launchs - database      ：/v5/{project_id}/asset/web-app-and-services - jar_package   ：/v5/{project_id}/asset/midwares/detail - port          ：/v5/{project_id}/asset/ports/detail - process       ：/v5/{project_id}/asset/processes/detail - web_cms       ：/v5/{project_id}/asset/web-app-and-services - web_framework ：/v5/{project_id}/asset/host/web-framework - web_service   ：/v5/{project_id}/asset/web-app-and-services - web_site      ：/v5/{project_id}/asset/host/web-site - app           ：/v5/{project_id}/asset/apps - kernel_module ：/v5/{project_id}/asset/host/kernel-module  **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSearchParam($searchParam)
    {
        $this->container['searchParam'] = $searchParam;
        return $this;
    }

    /**
    * Gets exportHeaders
    *  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @return string[][]
    */
    public function getExportHeaders()
    {
        return $this->container['exportHeaders'];
    }

    /**
    * Sets exportHeaders
    *
    * @param string[][] $exportHeaders **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 所有资产都有如下字段： - host_name：主机服务器名 - host_ip：主机ip 其他资产类别特有字段： - users   - user_name：用户名   - login_permission：是否有登录权限   - root_permission：是否有root权限   - user_group_name：用户组   - user_home_dir：用户目录   - shell：用户启动shell   - recent_scan_time：最近扫描时间   - first_scan_time：首次扫描时间   - container_id：容器id   - container_name：容器名称 - auto_launch   - name：名称   - type：类型   - path：文件路径   - hash：文件hash   - run_user：运行用户   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - database - web_cms - web_service   - name：软件名称   - version：软件版本   - install_path：安装路径   - config_path：配置文件路径   - uid：用户id   - mode：软件文件权限   - pid：软件进程id   - proc_path：软件进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - jar_package   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - is_embedded：是否为内层jar包   - package_path：外层jar包路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - port   - port_status：端口是否需要处理   - port：端口号   - type：类型   - pid：进程ID   - path：程序文件路径   - laddr：监听的ip   - container_id：容器id   - container_name：容器名称 - process   - process_path：进程路径   - launch_params：启动参数   - launch_time：启动时间   - user_name：运行用户   - run_permission：运行权限   - process_pid：进程ID   - hash：文件hash   - container_id：容器id   - container_name：容器名称 - web_framework   - name：名称   - file_name：文件名   - catalogue：类别   - file_type：文件类型   - version：版本   - path：文件路径   - hash：文件hash   - uid：用户id   - gid：用户组id   - mode：文件权限   - pid：进程id   - proc_path：进程路径   - record_time：扫描时间   - container_id：容器id   - container_name：容器名称 - web_site   - domain：对外域名   - port：对外端口号   - url_path：url路径   - path：web目录   - mode：web目录文件权限   - uid：用户id   - record_time：扫描时间   - is_https：是否为https   - pid：进程id   - cert_issuer：SSL证书颁发者   - cert_user：SSL证书使用者   - cert_issue_time：SSL证书颁发时间   - cert_expired_time：SSL证书到期时间   - container_id：容器id   - container_name：容器名称 - app   - app_name：软件名称   - version：版本号   - update_time：更新时间   - recent_scan_time：最近扫描时间   - container_id：容器id   - container_name：容器名称 - kernel_module   - name：名称   - version：版本   - srcversion：源码版本   - desc：描述   - path：文件路径   - size：文件大小   - mode：文件权限   - uid：用户id   - ctime：文件创建时间   - mtime：最后修改时间   - hash：文件hash   - record_time：扫描时间  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExportHeaders($exportHeaders)
    {
        $this->container['exportHeaders'] = $exportHeaders;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

