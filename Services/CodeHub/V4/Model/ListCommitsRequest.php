<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCommitsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCommitsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * refName  分支/tag名
    * since  起始时间（不包含）
    * until  结束时间（不包含）
    * path  The file path
    * message  提交信息或者commit id
    * author  代码作者名称
    * orderByDate  是否按照时间降序排序
    * follow  为true时可以追踪文件移动、改名前后的提交记录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'refName' => 'string',
            'since' => 'string',
            'until' => 'string',
            'path' => 'string',
            'message' => 'string',
            'author' => 'string',
            'orderByDate' => 'bool',
            'follow' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * refName  分支/tag名
    * since  起始时间（不包含）
    * until  结束时间（不包含）
    * path  The file path
    * message  提交信息或者commit id
    * author  代码作者名称
    * orderByDate  是否按照时间降序排序
    * follow  为true时可以追踪文件移动、改名前后的提交记录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'refName' => null,
        'since' => null,
        'until' => null,
        'path' => null,
        'message' => null,
        'author' => null,
        'orderByDate' => null,
        'follow' => null
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
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * refName  分支/tag名
    * since  起始时间（不包含）
    * until  结束时间（不包含）
    * path  The file path
    * message  提交信息或者commit id
    * author  代码作者名称
    * orderByDate  是否按照时间降序排序
    * follow  为true时可以追踪文件移动、改名前后的提交记录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'refName' => 'ref_name',
            'since' => 'since',
            'until' => 'until',
            'path' => 'path',
            'message' => 'message',
            'author' => 'author',
            'orderByDate' => 'order_by_date',
            'follow' => 'follow'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * refName  分支/tag名
    * since  起始时间（不包含）
    * until  结束时间（不包含）
    * path  The file path
    * message  提交信息或者commit id
    * author  代码作者名称
    * orderByDate  是否按照时间降序排序
    * follow  为true时可以追踪文件移动、改名前后的提交记录
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'refName' => 'setRefName',
            'since' => 'setSince',
            'until' => 'setUntil',
            'path' => 'setPath',
            'message' => 'setMessage',
            'author' => 'setAuthor',
            'orderByDate' => 'setOrderByDate',
            'follow' => 'setFollow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * refName  分支/tag名
    * since  起始时间（不包含）
    * until  结束时间（不包含）
    * path  The file path
    * message  提交信息或者commit id
    * author  代码作者名称
    * orderByDate  是否按照时间降序排序
    * follow  为true时可以追踪文件移动、改名前后的提交记录
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'refName' => 'getRefName',
            'since' => 'getSince',
            'until' => 'getUntil',
            'path' => 'getPath',
            'message' => 'getMessage',
            'author' => 'getAuthor',
            'orderByDate' => 'getOrderByDate',
            'follow' => 'getFollow'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['since'] = isset($data['since']) ? $data['since'] : null;
        $this->container['until'] = isset($data['until']) ? $data['until'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['orderByDate'] = isset($data['orderByDate']) ? $data['orderByDate'] : null;
        $this->container['follow'] = isset($data['follow']) ? $data['follow'] : null;
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
            if (!is_null($this->container['refName']) && (mb_strlen($this->container['refName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'refName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['refName']) && (mb_strlen($this->container['refName']) < 0)) {
                $invalidProperties[] = "invalid value for 'refName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['since']) && (mb_strlen($this->container['since']) > 1000)) {
                $invalidProperties[] = "invalid value for 'since', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['since']) && (mb_strlen($this->container['since']) < 0)) {
                $invalidProperties[] = "invalid value for 'since', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['until']) && (mb_strlen($this->container['until']) > 1000)) {
                $invalidProperties[] = "invalid value for 'until', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['until']) && (mb_strlen($this->container['until']) < 0)) {
                $invalidProperties[] = "invalid value for 'until', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 1000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['author']) && (mb_strlen($this->container['author']) > 1000)) {
                $invalidProperties[] = "invalid value for 'author', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['author']) && (mb_strlen($this->container['author']) < 0)) {
                $invalidProperties[] = "invalid value for 'author', the character length must be bigger than or equal to 0.";
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
    * Gets refName
    *  分支/tag名
    *
    * @return string|null
    */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
    * Sets refName
    *
    * @param string|null $refName 分支/tag名
    *
    * @return $this
    */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;
        return $this;
    }

    /**
    * Gets since
    *  起始时间（不包含）
    *
    * @return string|null
    */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
    * Sets since
    *
    * @param string|null $since 起始时间（不包含）
    *
    * @return $this
    */
    public function setSince($since)
    {
        $this->container['since'] = $since;
        return $this;
    }

    /**
    * Gets until
    *  结束时间（不包含）
    *
    * @return string|null
    */
    public function getUntil()
    {
        return $this->container['until'];
    }

    /**
    * Sets until
    *
    * @param string|null $until 结束时间（不包含）
    *
    * @return $this
    */
    public function setUntil($until)
    {
        $this->container['until'] = $until;
        return $this;
    }

    /**
    * Gets path
    *  The file path
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
    * @param string|null $path The file path
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets message
    *  提交信息或者commit id
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 提交信息或者commit id
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets author
    *  代码作者名称
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author 代码作者名称
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets orderByDate
    *  是否按照时间降序排序
    *
    * @return bool|null
    */
    public function getOrderByDate()
    {
        return $this->container['orderByDate'];
    }

    /**
    * Sets orderByDate
    *
    * @param bool|null $orderByDate 是否按照时间降序排序
    *
    * @return $this
    */
    public function setOrderByDate($orderByDate)
    {
        $this->container['orderByDate'] = $orderByDate;
        return $this;
    }

    /**
    * Gets follow
    *  为true时可以追踪文件移动、改名前后的提交记录
    *
    * @return bool|null
    */
    public function getFollow()
    {
        return $this->container['follow'];
    }

    /**
    * Sets follow
    *
    * @param bool|null $follow 为true时可以追踪文件移动、改名前后的提交记录
    *
    * @return $this
    */
    public function setFollow($follow)
    {
        $this->container['follow'] = $follow;
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

