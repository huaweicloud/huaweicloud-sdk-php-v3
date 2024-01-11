<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPlanExecLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPlanExecLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadResCode  结果状态码。
    * workloadResStr  结果描述。
    * planLogs  资源池名称。
    * count  总数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadResCode' => 'int',
            'workloadResStr' => 'string',
            'planLogs' => '\HuaweiCloud\SDK\Dws\V2\Model\PlanLog[]',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadResCode  结果状态码。
    * workloadResStr  结果描述。
    * planLogs  资源池名称。
    * count  总数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadResCode' => null,
        'workloadResStr' => null,
        'planLogs' => null,
        'count' => null
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
    * workloadResCode  结果状态码。
    * workloadResStr  结果描述。
    * planLogs  资源池名称。
    * count  总数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadResCode' => 'workload_res_code',
            'workloadResStr' => 'workload_res_str',
            'planLogs' => 'plan_logs',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadResCode  结果状态码。
    * workloadResStr  结果描述。
    * planLogs  资源池名称。
    * count  总数量
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadResCode' => 'setWorkloadResCode',
            'workloadResStr' => 'setWorkloadResStr',
            'planLogs' => 'setPlanLogs',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadResCode  结果状态码。
    * workloadResStr  结果描述。
    * planLogs  资源池名称。
    * count  总数量
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadResCode' => 'getWorkloadResCode',
            'workloadResStr' => 'getWorkloadResStr',
            'planLogs' => 'getPlanLogs',
            'count' => 'getCount'
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
        $this->container['workloadResCode'] = isset($data['workloadResCode']) ? $data['workloadResCode'] : null;
        $this->container['workloadResStr'] = isset($data['workloadResStr']) ? $data['workloadResStr'] : null;
        $this->container['planLogs'] = isset($data['planLogs']) ? $data['planLogs'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets workloadResCode
    *  结果状态码。
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
    * @param int|null $workloadResCode 结果状态码。
    *
    * @return $this
    */
    public function setWorkloadResCode($workloadResCode)
    {
        $this->container['workloadResCode'] = $workloadResCode;
        return $this;
    }

    /**
    * Gets workloadResStr
    *  结果描述。
    *
    * @return string|null
    */
    public function getWorkloadResStr()
    {
        return $this->container['workloadResStr'];
    }

    /**
    * Sets workloadResStr
    *
    * @param string|null $workloadResStr 结果描述。
    *
    * @return $this
    */
    public function setWorkloadResStr($workloadResStr)
    {
        $this->container['workloadResStr'] = $workloadResStr;
        return $this;
    }

    /**
    * Gets planLogs
    *  资源池名称。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PlanLog[]|null
    */
    public function getPlanLogs()
    {
        return $this->container['planLogs'];
    }

    /**
    * Sets planLogs
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PlanLog[]|null $planLogs 资源池名称。
    *
    * @return $this
    */
    public function setPlanLogs($planLogs)
    {
        $this->container['planLogs'] = $planLogs;
        return $this;
    }

    /**
    * Gets count
    *  总数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

