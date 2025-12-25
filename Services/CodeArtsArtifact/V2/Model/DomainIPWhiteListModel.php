<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainIPWhiteListModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainIPWhiteListModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * type  **参数解释**: 类型。 **取值范围**: 不涉及。
    * value  **参数解释**: ip地址。 **取值范围**: 不涉及。
    * created  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'domainId' => 'string',
            'region' => 'string',
            'type' => 'string',
            'value' => 'string',
            'created' => 'int',
            'updated' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * type  **参数解释**: 类型。 **取值范围**: 不涉及。
    * value  **参数解释**: ip地址。 **取值范围**: 不涉及。
    * created  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'domainId' => null,
        'region' => null,
        'type' => null,
        'value' => null,
        'created' => 'int64',
        'updated' => 'int64'
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
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * type  **参数解释**: 类型。 **取值范围**: 不涉及。
    * value  **参数解释**: ip地址。 **取值范围**: 不涉及。
    * created  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'region' => 'region',
            'type' => 'type',
            'value' => 'value',
            'created' => 'created',
            'updated' => 'updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * type  **参数解释**: 类型。 **取值范围**: 不涉及。
    * value  **参数解释**: ip地址。 **取值范围**: 不涉及。
    * created  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'region' => 'setRegion',
            'type' => 'setType',
            'value' => 'setValue',
            'created' => 'setCreated',
            'updated' => 'setUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * type  **参数解释**: 类型。 **取值范围**: 不涉及。
    * value  **参数解释**: ip地址。 **取值范围**: 不涉及。
    * created  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'region' => 'getRegion',
            'type' => 'getType',
            'value' => 'getValue',
            'created' => 'getCreated',
            'updated' => 'getUpdated'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
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
    * Gets id
    *  **参数解释**: id。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释**: id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**: 租户id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**: 租户id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**: 区域。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**: 区域。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 类型。 **取值范围**: 不涉及。
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
    * @param string|null $type **参数解释**: 类型。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**: ip地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释**: ip地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets created
    *  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int|null $created **参数解释**: 创建时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param int|null $updated **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
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

