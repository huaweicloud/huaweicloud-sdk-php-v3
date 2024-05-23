<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHotWordsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHotWordsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hotWordsId  热词记录ID。
    * robotId  应用ID。
    * hotWordsType  hotWordsType
    * vocabularyId  热词ID(sis中配置)。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hotWordsId' => 'string',
            'robotId' => 'string',
            'hotWordsType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HotWordsTypeEnum',
            'vocabularyId' => 'string',
            'sisProjectId' => 'string',
            'region' => 'int',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'createTime' => 'string',
            'updateTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hotWordsId  热词记录ID。
    * robotId  应用ID。
    * hotWordsType  hotWordsType
    * vocabularyId  热词ID(sis中配置)。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hotWordsId' => null,
        'robotId' => null,
        'hotWordsType' => null,
        'vocabularyId' => null,
        'sisProjectId' => null,
        'region' => null,
        'language' => null,
        'createTime' => null,
        'updateTime' => null,
        'xRequestId' => null
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
    * hotWordsId  热词记录ID。
    * robotId  应用ID。
    * hotWordsType  hotWordsType
    * vocabularyId  热词ID(sis中配置)。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hotWordsId' => 'hot_words_id',
            'robotId' => 'robot_id',
            'hotWordsType' => 'hot_words_type',
            'vocabularyId' => 'vocabulary_id',
            'sisProjectId' => 'sis_project_id',
            'region' => 'region',
            'language' => 'language',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hotWordsId  热词记录ID。
    * robotId  应用ID。
    * hotWordsType  hotWordsType
    * vocabularyId  热词ID(sis中配置)。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'hotWordsId' => 'setHotWordsId',
            'robotId' => 'setRobotId',
            'hotWordsType' => 'setHotWordsType',
            'vocabularyId' => 'setVocabularyId',
            'sisProjectId' => 'setSisProjectId',
            'region' => 'setRegion',
            'language' => 'setLanguage',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hotWordsId  热词记录ID。
    * robotId  应用ID。
    * hotWordsType  hotWordsType
    * vocabularyId  热词ID(sis中配置)。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'hotWordsId' => 'getHotWordsId',
            'robotId' => 'getRobotId',
            'hotWordsType' => 'getHotWordsType',
            'vocabularyId' => 'getVocabularyId',
            'sisProjectId' => 'getSisProjectId',
            'region' => 'getRegion',
            'language' => 'getLanguage',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'xRequestId' => 'getXRequestId'
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
        $this->container['hotWordsId'] = isset($data['hotWordsId']) ? $data['hotWordsId'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['hotWordsType'] = isset($data['hotWordsType']) ? $data['hotWordsType'] : null;
        $this->container['vocabularyId'] = isset($data['vocabularyId']) ? $data['vocabularyId'] : null;
        $this->container['sisProjectId'] = isset($data['sisProjectId']) ? $data['sisProjectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hotWordsId']) && (mb_strlen($this->container['hotWordsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hotWordsId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hotWordsId']) && (mb_strlen($this->container['hotWordsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hotWordsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vocabularyId']) && (mb_strlen($this->container['vocabularyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vocabularyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vocabularyId']) && (mb_strlen($this->container['vocabularyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vocabularyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] > 32)) {
                $invalidProperties[] = "invalid value for 'region', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] < 0)) {
                $invalidProperties[] = "invalid value for 'region', must be bigger than or equal to 0.";
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
    * Gets hotWordsId
    *  热词记录ID。
    *
    * @return string|null
    */
    public function getHotWordsId()
    {
        return $this->container['hotWordsId'];
    }

    /**
    * Sets hotWordsId
    *
    * @param string|null $hotWordsId 热词记录ID。
    *
    * @return $this
    */
    public function setHotWordsId($hotWordsId)
    {
        $this->container['hotWordsId'] = $hotWordsId;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string|null
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string|null $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets hotWordsType
    *  hotWordsType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HotWordsTypeEnum|null
    */
    public function getHotWordsType()
    {
        return $this->container['hotWordsType'];
    }

    /**
    * Sets hotWordsType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HotWordsTypeEnum|null $hotWordsType hotWordsType
    *
    * @return $this
    */
    public function setHotWordsType($hotWordsType)
    {
        $this->container['hotWordsType'] = $hotWordsType;
        return $this;
    }

    /**
    * Gets vocabularyId
    *  热词ID(sis中配置)。
    *
    * @return string|null
    */
    public function getVocabularyId()
    {
        return $this->container['vocabularyId'];
    }

    /**
    * Sets vocabularyId
    *
    * @param string|null $vocabularyId 热词ID(sis中配置)。
    *
    * @return $this
    */
    public function setVocabularyId($vocabularyId)
    {
        $this->container['vocabularyId'] = $vocabularyId;
        return $this;
    }

    /**
    * Gets sisProjectId
    *  SIS服务所在区域projectId
    *
    * @return string|null
    */
    public function getSisProjectId()
    {
        return $this->container['sisProjectId'];
    }

    /**
    * Sets sisProjectId
    *
    * @param string|null $sisProjectId SIS服务所在区域projectId
    *
    * @return $this
    */
    public function setSisProjectId($sisProjectId)
    {
        $this->container['sisProjectId'] = $sisProjectId;
        return $this;
    }

    /**
    * Gets region
    *  对接SIS服务的区域。 > 0：北京四；3：上海一；
    *
    * @return int|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param int|null $region 对接SIS服务的区域。 > 0：北京四；3：上海一；
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

