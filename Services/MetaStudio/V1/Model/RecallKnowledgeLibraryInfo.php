<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecallKnowledgeLibraryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecallKnowledgeLibraryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * documentId  文档ID。
    * fileName  文档名称。
    * fileType  文档类型。
    * questionAnswerId  问答对ID。
    * content  召回文本
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'documentId' => 'string',
            'fileName' => 'string',
            'fileType' => 'string',
            'questionAnswerId' => 'string',
            'content' => 'string',
            'score' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * documentId  文档ID。
    * fileName  文档名称。
    * fileType  文档类型。
    * questionAnswerId  问答对ID。
    * content  召回文本
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'documentId' => null,
        'fileName' => null,
        'fileType' => null,
        'questionAnswerId' => null,
        'content' => null,
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
    * documentId  文档ID。
    * fileName  文档名称。
    * fileType  文档类型。
    * questionAnswerId  问答对ID。
    * content  召回文本
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'documentId' => 'document_id',
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'questionAnswerId' => 'question_answer_id',
            'content' => 'content',
            'score' => 'score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * documentId  文档ID。
    * fileName  文档名称。
    * fileType  文档类型。
    * questionAnswerId  问答对ID。
    * content  召回文本
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $setters = [
            'documentId' => 'setDocumentId',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'questionAnswerId' => 'setQuestionAnswerId',
            'content' => 'setContent',
            'score' => 'setScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * documentId  文档ID。
    * fileName  文档名称。
    * fileType  文档类型。
    * questionAnswerId  问答对ID。
    * content  召回文本
    * score  知识库召回得分
    *
    * @var string[]
    */
    protected static $getters = [
            'documentId' => 'getDocumentId',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'questionAnswerId' => 'getQuestionAnswerId',
            'content' => 'getContent',
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
        $this->container['documentId'] = isset($data['documentId']) ? $data['documentId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['questionAnswerId'] = isset($data['questionAnswerId']) ? $data['questionAnswerId'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
            if (!is_null($this->container['documentId']) && (mb_strlen($this->container['documentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'documentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['documentId']) && (mb_strlen($this->container['documentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'documentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['questionAnswerId']) && (mb_strlen($this->container['questionAnswerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'questionAnswerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['questionAnswerId']) && (mb_strlen($this->container['questionAnswerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'questionAnswerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 1024)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
    * Gets documentId
    *  文档ID。
    *
    * @return string|null
    */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
    * Sets documentId
    *
    * @param string|null $documentId 文档ID。
    *
    * @return $this
    */
    public function setDocumentId($documentId)
    {
        $this->container['documentId'] = $documentId;
        return $this;
    }

    /**
    * Gets fileName
    *  文档名称。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文档名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  文档类型。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 文档类型。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets questionAnswerId
    *  问答对ID。
    *
    * @return string|null
    */
    public function getQuestionAnswerId()
    {
        return $this->container['questionAnswerId'];
    }

    /**
    * Sets questionAnswerId
    *
    * @param string|null $questionAnswerId 问答对ID。
    *
    * @return $this
    */
    public function setQuestionAnswerId($questionAnswerId)
    {
        $this->container['questionAnswerId'] = $questionAnswerId;
        return $this;
    }

    /**
    * Gets content
    *  召回文本
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 召回文本
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

