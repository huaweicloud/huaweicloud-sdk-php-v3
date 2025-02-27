<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateListenerQuicConfigOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateListenerQuicConfigOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quicListenerId  参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * enableQuicUpgrade  参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quicListenerId' => 'string',
            'enableQuicUpgrade' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quicListenerId  参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * enableQuicUpgrade  参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quicListenerId' => null,
        'enableQuicUpgrade' => null
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
    * quicListenerId  参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * enableQuicUpgrade  参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quicListenerId' => 'quic_listener_id',
            'enableQuicUpgrade' => 'enable_quic_upgrade'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quicListenerId  参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * enableQuicUpgrade  参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'quicListenerId' => 'setQuicListenerId',
            'enableQuicUpgrade' => 'setEnableQuicUpgrade'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quicListenerId  参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * enableQuicUpgrade  参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'quicListenerId' => 'getQuicListenerId',
            'enableQuicUpgrade' => 'getEnableQuicUpgrade'
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
        $this->container['quicListenerId'] = isset($data['quicListenerId']) ? $data['quicListenerId'] : null;
        $this->container['enableQuicUpgrade'] = isset($data['enableQuicUpgrade']) ? $data['enableQuicUpgrade'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quicListenerId'] === null) {
            $invalidProperties[] = "'quicListenerId' can't be null";
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
    * Gets quicListenerId
    *  参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @return string
    */
    public function getQuicListenerId()
    {
        return $this->container['quicListenerId'];
    }

    /**
    * Sets quicListenerId
    *
    * @param string $quicListenerId 参数解释：监听器关联的QUIC监听器ID。  约束限制：指定的listener id必须已存在，且协议类型为QUIC，不能指定为null，否则与enable_quic_upgrade冲突。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @return $this
    */
    public function setQuicListenerId($quicListenerId)
    {
        $this->container['quicListenerId'] = $quicListenerId;
        return $this;
    }

    /**
    * Gets enableQuicUpgrade
    *  参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @return bool|null
    */
    public function getEnableQuicUpgrade()
    {
        return $this->container['enableQuicUpgrade'];
    }

    /**
    * Sets enableQuicUpgrade
    *
    * @param bool|null $enableQuicUpgrade 参数解释：QUIC升级的开启状态。 开启HTTPS监听器升级QUIC监听器能力。  取值范围： - true:开启QUIC升级。 - false：关闭QUIC升级。  默认取值：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    *
    * @return $this
    */
    public function setEnableQuicUpgrade($enableQuicUpgrade)
    {
        $this->container['enableQuicUpgrade'] = $enableQuicUpgrade;
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

