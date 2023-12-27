<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartLayerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartLayerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * layerType  图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    * position  position
    * size  size
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'layerType' => 'string',
            'position' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerPositionConfig',
            'size' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerSizeConfig',
            'imageConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartImageLayerConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartVideoLayerConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * layerType  图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    * position  position
    * size  size
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'layerType' => null,
        'position' => null,
        'size' => null,
        'imageConfig' => null,
        'videoConfig' => null
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
    * layerType  图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    * position  position
    * size  size
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'layerType' => 'layer_type',
            'position' => 'position',
            'size' => 'size',
            'imageConfig' => 'image_config',
            'videoConfig' => 'video_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * layerType  图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    * position  position
    * size  size
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'layerType' => 'setLayerType',
            'position' => 'setPosition',
            'size' => 'setSize',
            'imageConfig' => 'setImageConfig',
            'videoConfig' => 'setVideoConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * layerType  图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    * position  position
    * size  size
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'layerType' => 'getLayerType',
            'position' => 'getPosition',
            'size' => 'getSize',
            'imageConfig' => 'getImageConfig',
            'videoConfig' => 'getVideoConfig'
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
    const LAYER_TYPE_IMAGE = 'IMAGE';
    const LAYER_TYPE_VIDEO = 'VIDEO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLayerTypeAllowableValues()
    {
        return [
            self::LAYER_TYPE_IMAGE,
            self::LAYER_TYPE_VIDEO,
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
        $this->container['layerType'] = isset($data['layerType']) ? $data['layerType'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['imageConfig'] = isset($data['imageConfig']) ? $data['imageConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['layerType'] === null) {
            $invalidProperties[] = "'layerType' can't be null";
        }
            $allowedValues = $this->getLayerTypeAllowableValues();
                if (!is_null($this->container['layerType']) && !in_array($this->container['layerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'layerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
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
    * Gets layerType
    *  图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    *
    * @return string
    */
    public function getLayerType()
    {
        return $this->container['layerType'];
    }

    /**
    * Sets layerType
    *
    * @param string $layerType 图层类型。 - IMAGE： 素材图片图层 - VIDEO： 素材视频图层
    *
    * @return $this
    */
    public function setLayerType($layerType)
    {
        $this->container['layerType'] = $layerType;
        return $this;
    }

    /**
    * Gets position
    *  position
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerPositionConfig
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerPositionConfig $position position
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets size
    *  size
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerSizeConfig|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerSizeConfig|null $size size
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets imageConfig
    *  imageConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartImageLayerConfig|null
    */
    public function getImageConfig()
    {
        return $this->container['imageConfig'];
    }

    /**
    * Sets imageConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartImageLayerConfig|null $imageConfig imageConfig
    *
    * @return $this
    */
    public function setImageConfig($imageConfig)
    {
        $this->container['imageConfig'] = $imageConfig;
        return $this;
    }

    /**
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartVideoLayerConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartVideoLayerConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
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

