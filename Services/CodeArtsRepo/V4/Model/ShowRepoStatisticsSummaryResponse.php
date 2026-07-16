<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepoStatisticsSummaryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepoStatisticsSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoName  **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
    * commitCount  **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
    * repoSize  **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
    * lastCommitTime  **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeLines  **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
    * branchCount  **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoName' => 'string',
            'commitCount' => 'int',
            'repoSize' => 'string',
            'lastCommitTime' => 'string',
            'codeLines' => 'int',
            'branchCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoName  **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
    * commitCount  **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
    * repoSize  **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
    * lastCommitTime  **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeLines  **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
    * branchCount  **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoName' => null,
        'commitCount' => null,
        'repoSize' => null,
        'lastCommitTime' => null,
        'codeLines' => null,
        'branchCount' => null
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
    * repoName  **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
    * commitCount  **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
    * repoSize  **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
    * lastCommitTime  **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeLines  **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
    * branchCount  **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoName' => 'repo_name',
            'commitCount' => 'commit_count',
            'repoSize' => 'repo_size',
            'lastCommitTime' => 'last_commit_time',
            'codeLines' => 'code_lines',
            'branchCount' => 'branch_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoName  **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
    * commitCount  **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
    * repoSize  **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
    * lastCommitTime  **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeLines  **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
    * branchCount  **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $setters = [
            'repoName' => 'setRepoName',
            'commitCount' => 'setCommitCount',
            'repoSize' => 'setRepoSize',
            'lastCommitTime' => 'setLastCommitTime',
            'codeLines' => 'setCodeLines',
            'branchCount' => 'setBranchCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoName  **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
    * commitCount  **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
    * repoSize  **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
    * lastCommitTime  **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeLines  **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
    * branchCount  **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $getters = [
            'repoName' => 'getRepoName',
            'commitCount' => 'getCommitCount',
            'repoSize' => 'getRepoSize',
            'lastCommitTime' => 'getLastCommitTime',
            'codeLines' => 'getCodeLines',
            'branchCount' => 'getBranchCount'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repoName']) && (mb_strlen($this->container['repoName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'repoName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['repoName']) && (mb_strlen($this->container['repoName']) < 0)) {
                $invalidProperties[] = "invalid value for 'repoName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repoSize']) && (mb_strlen($this->container['repoSize']) > 1000)) {
                $invalidProperties[] = "invalid value for 'repoSize', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['repoSize']) && (mb_strlen($this->container['repoSize']) < 0)) {
                $invalidProperties[] = "invalid value for 'repoSize', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastCommitTime']) && (mb_strlen($this->container['lastCommitTime']) > 100)) {
                $invalidProperties[] = "invalid value for 'lastCommitTime', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['lastCommitTime']) && (mb_strlen($this->container['lastCommitTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastCommitTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['codeLines']) && ($this->container['codeLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'codeLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['codeLines']) && ($this->container['codeLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'codeLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['branchCount']) && ($this->container['branchCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'branchCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['branchCount']) && ($this->container['branchCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'branchCount', must be bigger than or equal to 0.";
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
    * Gets repoName
    *  **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
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
    * @param string|null $repoName **参数解释：** 仓库名称。 **取值范围：** 最小1个字节，最大200字节 **默认取值：** 不涉及。
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
    *  **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
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
    * @param int|null $commitCount **参数解释：** 默认分支的提交数量。 **取值范围：** 最小0 **默认取值：** 0
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
    *  **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
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
    * @param string|null $repoSize **参数解释：** 仓库占用磁盘空间大小。 **取值范围：** 最小0 **默认取值：** 0
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
    *  **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $lastCommitTime **参数解释：** 仓库最新的提交日期，格式yyyy-MM-dd'T'HH:mm:ssXXX,例：2025-10-30T08:27:43.000Z **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
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
    * @param int|null $codeLines **参数解释：** 默认分支的代码行数。 **取值范围：** 最小0 **默认取值：** 0。
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
    *  **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
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
    * @param int|null $branchCount **参数解释：** 仓库分支数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return $this
    */
    public function setBranchCount($branchCount)
    {
        $this->container['branchCount'] = $branchCount;
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

