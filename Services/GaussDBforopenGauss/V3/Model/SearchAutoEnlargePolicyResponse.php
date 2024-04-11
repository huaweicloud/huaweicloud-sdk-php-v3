<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchAutoEnlargePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchAutoEnlargePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOption  磁盘自动扩容开关。
    * limitVolumeSize  存储自动扩容上限。
    * minVolumeSize  最小扩容磁盘容量。
    * maxVolumeSize  最大扩容磁盘容量。
    * triggerAvailablePercent  可用存储空间率。
    * percents  空间率集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOption' => 'bool',
            'limitVolumeSize' => 'int',
            'minVolumeSize' => 'int',
            'maxVolumeSize' => 'int',
            'triggerAvailablePercent' => 'int',
            'percents' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOption  磁盘自动扩容开关。
    * limitVolumeSize  存储自动扩容上限。
    * minVolumeSize  最小扩容磁盘容量。
    * maxVolumeSize  最大扩容磁盘容量。
    * triggerAvailablePercent  可用存储空间率。
    * percents  空间率集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOption' => null,
        'limitVolumeSize' => null,
        'minVolumeSize' => null,
        'maxVolumeSize' => null,
        'triggerAvailablePercent' => null,
        'percents' => null
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
    * switchOption  磁盘自动扩容开关。
    * limitVolumeSize  存储自动扩容上限。
    * minVolumeSize  最小扩容磁盘容量。
    * maxVolumeSize  最大扩容磁盘容量。
    * triggerAvailablePercent  可用存储空间率。
    * percents  空间率集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOption' => 'switch_option',
            'limitVolumeSize' => 'limit_volume_size',
            'minVolumeSize' => 'min_volume_size',
            'maxVolumeSize' => 'max_volume_size',
            'triggerAvailablePercent' => 'trigger_available_percent',
            'percents' => 'percents'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOption  磁盘自动扩容开关。
    * limitVolumeSize  存储自动扩容上限。
    * minVolumeSize  最小扩容磁盘容量。
    * maxVolumeSize  最大扩容磁盘容量。
    * triggerAvailablePercent  可用存储空间率。
    * percents  空间率集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOption' => 'setSwitchOption',
            'limitVolumeSize' => 'setLimitVolumeSize',
            'minVolumeSize' => 'setMinVolumeSize',
            'maxVolumeSize' => 'setMaxVolumeSize',
            'triggerAvailablePercent' => 'setTriggerAvailablePercent',
            'percents' => 'setPercents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOption  磁盘自动扩容开关。
    * limitVolumeSize  存储自动扩容上限。
    * minVolumeSize  最小扩容磁盘容量。
    * maxVolumeSize  最大扩容磁盘容量。
    * triggerAvailablePercent  可用存储空间率。
    * percents  空间率集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOption' => 'getSwitchOption',
            'limitVolumeSize' => 'getLimitVolumeSize',
            'minVolumeSize' => 'getMinVolumeSize',
            'maxVolumeSize' => 'getMaxVolumeSize',
            'triggerAvailablePercent' => 'getTriggerAvailablePercent',
            'percents' => 'getPercents'
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
        $this->container['switchOption'] = isset($data['switchOption']) ? $data['switchOption'] : null;
        $this->container['limitVolumeSize'] = isset($data['limitVolumeSize']) ? $data['limitVolumeSize'] : null;
        $this->container['minVolumeSize'] = isset($data['minVolumeSize']) ? $data['minVolumeSize'] : null;
        $this->container['maxVolumeSize'] = isset($data['maxVolumeSize']) ? $data['maxVolumeSize'] : null;
        $this->container['triggerAvailablePercent'] = isset($data['triggerAvailablePercent']) ? $data['triggerAvailablePercent'] : null;
        $this->container['percents'] = isset($data['percents']) ? $data['percents'] : null;
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
    * Gets switchOption
    *  磁盘自动扩容开关。
    *
    * @return bool|null
    */
    public function getSwitchOption()
    {
        return $this->container['switchOption'];
    }

    /**
    * Sets switchOption
    *
    * @param bool|null $switchOption 磁盘自动扩容开关。
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets limitVolumeSize
    *  存储自动扩容上限。
    *
    * @return int|null
    */
    public function getLimitVolumeSize()
    {
        return $this->container['limitVolumeSize'];
    }

    /**
    * Sets limitVolumeSize
    *
    * @param int|null $limitVolumeSize 存储自动扩容上限。
    *
    * @return $this
    */
    public function setLimitVolumeSize($limitVolumeSize)
    {
        $this->container['limitVolumeSize'] = $limitVolumeSize;
        return $this;
    }

    /**
    * Gets minVolumeSize
    *  最小扩容磁盘容量。
    *
    * @return int|null
    */
    public function getMinVolumeSize()
    {
        return $this->container['minVolumeSize'];
    }

    /**
    * Sets minVolumeSize
    *
    * @param int|null $minVolumeSize 最小扩容磁盘容量。
    *
    * @return $this
    */
    public function setMinVolumeSize($minVolumeSize)
    {
        $this->container['minVolumeSize'] = $minVolumeSize;
        return $this;
    }

    /**
    * Gets maxVolumeSize
    *  最大扩容磁盘容量。
    *
    * @return int|null
    */
    public function getMaxVolumeSize()
    {
        return $this->container['maxVolumeSize'];
    }

    /**
    * Sets maxVolumeSize
    *
    * @param int|null $maxVolumeSize 最大扩容磁盘容量。
    *
    * @return $this
    */
    public function setMaxVolumeSize($maxVolumeSize)
    {
        $this->container['maxVolumeSize'] = $maxVolumeSize;
        return $this;
    }

    /**
    * Gets triggerAvailablePercent
    *  可用存储空间率。
    *
    * @return int|null
    */
    public function getTriggerAvailablePercent()
    {
        return $this->container['triggerAvailablePercent'];
    }

    /**
    * Sets triggerAvailablePercent
    *
    * @param int|null $triggerAvailablePercent 可用存储空间率。
    *
    * @return $this
    */
    public function setTriggerAvailablePercent($triggerAvailablePercent)
    {
        $this->container['triggerAvailablePercent'] = $triggerAvailablePercent;
        return $this;
    }

    /**
    * Gets percents
    *  空间率集合。
    *
    * @return int[]|null
    */
    public function getPercents()
    {
        return $this->container['percents'];
    }

    /**
    * Sets percents
    *
    * @param int[]|null $percents 空间率集合。
    *
    * @return $this
    */
    public function setPercents($percents)
    {
        $this->container['percents'] = $percents;
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

