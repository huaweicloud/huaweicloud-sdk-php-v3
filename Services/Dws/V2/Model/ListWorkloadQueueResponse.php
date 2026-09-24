<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkloadQueueResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkloadQueueResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueList  资源池队列详情
    * workloadQueueNameList  资源池名称队列
    * workloadResCode  资源池队列查询返回码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueList' => '\HuaweiCloud\SDK\Dws\V2\Model\PlanStageQueue[]',
            'workloadQueueNameList' => 'string[]',
            'workloadResCode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueList  资源池队列详情
    * workloadQueueNameList  资源池名称队列
    * workloadResCode  资源池队列查询返回码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueList' => null,
        'workloadQueueNameList' => null,
        'workloadResCode' => 'int32'
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
    * queueList  资源池队列详情
    * workloadQueueNameList  资源池名称队列
    * workloadResCode  资源池队列查询返回码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueList' => 'queue_list',
            'workloadQueueNameList' => 'workload_queue_name_list',
            'workloadResCode' => 'workload_res_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueList  资源池队列详情
    * workloadQueueNameList  资源池名称队列
    * workloadResCode  资源池队列查询返回码
    *
    * @var string[]
    */
    protected static $setters = [
            'queueList' => 'setQueueList',
            'workloadQueueNameList' => 'setWorkloadQueueNameList',
            'workloadResCode' => 'setWorkloadResCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueList  资源池队列详情
    * workloadQueueNameList  资源池名称队列
    * workloadResCode  资源池队列查询返回码
    *
    * @var string[]
    */
    protected static $getters = [
            'queueList' => 'getQueueList',
            'workloadQueueNameList' => 'getWorkloadQueueNameList',
            'workloadResCode' => 'getWorkloadResCode'
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
        $this->container['queueList'] = isset($data['queueList']) ? $data['queueList'] : null;
        $this->container['workloadQueueNameList'] = isset($data['workloadQueueNameList']) ? $data['workloadQueueNameList'] : null;
        $this->container['workloadResCode'] = isset($data['workloadResCode']) ? $data['workloadResCode'] : null;
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
    * Gets queueList
    *  资源池队列详情
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PlanStageQueue[]|null
    */
    public function getQueueList()
    {
        return $this->container['queueList'];
    }

    /**
    * Sets queueList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PlanStageQueue[]|null $queueList 资源池队列详情
    *
    * @return $this
    */
    public function setQueueList($queueList)
    {
        $this->container['queueList'] = $queueList;
        return $this;
    }

    /**
    * Gets workloadQueueNameList
    *  资源池名称队列
    *
    * @return string[]|null
    */
    public function getWorkloadQueueNameList()
    {
        return $this->container['workloadQueueNameList'];
    }

    /**
    * Sets workloadQueueNameList
    *
    * @param string[]|null $workloadQueueNameList 资源池名称队列
    *
    * @return $this
    */
    public function setWorkloadQueueNameList($workloadQueueNameList)
    {
        $this->container['workloadQueueNameList'] = $workloadQueueNameList;
        return $this;
    }

    /**
    * Gets workloadResCode
    *  资源池队列查询返回码
    *
    * @return int|null
    */
    public function getWorkloadResCode()
    {
        return $this->container['workloadResCode'];
    }

    /**
    * Sets workloadResCode
    *
    * @param int|null $workloadResCode 资源池队列查询返回码
    *
    * @return $this
    */
    public function setWorkloadResCode($workloadResCode)
    {
        $this->container['workloadResCode'] = $workloadResCode;
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

