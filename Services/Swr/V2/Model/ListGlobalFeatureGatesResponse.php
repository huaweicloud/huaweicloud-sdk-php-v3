<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalFeatureGatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalFeatureGatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableIntranetAccessSwitch  是否展示创建内网访问的开关按钮
    * enableConsoleAgency  是否支持Console侧的一键委托
    * enableV5CustomAgency  是否支持IAM新平面的信任委托
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableUserDefObs' => 'bool',
            'enableEnterprise' => 'bool',
            'cerAvailable' => 'bool',
            'enableIntranetAccessSwitch' => 'bool',
            'enableConsoleAgency' => 'bool',
            'enableV5CustomAgency' => 'bool',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableIntranetAccessSwitch  是否展示创建内网访问的开关按钮
    * enableConsoleAgency  是否支持Console侧的一键委托
    * enableV5CustomAgency  是否支持IAM新平面的信任委托
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableUserDefObs' => null,
        'enableEnterprise' => null,
        'cerAvailable' => null,
        'enableIntranetAccessSwitch' => null,
        'enableConsoleAgency' => null,
        'enableV5CustomAgency' => null,
        'agencyName' => null
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
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableIntranetAccessSwitch  是否展示创建内网访问的开关按钮
    * enableConsoleAgency  是否支持Console侧的一键委托
    * enableV5CustomAgency  是否支持IAM新平面的信任委托
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableUserDefObs' => 'enableUserDefObs',
            'enableEnterprise' => 'enableEnterprise',
            'cerAvailable' => 'cerAvailable',
            'enableIntranetAccessSwitch' => 'enableIntranetAccessSwitch',
            'enableConsoleAgency' => 'enableConsoleAgency',
            'enableV5CustomAgency' => 'enableV5CustomAgency',
            'agencyName' => 'agencyName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableIntranetAccessSwitch  是否展示创建内网访问的开关按钮
    * enableConsoleAgency  是否支持Console侧的一键委托
    * enableV5CustomAgency  是否支持IAM新平面的信任委托
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $setters = [
            'enableUserDefObs' => 'setEnableUserDefObs',
            'enableEnterprise' => 'setEnableEnterprise',
            'cerAvailable' => 'setCerAvailable',
            'enableIntranetAccessSwitch' => 'setEnableIntranetAccessSwitch',
            'enableConsoleAgency' => 'setEnableConsoleAgency',
            'enableV5CustomAgency' => 'setEnableV5CustomAgency',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableIntranetAccessSwitch  是否展示创建内网访问的开关按钮
    * enableConsoleAgency  是否支持Console侧的一键委托
    * enableV5CustomAgency  是否支持IAM新平面的信任委托
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $getters = [
            'enableUserDefObs' => 'getEnableUserDefObs',
            'enableEnterprise' => 'getEnableEnterprise',
            'cerAvailable' => 'getCerAvailable',
            'enableIntranetAccessSwitch' => 'getEnableIntranetAccessSwitch',
            'enableConsoleAgency' => 'getEnableConsoleAgency',
            'enableV5CustomAgency' => 'getEnableV5CustomAgency',
            'agencyName' => 'getAgencyName'
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
        $this->container['enableUserDefObs'] = isset($data['enableUserDefObs']) ? $data['enableUserDefObs'] : null;
        $this->container['enableEnterprise'] = isset($data['enableEnterprise']) ? $data['enableEnterprise'] : null;
        $this->container['cerAvailable'] = isset($data['cerAvailable']) ? $data['cerAvailable'] : null;
        $this->container['enableIntranetAccessSwitch'] = isset($data['enableIntranetAccessSwitch']) ? $data['enableIntranetAccessSwitch'] : null;
        $this->container['enableConsoleAgency'] = isset($data['enableConsoleAgency']) ? $data['enableConsoleAgency'] : null;
        $this->container['enableV5CustomAgency'] = isset($data['enableV5CustomAgency']) ? $data['enableV5CustomAgency'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
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
    * Gets enableUserDefObs
    *  是否支持使用用户的obs桶
    *
    * @return bool|null
    */
    public function getEnableUserDefObs()
    {
        return $this->container['enableUserDefObs'];
    }

    /**
    * Sets enableUserDefObs
    *
    * @param bool|null $enableUserDefObs 是否支持使用用户的obs桶
    *
    * @return $this
    */
    public function setEnableUserDefObs($enableUserDefObs)
    {
        $this->container['enableUserDefObs'] = $enableUserDefObs;
        return $this;
    }

    /**
    * Gets enableEnterprise
    *  是否支持支持企业项目
    *
    * @return bool|null
    */
    public function getEnableEnterprise()
    {
        return $this->container['enableEnterprise'];
    }

    /**
    * Sets enableEnterprise
    *
    * @param bool|null $enableEnterprise 是否支持支持企业项目
    *
    * @return $this
    */
    public function setEnableEnterprise($enableEnterprise)
    {
        $this->container['enableEnterprise'] = $enableEnterprise;
        return $this;
    }

    /**
    * Gets cerAvailable
    *  是否支持SWR企业版功能
    *
    * @return bool|null
    */
    public function getCerAvailable()
    {
        return $this->container['cerAvailable'];
    }

    /**
    * Sets cerAvailable
    *
    * @param bool|null $cerAvailable 是否支持SWR企业版功能
    *
    * @return $this
    */
    public function setCerAvailable($cerAvailable)
    {
        $this->container['cerAvailable'] = $cerAvailable;
        return $this;
    }

    /**
    * Gets enableIntranetAccessSwitch
    *  是否展示创建内网访问的开关按钮
    *
    * @return bool|null
    */
    public function getEnableIntranetAccessSwitch()
    {
        return $this->container['enableIntranetAccessSwitch'];
    }

    /**
    * Sets enableIntranetAccessSwitch
    *
    * @param bool|null $enableIntranetAccessSwitch 是否展示创建内网访问的开关按钮
    *
    * @return $this
    */
    public function setEnableIntranetAccessSwitch($enableIntranetAccessSwitch)
    {
        $this->container['enableIntranetAccessSwitch'] = $enableIntranetAccessSwitch;
        return $this;
    }

    /**
    * Gets enableConsoleAgency
    *  是否支持Console侧的一键委托
    *
    * @return bool|null
    */
    public function getEnableConsoleAgency()
    {
        return $this->container['enableConsoleAgency'];
    }

    /**
    * Sets enableConsoleAgency
    *
    * @param bool|null $enableConsoleAgency 是否支持Console侧的一键委托
    *
    * @return $this
    */
    public function setEnableConsoleAgency($enableConsoleAgency)
    {
        $this->container['enableConsoleAgency'] = $enableConsoleAgency;
        return $this;
    }

    /**
    * Gets enableV5CustomAgency
    *  是否支持IAM新平面的信任委托
    *
    * @return bool|null
    */
    public function getEnableV5CustomAgency()
    {
        return $this->container['enableV5CustomAgency'];
    }

    /**
    * Sets enableV5CustomAgency
    *
    * @param bool|null $enableV5CustomAgency 是否支持IAM新平面的信任委托
    *
    * @return $this
    */
    public function setEnableV5CustomAgency($enableV5CustomAgency)
    {
        $this->container['enableV5CustomAgency'] = $enableV5CustomAgency;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

