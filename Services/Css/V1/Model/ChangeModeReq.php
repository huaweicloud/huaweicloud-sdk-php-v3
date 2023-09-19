<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeModeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'changeModeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorityEnable  是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    * adminPwd  安全模式下集群密码。
    * httpsEnable  是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorityEnable' => 'bool',
            'adminPwd' => 'string',
            'httpsEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorityEnable  是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    * adminPwd  安全模式下集群密码。
    * httpsEnable  是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorityEnable' => null,
        'adminPwd' => null,
        'httpsEnable' => null
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
    * authorityEnable  是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    * adminPwd  安全模式下集群密码。
    * httpsEnable  是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorityEnable' => 'authorityEnable',
            'adminPwd' => 'adminPwd',
            'httpsEnable' => 'httpsEnable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorityEnable  是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    * adminPwd  安全模式下集群密码。
    * httpsEnable  是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorityEnable' => 'setAuthorityEnable',
            'adminPwd' => 'setAdminPwd',
            'httpsEnable' => 'setHttpsEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorityEnable  是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    * adminPwd  安全模式下集群密码。
    * httpsEnable  是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorityEnable' => 'getAuthorityEnable',
            'adminPwd' => 'getAdminPwd',
            'httpsEnable' => 'getHttpsEnable'
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
        $this->container['authorityEnable'] = isset($data['authorityEnable']) ? $data['authorityEnable'] : null;
        $this->container['adminPwd'] = isset($data['adminPwd']) ? $data['adminPwd'] : null;
        $this->container['httpsEnable'] = isset($data['httpsEnable']) ? $data['httpsEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authorityEnable'] === null) {
            $invalidProperties[] = "'authorityEnable' can't be null";
        }
        if ($this->container['httpsEnable'] === null) {
            $invalidProperties[] = "'httpsEnable' can't be null";
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
    * Gets authorityEnable
    *  是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    *
    * @return bool
    */
    public function getAuthorityEnable()
    {
        return $this->container['authorityEnable'];
    }

    /**
    * Sets authorityEnable
    *
    * @param bool $authorityEnable 是否开启安全模式。 - true: 开启安全模式。 - false: 关闭安全模式。 默认为：true。
    *
    * @return $this
    */
    public function setAuthorityEnable($authorityEnable)
    {
        $this->container['authorityEnable'] = $authorityEnable;
        return $this;
    }

    /**
    * Gets adminPwd
    *  安全模式下集群密码。
    *
    * @return string|null
    */
    public function getAdminPwd()
    {
        return $this->container['adminPwd'];
    }

    /**
    * Sets adminPwd
    *
    * @param string|null $adminPwd 安全模式下集群密码。
    *
    * @return $this
    */
    public function setAdminPwd($adminPwd)
    {
        $this->container['adminPwd'] = $adminPwd;
        return $this;
    }

    /**
    * Gets httpsEnable
    *  是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @return bool
    */
    public function getHttpsEnable()
    {
        return $this->container['httpsEnable'];
    }

    /**
    * Sets httpsEnable
    *
    * @param bool $httpsEnable 是否开启HTTPS。 - true: 开启HTTPS。 - false: 关闭HTTPS。 默认为：true。
    *
    * @return $this
    */
    public function setHttpsEnable($httpsEnable)
    {
        $this->container['httpsEnable'] = $httpsEnable;
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

