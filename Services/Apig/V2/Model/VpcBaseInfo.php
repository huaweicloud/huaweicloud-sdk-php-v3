<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ecsId  云服务器ID
    * ecsName  云服务器名称
    * cascadeFlag  是否使用级联方式  暂不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ecsId' => 'string',
            'ecsName' => 'string',
            'cascadeFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ecsId  云服务器ID
    * ecsName  云服务器名称
    * cascadeFlag  是否使用级联方式  暂不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ecsId' => null,
        'ecsName' => null,
        'cascadeFlag' => null
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
    * ecsId  云服务器ID
    * ecsName  云服务器名称
    * cascadeFlag  是否使用级联方式  暂不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ecsId' => 'ecs_id',
            'ecsName' => 'ecs_name',
            'cascadeFlag' => 'cascade_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ecsId  云服务器ID
    * ecsName  云服务器名称
    * cascadeFlag  是否使用级联方式  暂不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'ecsId' => 'setEcsId',
            'ecsName' => 'setEcsName',
            'cascadeFlag' => 'setCascadeFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ecsId  云服务器ID
    * ecsName  云服务器名称
    * cascadeFlag  是否使用级联方式  暂不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'ecsId' => 'getEcsId',
            'ecsName' => 'getEcsName',
            'cascadeFlag' => 'getCascadeFlag'
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
        $this->container['ecsId'] = isset($data['ecsId']) ? $data['ecsId'] : null;
        $this->container['ecsName'] = isset($data['ecsName']) ? $data['ecsName'] : null;
        $this->container['cascadeFlag'] = isset($data['cascadeFlag']) ? $data['cascadeFlag'] : null;
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
    * Gets ecsId
    *  云服务器ID
    *
    * @return string|null
    */
    public function getEcsId()
    {
        return $this->container['ecsId'];
    }

    /**
    * Sets ecsId
    *
    * @param string|null $ecsId 云服务器ID
    *
    * @return $this
    */
    public function setEcsId($ecsId)
    {
        $this->container['ecsId'] = $ecsId;
        return $this;
    }

    /**
    * Gets ecsName
    *  云服务器名称
    *
    * @return string|null
    */
    public function getEcsName()
    {
        return $this->container['ecsName'];
    }

    /**
    * Sets ecsName
    *
    * @param string|null $ecsName 云服务器名称
    *
    * @return $this
    */
    public function setEcsName($ecsName)
    {
        $this->container['ecsName'] = $ecsName;
        return $this;
    }

    /**
    * Gets cascadeFlag
    *  是否使用级联方式  暂不支持
    *
    * @return bool|null
    */
    public function getCascadeFlag()
    {
        return $this->container['cascadeFlag'];
    }

    /**
    * Sets cascadeFlag
    *
    * @param bool|null $cascadeFlag 是否使用级联方式  暂不支持
    *
    * @return $this
    */
    public function setCascadeFlag($cascadeFlag)
    {
        $this->container['cascadeFlag'] = $cascadeFlag;
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

