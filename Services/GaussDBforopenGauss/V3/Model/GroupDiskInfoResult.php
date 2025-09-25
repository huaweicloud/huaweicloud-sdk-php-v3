<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupDiskInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupDiskInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * used  **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    * total  **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'name' => 'string',
            'used' => 'double',
            'total' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * used  **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    * total  **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'name' => null,
        'used' => 'double',
        'total' => 'double'
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
    * groupId  **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * used  **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    * total  **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'name' => 'name',
            'used' => 'used',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * used  **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    * total  **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'name' => 'setName',
            'used' => 'setUsed',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * used  **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    * total  **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'name' => 'getName',
            'used' => 'getUsed',
            'total' => 'getTotal'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
    * Gets groupId
    *  **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释**： 分片组ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 分片名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets used
    *  **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    *
    * @return double
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param double $used **参数解释**： 分片磁盘使用率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @return double
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param double $total **参数解释**： 分片磁盘大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

