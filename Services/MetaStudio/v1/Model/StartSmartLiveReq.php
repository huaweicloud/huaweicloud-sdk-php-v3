<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartSmartLiveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartSmartLiveReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  视频推流第三方直播平台地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\VideoConfig',
            'playPolicy' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\PlayPolicy',
            'outputUrls' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  视频推流第三方直播平台地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoConfig' => null,
        'playPolicy' => null,
        'outputUrls' => null
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
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  视频推流第三方直播平台地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoConfig' => 'video_config',
            'playPolicy' => 'play_policy',
            'outputUrls' => 'output_urls'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  视频推流第三方直播平台地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'videoConfig' => 'setVideoConfig',
            'playPolicy' => 'setPlayPolicy',
            'outputUrls' => 'setOutputUrls'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  视频推流第三方直播平台地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'videoConfig' => 'getVideoConfig',
            'playPolicy' => 'getPlayPolicy',
            'outputUrls' => 'getOutputUrls'
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
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['playPolicy'] = isset($data['playPolicy']) ? $data['playPolicy'] : null;
        $this->container['outputUrls'] = isset($data['outputUrls']) ? $data['outputUrls'] : null;
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
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\VideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\VideoConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets playPolicy
    *  playPolicy
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\PlayPolicy|null
    */
    public function getPlayPolicy()
    {
        return $this->container['playPolicy'];
    }

    /**
    * Sets playPolicy
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\PlayPolicy|null $playPolicy playPolicy
    *
    * @return $this
    */
    public function setPlayPolicy($playPolicy)
    {
        $this->container['playPolicy'] = $playPolicy;
        return $this;
    }

    /**
    * Gets outputUrls
    *  视频推流第三方直播平台地址。
    *
    * @return string[]|null
    */
    public function getOutputUrls()
    {
        return $this->container['outputUrls'];
    }

    /**
    * Sets outputUrls
    *
    * @param string[]|null $outputUrls 视频推流第三方直播平台地址。
    *
    * @return $this
    */
    public function setOutputUrls($outputUrls)
    {
        $this->container['outputUrls'] = $outputUrls;
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

