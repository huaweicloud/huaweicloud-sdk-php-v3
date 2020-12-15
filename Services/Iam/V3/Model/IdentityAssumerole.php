<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentityAssumerole implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentityAssumerole';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agencyName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'durationSeconds' => 'int',
            'sessionUser' => '\HuaweiCloud\SDK\Iam\V3\Model\AssumeroleSessionuser'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agencyName' => null,
        'domainId' => null,
        'domainName' => null,
        'durationSeconds' => 'int32',
        'sessionUser' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agencyName' => 'agency_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'durationSeconds' => 'duration_seconds',
            'sessionUser' => 'session_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'agencyName' => 'setAgencyName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'durationSeconds' => 'setDurationSeconds',
            'sessionUser' => 'setSessionUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'agencyName' => 'getAgencyName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'durationSeconds' => 'getDurationSeconds',
            'sessionUser' => 'getSessionUser'
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
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['durationSeconds'] = isset($data['durationSeconds']) ? $data['durationSeconds'] : 900;
        $this->container['sessionUser'] = isset($data['sessionUser']) ? $data['sessionUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
        }
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] > 86400)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] < 900)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be bigger than or equal to 900.";
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
    * Gets agencyName
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName 委托名。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets domainId
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
    * @param string|null $domainId 委托方的账号ID。“domain_id”与“domain_name”至少填写一个。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 委托方的账号名。“domain_id”与“domain_name”至少填写一个。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets durationSeconds
    *
    * @return int|null
    */
    public function getDurationSeconds()
    {
        return $this->container['durationSeconds'];
    }

    /**
    * Sets durationSeconds
    *
    * @param int|null $durationSeconds AK/SK和securitytoken的有效期，时间单位为秒。取值范围：15min ~ 24h ，默认为15min。
    *
    * @return $this
    */
    public function setDurationSeconds($durationSeconds)
    {
        $this->container['durationSeconds'] = $durationSeconds;
        return $this;
    }

    /**
    * Gets sessionUser
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AssumeroleSessionuser|null
    */
    public function getSessionUser()
    {
        return $this->container['sessionUser'];
    }

    /**
    * Sets sessionUser
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AssumeroleSessionuser|null $sessionUser sessionUser
    *
    * @return $this
    */
    public function setSessionUser($sessionUser)
    {
        $this->container['sessionUser'] = $sessionUser;
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

