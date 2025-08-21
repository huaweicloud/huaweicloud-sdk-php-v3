<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestStatisticDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestStatisticDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  合并请求ID
    * iid  合并请求序号
    * title  合并请求标题
    * state  合并请求状态
    * commitsCount  合并请求提交数
    * changedFilesCount  合并请求文件变数
    * notesCount  notesCount
    * changedLinesCount  changedLinesCount
    * mergeError  合并请求合入异常信息
    * jsonMergeError  合并请求合入异常信息
    * votes  合并请求评分数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'title' => 'string',
            'state' => 'string',
            'commitsCount' => 'int',
            'changedFilesCount' => 'string',
            'notesCount' => '\HuaweiCloud\SDK\CodeHub\V4\Model\NotesCountDto',
            'changedLinesCount' => '\HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestLineChange',
            'mergeError' => 'string',
            'jsonMergeError' => 'object',
            'votes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  合并请求ID
    * iid  合并请求序号
    * title  合并请求标题
    * state  合并请求状态
    * commitsCount  合并请求提交数
    * changedFilesCount  合并请求文件变数
    * notesCount  notesCount
    * changedLinesCount  changedLinesCount
    * mergeError  合并请求合入异常信息
    * jsonMergeError  合并请求合入异常信息
    * votes  合并请求评分数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iid' => null,
        'title' => null,
        'state' => null,
        'commitsCount' => null,
        'changedFilesCount' => null,
        'notesCount' => null,
        'changedLinesCount' => null,
        'mergeError' => null,
        'jsonMergeError' => null,
        'votes' => null
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
    * id  合并请求ID
    * iid  合并请求序号
    * title  合并请求标题
    * state  合并请求状态
    * commitsCount  合并请求提交数
    * changedFilesCount  合并请求文件变数
    * notesCount  notesCount
    * changedLinesCount  changedLinesCount
    * mergeError  合并请求合入异常信息
    * jsonMergeError  合并请求合入异常信息
    * votes  合并请求评分数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'title' => 'title',
            'state' => 'state',
            'commitsCount' => 'commits_count',
            'changedFilesCount' => 'changed_files_count',
            'notesCount' => 'notes_count',
            'changedLinesCount' => 'changed_lines_count',
            'mergeError' => 'merge_error',
            'jsonMergeError' => 'json_merge_error',
            'votes' => 'votes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  合并请求ID
    * iid  合并请求序号
    * title  合并请求标题
    * state  合并请求状态
    * commitsCount  合并请求提交数
    * changedFilesCount  合并请求文件变数
    * notesCount  notesCount
    * changedLinesCount  changedLinesCount
    * mergeError  合并请求合入异常信息
    * jsonMergeError  合并请求合入异常信息
    * votes  合并请求评分数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'title' => 'setTitle',
            'state' => 'setState',
            'commitsCount' => 'setCommitsCount',
            'changedFilesCount' => 'setChangedFilesCount',
            'notesCount' => 'setNotesCount',
            'changedLinesCount' => 'setChangedLinesCount',
            'mergeError' => 'setMergeError',
            'jsonMergeError' => 'setJsonMergeError',
            'votes' => 'setVotes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  合并请求ID
    * iid  合并请求序号
    * title  合并请求标题
    * state  合并请求状态
    * commitsCount  合并请求提交数
    * changedFilesCount  合并请求文件变数
    * notesCount  notesCount
    * changedLinesCount  changedLinesCount
    * mergeError  合并请求合入异常信息
    * jsonMergeError  合并请求合入异常信息
    * votes  合并请求评分数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'title' => 'getTitle',
            'state' => 'getState',
            'commitsCount' => 'getCommitsCount',
            'changedFilesCount' => 'getChangedFilesCount',
            'notesCount' => 'getNotesCount',
            'changedLinesCount' => 'getChangedLinesCount',
            'mergeError' => 'getMergeError',
            'jsonMergeError' => 'getJsonMergeError',
            'votes' => 'getVotes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['commitsCount'] = isset($data['commitsCount']) ? $data['commitsCount'] : null;
        $this->container['changedFilesCount'] = isset($data['changedFilesCount']) ? $data['changedFilesCount'] : null;
        $this->container['notesCount'] = isset($data['notesCount']) ? $data['notesCount'] : null;
        $this->container['changedLinesCount'] = isset($data['changedLinesCount']) ? $data['changedLinesCount'] : null;
        $this->container['mergeError'] = isset($data['mergeError']) ? $data['mergeError'] : null;
        $this->container['jsonMergeError'] = isset($data['jsonMergeError']) ? $data['jsonMergeError'] : null;
        $this->container['votes'] = isset($data['votes']) ? $data['votes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets id
    *  合并请求ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 合并请求ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets iid
    *  合并请求序号
    *
    * @return int|null
    */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
    * Sets iid
    *
    * @param int|null $iid 合并请求序号
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets title
    *  合并请求标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 合并请求标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets state
    *  合并请求状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 合并请求状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets commitsCount
    *  合并请求提交数
    *
    * @return int|null
    */
    public function getCommitsCount()
    {
        return $this->container['commitsCount'];
    }

    /**
    * Sets commitsCount
    *
    * @param int|null $commitsCount 合并请求提交数
    *
    * @return $this
    */
    public function setCommitsCount($commitsCount)
    {
        $this->container['commitsCount'] = $commitsCount;
        return $this;
    }

    /**
    * Gets changedFilesCount
    *  合并请求文件变数
    *
    * @return string|null
    */
    public function getChangedFilesCount()
    {
        return $this->container['changedFilesCount'];
    }

    /**
    * Sets changedFilesCount
    *
    * @param string|null $changedFilesCount 合并请求文件变数
    *
    * @return $this
    */
    public function setChangedFilesCount($changedFilesCount)
    {
        $this->container['changedFilesCount'] = $changedFilesCount;
        return $this;
    }

    /**
    * Gets notesCount
    *  notesCount
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\NotesCountDto|null
    */
    public function getNotesCount()
    {
        return $this->container['notesCount'];
    }

    /**
    * Sets notesCount
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\NotesCountDto|null $notesCount notesCount
    *
    * @return $this
    */
    public function setNotesCount($notesCount)
    {
        $this->container['notesCount'] = $notesCount;
        return $this;
    }

    /**
    * Gets changedLinesCount
    *  changedLinesCount
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestLineChange|null
    */
    public function getChangedLinesCount()
    {
        return $this->container['changedLinesCount'];
    }

    /**
    * Sets changedLinesCount
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestLineChange|null $changedLinesCount changedLinesCount
    *
    * @return $this
    */
    public function setChangedLinesCount($changedLinesCount)
    {
        $this->container['changedLinesCount'] = $changedLinesCount;
        return $this;
    }

    /**
    * Gets mergeError
    *  合并请求合入异常信息
    *
    * @return string|null
    */
    public function getMergeError()
    {
        return $this->container['mergeError'];
    }

    /**
    * Sets mergeError
    *
    * @param string|null $mergeError 合并请求合入异常信息
    *
    * @return $this
    */
    public function setMergeError($mergeError)
    {
        $this->container['mergeError'] = $mergeError;
        return $this;
    }

    /**
    * Gets jsonMergeError
    *  合并请求合入异常信息
    *
    * @return object|null
    */
    public function getJsonMergeError()
    {
        return $this->container['jsonMergeError'];
    }

    /**
    * Sets jsonMergeError
    *
    * @param object|null $jsonMergeError 合并请求合入异常信息
    *
    * @return $this
    */
    public function setJsonMergeError($jsonMergeError)
    {
        $this->container['jsonMergeError'] = $jsonMergeError;
        return $this;
    }

    /**
    * Gets votes
    *  合并请求评分数
    *
    * @return int|null
    */
    public function getVotes()
    {
        return $this->container['votes'];
    }

    /**
    * Sets votes
    *
    * @param int|null $votes 合并请求评分数
    *
    * @return $this
    */
    public function setVotes($votes)
    {
        $this->container['votes'] = $votes;
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

