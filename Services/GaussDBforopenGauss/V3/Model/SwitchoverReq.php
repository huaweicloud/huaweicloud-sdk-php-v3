<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchoverReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchoverReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * postProcessConfig  是否支持倒换失败自愈，为空时默认不自愈。
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'postProcessConfig' => 'string',
            'disasterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * postProcessConfig  是否支持倒换失败自愈，为空时默认不自愈。
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'postProcessConfig' => null,
        'disasterType' => null
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
    * postProcessConfig  是否支持倒换失败自愈，为空时默认不自愈。
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'postProcessConfig' => 'post_process_config',
            'disasterType' => 'disaster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * postProcessConfig  是否支持倒换失败自愈，为空时默认不自愈。
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'postProcessConfig' => 'setPostProcessConfig',
            'disasterType' => 'setDisasterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * postProcessConfig  是否支持倒换失败自愈，为空时默认不自愈。
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'postProcessConfig' => 'getPostProcessConfig',
            'disasterType' => 'getDisasterType'
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
    const POST_PROCESS_CONFIG_AUTO = 'AUTO';
    const POST_PROCESS_CONFIG_MANUAL = 'MANUAL';
    const DISASTER_TYPE_STREAM = 'stream';
    const DISASTER_TYPE_DORADO = 'dorado';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPostProcessConfigAllowableValues()
    {
        return [
            self::POST_PROCESS_CONFIG_AUTO,
            self::POST_PROCESS_CONFIG_MANUAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisasterTypeAllowableValues()
    {
        return [
            self::DISASTER_TYPE_STREAM,
            self::DISASTER_TYPE_DORADO,
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
        $this->container['postProcessConfig'] = isset($data['postProcessConfig']) ? $data['postProcessConfig'] : null;
        $this->container['disasterType'] = isset($data['disasterType']) ? $data['disasterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPostProcessConfigAllowableValues();
                if (!is_null($this->container['postProcessConfig']) && !in_array($this->container['postProcessConfig'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'postProcessConfig', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['disasterType'] === null) {
            $invalidProperties[] = "'disasterType' can't be null";
        }
            $allowedValues = $this->getDisasterTypeAllowableValues();
                if (!is_null($this->container['disasterType']) && !in_array($this->container['disasterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disasterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets postProcessConfig
    *  是否支持倒换失败自愈，为空时默认不自愈。
    *
    * @return string|null
    */
    public function getPostProcessConfig()
    {
        return $this->container['postProcessConfig'];
    }

    /**
    * Sets postProcessConfig
    *
    * @param string|null $postProcessConfig 是否支持倒换失败自愈，为空时默认不自愈。
    *
    * @return $this
    */
    public function setPostProcessConfig($postProcessConfig)
    {
        $this->container['postProcessConfig'] = $postProcessConfig;
        return $this;
    }

    /**
    * Gets disasterType
    *  容灾类型。
    *
    * @return string
    */
    public function getDisasterType()
    {
        return $this->container['disasterType'];
    }

    /**
    * Sets disasterType
    *
    * @param string $disasterType 容灾类型。
    *
    * @return $this
    */
    public function setDisasterType($disasterType)
    {
        $this->container['disasterType'] = $disasterType;
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

