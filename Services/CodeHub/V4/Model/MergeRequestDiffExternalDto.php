<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestDiffExternalDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestDiffExternalDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  合并请求diff id
    * state  状态
    * mergeRequestId  合并请求id
    * createdAt  创建时间
    * updatedAt  更新时间
    * baseCommitSha  base commit节点
    * realSize  diff文件数量
    * headCommitSha  head commit节点
    * startCommitSha  start commit节点
    * commitsCount  commit数量
    * externalDiff  外部diff文件
    * externalDiffStore  外部差异存储
    * storedExternally  是否外部存储
    * addedLines  新增行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'state' => 'string',
            'mergeRequestId' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'baseCommitSha' => 'string',
            'realSize' => 'string',
            'headCommitSha' => 'string',
            'startCommitSha' => 'string',
            'commitsCount' => 'int',
            'externalDiff' => 'string',
            'externalDiffStore' => 'int',
            'storedExternally' => 'bool',
            'addedLines' => 'int',
            'removedLines' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  合并请求diff id
    * state  状态
    * mergeRequestId  合并请求id
    * createdAt  创建时间
    * updatedAt  更新时间
    * baseCommitSha  base commit节点
    * realSize  diff文件数量
    * headCommitSha  head commit节点
    * startCommitSha  start commit节点
    * commitsCount  commit数量
    * externalDiff  外部diff文件
    * externalDiffStore  外部差异存储
    * storedExternally  是否外部存储
    * addedLines  新增行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'state' => null,
        'mergeRequestId' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'baseCommitSha' => null,
        'realSize' => null,
        'headCommitSha' => null,
        'startCommitSha' => null,
        'commitsCount' => null,
        'externalDiff' => null,
        'externalDiffStore' => null,
        'storedExternally' => null,
        'addedLines' => null,
        'removedLines' => null
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
    * id  合并请求diff id
    * state  状态
    * mergeRequestId  合并请求id
    * createdAt  创建时间
    * updatedAt  更新时间
    * baseCommitSha  base commit节点
    * realSize  diff文件数量
    * headCommitSha  head commit节点
    * startCommitSha  start commit节点
    * commitsCount  commit数量
    * externalDiff  外部diff文件
    * externalDiffStore  外部差异存储
    * storedExternally  是否外部存储
    * addedLines  新增行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'state' => 'state',
            'mergeRequestId' => 'merge_request_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'baseCommitSha' => 'base_commit_sha',
            'realSize' => 'real_size',
            'headCommitSha' => 'head_commit_sha',
            'startCommitSha' => 'start_commit_sha',
            'commitsCount' => 'commits_count',
            'externalDiff' => 'external_diff',
            'externalDiffStore' => 'external_diff_store',
            'storedExternally' => 'stored_externally',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  合并请求diff id
    * state  状态
    * mergeRequestId  合并请求id
    * createdAt  创建时间
    * updatedAt  更新时间
    * baseCommitSha  base commit节点
    * realSize  diff文件数量
    * headCommitSha  head commit节点
    * startCommitSha  start commit节点
    * commitsCount  commit数量
    * externalDiff  外部diff文件
    * externalDiffStore  外部差异存储
    * storedExternally  是否外部存储
    * addedLines  新增行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'state' => 'setState',
            'mergeRequestId' => 'setMergeRequestId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'baseCommitSha' => 'setBaseCommitSha',
            'realSize' => 'setRealSize',
            'headCommitSha' => 'setHeadCommitSha',
            'startCommitSha' => 'setStartCommitSha',
            'commitsCount' => 'setCommitsCount',
            'externalDiff' => 'setExternalDiff',
            'externalDiffStore' => 'setExternalDiffStore',
            'storedExternally' => 'setStoredExternally',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  合并请求diff id
    * state  状态
    * mergeRequestId  合并请求id
    * createdAt  创建时间
    * updatedAt  更新时间
    * baseCommitSha  base commit节点
    * realSize  diff文件数量
    * headCommitSha  head commit节点
    * startCommitSha  start commit节点
    * commitsCount  commit数量
    * externalDiff  外部diff文件
    * externalDiffStore  外部差异存储
    * storedExternally  是否外部存储
    * addedLines  新增行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'state' => 'getState',
            'mergeRequestId' => 'getMergeRequestId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'baseCommitSha' => 'getBaseCommitSha',
            'realSize' => 'getRealSize',
            'headCommitSha' => 'getHeadCommitSha',
            'startCommitSha' => 'getStartCommitSha',
            'commitsCount' => 'getCommitsCount',
            'externalDiff' => 'getExternalDiff',
            'externalDiffStore' => 'getExternalDiffStore',
            'storedExternally' => 'getStoredExternally',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['baseCommitSha'] = isset($data['baseCommitSha']) ? $data['baseCommitSha'] : null;
        $this->container['realSize'] = isset($data['realSize']) ? $data['realSize'] : null;
        $this->container['headCommitSha'] = isset($data['headCommitSha']) ? $data['headCommitSha'] : null;
        $this->container['startCommitSha'] = isset($data['startCommitSha']) ? $data['startCommitSha'] : null;
        $this->container['commitsCount'] = isset($data['commitsCount']) ? $data['commitsCount'] : null;
        $this->container['externalDiff'] = isset($data['externalDiff']) ? $data['externalDiff'] : null;
        $this->container['externalDiffStore'] = isset($data['externalDiffStore']) ? $data['externalDiffStore'] : null;
        $this->container['storedExternally'] = isset($data['storedExternally']) ? $data['storedExternally'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['baseCommitSha']) && (mb_strlen($this->container['baseCommitSha']) > 40)) {
                $invalidProperties[] = "invalid value for 'baseCommitSha', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['baseCommitSha']) && (mb_strlen($this->container['baseCommitSha']) < 40)) {
                $invalidProperties[] = "invalid value for 'baseCommitSha', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['realSize']) && (mb_strlen($this->container['realSize']) > 100000)) {
                $invalidProperties[] = "invalid value for 'realSize', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['realSize']) && (mb_strlen($this->container['realSize']) < 1)) {
                $invalidProperties[] = "invalid value for 'realSize', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['headCommitSha']) && (mb_strlen($this->container['headCommitSha']) > 40)) {
                $invalidProperties[] = "invalid value for 'headCommitSha', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['headCommitSha']) && (mb_strlen($this->container['headCommitSha']) < 40)) {
                $invalidProperties[] = "invalid value for 'headCommitSha', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['startCommitSha']) && (mb_strlen($this->container['startCommitSha']) > 40)) {
                $invalidProperties[] = "invalid value for 'startCommitSha', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['startCommitSha']) && (mb_strlen($this->container['startCommitSha']) < 40)) {
                $invalidProperties[] = "invalid value for 'startCommitSha', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['externalDiff']) && (mb_strlen($this->container['externalDiff']) > 100000)) {
                $invalidProperties[] = "invalid value for 'externalDiff', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['externalDiff']) && (mb_strlen($this->container['externalDiff']) < 1)) {
                $invalidProperties[] = "invalid value for 'externalDiff', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['externalDiffStore']) && ($this->container['externalDiffStore'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'externalDiffStore', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['externalDiffStore']) && ($this->container['externalDiffStore'] < 1)) {
                $invalidProperties[] = "invalid value for 'externalDiffStore', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be bigger than or equal to 0.";
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
    * Gets id
    *  合并请求diff id
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
    * @param int|null $id 合并请求diff id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  状态
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
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets mergeRequestId
    *  合并请求id
    *
    * @return int|null
    */
    public function getMergeRequestId()
    {
        return $this->container['mergeRequestId'];
    }

    /**
    * Sets mergeRequestId
    *
    * @param int|null $mergeRequestId 合并请求id
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets baseCommitSha
    *  base commit节点
    *
    * @return string|null
    */
    public function getBaseCommitSha()
    {
        return $this->container['baseCommitSha'];
    }

    /**
    * Sets baseCommitSha
    *
    * @param string|null $baseCommitSha base commit节点
    *
    * @return $this
    */
    public function setBaseCommitSha($baseCommitSha)
    {
        $this->container['baseCommitSha'] = $baseCommitSha;
        return $this;
    }

    /**
    * Gets realSize
    *  diff文件数量
    *
    * @return string|null
    */
    public function getRealSize()
    {
        return $this->container['realSize'];
    }

    /**
    * Sets realSize
    *
    * @param string|null $realSize diff文件数量
    *
    * @return $this
    */
    public function setRealSize($realSize)
    {
        $this->container['realSize'] = $realSize;
        return $this;
    }

    /**
    * Gets headCommitSha
    *  head commit节点
    *
    * @return string|null
    */
    public function getHeadCommitSha()
    {
        return $this->container['headCommitSha'];
    }

    /**
    * Sets headCommitSha
    *
    * @param string|null $headCommitSha head commit节点
    *
    * @return $this
    */
    public function setHeadCommitSha($headCommitSha)
    {
        $this->container['headCommitSha'] = $headCommitSha;
        return $this;
    }

    /**
    * Gets startCommitSha
    *  start commit节点
    *
    * @return string|null
    */
    public function getStartCommitSha()
    {
        return $this->container['startCommitSha'];
    }

    /**
    * Sets startCommitSha
    *
    * @param string|null $startCommitSha start commit节点
    *
    * @return $this
    */
    public function setStartCommitSha($startCommitSha)
    {
        $this->container['startCommitSha'] = $startCommitSha;
        return $this;
    }

    /**
    * Gets commitsCount
    *  commit数量
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
    * @param int|null $commitsCount commit数量
    *
    * @return $this
    */
    public function setCommitsCount($commitsCount)
    {
        $this->container['commitsCount'] = $commitsCount;
        return $this;
    }

    /**
    * Gets externalDiff
    *  外部diff文件
    *
    * @return string|null
    */
    public function getExternalDiff()
    {
        return $this->container['externalDiff'];
    }

    /**
    * Sets externalDiff
    *
    * @param string|null $externalDiff 外部diff文件
    *
    * @return $this
    */
    public function setExternalDiff($externalDiff)
    {
        $this->container['externalDiff'] = $externalDiff;
        return $this;
    }

    /**
    * Gets externalDiffStore
    *  外部差异存储
    *
    * @return int|null
    */
    public function getExternalDiffStore()
    {
        return $this->container['externalDiffStore'];
    }

    /**
    * Sets externalDiffStore
    *
    * @param int|null $externalDiffStore 外部差异存储
    *
    * @return $this
    */
    public function setExternalDiffStore($externalDiffStore)
    {
        $this->container['externalDiffStore'] = $externalDiffStore;
        return $this;
    }

    /**
    * Gets storedExternally
    *  是否外部存储
    *
    * @return bool|null
    */
    public function getStoredExternally()
    {
        return $this->container['storedExternally'];
    }

    /**
    * Sets storedExternally
    *
    * @param bool|null $storedExternally 是否外部存储
    *
    * @return $this
    */
    public function setStoredExternally($storedExternally)
    {
        $this->container['storedExternally'] = $storedExternally;
        return $this;
    }

    /**
    * Gets addedLines
    *  新增行数
    *
    * @return int|null
    */
    public function getAddedLines()
    {
        return $this->container['addedLines'];
    }

    /**
    * Sets addedLines
    *
    * @param int|null $addedLines 新增行数
    *
    * @return $this
    */
    public function setAddedLines($addedLines)
    {
        $this->container['addedLines'] = $addedLines;
        return $this;
    }

    /**
    * Gets removedLines
    *  删除行数
    *
    * @return int|null
    */
    public function getRemovedLines()
    {
        return $this->container['removedLines'];
    }

    /**
    * Sets removedLines
    *
    * @param int|null $removedLines 删除行数
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
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

