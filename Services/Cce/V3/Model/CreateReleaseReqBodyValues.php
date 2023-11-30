<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReleaseReqBodyValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReleaseReqBody_values';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imagePullPolicy  镜像拉取策略
    * imageTag  镜像标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imagePullPolicy' => 'string',
            'imageTag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imagePullPolicy  镜像拉取策略
    * imageTag  镜像标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imagePullPolicy' => null,
        'imageTag' => null
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
    * imagePullPolicy  镜像拉取策略
    * imageTag  镜像标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imagePullPolicy' => 'imagePullPolicy',
            'imageTag' => 'imageTag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imagePullPolicy  镜像拉取策略
    * imageTag  镜像标签
    *
    * @var string[]
    */
    protected static $setters = [
            'imagePullPolicy' => 'setImagePullPolicy',
            'imageTag' => 'setImageTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imagePullPolicy  镜像拉取策略
    * imageTag  镜像标签
    *
    * @var string[]
    */
    protected static $getters = [
            'imagePullPolicy' => 'getImagePullPolicy',
            'imageTag' => 'getImageTag'
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
        $this->container['imagePullPolicy'] = isset($data['imagePullPolicy']) ? $data['imagePullPolicy'] : null;
        $this->container['imageTag'] = isset($data['imageTag']) ? $data['imageTag'] : null;
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
    * Gets imagePullPolicy
    *  镜像拉取策略
    *
    * @return string|null
    */
    public function getImagePullPolicy()
    {
        return $this->container['imagePullPolicy'];
    }

    /**
    * Sets imagePullPolicy
    *
    * @param string|null $imagePullPolicy 镜像拉取策略
    *
    * @return $this
    */
    public function setImagePullPolicy($imagePullPolicy)
    {
        $this->container['imagePullPolicy'] = $imagePullPolicy;
        return $this;
    }

    /**
    * Gets imageTag
    *  镜像标签
    *
    * @return string|null
    */
    public function getImageTag()
    {
        return $this->container['imageTag'];
    }

    /**
    * Sets imageTag
    *
    * @param string|null $imageTag 镜像标签
    *
    * @return $this
    */
    public function setImageTag($imageTag)
    {
        $this->container['imageTag'] = $imageTag;
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

