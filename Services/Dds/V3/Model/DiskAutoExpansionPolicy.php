<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskAutoExpansionPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskAutoExpansionPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * threshold  触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    * step  扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'threshold' => 'int',
            'step' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * threshold  触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    * step  扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'threshold' => 'int32',
        'step' => 'int32'
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
    * instanceId  实例ID。
    * threshold  触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    * step  扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'threshold' => 'threshold',
            'step' => 'step'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * threshold  触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    * step  扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'threshold' => 'setThreshold',
            'step' => 'setStep'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * threshold  触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    * step  扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'threshold' => 'getThreshold',
            'step' => 'getStep'
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
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
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
    *  实例ID。
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
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets threshold
    *  触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 触发自动扩容阈值，只支持输入80、85和90。默认阈值为90，即当已使用存储空间达到总存储空间的90%时就会触发扩容。集群实例的自动扩容阈值指的是每个shard。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets step
    *  扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step 扩容步长（s%），默认为10，支持输入10、15和20。当触发自动扩容的时候，自动扩容当前存储空间的s%（非10倍数向上取整。小数点后四舍五入，默认一次最小10G，账户余额不足时，会导致包年包月实例扩容失败）。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
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

