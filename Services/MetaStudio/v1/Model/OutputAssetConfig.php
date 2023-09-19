<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputAssetConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputAssetConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetName  输出视频资产名称。
    * isPreviewVideo  是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetName' => 'string',
            'isPreviewVideo' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetName  输出视频资产名称。
    * isPreviewVideo  是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetName' => null,
        'isPreviewVideo' => null
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
    * assetName  输出视频资产名称。
    * isPreviewVideo  是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetName' => 'asset_name',
            'isPreviewVideo' => 'is_preview_video'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetName  输出视频资产名称。
    * isPreviewVideo  是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetName' => 'setAssetName',
            'isPreviewVideo' => 'setIsPreviewVideo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetName  输出视频资产名称。
    * isPreviewVideo  是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetName' => 'getAssetName',
            'isPreviewVideo' => 'getIsPreviewVideo'
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
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['isPreviewVideo'] = isset($data['isPreviewVideo']) ? $data['isPreviewVideo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetName'] === null) {
            $invalidProperties[] = "'assetName' can't be null";
        }
            if ((mb_strlen($this->container['assetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
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
    * Gets assetName
    *  输出视频资产名称。
    *
    * @return string
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string $assetName 输出视频资产名称。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets isPreviewVideo
    *  是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @return bool|null
    */
    public function getIsPreviewVideo()
    {
        return $this->container['isPreviewVideo'];
    }

    /**
    * Sets isPreviewVideo
    *
    * @param bool|null $isPreviewVideo 是否是预览视频。如果是预览视频不存资产库。 > * 分身数字人视频制作不支持预览。
    *
    * @return $this
    */
    public function setIsPreviewVideo($isPreviewVideo)
    {
        $this->container['isPreviewVideo'] = $isPreviewVideo;
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

