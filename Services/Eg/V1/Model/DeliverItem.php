<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeliverItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeliverItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionId  订阅ID，全局唯一
    * subscriptionName  订阅名称
    * successCounts  成功目标个数
    * failCounts  失败目标个数
    * allDeliverTimes  共投递次数
    * deliverTargetList  投递详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionId' => 'string',
            'subscriptionName' => 'string',
            'successCounts' => 'int',
            'failCounts' => 'int',
            'allDeliverTimes' => 'int',
            'deliverTargetList' => '\HuaweiCloud\SDK\Eg\V1\Model\DeliverTarget[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionId  订阅ID，全局唯一
    * subscriptionName  订阅名称
    * successCounts  成功目标个数
    * failCounts  失败目标个数
    * allDeliverTimes  共投递次数
    * deliverTargetList  投递详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionId' => null,
        'subscriptionName' => null,
        'successCounts' => 'int32',
        'failCounts' => 'int32',
        'allDeliverTimes' => 'int32',
        'deliverTargetList' => null
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
    * subscriptionId  订阅ID，全局唯一
    * subscriptionName  订阅名称
    * successCounts  成功目标个数
    * failCounts  失败目标个数
    * allDeliverTimes  共投递次数
    * deliverTargetList  投递详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionId' => 'subscriptionId',
            'subscriptionName' => 'subscriptionName',
            'successCounts' => 'successCounts',
            'failCounts' => 'failCounts',
            'allDeliverTimes' => 'allDeliverTimes',
            'deliverTargetList' => 'deliverTargetList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionId  订阅ID，全局唯一
    * subscriptionName  订阅名称
    * successCounts  成功目标个数
    * failCounts  失败目标个数
    * allDeliverTimes  共投递次数
    * deliverTargetList  投递详情
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionId' => 'setSubscriptionId',
            'subscriptionName' => 'setSubscriptionName',
            'successCounts' => 'setSuccessCounts',
            'failCounts' => 'setFailCounts',
            'allDeliverTimes' => 'setAllDeliverTimes',
            'deliverTargetList' => 'setDeliverTargetList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionId  订阅ID，全局唯一
    * subscriptionName  订阅名称
    * successCounts  成功目标个数
    * failCounts  失败目标个数
    * allDeliverTimes  共投递次数
    * deliverTargetList  投递详情
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionId' => 'getSubscriptionId',
            'subscriptionName' => 'getSubscriptionName',
            'successCounts' => 'getSuccessCounts',
            'failCounts' => 'getFailCounts',
            'allDeliverTimes' => 'getAllDeliverTimes',
            'deliverTargetList' => 'getDeliverTargetList'
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
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['subscriptionName'] = isset($data['subscriptionName']) ? $data['subscriptionName'] : null;
        $this->container['successCounts'] = isset($data['successCounts']) ? $data['successCounts'] : null;
        $this->container['failCounts'] = isset($data['failCounts']) ? $data['failCounts'] : null;
        $this->container['allDeliverTimes'] = isset($data['allDeliverTimes']) ? $data['allDeliverTimes'] : null;
        $this->container['deliverTargetList'] = isset($data['deliverTargetList']) ? $data['deliverTargetList'] : null;
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
    * Gets subscriptionId
    *  订阅ID，全局唯一
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId 订阅ID，全局唯一
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets subscriptionName
    *  订阅名称
    *
    * @return string|null
    */
    public function getSubscriptionName()
    {
        return $this->container['subscriptionName'];
    }

    /**
    * Sets subscriptionName
    *
    * @param string|null $subscriptionName 订阅名称
    *
    * @return $this
    */
    public function setSubscriptionName($subscriptionName)
    {
        $this->container['subscriptionName'] = $subscriptionName;
        return $this;
    }

    /**
    * Gets successCounts
    *  成功目标个数
    *
    * @return int|null
    */
    public function getSuccessCounts()
    {
        return $this->container['successCounts'];
    }

    /**
    * Sets successCounts
    *
    * @param int|null $successCounts 成功目标个数
    *
    * @return $this
    */
    public function setSuccessCounts($successCounts)
    {
        $this->container['successCounts'] = $successCounts;
        return $this;
    }

    /**
    * Gets failCounts
    *  失败目标个数
    *
    * @return int|null
    */
    public function getFailCounts()
    {
        return $this->container['failCounts'];
    }

    /**
    * Sets failCounts
    *
    * @param int|null $failCounts 失败目标个数
    *
    * @return $this
    */
    public function setFailCounts($failCounts)
    {
        $this->container['failCounts'] = $failCounts;
        return $this;
    }

    /**
    * Gets allDeliverTimes
    *  共投递次数
    *
    * @return int|null
    */
    public function getAllDeliverTimes()
    {
        return $this->container['allDeliverTimes'];
    }

    /**
    * Sets allDeliverTimes
    *
    * @param int|null $allDeliverTimes 共投递次数
    *
    * @return $this
    */
    public function setAllDeliverTimes($allDeliverTimes)
    {
        $this->container['allDeliverTimes'] = $allDeliverTimes;
        return $this;
    }

    /**
    * Gets deliverTargetList
    *  投递详情
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\DeliverTarget[]|null
    */
    public function getDeliverTargetList()
    {
        return $this->container['deliverTargetList'];
    }

    /**
    * Sets deliverTargetList
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\DeliverTarget[]|null $deliverTargetList 投递详情
    *
    * @return $this
    */
    public function setDeliverTargetList($deliverTargetList)
    {
        $this->container['deliverTargetList'] = $deliverTargetList;
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

