<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGroupMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGroupMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * query  **参数解释：** 成员搜索字符串
    * joinWay  **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    * accessLevel  **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'int',
            'projectId' => 'string',
            'query' => 'string',
            'joinWay' => 'string',
            'accessLevel' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * query  **参数解释：** 成员搜索字符串
    * joinWay  **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    * accessLevel  **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => 'int32',
        'projectId' => null,
        'query' => null,
        'joinWay' => null,
        'accessLevel' => null,
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
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * query  **参数解释：** 成员搜索字符串
    * joinWay  **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    * accessLevel  **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'projectId' => 'project_id',
            'query' => 'query',
            'joinWay' => 'join_way',
            'accessLevel' => 'access_level',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * query  **参数解释：** 成员搜索字符串
    * joinWay  **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    * accessLevel  **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'projectId' => 'setProjectId',
            'query' => 'setQuery',
            'joinWay' => 'setJoinWay',
            'accessLevel' => 'setAccessLevel',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * query  **参数解释：** 成员搜索字符串
    * joinWay  **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    * accessLevel  **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'projectId' => 'getProjectId',
            'query' => 'getQuery',
            'joinWay' => 'getJoinWay',
            'accessLevel' => 'getAccessLevel',
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
    const JOIN_WAY_DOMAIN = 'domain';
    const JOIN_WAY_NORMAL = 'normal';
    const JOIN_WAY_INHERIT = 'inherit';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJoinWayAllowableValues()
    {
        return [
            self::JOIN_WAY_DOMAIN,
            self::JOIN_WAY_NORMAL,
            self::JOIN_WAY_INHERIT,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['joinWay'] = isset($data['joinWay']) ? $data['joinWay'] : null;
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
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
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if (($this->container['groupId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['groupId'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 2000)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getJoinWayAllowableValues();
                if (!is_null($this->container['joinWay']) && !in_array($this->container['joinWay'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'joinWay', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['joinWay']) && (mb_strlen($this->container['joinWay']) > 2000)) {
                $invalidProperties[] = "invalid value for 'joinWay', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['joinWay']) && (mb_strlen($this->container['joinWay']) < 1)) {
                $invalidProperties[] = "invalid value for 'joinWay', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be bigger than or equal to 1.";
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
    * Gets groupId
    *  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return int
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int $groupId **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets query
    *  **参数解释：** 成员搜索字符串
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query **参数解释：** 成员搜索字符串
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets joinWay
    *  **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    *
    * @return string|null
    */
    public function getJoinWay()
    {
        return $this->container['joinWay'];
    }

    /**
    * Sets joinWay
    *
    * @param string|null $joinWay **参数解释：** 成员加入方式 domain 租户 normal 普通 inherit 继承
    *
    * @return $this
    */
    public function setJoinWay($joinWay)
    {
        $this->container['joinWay'] = $joinWay;
        return $this;
    }

    /**
    * Gets accessLevel
    *  **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    *
    * @return int|null
    */
    public function getAccessLevel()
    {
        return $this->container['accessLevel'];
    }

    /**
    * Sets accessLevel
    *
    * @param int|null $accessLevel **参数解释：** 过滤成员的access level， 10待审核 20浏览者 30开发者 40管理员 50所有者
    *
    * @return $this
    */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;
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

