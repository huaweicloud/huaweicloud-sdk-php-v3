<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserOrgRelationListResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserOrgRelationListResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orgId  组织id
    * relationType  关系类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orgId' => 'string',
            'relationType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orgId  组织id
    * relationType  关系类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orgId' => null,
        'relationType' => null
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
    * orgId  组织id
    * relationType  关系类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orgId' => 'org_id',
            'relationType' => 'relation_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orgId  组织id
    * relationType  关系类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'orgId' => 'setOrgId',
            'relationType' => 'setRelationType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orgId  组织id
    * relationType  关系类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'orgId' => 'getOrgId',
            'relationType' => 'getRelationType'
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
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['orgId'] === null) {
            $invalidProperties[] = "'orgId' can't be null";
        }
        if ($this->container['relationType'] === null) {
            $invalidProperties[] = "'relationType' can't be null";
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
    * Gets orgId
    *  组织id
    *
    * @return string
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string $orgId 组织id
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
        return $this;
    }

    /**
    * Gets relationType
    *  关系类型。
    *
    * @return string
    */
    public function getRelationType()
    {
        return $this->container['relationType'];
    }

    /**
    * Sets relationType
    *
    * @param string $relationType 关系类型。
    *
    * @return $this
    */
    public function setRelationType($relationType)
    {
        $this->container['relationType'] = $relationType;
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

