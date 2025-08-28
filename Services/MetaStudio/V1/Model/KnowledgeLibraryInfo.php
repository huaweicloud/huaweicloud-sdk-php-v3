<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KnowledgeLibraryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KnowledgeLibraryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * knowledgeLibraryId  知识库ID。
    * name  知识库名称。
    * language  language
    * knowledgeType  knowledgeType
    * knowledgeSize  知识库大小(文档库为文档数量)
    * topk  文档库召回topk
    * score  知识库召回得分
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'knowledgeLibraryId' => 'string',
            'name' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'knowledgeType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum',
            'knowledgeSize' => 'int',
            'topk' => 'int',
            'score' => 'double',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * knowledgeLibraryId  知识库ID。
    * name  知识库名称。
    * language  language
    * knowledgeType  knowledgeType
    * knowledgeSize  知识库大小(文档库为文档数量)
    * topk  文档库召回topk
    * score  知识库召回得分
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'knowledgeLibraryId' => null,
        'name' => null,
        'language' => null,
        'knowledgeType' => null,
        'knowledgeSize' => 'int32',
        'topk' => null,
        'score' => 'double',
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
    * knowledgeLibraryId  知识库ID。
    * name  知识库名称。
    * language  language
    * knowledgeType  knowledgeType
    * knowledgeSize  知识库大小(文档库为文档数量)
    * topk  文档库召回topk
    * score  知识库召回得分
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'knowledgeLibraryId' => 'knowledge_library_id',
            'name' => 'name',
            'language' => 'language',
            'knowledgeType' => 'knowledge_type',
            'knowledgeSize' => 'knowledge_size',
            'topk' => 'topk',
            'score' => 'score',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * knowledgeLibraryId  知识库ID。
    * name  知识库名称。
    * language  language
    * knowledgeType  knowledgeType
    * knowledgeSize  知识库大小(文档库为文档数量)
    * topk  文档库召回topk
    * score  知识库召回得分
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'knowledgeLibraryId' => 'setKnowledgeLibraryId',
            'name' => 'setName',
            'language' => 'setLanguage',
            'knowledgeType' => 'setKnowledgeType',
            'knowledgeSize' => 'setKnowledgeSize',
            'topk' => 'setTopk',
            'score' => 'setScore',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * knowledgeLibraryId  知识库ID。
    * name  知识库名称。
    * language  language
    * knowledgeType  knowledgeType
    * knowledgeSize  知识库大小(文档库为文档数量)
    * topk  文档库召回topk
    * score  知识库召回得分
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'knowledgeLibraryId' => 'getKnowledgeLibraryId',
            'name' => 'getName',
            'language' => 'getLanguage',
            'knowledgeType' => 'getKnowledgeType',
            'knowledgeSize' => 'getKnowledgeSize',
            'topk' => 'getTopk',
            'score' => 'getScore',
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
        $this->container['knowledgeLibraryId'] = isset($data['knowledgeLibraryId']) ? $data['knowledgeLibraryId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['knowledgeType'] = isset($data['knowledgeType']) ? $data['knowledgeType'] : null;
        $this->container['knowledgeSize'] = isset($data['knowledgeSize']) ? $data['knowledgeSize'] : null;
        $this->container['topk'] = isset($data['topk']) ? $data['topk'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
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
            if (!is_null($this->container['knowledgeLibraryId']) && (mb_strlen($this->container['knowledgeLibraryId']) > 64)) {
                $invalidProperties[] = "invalid value for 'knowledgeLibraryId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['knowledgeLibraryId']) && (mb_strlen($this->container['knowledgeLibraryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'knowledgeLibraryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['knowledgeSize']) && ($this->container['knowledgeSize'] > 64)) {
                $invalidProperties[] = "invalid value for 'knowledgeSize', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['knowledgeSize']) && ($this->container['knowledgeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'knowledgeSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topk']) && ($this->container['topk'] > 20)) {
                $invalidProperties[] = "invalid value for 'topk', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['topk']) && ($this->container['topk'] < 1)) {
                $invalidProperties[] = "invalid value for 'topk', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] > 1)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
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
    * Gets knowledgeLibraryId
    *  知识库ID。
    *
    * @return string|null
    */
    public function getKnowledgeLibraryId()
    {
        return $this->container['knowledgeLibraryId'];
    }

    /**
    * Sets knowledgeLibraryId
    *
    * @param string|null $knowledgeLibraryId 知识库ID。
    *
    * @return $this
    */
    public function setKnowledgeLibraryId($knowledgeLibraryId)
    {
        $this->container['knowledgeLibraryId'] = $knowledgeLibraryId;
        return $this;
    }

    /**
    * Gets name
    *  知识库名称。
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
    * @param string|null $name 知识库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets knowledgeType
    *  knowledgeType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum|null
    */
    public function getKnowledgeType()
    {
        return $this->container['knowledgeType'];
    }

    /**
    * Sets knowledgeType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum|null $knowledgeType knowledgeType
    *
    * @return $this
    */
    public function setKnowledgeType($knowledgeType)
    {
        $this->container['knowledgeType'] = $knowledgeType;
        return $this;
    }

    /**
    * Gets knowledgeSize
    *  知识库大小(文档库为文档数量)
    *
    * @return int|null
    */
    public function getKnowledgeSize()
    {
        return $this->container['knowledgeSize'];
    }

    /**
    * Sets knowledgeSize
    *
    * @param int|null $knowledgeSize 知识库大小(文档库为文档数量)
    *
    * @return $this
    */
    public function setKnowledgeSize($knowledgeSize)
    {
        $this->container['knowledgeSize'] = $knowledgeSize;
        return $this;
    }

    /**
    * Gets topk
    *  文档库召回topk
    *
    * @return int|null
    */
    public function getTopk()
    {
        return $this->container['topk'];
    }

    /**
    * Sets topk
    *
    * @param int|null $topk 文档库召回topk
    *
    * @return $this
    */
    public function setTopk($topk)
    {
        $this->container['topk'] = $topk;
        return $this;
    }

    /**
    * Gets score
    *  知识库召回得分
    *
    * @return double|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param double|null $score 知识库召回得分
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
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

