<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputAssetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputAssetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  输出视频资产ID。
    * assetName  输出视频资产名称。
    * coverUrl  视频封面URL。
    * previewVideoUrl  预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetName' => 'string',
            'coverUrl' => 'string',
            'previewVideoUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  输出视频资产ID。
    * assetName  输出视频资产名称。
    * coverUrl  视频封面URL。
    * previewVideoUrl  预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetName' => null,
        'coverUrl' => null,
        'previewVideoUrl' => null
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
    * assetId  输出视频资产ID。
    * assetName  输出视频资产名称。
    * coverUrl  视频封面URL。
    * previewVideoUrl  预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetName' => 'asset_name',
            'coverUrl' => 'cover_url',
            'previewVideoUrl' => 'preview_video_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  输出视频资产ID。
    * assetName  输出视频资产名称。
    * coverUrl  视频封面URL。
    * previewVideoUrl  预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetName' => 'setAssetName',
            'coverUrl' => 'setCoverUrl',
            'previewVideoUrl' => 'setPreviewVideoUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  输出视频资产ID。
    * assetName  输出视频资产名称。
    * coverUrl  视频封面URL。
    * previewVideoUrl  预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetName' => 'getAssetName',
            'coverUrl' => 'getCoverUrl',
            'previewVideoUrl' => 'getPreviewVideoUrl'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
        $this->container['previewVideoUrl'] = isset($data['previewVideoUrl']) ? $data['previewVideoUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
            if ((mb_strlen($this->container['assetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['assetName'] === null) {
            $invalidProperties[] = "'assetName' can't be null";
        }
            if ((mb_strlen($this->container['assetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['previewVideoUrl']) && (mb_strlen($this->container['previewVideoUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'previewVideoUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['previewVideoUrl']) && (mb_strlen($this->container['previewVideoUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'previewVideoUrl', the character length must be bigger than or equal to 1.";
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
    * Gets assetId
    *  输出视频资产ID。
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 输出视频资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
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
    * Gets coverUrl
    *  视频封面URL。
    *
    * @return string|null
    */
    public function getCoverUrl()
    {
        return $this->container['coverUrl'];
    }

    /**
    * Sets coverUrl
    *
    * @param string|null $coverUrl 视频封面URL。
    *
    * @return $this
    */
    public function setCoverUrl($coverUrl)
    {
        $this->container['coverUrl'] = $coverUrl;
        return $this;
    }

    /**
    * Gets previewVideoUrl
    *  预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @return string|null
    */
    public function getPreviewVideoUrl()
    {
        return $this->container['previewVideoUrl'];
    }

    /**
    * Sets previewVideoUrl
    *
    * @param string|null $previewVideoUrl 预览视频下载URL。URL有效期24小时。 > * 分身数字人视频制作不支持预览。
    *
    * @return $this
    */
    public function setPreviewVideoUrl($previewVideoUrl)
    {
        $this->container['previewVideoUrl'] = $previewVideoUrl;
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

