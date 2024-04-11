<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CnInfoBeforeReduce implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CnInfoBeforeReduce';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节点ID。
    * name  节点名称。
    * status  节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    * availabilityZone  可用区。
    * supportReduce  是否允许删除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'availabilityZone' => 'string',
            'supportReduce' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节点ID。
    * name  节点名称。
    * status  节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    * availabilityZone  可用区。
    * supportReduce  是否允许删除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'availabilityZone' => null,
        'supportReduce' => null
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
    * id  节点ID。
    * name  节点名称。
    * status  节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    * availabilityZone  可用区。
    * supportReduce  是否允许删除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'availabilityZone' => 'availability_zone',
            'supportReduce' => 'support_reduce'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节点ID。
    * name  节点名称。
    * status  节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    * availabilityZone  可用区。
    * supportReduce  是否允许删除。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'availabilityZone' => 'setAvailabilityZone',
            'supportReduce' => 'setSupportReduce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节点ID。
    * name  节点名称。
    * status  节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    * availabilityZone  可用区。
    * supportReduce  是否允许删除。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'availabilityZone' => 'getAvailabilityZone',
            'supportReduce' => 'getSupportReduce'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['supportReduce'] = isset($data['supportReduce']) ? $data['supportReduce'] : null;
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
    *  节点ID。
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
    * @param string|null $id 节点ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  节点名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 节点状态。 取值： 值为“normal”，表示节点正常。 值为“abnormal”，表示节点异常。 值为“creating”，表示节点正在创建。 值为“createfail”，表示节点创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets supportReduce
    *  是否允许删除。
    *
    * @return bool|null
    */
    public function getSupportReduce()
    {
        return $this->container['supportReduce'];
    }

    /**
    * Sets supportReduce
    *
    * @param bool|null $supportReduce 是否允许删除。
    *
    * @return $this
    */
    public function setSupportReduce($supportReduce)
    {
        $this->container['supportReduce'] = $supportReduce;
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

