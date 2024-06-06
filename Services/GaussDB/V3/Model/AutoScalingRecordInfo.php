<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoScalingRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoScalingRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingType  变配类型。
    * originalValue  原始值。
    * targetValue  目标值。
    * result  变配结果。
    * createAt  变配时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'scalingType' => 'string',
            'originalValue' => 'string',
            'targetValue' => 'string',
            'result' => 'string',
            'createAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingType  变配类型。
    * originalValue  原始值。
    * targetValue  目标值。
    * result  变配结果。
    * createAt  变配时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'instanceName' => null,
        'scalingType' => null,
        'originalValue' => null,
        'targetValue' => null,
        'result' => null,
        'createAt' => null
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
    * id  记录ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingType  变配类型。
    * originalValue  原始值。
    * targetValue  目标值。
    * result  变配结果。
    * createAt  变配时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'scalingType' => 'scaling_type',
            'originalValue' => 'original_value',
            'targetValue' => 'target_value',
            'result' => 'result',
            'createAt' => 'create_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingType  变配类型。
    * originalValue  原始值。
    * targetValue  目标值。
    * result  变配结果。
    * createAt  变配时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'scalingType' => 'setScalingType',
            'originalValue' => 'setOriginalValue',
            'targetValue' => 'setTargetValue',
            'result' => 'setResult',
            'createAt' => 'setCreateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingType  变配类型。
    * originalValue  原始值。
    * targetValue  目标值。
    * result  变配结果。
    * createAt  变配时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'scalingType' => 'getScalingType',
            'originalValue' => 'getOriginalValue',
            'targetValue' => 'getTargetValue',
            'result' => 'getResult',
            'createAt' => 'getCreateAt'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['scalingType'] = isset($data['scalingType']) ? $data['scalingType'] : null;
        $this->container['originalValue'] = isset($data['originalValue']) ? $data['originalValue'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
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
    *  记录ID。
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
    * @param string|null $id 记录ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets scalingType
    *  变配类型。
    *
    * @return string|null
    */
    public function getScalingType()
    {
        return $this->container['scalingType'];
    }

    /**
    * Sets scalingType
    *
    * @param string|null $scalingType 变配类型。
    *
    * @return $this
    */
    public function setScalingType($scalingType)
    {
        $this->container['scalingType'] = $scalingType;
        return $this;
    }

    /**
    * Gets originalValue
    *  原始值。
    *
    * @return string|null
    */
    public function getOriginalValue()
    {
        return $this->container['originalValue'];
    }

    /**
    * Sets originalValue
    *
    * @param string|null $originalValue 原始值。
    *
    * @return $this
    */
    public function setOriginalValue($originalValue)
    {
        $this->container['originalValue'] = $originalValue;
        return $this;
    }

    /**
    * Gets targetValue
    *  目标值。
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue 目标值。
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
        return $this;
    }

    /**
    * Gets result
    *  变配结果。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 变配结果。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets createAt
    *  变配时间。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 变配时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
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

