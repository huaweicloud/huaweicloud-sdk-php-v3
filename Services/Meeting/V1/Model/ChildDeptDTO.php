<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChildDeptDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChildDeptDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deptCode  部门编码。
    * deptName  部门名称。
    * isLeafNodes  是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deptCode' => 'string',
            'deptName' => 'string',
            'isLeafNodes' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deptCode  部门编码。
    * deptName  部门名称。
    * isLeafNodes  是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deptCode' => null,
        'deptName' => null,
        'isLeafNodes' => null
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
    * deptCode  部门编码。
    * deptName  部门名称。
    * isLeafNodes  是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deptCode' => 'deptCode',
            'deptName' => 'deptName',
            'isLeafNodes' => 'isLeafNodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deptCode  部门编码。
    * deptName  部门名称。
    * isLeafNodes  是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @var string[]
    */
    protected static $setters = [
            'deptCode' => 'setDeptCode',
            'deptName' => 'setDeptName',
            'isLeafNodes' => 'setIsLeafNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deptCode  部门编码。
    * deptName  部门名称。
    * isLeafNodes  是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @var string[]
    */
    protected static $getters = [
            'deptCode' => 'getDeptCode',
            'deptName' => 'getDeptName',
            'isLeafNodes' => 'getIsLeafNodes'
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
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['isLeafNodes'] = isset($data['isLeafNodes']) ? $data['isLeafNodes'] : null;
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
    * Gets deptCode
    *  部门编码。
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets isLeafNodes
    *  是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @return bool|null
    */
    public function getIsLeafNodes()
    {
        return $this->container['isLeafNodes'];
    }

    /**
    * Sets isLeafNodes
    *
    * @param bool|null $isLeafNodes 是否为叶子节点（没有子部门的称为叶子节点）。
    *
    * @return $this
    */
    public function setIsLeafNodes($isLeafNodes)
    {
        $this->container['isLeafNodes'] = $isLeafNodes;
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

