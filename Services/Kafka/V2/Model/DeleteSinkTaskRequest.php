<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteSinkTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteSinkTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectorId' => 'string',
            'taskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectorId' => null,
        'taskId' => null
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
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectorId' => 'connector_id',
            'taskId' => 'task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'connectorId' => 'setConnectorId',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'connectorId' => 'getConnectorId',
            'taskId' => 'getTaskId'
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
        $this->container['connectorId'] = isset($data['connectorId']) ? $data['connectorId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectorId'] === null) {
            $invalidProperties[] = "'connectorId' can't be null";
        }
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
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
    * Gets connectorId
    *  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    *
    * @return string
    */
    public function getConnectorId()
    {
        return $this->container['connectorId'];
    }

    /**
    * Sets connectorId
    *
    * @param string $connectorId 实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    *
    * @return $this
    */
    public function setConnectorId($connectorId)
    {
        $this->container['connectorId'] = $connectorId;
        return $this;
    }

    /**
    * Gets taskId
    *  转储任务ID。
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 转储任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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

