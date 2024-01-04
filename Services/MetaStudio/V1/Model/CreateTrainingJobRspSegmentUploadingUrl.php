<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTrainingJobRspSegmentUploadingUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTrainingJobRsp_segment_uploading_url';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioUploadingUrl  音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    * txtUploadingUrl  文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioUploadingUrl' => 'string[]',
            'txtUploadingUrl' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioUploadingUrl  音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    * txtUploadingUrl  文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioUploadingUrl' => null,
        'txtUploadingUrl' => null
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
    * audioUploadingUrl  音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    * txtUploadingUrl  文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioUploadingUrl' => 'audio_uploading_url',
            'txtUploadingUrl' => 'txt_uploading_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioUploadingUrl  音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    * txtUploadingUrl  文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @var string[]
    */
    protected static $setters = [
            'audioUploadingUrl' => 'setAudioUploadingUrl',
            'txtUploadingUrl' => 'setTxtUploadingUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioUploadingUrl  音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    * txtUploadingUrl  文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @var string[]
    */
    protected static $getters = [
            'audioUploadingUrl' => 'getAudioUploadingUrl',
            'txtUploadingUrl' => 'getTxtUploadingUrl'
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
        $this->container['audioUploadingUrl'] = isset($data['audioUploadingUrl']) ? $data['audioUploadingUrl'] : null;
        $this->container['txtUploadingUrl'] = isset($data['txtUploadingUrl']) ? $data['txtUploadingUrl'] : null;
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
    * Gets audioUploadingUrl
    *  音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    *
    * @return string[]|null
    */
    public function getAudioUploadingUrl()
    {
        return $this->container['audioUploadingUrl'];
    }

    /**
    * Sets audioUploadingUrl
    *
    * @param string[]|null $audioUploadingUrl 音频上传的地址。 > * 通过该obs地址上传时需设置content-type为audio/wav
    *
    * @return $this
    */
    public function setAudioUploadingUrl($audioUploadingUrl)
    {
        $this->container['audioUploadingUrl'] = $audioUploadingUrl;
        return $this;
    }

    /**
    * Gets txtUploadingUrl
    *  文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @return string[]|null
    */
    public function getTxtUploadingUrl()
    {
        return $this->container['txtUploadingUrl'];
    }

    /**
    * Sets txtUploadingUrl
    *
    * @param string[]|null $txtUploadingUrl 文本上传的地址。 > * 通过该obs地址上传时需设置content-type为text/plain
    *
    * @return $this
    */
    public function setTxtUploadingUrl($txtUploadingUrl)
    {
        $this->container['txtUploadingUrl'] = $txtUploadingUrl;
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

