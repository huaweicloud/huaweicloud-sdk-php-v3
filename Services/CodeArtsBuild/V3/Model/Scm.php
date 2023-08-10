<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Scm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Scm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildTag  代码Tag
    * buildCommitId  代码提交ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildTag' => 'string',
            'buildCommitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildTag  代码Tag
    * buildCommitId  代码提交ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildTag' => null,
        'buildCommitId' => null
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
    * buildTag  代码Tag
    * buildCommitId  代码提交ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildTag' => 'build_tag',
            'buildCommitId' => 'build_commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildTag  代码Tag
    * buildCommitId  代码提交ID
    *
    * @var string[]
    */
    protected static $setters = [
            'buildTag' => 'setBuildTag',
            'buildCommitId' => 'setBuildCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildTag  代码Tag
    * buildCommitId  代码提交ID
    *
    * @var string[]
    */
    protected static $getters = [
            'buildTag' => 'getBuildTag',
            'buildCommitId' => 'getBuildCommitId'
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
        $this->container['buildTag'] = isset($data['buildTag']) ? $data['buildTag'] : null;
        $this->container['buildCommitId'] = isset($data['buildCommitId']) ? $data['buildCommitId'] : null;
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
    * Gets buildTag
    *  代码Tag
    *
    * @return string|null
    */
    public function getBuildTag()
    {
        return $this->container['buildTag'];
    }

    /**
    * Sets buildTag
    *
    * @param string|null $buildTag 代码Tag
    *
    * @return $this
    */
    public function setBuildTag($buildTag)
    {
        $this->container['buildTag'] = $buildTag;
        return $this;
    }

    /**
    * Gets buildCommitId
    *  代码提交ID
    *
    * @return string|null
    */
    public function getBuildCommitId()
    {
        return $this->container['buildCommitId'];
    }

    /**
    * Sets buildCommitId
    *
    * @param string|null $buildCommitId 代码提交ID
    *
    * @return $this
    */
    public function setBuildCommitId($buildCommitId)
    {
        $this->container['buildCommitId'] = $buildCommitId;
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

