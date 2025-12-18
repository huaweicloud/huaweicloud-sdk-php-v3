<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDiffCommitRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDiffCommitRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * sha  **参数解释：** 分支名、tag名、提交ID。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * notStatistic  **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'sha' => 'string',
            'ignoreWhitespaceChange' => 'bool',
            'notStatistic' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * sha  **参数解释：** 分支名、tag名、提交ID。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * notStatistic  **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'sha' => null,
        'ignoreWhitespaceChange' => null,
        'notStatistic' => null,
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * sha  **参数解释：** 分支名、tag名、提交ID。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * notStatistic  **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'sha' => 'sha',
            'ignoreWhitespaceChange' => 'ignore_whitespace_change',
            'notStatistic' => 'not_statistic',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * sha  **参数解释：** 分支名、tag名、提交ID。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * notStatistic  **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'sha' => 'setSha',
            'ignoreWhitespaceChange' => 'setIgnoreWhitespaceChange',
            'notStatistic' => 'setNotStatistic',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * sha  **参数解释：** 分支名、tag名、提交ID。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * notStatistic  **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'sha' => 'getSha',
            'ignoreWhitespaceChange' => 'getIgnoreWhitespaceChange',
            'notStatistic' => 'getNotStatistic',
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
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['ignoreWhitespaceChange'] = isset($data['ignoreWhitespaceChange']) ? $data['ignoreWhitespaceChange'] : null;
        $this->container['notStatistic'] = isset($data['notStatistic']) ? $data['notStatistic'] : null;
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
        if ($this->container['sha'] === null) {
            $invalidProperties[] = "'sha' can't be null";
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
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
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
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets sha
    *  **参数解释：** 分支名、tag名、提交ID。
    *
    * @return string
    */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
    * Sets sha
    *
    * @param string $sha **参数解释：** 分支名、tag名、提交ID。
    *
    * @return $this
    */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;
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
    * Gets notStatistic
    *  **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    *
    * @return bool|null
    */
    public function getNotStatistic()
    {
        return $this->container['notStatistic'];
    }

    /**
    * Sets notStatistic
    *
    * @param bool|null $notStatistic **参数解释：** 是否返回统计数量。 **取值范围：** - true，不返回统计数量。 - false，返回统计数量。
    *
    * @return $this
    */
    public function setNotStatistic($notStatistic)
    {
        $this->container['notStatistic'] = $notStatistic;
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

