<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  创建application的名字。
    * platform  应用平台。
    * createTime  创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * applicationUrn  Application的唯一资源标识。
    * applicationId  Application的唯一标识ID。
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'platform' => 'string',
            'createTime' => 'string',
            'applicationUrn' => 'string',
            'applicationId' => 'string',
            'enabled' => 'string',
            'appleCertificateExpirationDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  创建application的名字。
    * platform  应用平台。
    * createTime  创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * applicationUrn  Application的唯一资源标识。
    * applicationId  Application的唯一标识ID。
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'platform' => null,
        'createTime' => null,
        'applicationUrn' => null,
        'applicationId' => null,
        'enabled' => null,
        'appleCertificateExpirationDate' => null
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
    * name  创建application的名字。
    * platform  应用平台。
    * createTime  创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * applicationUrn  Application的唯一资源标识。
    * applicationId  Application的唯一标识ID。
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'platform' => 'platform',
            'createTime' => 'create_time',
            'applicationUrn' => 'application_urn',
            'applicationId' => 'application_id',
            'enabled' => 'enabled',
            'appleCertificateExpirationDate' => 'apple_certificate_expiration_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  创建application的名字。
    * platform  应用平台。
    * createTime  创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * applicationUrn  Application的唯一资源标识。
    * applicationId  Application的唯一标识ID。
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'platform' => 'setPlatform',
            'createTime' => 'setCreateTime',
            'applicationUrn' => 'setApplicationUrn',
            'applicationId' => 'setApplicationId',
            'enabled' => 'setEnabled',
            'appleCertificateExpirationDate' => 'setAppleCertificateExpirationDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  创建application的名字。
    * platform  应用平台。
    * createTime  创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * applicationUrn  Application的唯一资源标识。
    * applicationId  Application的唯一标识ID。
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'platform' => 'getPlatform',
            'createTime' => 'getCreateTime',
            'applicationUrn' => 'getApplicationUrn',
            'applicationId' => 'getApplicationId',
            'enabled' => 'getEnabled',
            'appleCertificateExpirationDate' => 'getAppleCertificateExpirationDate'
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
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['applicationUrn'] = isset($data['applicationUrn']) ? $data['applicationUrn'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['appleCertificateExpirationDate'] = isset($data['appleCertificateExpirationDate']) ? $data['appleCertificateExpirationDate'] : null;
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
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['applicationUrn'] === null) {
            $invalidProperties[] = "'applicationUrn' can't be null";
        }
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    *  创建application的名字。
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
    * @param string $name 创建application的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets platform
    *  应用平台。
    *
    * @return string
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string $platform 应用平台。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets createTime
    *  创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建application的时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets applicationUrn
    *  Application的唯一资源标识。
    *
    * @return string
    */
    public function getApplicationUrn()
    {
        return $this->container['applicationUrn'];
    }

    /**
    * Sets applicationUrn
    *
    * @param string $applicationUrn Application的唯一资源标识。
    *
    * @return $this
    */
    public function setApplicationUrn($applicationUrn)
    {
        $this->container['applicationUrn'] = $applicationUrn;
        return $this;
    }

    /**
    * Gets applicationId
    *  Application的唯一标识ID。
    *
    * @return string
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string $applicationId Application的唯一标识ID。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets enabled
    *  应用平台是否启用。
    *
    * @return string
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string $enabled 应用平台是否启用。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets appleCertificateExpirationDate
    *  苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getAppleCertificateExpirationDate()
    {
        return $this->container['appleCertificateExpirationDate'];
    }

    /**
    * Sets appleCertificateExpirationDate
    *
    * @param string|null $appleCertificateExpirationDate 苹果证书过期时间APNS、APNS_SANDBOX平台特有属性时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setAppleCertificateExpirationDate($appleCertificateExpirationDate)
    {
        $this->container['appleCertificateExpirationDate'] = $appleCertificateExpirationDate;
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

