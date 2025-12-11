<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppWhitelistPolicyProcessResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppWhitelistPolicyProcessResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * handleStatus  **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    * specifiedPath  **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * fileSigner  **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * appType  **参数解释**： 应用类型 **约束限制**： 不涉及
    * whitelistCount  **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    * blacklistCount  **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    * trustStatusSource  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processName' => 'string',
            'processPath' => 'string',
            'processHash' => 'string',
            'handleStatus' => 'string',
            'specifiedPath' => 'string',
            'cmdline' => 'string',
            'fileSize' => 'int',
            'fileSigner' => 'string',
            'processType' => 'int',
            'osType' => 'string',
            'appType' => 'string',
            'whitelistCount' => 'int',
            'blacklistCount' => 'int',
            'trustStatusSource' => 'int',
            'processStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * handleStatus  **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    * specifiedPath  **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * fileSigner  **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * appType  **参数解释**： 应用类型 **约束限制**： 不涉及
    * whitelistCount  **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    * blacklistCount  **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    * trustStatusSource  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processName' => null,
        'processPath' => null,
        'processHash' => null,
        'handleStatus' => null,
        'specifiedPath' => null,
        'cmdline' => null,
        'fileSize' => 'int64',
        'fileSigner' => null,
        'processType' => null,
        'osType' => null,
        'appType' => null,
        'whitelistCount' => 'int32',
        'blacklistCount' => 'int32',
        'trustStatusSource' => 'int32',
        'processStatus' => null
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
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * handleStatus  **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    * specifiedPath  **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * fileSigner  **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * appType  **参数解释**： 应用类型 **约束限制**： 不涉及
    * whitelistCount  **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    * blacklistCount  **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    * trustStatusSource  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processName' => 'process_name',
            'processPath' => 'process_path',
            'processHash' => 'process_hash',
            'handleStatus' => 'handle_status',
            'specifiedPath' => 'specified_path',
            'cmdline' => 'cmdline',
            'fileSize' => 'file_size',
            'fileSigner' => 'file_signer',
            'processType' => 'process_type',
            'osType' => 'os_type',
            'appType' => 'app_type',
            'whitelistCount' => 'whitelist_count',
            'blacklistCount' => 'blacklist_count',
            'trustStatusSource' => 'trust_status_source',
            'processStatus' => 'process_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * handleStatus  **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    * specifiedPath  **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * fileSigner  **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * appType  **参数解释**： 应用类型 **约束限制**： 不涉及
    * whitelistCount  **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    * blacklistCount  **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    * trustStatusSource  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'processName' => 'setProcessName',
            'processPath' => 'setProcessPath',
            'processHash' => 'setProcessHash',
            'handleStatus' => 'setHandleStatus',
            'specifiedPath' => 'setSpecifiedPath',
            'cmdline' => 'setCmdline',
            'fileSize' => 'setFileSize',
            'fileSigner' => 'setFileSigner',
            'processType' => 'setProcessType',
            'osType' => 'setOsType',
            'appType' => 'setAppType',
            'whitelistCount' => 'setWhitelistCount',
            'blacklistCount' => 'setBlacklistCount',
            'trustStatusSource' => 'setTrustStatusSource',
            'processStatus' => 'setProcessStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * handleStatus  **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    * specifiedPath  **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * fileSigner  **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * appType  **参数解释**： 应用类型 **约束限制**： 不涉及
    * whitelistCount  **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    * blacklistCount  **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    * trustStatusSource  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'processName' => 'getProcessName',
            'processPath' => 'getProcessPath',
            'processHash' => 'getProcessHash',
            'handleStatus' => 'getHandleStatus',
            'specifiedPath' => 'getSpecifiedPath',
            'cmdline' => 'getCmdline',
            'fileSize' => 'getFileSize',
            'fileSigner' => 'getFileSigner',
            'processType' => 'getProcessType',
            'osType' => 'getOsType',
            'appType' => 'getAppType',
            'whitelistCount' => 'getWhitelistCount',
            'blacklistCount' => 'getBlacklistCount',
            'trustStatusSource' => 'getTrustStatusSource',
            'processStatus' => 'getProcessStatus'
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
        $this->container['processName'] = isset($data['processName']) ? $data['processName'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['processHash'] = isset($data['processHash']) ? $data['processHash'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['specifiedPath'] = isset($data['specifiedPath']) ? $data['specifiedPath'] : null;
        $this->container['cmdline'] = isset($data['cmdline']) ? $data['cmdline'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileSigner'] = isset($data['fileSigner']) ? $data['fileSigner'] : null;
        $this->container['processType'] = isset($data['processType']) ? $data['processType'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['whitelistCount'] = isset($data['whitelistCount']) ? $data['whitelistCount'] : null;
        $this->container['blacklistCount'] = isset($data['blacklistCount']) ? $data['blacklistCount'] : null;
        $this->container['trustStatusSource'] = isset($data['trustStatusSource']) ? $data['trustStatusSource'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) > 128)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) < 1)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processName']) && !preg_match("/^.*$/", $this->container['processName'])) {
                $invalidProperties[] = "invalid value for 'processName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processHash']) && (mb_strlen($this->container['processHash']) > 128)) {
                $invalidProperties[] = "invalid value for 'processHash', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processHash']) && (mb_strlen($this->container['processHash']) < 1)) {
                $invalidProperties[] = "invalid value for 'processHash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmdline']) && !preg_match("/^.*$/", $this->container['cmdline'])) {
                $invalidProperties[] = "invalid value for 'cmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileSigner']) && (mb_strlen($this->container['fileSigner']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileSigner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileSigner']) && (mb_strlen($this->container['fileSigner']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileSigner', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['whitelistCount']) && ($this->container['whitelistCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'whitelistCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['whitelistCount']) && ($this->container['whitelistCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'whitelistCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blacklistCount']) && ($this->container['blacklistCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'blacklistCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['blacklistCount']) && ($this->container['blacklistCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'blacklistCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trustStatusSource']) && ($this->container['trustStatusSource'] > 3)) {
                $invalidProperties[] = "invalid value for 'trustStatusSource', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['trustStatusSource']) && ($this->container['trustStatusSource'] < 0)) {
                $invalidProperties[] = "invalid value for 'trustStatusSource', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 1.";
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
    * Gets processName
    *  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getProcessName()
    {
        return $this->container['processName'];
    }

    /**
    * Sets processName
    *
    * @param string|null $processName **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setProcessName($processName)
    {
        $this->container['processName'] = $processName;
        return $this;
    }

    /**
    * Gets processPath
    *  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessPath()
    {
        return $this->container['processPath'];
    }

    /**
    * Sets processPath
    *
    * @param string|null $processPath **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets processHash
    *  进程hash
    *
    * @return string|null
    */
    public function getProcessHash()
    {
        return $this->container['processHash'];
    }

    /**
    * Sets processHash
    *
    * @param string|null $processHash 进程hash
    *
    * @return $this
    */
    public function setProcessHash($processHash)
    {
        $this->container['processHash'] = $processHash;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**： 处理方式 **取值范围**: - confirmed：已确认 - unconfirmed：未确认
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets specifiedPath
    *  **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    *
    * @return string|null
    */
    public function getSpecifiedPath()
    {
        return $this->container['specifiedPath'];
    }

    /**
    * Sets specifiedPath
    *
    * @param string|null $specifiedPath **参数解释**： 指定目录 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setSpecifiedPath($specifiedPath)
    {
        $this->container['specifiedPath'] = $specifiedPath;
        return $this;
    }

    /**
    * Gets cmdline
    *  **参数解释**： 进程命令行 **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getCmdline()
    {
        return $this->container['cmdline'];
    }

    /**
    * Sets cmdline
    *
    * @param string|null $cmdline **参数解释**： 进程命令行 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setCmdline($cmdline)
    {
        $this->container['cmdline'] = $cmdline;
        return $this;
    }

    /**
    * Gets fileSize
    *  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileSigner
    *  **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getFileSigner()
    {
        return $this->container['fileSigner'];
    }

    /**
    * Sets fileSigner
    *
    * @param string|null $fileSigner **参数解释**： 文件签名 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setFileSigner($fileSigner)
    {
        $this->container['fileSigner'] = $fileSigner;
        return $this;
    }

    /**
    * Gets processType
    *  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    *
    * @return int|null
    */
    public function getProcessType()
    {
        return $this->container['processType'];
    }

    /**
    * Sets processType
    *
    * @param int|null $processType **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - 1：系统程序 - 2：解释类程序 - 3：普通可执行程序
    *
    * @return $this
    */
    public function setProcessType($processType)
    {
        $this->container['processType'] = $processType;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets appType
    *  **参数解释**： 应用类型 **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType **参数解释**： 应用类型 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets whitelistCount
    *  **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    *
    * @return int|null
    */
    public function getWhitelistCount()
    {
        return $this->container['whitelistCount'];
    }

    /**
    * Sets whitelistCount
    *
    * @param int|null $whitelistCount **参数解释**: 白名单确认次数 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setWhitelistCount($whitelistCount)
    {
        $this->container['whitelistCount'] = $whitelistCount;
        return $this;
    }

    /**
    * Gets blacklistCount
    *  **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    *
    * @return int|null
    */
    public function getBlacklistCount()
    {
        return $this->container['blacklistCount'];
    }

    /**
    * Sets blacklistCount
    *
    * @param int|null $blacklistCount **参数解释**: 黑名单确认次数 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setBlacklistCount($blacklistCount)
    {
        $this->container['blacklistCount'] = $blacklistCount;
        return $this;
    }

    /**
    * Gets trustStatusSource
    *  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getTrustStatusSource()
    {
        return $this->container['trustStatusSource'];
    }

    /**
    * Sets trustStatusSource
    *
    * @param int|null $trustStatusSource **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - 0：情报 - 1：恶意软件 - 2：人工确认 - 3：自学习  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTrustStatusSource($trustStatusSource)
    {
        $this->container['trustStatusSource'] = $trustStatusSource;
        return $this;
    }

    /**
    * Gets processStatus
    *  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string|null $processStatus **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
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

