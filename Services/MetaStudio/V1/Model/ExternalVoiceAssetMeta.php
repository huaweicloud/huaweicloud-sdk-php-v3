<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalVoiceAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalVoiceAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provider  第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provider' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provider  第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provider' => null
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
    * provider  第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provider' => 'provider'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provider  第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @var string[]
    */
    protected static $setters = [
            'provider' => 'setProvider'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provider  第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @var string[]
    */
    protected static $getters = [
            'provider' => 'getProvider'
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
    const PROVIDER_XIMALAYA = 'XIMALAYA';
    const PROVIDER_HUAWEI_EI = 'HUAWEI_EI';
    const PROVIDER_MOBVOI = 'MOBVOI';
    const PROVIDER_AUDIOX = 'AUDIOX';
    const PROVIDER_SINOVOICE = 'SINOVOICE';
    const PROVIDER_DATABAKER = 'DATABAKER';
    const PROVIDER_AISPEECH = 'AISPEECH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_XIMALAYA,
            self::PROVIDER_HUAWEI_EI,
            self::PROVIDER_MOBVOI,
            self::PROVIDER_AUDIOX,
            self::PROVIDER_SINOVOICE,
            self::PROVIDER_DATABAKER,
            self::PROVIDER_AISPEECH,
        ];
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
            $allowedValues = $this->getProviderAllowableValues();
                if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'provider', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['provider']) > 32)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['provider']) < 0)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 0.";
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
    * Gets provider
    *  第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider 第三方TTS供应商类型。 * XIMALAYA：喜马拉雅TTS * HUAWEI_EI：华为云EI TTS * MOBVOI：出门问问 TTS * AUDIOX：逻辑智能 TTS * SINOVOICE：捷通华声 TTS * DATABAKER：标贝 TTS * AISPEECH：思必驰 TTS
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
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

