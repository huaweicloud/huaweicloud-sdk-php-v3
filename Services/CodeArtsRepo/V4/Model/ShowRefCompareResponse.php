<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRefCompareResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRefCompareResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commit  commit
    * commits  commit相关信息列表
    * diffs  变更文件信息
    * diffsFiles  变更文件信息
    * compareTimeout  是否超时
    * compareSameRef  是否相同
    * conflictFiles  冲突文件
    * addedLines  增加行数
    * removedLines  删除行数
    * commitsCount  提交数量
    * diffsCount  文件变更数量
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commit' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto',
            'commits' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto[]',
            'diffs' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffDto[]',
            'diffsFiles' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffDto[]',
            'compareTimeout' => 'bool',
            'compareSameRef' => 'bool',
            'conflictFiles' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictFileDto[]',
            'addedLines' => 'int',
            'removedLines' => 'int',
            'commitsCount' => 'int',
            'diffsCount' => 'int',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commit  commit
    * commits  commit相关信息列表
    * diffs  变更文件信息
    * diffsFiles  变更文件信息
    * compareTimeout  是否超时
    * compareSameRef  是否相同
    * conflictFiles  冲突文件
    * addedLines  增加行数
    * removedLines  删除行数
    * commitsCount  提交数量
    * diffsCount  文件变更数量
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commit' => null,
        'commits' => null,
        'diffs' => null,
        'diffsFiles' => null,
        'compareTimeout' => null,
        'compareSameRef' => null,
        'conflictFiles' => null,
        'addedLines' => 'int32',
        'removedLines' => 'int32',
        'commitsCount' => 'int32',
        'diffsCount' => 'int32',
        'xTotal' => null
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
    * commit  commit
    * commits  commit相关信息列表
    * diffs  变更文件信息
    * diffsFiles  变更文件信息
    * compareTimeout  是否超时
    * compareSameRef  是否相同
    * conflictFiles  冲突文件
    * addedLines  增加行数
    * removedLines  删除行数
    * commitsCount  提交数量
    * diffsCount  文件变更数量
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commit' => 'commit',
            'commits' => 'commits',
            'diffs' => 'diffs',
            'diffsFiles' => 'diffs_files',
            'compareTimeout' => 'compare_timeout',
            'compareSameRef' => 'compare_same_ref',
            'conflictFiles' => 'conflict_files',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines',
            'commitsCount' => 'commits_count',
            'diffsCount' => 'diffs_count',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commit  commit
    * commits  commit相关信息列表
    * diffs  变更文件信息
    * diffsFiles  变更文件信息
    * compareTimeout  是否超时
    * compareSameRef  是否相同
    * conflictFiles  冲突文件
    * addedLines  增加行数
    * removedLines  删除行数
    * commitsCount  提交数量
    * diffsCount  文件变更数量
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'commit' => 'setCommit',
            'commits' => 'setCommits',
            'diffs' => 'setDiffs',
            'diffsFiles' => 'setDiffsFiles',
            'compareTimeout' => 'setCompareTimeout',
            'compareSameRef' => 'setCompareSameRef',
            'conflictFiles' => 'setConflictFiles',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines',
            'commitsCount' => 'setCommitsCount',
            'diffsCount' => 'setDiffsCount',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commit  commit
    * commits  commit相关信息列表
    * diffs  变更文件信息
    * diffsFiles  变更文件信息
    * compareTimeout  是否超时
    * compareSameRef  是否相同
    * conflictFiles  冲突文件
    * addedLines  增加行数
    * removedLines  删除行数
    * commitsCount  提交数量
    * diffsCount  文件变更数量
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'commit' => 'getCommit',
            'commits' => 'getCommits',
            'diffs' => 'getDiffs',
            'diffsFiles' => 'getDiffsFiles',
            'compareTimeout' => 'getCompareTimeout',
            'compareSameRef' => 'getCompareSameRef',
            'conflictFiles' => 'getConflictFiles',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines',
            'commitsCount' => 'getCommitsCount',
            'diffsCount' => 'getDiffsCount',
            'xTotal' => 'getXTotal'
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
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['commits'] = isset($data['commits']) ? $data['commits'] : null;
        $this->container['diffs'] = isset($data['diffs']) ? $data['diffs'] : null;
        $this->container['diffsFiles'] = isset($data['diffsFiles']) ? $data['diffsFiles'] : null;
        $this->container['compareTimeout'] = isset($data['compareTimeout']) ? $data['compareTimeout'] : null;
        $this->container['compareSameRef'] = isset($data['compareSameRef']) ? $data['compareSameRef'] : null;
        $this->container['conflictFiles'] = isset($data['conflictFiles']) ? $data['conflictFiles'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
        $this->container['commitsCount'] = isset($data['commitsCount']) ? $data['commitsCount'] : null;
        $this->container['diffsCount'] = isset($data['diffsCount']) ? $data['diffsCount'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] < 1)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] < 1)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diffsCount']) && ($this->container['diffsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'diffsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['diffsCount']) && ($this->container['diffsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'diffsCount', must be bigger than or equal to 1.";
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
    * Gets commit
    *  commit
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets commits
    *  commit相关信息列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto[]|null
    */
    public function getCommits()
    {
        return $this->container['commits'];
    }

    /**
    * Sets commits
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto[]|null $commits commit相关信息列表
    *
    * @return $this
    */
    public function setCommits($commits)
    {
        $this->container['commits'] = $commits;
        return $this;
    }

    /**
    * Gets diffs
    *  变更文件信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffDto[]|null
    */
    public function getDiffs()
    {
        return $this->container['diffs'];
    }

    /**
    * Sets diffs
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffDto[]|null $diffs 变更文件信息
    *
    * @return $this
    */
    public function setDiffs($diffs)
    {
        $this->container['diffs'] = $diffs;
        return $this;
    }

    /**
    * Gets diffsFiles
    *  变更文件信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffDto[]|null
    */
    public function getDiffsFiles()
    {
        return $this->container['diffsFiles'];
    }

    /**
    * Sets diffsFiles
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffDto[]|null $diffsFiles 变更文件信息
    *
    * @return $this
    */
    public function setDiffsFiles($diffsFiles)
    {
        $this->container['diffsFiles'] = $diffsFiles;
        return $this;
    }

    /**
    * Gets compareTimeout
    *  是否超时
    *
    * @return bool|null
    */
    public function getCompareTimeout()
    {
        return $this->container['compareTimeout'];
    }

    /**
    * Sets compareTimeout
    *
    * @param bool|null $compareTimeout 是否超时
    *
    * @return $this
    */
    public function setCompareTimeout($compareTimeout)
    {
        $this->container['compareTimeout'] = $compareTimeout;
        return $this;
    }

    /**
    * Gets compareSameRef
    *  是否相同
    *
    * @return bool|null
    */
    public function getCompareSameRef()
    {
        return $this->container['compareSameRef'];
    }

    /**
    * Sets compareSameRef
    *
    * @param bool|null $compareSameRef 是否相同
    *
    * @return $this
    */
    public function setCompareSameRef($compareSameRef)
    {
        $this->container['compareSameRef'] = $compareSameRef;
        return $this;
    }

    /**
    * Gets conflictFiles
    *  冲突文件
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictFileDto[]|null
    */
    public function getConflictFiles()
    {
        return $this->container['conflictFiles'];
    }

    /**
    * Sets conflictFiles
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictFileDto[]|null $conflictFiles 冲突文件
    *
    * @return $this
    */
    public function setConflictFiles($conflictFiles)
    {
        $this->container['conflictFiles'] = $conflictFiles;
        return $this;
    }

    /**
    * Gets addedLines
    *  增加行数
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
    * @param int|null $addedLines 增加行数
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
    * Gets commitsCount
    *  提交数量
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
    * @param int|null $commitsCount 提交数量
    *
    * @return $this
    */
    public function setCommitsCount($commitsCount)
    {
        $this->container['commitsCount'] = $commitsCount;
        return $this;
    }

    /**
    * Gets diffsCount
    *  文件变更数量
    *
    * @return int|null
    */
    public function getDiffsCount()
    {
        return $this->container['diffsCount'];
    }

    /**
    * Sets diffsCount
    *
    * @param int|null $diffsCount 文件变更数量
    *
    * @return $this
    */
    public function setDiffsCount($diffsCount)
    {
        $this->container['diffsCount'] = $diffsCount;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

