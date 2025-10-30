<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyLoginWhiteIpRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyLoginWhiteIpRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    * whiteIp  **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostIdList  **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'whiteIp' => 'string',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    * whiteIp  **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostIdList  **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'whiteIp' => null,
        'hostIdList' => null
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
    * enabled  **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    * whiteIp  **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostIdList  **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'whiteIp' => 'white_ip',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    * whiteIp  **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostIdList  **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'whiteIp' => 'setWhiteIp',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    * whiteIp  **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostIdList  **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'whiteIp' => 'getWhiteIp',
            'hostIdList' => 'getHostIdList'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['whiteIp'] = isset($data['whiteIp']) ? $data['whiteIp'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['whiteIp'] === null) {
            $invalidProperties[] = "'whiteIp' can't be null";
        }
            if ((mb_strlen($this->container['whiteIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'whiteIp', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['whiteIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'whiteIp', the character length must be bigger than or equal to 1.";
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
    * Gets enabled
    *  **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**： 白名单启用状态 **约束限制**： 不涉及 **取值范围**： - true：已启用 - false：已禁用  **默认取值**： false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets whiteIp
    *  **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getWhiteIp()
    {
        return $this->container['whiteIp'];
    }

    /**
    * Sets whiteIp
    *
    * @param string $whiteIp **参数解释**： 白名单IP或IP网段，IP网段由IP地址和掩码组成，以“/”连接，单一账号最多可添加10个SSH登录IP白名单。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setWhiteIp($whiteIp)
    {
        $this->container['whiteIp'] = $whiteIp;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**： 服务器列表，不可为NULL，删除白名单IP或IP网段时，需要将服务器ID列表置为空列表[]。 **约束限制**： 不可为NULL **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

