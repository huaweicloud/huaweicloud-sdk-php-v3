<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobs2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobs2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endTime  任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * graphName  关联的图名称。
    * limit  每页资源数量的最大值，默认为10。
    * offset  本次请求的起始位置，默认为0。
    * startTime  任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * status  任务状态。取值为：  - running - waiting - success - failed
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endTime' => 'string',
            'graphName' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'startTime' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endTime  任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * graphName  关联的图名称。
    * limit  每页资源数量的最大值，默认为10。
    * offset  本次请求的起始位置，默认为0。
    * startTime  任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * status  任务状态。取值为：  - running - waiting - success - failed
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endTime' => null,
        'graphName' => null,
        'limit' => null,
        'offset' => null,
        'startTime' => null,
        'status' => null
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
    * endTime  任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * graphName  关联的图名称。
    * limit  每页资源数量的最大值，默认为10。
    * offset  本次请求的起始位置，默认为0。
    * startTime  任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * status  任务状态。取值为：  - running - waiting - success - failed
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endTime' => 'end_time',
            'graphName' => 'graph_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'startTime' => 'start_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endTime  任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * graphName  关联的图名称。
    * limit  每页资源数量的最大值，默认为10。
    * offset  本次请求的起始位置，默认为0。
    * startTime  任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * status  任务状态。取值为：  - running - waiting - success - failed
    *
    * @var string[]
    */
    protected static $setters = [
            'endTime' => 'setEndTime',
            'graphName' => 'setGraphName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'startTime' => 'setStartTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endTime  任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * graphName  关联的图名称。
    * limit  每页资源数量的最大值，默认为10。
    * offset  本次请求的起始位置，默认为0。
    * startTime  任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    * status  任务状态。取值为：  - running - waiting - success - failed
    *
    * @var string[]
    */
    protected static $getters = [
            'endTime' => 'getEndTime',
            'graphName' => 'getGraphName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'startTime' => 'getStartTime',
            'status' => 'getStatus'
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
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['graphName'] = isset($data['graphName']) ? $data['graphName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets endTime
    *  任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 任务结束日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets graphName
    *  关联的图名称。
    *
    * @return string|null
    */
    public function getGraphName()
    {
        return $this->container['graphName'];
    }

    /**
    * Sets graphName
    *
    * @param string|null $graphName 关联的图名称。
    *
    * @return $this
    */
    public function setGraphName($graphName)
    {
        $this->container['graphName'] = $graphName;
        return $this;
    }

    /**
    * Gets limit
    *  每页资源数量的最大值，默认为10。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 每页资源数量的最大值，默认为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  本次请求的起始位置，默认为0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 本次请求的起始位置，默认为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始日期，当前只支持日期，不支持时间。格式为：yyyy-MM-dd，比如2019-03-27。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。取值为：  - running - waiting - success - failed
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
    * @param string|null $status 任务状态。取值为：  - running - waiting - success - failed
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

