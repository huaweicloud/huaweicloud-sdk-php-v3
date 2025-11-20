<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FindingPrincipal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FindingPrincipal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identifier  主体身份的标识符。
    * type  主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identifier' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identifier  主体身份的标识符。
    * type  主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identifier' => null,
        'type' => null
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
    * identifier  主体身份的标识符。
    * type  主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identifier' => 'identifier',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identifier  主体身份的标识符。
    * type  主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @var string[]
    */
    protected static $setters = [
            'identifier' => 'setIdentifier',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identifier  主体身份的标识符。
    * type  主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @var string[]
    */
    protected static $getters = [
            'identifier' => 'getIdentifier',
            'type' => 'getType'
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
    const TYPE_ALL_PRINCIPAL = 'all_principal';
    const TYPE_ACCOUNT = 'account';
    const TYPE_ALL_USER_IN_ACCOUNT = 'all_user_in_account';
    const TYPE_ALL_AGENCY_IN_ACCOUNT = 'all_agency_in_account';
    const TYPE_ALL_IDENTITY_PROVIDER_IN_ACCOUNT = 'all_identity_provider_in_account';
    const TYPE_SPECIFIC_USER = 'specific_user';
    const TYPE_SPECIFIC_AGENCY = 'specific_agency';
    const TYPE_SPECIFIC_GROUP = 'specific_group';
    const TYPE_SPECIFIC_IDENTITY_PROVIDER = 'specific_identity_provider';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALL_PRINCIPAL,
            self::TYPE_ACCOUNT,
            self::TYPE_ALL_USER_IN_ACCOUNT,
            self::TYPE_ALL_AGENCY_IN_ACCOUNT,
            self::TYPE_ALL_IDENTITY_PROVIDER_IN_ACCOUNT,
            self::TYPE_SPECIFIC_USER,
            self::TYPE_SPECIFIC_AGENCY,
            self::TYPE_SPECIFIC_GROUP,
            self::TYPE_SPECIFIC_IDENTITY_PROVIDER,
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets identifier
    *  主体身份的标识符。
    *
    * @return string
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string $identifier 主体身份的标识符。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets type
    *  主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 主体身份的类型。 - all_principal：所有主体 - account：账号 - all_user_in_account： 账号下所有用户 - all_agency_in_account： 账号下所有委托 - all_identity_provider_in_account：账号下所有身份提供商 - specific_user：特定用户 - specific_agency：特定委托 - specific_group：特定用户组 - specific_identity_provider：特定身份提供商
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

