<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTrafficMirrorConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTrafficMirrorConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetIds  流量镜像的目的后端服务器组ID。
    * mirrorRequestBodyEnable  镜像请求是否携带请求体，默认true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetIds' => 'string[]',
            'mirrorRequestBodyEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetIds  流量镜像的目的后端服务器组ID。
    * mirrorRequestBodyEnable  镜像请求是否携带请求体，默认true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetIds' => null,
        'mirrorRequestBodyEnable' => null
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
    * targetIds  流量镜像的目的后端服务器组ID。
    * mirrorRequestBodyEnable  镜像请求是否携带请求体，默认true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetIds' => 'target_ids',
            'mirrorRequestBodyEnable' => 'mirror_request_body_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetIds  流量镜像的目的后端服务器组ID。
    * mirrorRequestBodyEnable  镜像请求是否携带请求体，默认true。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetIds' => 'setTargetIds',
            'mirrorRequestBodyEnable' => 'setMirrorRequestBodyEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetIds  流量镜像的目的后端服务器组ID。
    * mirrorRequestBodyEnable  镜像请求是否携带请求体，默认true。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetIds' => 'getTargetIds',
            'mirrorRequestBodyEnable' => 'getMirrorRequestBodyEnable'
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
        $this->container['targetIds'] = isset($data['targetIds']) ? $data['targetIds'] : null;
        $this->container['mirrorRequestBodyEnable'] = isset($data['mirrorRequestBodyEnable']) ? $data['mirrorRequestBodyEnable'] : null;
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
    * Gets targetIds
    *  流量镜像的目的后端服务器组ID。
    *
    * @return string[]|null
    */
    public function getTargetIds()
    {
        return $this->container['targetIds'];
    }

    /**
    * Sets targetIds
    *
    * @param string[]|null $targetIds 流量镜像的目的后端服务器组ID。
    *
    * @return $this
    */
    public function setTargetIds($targetIds)
    {
        $this->container['targetIds'] = $targetIds;
        return $this;
    }

    /**
    * Gets mirrorRequestBodyEnable
    *  镜像请求是否携带请求体，默认true。
    *
    * @return bool|null
    */
    public function getMirrorRequestBodyEnable()
    {
        return $this->container['mirrorRequestBodyEnable'];
    }

    /**
    * Sets mirrorRequestBodyEnable
    *
    * @param bool|null $mirrorRequestBodyEnable 镜像请求是否携带请求体，默认true。
    *
    * @return $this
    */
    public function setMirrorRequestBodyEnable($mirrorRequestBodyEnable)
    {
        $this->container['mirrorRequestBodyEnable'] = $mirrorRequestBodyEnable;
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

