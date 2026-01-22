<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConfigQuotaDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConfigQuotaDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemInfo  itemInfo
    * maxQuota  **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * quotaType  **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * usedQuota  **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemInfo' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemInfo',
            'maxQuota' => 'int',
            'quotaType' => 'string',
            'usedQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemInfo  itemInfo
    * maxQuota  **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * quotaType  **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * usedQuota  **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemInfo' => null,
        'maxQuota' => null,
        'quotaType' => null,
        'usedQuota' => null
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
    * itemInfo  itemInfo
    * maxQuota  **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * quotaType  **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * usedQuota  **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemInfo' => 'item_info',
            'maxQuota' => 'max_quota',
            'quotaType' => 'quota_type',
            'usedQuota' => 'used_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemInfo  itemInfo
    * maxQuota  **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * quotaType  **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * usedQuota  **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'itemInfo' => 'setItemInfo',
            'maxQuota' => 'setMaxQuota',
            'quotaType' => 'setQuotaType',
            'usedQuota' => 'setUsedQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemInfo  itemInfo
    * maxQuota  **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * quotaType  **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * usedQuota  **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'itemInfo' => 'getItemInfo',
            'maxQuota' => 'getMaxQuota',
            'quotaType' => 'getQuotaType',
            'usedQuota' => 'getUsedQuota'
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
        $this->container['itemInfo'] = isset($data['itemInfo']) ? $data['itemInfo'] : null;
        $this->container['maxQuota'] = isset($data['maxQuota']) ? $data['maxQuota'] : null;
        $this->container['quotaType'] = isset($data['quotaType']) ? $data['quotaType'] : null;
        $this->container['usedQuota'] = isset($data['usedQuota']) ? $data['usedQuota'] : null;
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
    * Gets itemInfo
    *  itemInfo
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemInfo|null
    */
    public function getItemInfo()
    {
        return $this->container['itemInfo'];
    }

    /**
    * Sets itemInfo
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemInfo|null $itemInfo itemInfo
    *
    * @return $this
    */
    public function setItemInfo($itemInfo)
    {
        $this->container['itemInfo'] = $itemInfo;
        return $this;
    }

    /**
    * Gets maxQuota
    *  **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getMaxQuota()
    {
        return $this->container['maxQuota'];
    }

    /**
    * Sets maxQuota
    *
    * @param int|null $maxQuota **参数解释**： 防火墙成员最大配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMaxQuota($maxQuota)
    {
        $this->container['maxQuota'] = $maxQuota;
        return $this;
    }

    /**
    * Gets quotaType
    *  **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
    * Sets quotaType
    *
    * @param string|null $quotaType **参数解释**： 防火墙成员配额类型 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;
        return $this;
    }

    /**
    * Gets usedQuota
    *  **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getUsedQuota()
    {
        return $this->container['usedQuota'];
    }

    /**
    * Sets usedQuota
    *
    * @param int|null $usedQuota **参数解释**： 已使用配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUsedQuota($usedQuota)
    {
        $this->container['usedQuota'] = $usedQuota;
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

