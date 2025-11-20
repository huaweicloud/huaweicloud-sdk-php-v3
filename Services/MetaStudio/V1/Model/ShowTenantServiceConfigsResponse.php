<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTenantServiceConfigsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTenantServiceConfigsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceSharedConfig  serviceSharedConfig
    * tenantLogConfig  tenantLogConfig
    * subAccountControlConfig  subAccountControlConfig
    * isAiMarkOn  AI标识开关
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceSharedConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ServiceSharedConfig',
            'tenantLogConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TenantLogConfig',
            'subAccountControlConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SubAccountControlConfig',
            'isAiMarkOn' => 'bool',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceSharedConfig  serviceSharedConfig
    * tenantLogConfig  tenantLogConfig
    * subAccountControlConfig  subAccountControlConfig
    * isAiMarkOn  AI标识开关
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceSharedConfig' => null,
        'tenantLogConfig' => null,
        'subAccountControlConfig' => null,
        'isAiMarkOn' => null,
        'xRequestId' => null
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
    * serviceSharedConfig  serviceSharedConfig
    * tenantLogConfig  tenantLogConfig
    * subAccountControlConfig  subAccountControlConfig
    * isAiMarkOn  AI标识开关
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceSharedConfig' => 'service_shared_config',
            'tenantLogConfig' => 'tenant_log_config',
            'subAccountControlConfig' => 'sub_account_control_config',
            'isAiMarkOn' => 'is_ai_mark_on',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceSharedConfig  serviceSharedConfig
    * tenantLogConfig  tenantLogConfig
    * subAccountControlConfig  subAccountControlConfig
    * isAiMarkOn  AI标识开关
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceSharedConfig' => 'setServiceSharedConfig',
            'tenantLogConfig' => 'setTenantLogConfig',
            'subAccountControlConfig' => 'setSubAccountControlConfig',
            'isAiMarkOn' => 'setIsAiMarkOn',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceSharedConfig  serviceSharedConfig
    * tenantLogConfig  tenantLogConfig
    * subAccountControlConfig  subAccountControlConfig
    * isAiMarkOn  AI标识开关
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceSharedConfig' => 'getServiceSharedConfig',
            'tenantLogConfig' => 'getTenantLogConfig',
            'subAccountControlConfig' => 'getSubAccountControlConfig',
            'isAiMarkOn' => 'getIsAiMarkOn',
            'xRequestId' => 'getXRequestId'
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
        $this->container['serviceSharedConfig'] = isset($data['serviceSharedConfig']) ? $data['serviceSharedConfig'] : null;
        $this->container['tenantLogConfig'] = isset($data['tenantLogConfig']) ? $data['tenantLogConfig'] : null;
        $this->container['subAccountControlConfig'] = isset($data['subAccountControlConfig']) ? $data['subAccountControlConfig'] : null;
        $this->container['isAiMarkOn'] = isset($data['isAiMarkOn']) ? $data['isAiMarkOn'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets serviceSharedConfig
    *  serviceSharedConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ServiceSharedConfig|null
    */
    public function getServiceSharedConfig()
    {
        return $this->container['serviceSharedConfig'];
    }

    /**
    * Sets serviceSharedConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ServiceSharedConfig|null $serviceSharedConfig serviceSharedConfig
    *
    * @return $this
    */
    public function setServiceSharedConfig($serviceSharedConfig)
    {
        $this->container['serviceSharedConfig'] = $serviceSharedConfig;
        return $this;
    }

    /**
    * Gets tenantLogConfig
    *  tenantLogConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TenantLogConfig|null
    */
    public function getTenantLogConfig()
    {
        return $this->container['tenantLogConfig'];
    }

    /**
    * Sets tenantLogConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TenantLogConfig|null $tenantLogConfig tenantLogConfig
    *
    * @return $this
    */
    public function setTenantLogConfig($tenantLogConfig)
    {
        $this->container['tenantLogConfig'] = $tenantLogConfig;
        return $this;
    }

    /**
    * Gets subAccountControlConfig
    *  subAccountControlConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SubAccountControlConfig|null
    */
    public function getSubAccountControlConfig()
    {
        return $this->container['subAccountControlConfig'];
    }

    /**
    * Sets subAccountControlConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SubAccountControlConfig|null $subAccountControlConfig subAccountControlConfig
    *
    * @return $this
    */
    public function setSubAccountControlConfig($subAccountControlConfig)
    {
        $this->container['subAccountControlConfig'] = $subAccountControlConfig;
        return $this;
    }

    /**
    * Gets isAiMarkOn
    *  AI标识开关
    *
    * @return bool|null
    */
    public function getIsAiMarkOn()
    {
        return $this->container['isAiMarkOn'];
    }

    /**
    * Sets isAiMarkOn
    *
    * @param bool|null $isAiMarkOn AI标识开关
    *
    * @return $this
    */
    public function setIsAiMarkOn($isAiMarkOn)
    {
        $this->container['isAiMarkOn'] = $isAiMarkOn;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

