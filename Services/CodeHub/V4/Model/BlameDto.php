<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlameDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlameDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commit  commit
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * lines  行信息
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commit' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryCommitDto',
            'avatarUrl' => 'string',
            'lines' => '\HuaweiCloud\SDK\CodeHub\V4\Model\LineContentDto[]',
            'nickName' => 'string',
            'tenantName' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commit  commit
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * lines  行信息
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commit' => null,
        'avatarUrl' => null,
        'lines' => null,
        'nickName' => null,
        'tenantName' => null,
        'userName' => null
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
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * lines  行信息
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commit' => 'commit',
            'avatarUrl' => 'avatar_url',
            'lines' => 'lines',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commit  commit
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * lines  行信息
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'commit' => 'setCommit',
            'avatarUrl' => 'setAvatarUrl',
            'lines' => 'setLines',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commit  commit
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * lines  行信息
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'commit' => 'getCommit',
            'avatarUrl' => 'getAvatarUrl',
            'lines' => 'getLines',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'userName' => 'getUserName'
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
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
    * Gets commit
    *  commit
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryCommitDto|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryCommitDto|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  **参数解释：** 头像链接 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
    * Sets avatarUrl
    *
    * @param string|null $avatarUrl **参数解释：** 头像链接 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
        return $this;
    }

    /**
    * Gets lines
    *  行信息
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\LineContentDto[]|null
    */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
    * Sets lines
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\LineContentDto[]|null $lines 行信息
    *
    * @return $this
    */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 昵称 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName **参数解释：** 昵称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 租户名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

