<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectionPolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectionPolicyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * baitProtectionStatus  是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    * deployMode  是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录
    * protectionType  防护文件类型，例如：docx，txt，avi
    * excludeDirectory  排除目录，选填
    * runtimeDetectionStatus  是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    * runtimeDetectionDirectory  运行时检测目录，现在为保留字段
    * countAssociatedServer  关联server个数
    * operatingSystem  操作系统类型。 - Linux - Windows
    * processWhitelist  进程白名单
    * defaultPolicy  是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'protectionMode' => 'string',
            'baitProtectionStatus' => 'string',
            'deployMode' => 'string',
            'protectionDirectory' => 'string',
            'protectionType' => 'string',
            'excludeDirectory' => 'string',
            'runtimeDetectionStatus' => 'string',
            'runtimeDetectionDirectory' => 'string',
            'countAssociatedServer' => 'int',
            'operatingSystem' => 'string',
            'processWhitelist' => '\HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]',
            'defaultPolicy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * baitProtectionStatus  是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    * deployMode  是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录
    * protectionType  防护文件类型，例如：docx，txt，avi
    * excludeDirectory  排除目录，选填
    * runtimeDetectionStatus  是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    * runtimeDetectionDirectory  运行时检测目录，现在为保留字段
    * countAssociatedServer  关联server个数
    * operatingSystem  操作系统类型。 - Linux - Windows
    * processWhitelist  进程白名单
    * defaultPolicy  是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'protectionMode' => null,
        'baitProtectionStatus' => null,
        'deployMode' => null,
        'protectionDirectory' => null,
        'protectionType' => null,
        'excludeDirectory' => null,
        'runtimeDetectionStatus' => null,
        'runtimeDetectionDirectory' => null,
        'countAssociatedServer' => 'int32',
        'operatingSystem' => null,
        'processWhitelist' => null,
        'defaultPolicy' => 'int32'
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
    * policyId  策略ID
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * baitProtectionStatus  是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    * deployMode  是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录
    * protectionType  防护文件类型，例如：docx，txt，avi
    * excludeDirectory  排除目录，选填
    * runtimeDetectionStatus  是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    * runtimeDetectionDirectory  运行时检测目录，现在为保留字段
    * countAssociatedServer  关联server个数
    * operatingSystem  操作系统类型。 - Linux - Windows
    * processWhitelist  进程白名单
    * defaultPolicy  是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'protectionMode' => 'protection_mode',
            'baitProtectionStatus' => 'bait_protection_status',
            'deployMode' => 'deploy_mode',
            'protectionDirectory' => 'protection_directory',
            'protectionType' => 'protection_type',
            'excludeDirectory' => 'exclude_directory',
            'runtimeDetectionStatus' => 'runtime_detection_status',
            'runtimeDetectionDirectory' => 'runtime_detection_directory',
            'countAssociatedServer' => 'count_associated_server',
            'operatingSystem' => 'operating_system',
            'processWhitelist' => 'process_whitelist',
            'defaultPolicy' => 'default_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略ID
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * baitProtectionStatus  是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    * deployMode  是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录
    * protectionType  防护文件类型，例如：docx，txt，avi
    * excludeDirectory  排除目录，选填
    * runtimeDetectionStatus  是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    * runtimeDetectionDirectory  运行时检测目录，现在为保留字段
    * countAssociatedServer  关联server个数
    * operatingSystem  操作系统类型。 - Linux - Windows
    * processWhitelist  进程白名单
    * defaultPolicy  是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'protectionMode' => 'setProtectionMode',
            'baitProtectionStatus' => 'setBaitProtectionStatus',
            'deployMode' => 'setDeployMode',
            'protectionDirectory' => 'setProtectionDirectory',
            'protectionType' => 'setProtectionType',
            'excludeDirectory' => 'setExcludeDirectory',
            'runtimeDetectionStatus' => 'setRuntimeDetectionStatus',
            'runtimeDetectionDirectory' => 'setRuntimeDetectionDirectory',
            'countAssociatedServer' => 'setCountAssociatedServer',
            'operatingSystem' => 'setOperatingSystem',
            'processWhitelist' => 'setProcessWhitelist',
            'defaultPolicy' => 'setDefaultPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略ID
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * baitProtectionStatus  是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    * deployMode  是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录
    * protectionType  防护文件类型，例如：docx，txt，avi
    * excludeDirectory  排除目录，选填
    * runtimeDetectionStatus  是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    * runtimeDetectionDirectory  运行时检测目录，现在为保留字段
    * countAssociatedServer  关联server个数
    * operatingSystem  操作系统类型。 - Linux - Windows
    * processWhitelist  进程白名单
    * defaultPolicy  是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'protectionMode' => 'getProtectionMode',
            'baitProtectionStatus' => 'getBaitProtectionStatus',
            'deployMode' => 'getDeployMode',
            'protectionDirectory' => 'getProtectionDirectory',
            'protectionType' => 'getProtectionType',
            'excludeDirectory' => 'getExcludeDirectory',
            'runtimeDetectionStatus' => 'getRuntimeDetectionStatus',
            'runtimeDetectionDirectory' => 'getRuntimeDetectionDirectory',
            'countAssociatedServer' => 'getCountAssociatedServer',
            'operatingSystem' => 'getOperatingSystem',
            'processWhitelist' => 'getProcessWhitelist',
            'defaultPolicy' => 'getDefaultPolicy'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['protectionMode'] = isset($data['protectionMode']) ? $data['protectionMode'] : null;
        $this->container['baitProtectionStatus'] = isset($data['baitProtectionStatus']) ? $data['baitProtectionStatus'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['protectionDirectory'] = isset($data['protectionDirectory']) ? $data['protectionDirectory'] : null;
        $this->container['protectionType'] = isset($data['protectionType']) ? $data['protectionType'] : null;
        $this->container['excludeDirectory'] = isset($data['excludeDirectory']) ? $data['excludeDirectory'] : null;
        $this->container['runtimeDetectionStatus'] = isset($data['runtimeDetectionStatus']) ? $data['runtimeDetectionStatus'] : null;
        $this->container['runtimeDetectionDirectory'] = isset($data['runtimeDetectionDirectory']) ? $data['runtimeDetectionDirectory'] : null;
        $this->container['countAssociatedServer'] = isset($data['countAssociatedServer']) ? $data['countAssociatedServer'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->container['processWhitelist'] = isset($data['processWhitelist']) ? $data['processWhitelist'] : null;
        $this->container['defaultPolicy'] = isset($data['defaultPolicy']) ? $data['defaultPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectionMode']) && (mb_strlen($this->container['protectionMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectionMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectionMode']) && (mb_strlen($this->container['protectionMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baitProtectionStatus']) && (mb_strlen($this->container['baitProtectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'baitProtectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['baitProtectionStatus']) && (mb_strlen($this->container['baitProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'baitProtectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deployMode']) && (mb_strlen($this->container['deployMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'deployMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['deployMode']) && (mb_strlen($this->container['deployMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'deployMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectionDirectory']) && (mb_strlen($this->container['protectionDirectory']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectionDirectory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectionDirectory']) && (mb_strlen($this->container['protectionDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectionDirectory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectionType']) && (mb_strlen($this->container['protectionType']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectionType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectionType']) && (mb_strlen($this->container['protectionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeDirectory']) && (mb_strlen($this->container['excludeDirectory']) > 128)) {
                $invalidProperties[] = "invalid value for 'excludeDirectory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['excludeDirectory']) && (mb_strlen($this->container['excludeDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'excludeDirectory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runtimeDetectionStatus']) && (mb_strlen($this->container['runtimeDetectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeDetectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeDetectionStatus']) && (mb_strlen($this->container['runtimeDetectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'runtimeDetectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runtimeDetectionDirectory']) && (mb_strlen($this->container['runtimeDetectionDirectory']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeDetectionDirectory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeDetectionDirectory']) && (mb_strlen($this->container['runtimeDetectionDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'runtimeDetectionDirectory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['countAssociatedServer']) && ($this->container['countAssociatedServer'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'countAssociatedServer', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['countAssociatedServer']) && ($this->container['countAssociatedServer'] < 0)) {
                $invalidProperties[] = "invalid value for 'countAssociatedServer', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operatingSystem']) && (mb_strlen($this->container['operatingSystem']) > 128)) {
                $invalidProperties[] = "invalid value for 'operatingSystem', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['operatingSystem']) && (mb_strlen($this->container['operatingSystem']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatingSystem', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defaultPolicy']) && ($this->container['defaultPolicy'] > 10)) {
                $invalidProperties[] = "invalid value for 'defaultPolicy', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['defaultPolicy']) && ($this->container['defaultPolicy'] < 0)) {
                $invalidProperties[] = "invalid value for 'defaultPolicy', must be bigger than or equal to 0.";
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
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets protectionMode
    *  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    *
    * @return string|null
    */
    public function getProtectionMode()
    {
        return $this->container['protectionMode'];
    }

    /**
    * Sets protectionMode
    *
    * @param string|null $protectionMode 防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    *
    * @return $this
    */
    public function setProtectionMode($protectionMode)
    {
        $this->container['protectionMode'] = $protectionMode;
        return $this;
    }

    /**
    * Gets baitProtectionStatus
    *  是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    *
    * @return string|null
    */
    public function getBaitProtectionStatus()
    {
        return $this->container['baitProtectionStatus'];
    }

    /**
    * Sets baitProtectionStatus
    *
    * @param string|null $baitProtectionStatus 是否开启诱饵防护，包含如下1种, 默认为开启防护诱饵防护。   - opened ：开启。   - closed ：关闭。
    *
    * @return $this
    */
    public function setBaitProtectionStatus($baitProtectionStatus)
    {
        $this->container['baitProtectionStatus'] = $baitProtectionStatus;
        return $this;
    }

    /**
    * Gets deployMode
    *  是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    *
    * @return string|null
    */
    public function getDeployMode()
    {
        return $this->container['deployMode'];
    }

    /**
    * Sets deployMode
    *
    * @param string|null $deployMode 是否开启动态诱饵防护，包含如下2种, 默认为关闭动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    *
    * @return $this
    */
    public function setDeployMode($deployMode)
    {
        $this->container['deployMode'] = $deployMode;
        return $this;
    }

    /**
    * Gets protectionDirectory
    *  防护目录
    *
    * @return string|null
    */
    public function getProtectionDirectory()
    {
        return $this->container['protectionDirectory'];
    }

    /**
    * Sets protectionDirectory
    *
    * @param string|null $protectionDirectory 防护目录
    *
    * @return $this
    */
    public function setProtectionDirectory($protectionDirectory)
    {
        $this->container['protectionDirectory'] = $protectionDirectory;
        return $this;
    }

    /**
    * Gets protectionType
    *  防护文件类型，例如：docx，txt，avi
    *
    * @return string|null
    */
    public function getProtectionType()
    {
        return $this->container['protectionType'];
    }

    /**
    * Sets protectionType
    *
    * @param string|null $protectionType 防护文件类型，例如：docx，txt，avi
    *
    * @return $this
    */
    public function setProtectionType($protectionType)
    {
        $this->container['protectionType'] = $protectionType;
        return $this;
    }

    /**
    * Gets excludeDirectory
    *  排除目录，选填
    *
    * @return string|null
    */
    public function getExcludeDirectory()
    {
        return $this->container['excludeDirectory'];
    }

    /**
    * Sets excludeDirectory
    *
    * @param string|null $excludeDirectory 排除目录，选填
    *
    * @return $this
    */
    public function setExcludeDirectory($excludeDirectory)
    {
        $this->container['excludeDirectory'] = $excludeDirectory;
        return $this;
    }

    /**
    * Gets runtimeDetectionStatus
    *  是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    *
    * @return string|null
    */
    public function getRuntimeDetectionStatus()
    {
        return $this->container['runtimeDetectionStatus'];
    }

    /**
    * Sets runtimeDetectionStatus
    *
    * @param string|null $runtimeDetectionStatus 是否运行时检测，包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。
    *
    * @return $this
    */
    public function setRuntimeDetectionStatus($runtimeDetectionStatus)
    {
        $this->container['runtimeDetectionStatus'] = $runtimeDetectionStatus;
        return $this;
    }

    /**
    * Gets runtimeDetectionDirectory
    *  运行时检测目录，现在为保留字段
    *
    * @return string|null
    */
    public function getRuntimeDetectionDirectory()
    {
        return $this->container['runtimeDetectionDirectory'];
    }

    /**
    * Sets runtimeDetectionDirectory
    *
    * @param string|null $runtimeDetectionDirectory 运行时检测目录，现在为保留字段
    *
    * @return $this
    */
    public function setRuntimeDetectionDirectory($runtimeDetectionDirectory)
    {
        $this->container['runtimeDetectionDirectory'] = $runtimeDetectionDirectory;
        return $this;
    }

    /**
    * Gets countAssociatedServer
    *  关联server个数
    *
    * @return int|null
    */
    public function getCountAssociatedServer()
    {
        return $this->container['countAssociatedServer'];
    }

    /**
    * Sets countAssociatedServer
    *
    * @param int|null $countAssociatedServer 关联server个数
    *
    * @return $this
    */
    public function setCountAssociatedServer($countAssociatedServer)
    {
        $this->container['countAssociatedServer'] = $countAssociatedServer;
        return $this;
    }

    /**
    * Gets operatingSystem
    *  操作系统类型。 - Linux - Windows
    *
    * @return string|null
    */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
    * Sets operatingSystem
    *
    * @param string|null $operatingSystem 操作系统类型。 - Linux - Windows
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
        return $this;
    }

    /**
    * Gets processWhitelist
    *  进程白名单
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]|null
    */
    public function getProcessWhitelist()
    {
        return $this->container['processWhitelist'];
    }

    /**
    * Sets processWhitelist
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]|null $processWhitelist 进程白名单
    *
    * @return $this
    */
    public function setProcessWhitelist($processWhitelist)
    {
        $this->container['processWhitelist'] = $processWhitelist;
        return $this;
    }

    /**
    * Gets defaultPolicy
    *  是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @return int|null
    */
    public function getDefaultPolicy()
    {
        return $this->container['defaultPolicy'];
    }

    /**
    * Sets defaultPolicy
    *
    * @param int|null $defaultPolicy 是否为默认策略，包含如下2种。   - 0 ：非默认策略。   - 1 ：默认策略
    *
    * @return $this
    */
    public function setDefaultPolicy($defaultPolicy)
    {
        $this->container['defaultPolicy'] = $defaultPolicy;
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

