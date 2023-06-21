<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsAddr  obsAddr
    * recordFormats  录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsAddr' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\RecordObsFileAddr',
            'recordFormats' => 'string[]',
            'hlsConfig' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\HLSRecordConfig',
            'mp4Config' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MP4RecordConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsAddr  obsAddr
    * recordFormats  录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsAddr' => null,
        'recordFormats' => null,
        'hlsConfig' => null,
        'mp4Config' => null
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
    * obsAddr  obsAddr
    * recordFormats  录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsAddr' => 'obs_addr',
            'recordFormats' => 'record_formats',
            'hlsConfig' => 'hls_config',
            'mp4Config' => 'mp4_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsAddr  obsAddr
    * recordFormats  录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $setters = [
            'obsAddr' => 'setObsAddr',
            'recordFormats' => 'setRecordFormats',
            'hlsConfig' => 'setHlsConfig',
            'mp4Config' => 'setMp4Config'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsAddr  obsAddr
    * recordFormats  录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $getters = [
            'obsAddr' => 'getObsAddr',
            'recordFormats' => 'getRecordFormats',
            'hlsConfig' => 'getHlsConfig',
            'mp4Config' => 'getMp4Config'
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
    const RECORD_FORMATS_HLS = 'HLS';
    const RECORD_FORMATS_MP4 = 'MP4';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordFormatsAllowableValues()
    {
        return [
            self::RECORD_FORMATS_HLS,
            self::RECORD_FORMATS_MP4,
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
        $this->container['obsAddr'] = isset($data['obsAddr']) ? $data['obsAddr'] : null;
        $this->container['recordFormats'] = isset($data['recordFormats']) ? $data['recordFormats'] : null;
        $this->container['hlsConfig'] = isset($data['hlsConfig']) ? $data['hlsConfig'] : null;
        $this->container['mp4Config'] = isset($data['mp4Config']) ? $data['mp4Config'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['obsAddr'] === null) {
            $invalidProperties[] = "'obsAddr' can't be null";
        }
        if ($this->container['recordFormats'] === null) {
            $invalidProperties[] = "'recordFormats' can't be null";
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
    * Gets obsAddr
    *  obsAddr
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordObsFileAddr
    */
    public function getObsAddr()
    {
        return $this->container['obsAddr'];
    }

    /**
    * Sets obsAddr
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordObsFileAddr $obsAddr obsAddr
    *
    * @return $this
    */
    public function setObsAddr($obsAddr)
    {
        $this->container['obsAddr'] = $obsAddr;
        return $this;
    }

    /**
    * Gets recordFormats
    *  录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    *
    * @return string[]
    */
    public function getRecordFormats()
    {
        return $this->container['recordFormats'];
    }

    /**
    * Sets recordFormats
    *
    * @param string[] $recordFormats 录制格式：支持HLS格式和MP4格式（HLS和MP4为大写）。   - 若配置HLS则必须携带HLSRecordConfig参数  - 若配置MP4则需要携带MP4RecordConfig
    *
    * @return $this
    */
    public function setRecordFormats($recordFormats)
    {
        $this->container['recordFormats'] = $recordFormats;
        return $this;
    }

    /**
    * Gets hlsConfig
    *  hlsConfig
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\HLSRecordConfig|null
    */
    public function getHlsConfig()
    {
        return $this->container['hlsConfig'];
    }

    /**
    * Sets hlsConfig
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\HLSRecordConfig|null $hlsConfig hlsConfig
    *
    * @return $this
    */
    public function setHlsConfig($hlsConfig)
    {
        $this->container['hlsConfig'] = $hlsConfig;
        return $this;
    }

    /**
    * Gets mp4Config
    *  mp4Config
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\MP4RecordConfig|null
    */
    public function getMp4Config()
    {
        return $this->container['mp4Config'];
    }

    /**
    * Sets mp4Config
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MP4RecordConfig|null $mp4Config mp4Config
    *
    * @return $this
    */
    public function setMp4Config($mp4Config)
    {
        $this->container['mp4Config'] = $mp4Config;
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

