<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyTransTemplateGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyTransTemplateGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  模板组ID
    * name  模板组名称
    * videos  视频信息列表
    * audio  audio
    * videoCommon  videoCommon
    * common  common
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'name' => 'string',
            'videos' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoObj[]',
            'audio' => '\HuaweiCloud\SDK\Mpc\V1\Model\Audio',
            'videoCommon' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoCommon',
            'common' => '\HuaweiCloud\SDK\Mpc\V1\Model\Common'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  模板组ID
    * name  模板组名称
    * videos  视频信息列表
    * audio  audio
    * videoCommon  videoCommon
    * common  common
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'name' => null,
        'videos' => null,
        'audio' => null,
        'videoCommon' => null,
        'common' => null
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
    * groupId  模板组ID
    * name  模板组名称
    * videos  视频信息列表
    * audio  audio
    * videoCommon  videoCommon
    * common  common
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'name' => 'name',
            'videos' => 'videos',
            'audio' => 'audio',
            'videoCommon' => 'video_common',
            'common' => 'common'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  模板组ID
    * name  模板组名称
    * videos  视频信息列表
    * audio  audio
    * videoCommon  videoCommon
    * common  common
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'name' => 'setName',
            'videos' => 'setVideos',
            'audio' => 'setAudio',
            'videoCommon' => 'setVideoCommon',
            'common' => 'setCommon'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  模板组ID
    * name  模板组名称
    * videos  视频信息列表
    * audio  audio
    * videoCommon  videoCommon
    * common  common
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'name' => 'getName',
            'videos' => 'getVideos',
            'audio' => 'getAudio',
            'videoCommon' => 'getVideoCommon',
            'common' => 'getCommon'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['videos'] = isset($data['videos']) ? $data['videos'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
        $this->container['videoCommon'] = isset($data['videoCommon']) ? $data['videoCommon'] : null;
        $this->container['common'] = isset($data['common']) ? $data['common'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets groupId
    *  模板组ID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 模板组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets name
    *  模板组名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 模板组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets videos
    *  视频信息列表
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoObj[]|null
    */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
    * Sets videos
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoObj[]|null $videos 视频信息列表
    *
    * @return $this
    */
    public function setVideos($videos)
    {
        $this->container['videos'] = $videos;
        return $this;
    }

    /**
    * Gets audio
    *  audio
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Audio|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Audio|null $audio audio
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
        return $this;
    }

    /**
    * Gets videoCommon
    *  videoCommon
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoCommon|null
    */
    public function getVideoCommon()
    {
        return $this->container['videoCommon'];
    }

    /**
    * Sets videoCommon
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoCommon|null $videoCommon videoCommon
    *
    * @return $this
    */
    public function setVideoCommon($videoCommon)
    {
        $this->container['videoCommon'] = $videoCommon;
        return $this;
    }

    /**
    * Gets common
    *  common
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Common|null
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Common|null $common common
    *
    * @return $this
    */
    public function setCommon($common)
    {
        $this->container['common'] = $common;
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

