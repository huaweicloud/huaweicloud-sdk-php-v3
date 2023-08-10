<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Extend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Extend';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newSize  扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    * newBandwidth  扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newSize' => 'int',
            'newBandwidth' => 'int',
            'bssParam' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\BssInfoExtend'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newSize  扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    * newBandwidth  扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newSize' => null,
        'newBandwidth' => 'int64',
        'bssParam' => null
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
    * newSize  扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    * newBandwidth  扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newSize' => 'new_size',
            'newBandwidth' => 'new_bandwidth',
            'bssParam' => 'bss_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newSize  扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    * newBandwidth  扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $setters = [
            'newSize' => 'setNewSize',
            'newBandwidth' => 'setNewBandwidth',
            'bssParam' => 'setBssParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newSize  扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    * newBandwidth  扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $getters = [
            'newSize' => 'getNewSize',
            'newBandwidth' => 'getNewBandwidth',
            'bssParam' => 'getBssParam'
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
        $this->container['newSize'] = isset($data['newSize']) ? $data['newSize'] : null;
        $this->container['newBandwidth'] = isset($data['newBandwidth']) ? $data['newBandwidth'] : null;
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newSize'] === null) {
            $invalidProperties[] = "'newSize' can't be null";
        }
            if (($this->container['newSize'] > 327680)) {
                $invalidProperties[] = "invalid value for 'newSize', must be smaller than or equal to 327680.";
            }
            if (($this->container['newSize'] < 500)) {
                $invalidProperties[] = "invalid value for 'newSize', must be bigger than or equal to 500.";
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
    * Gets newSize
    *  扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    *
    * @return int
    */
    public function getNewSize()
    {
        return $this->container['newSize'];
    }

    /**
    * Sets newSize
    *
    * @param int $newSize 扩容后文件系统的新容量，以GB为单位。扩容步长大于等于100GB。  普通文件系统容量，取值范围500~32768。  带宽型文件系统，容量范围是10240~327680
    *
    * @return $this
    */
    public function setNewSize($newSize)
    {
        $this->container['newSize'] = $newSize;
        return $this;
    }

    /**
    * Gets newBandwidth
    *  扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    *
    * @return int|null
    */
    public function getNewBandwidth()
    {
        return $this->container['newBandwidth'];
    }

    /**
    * Sets newBandwidth
    *
    * @param int|null $newBandwidth 扩缩带宽后文件系统的新带宽，以 GB 为单位。仅支持 hpc cache 型文件系统
    *
    * @return $this
    */
    public function setNewBandwidth($newBandwidth)
    {
        $this->container['newBandwidth'] = $newBandwidth;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\BssInfoExtend|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\BssInfoExtend|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
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

