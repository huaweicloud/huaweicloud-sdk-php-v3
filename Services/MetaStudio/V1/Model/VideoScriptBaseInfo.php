<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoScriptBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoScriptBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptId  剧本ID。
    * scriptName  剧本名称。
    * scriptDescription  剧本描述。
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    * scriptCoverUrl  剧本封面下载url。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  台词脚本。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptId' => 'string',
            'scriptName' => 'string',
            'scriptDescription' => 'string',
            'modelAssetId' => 'string',
            'modelAssetType' => 'string',
            'scriptCoverUrl' => 'string',
            'scriptType' => 'string',
            'text' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptId  剧本ID。
    * scriptName  剧本名称。
    * scriptDescription  剧本描述。
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    * scriptCoverUrl  剧本封面下载url。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  台词脚本。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptId' => null,
        'scriptName' => null,
        'scriptDescription' => null,
        'modelAssetId' => null,
        'modelAssetType' => null,
        'scriptCoverUrl' => null,
        'scriptType' => null,
        'text' => null,
        'createTime' => null,
        'updateTime' => null
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
    * scriptId  剧本ID。
    * scriptName  剧本名称。
    * scriptDescription  剧本描述。
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    * scriptCoverUrl  剧本封面下载url。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  台词脚本。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptId' => 'script_id',
            'scriptName' => 'script_name',
            'scriptDescription' => 'script_description',
            'modelAssetId' => 'model_asset_id',
            'modelAssetType' => 'model_asset_type',
            'scriptCoverUrl' => 'script_cover_url',
            'scriptType' => 'script_type',
            'text' => 'text',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptId  剧本ID。
    * scriptName  剧本名称。
    * scriptDescription  剧本描述。
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    * scriptCoverUrl  剧本封面下载url。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  台词脚本。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptId' => 'setScriptId',
            'scriptName' => 'setScriptName',
            'scriptDescription' => 'setScriptDescription',
            'modelAssetId' => 'setModelAssetId',
            'modelAssetType' => 'setModelAssetType',
            'scriptCoverUrl' => 'setScriptCoverUrl',
            'scriptType' => 'setScriptType',
            'text' => 'setText',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptId  剧本ID。
    * scriptName  剧本名称。
    * scriptDescription  剧本描述。
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    * scriptCoverUrl  剧本封面下载url。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  台词脚本。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptId' => 'getScriptId',
            'scriptName' => 'getScriptName',
            'scriptDescription' => 'getScriptDescription',
            'modelAssetId' => 'getModelAssetId',
            'modelAssetType' => 'getModelAssetType',
            'scriptCoverUrl' => 'getScriptCoverUrl',
            'scriptType' => 'getScriptType',
            'text' => 'getText',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const MODEL_ASSET_TYPE_HUMAN_MODEL_2_D = 'HUMAN_MODEL_2D';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelAssetTypeAllowableValues()
    {
        return [
            self::MODEL_ASSET_TYPE_HUMAN_MODEL_2_D,
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
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['scriptDescription'] = isset($data['scriptDescription']) ? $data['scriptDescription'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['modelAssetType'] = isset($data['modelAssetType']) ? $data['modelAssetType'] : null;
        $this->container['scriptCoverUrl'] = isset($data['scriptCoverUrl']) ? $data['scriptCoverUrl'] : null;
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scriptId'] === null) {
            $invalidProperties[] = "'scriptId' can't be null";
        }
            if ((mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scriptName'] === null) {
            $invalidProperties[] = "'scriptName' can't be null";
        }
            if ((mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptDescription']) && (mb_strlen($this->container['scriptDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'scriptDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['scriptDescription']) && (mb_strlen($this->container['scriptDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'scriptDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getModelAssetTypeAllowableValues();
                if (!is_null($this->container['modelAssetType']) && !in_array($this->container['modelAssetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelAssetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scriptCoverUrl']) && (mb_strlen($this->container['scriptCoverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'scriptCoverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['scriptCoverUrl']) && (mb_strlen($this->container['scriptCoverUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptCoverUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptType']) && (mb_strlen($this->container['scriptType']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scriptType']) && (mb_strlen($this->container['scriptType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 131072)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 1)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets scriptId
    *  剧本ID。
    *
    * @return string
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string $scriptId 剧本ID。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets scriptName
    *  剧本名称。
    *
    * @return string
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string $scriptName 剧本名称。
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets scriptDescription
    *  剧本描述。
    *
    * @return string|null
    */
    public function getScriptDescription()
    {
        return $this->container['scriptDescription'];
    }

    /**
    * Sets scriptDescription
    *
    * @param string|null $scriptDescription 剧本描述。
    *
    * @return $this
    */
    public function setScriptDescription($scriptDescription)
    {
        $this->container['scriptDescription'] = $scriptDescription;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  数字人模型资产ID，可以从资产库中查询。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 数字人模型资产ID，可以从资产库中查询。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets modelAssetType
    *  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    *
    * @return string|null
    */
    public function getModelAssetType()
    {
        return $this->container['modelAssetType'];
    }

    /**
    * Sets modelAssetType
    *
    * @param string|null $modelAssetType 数字人模型类型。  * HUMAN_MODEL_2D：分身数字人
    *
    * @return $this
    */
    public function setModelAssetType($modelAssetType)
    {
        $this->container['modelAssetType'] = $modelAssetType;
        return $this;
    }

    /**
    * Gets scriptCoverUrl
    *  剧本封面下载url。
    *
    * @return string|null
    */
    public function getScriptCoverUrl()
    {
        return $this->container['scriptCoverUrl'];
    }

    /**
    * Sets scriptCoverUrl
    *
    * @param string|null $scriptCoverUrl 剧本封面下载url。
    *
    * @return $this
    */
    public function setScriptCoverUrl($scriptCoverUrl)
    {
        $this->container['scriptCoverUrl'] = $scriptCoverUrl;
        return $this;
    }

    /**
    * Gets scriptType
    *  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    *
    * @return string|null
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param string|null $scriptType 脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets text
    *  台词脚本。
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 台词脚本。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

