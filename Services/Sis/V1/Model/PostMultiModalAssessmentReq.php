<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostMultiModalAssessmentReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostMultiModalAssessmentReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * config  config
    * videoData  视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    * refText  被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'config' => '\HuaweiCloud\SDK\Sis\V1\Model\MultiModalConfig',
            'videoData' => 'string',
            'refText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * config  config
    * videoData  视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    * refText  被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'config' => null,
        'videoData' => null,
        'refText' => null
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
    * config  config
    * videoData  视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    * refText  被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'config' => 'config',
            'videoData' => 'video_data',
            'refText' => 'ref_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * config  config
    * videoData  视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    * refText  被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'config' => 'setConfig',
            'videoData' => 'setVideoData',
            'refText' => 'setRefText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * config  config
    * videoData  视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    * refText  被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'config' => 'getConfig',
            'videoData' => 'getVideoData',
            'refText' => 'getRefText'
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
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['videoData'] = isset($data['videoData']) ? $data['videoData'] : null;
        $this->container['refText'] = isset($data['refText']) ? $data['refText'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['videoData'] === null) {
            $invalidProperties[] = "'videoData' can't be null";
        }
            if ((mb_strlen($this->container['videoData']) > 10485760)) {
                $invalidProperties[] = "invalid value for 'videoData', the character length must be smaller than or equal to 10485760.";
            }
            if ((mb_strlen($this->container['videoData']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoData', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['refText'] === null) {
            $invalidProperties[] = "'refText' can't be null";
        }
            if ((mb_strlen($this->container['refText']) > 256)) {
                $invalidProperties[] = "invalid value for 'refText', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['refText']) < 0)) {
                $invalidProperties[] = "invalid value for 'refText', the character length must be bigger than or equal to 0.";
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
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\MultiModalConfig
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\MultiModalConfig $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets videoData
    *  视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    *
    * @return string
    */
    public function getVideoData()
    {
        return $this->container['videoData'];
    }

    /**
    * Sets videoData
    *
    * @param string $videoData 视频数据，Base64编码，要求Base64编码后大小不超过10M。  注意评测接口使用次数定义为：每8秒的视频作为一次，不足8秒按一次计算。例如传入4秒或8秒的视频，都算作使用一次，传入9秒的视频则视为调用2次。
    *
    * @return $this
    */
    public function setVideoData($videoData)
    {
        $this->container['videoData'] = $videoData;
        return $this;
    }

    /**
    * Gets refText
    *  被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @return string
    */
    public function getRefText()
    {
        return $this->container['refText'];
    }

    /**
    * Sets refText
    *
    * @param string $refText 被评估视频和语音数据对应的试题文本，长度不可超过256字节。
    *
    * @return $this
    */
    public function setRefText($refText)
    {
        $this->container['refText'] = $refText;
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

