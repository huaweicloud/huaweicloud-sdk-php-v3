<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualityEnhanceVideo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualityEnhanceVideo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoDenoise  videoDenoise
    * videoSharp  videoSharp
    * videoContrast  videoContrast
    * videoSuperresolution  videoSuperresolution
    * videoDeblock  videoDeblock
    * videoSaturation  videoSaturation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoDenoise' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoDenoise',
            'videoSharp' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoSharp',
            'videoContrast' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoContrast',
            'videoSuperresolution' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoSuperresolution',
            'videoDeblock' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoDeblock',
            'videoSaturation' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoSaturation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoDenoise  videoDenoise
    * videoSharp  videoSharp
    * videoContrast  videoContrast
    * videoSuperresolution  videoSuperresolution
    * videoDeblock  videoDeblock
    * videoSaturation  videoSaturation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoDenoise' => null,
        'videoSharp' => null,
        'videoContrast' => null,
        'videoSuperresolution' => null,
        'videoDeblock' => null,
        'videoSaturation' => null
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
    * videoDenoise  videoDenoise
    * videoSharp  videoSharp
    * videoContrast  videoContrast
    * videoSuperresolution  videoSuperresolution
    * videoDeblock  videoDeblock
    * videoSaturation  videoSaturation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoDenoise' => 'video_denoise',
            'videoSharp' => 'video_sharp',
            'videoContrast' => 'video_contrast',
            'videoSuperresolution' => 'video_superresolution',
            'videoDeblock' => 'video_deblock',
            'videoSaturation' => 'video_saturation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoDenoise  videoDenoise
    * videoSharp  videoSharp
    * videoContrast  videoContrast
    * videoSuperresolution  videoSuperresolution
    * videoDeblock  videoDeblock
    * videoSaturation  videoSaturation
    *
    * @var string[]
    */
    protected static $setters = [
            'videoDenoise' => 'setVideoDenoise',
            'videoSharp' => 'setVideoSharp',
            'videoContrast' => 'setVideoContrast',
            'videoSuperresolution' => 'setVideoSuperresolution',
            'videoDeblock' => 'setVideoDeblock',
            'videoSaturation' => 'setVideoSaturation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoDenoise  videoDenoise
    * videoSharp  videoSharp
    * videoContrast  videoContrast
    * videoSuperresolution  videoSuperresolution
    * videoDeblock  videoDeblock
    * videoSaturation  videoSaturation
    *
    * @var string[]
    */
    protected static $getters = [
            'videoDenoise' => 'getVideoDenoise',
            'videoSharp' => 'getVideoSharp',
            'videoContrast' => 'getVideoContrast',
            'videoSuperresolution' => 'getVideoSuperresolution',
            'videoDeblock' => 'getVideoDeblock',
            'videoSaturation' => 'getVideoSaturation'
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
        $this->container['videoDenoise'] = isset($data['videoDenoise']) ? $data['videoDenoise'] : null;
        $this->container['videoSharp'] = isset($data['videoSharp']) ? $data['videoSharp'] : null;
        $this->container['videoContrast'] = isset($data['videoContrast']) ? $data['videoContrast'] : null;
        $this->container['videoSuperresolution'] = isset($data['videoSuperresolution']) ? $data['videoSuperresolution'] : null;
        $this->container['videoDeblock'] = isset($data['videoDeblock']) ? $data['videoDeblock'] : null;
        $this->container['videoSaturation'] = isset($data['videoSaturation']) ? $data['videoSaturation'] : null;
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
    * Gets videoDenoise
    *  videoDenoise
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoDenoise|null
    */
    public function getVideoDenoise()
    {
        return $this->container['videoDenoise'];
    }

    /**
    * Sets videoDenoise
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoDenoise|null $videoDenoise videoDenoise
    *
    * @return $this
    */
    public function setVideoDenoise($videoDenoise)
    {
        $this->container['videoDenoise'] = $videoDenoise;
        return $this;
    }

    /**
    * Gets videoSharp
    *  videoSharp
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoSharp|null
    */
    public function getVideoSharp()
    {
        return $this->container['videoSharp'];
    }

    /**
    * Sets videoSharp
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoSharp|null $videoSharp videoSharp
    *
    * @return $this
    */
    public function setVideoSharp($videoSharp)
    {
        $this->container['videoSharp'] = $videoSharp;
        return $this;
    }

    /**
    * Gets videoContrast
    *  videoContrast
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoContrast|null
    */
    public function getVideoContrast()
    {
        return $this->container['videoContrast'];
    }

    /**
    * Sets videoContrast
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoContrast|null $videoContrast videoContrast
    *
    * @return $this
    */
    public function setVideoContrast($videoContrast)
    {
        $this->container['videoContrast'] = $videoContrast;
        return $this;
    }

    /**
    * Gets videoSuperresolution
    *  videoSuperresolution
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoSuperresolution|null
    */
    public function getVideoSuperresolution()
    {
        return $this->container['videoSuperresolution'];
    }

    /**
    * Sets videoSuperresolution
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoSuperresolution|null $videoSuperresolution videoSuperresolution
    *
    * @return $this
    */
    public function setVideoSuperresolution($videoSuperresolution)
    {
        $this->container['videoSuperresolution'] = $videoSuperresolution;
        return $this;
    }

    /**
    * Gets videoDeblock
    *  videoDeblock
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoDeblock|null
    */
    public function getVideoDeblock()
    {
        return $this->container['videoDeblock'];
    }

    /**
    * Sets videoDeblock
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoDeblock|null $videoDeblock videoDeblock
    *
    * @return $this
    */
    public function setVideoDeblock($videoDeblock)
    {
        $this->container['videoDeblock'] = $videoDeblock;
        return $this;
    }

    /**
    * Gets videoSaturation
    *  videoSaturation
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoSaturation|null
    */
    public function getVideoSaturation()
    {
        return $this->container['videoSaturation'];
    }

    /**
    * Sets videoSaturation
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoSaturation|null $videoSaturation videoSaturation
    *
    * @return $this
    */
    public function setVideoSaturation($videoSaturation)
    {
        $this->container['videoSaturation'] = $videoSaturation;
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

