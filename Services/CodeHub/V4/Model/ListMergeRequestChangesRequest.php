<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMergeRequestChangesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMergeRequestChangesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * forceEncode  **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * fromDiffId  **参数解释：** 文件变更对比源版本id
    * toDiffId  **参数解释：** 文件变更对比目标版本id
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'mergeRequestIid' => 'int',
            'ignoreWhitespaceChange' => 'bool',
            'forceEncode' => 'bool',
            'filePath' => 'string',
            'fromDiffId' => 'int',
            'toDiffId' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * forceEncode  **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * fromDiffId  **参数解释：** 文件变更对比源版本id
    * toDiffId  **参数解释：** 文件变更对比目标版本id
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'mergeRequestIid' => 'int32',
        'ignoreWhitespaceChange' => null,
        'forceEncode' => null,
        'filePath' => null,
        'fromDiffId' => 'int32',
        'toDiffId' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32'
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
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * forceEncode  **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * fromDiffId  **参数解释：** 文件变更对比源版本id
    * toDiffId  **参数解释：** 文件变更对比目标版本id
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'mergeRequestIid' => 'merge_request_iid',
            'ignoreWhitespaceChange' => 'ignore_whitespace_change',
            'forceEncode' => 'force_encode',
            'filePath' => 'file_path',
            'fromDiffId' => 'from_diff_id',
            'toDiffId' => 'to_diff_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * forceEncode  **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * fromDiffId  **参数解释：** 文件变更对比源版本id
    * toDiffId  **参数解释：** 文件变更对比目标版本id
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'mergeRequestIid' => 'setMergeRequestIid',
            'ignoreWhitespaceChange' => 'setIgnoreWhitespaceChange',
            'forceEncode' => 'setForceEncode',
            'filePath' => 'setFilePath',
            'fromDiffId' => 'setFromDiffId',
            'toDiffId' => 'setToDiffId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * forceEncode  **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * fromDiffId  **参数解释：** 文件变更对比源版本id
    * toDiffId  **参数解释：** 文件变更对比目标版本id
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'mergeRequestIid' => 'getMergeRequestIid',
            'ignoreWhitespaceChange' => 'getIgnoreWhitespaceChange',
            'forceEncode' => 'getForceEncode',
            'filePath' => 'getFilePath',
            'fromDiffId' => 'getFromDiffId',
            'toDiffId' => 'getToDiffId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['mergeRequestIid'] = isset($data['mergeRequestIid']) ? $data['mergeRequestIid'] : null;
        $this->container['ignoreWhitespaceChange'] = isset($data['ignoreWhitespaceChange']) ? $data['ignoreWhitespaceChange'] : null;
        $this->container['forceEncode'] = isset($data['forceEncode']) ? $data['forceEncode'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fromDiffId'] = isset($data['fromDiffId']) ? $data['fromDiffId'] : null;
        $this->container['toDiffId'] = isset($data['toDiffId']) ? $data['toDiffId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
            if ((mb_strlen($this->container['filePath']) > 10000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets ignoreWhitespaceChange
    *  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    *
    * @return bool|null
    */
    public function getIgnoreWhitespaceChange()
    {
        return $this->container['ignoreWhitespaceChange'];
    }

    /**
    * Sets ignoreWhitespaceChange
    *
    * @param bool|null $ignoreWhitespaceChange **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    *
    * @return $this
    */
    public function setIgnoreWhitespaceChange($ignoreWhitespaceChange)
    {
        $this->container['ignoreWhitespaceChange'] = $ignoreWhitespaceChange;
        return $this;
    }

    /**
    * Gets forceEncode
    *  **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    *
    * @return bool|null
    */
    public function getForceEncode()
    {
        return $this->container['forceEncode'];
    }

    /**
    * Sets forceEncode
    *
    * @param bool|null $forceEncode **参数解释：** 是否强制将文件内容转码为utf-8 **约束限制 ** - true, 强制将文件内容转码为utf-8。 - false, 不强制将文件内容转码为utf-8。
    *
    * @return $this
    */
    public function setForceEncode($forceEncode)
    {
        $this->container['forceEncode'] = $forceEncode;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fromDiffId
    *  **参数解释：** 文件变更对比源版本id
    *
    * @return int|null
    */
    public function getFromDiffId()
    {
        return $this->container['fromDiffId'];
    }

    /**
    * Sets fromDiffId
    *
    * @param int|null $fromDiffId **参数解释：** 文件变更对比源版本id
    *
    * @return $this
    */
    public function setFromDiffId($fromDiffId)
    {
        $this->container['fromDiffId'] = $fromDiffId;
        return $this;
    }

    /**
    * Gets toDiffId
    *  **参数解释：** 文件变更对比目标版本id
    *
    * @return int|null
    */
    public function getToDiffId()
    {
        return $this->container['toDiffId'];
    }

    /**
    * Sets toDiffId
    *
    * @param int|null $toDiffId **参数解释：** 文件变更对比目标版本id
    *
    * @return $this
    */
    public function setToDiffId($toDiffId)
    {
        $this->container['toDiffId'] = $toDiffId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量，从0开始。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量，从0开始。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 返回数量。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 返回数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

