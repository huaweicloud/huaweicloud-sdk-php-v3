<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceShareAssociationReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceShareAssociationReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * principals  指定与资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'principals' => 'string[]',
            'resourceUrns' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * principals  指定与资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'principals' => null,
        'resourceUrns' => null
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
    * principals  指定与资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'principals' => 'principals',
            'resourceUrns' => 'resource_urns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * principals  指定与资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'principals' => 'setPrincipals',
            'resourceUrns' => 'setResourceUrns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * principals  指定与资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'principals' => 'getPrincipals',
            'resourceUrns' => 'getResourceUrns'
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
        $this->container['principals'] = isset($data['principals']) ? $data['principals'] : null;
        $this->container['resourceUrns'] = isset($data['resourceUrns']) ? $data['resourceUrns'] : null;
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
    * Gets principals
    *  指定与资源共享实例关联的一个或多个资源使用者的列表。
    *
    * @return string[]|null
    */
    public function getPrincipals()
    {
        return $this->container['principals'];
    }

    /**
    * Sets principals
    *
    * @param string[]|null $principals 指定与资源共享实例关联的一个或多个资源使用者的列表。
    *
    * @return $this
    */
    public function setPrincipals($principals)
    {
        $this->container['principals'] = $principals;
        return $this;
    }

    /**
    * Gets resourceUrns
    *  指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @return string[]|null
    */
    public function getResourceUrns()
    {
        return $this->container['resourceUrns'];
    }

    /**
    * Sets resourceUrns
    *
    * @param string[]|null $resourceUrns 指定与资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @return $this
    */
    public function setResourceUrns($resourceUrns)
    {
        $this->container['resourceUrns'] = $resourceUrns;
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

