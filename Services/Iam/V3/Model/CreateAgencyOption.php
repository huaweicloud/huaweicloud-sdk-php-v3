<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAgencyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAgencyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  委托名，长度不大于64位。
    * domainId  委托方账号ID。
    * trustDomainId  被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * trustDomainName  被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * description  委托描述信息，长度不大于255位。
    * duration  description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'domainId' => 'string',
            'trustDomainId' => 'string',
            'trustDomainName' => 'string',
            'description' => 'string',
            'duration' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  委托名，长度不大于64位。
    * domainId  委托方账号ID。
    * trustDomainId  被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * trustDomainName  被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * description  委托描述信息，长度不大于255位。
    * duration  description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'domainId' => null,
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
    * name  委托名，长度不大于64位。
    * domainId  委托方账号ID。
    * trustDomainId  被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * trustDomainName  被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * description  委托描述信息，长度不大于255位。
    * duration  description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'domainId' => 'domain_id',
            'trustDomainId' => 'trust_domain_id',
            'trustDomainName' => 'trust_domain_name',
            'description' => 'description',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  委托名，长度不大于64位。
    * domainId  委托方账号ID。
    * trustDomainId  被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * trustDomainName  被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * description  委托描述信息，长度不大于255位。
    * duration  description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'domainId' => 'setDomainId',
            'trustDomainId' => 'setTrustDomainId',
            'trustDomainName' => 'setTrustDomainName',
            'description' => 'setDescription',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  委托名，长度不大于64位。
    * domainId  委托方账号ID。
    * trustDomainId  被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * trustDomainName  被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
    * description  委托描述信息，长度不大于255位。
    * duration  description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'domainId' => 'getDomainId',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
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
    * Gets name
    *  委托名，长度不大于64位。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 委托名，长度不大于64位。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domainId
    *  委托方账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 委托方账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets trustDomainId
    *  被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
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
    * @param string|null $trustDomainId 被委托方账号ID。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
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
    *  被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
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
    * @param string|null $trustDomainName 被委托方账号名。trust_domain_id和trust_domain_name至少填写一个，若都填写优先校验trust_domain_name。
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
    *  委托描述信息，长度不大于255位。
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
    * @param string|null $description 委托描述信息，长度不大于255位。
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
    *  description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
    *
    * @return object|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param object|null $duration description: 委托的期限，单位为“天”。默认为FOREVER。取值为“FOREVER\"表示委托的期限为永久，取值为\"ONEDAY\"表示委托的期限为一天,取值为自定义天数表示委托的期限为有限天数，如20。四个参数至少填写一个。
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

