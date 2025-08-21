<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebhookParamsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebhookParamsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    * pushEvents  **参数解释：** 是否启用推送事件。
    * pushEventsBranchRegexFilter  **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    * tagPushEvents  **参数解释：** 是否启用Tag推送事件。
    * mergeRequestsEvents  **参数解释：** 是否启用合并请求事件。
    * noteEvents  **参数解释：** 是否启用评论事件。
    * token  **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    * tokenType  **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'pushEvents' => 'bool',
            'pushEventsBranchRegexFilter' => 'string',
            'tagPushEvents' => 'bool',
            'mergeRequestsEvents' => 'bool',
            'noteEvents' => 'bool',
            'token' => 'string',
            'tokenType' => 'string',
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    * pushEvents  **参数解释：** 是否启用推送事件。
    * pushEventsBranchRegexFilter  **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    * tagPushEvents  **参数解释：** 是否启用Tag推送事件。
    * mergeRequestsEvents  **参数解释：** 是否启用合并请求事件。
    * noteEvents  **参数解释：** 是否启用评论事件。
    * token  **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    * tokenType  **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'pushEvents' => null,
        'pushEventsBranchRegexFilter' => null,
        'tagPushEvents' => null,
        'mergeRequestsEvents' => null,
        'noteEvents' => null,
        'token' => null,
        'tokenType' => null,
        'name' => null,
        'description' => null
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
    * url  **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    * pushEvents  **参数解释：** 是否启用推送事件。
    * pushEventsBranchRegexFilter  **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    * tagPushEvents  **参数解释：** 是否启用Tag推送事件。
    * mergeRequestsEvents  **参数解释：** 是否启用合并请求事件。
    * noteEvents  **参数解释：** 是否启用评论事件。
    * token  **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    * tokenType  **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'pushEvents' => 'push_events',
            'pushEventsBranchRegexFilter' => 'push_events_branch_regex_filter',
            'tagPushEvents' => 'tag_push_events',
            'mergeRequestsEvents' => 'merge_requests_events',
            'noteEvents' => 'note_events',
            'token' => 'token',
            'tokenType' => 'token_type',
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    * pushEvents  **参数解释：** 是否启用推送事件。
    * pushEventsBranchRegexFilter  **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    * tagPushEvents  **参数解释：** 是否启用Tag推送事件。
    * mergeRequestsEvents  **参数解释：** 是否启用合并请求事件。
    * noteEvents  **参数解释：** 是否启用评论事件。
    * token  **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    * tokenType  **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'pushEvents' => 'setPushEvents',
            'pushEventsBranchRegexFilter' => 'setPushEventsBranchRegexFilter',
            'tagPushEvents' => 'setTagPushEvents',
            'mergeRequestsEvents' => 'setMergeRequestsEvents',
            'noteEvents' => 'setNoteEvents',
            'token' => 'setToken',
            'tokenType' => 'setTokenType',
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    * pushEvents  **参数解释：** 是否启用推送事件。
    * pushEventsBranchRegexFilter  **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    * tagPushEvents  **参数解释：** 是否启用Tag推送事件。
    * mergeRequestsEvents  **参数解释：** 是否启用合并请求事件。
    * noteEvents  **参数解释：** 是否启用评论事件。
    * token  **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    * tokenType  **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'pushEvents' => 'getPushEvents',
            'pushEventsBranchRegexFilter' => 'getPushEventsBranchRegexFilter',
            'tagPushEvents' => 'getTagPushEvents',
            'mergeRequestsEvents' => 'getMergeRequestsEvents',
            'noteEvents' => 'getNoteEvents',
            'token' => 'getToken',
            'tokenType' => 'getTokenType',
            'name' => 'getName',
            'description' => 'getDescription'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['pushEvents'] = isset($data['pushEvents']) ? $data['pushEvents'] : null;
        $this->container['pushEventsBranchRegexFilter'] = isset($data['pushEventsBranchRegexFilter']) ? $data['pushEventsBranchRegexFilter'] : null;
        $this->container['tagPushEvents'] = isset($data['tagPushEvents']) ? $data['tagPushEvents'] : null;
        $this->container['mergeRequestsEvents'] = isset($data['mergeRequestsEvents']) ? $data['mergeRequestsEvents'] : null;
        $this->container['noteEvents'] = isset($data['noteEvents']) ? $data['noteEvents'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['tokenType'] = isset($data['tokenType']) ? $data['tokenType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 500)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pushEventsBranchRegexFilter']) && (mb_strlen($this->container['pushEventsBranchRegexFilter']) > 500)) {
                $invalidProperties[] = "invalid value for 'pushEventsBranchRegexFilter', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['pushEventsBranchRegexFilter']) && (mb_strlen($this->container['pushEventsBranchRegexFilter']) < 0)) {
                $invalidProperties[] = "invalid value for 'pushEventsBranchRegexFilter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 2000)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 0)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tokenType']) && (mb_strlen($this->container['tokenType']) > 200)) {
                $invalidProperties[] = "invalid value for 'tokenType', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['tokenType']) && (mb_strlen($this->container['tokenType']) < 0)) {
                $invalidProperties[] = "invalid value for 'tokenType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets url
    *  **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** webhook地址。 **取值范围：** 字符串长度不少于0，不超过500。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets pushEvents
    *  **参数解释：** 是否启用推送事件。
    *
    * @return bool|null
    */
    public function getPushEvents()
    {
        return $this->container['pushEvents'];
    }

    /**
    * Sets pushEvents
    *
    * @param bool|null $pushEvents **参数解释：** 是否启用推送事件。
    *
    * @return $this
    */
    public function setPushEvents($pushEvents)
    {
        $this->container['pushEvents'] = $pushEvents;
        return $this;
    }

    /**
    * Gets pushEventsBranchRegexFilter
    *  **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    *
    * @return string|null
    */
    public function getPushEventsBranchRegexFilter()
    {
        return $this->container['pushEventsBranchRegexFilter'];
    }

    /**
    * Sets pushEventsBranchRegexFilter
    *
    * @param string|null $pushEventsBranchRegexFilter **参数解释：** 推送事件分支过滤正则规则。 **取值范围：** 字符串长度不少于0，不超过500。
    *
    * @return $this
    */
    public function setPushEventsBranchRegexFilter($pushEventsBranchRegexFilter)
    {
        $this->container['pushEventsBranchRegexFilter'] = $pushEventsBranchRegexFilter;
        return $this;
    }

    /**
    * Gets tagPushEvents
    *  **参数解释：** 是否启用Tag推送事件。
    *
    * @return bool|null
    */
    public function getTagPushEvents()
    {
        return $this->container['tagPushEvents'];
    }

    /**
    * Sets tagPushEvents
    *
    * @param bool|null $tagPushEvents **参数解释：** 是否启用Tag推送事件。
    *
    * @return $this
    */
    public function setTagPushEvents($tagPushEvents)
    {
        $this->container['tagPushEvents'] = $tagPushEvents;
        return $this;
    }

    /**
    * Gets mergeRequestsEvents
    *  **参数解释：** 是否启用合并请求事件。
    *
    * @return bool|null
    */
    public function getMergeRequestsEvents()
    {
        return $this->container['mergeRequestsEvents'];
    }

    /**
    * Sets mergeRequestsEvents
    *
    * @param bool|null $mergeRequestsEvents **参数解释：** 是否启用合并请求事件。
    *
    * @return $this
    */
    public function setMergeRequestsEvents($mergeRequestsEvents)
    {
        $this->container['mergeRequestsEvents'] = $mergeRequestsEvents;
        return $this;
    }

    /**
    * Gets noteEvents
    *  **参数解释：** 是否启用评论事件。
    *
    * @return bool|null
    */
    public function getNoteEvents()
    {
        return $this->container['noteEvents'];
    }

    /**
    * Sets noteEvents
    *
    * @param bool|null $noteEvents **参数解释：** 是否启用评论事件。
    *
    * @return $this
    */
    public function setNoteEvents($noteEvents)
    {
        $this->container['noteEvents'] = $noteEvents;
        return $this;
    }

    /**
    * Gets token
    *  **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token **参数解释：** token值，作为返回值时会使用掩码代替实际值。 **取值范围：** 字符串长度不少于0，不超过2000。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets tokenType
    *  **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return string|null
    */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
    * Sets tokenType
    *
    * @param string|null $tokenType **参数解释：** token类型，默认为X-Repo-Token。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return $this
    */
    public function setTokenType($tokenType)
    {
        $this->container['tokenType'] = $tokenType;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 名称。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

