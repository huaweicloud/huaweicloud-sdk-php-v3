<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecallKnowledgeLibraryRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecallKnowledgeLibraryRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * knowledgeLibraryId  知识库名称。
    * knowledgeType  knowledgeType
    * query  知识库召回请求文本
    * topk  文档库召回topk
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'knowledgeLibraryId' => 'string',
            'knowledgeType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum',
            'query' => 'string',
            'topk' => 'int',
            'score' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * knowledgeLibraryId  知识库名称。
    * knowledgeType  knowledgeType
    * query  知识库召回请求文本
    * topk  文档库召回topk
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'knowledgeLibraryId' => null,
        'knowledgeType' => null,
        'query' => null,
        'topk' => null,
        'score' => 'double'
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
    * knowledgeLibraryId  知识库名称。
    * knowledgeType  knowledgeType
    * query  知识库召回请求文本
    * topk  文档库召回topk
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'knowledgeLibraryId' => 'knowledge_library_id',
            'knowledgeType' => 'knowledge_type',
            'query' => 'query',
            'topk' => 'topk',
            'score' => 'score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * knowledgeLibraryId  知识库名称。
    * knowledgeType  knowledgeType
    * query  知识库召回请求文本
    * topk  文档库召回topk
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $setters = [
            'knowledgeLibraryId' => 'setKnowledgeLibraryId',
            'knowledgeType' => 'setKnowledgeType',
            'query' => 'setQuery',
            'topk' => 'setTopk',
            'score' => 'setScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * knowledgeLibraryId  知识库名称。
    * knowledgeType  knowledgeType
    * query  知识库召回请求文本
    * topk  文档库召回topk
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $getters = [
            'knowledgeLibraryId' => 'getKnowledgeLibraryId',
            'knowledgeType' => 'getKnowledgeType',
            'query' => 'getQuery',
            'topk' => 'getTopk',
            'score' => 'getScore'
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
        $this->container['knowledgeType'] = isset($data['knowledgeType']) ? $data['knowledgeType'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['topk'] = isset($data['topk']) ? $data['topk'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['knowledgeLibraryId'] === null) {
            $invalidProperties[] = "'knowledgeLibraryId' can't be null";
        }
            if ((mb_strlen($this->container['knowledgeLibraryId']) > 32)) {
                $invalidProperties[] = "invalid value for 'knowledgeLibraryId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['knowledgeLibraryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'knowledgeLibraryId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['knowledgeType'] === null) {
            $invalidProperties[] = "'knowledgeType' can't be null";
        }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
            if ((mb_strlen($this->container['query']) > 256)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
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
    *  知识库名称。
    *
    * @return string
    */
    public function getKnowledgeLibraryId()
    {
        return $this->container['knowledgeLibraryId'];
    }

    /**
    * Sets knowledgeLibraryId
    *
    * @param string $knowledgeLibraryId 知识库名称。
    *
    * @return $this
    */
    public function setKnowledgeLibraryId($knowledgeLibraryId)
    {
        $this->container['knowledgeLibraryId'] = $knowledgeLibraryId;
        return $this;
    }

    /**
    * Gets knowledgeType
    *  knowledgeType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum
    */
    public function getKnowledgeType()
    {
        return $this->container['knowledgeType'];
    }

    /**
    * Sets knowledgeType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum $knowledgeType knowledgeType
    *
    * @return $this
    */
    public function setKnowledgeType($knowledgeType)
    {
        $this->container['knowledgeType'] = $knowledgeType;
        return $this;
    }

    /**
    * Gets query
    *  知识库召回请求文本
    *
    * @return string
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string $query 知识库召回请求文本
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
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

