<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAgencyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAgencyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trustDomainId  被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * trustDomainName  被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * description  委托描述信息，长度不大于255位。四个参数至少填写一个。
    * duration  委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trustDomainId' => 'string',
            'trustDomainName' => 'string',
            'description' => 'string',
            'duration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trustDomainId  被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * trustDomainName  被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * description  委托描述信息，长度不大于255位。四个参数至少填写一个。
    * duration  委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trustDomainId' => null,
        'trustDomainName' => null,
        'description' => null,
        'duration' => null
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
    * trustDomainId  被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * trustDomainName  被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * description  委托描述信息，长度不大于255位。四个参数至少填写一个。
    * duration  委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trustDomainId' => 'trust_domain_id',
            'trustDomainName' => 'trust_domain_name',
            'description' => 'description',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trustDomainId  被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * trustDomainName  被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * description  委托描述信息，长度不大于255位。四个参数至少填写一个。
    * duration  委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'trustDomainId' => 'setTrustDomainId',
            'trustDomainName' => 'setTrustDomainName',
            'description' => 'setDescription',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trustDomainId  被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * trustDomainName  被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    * description  委托描述信息，长度不大于255位。四个参数至少填写一个。
    * duration  委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'trustDomainId' => 'getTrustDomainId',
            'trustDomainName' => 'getTrustDomainName',
            'description' => 'getDescription',
            'duration' => 'getDuration'
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
        $this->container['trustDomainId'] = isset($data['trustDomainId']) ? $data['trustDomainId'] : null;
        $this->container['trustDomainName'] = isset($data['trustDomainName']) ? $data['trustDomainName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
    * Gets trustDomainId
    *  被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    *
    * @return string|null
    */
    public function getTrustDomainId()
    {
        return $this->container['trustDomainId'];
    }

    /**
    * Sets trustDomainId
    *
    * @param string|null $trustDomainId 被委托方账号ID。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    *
    * @return $this
    */
    public function setTrustDomainId($trustDomainId)
    {
        $this->container['trustDomainId'] = $trustDomainId;
        return $this;
    }

    /**
    * Gets trustDomainName
    *  被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    *
    * @return string|null
    */
    public function getTrustDomainName()
    {
        return $this->container['trustDomainName'];
    }

    /**
    * Sets trustDomainName
    *
    * @param string|null $trustDomainName 被委托方账号名。如果trust_domain_id和trust_domain_name都填写，则优先校验trust_domain_name。四个参数至少填写一个。
    *
    * @return $this
    */
    public function setTrustDomainName($trustDomainName)
    {
        $this->container['trustDomainName'] = $trustDomainName;
        return $this;
    }

    /**
    * Gets description
    *  委托描述信息，长度不大于255位。四个参数至少填写一个。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 委托描述信息，长度不大于255位。四个参数至少填写一个。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets duration
    *  委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

