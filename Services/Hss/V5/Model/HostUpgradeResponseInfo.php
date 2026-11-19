<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostUpgradeResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostUpgradeResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
    * upgradeStatus  **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'upgradeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
    * upgradeStatus  **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'upgradeStatus' => null
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
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
    * upgradeStatus  **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'upgradeStatus' => 'upgrade_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
    * upgradeStatus  **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'upgradeStatus' => 'setUpgradeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
    * upgradeStatus  **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'upgradeStatus' => 'getUpgradeStatus'
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
        $this->container['upgradeStatus'] = isset($data['upgradeStatus']) ? $data['upgradeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upgradeStatus']) && (mb_strlen($this->container['upgradeStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['upgradeStatus']) && (mb_strlen($this->container['upgradeStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['upgradeStatus']) && !preg_match("/^(not_upgrade|upgrading|upgrade_failed|upgrade_succeed)$/", $this->container['upgradeStatus'])) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', must be conform to the pattern /^(not_upgrade|upgrading|upgrade_failed|upgrade_succeed)$/.";
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
    *  **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
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
    * @param string|null $hostId **参数解释**: 服务器ID **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets upgradeStatus
    *  **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @return string|null
    */
    public function getUpgradeStatus()
    {
        return $this->container['upgradeStatus'];
    }

    /**
    * Sets upgradeStatus
    *
    * @param string|null $upgradeStatus **参数解释**: 升级状态 **取值范围**: - not_upgrade：未升级，默认状态，客户还没有给这台机器下发过升级 - upgrading：正在升级到2.0中 - upgrade_failed：升级到2.0失败 - upgrade_succeed：已经成功升级到2.0
    *
    * @return $this
    */
    public function setUpgradeStatus($upgradeStatus)
    {
        $this->container['upgradeStatus'] = $upgradeStatus;
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

