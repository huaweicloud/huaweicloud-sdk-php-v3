<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchAppWhitelistPolicyHostRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchAppWhitelistPolicyHostRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableAppWhitelist  是否开启/关闭白名单策略防护
    * policyInfoList  策略关联主机列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableAppWhitelist' => 'bool',
            'policyInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\AppPolicyInfoList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableAppWhitelist  是否开启/关闭白名单策略防护
    * policyInfoList  策略关联主机列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableAppWhitelist' => null,
        'policyInfoList' => null
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
    * enableAppWhitelist  是否开启/关闭白名单策略防护
    * policyInfoList  策略关联主机列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableAppWhitelist' => 'enable_app_whitelist',
            'policyInfoList' => 'policy_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableAppWhitelist  是否开启/关闭白名单策略防护
    * policyInfoList  策略关联主机列表
    *
    * @var string[]
    */
    protected static $setters = [
            'enableAppWhitelist' => 'setEnableAppWhitelist',
            'policyInfoList' => 'setPolicyInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableAppWhitelist  是否开启/关闭白名单策略防护
    * policyInfoList  策略关联主机列表
    *
    * @var string[]
    */
    protected static $getters = [
            'enableAppWhitelist' => 'getEnableAppWhitelist',
            'policyInfoList' => 'getPolicyInfoList'
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
        $this->container['enableAppWhitelist'] = isset($data['enableAppWhitelist']) ? $data['enableAppWhitelist'] : null;
        $this->container['policyInfoList'] = isset($data['policyInfoList']) ? $data['policyInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableAppWhitelist'] === null) {
            $invalidProperties[] = "'enableAppWhitelist' can't be null";
        }
        if ($this->container['policyInfoList'] === null) {
            $invalidProperties[] = "'policyInfoList' can't be null";
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
    * Gets enableAppWhitelist
    *  是否开启/关闭白名单策略防护
    *
    * @return bool
    */
    public function getEnableAppWhitelist()
    {
        return $this->container['enableAppWhitelist'];
    }

    /**
    * Sets enableAppWhitelist
    *
    * @param bool $enableAppWhitelist 是否开启/关闭白名单策略防护
    *
    * @return $this
    */
    public function setEnableAppWhitelist($enableAppWhitelist)
    {
        $this->container['enableAppWhitelist'] = $enableAppWhitelist;
        return $this;
    }

    /**
    * Gets policyInfoList
    *  策略关联主机列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AppPolicyInfoList[]
    */
    public function getPolicyInfoList()
    {
        return $this->container['policyInfoList'];
    }

    /**
    * Sets policyInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AppPolicyInfoList[] $policyInfoList 策略关联主机列表
    *
    * @return $this
    */
    public function setPolicyInfoList($policyInfoList)
    {
        $this->container['policyInfoList'] = $policyInfoList;
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

