<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryVisionActiveCodeResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryVisionActiveCodeResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  激活码唯一标识。
    * activeCode  激活码。
    * devName  终端名称。
    * devType  终端类型。
    * deptCode  部门编码。
    * deptName  部门名称。
    * expireDate  失效时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'activeCode' => 'string',
            'devName' => 'string',
            'devType' => 'string',
            'deptCode' => 'string',
            'deptName' => 'string',
            'expireDate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  激活码唯一标识。
    * activeCode  激活码。
    * devName  终端名称。
    * devType  终端类型。
    * deptCode  部门编码。
    * deptName  部门名称。
    * expireDate  失效时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'activeCode' => null,
        'devName' => null,
        'devType' => null,
        'deptCode' => null,
        'deptName' => null,
        'expireDate' => 'int64'
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
    * id  激活码唯一标识。
    * activeCode  激活码。
    * devName  终端名称。
    * devType  终端类型。
    * deptCode  部门编码。
    * deptName  部门名称。
    * expireDate  失效时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'activeCode' => 'activeCode',
            'devName' => 'devName',
            'devType' => 'devType',
            'deptCode' => 'deptCode',
            'deptName' => 'deptName',
            'expireDate' => 'expireDate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  激活码唯一标识。
    * activeCode  激活码。
    * devName  终端名称。
    * devType  终端类型。
    * deptCode  部门编码。
    * deptName  部门名称。
    * expireDate  失效时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'activeCode' => 'setActiveCode',
            'devName' => 'setDevName',
            'devType' => 'setDevType',
            'deptCode' => 'setDeptCode',
            'deptName' => 'setDeptName',
            'expireDate' => 'setExpireDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  激活码唯一标识。
    * activeCode  激活码。
    * devName  终端名称。
    * devType  终端类型。
    * deptCode  部门编码。
    * deptName  部门名称。
    * expireDate  失效时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'activeCode' => 'getActiveCode',
            'devName' => 'getDevName',
            'devType' => 'getDevType',
            'deptCode' => 'getDeptCode',
            'deptName' => 'getDeptName',
            'expireDate' => 'getExpireDate'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['activeCode'] = isset($data['activeCode']) ? $data['activeCode'] : null;
        $this->container['devName'] = isset($data['devName']) ? $data['devName'] : null;
        $this->container['devType'] = isset($data['devType']) ? $data['devType'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
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
    * Gets id
    *  激活码唯一标识。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 激活码唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets activeCode
    *  激活码。
    *
    * @return string|null
    */
    public function getActiveCode()
    {
        return $this->container['activeCode'];
    }

    /**
    * Sets activeCode
    *
    * @param string|null $activeCode 激活码。
    *
    * @return $this
    */
    public function setActiveCode($activeCode)
    {
        $this->container['activeCode'] = $activeCode;
        return $this;
    }

    /**
    * Gets devName
    *  终端名称。
    *
    * @return string|null
    */
    public function getDevName()
    {
        return $this->container['devName'];
    }

    /**
    * Sets devName
    *
    * @param string|null $devName 终端名称。
    *
    * @return $this
    */
    public function setDevName($devName)
    {
        $this->container['devName'] = $devName;
        return $this;
    }

    /**
    * Gets devType
    *  终端类型。
    *
    * @return string|null
    */
    public function getDevType()
    {
        return $this->container['devType'];
    }

    /**
    * Sets devType
    *
    * @param string|null $devType 终端类型。
    *
    * @return $this
    */
    public function setDevType($devType)
    {
        $this->container['devType'] = $devType;
        return $this;
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
    * Gets expireDate
    *  失效时间戳。
    *
    * @return int|null
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param int|null $expireDate 失效时间戳。
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
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

