<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntiVirusHandleHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntiVirusHandleHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultId  病毒查杀结果ID
    * malwareType  病毒类型
    * malwareName  病毒名称
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    * notes  备注信息
    * handleTime  处置时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultId' => 'string',
            'malwareType' => 'string',
            'malwareName' => 'string',
            'severity' => 'string',
            'filePath' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'assetValue' => 'string',
            'occurTime' => 'int',
            'handleStatus' => 'string',
            'handleMethod' => 'string',
            'notes' => 'string',
            'handleTime' => 'int',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultId  病毒查杀结果ID
    * malwareType  病毒类型
    * malwareName  病毒名称
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    * notes  备注信息
    * handleTime  处置时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultId' => null,
        'malwareType' => null,
        'malwareName' => null,
        'severity' => null,
        'filePath' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'assetValue' => null,
        'occurTime' => 'int64',
        'handleStatus' => null,
        'handleMethod' => null,
        'notes' => null,
        'handleTime' => 'int64',
        'userName' => null
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
    * resultId  病毒查杀结果ID
    * malwareType  病毒类型
    * malwareName  病毒名称
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    * notes  备注信息
    * handleTime  处置时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultId' => 'result_id',
            'malwareType' => 'malware_type',
            'malwareName' => 'malware_name',
            'severity' => 'severity',
            'filePath' => 'file_path',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'assetValue' => 'asset_value',
            'occurTime' => 'occur_time',
            'handleStatus' => 'handle_status',
            'handleMethod' => 'handle_method',
            'notes' => 'notes',
            'handleTime' => 'handle_time',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultId  病毒查杀结果ID
    * malwareType  病毒类型
    * malwareName  病毒名称
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    * notes  备注信息
    * handleTime  处置时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'resultId' => 'setResultId',
            'malwareType' => 'setMalwareType',
            'malwareName' => 'setMalwareName',
            'severity' => 'setSeverity',
            'filePath' => 'setFilePath',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'assetValue' => 'setAssetValue',
            'occurTime' => 'setOccurTime',
            'handleStatus' => 'setHandleStatus',
            'handleMethod' => 'setHandleMethod',
            'notes' => 'setNotes',
            'handleTime' => 'setHandleTime',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultId  病毒查杀结果ID
    * malwareType  病毒类型
    * malwareName  病毒名称
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    * notes  备注信息
    * handleTime  处置时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'resultId' => 'getResultId',
            'malwareType' => 'getMalwareType',
            'malwareName' => 'getMalwareName',
            'severity' => 'getSeverity',
            'filePath' => 'getFilePath',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'assetValue' => 'getAssetValue',
            'occurTime' => 'getOccurTime',
            'handleStatus' => 'getHandleStatus',
            'handleMethod' => 'getHandleMethod',
            'notes' => 'getNotes',
            'handleTime' => 'getHandleTime',
            'userName' => 'getUserName'
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
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['malwareType'] = isset($data['malwareType']) ? $data['malwareType'] : null;
        $this->container['malwareName'] = isset($data['malwareName']) ? $data['malwareName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['handleMethod'] = isset($data['handleMethod']) ? $data['handleMethod'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resultId']) && !preg_match("/^.*$/", $this->container['resultId'])) {
                $invalidProperties[] = "invalid value for 'resultId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['malwareType']) && !preg_match("/^.*$/", $this->container['malwareType'])) {
                $invalidProperties[] = "invalid value for 'malwareType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['malwareName']) && !preg_match("/^.*$/", $this->container['malwareName'])) {
                $invalidProperties[] = "invalid value for 'malwareName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 20)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notes']) && !preg_match("/^.*$/", $this->container['notes'])) {
                $invalidProperties[] = "invalid value for 'notes', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && !preg_match("/^.*$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^.*$/.";
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
    * Gets resultId
    *  病毒查杀结果ID
    *
    * @return string|null
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string|null $resultId 病毒查杀结果ID
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets malwareType
    *  病毒类型
    *
    * @return string|null
    */
    public function getMalwareType()
    {
        return $this->container['malwareType'];
    }

    /**
    * Sets malwareType
    *
    * @param string|null $malwareType 病毒类型
    *
    * @return $this
    */
    public function setMalwareType($malwareType)
    {
        $this->container['malwareType'] = $malwareType;
        return $this;
    }

    /**
    * Gets malwareName
    *  病毒名称
    *
    * @return string|null
    */
    public function getMalwareName()
    {
        return $this->container['malwareName'];
    }

    /**
    * Sets malwareName
    *
    * @param string|null $malwareName 病毒名称
    *
    * @return $this
    */
    public function setMalwareName($malwareName)
    {
        $this->container['malwareName'] = $malwareName;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue 资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets occurTime
    *  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
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
    * @param string|null $handleStatus **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets handleMethod
    *  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    *
    * @return string|null
    */
    public function getHandleMethod()
    {
        return $this->container['handleMethod'];
    }

    /**
    * Sets handleMethod
    *
    * @param string|null $handleMethod 处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件
    *
    * @return $this
    */
    public function setHandleMethod($handleMethod)
    {
        $this->container['handleMethod'] = $handleMethod;
        return $this;
    }

    /**
    * Gets notes
    *  备注信息
    *
    * @return string|null
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param string|null $notes 备注信息
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets handleTime
    *  处置时间
    *
    * @return int|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param int|null $handleTime 处置时间
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

