<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiMoveParaDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiMoveParaDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetPid  父目录编号
    * apis  需要移动的目录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetPid' => 'string',
            'apis' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetPid  父目录编号
    * apis  需要移动的目录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetPid' => null,
        'apis' => null
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
    * targetPid  父目录编号
    * apis  需要移动的目录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetPid' => 'target_pid',
            'apis' => 'apis'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetPid  父目录编号
    * apis  需要移动的目录
    *
    * @var string[]
    */
    protected static $setters = [
            'targetPid' => 'setTargetPid',
            'apis' => 'setApis'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetPid  父目录编号
    * apis  需要移动的目录
    *
    * @var string[]
    */
    protected static $getters = [
            'targetPid' => 'getTargetPid',
            'apis' => 'getApis'
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
        $this->container['targetPid'] = isset($data['targetPid']) ? $data['targetPid'] : null;
        $this->container['apis'] = isset($data['apis']) ? $data['apis'] : null;
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
    * Gets targetPid
    *  父目录编号
    *
    * @return string|null
    */
    public function getTargetPid()
    {
        return $this->container['targetPid'];
    }

    /**
    * Sets targetPid
    *
    * @param string|null $targetPid 父目录编号
    *
    * @return $this
    */
    public function setTargetPid($targetPid)
    {
        $this->container['targetPid'] = $targetPid;
        return $this;
    }

    /**
    * Gets apis
    *  需要移动的目录
    *
    * @return string[]|null
    */
    public function getApis()
    {
        return $this->container['apis'];
    }

    /**
    * Sets apis
    *
    * @param string[]|null $apis 需要移动的目录
    *
    * @return $this
    */
    public function setApis($apis)
    {
        $this->container['apis'] = $apis;
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

