<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DualActiveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DualActiveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * role  **参数解释：** 双活角色。 **取值范围：** 不涉及。
    * status  **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
    * destinationInstanceId  **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    * destinationRegion  **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    * destinationInstanceName  **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    * destinationInstanceNodeNum  **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    * destinationInstanceSpecCode  **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'role' => 'string',
            'status' => 'string',
            'destinationInstanceId' => 'string',
            'destinationRegion' => 'string',
            'destinationInstanceName' => 'string',
            'destinationInstanceNodeNum' => 'string',
            'destinationInstanceSpecCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * role  **参数解释：** 双活角色。 **取值范围：** 不涉及。
    * status  **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
    * destinationInstanceId  **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    * destinationRegion  **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    * destinationInstanceName  **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    * destinationInstanceNodeNum  **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    * destinationInstanceSpecCode  **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'role' => null,
        'status' => null,
        'destinationInstanceId' => null,
        'destinationRegion' => null,
        'destinationInstanceName' => null,
        'destinationInstanceNodeNum' => null,
        'destinationInstanceSpecCode' => null
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
    * role  **参数解释：** 双活角色。 **取值范围：** 不涉及。
    * status  **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
    * destinationInstanceId  **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    * destinationRegion  **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    * destinationInstanceName  **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    * destinationInstanceNodeNum  **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    * destinationInstanceSpecCode  **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'role' => 'role',
            'status' => 'status',
            'destinationInstanceId' => 'destination_instance_id',
            'destinationRegion' => 'destination_region',
            'destinationInstanceName' => 'destination_instance_name',
            'destinationInstanceNodeNum' => 'destination_instance_node_num',
            'destinationInstanceSpecCode' => 'destination_instance_spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * role  **参数解释：** 双活角色。 **取值范围：** 不涉及。
    * status  **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
    * destinationInstanceId  **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    * destinationRegion  **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    * destinationInstanceName  **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    * destinationInstanceNodeNum  **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    * destinationInstanceSpecCode  **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'role' => 'setRole',
            'status' => 'setStatus',
            'destinationInstanceId' => 'setDestinationInstanceId',
            'destinationRegion' => 'setDestinationRegion',
            'destinationInstanceName' => 'setDestinationInstanceName',
            'destinationInstanceNodeNum' => 'setDestinationInstanceNodeNum',
            'destinationInstanceSpecCode' => 'setDestinationInstanceSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * role  **参数解释：** 双活角色。 **取值范围：** 不涉及。
    * status  **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
    * destinationInstanceId  **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    * destinationRegion  **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    * destinationInstanceName  **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    * destinationInstanceNodeNum  **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    * destinationInstanceSpecCode  **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'role' => 'getRole',
            'status' => 'getStatus',
            'destinationInstanceId' => 'getDestinationInstanceId',
            'destinationRegion' => 'getDestinationRegion',
            'destinationInstanceName' => 'getDestinationInstanceName',
            'destinationInstanceNodeNum' => 'getDestinationInstanceNodeNum',
            'destinationInstanceSpecCode' => 'getDestinationInstanceSpecCode'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['destinationInstanceId'] = isset($data['destinationInstanceId']) ? $data['destinationInstanceId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationInstanceName'] = isset($data['destinationInstanceName']) ? $data['destinationInstanceName'] : null;
        $this->container['destinationInstanceNodeNum'] = isset($data['destinationInstanceNodeNum']) ? $data['destinationInstanceNodeNum'] : null;
        $this->container['destinationInstanceSpecCode'] = isset($data['destinationInstanceSpecCode']) ? $data['destinationInstanceSpecCode'] : null;
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
    * Gets role
    *  **参数解释：** 双活角色。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role **参数解释：** 双活角色。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
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
    * @param string|null $status **参数解释：** 双活状态。 **取值范围：** - normal：表示双活状态正常。 - abnormal：表示双活状态异常。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets destinationInstanceId
    *  **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDestinationInstanceId()
    {
        return $this->container['destinationInstanceId'];
    }

    /**
    * Sets destinationInstanceId
    *
    * @param string|null $destinationInstanceId **参数解释：** 双活对端实例id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDestinationInstanceId($destinationInstanceId)
    {
        $this->container['destinationInstanceId'] = $destinationInstanceId;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string|null $destinationRegion **参数解释：** 双活对端region。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets destinationInstanceName
    *  **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDestinationInstanceName()
    {
        return $this->container['destinationInstanceName'];
    }

    /**
    * Sets destinationInstanceName
    *
    * @param string|null $destinationInstanceName **参数解释：** 双活对端实例名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDestinationInstanceName($destinationInstanceName)
    {
        $this->container['destinationInstanceName'] = $destinationInstanceName;
        return $this;
    }

    /**
    * Gets destinationInstanceNodeNum
    *  **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDestinationInstanceNodeNum()
    {
        return $this->container['destinationInstanceNodeNum'];
    }

    /**
    * Sets destinationInstanceNodeNum
    *
    * @param string|null $destinationInstanceNodeNum **参数解释：** 双活对端实例节点数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDestinationInstanceNodeNum($destinationInstanceNodeNum)
    {
        $this->container['destinationInstanceNodeNum'] = $destinationInstanceNodeNum;
        return $this;
    }

    /**
    * Gets destinationInstanceSpecCode
    *  **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDestinationInstanceSpecCode()
    {
        return $this->container['destinationInstanceSpecCode'];
    }

    /**
    * Sets destinationInstanceSpecCode
    *
    * @param string|null $destinationInstanceSpecCode **参数解释：** 双活对端实例规格。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDestinationInstanceSpecCode($destinationInstanceSpecCode)
    {
        $this->container['destinationInstanceSpecCode'] = $destinationInstanceSpecCode;
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

