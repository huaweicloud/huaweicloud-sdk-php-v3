<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetProcessReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetProcessReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * templateGroupName  转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * thumbnail  thumbnail
    * subtitleId  字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'templateGroupName' => 'string',
            'autoEncrypt' => 'int',
            'thumbnail' => '\HuaweiCloud\SDK\Vod\V1\Model\Thumbnail',
            'subtitleId' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * templateGroupName  转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * thumbnail  thumbnail
    * subtitleId  字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'templateGroupName' => null,
        'autoEncrypt' => null,
        'thumbnail' => null,
        'subtitleId' => null
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
    * assetId  媒资ID。
    * templateGroupName  转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * thumbnail  thumbnail
    * subtitleId  字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'templateGroupName' => 'template_group_name',
            'autoEncrypt' => 'auto_encrypt',
            'thumbnail' => 'thumbnail',
            'subtitleId' => 'subtitle_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * templateGroupName  转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * thumbnail  thumbnail
    * subtitleId  字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'templateGroupName' => 'setTemplateGroupName',
            'autoEncrypt' => 'setAutoEncrypt',
            'thumbnail' => 'setThumbnail',
            'subtitleId' => 'setSubtitleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * templateGroupName  转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * thumbnail  thumbnail
    * subtitleId  字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'templateGroupName' => 'getTemplateGroupName',
            'autoEncrypt' => 'getAutoEncrypt',
            'thumbnail' => 'getThumbnail',
            'subtitleId' => 'getSubtitleId'
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
        $this->container['templateGroupName'] = isset($data['templateGroupName']) ? $data['templateGroupName'] : null;
        $this->container['autoEncrypt'] = isset($data['autoEncrypt']) ? $data['autoEncrypt'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['subtitleId'] = isset($data['subtitleId']) ? $data['subtitleId'] : null;
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
            if (!is_null($this->container['templateGroupName']) && (mb_strlen($this->container['templateGroupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateGroupName', the character length must be smaller than or equal to 128.";
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
    *  媒资ID。
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
    * @param string $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets templateGroupName
    *  转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    *
    * @return string|null
    */
    public function getTemplateGroupName()
    {
        return $this->container['templateGroupName'];
    }

    /**
    * Sets templateGroupName
    *
    * @param string|null $templateGroupName 转码模板组名称。 若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。
    *
    * @return $this
    */
    public function setTemplateGroupName($templateGroupName)
    {
        $this->container['templateGroupName'] = $templateGroupName;
        return $this;
    }

    /**
    * Gets autoEncrypt
    *  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    *
    * @return int|null
    */
    public function getAutoEncrypt()
    {
        return $this->container['autoEncrypt'];
    }

    /**
    * Sets autoEncrypt
    *
    * @param int|null $autoEncrypt 是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    *
    * @return $this
    */
    public function setAutoEncrypt($autoEncrypt)
    {
        $this->container['autoEncrypt'] = $autoEncrypt;
        return $this;
    }

    /**
    * Gets thumbnail
    *  thumbnail
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\Thumbnail|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\Thumbnail|null $thumbnail thumbnail
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets subtitleId
    *  字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @return int[]|null
    */
    public function getSubtitleId()
    {
        return $this->container['subtitleId'];
    }

    /**
    * Sets subtitleId
    *
    * @param int[]|null $subtitleId 字幕文件ID。  > 仅在[创建媒资](https://support.huaweicloud.com/api-vod/vod_04_0196.html)时，请求参数设置了“**subtitles**”时，该参数设置才生效。
    *
    * @return $this
    */
    public function setSubtitleId($subtitleId)
    {
        $this->container['subtitleId'] = $subtitleId;
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

