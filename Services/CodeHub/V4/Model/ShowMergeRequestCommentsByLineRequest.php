<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMergeRequestCommentsByLineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMergeRequestCommentsByLineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * line  line
    * withCommitComments  withCommitComments
    * path  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    * view  view
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'mergeRequestIid' => 'int',
            'line' => 'int',
            'withCommitComments' => 'bool',
            'path' => 'string',
            'view' => 'string',
            'baseSha' => 'string',
            'startSha' => 'string',
            'headSha' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * line  line
    * withCommitComments  withCommitComments
    * path  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    * view  view
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'mergeRequestIid' => 'int32',
        'line' => 'int32',
        'withCommitComments' => null,
        'path' => null,
        'view' => null,
        'baseSha' => null,
        'startSha' => null,
        'headSha' => null
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * line  line
    * withCommitComments  withCommitComments
    * path  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    * view  view
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'mergeRequestIid' => 'merge_request_iid',
            'line' => 'line',
            'withCommitComments' => 'with_commit_comments',
            'path' => 'path',
            'view' => 'view',
            'baseSha' => 'base_sha',
            'startSha' => 'start_sha',
            'headSha' => 'head_sha'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * line  line
    * withCommitComments  withCommitComments
    * path  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    * view  view
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'mergeRequestIid' => 'setMergeRequestIid',
            'line' => 'setLine',
            'withCommitComments' => 'setWithCommitComments',
            'path' => 'setPath',
            'view' => 'setView',
            'baseSha' => 'setBaseSha',
            'startSha' => 'setStartSha',
            'headSha' => 'setHeadSha'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * line  line
    * withCommitComments  withCommitComments
    * path  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    * view  view
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'mergeRequestIid' => 'getMergeRequestIid',
            'line' => 'getLine',
            'withCommitComments' => 'getWithCommitComments',
            'path' => 'getPath',
            'view' => 'getView',
            'baseSha' => 'getBaseSha',
            'startSha' => 'getStartSha',
            'headSha' => 'getHeadSha'
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
    const VIEW_BASIC = 'basic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewAllowableValues()
    {
        return [
            self::VIEW_BASIC,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['mergeRequestIid'] = isset($data['mergeRequestIid']) ? $data['mergeRequestIid'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['withCommitComments'] = isset($data['withCommitComments']) ? $data['withCommitComments'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['baseSha'] = isset($data['baseSha']) ? $data['baseSha'] : null;
        $this->container['startSha'] = isset($data['startSha']) ? $data['startSha'] : null;
        $this->container['headSha'] = isset($data['headSha']) ? $data['headSha'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
        if ($this->container['mergeRequestIid'] === null) {
            $invalidProperties[] = "'mergeRequestIid' can't be null";
        }
            if (($this->container['mergeRequestIid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestIid', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['mergeRequestIid'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestIid', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['line']) && ($this->container['line'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'line', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['line']) && ($this->container['line'] < 1)) {
                $invalidProperties[] = "invalid value for 'line', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 100000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getViewAllowableValues();
                if (!is_null($this->container['view']) && !in_array($this->container['view'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'view', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets repositoryId
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets mergeRequestIid
    *  **参数解释：**  合并请求 iid。
    *
    * @return int
    */
    public function getMergeRequestIid()
    {
        return $this->container['mergeRequestIid'];
    }

    /**
    * Sets mergeRequestIid
    *
    * @param int $mergeRequestIid **参数解释：**  合并请求 iid。
    *
    * @return $this
    */
    public function setMergeRequestIid($mergeRequestIid)
    {
        $this->container['mergeRequestIid'] = $mergeRequestIid;
        return $this;
    }

    /**
    * Gets line
    *  line
    *
    * @return int|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param int|null $line line
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets withCommitComments
    *  withCommitComments
    *
    * @return bool|null
    */
    public function getWithCommitComments()
    {
        return $this->container['withCommitComments'];
    }

    /**
    * Sets withCommitComments
    *
    * @param bool|null $withCommitComments withCommitComments
    *
    * @return $this
    */
    public function setWithCommitComments($withCommitComments)
    {
        $this->container['withCommitComments'] = $withCommitComments;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets view
    *  view
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view view
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets baseSha
    *  合并请求中原分支与目标分支的共同基准点
    *
    * @return string|null
    */
    public function getBaseSha()
    {
        return $this->container['baseSha'];
    }

    /**
    * Sets baseSha
    *
    * @param string|null $baseSha 合并请求中原分支与目标分支的共同基准点
    *
    * @return $this
    */
    public function setBaseSha($baseSha)
    {
        $this->container['baseSha'] = $baseSha;
        return $this;
    }

    /**
    * Gets startSha
    *  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    *
    * @return string|null
    */
    public function getStartSha()
    {
        return $this->container['startSha'];
    }

    /**
    * Sets startSha
    *
    * @param string|null $startSha 合并请求中，从共同基准点开始到原分支方向的第一个提交点
    *
    * @return $this
    */
    public function setStartSha($startSha)
    {
        $this->container['startSha'] = $startSha;
        return $this;
    }

    /**
    * Gets headSha
    *  合并请求中原分支指向的提交点
    *
    * @return string|null
    */
    public function getHeadSha()
    {
        return $this->container['headSha'];
    }

    /**
    * Sets headSha
    *
    * @param string|null $headSha 合并请求中原分支指向的提交点
    *
    * @return $this
    */
    public function setHeadSha($headSha)
    {
        $this->container['headSha'] = $headSha;
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

