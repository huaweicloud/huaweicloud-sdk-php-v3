<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * video  video
    * audio  audio
    * common  common
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'video' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoParameters',
            'audio' => '\HuaweiCloud\SDK\Mpc\V1\Model\Audio',
            'common' => '\HuaweiCloud\SDK\Mpc\V1\Model\Common'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * video  video
    * audio  audio
    * common  common
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'video' => null,
        'audio' => null,
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
    * video  video
    * audio  audio
    * common  common
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'video' => 'video',
            'audio' => 'audio',
            'common' => 'common'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * video  video
    * audio  audio
    * common  common
    *
    * @var string[]
    */
    protected static $setters = [
            'video' => 'setVideo',
            'audio' => 'setAudio',
            'common' => 'setCommon'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * video  video
    * audio  audio
    * common  common
    *
    * @var string[]
    */
    protected static $getters = [
            'video' => 'getVideo',
            'audio' => 'getAudio',
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
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
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
        if ($this->container['common'] === null) {
            $invalidProperties[] = "'common' can't be null";
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
    * Gets video
    *  video
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoParameters|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoParameters|null $video video
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
    * Gets common
    *  common
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Common
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Common $common common
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

