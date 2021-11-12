<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneListUsersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneListUsersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  是否启IAM用户，true为启用，false为停用，默认为true。
    * name  IAM用户名。
    * passwordExpiresAt  密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'enabled' => 'bool',
            'name' => 'string',
            'passwordExpiresAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  是否启IAM用户，true为启用，false为停用，默认为true。
    * name  IAM用户名。
    * passwordExpiresAt  密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'enabled' => null,
        'name' => null,
        'passwordExpiresAt' => null
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
    * domainId  IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  是否启IAM用户，true为启用，false为停用，默认为true。
    * name  IAM用户名。
    * passwordExpiresAt  密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'enabled' => 'enabled',
            'name' => 'name',
            'passwordExpiresAt' => 'password_expires_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  是否启IAM用户，true为启用，false为停用，默认为true。
    * name  IAM用户名。
    * passwordExpiresAt  密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'enabled' => 'setEnabled',
            'name' => 'setName',
            'passwordExpiresAt' => 'setPasswordExpiresAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  是否启IAM用户，true为启用，false为停用，默认为true。
    * name  IAM用户名。
    * passwordExpiresAt  密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'enabled' => 'getEnabled',
            'name' => 'getName',
            'passwordExpiresAt' => 'getPasswordExpiresAt'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['passwordExpiresAt'] = isset($data['passwordExpiresAt']) ? $data['passwordExpiresAt'] : null;
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
    * Gets domainId
    *  IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId IAM用户所属账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启IAM用户，true为启用，false为停用，默认为true。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启IAM用户，true为启用，false为停用，默认为true。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets name
    *  IAM用户名。
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
    * @param string|null $name IAM用户名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets passwordExpiresAt
    *  密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @return string|null
    */
    public function getPasswordExpiresAt()
    {
        return $this->container['passwordExpiresAt'];
    }

    /**
    * Sets passwordExpiresAt
    *
    * @param string|null $passwordExpiresAt 密码过期时间，格式为：password_expires_at={operator}:{timestamp}。timestamp格式为：YYYY-MM-DDTHH:mm:ssZ。示例：  ``` password_expires_at=lt:2016-12-08T22:02:00Z ``` > - operator取值范围：lt，lte，gt，gte，eq，neq。 > - lt：过期时间小于timestamp。 > - lte：过期时间小于等于timestamp。 > - gt：过期时间大于timestamp。 > - gte：过期时间大于等于timestamp。 > - eq：过期时间等于timestamp。 > - neq：过期时间不等于timestamp。
    *
    * @return $this
    */
    public function setPasswordExpiresAt($passwordExpiresAt)
    {
        $this->container['passwordExpiresAt'] = $passwordExpiresAt;
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

