<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskusageEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskusageEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * brokerName  Broker名称。
    * dataDiskSize  磁盘容量。
    * dataDiskUse  已使用的磁盘容量。
    * dataDiskFree  剩余可用的磁盘容量。
    * dataDiskUsePercentage  消息标签。
    * status  消息标签。
    * topicList  topic磁盘容量使用列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'brokerName' => 'string',
            'dataDiskSize' => 'string',
            'dataDiskUse' => 'string',
            'dataDiskFree' => 'string',
            'dataDiskUsePercentage' => 'string',
            'status' => 'string',
            'topicList' => '\HuaweiCloud\SDK\Kafka\V2\Model\DiskusageTopicEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * brokerName  Broker名称。
    * dataDiskSize  磁盘容量。
    * dataDiskUse  已使用的磁盘容量。
    * dataDiskFree  剩余可用的磁盘容量。
    * dataDiskUsePercentage  消息标签。
    * status  消息标签。
    * topicList  topic磁盘容量使用列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'brokerName' => null,
        'dataDiskSize' => null,
        'dataDiskUse' => null,
        'dataDiskFree' => null,
        'dataDiskUsePercentage' => null,
        'status' => null,
        'topicList' => null
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
    * brokerName  Broker名称。
    * dataDiskSize  磁盘容量。
    * dataDiskUse  已使用的磁盘容量。
    * dataDiskFree  剩余可用的磁盘容量。
    * dataDiskUsePercentage  消息标签。
    * status  消息标签。
    * topicList  topic磁盘容量使用列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'brokerName' => 'broker_name',
            'dataDiskSize' => 'data_disk_size',
            'dataDiskUse' => 'data_disk_use',
            'dataDiskFree' => 'data_disk_free',
            'dataDiskUsePercentage' => 'data_disk_use_percentage',
            'status' => 'status',
            'topicList' => 'topic_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * brokerName  Broker名称。
    * dataDiskSize  磁盘容量。
    * dataDiskUse  已使用的磁盘容量。
    * dataDiskFree  剩余可用的磁盘容量。
    * dataDiskUsePercentage  消息标签。
    * status  消息标签。
    * topicList  topic磁盘容量使用列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'brokerName' => 'setBrokerName',
            'dataDiskSize' => 'setDataDiskSize',
            'dataDiskUse' => 'setDataDiskUse',
            'dataDiskFree' => 'setDataDiskFree',
            'dataDiskUsePercentage' => 'setDataDiskUsePercentage',
            'status' => 'setStatus',
            'topicList' => 'setTopicList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * brokerName  Broker名称。
    * dataDiskSize  磁盘容量。
    * dataDiskUse  已使用的磁盘容量。
    * dataDiskFree  剩余可用的磁盘容量。
    * dataDiskUsePercentage  消息标签。
    * status  消息标签。
    * topicList  topic磁盘容量使用列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'brokerName' => 'getBrokerName',
            'dataDiskSize' => 'getDataDiskSize',
            'dataDiskUse' => 'getDataDiskUse',
            'dataDiskFree' => 'getDataDiskFree',
            'dataDiskUsePercentage' => 'getDataDiskUsePercentage',
            'status' => 'getStatus',
            'topicList' => 'getTopicList'
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
        $this->container['brokerName'] = isset($data['brokerName']) ? $data['brokerName'] : null;
        $this->container['dataDiskSize'] = isset($data['dataDiskSize']) ? $data['dataDiskSize'] : null;
        $this->container['dataDiskUse'] = isset($data['dataDiskUse']) ? $data['dataDiskUse'] : null;
        $this->container['dataDiskFree'] = isset($data['dataDiskFree']) ? $data['dataDiskFree'] : null;
        $this->container['dataDiskUsePercentage'] = isset($data['dataDiskUsePercentage']) ? $data['dataDiskUsePercentage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topicList'] = isset($data['topicList']) ? $data['topicList'] : null;
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
    * Gets brokerName
    *  Broker名称。
    *
    * @return string|null
    */
    public function getBrokerName()
    {
        return $this->container['brokerName'];
    }

    /**
    * Sets brokerName
    *
    * @param string|null $brokerName Broker名称。
    *
    * @return $this
    */
    public function setBrokerName($brokerName)
    {
        $this->container['brokerName'] = $brokerName;
        return $this;
    }

    /**
    * Gets dataDiskSize
    *  磁盘容量。
    *
    * @return string|null
    */
    public function getDataDiskSize()
    {
        return $this->container['dataDiskSize'];
    }

    /**
    * Sets dataDiskSize
    *
    * @param string|null $dataDiskSize 磁盘容量。
    *
    * @return $this
    */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->container['dataDiskSize'] = $dataDiskSize;
        return $this;
    }

    /**
    * Gets dataDiskUse
    *  已使用的磁盘容量。
    *
    * @return string|null
    */
    public function getDataDiskUse()
    {
        return $this->container['dataDiskUse'];
    }

    /**
    * Sets dataDiskUse
    *
    * @param string|null $dataDiskUse 已使用的磁盘容量。
    *
    * @return $this
    */
    public function setDataDiskUse($dataDiskUse)
    {
        $this->container['dataDiskUse'] = $dataDiskUse;
        return $this;
    }

    /**
    * Gets dataDiskFree
    *  剩余可用的磁盘容量。
    *
    * @return string|null
    */
    public function getDataDiskFree()
    {
        return $this->container['dataDiskFree'];
    }

    /**
    * Sets dataDiskFree
    *
    * @param string|null $dataDiskFree 剩余可用的磁盘容量。
    *
    * @return $this
    */
    public function setDataDiskFree($dataDiskFree)
    {
        $this->container['dataDiskFree'] = $dataDiskFree;
        return $this;
    }

    /**
    * Gets dataDiskUsePercentage
    *  消息标签。
    *
    * @return string|null
    */
    public function getDataDiskUsePercentage()
    {
        return $this->container['dataDiskUsePercentage'];
    }

    /**
    * Sets dataDiskUsePercentage
    *
    * @param string|null $dataDiskUsePercentage 消息标签。
    *
    * @return $this
    */
    public function setDataDiskUsePercentage($dataDiskUsePercentage)
    {
        $this->container['dataDiskUsePercentage'] = $dataDiskUsePercentage;
        return $this;
    }

    /**
    * Gets status
    *  消息标签。
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
    * @param string|null $status 消息标签。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topicList
    *  topic磁盘容量使用列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\DiskusageTopicEntity[]|null
    */
    public function getTopicList()
    {
        return $this->container['topicList'];
    }

    /**
    * Sets topicList
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\DiskusageTopicEntity[]|null $topicList topic磁盘容量使用列表。
    *
    * @return $this
    */
    public function setTopicList($topicList)
    {
        $this->container['topicList'] = $topicList;
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

