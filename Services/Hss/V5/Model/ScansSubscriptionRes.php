<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScansSubscriptionRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScansSubscriptionRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulnerabilitiesStatisticsStatus  **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    * accountChangeHistoryStatus  **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    * dangerPortsStatus  **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    * weakPwdStatus  **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulnerabilitiesStatisticsStatus' => 'bool',
            'accountChangeHistoryStatus' => 'bool',
            'dangerPortsStatus' => 'bool',
            'weakPwdStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulnerabilitiesStatisticsStatus  **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    * accountChangeHistoryStatus  **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    * dangerPortsStatus  **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    * weakPwdStatus  **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulnerabilitiesStatisticsStatus' => null,
        'accountChangeHistoryStatus' => null,
        'dangerPortsStatus' => null,
        'weakPwdStatus' => null
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
    * vulnerabilitiesStatisticsStatus  **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    * accountChangeHistoryStatus  **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    * dangerPortsStatus  **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    * weakPwdStatus  **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulnerabilitiesStatisticsStatus' => 'vulnerabilities_statistics_status',
            'accountChangeHistoryStatus' => 'account_change_history_status',
            'dangerPortsStatus' => 'danger_ports_status',
            'weakPwdStatus' => 'weak_pwd_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulnerabilitiesStatisticsStatus  **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    * accountChangeHistoryStatus  **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    * dangerPortsStatus  **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    * weakPwdStatus  **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'vulnerabilitiesStatisticsStatus' => 'setVulnerabilitiesStatisticsStatus',
            'accountChangeHistoryStatus' => 'setAccountChangeHistoryStatus',
            'dangerPortsStatus' => 'setDangerPortsStatus',
            'weakPwdStatus' => 'setWeakPwdStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulnerabilitiesStatisticsStatus  **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    * accountChangeHistoryStatus  **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    * dangerPortsStatus  **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    * weakPwdStatus  **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'vulnerabilitiesStatisticsStatus' => 'getVulnerabilitiesStatisticsStatus',
            'accountChangeHistoryStatus' => 'getAccountChangeHistoryStatus',
            'dangerPortsStatus' => 'getDangerPortsStatus',
            'weakPwdStatus' => 'getWeakPwdStatus'
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
        $this->container['vulnerabilitiesStatisticsStatus'] = isset($data['vulnerabilitiesStatisticsStatus']) ? $data['vulnerabilitiesStatisticsStatus'] : null;
        $this->container['accountChangeHistoryStatus'] = isset($data['accountChangeHistoryStatus']) ? $data['accountChangeHistoryStatus'] : null;
        $this->container['dangerPortsStatus'] = isset($data['dangerPortsStatus']) ? $data['dangerPortsStatus'] : null;
        $this->container['weakPwdStatus'] = isset($data['weakPwdStatus']) ? $data['weakPwdStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets vulnerabilitiesStatisticsStatus
    *  **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    *
    * @return bool|null
    */
    public function getVulnerabilitiesStatisticsStatus()
    {
        return $this->container['vulnerabilitiesStatisticsStatus'];
    }

    /**
    * Sets vulnerabilitiesStatisticsStatus
    *
    * @param bool|null $vulnerabilitiesStatisticsStatus **参数解释**: 漏洞统计 **取值范围**: - true：开启 - false：关闭
    *
    * @return $this
    */
    public function setVulnerabilitiesStatisticsStatus($vulnerabilitiesStatisticsStatus)
    {
        $this->container['vulnerabilitiesStatisticsStatus'] = $vulnerabilitiesStatisticsStatus;
        return $this;
    }

    /**
    * Gets accountChangeHistoryStatus
    *  **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    *
    * @return bool|null
    */
    public function getAccountChangeHistoryStatus()
    {
        return $this->container['accountChangeHistoryStatus'];
    }

    /**
    * Sets accountChangeHistoryStatus
    *
    * @param bool|null $accountChangeHistoryStatus **参数解释**: 资产账号变动记录 **取值范围**: - true：开启 - false：关闭
    *
    * @return $this
    */
    public function setAccountChangeHistoryStatus($accountChangeHistoryStatus)
    {
        $this->container['accountChangeHistoryStatus'] = $accountChangeHistoryStatus;
        return $this;
    }

    /**
    * Gets dangerPortsStatus
    *  **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    *
    * @return bool|null
    */
    public function getDangerPortsStatus()
    {
        return $this->container['dangerPortsStatus'];
    }

    /**
    * Sets dangerPortsStatus
    *
    * @param bool|null $dangerPortsStatus **参数解释**: 危险开放端口 **取值范围**: - true：开启 - false：关闭
    *
    * @return $this
    */
    public function setDangerPortsStatus($dangerPortsStatus)
    {
        $this->container['dangerPortsStatus'] = $dangerPortsStatus;
        return $this;
    }

    /**
    * Gets weakPwdStatus
    *  **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @return bool|null
    */
    public function getWeakPwdStatus()
    {
        return $this->container['weakPwdStatus'];
    }

    /**
    * Sets weakPwdStatus
    *
    * @param bool|null $weakPwdStatus **参数解释**: 弱口令 **取值范围**: - true：开启 - false：关闭
    *
    * @return $this
    */
    public function setWeakPwdStatus($weakPwdStatus)
    {
        $this->container['weakPwdStatus'] = $weakPwdStatus;
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

