<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDeviceInfoResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDeviceInfoResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * model  终端型号。
    * deviceSize  设备终端产品尺寸。
    * purchaseChannel  终端设备购买渠道。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'model' => 'string',
            'deviceSize' => 'string',
            'purchaseChannel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * model  终端型号。
    * deviceSize  设备终端产品尺寸。
    * purchaseChannel  终端设备购买渠道。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'model' => null,
        'deviceSize' => null,
        'purchaseChannel' => null
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
    * model  终端型号。
    * deviceSize  设备终端产品尺寸。
    * purchaseChannel  终端设备购买渠道。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'model' => 'model',
            'deviceSize' => 'deviceSize',
            'purchaseChannel' => 'purchaseChannel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * model  终端型号。
    * deviceSize  设备终端产品尺寸。
    * purchaseChannel  终端设备购买渠道。
    *
    * @var string[]
    */
    protected static $setters = [
            'model' => 'setModel',
            'deviceSize' => 'setDeviceSize',
            'purchaseChannel' => 'setPurchaseChannel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * model  终端型号。
    * deviceSize  设备终端产品尺寸。
    * purchaseChannel  终端设备购买渠道。
    *
    * @var string[]
    */
    protected static $getters = [
            'model' => 'getModel',
            'deviceSize' => 'getDeviceSize',
            'purchaseChannel' => 'getPurchaseChannel'
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
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['deviceSize'] = isset($data['deviceSize']) ? $data['deviceSize'] : null;
        $this->container['purchaseChannel'] = isset($data['purchaseChannel']) ? $data['purchaseChannel'] : null;
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
    * Gets model
    *  终端型号。
    *
    * @return string|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param string|null $model 终端型号。
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets deviceSize
    *  设备终端产品尺寸。
    *
    * @return string|null
    */
    public function getDeviceSize()
    {
        return $this->container['deviceSize'];
    }

    /**
    * Sets deviceSize
    *
    * @param string|null $deviceSize 设备终端产品尺寸。
    *
    * @return $this
    */
    public function setDeviceSize($deviceSize)
    {
        $this->container['deviceSize'] = $deviceSize;
        return $this;
    }

    /**
    * Gets purchaseChannel
    *  终端设备购买渠道。
    *
    * @return string|null
    */
    public function getPurchaseChannel()
    {
        return $this->container['purchaseChannel'];
    }

    /**
    * Sets purchaseChannel
    *
    * @param string|null $purchaseChannel 终端设备购买渠道。
    *
    * @return $this
    */
    public function setPurchaseChannel($purchaseChannel)
    {
        $this->container['purchaseChannel'] = $purchaseChannel;
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

