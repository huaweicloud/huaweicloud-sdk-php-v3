<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndirectPartnerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndirectPartnerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indirectPartnerId  精英服务商ID。
    * mobilePhone  精英服务商的手机号码。
    * email  精英服务商的邮箱。
    * accountName  精英服务商的账户名。
    * name  精英服务商的名称。
    * associatedOn  精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    * accountManagerId  客户经理ID。
    * accountManagerName  客户经理的名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indirectPartnerId' => 'string',
            'mobilePhone' => 'string',
            'email' => 'string',
            'accountName' => 'string',
            'name' => 'string',
            'associatedOn' => 'string',
            'accountManagerId' => 'string',
            'accountManagerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indirectPartnerId  精英服务商ID。
    * mobilePhone  精英服务商的手机号码。
    * email  精英服务商的邮箱。
    * accountName  精英服务商的账户名。
    * name  精英服务商的名称。
    * associatedOn  精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    * accountManagerId  客户经理ID。
    * accountManagerName  客户经理的名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indirectPartnerId' => null,
        'mobilePhone' => null,
        'email' => null,
        'accountName' => null,
        'name' => null,
        'associatedOn' => null,
        'accountManagerId' => null,
        'accountManagerName' => null
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
    * indirectPartnerId  精英服务商ID。
    * mobilePhone  精英服务商的手机号码。
    * email  精英服务商的邮箱。
    * accountName  精英服务商的账户名。
    * name  精英服务商的名称。
    * associatedOn  精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    * accountManagerId  客户经理ID。
    * accountManagerName  客户经理的名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indirectPartnerId' => 'indirect_partner_id',
            'mobilePhone' => 'mobile_phone',
            'email' => 'email',
            'accountName' => 'account_name',
            'name' => 'name',
            'associatedOn' => 'associated_on',
            'accountManagerId' => 'account_manager_id',
            'accountManagerName' => 'account_manager_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indirectPartnerId  精英服务商ID。
    * mobilePhone  精英服务商的手机号码。
    * email  精英服务商的邮箱。
    * accountName  精英服务商的账户名。
    * name  精英服务商的名称。
    * associatedOn  精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    * accountManagerId  客户经理ID。
    * accountManagerName  客户经理的名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'indirectPartnerId' => 'setIndirectPartnerId',
            'mobilePhone' => 'setMobilePhone',
            'email' => 'setEmail',
            'accountName' => 'setAccountName',
            'name' => 'setName',
            'associatedOn' => 'setAssociatedOn',
            'accountManagerId' => 'setAccountManagerId',
            'accountManagerName' => 'setAccountManagerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indirectPartnerId  精英服务商ID。
    * mobilePhone  精英服务商的手机号码。
    * email  精英服务商的邮箱。
    * accountName  精英服务商的账户名。
    * name  精英服务商的名称。
    * associatedOn  精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    * accountManagerId  客户经理ID。
    * accountManagerName  客户经理的名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'indirectPartnerId' => 'getIndirectPartnerId',
            'mobilePhone' => 'getMobilePhone',
            'email' => 'getEmail',
            'accountName' => 'getAccountName',
            'name' => 'getName',
            'associatedOn' => 'getAssociatedOn',
            'accountManagerId' => 'getAccountManagerId',
            'accountManagerName' => 'getAccountManagerName'
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
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['associatedOn'] = isset($data['associatedOn']) ? $data['associatedOn'] : null;
        $this->container['accountManagerId'] = isset($data['accountManagerId']) ? $data['accountManagerId'] : null;
        $this->container['accountManagerName'] = isset($data['accountManagerName']) ? $data['accountManagerName'] : null;
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
    * Gets indirectPartnerId
    *  精英服务商ID。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 精英服务商ID。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  精英服务商的手机号码。
    *
    * @return string|null
    */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
    * Sets mobilePhone
    *
    * @param string|null $mobilePhone 精英服务商的手机号码。
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets email
    *  精英服务商的邮箱。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 精英服务商的邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets accountName
    *  精英服务商的账户名。
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 精英服务商的账户名。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets name
    *  精英服务商的名称。
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
    * @param string|null $name 精英服务商的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets associatedOn
    *  精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    *
    * @return string|null
    */
    public function getAssociatedOn()
    {
        return $this->container['associatedOn'];
    }

    /**
    * Sets associatedOn
    *
    * @param string|null $associatedOn 精英服务商关联华为云伙伴能力中心的时间。 UTC时间（包括时区），例如2016-03-28T00:00:00Z。
    *
    * @return $this
    */
    public function setAssociatedOn($associatedOn)
    {
        $this->container['associatedOn'] = $associatedOn;
        return $this;
    }

    /**
    * Gets accountManagerId
    *  客户经理ID。
    *
    * @return string|null
    */
    public function getAccountManagerId()
    {
        return $this->container['accountManagerId'];
    }

    /**
    * Sets accountManagerId
    *
    * @param string|null $accountManagerId 客户经理ID。
    *
    * @return $this
    */
    public function setAccountManagerId($accountManagerId)
    {
        $this->container['accountManagerId'] = $accountManagerId;
        return $this;
    }

    /**
    * Gets accountManagerName
    *  客户经理的名称。
    *
    * @return string|null
    */
    public function getAccountManagerName()
    {
        return $this->container['accountManagerName'];
    }

    /**
    * Sets accountManagerName
    *
    * @param string|null $accountManagerName 客户经理的名称。
    *
    * @return $this
    */
    public function setAccountManagerName($accountManagerName)
    {
        $this->container['accountManagerName'] = $accountManagerName;
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

