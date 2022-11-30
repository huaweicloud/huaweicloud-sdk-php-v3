<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataImage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据盘镜像名称。
    * volumeId  数据盘ID。
    * description  数据盘描述。
    * tags  数据盘镜像标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'volumeId' => 'string',
            'description' => 'string',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据盘镜像名称。
    * volumeId  数据盘ID。
    * description  数据盘描述。
    * tags  数据盘镜像标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'volumeId' => null,
        'description' => null,
        'tags' => null
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
    * name  数据盘镜像名称。
    * volumeId  数据盘ID。
    * description  数据盘描述。
    * tags  数据盘镜像标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'volumeId' => 'volume_id',
            'description' => 'description',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据盘镜像名称。
    * volumeId  数据盘ID。
    * description  数据盘描述。
    * tags  数据盘镜像标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'volumeId' => 'setVolumeId',
            'description' => 'setDescription',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据盘镜像名称。
    * volumeId  数据盘ID。
    * description  数据盘描述。
    * tags  数据盘镜像标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'volumeId' => 'getVolumeId',
            'description' => 'getDescription',
            'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
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
    * Gets name
    *  数据盘镜像名称。
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
    * @param string $name 数据盘镜像名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets volumeId
    *  数据盘ID。
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId 数据盘ID。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets description
    *  数据盘描述。
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
    * @param string|null $description 数据盘描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  数据盘镜像标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 数据盘镜像标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

