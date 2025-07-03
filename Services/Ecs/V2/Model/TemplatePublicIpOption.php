<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplatePublicIpOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplatePublicIpOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicipType  弹性公网IP类型
    * chargingMode  弹性公网IP计费类型
    * bandwidth  bandwidth
    * deleteOnTermination  EIP是否随实例一同释放
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicipType' => 'string',
            'chargingMode' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateBandwidthOption',
            'deleteOnTermination' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicipType  弹性公网IP类型
    * chargingMode  弹性公网IP计费类型
    * bandwidth  bandwidth
    * deleteOnTermination  EIP是否随实例一同释放
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicipType' => null,
        'chargingMode' => null,
        'bandwidth' => null,
        'deleteOnTermination' => null
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
    * publicipType  弹性公网IP类型
    * chargingMode  弹性公网IP计费类型
    * bandwidth  bandwidth
    * deleteOnTermination  EIP是否随实例一同释放
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicipType' => 'publicip_type',
            'chargingMode' => 'charging_mode',
            'bandwidth' => 'bandwidth',
            'deleteOnTermination' => 'delete_on_termination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicipType  弹性公网IP类型
    * chargingMode  弹性公网IP计费类型
    * bandwidth  bandwidth
    * deleteOnTermination  EIP是否随实例一同释放
    *
    * @var string[]
    */
    protected static $setters = [
            'publicipType' => 'setPublicipType',
            'chargingMode' => 'setChargingMode',
            'bandwidth' => 'setBandwidth',
            'deleteOnTermination' => 'setDeleteOnTermination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicipType  弹性公网IP类型
    * chargingMode  弹性公网IP计费类型
    * bandwidth  bandwidth
    * deleteOnTermination  EIP是否随实例一同释放
    *
    * @var string[]
    */
    protected static $getters = [
            'publicipType' => 'getPublicipType',
            'chargingMode' => 'getChargingMode',
            'bandwidth' => 'getBandwidth',
            'deleteOnTermination' => 'getDeleteOnTermination'
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
        $this->container['publicipType'] = isset($data['publicipType']) ? $data['publicipType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : null;
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
    * Gets publicipType
    *  弹性公网IP类型
    *
    * @return string|null
    */
    public function getPublicipType()
    {
        return $this->container['publicipType'];
    }

    /**
    * Sets publicipType
    *
    * @param string|null $publicipType 弹性公网IP类型
    *
    * @return $this
    */
    public function setPublicipType($publicipType)
    {
        $this->container['publicipType'] = $publicipType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  弹性公网IP计费类型
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 弹性公网IP计费类型
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateBandwidthOption|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateBandwidthOption|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets deleteOnTermination
    *  EIP是否随实例一同释放
    *
    * @return bool|null
    */
    public function getDeleteOnTermination()
    {
        return $this->container['deleteOnTermination'];
    }

    /**
    * Sets deleteOnTermination
    *
    * @param bool|null $deleteOnTermination EIP是否随实例一同释放
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
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

