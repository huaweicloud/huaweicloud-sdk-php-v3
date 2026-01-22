<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssumeAgencyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssumeAgencyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * assumedAgency  assumedAgency
    * credentials  credentials
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceIdentity' => 'string',
            'assumedAgency' => '\HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyDto',
            'credentials' => '\HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * assumedAgency  assumedAgency
    * credentials  credentials
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceIdentity' => null,
        'assumedAgency' => null,
        'credentials' => null
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
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * assumedAgency  assumedAgency
    * credentials  credentials
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceIdentity' => 'source_identity',
            'assumedAgency' => 'assumed_agency',
            'credentials' => 'credentials'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * assumedAgency  assumedAgency
    * credentials  credentials
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceIdentity' => 'setSourceIdentity',
            'assumedAgency' => 'setAssumedAgency',
            'credentials' => 'setCredentials'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * assumedAgency  assumedAgency
    * credentials  credentials
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceIdentity' => 'getSourceIdentity',
            'assumedAgency' => 'getAssumedAgency',
            'credentials' => 'getCredentials'
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
        $this->container['sourceIdentity'] = isset($data['sourceIdentity']) ? $data['sourceIdentity'] : null;
        $this->container['assumedAgency'] = isset($data['assumedAgency']) ? $data['assumedAgency'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceIdentity']) && !preg_match("/^[\\w+=,.@-]*$/", $this->container['sourceIdentity'])) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', must be conform to the pattern /^[\\w+=,.@-]*$/.";
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
    * Gets sourceIdentity
    *  调用链里最初调用者所声明的身份。
    *
    * @return string|null
    */
    public function getSourceIdentity()
    {
        return $this->container['sourceIdentity'];
    }

    /**
    * Sets sourceIdentity
    *
    * @param string|null $sourceIdentity 调用链里最初调用者所声明的身份。
    *
    * @return $this
    */
    public function setSourceIdentity($sourceIdentity)
    {
        $this->container['sourceIdentity'] = $sourceIdentity;
        return $this;
    }

    /**
    * Gets assumedAgency
    *  assumedAgency
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyDto|null
    */
    public function getAssumedAgency()
    {
        return $this->container['assumedAgency'];
    }

    /**
    * Sets assumedAgency
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyDto|null $assumedAgency assumedAgency
    *
    * @return $this
    */
    public function setAssumedAgency($assumedAgency)
    {
        $this->container['assumedAgency'] = $assumedAgency;
        return $this;
    }

    /**
    * Gets credentials
    *  credentials
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto|null
    */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
    * Sets credentials
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto|null $credentials credentials
    *
    * @return $this
    */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;
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

