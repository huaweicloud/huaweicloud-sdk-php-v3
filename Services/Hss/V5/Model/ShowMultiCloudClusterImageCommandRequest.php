<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMultiCloudClusterImageCommandRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMultiCloudClusterImageCommandRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageRepo  镜像仓地址
    * organization  组织名称
    * username  用户名
    * password  密码
    * plugType  **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageRepo' => 'string',
            'organization' => 'string',
            'username' => 'string',
            'password' => 'string',
            'plugType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageRepo  镜像仓地址
    * organization  组织名称
    * username  用户名
    * password  密码
    * plugType  **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageRepo' => null,
        'organization' => null,
        'username' => null,
        'password' => null,
        'plugType' => null
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
    * imageRepo  镜像仓地址
    * organization  组织名称
    * username  用户名
    * password  密码
    * plugType  **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageRepo' => 'image_repo',
            'organization' => 'organization',
            'username' => 'username',
            'password' => 'password',
            'plugType' => 'plug_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageRepo  镜像仓地址
    * organization  组织名称
    * username  用户名
    * password  密码
    * plugType  **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'imageRepo' => 'setImageRepo',
            'organization' => 'setOrganization',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'plugType' => 'setPlugType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageRepo  镜像仓地址
    * organization  组织名称
    * username  用户名
    * password  密码
    * plugType  **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'imageRepo' => 'getImageRepo',
            'organization' => 'getOrganization',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'plugType' => 'getPlugType'
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
        $this->container['imageRepo'] = isset($data['imageRepo']) ? $data['imageRepo'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['plugType'] = isset($data['plugType']) ? $data['plugType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageRepo'] === null) {
            $invalidProperties[] = "'imageRepo' can't be null";
        }
            if ((mb_strlen($this->container['imageRepo']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageRepo', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['imageRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageRepo', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['imageRepo'])) {
                $invalidProperties[] = "invalid value for 'imageRepo', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
            if ((mb_strlen($this->container['organization']) > 128)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['organization']) < 1)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['organization'])) {
                $invalidProperties[] = "invalid value for 'organization', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
            if ((mb_strlen($this->container['username']) > 64)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['username'])) {
                $invalidProperties[] = "invalid value for 'username', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 64)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['password'])) {
                $invalidProperties[] = "invalid value for 'password', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['plugType']) && (mb_strlen($this->container['plugType']) > 32)) {
                $invalidProperties[] = "invalid value for 'plugType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['plugType']) && (mb_strlen($this->container['plugType']) < 0)) {
                $invalidProperties[] = "invalid value for 'plugType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['plugType']) && !preg_match("/^(docker|agent)$/", $this->container['plugType'])) {
                $invalidProperties[] = "invalid value for 'plugType', must be conform to the pattern /^(docker|agent)$/.";
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
    * Gets imageRepo
    *  镜像仓地址
    *
    * @return string
    */
    public function getImageRepo()
    {
        return $this->container['imageRepo'];
    }

    /**
    * Sets imageRepo
    *
    * @param string $imageRepo 镜像仓地址
    *
    * @return $this
    */
    public function setImageRepo($imageRepo)
    {
        $this->container['imageRepo'] = $imageRepo;
        return $this;
    }

    /**
    * Gets organization
    *  组织名称
    *
    * @return string
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string $organization 组织名称
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets username
    *  用户名
    *
    * @return string
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string $username 用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets plugType
    *  **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPlugType()
    {
        return $this->container['plugType'];
    }

    /**
    * Sets plugType
    *
    * @param string|null $plugType **参数解释**: 插件类型 **约束限制**: 不涉及 **取值范围**: - docker: docker插件镜像 - agent: hostguard镜像 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPlugType($plugType)
    {
        $this->container['plugType'] = $plugType;
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

