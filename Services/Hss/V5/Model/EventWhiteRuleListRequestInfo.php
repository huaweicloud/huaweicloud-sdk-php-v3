<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventWhiteRuleListRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventWhiteRuleListRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * fieldKey  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'int',
            'fieldKey' => 'string',
            'fieldValue' => 'string',
            'judgeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * fieldKey  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => 'int32',
        'fieldKey' => null,
        'fieldValue' => null,
        'judgeType' => null
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
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * fieldKey  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'fieldKey' => 'field_key',
            'fieldValue' => 'field_value',
            'judgeType' => 'judge_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * fieldKey  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'fieldKey' => 'setFieldKey',
            'fieldValue' => 'setFieldValue',
            'judgeType' => 'setJudgeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * fieldKey  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    * fieldValue  加白字段值
    * judgeType  通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'fieldKey' => 'getFieldKey',
            'fieldValue' => 'getFieldValue',
            'judgeType' => 'getJudgeType'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['fieldKey'] = isset($data['fieldKey']) ? $data['fieldKey'] : null;
        $this->container['fieldValue'] = isset($data['fieldValue']) ? $data['fieldValue'] : null;
        $this->container['judgeType'] = isset($data['judgeType']) ? $data['judgeType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            if (($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
            }
        if ($this->container['fieldKey'] === null) {
            $invalidProperties[] = "'fieldKey' can't be null";
        }
            if ((mb_strlen($this->container['fieldKey']) > 20)) {
                $invalidProperties[] = "invalid value for 'fieldKey', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['fieldKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'fieldKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['fieldValue'] === null) {
            $invalidProperties[] = "'fieldValue' can't be null";
        }
            if ((mb_strlen($this->container['fieldValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'fieldValue', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['fieldValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'fieldValue', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['judgeType'] === null) {
            $invalidProperties[] = "'judgeType' can't be null";
        }
            if ((mb_strlen($this->container['judgeType']) > 10)) {
                $invalidProperties[] = "invalid value for 'judgeType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['judgeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'judgeType', the character length must be bigger than or equal to 1.";
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
    * Gets eventType
    *  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    *
    * @return int
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int $eventType 事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets fieldKey
    *  加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    *
    * @return string
    */
    public function getFieldKey()
    {
        return $this->container['fieldKey'];
    }

    /**
    * Sets fieldKey
    *
    * @param string $fieldKey 加白字段，包含如下: - \"file/process hash\" # 进程/文件hash - \"file_path\" # 文件路径 - \"process_path\" # 进程路径 - \"login_ip\" # 登录ip - \"reg_key\" #注册表key - \"process_cmdline\" # 进程命令行 - \"username\" # 用户名
    *
    * @return $this
    */
    public function setFieldKey($fieldKey)
    {
        $this->container['fieldKey'] = $fieldKey;
        return $this;
    }

    /**
    * Gets fieldValue
    *  加白字段值
    *
    * @return string
    */
    public function getFieldValue()
    {
        return $this->container['fieldValue'];
    }

    /**
    * Sets fieldValue
    *
    * @param string $fieldValue 加白字段值
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
    * @return string
    */
    public function getJudgeType()
    {
        return $this->container['judgeType'];
    }

    /**
    * Sets judgeType
    *
    * @param string $judgeType 通配符，包含如下: - \"equal\" # 相等 - \"contain\" # 包含
    *
    * @return $this
    */
    public function setJudgeType($judgeType)
    {
        $this->container['judgeType'] = $judgeType;
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

