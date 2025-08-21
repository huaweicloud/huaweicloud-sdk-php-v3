<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectWebhookLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectWebhookLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * hookId  **参数解释：**  Webhook id。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * repositoryId  **参数解释：** 仓库ID
    * uuid  **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    * createdAfter  **参数解释：** 检索执行时间段的起始时间
    * createdBefore  **参数解释：** 检索执行时间段的结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'hookId' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'repositoryId' => 'int',
            'uuid' => 'string',
            'createdAfter' => '\DateTime',
            'createdBefore' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * hookId  **参数解释：**  Webhook id。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * repositoryId  **参数解释：** 仓库ID
    * uuid  **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    * createdAfter  **参数解释：** 检索执行时间段的起始时间
    * createdBefore  **参数解释：** 检索执行时间段的结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'hookId' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32',
        'repositoryId' => null,
        'uuid' => null,
        'createdAfter' => 'date-time',
        'createdBefore' => 'date-time'
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
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * hookId  **参数解释：**  Webhook id。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * repositoryId  **参数解释：** 仓库ID
    * uuid  **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    * createdAfter  **参数解释：** 检索执行时间段的起始时间
    * createdBefore  **参数解释：** 检索执行时间段的结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'hookId' => 'hook_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'repositoryId' => 'repository_id',
            'uuid' => 'uuid',
            'createdAfter' => 'created_after',
            'createdBefore' => 'created_before'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * hookId  **参数解释：**  Webhook id。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * repositoryId  **参数解释：** 仓库ID
    * uuid  **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    * createdAfter  **参数解释：** 检索执行时间段的起始时间
    * createdBefore  **参数解释：** 检索执行时间段的结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'hookId' => 'setHookId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'repositoryId' => 'setRepositoryId',
            'uuid' => 'setUuid',
            'createdAfter' => 'setCreatedAfter',
            'createdBefore' => 'setCreatedBefore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * hookId  **参数解释：**  Webhook id。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * repositoryId  **参数解释：** 仓库ID
    * uuid  **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    * createdAfter  **参数解释：** 检索执行时间段的起始时间
    * createdBefore  **参数解释：** 检索执行时间段的结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'hookId' => 'getHookId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'repositoryId' => 'getRepositoryId',
            'uuid' => 'getUuid',
            'createdAfter' => 'getCreatedAfter',
            'createdBefore' => 'getCreatedBefore'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['hookId'] = isset($data['hookId']) ? $data['hookId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['createdAfter'] = isset($data['createdAfter']) ? $data['createdAfter'] : null;
        $this->container['createdBefore'] = isset($data['createdBefore']) ? $data['createdBefore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['hookId'] === null) {
            $invalidProperties[] = "'hookId' can't be null";
        }
            if (($this->container['hookId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hookId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['hookId'] < 1)) {
                $invalidProperties[] = "invalid value for 'hookId', must be bigger than or equal to 1.";
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
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 100)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
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
    * Gets hookId
    *  **参数解释：**  Webhook id。
    *
    * @return int
    */
    public function getHookId()
    {
        return $this->container['hookId'];
    }

    /**
    * Sets hookId
    *
    * @param int $hookId **参数解释：**  Webhook id。
    *
    * @return $this
    */
    public function setHookId($hookId)
    {
        $this->container['hookId'] = $hookId;
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
    * Gets repositoryId
    *  **参数解释：** 仓库ID
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库ID
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets uuid
    *  **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid **参数解释：** Webhook每次发送消息时会在请求体中带上uuid字段。uuid具有唯一性，合并请求相关的Webhook事件中的uuid会包含合并请求iid。此处可以使用完整的uuid或者合并请求iid。 **约束限制：** 可选。 **取值范围：** 字符串长度不少于1，不超过100。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets createdAfter
    *  **参数解释：** 检索执行时间段的起始时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAfter()
    {
        return $this->container['createdAfter'];
    }

    /**
    * Sets createdAfter
    *
    * @param \DateTime|null $createdAfter **参数解释：** 检索执行时间段的起始时间
    *
    * @return $this
    */
    public function setCreatedAfter($createdAfter)
    {
        $this->container['createdAfter'] = $createdAfter;
        return $this;
    }

    /**
    * Gets createdBefore
    *  **参数解释：** 检索执行时间段的结束时间
    *
    * @return \DateTime|null
    */
    public function getCreatedBefore()
    {
        return $this->container['createdBefore'];
    }

    /**
    * Sets createdBefore
    *
    * @param \DateTime|null $createdBefore **参数解释：** 检索执行时间段的结束时间
    *
    * @return $this
    */
    public function setCreatedBefore($createdBefore)
    {
        $this->container['createdBefore'] = $createdBefore;
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

