<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWebTamperProtectionConfigRequestBodyQuotaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWebTamperProtectionConfigRequestBody_quota_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    * resourceIdList  **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'string',
            'resourceIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    * resourceIdList  **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => null,
        'resourceIdList' => null
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
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    * resourceIdList  **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'resourceIdList' => 'resource_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    * resourceIdList  **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'resourceIdList' => 'setResourceIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    * resourceIdList  **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'resourceIdList' => 'getResourceIdList'
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            if (!preg_match("/^packet_cycle$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^packet_cycle$/.";
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
    * Gets chargingMode
    *  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string $chargingMode **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle：包年包月  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceIdList
    *  **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
    * Sets resourceIdList
    *
    * @param string[]|null $resourceIdList **参数解释**: 配额id列表 **约束限制**: 若该字段值为空，则随机选取配额 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;
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

