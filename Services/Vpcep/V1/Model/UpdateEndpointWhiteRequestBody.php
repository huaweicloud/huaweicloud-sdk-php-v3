<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEndpointWhiteRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEndpointWhiteRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * whitelist  更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'whitelist' => 'string[]',
            'enableWhitelist' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * whitelist  更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'whitelist' => null,
        'enableWhitelist' => null
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
    * whitelist  更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'whitelist' => 'whitelist',
            'enableWhitelist' => 'enable_whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * whitelist  更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'whitelist' => 'setWhitelist',
            'enableWhitelist' => 'setEnableWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * whitelist  更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'whitelist' => 'getWhitelist',
            'enableWhitelist' => 'getEnableWhitelist'
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
        $this->container['whitelist'] = isset($data['whitelist']) ? $data['whitelist'] : null;
        $this->container['enableWhitelist'] = isset($data['enableWhitelist']) ? $data['enableWhitelist'] : null;
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
    * Gets whitelist
    *  更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    *
    * @return string[]|null
    */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
    * Sets whitelist
    *
    * @param string[]|null $whitelist 更新或删除用于控制访问终端节点的白名单。此参数可以添加IPv4或CIDR：  - 当取值不为空时，表示将白名单更新为取值所示内容。  - 当取值为空时，表示删除所有白名单。 默认为空列表。
    *
    * @return $this
    */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;
        return $this;
    }

    /**
    * Gets enableWhitelist
    *  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @return bool|null
    */
    public function getEnableWhitelist()
    {
        return $this->container['enableWhitelist'];
    }

    /**
    * Sets enableWhitelist
    *
    * @param bool|null $enableWhitelist 是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 默认值为false。
    *
    * @return $this
    */
    public function setEnableWhitelist($enableWhitelist)
    {
        $this->container['enableWhitelist'] = $enableWhitelist;
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

