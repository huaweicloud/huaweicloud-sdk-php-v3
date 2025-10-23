<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateItemResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateItemResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceAlias  资源名称别名。
    * resourceName  资源名称。
    * retStatus  资源更新状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceAlias' => 'string',
            'resourceName' => 'string',
            'retStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceAlias  资源名称别名。
    * resourceName  资源名称。
    * retStatus  资源更新状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceAlias' => null,
        'resourceName' => null,
        'retStatus' => null
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
    * resourceAlias  资源名称别名。
    * resourceName  资源名称。
    * retStatus  资源更新状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceAlias' => 'resource_alias',
            'resourceName' => 'resource_name',
            'retStatus' => 'ret_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceAlias  资源名称别名。
    * resourceName  资源名称。
    * retStatus  资源更新状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceAlias' => 'setResourceAlias',
            'resourceName' => 'setResourceName',
            'retStatus' => 'setRetStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceAlias  资源名称别名。
    * resourceName  资源名称。
    * retStatus  资源更新状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceAlias' => 'getResourceAlias',
            'resourceName' => 'getResourceName',
            'retStatus' => 'getRetStatus'
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
        $this->container['resourceAlias'] = isset($data['resourceAlias']) ? $data['resourceAlias'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['retStatus'] = isset($data['retStatus']) ? $data['retStatus'] : null;
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
    * Gets resourceAlias
    *  资源名称别名。
    *
    * @return string|null
    */
    public function getResourceAlias()
    {
        return $this->container['resourceAlias'];
    }

    /**
    * Sets resourceAlias
    *
    * @param string|null $resourceAlias 资源名称别名。
    *
    * @return $this
    */
    public function setResourceAlias($resourceAlias)
    {
        $this->container['resourceAlias'] = $resourceAlias;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets retStatus
    *  资源更新状态。
    *
    * @return string|null
    */
    public function getRetStatus()
    {
        return $this->container['retStatus'];
    }

    /**
    * Sets retStatus
    *
    * @param string|null $retStatus 资源更新状态。
    *
    * @return $this
    */
    public function setRetStatus($retStatus)
    {
        $this->container['retStatus'] = $retStatus;
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

