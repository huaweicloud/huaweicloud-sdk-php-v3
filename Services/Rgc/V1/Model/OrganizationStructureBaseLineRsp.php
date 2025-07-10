<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationStructureBaseLineRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationStructureBaseLineRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationalUnitName  注册OU名称。
    * organizationalUnitType  organizationalUnitType
    * accounts  纳管账号基本信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationalUnitName' => 'string',
            'organizationalUnitType' => '\HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalUnitTypeForSetup',
            'accounts' => '\HuaweiCloud\SDK\Rgc\V1\Model\AccountBaselineRsp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationalUnitName  注册OU名称。
    * organizationalUnitType  organizationalUnitType
    * accounts  纳管账号基本信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationalUnitName' => null,
        'organizationalUnitType' => null,
        'accounts' => null
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
    * organizationalUnitName  注册OU名称。
    * organizationalUnitType  organizationalUnitType
    * accounts  纳管账号基本信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationalUnitName' => 'organizational_unit_name',
            'organizationalUnitType' => 'organizational_unit_type',
            'accounts' => 'accounts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationalUnitName  注册OU名称。
    * organizationalUnitType  organizationalUnitType
    * accounts  纳管账号基本信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationalUnitName' => 'setOrganizationalUnitName',
            'organizationalUnitType' => 'setOrganizationalUnitType',
            'accounts' => 'setAccounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationalUnitName  注册OU名称。
    * organizationalUnitType  organizationalUnitType
    * accounts  纳管账号基本信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationalUnitName' => 'getOrganizationalUnitName',
            'organizationalUnitType' => 'getOrganizationalUnitType',
            'accounts' => 'getAccounts'
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
        $this->container['organizationalUnitName'] = isset($data['organizationalUnitName']) ? $data['organizationalUnitName'] : null;
        $this->container['organizationalUnitType'] = isset($data['organizationalUnitType']) ? $data['organizationalUnitType'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['organizationalUnitName']) && (mb_strlen($this->container['organizationalUnitName']) > 64)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organizationalUnitName']) && (mb_strlen($this->container['organizationalUnitName']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationalUnitName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['organizationalUnitName'])) {
                $invalidProperties[] = "invalid value for 'organizationalUnitName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
            }
        if ($this->container['organizationalUnitType'] === null) {
            $invalidProperties[] = "'organizationalUnitType' can't be null";
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
    * Gets organizationalUnitName
    *  注册OU名称。
    *
    * @return string|null
    */
    public function getOrganizationalUnitName()
    {
        return $this->container['organizationalUnitName'];
    }

    /**
    * Sets organizationalUnitName
    *
    * @param string|null $organizationalUnitName 注册OU名称。
    *
    * @return $this
    */
    public function setOrganizationalUnitName($organizationalUnitName)
    {
        $this->container['organizationalUnitName'] = $organizationalUnitName;
        return $this;
    }

    /**
    * Gets organizationalUnitType
    *  organizationalUnitType
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalUnitTypeForSetup
    */
    public function getOrganizationalUnitType()
    {
        return $this->container['organizationalUnitType'];
    }

    /**
    * Sets organizationalUnitType
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalUnitTypeForSetup $organizationalUnitType organizationalUnitType
    *
    * @return $this
    */
    public function setOrganizationalUnitType($organizationalUnitType)
    {
        $this->container['organizationalUnitType'] = $organizationalUnitType;
        return $this;
    }

    /**
    * Gets accounts
    *  纳管账号基本信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\AccountBaselineRsp[]|null
    */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
    * Sets accounts
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\AccountBaselineRsp[]|null $accounts 纳管账号基本信息。
    *
    * @return $this
    */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;
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

