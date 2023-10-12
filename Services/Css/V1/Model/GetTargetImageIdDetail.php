<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetTargetImageIdDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetTargetImageIdDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  可以升级的目标镜像ID。
    * displayName  可以升级的目标镜像名称。
    * imageDesc  镜像描述信息。
    * datastoreType  镜像引擎类型。
    * datastoreVersion  镜像引擎版本。
    * priority  优先级。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'displayName' => 'string',
            'imageDesc' => 'string',
            'datastoreType' => 'string',
            'datastoreVersion' => 'string',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  可以升级的目标镜像ID。
    * displayName  可以升级的目标镜像名称。
    * imageDesc  镜像描述信息。
    * datastoreType  镜像引擎类型。
    * datastoreVersion  镜像引擎版本。
    * priority  优先级。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'displayName' => null,
        'imageDesc' => null,
        'datastoreType' => null,
        'datastoreVersion' => null,
        'priority' => null
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
    * id  可以升级的目标镜像ID。
    * displayName  可以升级的目标镜像名称。
    * imageDesc  镜像描述信息。
    * datastoreType  镜像引擎类型。
    * datastoreVersion  镜像引擎版本。
    * priority  优先级。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'displayName' => 'displayName',
            'imageDesc' => 'imageDesc',
            'datastoreType' => 'datastoreType',
            'datastoreVersion' => 'datastoreVersion',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  可以升级的目标镜像ID。
    * displayName  可以升级的目标镜像名称。
    * imageDesc  镜像描述信息。
    * datastoreType  镜像引擎类型。
    * datastoreVersion  镜像引擎版本。
    * priority  优先级。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'displayName' => 'setDisplayName',
            'imageDesc' => 'setImageDesc',
            'datastoreType' => 'setDatastoreType',
            'datastoreVersion' => 'setDatastoreVersion',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  可以升级的目标镜像ID。
    * displayName  可以升级的目标镜像名称。
    * imageDesc  镜像描述信息。
    * datastoreType  镜像引擎类型。
    * datastoreVersion  镜像引擎版本。
    * priority  优先级。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'displayName' => 'getDisplayName',
            'imageDesc' => 'getImageDesc',
            'datastoreType' => 'getDatastoreType',
            'datastoreVersion' => 'getDatastoreVersion',
            'priority' => 'getPriority'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['imageDesc'] = isset($data['imageDesc']) ? $data['imageDesc'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
    *  可以升级的目标镜像ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 可以升级的目标镜像ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets displayName
    *  可以升级的目标镜像名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 可以升级的目标镜像名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets imageDesc
    *  镜像描述信息。
    *
    * @return string|null
    */
    public function getImageDesc()
    {
        return $this->container['imageDesc'];
    }

    /**
    * Sets imageDesc
    *
    * @param string|null $imageDesc 镜像描述信息。
    *
    * @return $this
    */
    public function setImageDesc($imageDesc)
    {
        $this->container['imageDesc'] = $imageDesc;
        return $this;
    }

    /**
    * Gets datastoreType
    *  镜像引擎类型。
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 镜像引擎类型。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  镜像引擎版本。
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion 镜像引擎版本。
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets priority
    *  优先级。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

