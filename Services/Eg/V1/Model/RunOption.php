<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * threadNum  并发数
    * batchWindow  batchWindow
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'threadNum' => 'int',
            'batchWindow' => '\HuaweiCloud\SDK\Eg\V1\Model\BatchWindow'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * threadNum  并发数
    * batchWindow  batchWindow
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'threadNum' => 'int32',
        'batchWindow' => null
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
    * threadNum  并发数
    * batchWindow  batchWindow
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'threadNum' => 'thread_num',
            'batchWindow' => 'batch_window'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * threadNum  并发数
    * batchWindow  batchWindow
    *
    * @var string[]
    */
    protected static $setters = [
            'threadNum' => 'setThreadNum',
            'batchWindow' => 'setBatchWindow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * threadNum  并发数
    * batchWindow  batchWindow
    *
    * @var string[]
    */
    protected static $getters = [
            'threadNum' => 'getThreadNum',
            'batchWindow' => 'getBatchWindow'
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
        $this->container['threadNum'] = isset($data['threadNum']) ? $data['threadNum'] : null;
        $this->container['batchWindow'] = isset($data['batchWindow']) ? $data['batchWindow'] : null;
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
    * Gets threadNum
    *  并发数
    *
    * @return int|null
    */
    public function getThreadNum()
    {
        return $this->container['threadNum'];
    }

    /**
    * Sets threadNum
    *
    * @param int|null $threadNum 并发数
    *
    * @return $this
    */
    public function setThreadNum($threadNum)
    {
        $this->container['threadNum'] = $threadNum;
        return $this;
    }

    /**
    * Gets batchWindow
    *  batchWindow
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\BatchWindow|null
    */
    public function getBatchWindow()
    {
        return $this->container['batchWindow'];
    }

    /**
    * Sets batchWindow
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\BatchWindow|null $batchWindow batchWindow
    *
    * @return $this
    */
    public function setBatchWindow($batchWindow)
    {
        $this->container['batchWindow'] = $batchWindow;
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

