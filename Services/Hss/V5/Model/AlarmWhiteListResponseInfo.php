<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmWhiteListResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmWhiteListResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectName  企业项目名称
    * hash  事件白名单SHA256
    * description  描述信息
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * whiteField  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    * updateTime  事件白名单更新时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectName' => 'string',
            'hash' => 'string',
            'description' => 'string',
            'eventType' => 'int',
            'whiteField' => 'string',
            'fieldValue' => 'string',
            'judgeType' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectName  企业项目名称
    * hash  事件白名单SHA256
    * description  描述信息
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * whiteField  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    * updateTime  事件白名单更新时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectName' => null,
        'hash' => null,
        'description' => null,
        'eventType' => 'int32',
        'whiteField' => null,
        'fieldValue' => null,
        'judgeType' => null,
        'updateTime' => 'int64'
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
    * enterpriseProjectName  企业项目名称
    * hash  事件白名单SHA256
    * description  描述信息
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * whiteField  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    * updateTime  事件白名单更新时间，毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectName' => 'enterprise_project_name',
            'hash' => 'hash',
            'description' => 'description',
            'eventType' => 'event_type',
            'whiteField' => 'white_field',
            'fieldValue' => 'field_value',
            'judgeType' => 'judge_type',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectName  企业项目名称
    * hash  事件白名单SHA256
    * description  描述信息
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * whiteField  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    * updateTime  事件白名单更新时间，毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'hash' => 'setHash',
            'description' => 'setDescription',
            'eventType' => 'setEventType',
            'whiteField' => 'setWhiteField',
            'fieldValue' => 'setFieldValue',
            'judgeType' => 'setJudgeType',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectName  企业项目名称
    * hash  事件白名单SHA256
    * description  描述信息
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * whiteField  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    * updateTime  事件白名单更新时间，毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'hash' => 'getHash',
            'description' => 'getDescription',
            'eventType' => 'getEventType',
            'whiteField' => 'getWhiteField',
            'fieldValue' => 'getFieldValue',
            'judgeType' => 'getJudgeType',
            'updateTime' => 'getUpdateTime'
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
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['whiteField'] = isset($data['whiteField']) ? $data['whiteField'] : null;
        $this->container['fieldValue'] = isset($data['fieldValue']) ? $data['fieldValue'] : null;
        $this->container['judgeType'] = isset($data['judgeType']) ? $data['judgeType'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && !preg_match("/^.*$/", $this->container['enterpriseProjectName'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 64)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hash']) && !preg_match("/^.*$/", $this->container['hash'])) {
                $invalidProperties[] = "invalid value for 'hash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
            }
            if (!is_null($this->container['whiteField']) && (mb_strlen($this->container['whiteField']) > 20)) {
                $invalidProperties[] = "invalid value for 'whiteField', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['whiteField']) && (mb_strlen($this->container['whiteField']) < 1)) {
                $invalidProperties[] = "invalid value for 'whiteField', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fieldValue']) && (mb_strlen($this->container['fieldValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'fieldValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fieldValue']) && (mb_strlen($this->container['fieldValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'fieldValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fieldValue']) && !preg_match("/^.*$/", $this->container['fieldValue'])) {
                $invalidProperties[] = "invalid value for 'fieldValue', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['judgeType']) && (mb_strlen($this->container['judgeType']) > 10)) {
                $invalidProperties[] = "invalid value for 'judgeType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['judgeType']) && (mb_strlen($this->container['judgeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'judgeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectName
    *  企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets hash
    *  事件白名单SHA256
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash 事件白名单SHA256
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    *
    * @return int|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int|null $eventType 事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets whiteField
    *  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    *
    * @return string|null
    */
    public function getWhiteField()
    {
        return $this->container['whiteField'];
    }

    /**
    * Sets whiteField
    *
    * @param string|null $whiteField 加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    *
    * @return $this
    */
    public function setWhiteField($whiteField)
    {
        $this->container['whiteField'] = $whiteField;
        return $this;
    }

    /**
    * Gets fieldValue
    *  加白字段值
    *
    * @return string|null
    */
    public function getFieldValue()
    {
        return $this->container['fieldValue'];
    }

    /**
    * Sets fieldValue
    *
    * @param string|null $fieldValue 加白字段值
    *
    * @return $this
    */
    public function setFieldValue($fieldValue)
    {
        $this->container['fieldValue'] = $fieldValue;
        return $this;
    }

    /**
    * Gets judgeType
    *  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @return string|null
    */
    public function getJudgeType()
    {
        return $this->container['judgeType'];
    }

    /**
    * Sets judgeType
    *
    * @param string|null $judgeType 通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @return $this
    */
    public function setJudgeType($judgeType)
    {
        $this->container['judgeType'] = $judgeType;
        return $this;
    }

    /**
    * Gets updateTime
    *  事件白名单更新时间，毫秒
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 事件白名单更新时间，毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

