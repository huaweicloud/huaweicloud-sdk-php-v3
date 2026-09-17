<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHistoryTransactionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHistoryTransactionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * startAt  采集开始时间（Unix timestamp，毫秒）
    * endAt  采集结束时间（Unix timestamp，毫秒）
    * pageNum  页数
    * pageSize  页大小
    * order  排序字段
    * orderBy  升序|降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'order' => 'string',
            'orderBy' => 'string',
            'lastSecMin' => 'int',
            'lastSecMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * startAt  采集开始时间（Unix timestamp，毫秒）
    * endAt  采集结束时间（Unix timestamp，毫秒）
    * pageNum  页数
    * pageSize  页大小
    * order  排序字段
    * orderBy  升序|降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'order' => null,
        'orderBy' => null,
        'lastSecMin' => 'int64',
        'lastSecMax' => 'int64'
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
    * instanceId  实例ID
    * startAt  采集开始时间（Unix timestamp，毫秒）
    * endAt  采集结束时间（Unix timestamp，毫秒）
    * pageNum  页数
    * pageSize  页大小
    * order  排序字段
    * orderBy  升序|降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'order' => 'order',
            'orderBy' => 'order_by',
            'lastSecMin' => 'last_sec_min',
            'lastSecMax' => 'last_sec_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * startAt  采集开始时间（Unix timestamp，毫秒）
    * endAt  采集结束时间（Unix timestamp，毫秒）
    * pageNum  页数
    * pageSize  页大小
    * order  排序字段
    * orderBy  升序|降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'order' => 'setOrder',
            'orderBy' => 'setOrderBy',
            'lastSecMin' => 'setLastSecMin',
            'lastSecMax' => 'setLastSecMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * startAt  采集开始时间（Unix timestamp，毫秒）
    * endAt  采集结束时间（Unix timestamp，毫秒）
    * pageNum  页数
    * pageSize  页大小
    * order  排序字段
    * orderBy  升序|降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'order' => 'getOrder',
            'orderBy' => 'getOrderBy',
            'lastSecMin' => 'getLastSecMin',
            'lastSecMax' => 'getLastSecMax'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['lastSecMin'] = isset($data['lastSecMin']) ? $data['lastSecMin'] : null;
        $this->container['lastSecMax'] = isset($data['lastSecMax']) ? $data['lastSecMax'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
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
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startAt
    *  采集开始时间（Unix timestamp，毫秒）
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 采集开始时间（Unix timestamp，毫秒）
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  采集结束时间（Unix timestamp，毫秒）
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 采集结束时间（Unix timestamp，毫秒）
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets pageNum
    *  页数
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 页数
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  页大小
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets order
    *  排序字段
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序字段
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets orderBy
    *  升序|降序
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
    * @param string|null $orderBy 升序|降序
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets lastSecMin
    *  持续时间下限
    *
    * @return int|null
    */
    public function getLastSecMin()
    {
        return $this->container['lastSecMin'];
    }

    /**
    * Sets lastSecMin
    *
    * @param int|null $lastSecMin 持续时间下限
    *
    * @return $this
    */
    public function setLastSecMin($lastSecMin)
    {
        $this->container['lastSecMin'] = $lastSecMin;
        return $this;
    }

    /**
    * Gets lastSecMax
    *  持续时间上限
    *
    * @return int|null
    */
    public function getLastSecMax()
    {
        return $this->container['lastSecMax'];
    }

    /**
    * Sets lastSecMax
    *
    * @param int|null $lastSecMax 持续时间上限
    *
    * @return $this
    */
    public function setLastSecMax($lastSecMax)
    {
        $this->container['lastSecMax'] = $lastSecMax;
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

