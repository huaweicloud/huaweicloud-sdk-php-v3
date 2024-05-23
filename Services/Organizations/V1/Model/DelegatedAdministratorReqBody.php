<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DelegatedAdministratorReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DelegatedAdministratorReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * servicePrincipal  服务主体名称。
    * accountId  账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'servicePrincipal' => 'string',
            'accountId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * servicePrincipal  服务主体名称。
    * accountId  账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'servicePrincipal' => null,
        'accountId' => null
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
    * servicePrincipal  服务主体名称。
    * accountId  账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'servicePrincipal' => 'service_principal',
            'accountId' => 'account_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * servicePrincipal  服务主体名称。
    * accountId  账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'servicePrincipal' => 'setServicePrincipal',
            'accountId' => 'setAccountId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * servicePrincipal  服务主体名称。
    * accountId  账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'servicePrincipal' => 'getServicePrincipal',
            'accountId' => 'getAccountId'
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
        $this->container['servicePrincipal'] = isset($data['servicePrincipal']) ? $data['servicePrincipal'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['servicePrincipal'] === null) {
            $invalidProperties[] = "'servicePrincipal' can't be null";
        }
            if ((mb_strlen($this->container['servicePrincipal']) > 100)) {
                $invalidProperties[] = "invalid value for 'servicePrincipal', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['servicePrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'servicePrincipal', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
            if ((mb_strlen($this->container['accountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[\\w-]+$/.";
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
    * Gets servicePrincipal
    *  服务主体名称。
    *
    * @return string
    */
    public function getServicePrincipal()
    {
        return $this->container['servicePrincipal'];
    }

    /**
    * Sets servicePrincipal
    *
    * @param string $servicePrincipal 服务主体名称。
    *
    * @return $this
    */
    public function setServicePrincipal($servicePrincipal)
    {
        $this->container['servicePrincipal'] = $servicePrincipal;
        return $this;
    }

    /**
    * Gets accountId
    *  账号的唯一标识符（ID）。
    *
    * @return string
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string $accountId 账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
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

