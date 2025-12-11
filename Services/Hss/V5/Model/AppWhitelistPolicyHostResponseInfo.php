<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppWhitelistPolicyHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppWhitelistPolicyHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * policyName  策略名称
    * eventNum  **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * applyStatus  **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    * intercept  是否开启阻断
    * policyId  策略ID
    * policyType  策略类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'assetValue' => 'string',
            'policyName' => 'string',
            'eventNum' => 'int',
            'osType' => 'string',
            'learningStatus' => 'string',
            'applyStatus' => 'bool',
            'intercept' => 'bool',
            'policyId' => 'string',
            'policyType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * policyName  策略名称
    * eventNum  **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * applyStatus  **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    * intercept  是否开启阻断
    * policyId  策略ID
    * policyType  策略类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'assetValue' => null,
        'policyName' => null,
        'eventNum' => 'int32',
        'osType' => null,
        'learningStatus' => null,
        'applyStatus' => null,
        'intercept' => null,
        'policyId' => null,
        'policyType' => null
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
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * policyName  策略名称
    * eventNum  **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * applyStatus  **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    * intercept  是否开启阻断
    * policyId  策略ID
    * policyType  策略类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'assetValue' => 'asset_value',
            'policyName' => 'policy_name',
            'eventNum' => 'event_num',
            'osType' => 'os_type',
            'learningStatus' => 'learning_status',
            'applyStatus' => 'apply_status',
            'intercept' => 'intercept',
            'policyId' => 'policy_id',
            'policyType' => 'policy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * policyName  策略名称
    * eventNum  **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * applyStatus  **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    * intercept  是否开启阻断
    * policyId  策略ID
    * policyType  策略类型
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'assetValue' => 'setAssetValue',
            'policyName' => 'setPolicyName',
            'eventNum' => 'setEventNum',
            'osType' => 'setOsType',
            'learningStatus' => 'setLearningStatus',
            'applyStatus' => 'setApplyStatus',
            'intercept' => 'setIntercept',
            'policyId' => 'setPolicyId',
            'policyType' => 'setPolicyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * policyName  策略名称
    * eventNum  **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * applyStatus  **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    * intercept  是否开启阻断
    * policyId  策略ID
    * policyType  策略类型
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'assetValue' => 'getAssetValue',
            'policyName' => 'getPolicyName',
            'eventNum' => 'getEventNum',
            'osType' => 'getOsType',
            'learningStatus' => 'getLearningStatus',
            'applyStatus' => 'getApplyStatus',
            'intercept' => 'getIntercept',
            'policyId' => 'getPolicyId',
            'policyType' => 'getPolicyType'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['eventNum'] = isset($data['eventNum']) ? $data['eventNum'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['learningStatus'] = isset($data['learningStatus']) ? $data['learningStatus'] : null;
        $this->container['applyStatus'] = isset($data['applyStatus']) ? $data['applyStatus'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && !preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['learningStatus']) && (mb_strlen($this->container['learningStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'learningStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['learningStatus']) && (mb_strlen($this->container['learningStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'learningStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyType']) && (mb_strlen($this->container['policyType']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyType']) && (mb_strlen($this->container['policyType']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be bigger than or equal to 1.";
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
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
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
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
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
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
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
    * Gets assetValue
    *  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
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
    * @param string|null $assetValue **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
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
    * Gets eventNum
    *  **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getEventNum()
    {
        return $this->container['eventNum'];
    }

    /**
    * Sets eventNum
    *
    * @param int|null $eventNum **参数解释**: 主机发生事件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setEventNum($eventNum)
    {
        $this->container['eventNum'] = $eventNum;
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
    * Gets learningStatus
    *  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLearningStatus()
    {
        return $this->container['learningStatus'];
    }

    /**
    * Sets learningStatus
    *
    * @param string|null $learningStatus **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLearningStatus($learningStatus)
    {
        $this->container['learningStatus'] = $learningStatus;
        return $this;
    }

    /**
    * Gets applyStatus
    *  **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getApplyStatus()
    {
        return $this->container['applyStatus'];
    }

    /**
    * Sets applyStatus
    *
    * @param bool|null $applyStatus **参数解释**： 是否应用 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setApplyStatus($applyStatus)
    {
        $this->container['applyStatus'] = $applyStatus;
        return $this;
    }

    /**
    * Gets intercept
    *  是否开启阻断
    *
    * @return bool|null
    */
    public function getIntercept()
    {
        return $this->container['intercept'];
    }

    /**
    * Sets intercept
    *
    * @param bool|null $intercept 是否开启阻断
    *
    * @return $this
    */
    public function setIntercept($intercept)
    {
        $this->container['intercept'] = $intercept;
        return $this;
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
    * Gets policyType
    *  策略类型
    *
    * @return string|null
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string|null $policyType 策略类型
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
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

