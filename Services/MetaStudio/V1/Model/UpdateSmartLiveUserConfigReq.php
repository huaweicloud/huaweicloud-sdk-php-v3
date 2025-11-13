<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSmartLiveUserConfigReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSmartLiveUserConfigReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * liveExitConfig  liveExitConfig
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveNotifyConfig  liveNotifyConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'liveExitConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveExitConfig',
            'liveEventCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig',
            'liveNotifyConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveNotifyConfigReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * liveExitConfig  liveExitConfig
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveNotifyConfig  liveNotifyConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'liveExitConfig' => null,
        'liveEventCallbackConfig' => null,
        'liveNotifyConfig' => null
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
    * liveExitConfig  liveExitConfig
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveNotifyConfig  liveNotifyConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'liveExitConfig' => 'live_exit_config',
            'liveEventCallbackConfig' => 'live_event_callback_config',
            'liveNotifyConfig' => 'live_notify_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * liveExitConfig  liveExitConfig
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveNotifyConfig  liveNotifyConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'liveExitConfig' => 'setLiveExitConfig',
            'liveEventCallbackConfig' => 'setLiveEventCallbackConfig',
            'liveNotifyConfig' => 'setLiveNotifyConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * liveExitConfig  liveExitConfig
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveNotifyConfig  liveNotifyConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'liveExitConfig' => 'getLiveExitConfig',
            'liveEventCallbackConfig' => 'getLiveEventCallbackConfig',
            'liveNotifyConfig' => 'getLiveNotifyConfig'
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
        $this->container['liveExitConfig'] = isset($data['liveExitConfig']) ? $data['liveExitConfig'] : null;
        $this->container['liveEventCallbackConfig'] = isset($data['liveEventCallbackConfig']) ? $data['liveEventCallbackConfig'] : null;
        $this->container['liveNotifyConfig'] = isset($data['liveNotifyConfig']) ? $data['liveNotifyConfig'] : null;
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
    * Gets liveExitConfig
    *  liveExitConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveExitConfig|null
    */
    public function getLiveExitConfig()
    {
        return $this->container['liveExitConfig'];
    }

    /**
    * Sets liveExitConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveExitConfig|null $liveExitConfig liveExitConfig
    *
    * @return $this
    */
    public function setLiveExitConfig($liveExitConfig)
    {
        $this->container['liveExitConfig'] = $liveExitConfig;
        return $this;
    }

    /**
    * Gets liveEventCallbackConfig
    *  liveEventCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null
    */
    public function getLiveEventCallbackConfig()
    {
        return $this->container['liveEventCallbackConfig'];
    }

    /**
    * Sets liveEventCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null $liveEventCallbackConfig liveEventCallbackConfig
    *
    * @return $this
    */
    public function setLiveEventCallbackConfig($liveEventCallbackConfig)
    {
        $this->container['liveEventCallbackConfig'] = $liveEventCallbackConfig;
        return $this;
    }

    /**
    * Gets liveNotifyConfig
    *  liveNotifyConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveNotifyConfigReq|null
    */
    public function getLiveNotifyConfig()
    {
        return $this->container['liveNotifyConfig'];
    }

    /**
    * Sets liveNotifyConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveNotifyConfigReq|null $liveNotifyConfig liveNotifyConfig
    *
    * @return $this
    */
    public function setLiveNotifyConfig($liveNotifyConfig)
    {
        $this->container['liveNotifyConfig'] = $liveNotifyConfig;
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

