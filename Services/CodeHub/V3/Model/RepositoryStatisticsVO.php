<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryStatisticsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryStatisticsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoName  仓库名称
    * commitCount  提交次数
    * repoSize  仓库容量
    * lastCommitTime  最近一次提交时间
    * codeLines  代码行数
    * branchCount  分支数量
    * archiveUrl  代码仓下载地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoName' => 'string',
            'commitCount' => 'int',
            'repoSize' => 'string',
            'lastCommitTime' => 'string',
            'codeLines' => 'int',
            'branchCount' => 'int',
            'archiveUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoName  仓库名称
    * commitCount  提交次数
    * repoSize  仓库容量
    * lastCommitTime  最近一次提交时间
    * codeLines  代码行数
    * branchCount  分支数量
    * archiveUrl  代码仓下载地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoName' => null,
        'commitCount' => 'int32',
        'repoSize' => null,
        'lastCommitTime' => null,
        'codeLines' => 'int32',
        'branchCount' => 'int32',
        'archiveUrl' => null
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
    * repoName  仓库名称
    * commitCount  提交次数
    * repoSize  仓库容量
    * lastCommitTime  最近一次提交时间
    * codeLines  代码行数
    * branchCount  分支数量
    * archiveUrl  代码仓下载地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoName' => 'repoName',
            'commitCount' => 'commitCount',
            'repoSize' => 'repoSize',
            'lastCommitTime' => 'lastCommitTime',
            'codeLines' => 'codeLines',
            'branchCount' => 'branchCount',
            'archiveUrl' => 'archiveUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoName  仓库名称
    * commitCount  提交次数
    * repoSize  仓库容量
    * lastCommitTime  最近一次提交时间
    * codeLines  代码行数
    * branchCount  分支数量
    * archiveUrl  代码仓下载地址
    *
    * @var string[]
    */
    protected static $setters = [
            'repoName' => 'setRepoName',
            'commitCount' => 'setCommitCount',
            'repoSize' => 'setRepoSize',
            'lastCommitTime' => 'setLastCommitTime',
            'codeLines' => 'setCodeLines',
            'branchCount' => 'setBranchCount',
            'archiveUrl' => 'setArchiveUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoName  仓库名称
    * commitCount  提交次数
    * repoSize  仓库容量
    * lastCommitTime  最近一次提交时间
    * codeLines  代码行数
    * branchCount  分支数量
    * archiveUrl  代码仓下载地址
    *
    * @var string[]
    */
    protected static $getters = [
            'repoName' => 'getRepoName',
            'commitCount' => 'getCommitCount',
            'repoSize' => 'getRepoSize',
            'lastCommitTime' => 'getLastCommitTime',
            'codeLines' => 'getCodeLines',
            'branchCount' => 'getBranchCount',
            'archiveUrl' => 'getArchiveUrl'
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
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
        $this->container['repoSize'] = isset($data['repoSize']) ? $data['repoSize'] : null;
        $this->container['lastCommitTime'] = isset($data['lastCommitTime']) ? $data['lastCommitTime'] : null;
        $this->container['codeLines'] = isset($data['codeLines']) ? $data['codeLines'] : null;
        $this->container['branchCount'] = isset($data['branchCount']) ? $data['branchCount'] : null;
        $this->container['archiveUrl'] = isset($data['archiveUrl']) ? $data['archiveUrl'] : null;
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
    * Gets repoName
    *  仓库名称
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName 仓库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets commitCount
    *  提交次数
    *
    * @return int|null
    */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
    * Sets commitCount
    *
    * @param int|null $commitCount 提交次数
    *
    * @return $this
    */
    public function setCommitCount($commitCount)
    {
        $this->container['commitCount'] = $commitCount;
        return $this;
    }

    /**
    * Gets repoSize
    *  仓库容量
    *
    * @return string|null
    */
    public function getRepoSize()
    {
        return $this->container['repoSize'];
    }

    /**
    * Sets repoSize
    *
    * @param string|null $repoSize 仓库容量
    *
    * @return $this
    */
    public function setRepoSize($repoSize)
    {
        $this->container['repoSize'] = $repoSize;
        return $this;
    }

    /**
    * Gets lastCommitTime
    *  最近一次提交时间
    *
    * @return string|null
    */
    public function getLastCommitTime()
    {
        return $this->container['lastCommitTime'];
    }

    /**
    * Sets lastCommitTime
    *
    * @param string|null $lastCommitTime 最近一次提交时间
    *
    * @return $this
    */
    public function setLastCommitTime($lastCommitTime)
    {
        $this->container['lastCommitTime'] = $lastCommitTime;
        return $this;
    }

    /**
    * Gets codeLines
    *  代码行数
    *
    * @return int|null
    */
    public function getCodeLines()
    {
        return $this->container['codeLines'];
    }

    /**
    * Sets codeLines
    *
    * @param int|null $codeLines 代码行数
    *
    * @return $this
    */
    public function setCodeLines($codeLines)
    {
        $this->container['codeLines'] = $codeLines;
        return $this;
    }

    /**
    * Gets branchCount
    *  分支数量
    *
    * @return int|null
    */
    public function getBranchCount()
    {
        return $this->container['branchCount'];
    }

    /**
    * Sets branchCount
    *
    * @param int|null $branchCount 分支数量
    *
    * @return $this
    */
    public function setBranchCount($branchCount)
    {
        $this->container['branchCount'] = $branchCount;
        return $this;
    }

    /**
    * Gets archiveUrl
    *  代码仓下载地址
    *
    * @return string|null
    */
    public function getArchiveUrl()
    {
        return $this->container['archiveUrl'];
    }

    /**
    * Sets archiveUrl
    *
    * @param string|null $archiveUrl 代码仓下载地址
    *
    * @return $this
    */
    public function setArchiveUrl($archiveUrl)
    {
        $this->container['archiveUrl'] = $archiveUrl;
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

