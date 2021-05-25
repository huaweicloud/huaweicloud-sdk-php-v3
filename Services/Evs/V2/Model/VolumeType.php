<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云硬盘类型的ID。
    * name  云硬盘类型名称。
    * extraSpecs  extraSpecs
    * description  云硬盘类型的描述信息。
    * qosSpecsId  预留属性。
    * isPublic  预留属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'extraSpecs' => '\HuaweiCloud\SDK\Evs\V2\Model\VolumeTypeExtraSpecs',
            'description' => 'string',
            'qosSpecsId' => 'string',
            'isPublic' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云硬盘类型的ID。
    * name  云硬盘类型名称。
    * extraSpecs  extraSpecs
    * description  云硬盘类型的描述信息。
    * qosSpecsId  预留属性。
    * isPublic  预留属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'extraSpecs' => null,
        'description' => null,
        'qosSpecsId' => null,
        'isPublic' => null
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
    * id  云硬盘类型的ID。
    * name  云硬盘类型名称。
    * extraSpecs  extraSpecs
    * description  云硬盘类型的描述信息。
    * qosSpecsId  预留属性。
    * isPublic  预留属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'extraSpecs' => 'extra_specs',
            'description' => 'description',
            'qosSpecsId' => 'qos_specs_id',
            'isPublic' => 'is_public'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云硬盘类型的ID。
    * name  云硬盘类型名称。
    * extraSpecs  extraSpecs
    * description  云硬盘类型的描述信息。
    * qosSpecsId  预留属性。
    * isPublic  预留属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'extraSpecs' => 'setExtraSpecs',
            'description' => 'setDescription',
            'qosSpecsId' => 'setQosSpecsId',
            'isPublic' => 'setIsPublic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云硬盘类型的ID。
    * name  云硬盘类型名称。
    * extraSpecs  extraSpecs
    * description  云硬盘类型的描述信息。
    * qosSpecsId  预留属性。
    * isPublic  预留属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'extraSpecs' => 'getExtraSpecs',
            'description' => 'getDescription',
            'qosSpecsId' => 'getQosSpecsId',
            'isPublic' => 'getIsPublic'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['extraSpecs'] = isset($data['extraSpecs']) ? $data['extraSpecs'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['qosSpecsId'] = isset($data['qosSpecsId']) ? $data['qosSpecsId'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets id
    *  云硬盘类型的ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 云硬盘类型的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  云硬盘类型名称。
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
    * @param string $name 云硬盘类型名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets extraSpecs
    *  extraSpecs
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\VolumeTypeExtraSpecs|null
    */
    public function getExtraSpecs()
    {
        return $this->container['extraSpecs'];
    }

    /**
    * Sets extraSpecs
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\VolumeTypeExtraSpecs|null $extraSpecs extraSpecs
    *
    * @return $this
    */
    public function setExtraSpecs($extraSpecs)
    {
        $this->container['extraSpecs'] = $extraSpecs;
        return $this;
    }

    /**
    * Gets description
    *  云硬盘类型的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 云硬盘类型的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets qosSpecsId
    *  预留属性。
    *
    * @return string|null
    */
    public function getQosSpecsId()
    {
        return $this->container['qosSpecsId'];
    }

    /**
    * Sets qosSpecsId
    *
    * @param string|null $qosSpecsId 预留属性。
    *
    * @return $this
    */
    public function setQosSpecsId($qosSpecsId)
    {
        $this->container['qosSpecsId'] = $qosSpecsId;
        return $this;
    }

    /**
    * Gets isPublic
    *  预留属性。
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 预留属性。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
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

