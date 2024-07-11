<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyHlsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyHlsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pushDomain  推流域名
    * application  推流域名APP配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pushDomain' => 'string',
            'application' => '\HuaweiCloud\SDK\Live\V1\Model\PushDomainApplication[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pushDomain  推流域名
    * application  推流域名APP配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pushDomain' => null,
        'application' => null
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
    * pushDomain  推流域名
    * application  推流域名APP配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pushDomain' => 'push_domain',
            'application' => 'application'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pushDomain  推流域名
    * application  推流域名APP配置
    *
    * @var string[]
    */
    protected static $setters = [
            'pushDomain' => 'setPushDomain',
            'application' => 'setApplication'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pushDomain  推流域名
    * application  推流域名APP配置
    *
    * @var string[]
    */
    protected static $getters = [
            'pushDomain' => 'getPushDomain',
            'application' => 'getApplication'
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
        $this->container['pushDomain'] = isset($data['pushDomain']) ? $data['pushDomain'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pushDomain'] === null) {
            $invalidProperties[] = "'pushDomain' can't be null";
        }
            if ((mb_strlen($this->container['pushDomain']) > 255)) {
                $invalidProperties[] = "invalid value for 'pushDomain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['pushDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'pushDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['application'] === null) {
            $invalidProperties[] = "'application' can't be null";
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
    * Gets pushDomain
    *  推流域名
    *
    * @return string
    */
    public function getPushDomain()
    {
        return $this->container['pushDomain'];
    }

    /**
    * Sets pushDomain
    *
    * @param string $pushDomain 推流域名
    *
    * @return $this
    */
    public function setPushDomain($pushDomain)
    {
        $this->container['pushDomain'] = $pushDomain;
        return $this;
    }

    /**
    * Gets application
    *  推流域名APP配置
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\PushDomainApplication[]
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\PushDomainApplication[] $application 推流域名APP配置
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
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

