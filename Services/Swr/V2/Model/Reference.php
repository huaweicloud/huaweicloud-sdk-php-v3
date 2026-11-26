<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Reference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Reference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentId  父制品的ID。
    * childId  子制品的ID。
    * childDigest  子制品的digest。
    * platform  platform
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentId' => 'int',
            'childId' => 'int',
            'childDigest' => 'string',
            'platform' => '\HuaweiCloud\SDK\Swr\V2\Model\Platform'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentId  父制品的ID。
    * childId  子制品的ID。
    * childDigest  子制品的digest。
    * platform  platform
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentId' => 'int64',
        'childId' => 'int64',
        'childDigest' => null,
        'platform' => null
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
    * parentId  父制品的ID。
    * childId  子制品的ID。
    * childDigest  子制品的digest。
    * platform  platform
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentId' => 'parent_id',
            'childId' => 'child_id',
            'childDigest' => 'child_digest',
            'platform' => 'platform'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentId  父制品的ID。
    * childId  子制品的ID。
    * childDigest  子制品的digest。
    * platform  platform
    *
    * @var string[]
    */
    protected static $setters = [
            'parentId' => 'setParentId',
            'childId' => 'setChildId',
            'childDigest' => 'setChildDigest',
            'platform' => 'setPlatform'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentId  父制品的ID。
    * childId  子制品的ID。
    * childDigest  子制品的digest。
    * platform  platform
    *
    * @var string[]
    */
    protected static $getters = [
            'parentId' => 'getParentId',
            'childId' => 'getChildId',
            'childDigest' => 'getChildDigest',
            'platform' => 'getPlatform'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['childId'] = isset($data['childId']) ? $data['childId'] : null;
        $this->container['childDigest'] = isset($data['childDigest']) ? $data['childDigest'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
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
    * Gets parentId
    *  父制品的ID。
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId 父制品的ID。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets childId
    *  子制品的ID。
    *
    * @return int|null
    */
    public function getChildId()
    {
        return $this->container['childId'];
    }

    /**
    * Sets childId
    *
    * @param int|null $childId 子制品的ID。
    *
    * @return $this
    */
    public function setChildId($childId)
    {
        $this->container['childId'] = $childId;
        return $this;
    }

    /**
    * Gets childDigest
    *  子制品的digest。
    *
    * @return string|null
    */
    public function getChildDigest()
    {
        return $this->container['childDigest'];
    }

    /**
    * Sets childDigest
    *
    * @param string|null $childDigest 子制品的digest。
    *
    * @return $this
    */
    public function setChildDigest($childDigest)
    {
        $this->container['childDigest'] = $childDigest;
        return $this;
    }

    /**
    * Gets platform
    *  platform
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Platform|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Platform|null $platform platform
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
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

