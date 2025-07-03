<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SumTableParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SumTableParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  上次请求的id。
    * viewConfig  viewConfig
    * strategy  策略。
    * page  当前页码。
    * pageSize  每页数据总数。
    * orderBy  排序规则。
    * searchWord  搜索关键字。
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  起始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'viewConfig' => '\HuaweiCloud\SDK\Apm\V1\Model\SumTableView',
            'strategy' => 'string',
            'page' => 'int',
            'pageSize' => 'int',
            'orderBy' => 'string',
            'searchWord' => 'string',
            'instanceId' => 'int',
            'monitorItemId' => 'int',
            'envId' => 'int',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  上次请求的id。
    * viewConfig  viewConfig
    * strategy  策略。
    * page  当前页码。
    * pageSize  每页数据总数。
    * orderBy  排序规则。
    * searchWord  搜索关键字。
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  起始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'viewConfig' => null,
        'strategy' => null,
        'page' => 'int32',
        'pageSize' => 'int32',
        'orderBy' => null,
        'searchWord' => null,
        'instanceId' => 'int64',
        'monitorItemId' => 'int64',
        'envId' => 'int64',
        'startTime' => null,
        'endTime' => null
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
    * requestId  上次请求的id。
    * viewConfig  viewConfig
    * strategy  策略。
    * page  当前页码。
    * pageSize  每页数据总数。
    * orderBy  排序规则。
    * searchWord  搜索关键字。
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  起始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'viewConfig' => 'view_config',
            'strategy' => 'strategy',
            'page' => 'page',
            'pageSize' => 'page_size',
            'orderBy' => 'order_by',
            'searchWord' => 'search_word',
            'instanceId' => 'instance_id',
            'monitorItemId' => 'monitor_item_id',
            'envId' => 'env_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  上次请求的id。
    * viewConfig  viewConfig
    * strategy  策略。
    * page  当前页码。
    * pageSize  每页数据总数。
    * orderBy  排序规则。
    * searchWord  搜索关键字。
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  起始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'viewConfig' => 'setViewConfig',
            'strategy' => 'setStrategy',
            'page' => 'setPage',
            'pageSize' => 'setPageSize',
            'orderBy' => 'setOrderBy',
            'searchWord' => 'setSearchWord',
            'instanceId' => 'setInstanceId',
            'monitorItemId' => 'setMonitorItemId',
            'envId' => 'setEnvId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  上次请求的id。
    * viewConfig  viewConfig
    * strategy  策略。
    * page  当前页码。
    * pageSize  每页数据总数。
    * orderBy  排序规则。
    * searchWord  搜索关键字。
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  起始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'viewConfig' => 'getViewConfig',
            'strategy' => 'getStrategy',
            'page' => 'getPage',
            'pageSize' => 'getPageSize',
            'orderBy' => 'getOrderBy',
            'searchWord' => 'getSearchWord',
            'instanceId' => 'getInstanceId',
            'monitorItemId' => 'getMonitorItemId',
            'envId' => 'getEnvId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['viewConfig'] = isset($data['viewConfig']) ? $data['viewConfig'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['searchWord'] = isset($data['searchWord']) ? $data['searchWord'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['viewConfig'] === null) {
            $invalidProperties[] = "'viewConfig' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets requestId
    *  上次请求的id。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 上次请求的id。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets viewConfig
    *  viewConfig
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\SumTableView
    */
    public function getViewConfig()
    {
        return $this->container['viewConfig'];
    }

    /**
    * Sets viewConfig
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\SumTableView $viewConfig viewConfig
    *
    * @return $this
    */
    public function setViewConfig($viewConfig)
    {
        $this->container['viewConfig'] = $viewConfig;
        return $this;
    }

    /**
    * Gets strategy
    *  策略。
    *
    * @return string|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param string|null $strategy 策略。
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets page
    *  当前页码。
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 当前页码。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数据总数。
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 每页数据总数。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets searchWord
    *  搜索关键字。
    *
    * @return string|null
    */
    public function getSearchWord()
    {
        return $this->container['searchWord'];
    }

    /**
    * Sets searchWord
    *
    * @param string|null $searchWord 搜索关键字。
    *
    * @return $this
    */
    public function setSearchWord($searchWord)
    {
        $this->container['searchWord'] = $searchWord;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets monitorItemId
    *  监控项id。
    *
    * @return int|null
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int|null $monitorItemId 监控项id。
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 起始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

