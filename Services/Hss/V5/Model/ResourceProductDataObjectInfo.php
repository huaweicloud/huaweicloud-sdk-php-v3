<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceProductDataObjectInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceProductDataObjectInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  计费模式   - packet_cycle : 包周期   - on_demand : 按需
    * isAutoRenew  是否自动续费
    * versionInfo  版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'object',
            'isAutoRenew' => 'bool',
            'versionInfo' => 'map[string,\HuaweiCloud\SDK\Hss\V5\Model\ShowPeriodResponseInfo[]]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  计费模式   - packet_cycle : 包周期   - on_demand : 按需
    * isAutoRenew  是否自动续费
    * versionInfo  版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => null,
        'isAutoRenew' => null,
        'versionInfo' => null
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
    * chargingMode  计费模式   - packet_cycle : 包周期   - on_demand : 按需
    * isAutoRenew  是否自动续费
    * versionInfo  版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'isAutoRenew' => 'is_auto_renew',
            'versionInfo' => 'version_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  计费模式   - packet_cycle : 包周期   - on_demand : 按需
    * isAutoRenew  是否自动续费
    * versionInfo  版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'isAutoRenew' => 'setIsAutoRenew',
            'versionInfo' => 'setVersionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  计费模式   - packet_cycle : 包周期   - on_demand : 按需
    * isAutoRenew  是否自动续费
    * versionInfo  版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'isAutoRenew' => 'getIsAutoRenew',
            'versionInfo' => 'getVersionInfo'
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['versionInfo'] = isset($data['versionInfo']) ? $data['versionInfo'] : null;
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
    * Gets chargingMode
    *  计费模式   - packet_cycle : 包周期   - on_demand : 按需
    *
    * @return object|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param object|null $chargingMode 计费模式   - packet_cycle : 包周期   - on_demand : 按需
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew 是否自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets versionInfo
    *  版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @return map[string,\HuaweiCloud\SDK\Hss\V5\Model\ShowPeriodResponseInfo[]]|null
    */
    public function getVersionInfo()
    {
        return $this->container['versionInfo'];
    }

    /**
    * Sets versionInfo
    *
    * @param map[string,\HuaweiCloud\SDK\Hss\V5\Model\ShowPeriodResponseInfo[]]|null $versionInfo 版本信息,key对应的值为主机开通的版本，包含如下6种输入：   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @return $this
    */
    public function setVersionInfo($versionInfo)
    {
        $this->container['versionInfo'] = $versionInfo;
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

