<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunRequestV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunRequestV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * accessToken  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitUrl  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitBranch  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ref  **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'accessToken' => 'string',
            'gitUrl' => 'string',
            'gitBranch' => 'string',
            'ref' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * accessToken  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitUrl  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitBranch  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ref  **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'accessToken' => null,
        'gitUrl' => null,
        'gitBranch' => null,
        'ref' => null
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
    * username  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * accessToken  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitUrl  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitBranch  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ref  **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'username',
            'accessToken' => 'access_token',
            'gitUrl' => 'git_url',
            'gitBranch' => 'git_branch',
            'ref' => 'ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * accessToken  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitUrl  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitBranch  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ref  **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'accessToken' => 'setAccessToken',
            'gitUrl' => 'setGitUrl',
            'gitBranch' => 'setGitBranch',
            'ref' => 'setRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * accessToken  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitUrl  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * gitBranch  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ref  **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'accessToken' => 'getAccessToken',
            'gitUrl' => 'getGitUrl',
            'gitBranch' => 'getGitBranch',
            'ref' => 'getRef'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
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
    * Gets username
    *  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets accessToken
    *  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string|null $accessToken **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets gitUrl
    *  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets gitBranch
    *  **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
    * Sets gitBranch
    *
    * @param string|null $gitBranch **参数解释：** 废弃参数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;
        return $this;
    }

    /**
    * Gets ref
    *  **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref **参数解释：** 代码仓拉取MR代码的方式，推荐在检查阶段拉取MR代码失败时使用此参数进行拉取方式的指定。 **约束限制：** 不涉及。 **取值范围：** - pull：以pull/xx/xx方式进行拉取。 - merge_request：以merge_request/xx/xx方式进行拉取。 **默认取值：** 后台自动识别代码仓类型以进行MR代码的拉取。 gitee仓：以pull/xx/xx方式进行拉取。 非gitee仓：以merge_request/xx/xx方式进行拉取。
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
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

