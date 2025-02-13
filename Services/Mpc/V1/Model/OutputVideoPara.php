<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputVideoPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputVideoPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  输出视频对应的模板ID
    * size  视频大小
    * pack  视频封装格式
    * video  video
    * audio  audio
    * fileName  输出片源文件名
    * manifestName  独立mpd索引文件名
    * converDuration  折算后视频时长
    * error  error
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'int',
            'size' => 'int',
            'pack' => 'string',
            'video' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo',
            'audio' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo',
            'fileName' => 'string',
            'manifestName' => 'string',
            'converDuration' => 'double',
            'error' => '\HuaweiCloud\SDK\Mpc\V1\Model\XCodeError'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  输出视频对应的模板ID
    * size  视频大小
    * pack  视频封装格式
    * video  video
    * audio  audio
    * fileName  输出片源文件名
    * manifestName  独立mpd索引文件名
    * converDuration  折算后视频时长
    * error  error
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => 'int32',
        'size' => 'int64',
        'pack' => null,
        'video' => null,
        'audio' => null,
        'fileName' => null,
        'manifestName' => null,
        'converDuration' => 'double',
        'error' => null
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
    * templateId  输出视频对应的模板ID
    * size  视频大小
    * pack  视频封装格式
    * video  video
    * audio  audio
    * fileName  输出片源文件名
    * manifestName  独立mpd索引文件名
    * converDuration  折算后视频时长
    * error  error
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'size' => 'size',
            'pack' => 'pack',
            'video' => 'video',
            'audio' => 'audio',
            'fileName' => 'file_name',
            'manifestName' => 'manifest_name',
            'converDuration' => 'conver_duration',
            'error' => 'error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  输出视频对应的模板ID
    * size  视频大小
    * pack  视频封装格式
    * video  video
    * audio  audio
    * fileName  输出片源文件名
    * manifestName  独立mpd索引文件名
    * converDuration  折算后视频时长
    * error  error
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'size' => 'setSize',
            'pack' => 'setPack',
            'video' => 'setVideo',
            'audio' => 'setAudio',
            'fileName' => 'setFileName',
            'manifestName' => 'setManifestName',
            'converDuration' => 'setConverDuration',
            'error' => 'setError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  输出视频对应的模板ID
    * size  视频大小
    * pack  视频封装格式
    * video  video
    * audio  audio
    * fileName  输出片源文件名
    * manifestName  独立mpd索引文件名
    * converDuration  折算后视频时长
    * error  error
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'size' => 'getSize',
            'pack' => 'getPack',
            'video' => 'getVideo',
            'audio' => 'getAudio',
            'fileName' => 'getFileName',
            'manifestName' => 'getManifestName',
            'converDuration' => 'getConverDuration',
            'error' => 'getError'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['pack'] = isset($data['pack']) ? $data['pack'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['manifestName'] = isset($data['manifestName']) ? $data['manifestName'] : null;
        $this->container['converDuration'] = isset($data['converDuration']) ? $data['converDuration'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && ($this->container['templateId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'templateId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['templateId']) && ($this->container['templateId'] < 0)) {
                $invalidProperties[] = "invalid value for 'templateId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pack']) && (mb_strlen($this->container['pack']) > 64)) {
                $invalidProperties[] = "invalid value for 'pack', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pack']) && (mb_strlen($this->container['pack']) < 0)) {
                $invalidProperties[] = "invalid value for 'pack', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['manifestName']) && (mb_strlen($this->container['manifestName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'manifestName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['manifestName']) && (mb_strlen($this->container['manifestName']) < 0)) {
                $invalidProperties[] = "invalid value for 'manifestName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['converDuration']) && ($this->container['converDuration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'converDuration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['converDuration']) && ($this->container['converDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'converDuration', must be bigger than or equal to 0.";
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
    * Gets templateId
    *  输出视频对应的模板ID
    *
    * @return int|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int|null $templateId 输出视频对应的模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets size
    *  视频大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 视频大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets pack
    *  视频封装格式
    *
    * @return string|null
    */
    public function getPack()
    {
        return $this->container['pack'];
    }

    /**
    * Sets pack
    *
    * @param string|null $pack 视频封装格式
    *
    * @return $this
    */
    public function setPack($pack)
    {
        $this->container['pack'] = $pack;
        return $this;
    }

    /**
    * Gets video
    *  video
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo|null $video video
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
        return $this;
    }

    /**
    * Gets audio
    *  audio
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo|null $audio audio
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
        return $this;
    }

    /**
    * Gets fileName
    *  输出片源文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 输出片源文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets manifestName
    *  独立mpd索引文件名
    *
    * @return string|null
    */
    public function getManifestName()
    {
        return $this->container['manifestName'];
    }

    /**
    * Sets manifestName
    *
    * @param string|null $manifestName 独立mpd索引文件名
    *
    * @return $this
    */
    public function setManifestName($manifestName)
    {
        $this->container['manifestName'] = $manifestName;
        return $this;
    }

    /**
    * Gets converDuration
    *  折算后视频时长
    *
    * @return double|null
    */
    public function getConverDuration()
    {
        return $this->container['converDuration'];
    }

    /**
    * Sets converDuration
    *
    * @param double|null $converDuration 折算后视频时长
    *
    * @return $this
    */
    public function setConverDuration($converDuration)
    {
        $this->container['converDuration'] = $converDuration;
        return $this;
    }

    /**
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\XCodeError|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\XCodeError|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
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

