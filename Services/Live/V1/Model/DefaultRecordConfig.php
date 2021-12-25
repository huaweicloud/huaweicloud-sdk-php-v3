<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefaultRecordConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefaultRecordConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordFormat  录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    * obsAddr  obsAddr
    * hlsConfig  hlsConfig
    * flvConfig  flvConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordFormat' => '\HuaweiCloud\SDK\Live\V1\Model\VideoFormatVar[]',
            'obsAddr' => '\HuaweiCloud\SDK\Live\V1\Model\RecordObsFileAddr',
            'hlsConfig' => '\HuaweiCloud\SDK\Live\V1\Model\HLSRecordConfig',
            'flvConfig' => '\HuaweiCloud\SDK\Live\V1\Model\FLVRecordConfig',
            'mp4Config' => '\HuaweiCloud\SDK\Live\V1\Model\MP4RecordConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordFormat  录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    * obsAddr  obsAddr
    * hlsConfig  hlsConfig
    * flvConfig  flvConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordFormat' => null,
        'obsAddr' => null,
        'hlsConfig' => null,
        'flvConfig' => null,
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
    * recordFormat  录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    * obsAddr  obsAddr
    * hlsConfig  hlsConfig
    * flvConfig  flvConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordFormat' => 'record_format',
            'obsAddr' => 'obs_addr',
            'hlsConfig' => 'hls_config',
            'flvConfig' => 'flv_config',
            'mp4Config' => 'mp4_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordFormat  录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    * obsAddr  obsAddr
    * hlsConfig  hlsConfig
    * flvConfig  flvConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $setters = [
            'recordFormat' => 'setRecordFormat',
            'obsAddr' => 'setObsAddr',
            'hlsConfig' => 'setHlsConfig',
            'flvConfig' => 'setFlvConfig',
            'mp4Config' => 'setMp4Config'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordFormat  录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    * obsAddr  obsAddr
    * hlsConfig  hlsConfig
    * flvConfig  flvConfig
    * mp4Config  mp4Config
    *
    * @var string[]
    */
    protected static $getters = [
            'recordFormat' => 'getRecordFormat',
            'obsAddr' => 'getObsAddr',
            'hlsConfig' => 'getHlsConfig',
            'flvConfig' => 'getFlvConfig',
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
        $this->container['recordFormat'] = isset($data['recordFormat']) ? $data['recordFormat'] : null;
        $this->container['obsAddr'] = isset($data['obsAddr']) ? $data['obsAddr'] : null;
        $this->container['hlsConfig'] = isset($data['hlsConfig']) ? $data['hlsConfig'] : null;
        $this->container['flvConfig'] = isset($data['flvConfig']) ? $data['flvConfig'] : null;
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
        if ($this->container['recordFormat'] === null) {
            $invalidProperties[] = "'recordFormat' can't be null";
        }
        if ($this->container['obsAddr'] === null) {
            $invalidProperties[] = "'obsAddr' can't be null";
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
    * Gets recordFormat
    *  录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\VideoFormatVar[]
    */
    public function getRecordFormat()
    {
        return $this->container['recordFormat'];
    }

    /**
    * Sets recordFormat
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\VideoFormatVar[] $recordFormat 录制格式，当前支持：FLV，HLS，MP4三种格式，设置格式时必须使用大写字母
    *
    * @return $this
    */
    public function setRecordFormat($recordFormat)
    {
        $this->container['recordFormat'] = $recordFormat;
        return $this;
    }

    /**
    * Gets obsAddr
    *  obsAddr
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\RecordObsFileAddr
    */
    public function getObsAddr()
    {
        return $this->container['obsAddr'];
    }

    /**
    * Sets obsAddr
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\RecordObsFileAddr $obsAddr obsAddr
    *
    * @return $this
    */
    public function setObsAddr($obsAddr)
    {
        $this->container['obsAddr'] = $obsAddr;
        return $this;
    }

    /**
    * Gets hlsConfig
    *  hlsConfig
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\HLSRecordConfig|null
    */
    public function getHlsConfig()
    {
        return $this->container['hlsConfig'];
    }

    /**
    * Sets hlsConfig
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\HLSRecordConfig|null $hlsConfig hlsConfig
    *
    * @return $this
    */
    public function setHlsConfig($hlsConfig)
    {
        $this->container['hlsConfig'] = $hlsConfig;
        return $this;
    }

    /**
    * Gets flvConfig
    *  flvConfig
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\FLVRecordConfig|null
    */
    public function getFlvConfig()
    {
        return $this->container['flvConfig'];
    }

    /**
    * Sets flvConfig
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\FLVRecordConfig|null $flvConfig flvConfig
    *
    * @return $this
    */
    public function setFlvConfig($flvConfig)
    {
        $this->container['flvConfig'] = $flvConfig;
        return $this;
    }

    /**
    * Gets mp4Config
    *  mp4Config
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\MP4RecordConfig|null
    */
    public function getMp4Config()
    {
        return $this->container['mp4Config'];
    }

    /**
    * Sets mp4Config
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\MP4RecordConfig|null $mp4Config mp4Config
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

