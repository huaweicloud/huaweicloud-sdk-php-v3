<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExectuionStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExectuionStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceStatus  执行实例状态
    * instanceCount  该状态下执行实例个数
    * batchIndexes  该状态下批次index列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceStatus' => 'string',
            'instanceCount' => 'int',
            'batchIndexes' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceStatus  执行实例状态
    * instanceCount  该状态下执行实例个数
    * batchIndexes  该状态下批次index列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceStatus' => null,
        'instanceCount' => 'int32',
        'batchIndexes' => 'int32'
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
    * instanceStatus  执行实例状态
    * instanceCount  该状态下执行实例个数
    * batchIndexes  该状态下批次index列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceStatus' => 'instance_status',
            'instanceCount' => 'instance_count',
            'batchIndexes' => 'batch_indexes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceStatus  执行实例状态
    * instanceCount  该状态下执行实例个数
    * batchIndexes  该状态下批次index列表
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceStatus' => 'setInstanceStatus',
            'instanceCount' => 'setInstanceCount',
            'batchIndexes' => 'setBatchIndexes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceStatus  执行实例状态
    * instanceCount  该状态下执行实例个数
    * batchIndexes  该状态下批次index列表
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceStatus' => 'getInstanceStatus',
            'instanceCount' => 'getInstanceCount',
            'batchIndexes' => 'getBatchIndexes'
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
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['instanceCount'] = isset($data['instanceCount']) ? $data['instanceCount'] : null;
        $this->container['batchIndexes'] = isset($data['batchIndexes']) ? $data['batchIndexes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceStatus'] === null) {
            $invalidProperties[] = "'instanceStatus' can't be null";
        }
        if ($this->container['instanceCount'] === null) {
            $invalidProperties[] = "'instanceCount' can't be null";
        }
        if ($this->container['batchIndexes'] === null) {
            $invalidProperties[] = "'batchIndexes' can't be null";
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
    * Gets instanceStatus
    *  执行实例状态
    *
    * @return string
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string $instanceStatus 执行实例状态
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets instanceCount
    *  该状态下执行实例个数
    *
    * @return int
    */
    public function getInstanceCount()
    {
        return $this->container['instanceCount'];
    }

    /**
    * Sets instanceCount
    *
    * @param int $instanceCount 该状态下执行实例个数
    *
    * @return $this
    */
    public function setInstanceCount($instanceCount)
    {
        $this->container['instanceCount'] = $instanceCount;
        return $this;
    }

    /**
    * Gets batchIndexes
    *  该状态下批次index列表
    *
    * @return int[]
    */
    public function getBatchIndexes()
    {
        return $this->container['batchIndexes'];
    }

    /**
    * Sets batchIndexes
    *
    * @param int[] $batchIndexes 该状态下批次index列表
    *
    * @return $this
    */
    public function setBatchIndexes($batchIndexes)
    {
        $this->container['batchIndexes'] = $batchIndexes;
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

