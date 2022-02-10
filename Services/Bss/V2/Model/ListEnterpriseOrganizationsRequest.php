<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseOrganizationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseOrganizationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recursiveQuery  是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    * parentId  指定的节点ID。为空则从根节点查起。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recursiveQuery' => 'int',
            'parentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recursiveQuery  是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    * parentId  指定的节点ID。为空则从根节点查起。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recursiveQuery' => 'int32',
        'parentId' => null
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
    * recursiveQuery  是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    * parentId  指定的节点ID。为空则从根节点查起。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recursiveQuery' => 'recursive_query',
            'parentId' => 'parent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recursiveQuery  是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    * parentId  指定的节点ID。为空则从根节点查起。
    *
    * @var string[]
    */
    protected static $setters = [
            'recursiveQuery' => 'setRecursiveQuery',
            'parentId' => 'setParentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recursiveQuery  是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    * parentId  指定的节点ID。为空则从根节点查起。
    *
    * @var string[]
    */
    protected static $getters = [
            'recursiveQuery' => 'getRecursiveQuery',
            'parentId' => 'getParentId'
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
        $this->container['recursiveQuery'] = isset($data['recursiveQuery']) ? $data['recursiveQuery'] : 0;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recursiveQuery']) && ($this->container['recursiveQuery'] > 1)) {
                $invalidProperties[] = "invalid value for 'recursiveQuery', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['recursiveQuery']) && ($this->container['recursiveQuery'] < 0)) {
                $invalidProperties[] = "invalid value for 'recursiveQuery', must be bigger than or equal to 0.";
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
    * Gets recursiveQuery
    *  是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    *
    * @return int|null
    */
    public function getRecursiveQuery()
    {
        return $this->container['recursiveQuery'];
    }

    /**
    * Sets recursiveQuery
    *
    * @param int|null $recursiveQuery 是否递归查询。0：不递归（默认）1：递归如果不递归，只返回起始节点的直接子节点。
    *
    * @return $this
    */
    public function setRecursiveQuery($recursiveQuery)
    {
        $this->container['recursiveQuery'] = $recursiveQuery;
        return $this;
    }

    /**
    * Gets parentId
    *  指定的节点ID。为空则从根节点查起。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 指定的节点ID。为空则从根节点查起。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
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

