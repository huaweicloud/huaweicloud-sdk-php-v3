<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceStorageInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceStorageInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * used  **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    * prepaidSize  **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    * limit  **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    * type  **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'used' => 'double',
            'prepaidSize' => 'double',
            'limit' => 'double',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * used  **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    * prepaidSize  **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    * limit  **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    * type  **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'used' => 'double',
        'prepaidSize' => 'double',
        'limit' => 'double',
        'type' => null
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
    * used  **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    * prepaidSize  **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    * limit  **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    * type  **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'used' => 'used',
            'prepaidSize' => 'prepaid_size',
            'limit' => 'limit',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * used  **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    * prepaidSize  **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    * limit  **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    * type  **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'used' => 'setUsed',
            'prepaidSize' => 'setPrepaidSize',
            'limit' => 'setLimit',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * used  **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    * prepaidSize  **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    * limit  **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    * type  **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'used' => 'getUsed',
            'prepaidSize' => 'getPrepaidSize',
            'limit' => 'getLimit',
            'type' => 'getType'
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
    const TYPE_POOL = 'POOL';
    const TYPE_STANDARDPOOL = 'STANDARDPOOL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_POOL,
            self::TYPE_STANDARDPOOL,
        ];
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
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['prepaidSize'] = isset($data['prepaidSize']) ? $data['prepaidSize'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets used
    *  **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    *
    * @return double|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param double|null $used **参数解释**：  已使用存储空间大小，单位是GB。  **取值范围**：  大于等于0。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets prepaidSize
    *  **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    *
    * @return double|null
    */
    public function getPrepaidSize()
    {
        return $this->container['prepaidSize'];
    }

    /**
    * Sets prepaidSize
    *
    * @param double|null $prepaidSize **参数解释**：  包年/包月购买的存储空间大小，单位是GB。  **取值范围**：  大于0。
    *
    * @return $this
    */
    public function setPrepaidSize($prepaidSize)
    {
        $this->container['prepaidSize'] = $prepaidSize;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    *
    * @return double|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param double|null $limit **参数解释**：  实例可使用的存储空间上限，单位是GB。  **取值范围**：  大于0。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：  存储类型。  **取值范围**：  - POOL：DL6存储类型。 - STANDARDPOOL：DL5存储类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

